<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла STL</title>
    <style>
    #greyProgress {
        /* width: 100%; */
        width: 30%;
        background-color: #ddd;
    }

    #greenBar {
        width: 10%;
        height: 30px;
        background-color: #4CAF50;
        text-align: center;
        line-height: 30px;
        color: white;
    }
    </style>
</head>

<body>

    
    <input type="file" id="video-url-example">
    <br>
<br>
    <div id="greyProgress">
        <div id="greenBar">0%</div>
    </div>
    <br>
    
    <div id="video-information1" style="width: 50%"></div>
    <div id="video-information" style="width: 50%"></div>
    <div id="chunk-information" style="width: 50%"></div>


    <script>
    // Далее на странице находится раздел сценария - и вот где тяжелая атлетика будет происходить.
    const input = document.querySelector('#video-url-example');
    var elem = document.getElementById("greenBar");

    // const url = "uploadBlobSTL.php"
    const url = "uploadBlobSTLwrite.php"
    var chunkCounter = 0;
    //break into 1 MB chunks for demo purposes
    var chunkSize = 84;
    var sessId = "";
    var playerUrl = "";
    var file;
    var numberofChunks;
    var start = 0;
    let dend, dstart;
    const chunkSize50 = 50000000/2;
    const chunkSize84 = chunkSize50 - 84;
    // Далее мы создаем EventListener на входе - когда файл добавляется, разделить файл и начать процесс загрузки:
    input.addEventListener('change', () => {
        dstart = new Date();
        file = input.files[0];

        // var numberofChunks = Math.ceil(file.size/chunkSize);
        numberofChunks = Math.ceil((file.size - 84) / chunkSize50 + 1);
        document.getElementById("video-information1").innerHTML = file.size + " байт поделено на " +
            numberofChunks +
            " куска."

        var chunkEnd = start + chunkSize;
        //upload the first chunk to get the sessId
        createChunk();
        // var chunkSize = 50;
        //   });

    });

    // Теперь мы называем функцию createChunk.
    function createChunk() {
        chunkCounter++;
        console.log("Создан кусок: ", chunkCounter);
        chunkEnd = Math.min(start + chunkSize, file.size);

        var chunk = file.slice(start, chunkEnd);
        console.log("Создан кусок файла " + start + "-" + chunkEnd + " минус 1    ");
        var chunkForm = new FormData();
        // if(sessId.length >0){
        //     //we have a sessId
        //     chunkForm.append('sessId', sessId);
        //     console.log("added sessId");   

        // }
        chunkForm.append('file', chunk);
        console.log("Кусок добавлен");
        chunkSize = chunkSize50;


        //created the chunk, now upload iit
        uploadChunk(chunkForm, chunkEnd);
        if (chunkEnd == 84) {
            start = chunkSize84 * (-1);
        }
        // chunkSize=50;
    }
    // Загрузка куска

    function uploadChunk(chunkForm, chunkEnd) {
        var oReq = new XMLHttpRequest();
        oReq.upload.addEventListener("progress", updateProgress);
        oReq.open("POST", url, true);
        var blobEnd = chunkEnd - 1;
        var contentRange = "байтов " + start + " - " + blobEnd + "/" + file.size;
        console.log(contentRange);

        // загрузить обновления прогресса
        function updateProgress(oEvent) {
            if (oEvent.lengthComputable) {
                var percentComplete = Math.round(oEvent.loaded / oEvent.total * 100);

                var totalPercentComplete = Math.round((chunkCounter - 1) / numberofChunks * 100 +
                    percentComplete / numberofChunks);
                // document.getElementById("chunk-information").innerHTML = "Кусок # " + chunkCounter + ". " +
                //     // percentComplete + "% закачан.
                //     "Загружено: " + totalPercentComplete + "%";
                    Pssbar(totalPercentComplete) ;

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

            console.log("sessId", sessId);

            start += chunkSize50;


            if (start < file.size) {
                //create the new chunk
                createChunk();
            } else {

                // console.log("all uploaded! Watch here: ",playerUrl ) ;
                // document.getElementById("video-information").innerHTML = "all uploaded! Watch the video <a href=\'" + playerUrl +"\' target=\'_blank\'>here</a>" ;
                for (let i = 0; i < 1000; i++) {
                    Math.sqrt(i);
                }
                dend = new Date();
                let duration = dend.getTime() - dstart.getTime();
                console.log(duration + ' ms');
                document.getElementById("video-information").innerHTML = "Всё загруженно! Прошло: " + msToTime(
                    duration);


            }

        };

        oReq.send(chunkForm);
    }
    // });

    function msToTime(duration) {
        var milliseconds = parseInt((duration % 1000) / 100),
            seconds = Math.floor((duration / 1000) % 60),
            minutes = Math.floor((duration / (1000 * 60)) % 60),
            hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        return hours + ":" + minutes + ":" + seconds + "." + milliseconds;
    }
    // console.log(msToTime(300000))

    // millisToMinutesAndSeconds(298999); // "4:59"
    // millisToMinutesAndSeconds(60999);  // "1:01"

    function Pssbar(pr) {
        elem.style.width = pr + '%'; 
        elem.innerHTML = pr * 1  + '%';
    }
    </script>
</body>

</html>
<!--https://dev.to/api_video/uploading-large-files-with-javascript-o4i-->