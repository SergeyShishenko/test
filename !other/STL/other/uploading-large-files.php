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
    //   const url ="https://sandbox.api.video/upload?token=to1R5LOYV0091XN3GQva27OS";
    const url = "upload.php"
    var chunkCounter = 0;
    //break into 1 MB chunks for demo purposes
    const chunkSize = 100;
    var sessId = "";
    var playerUrl = "";

    // Далее мы создаем EventListener на входе - когда файл добавляется, разделить файл и начать процесс загрузки:
    input.addEventListener('change', () => {
        const file = input.files[0];

        var numberofChunks = Math.ceil(file.size / chunkSize);
        document.getElementById("video-information").innerHTML = "Будет загруженно " + numberofChunks +
            " кусков из " + file.size
        var start = 0;
        var chunkEnd = start + chunkSize;
        //upload the first chunk to get the sessId
        createChunk(sessId, start);
        //   });
        // Теперь мы называем функцию createChunk.
        function createChunk(sessId, start, end) {
            chunkCounter++;
            console.log("Создан кусок: ", chunkCounter);
            chunkEnd = Math.min(start + chunkSize, file.size);
            const chunk = file.slice(start, chunkEnd);
            console.log("Создан кусок файла" + start + "-" + chunkEnd + "минус 1    ");
            const chunkForm = new FormData();
            // if(sessId.length >0){
            //     //we have a sessId
            //     chunkForm.append('sessId', sessId);
            //     console.log("added sessId");   

            // }
            chunkForm.append('file', chunk);
            console.log("добавлен файл");


            //created the chunk, now upload iit
            uploadChunk(chunkForm, start, chunkEnd);
        }

        // Загрузка куска
        // Давайте пройдитесь по функции uploadChunk:
        function uploadChunk(chunkForm, start, chunkEnd) {
            var oReq = new XMLHttpRequest();
            oReq.upload.addEventListener("progress", updateProgress);
            oReq.open("POST", url, true);
            var blobEnd = chunkEnd - 1;
            var contentRange = "байтов " + start + "-" + blobEnd + "/" + file.size;
            // oReq.setRequestHeader("Content-Range",contentRange);
            // console.log("Content-Range", contentRange);
            // }
            // Заголовок будет выглядеть так:
            // Content-Range: bytes 0-999999/4582884

            // загрузить обновления прогресса
            function updateProgress(oEvent) {
                if (oEvent.lengthComputable) {
                    var percentComplete = Math.round(oEvent.loaded / oEvent.total * 100);

                    var totalPercentComplete = Math.round((chunkCounter - 1) / numberofChunks * 100 +
                        percentComplete / numberofChunks);
                    document.getElementById("chunk-information").innerHTML = "Кусок # " + chunkCounter +
                        " is " + percentComplete + "% закачанный. Всего загружено: " + totalPercentComplete +
                        "%";
                    //  console.log (percentComplete);
                    // ...
                } else {
                    console.log("не совместимо");
                    // Unable to compute progress information since the total size is unknown
                }
            }

            // Как только кусок полностью загружен, мы запускаем следующий код (в случае загрузки).
            oReq.onload = function(oEvent) {
                // Uploaded.
                console.log("загруженный кусок");
                console.log("oReq.response", oReq.response);
                var resp = JSON.parse(oReq.response)
                sessId = resp.sessId;
                //playerUrl = resp.assets.player;
                console.log("sessId", sessId);

                //now we have the video ID - loop through and add the remaining chunks
                //we start one chunk in, as we have uploaded the first one.
                //next chunk starts at + chunkSize from start
                start += chunkSize;
                //if start is smaller than file size - we have more to still upload
                if (start < file.size) {
                    //create the new chunk
                    createChunk(sessId, start);
                } else {
                    //the video is fully uploaded. there will now be a url in the response
                    // playerUrl = resp.assets.player;
                    console.log("all uploaded! Watch here: ", playerUrl);
                    document.getElementById("video-information").innerHTML =
                        "all uploaded! Watch the video <a href=\'" + playerUrl +
                        "\' target=\'_blank\'>here</a>";
                }

            };

            oReq.send(chunkForm);
        }


        function forEach(data, callback) {
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    callback(key, data[key]);
                }
            }
        }

        function fcallback(key, value) {
            if (key !== "totalsum") {
                document.write(key + ': ' +
                    "<br>" +
                    '..normal: ' +
                    value['normal'][0] + " " + value['normal'][1] + " " + value['normal'][2] + "<br>" +
                    '..колинеарно: ' + value['colinear'] + "<br>" +
                    '..соноправлен: ' + value['directional'] + "<br>" +
                    '..вершина1: ' +
                    value['vertex1'][0] + " " + value['vertex1'][1] + " " + value['vertex1'][2] + " <br>" +
                    '..вершина2: ' +
                    value['vertex2'][0] + " " + value['vertex2'][1] + " " + value['vertex2'][2] + " <br>" +
                    '..вершина3: ' +
                    value['vertex3'][0] + " " + value['vertex3'][1] + " " + value['vertex3'][2] + " <br>" +
                    '..площадь: ' + value['strain'] + " мм&sup2;<br>"
                );
            } else {
                document.write("<br>****<br>");
                document.write("Площадь поверхности: " + parseFloat((value / 1000000).toFixed(3)) + " м&sup2");
            }

        }


    });
    </script>
</body>

</html>
<!--https://dev.to/api_video/uploading-large-files-with-javascript-o4i-->