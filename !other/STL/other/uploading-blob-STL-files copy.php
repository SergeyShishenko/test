<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла STL</title>
</head>
<body>
<br>
    <input type="file" id="video-url-example">
    <br>



    <br>
    <div id="video-information" style="width: 50%"></div>
    <div id="chunk-information" style="width: 50%"></div> 

    <script>
    // Далее на странице находится раздел сценария - и вот где тяжелая атлетика будет происходить.
        const input = document.querySelector('#video-url-example');
    //   const url ="https://sandbox.api.video/upload?token=to1R5LOYV0091XN3GQva27OS";
        const url ="uploadBlobSTL.php"
        var chunkCounter = 0;
      //break into 1 MB chunks for demo purposes
         var chunkSize = 84;  
         var sessId = "";
        var playerUrl = "";

// Далее мы создаем EventListener на входе - когда файл добавляется, разделить файл и начать процесс загрузки:
      input.addEventListener('change', () => {
        const file = input.files[0];

        // var numberofChunks = Math.ceil(file.size/chunkSize);
        var numberofChunks = (file.size-84)/50+1;
        document.getElementById("video-information").innerHTML = "Будет загруженно " + numberofChunks + " кусков из "+file.size
        var start =0; 
        var chunkEnd = start + chunkSize;
        //upload the first chunk to get the sessId
        createChunk(sessId, start,84);
        // var chunkSize = 50;
    //   });
        // Теперь мы называем функцию createChunk.
        function createChunk(sessId, start,end){
            chunkCounter++;
            console.log("Создан кусок: ", chunkCounter);
            chunkEnd = Math.min(start + chunkSize , file.size );
            chunkSize = 50;
            const chunk = file.slice(start, end);
            console.log("Создан кусок файла " + start + "-" + chunkEnd + " минус 1    ");
            const chunkForm = new FormData();
            // if(sessId.length >0){
            //     //we have a sessId
            //     chunkForm.append('sessId', sessId);
            //     console.log("added sessId");   

            // }
            chunkForm.append('file', chunk);
            console.log("Кусок добавлен");


            //created the chunk, now upload iit
            uploadChunk(chunkForm, start, chunkEnd);
            // chunkSize=50;
        }
        
// Загрузка куска

            function uploadChunk(chunkForm, start, chunkEnd){
            var oReq = new XMLHttpRequest();
            oReq.upload.addEventListener("progress", updateProgress);   
            oReq.open("POST", url, true);
            var blobEnd = chunkEnd-1;
            var contentRange = "байтов "+ start+" - "+ blobEnd+"/"+file.size;


                    // загрузить обновления прогресса
                    function updateProgress (oEvent) {
                        if (oEvent.lengthComputable) {  
                        var percentComplete = Math.round(oEvent.loaded / oEvent.total * 100);

                        var totalPercentComplete = Math.round((chunkCounter -1)/numberofChunks*100 +percentComplete/numberofChunks);
                        document.getElementById("chunk-information").innerHTML = "Кусок # " + chunkCounter + " - " + percentComplete + "% закачанный. Всего загружено: " + totalPercentComplete +"%";
                    //  console.log (percentComplete);
                        // ...
                    } else {
                        console.log ("не совместимо");
                        // Unable to compute progress information since the total size is unknown
                    }
                    }

            // Как только кусок полностью загружен, мы запускаем следующий код (в случае загрузки).
            oReq.onload = function (oEvent) {
                           // Uploaded.
                            console.log("загруженный кусок" );
                            console.log("oReq.response", oReq.response);
                            var resp = JSON.parse(oReq.response)
                            sessId = resp.sessId;
                           
                            console.log("sessId",sessId);

                            start += 50; 
                            
                           
                            if(start<file.size){
                                //create the new chunk
                                createChunk(sessId, start, 50);
                            }
                            else{
                         
                                // console.log("all uploaded! Watch here: ",playerUrl ) ;
                                // document.getElementById("video-information").innerHTML = "all uploaded! Watch the video <a href=\'" + playerUrl +"\' target=\'_blank\'>here</a>" ;
                                document.getElementById("video-information").innerHTML = "Всё загруженно!" ;
                            }

              };

              oReq.send(chunkForm);}
});
</script>
</body>
</html>
<!--https://dev.to/api_video/uploading-large-files-with-javascript-o4i-->