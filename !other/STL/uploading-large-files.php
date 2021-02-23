<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка больших файлов</title>
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
      const url ="https://sandbox.api.video/upload?token=to1R5LOYV0091XN3GQva27OS";
      var chunkCounter;
      //break into 1 MB chunks for demo purposes
      const chunkSize = 1000000;  
      var videoId = "";
      var playerUrl = "";

// Далее мы создаем EventListener на входе - когда файл добавляется, разделить файл и начать процесс загрузки:
      input.addEventListener('change', () => {
        const file = input.files[0];
        var numberofChunks = Math.ceil(file.size/chunkSize);
        document.getElementById("video-information").innerHTML = "There will be " + numberofChunks + " chunks uploaded."
        var start =0; 
        var chunkEnd = start + chunkSize;
        //upload the first chunk to get the videoId
        createChunk(videoId, start);

        // Теперь мы называем функцию createChunk.
        function createChunk(videoId, start, end){
            chunkCounter++;
            console.log("created chunk: ", chunkCounter);
            chunkEnd = Math.min(start + chunkSize , file.size );
            const chunk = file.slice(start, chunkEnd);
            console.log("i created a chunk of video" + start + "-" + chunkEnd + "minus 1    ");
            const chunkForm = new FormData();
            if(videoId.length >0){
                //we have a videoId
                chunkForm.append('videoId', videoId);
                console.log("added videoId");   

            }
            chunkForm.append('file', chunk);
            console.log("added file");


            //created the chunk, now upload iit
            uploadChunk(chunkForm, start, chunkEnd);
        }
// Загрузка куска
// Давайте пройдитесь по функции uploadChunk:
function uploadChunk(chunkForm, start, chunkEnd){
            var oReq = new XMLHttpRequest();
            oReq.upload.addEventListener("progress", updateProgress);   
            oReq.open("POST", url, true);
            var blobEnd = chunkEnd-1;
            var contentRange = "bytes "+ start+"-"+ blobEnd+"/"+file.size;
            oReq.setRequestHeader("Content-Range",contentRange);
            console.log("Content-Range", contentRange);

            // Заголовок будет выглядеть так:
            // Content-Range: bytes 0-999999/4582884

            // загрузить обновления прогресса
            function updateProgress (oEvent) {
                if (oEvent.lengthComputable) {  
                var percentComplete = Math.round(oEvent.loaded / oEvent.total * 100);

                var totalPercentComplete = Math.round((chunkCounter -1)/numberofChunks*100 +percentComplete/numberofChunks);
                document.getElementById("chunk-information").innerHTML = "Chunk # " + chunkCounter + " is " + percentComplete + "% uploaded. Total uploaded: " + totalPercentComplete +"%";
            //  console.log (percentComplete);
                // ...
              } else {
                  console.log ("not computable");
                // Unable to compute progress information since the total size is unknown
              }
            }

            // Как только кусок полностью загружен, мы запускаем следующий код (в случае загрузки).
            oReq.onload = function (oEvent) {
                           // Uploaded.
                            console.log("uploaded chunk" );
                            console.log("oReq.response", oReq.response);
                            var resp = JSON.parse(oReq.response)
                            videoId = resp.videoId;
                            //playerUrl = resp.assets.player;
                            console.log("videoId",videoId);

                            //now we have the video ID - loop through and add the remaining chunks
                            //we start one chunk in, as we have uploaded the first one.
                            //next chunk starts at + chunkSize from start
                            start += chunkSize; 
                            //if start is smaller than file size - we have more to still upload
                            if(start<file.size){
                                //create the new chunk
                                createChunk(videoId, start);
                            }
                            else{
                                //the video is fully uploaded. there will now be a url in the response
                                playerUrl = resp.assets.player;
                                console.log("all uploaded! Watch here: ",playerUrl ) ;
                                document.getElementById("video-information").innerHTML = "all uploaded! Watch the video <a href=\'" + playerUrl +"\' target=\'_blank\'>here</a>" ;
                            }

              };
              oReq.send(chunkForm);

      </script>
</body>
</html>
<!--https://dev.to/api_video/uploading-large-files-with-javascript-o4i-->