var greyProgress = document.getElementById("greyProgress");
const input = document.querySelector('#inputSTL');
var elem = document.getElementById("greenBar");
var respinfo = document.getElementById("response-information");
var info1 = document.getElementById("information1");
var info3 = document.getElementById("info3");

const url = "uploadBlobSTL.php"
// const url = "uploadBlobSTLwrite.php"
var chunkCounter = 0;
var totalArea;
var dbFront, dbBack, dbTop, dbBottom, dbLeft, dbRight, dbGeneral;

//break into 1 MB chunks for demo purposes
var chunkSize = 84;
var sessId = "";
// var playerUrl = "";
var file;
var numberofChunks;
var start = 0;
let dend, dstart;
const chunkSize50 = 50000000 / 2;
const chunkSize84 = chunkSize50 - 84;
var dataArray = [];
var accuracy=5;

// input.addEventListener('change', () => {
//     handleFiles(input.files);
// });

// Теперь мы называем функцию createChunk.
function createChunk() {
    chunkCounter++;
    console.log("Часть: ", chunkCounter);
    chunkEnd = Math.min(start + chunkSize, file.size);

    var chunk = file.slice(start, chunkEnd);
    // console.log("Создан часть файла " + start + "-" + chunkEnd + " минус 1    ");
    var chunkForm = new FormData();
    // if(sessId.length >0){
    //     //we have a sessId
    //     chunkForm.append('sessId', sessId);
    //     console.log("added sessId");   

    // }
    chunkForm.append('file', chunk);
    chunkForm.append('fname', file.name);
    chunkForm.append('accuracy', accuracy);
    // console.log(file.name);
    // console.log("часть добавлен");
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
            document.getElementById("chunk-information").innerHTML = "Загрузка части #" + chunkCounter + ": " +
                percentComplete + "%. /&#160;"+ numberofChunks ;
            // "Загружено: " + totalPercentComplete + "%";
            Pssbar(totalPercentComplete);

        } else {
            console.log("не совместимо");
            // Unable to compute progress information since the total size is unknown
        }

    }

    // Как только часть полностью загружен, мы запускаем следующий код (в случае загрузки).
    oReq.onload = function(oEvent) {
        // Uploaded.
        // console.log("загруженная часть");
        console.log("oReq.response", oReq.response);
        var resp = JSON.parse(oReq.response)
        sessId = resp.sessId;
        // div.insertAdjacentHTML('afterend', '<li>Пока</p>');   
        if (resp.hasOwnProperty('totalarea')) {
            totalArea += resp.totalarea;
            // respinfo.insertAdjacentHTML('beforeend',"Сумма площадей всех граней: " + parseFloat((resp.totalarea / 1000000).toFixed(3)) +" м&sup2<br>");
            respinfo.innerHTML = "Total: " + мsup2(totalArea) + " м&sup2<br>Размер: "+"<br>X:&#160;"+sizeX+"<br>Y:&#160;"+sizeY+"<br>Z:&#160;"+sizeZ;;
            dataArray.push(resp);

            dbFront += resp.Front;
            document.getElementById("Front").value = dbFront;
            document.getElementsByClassName('Front')[0].innerHTML = мsup2(dbFront);
            // console.log(resp.Back);
            dbBack += resp.Back;
            document.getElementById("Back").value = dbBack;
            document.getElementsByClassName('Back')[0].innerHTML = мsup2(dbBack);
            // console.log(resp.Top);
            dbTop += resp.Top;
            document.getElementById("Top").value = dbTop;
            document.getElementsByClassName('Top')[0].innerHTML = мsup2(dbTop);
            // console.log(resp.Bottom);
            dbBottom += resp.Bottom;
            document.getElementById("Bottom").value = dbBottom;
            document.getElementsByClassName('Bottom')[0].innerHTML = мsup2(dbBottom);
            // console.log(resp.Left);
            dbLeft += resp.Left;
            document.getElementById("Left").value = dbLeft;
            document.getElementsByClassName('Left')[0].innerHTML = мsup2(dbLeft);
            // console.log(resp.Right);
            dbRight += resp.Right;
            document.getElementById("Right").value = dbRight;
            document.getElementsByClassName('Right')[0].innerHTML = мsup2(dbRight);
            // console.log(resp.General);
            dbGeneral += resp.General;
            document.getElementById("General").value = dbGeneral;
            document.getElementsByClassName('General')[0].innerHTML = мsup2(dbGeneral);
            document.getElementById("rezultat").innerHTML = "Сумма площадей всех граней: " + мsup2(totalArea) +
                " м&sup2";


            // forEachm(resp, fcallback);
            // forEachm2(resp);
        } else {
            info1.insertAdjacentHTML('beforeend', "<wbr>Triangles:&#160;" + resp.head);
        }


        // console.log("sessId", sessId);

        start += chunkSize50;


        if (start < file.size) {
            //create the new chunk
            createChunk();
        } else {

             for (let i = 0; i < 1000; i++) {
                Math.sqrt(i);
            }
            dend = new Date();
            let duration = dend.getTime() - dstart.getTime();
            console.log(duration + ' ms');
            document.getElementById("chunk-information").innerHTML = "";
            // document.getElementById("information").innerHTML = "Всё загруженно! Прошло: " + msToTime(duration);
            document.getElementById("information").innerHTML = "Прошло: " + msToTime(
                duration);

                // inpElem.click();

            document.getElementById("rezultat").innerHTML = "Сумма площадей всех граней: " + мsup2(totalArea) +
                " м&sup2";
         

            // var t5 = document.forms.Sum.querySelectorAll('input[type="checkbox"][value="0"]');
            var t5 = document.forms.Sum.querySelectorAll('input[type="checkbox"]');
            // чтобы не было написано NaN, убираем в disabled пункты, где не прописаны значения
            for (var i = 0; i < t5.length; i++ ) 
            {

                if (t5[i].value == 0){
                    t5[i].disabled = true;
                }
                t5[i].checked = true;
            }
           
            greyProgress.classList.remove("meter"); // удалить класс 

            document.getElementById("greenBar").classList.add("ok"); // добавить класс 
            controls.autoRotate =false; 
            camera.position.y = 5;
            camera.position.x = -5;
            camera.position.z = 5;
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
    elem.innerHTML = pr * 1 + '%';
}



//// totalsum
var s1 = document.forms.Sum,
    d5 = s1.querySelectorAll('input[type="checkbox"]:not([value]), input[type="checkbox"][value=""]');
for (var i = 0; i < d5
    .length; i++) // чтобы не было написано NaN, убираем в disabled пункты, где не прописаны значения
{
    d5[i].disabled = true;
}
s1.onchange = function() { // начало работы функции сложения
    var n1 = s1.querySelectorAll('[type="checkbox"]'),
        itog = 0;
    for (var j = 0; j < n1.length; j++) {
        n1[j].checked ? itog += parseFloat(n1[j].value) : itog;
        document.getElementById('rezultat').innerHTML = 'Сумма площадей всех граней: ' + мsup2(itog) +
        " м&sup2";
    }

}

function мsup2(val) {
    return parseFloat((val / 1000000).toFixed(4));
}


// ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")

// Prevent default drag behaviors
;
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
    document.body.addEventListener(eventName, preventDefaults, false)
})

// Highlight drop area when item is dragged over it
;
['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false)
})

;
['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false)
})

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults(e) {
    e.preventDefault()
    e.stopPropagation()
}

function highlight(e) {
    dropArea.classList.add('highlight')
}

function unhighlight(e) {
    dropArea.classList.remove('active')
}

function handleDrop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    file = files[0];
    // handleFiles(files);
    loadSTL();
    handleFiles();
}

// function handleFiles(files) {
function handleFiles() {
    controls.autoRotate =true;

    greyProgress.classList.add("meter"); // добавить класс 
    document.getElementById("greenBar").classList.remove("ok");
    document.getElementById("information").innerHTML = "";
    respinfo.innerHTML = "";
    start = 0;
    chunkSize = 84;
    chunkCounter = 0;
    dstart = new Date();
    // file = input.files[0];
    // file = files[0];
    totalArea = 0;
    dataArray = [];
    dbFront = dbBack = dbTop = dbBottom = dbLeft = dbRight = dbGeneral = 0;
    document.getElementById("rezultat").innerHTML = "Сумма площадей всех граней: 0 м&sup2";
    var r1 = document.forms.Sum.querySelectorAll('[type="checkbox"]');
    for (var j = 0; j < r1.length; j++) {
        r1[j].value = 0;
        r1[j].disabled = false;
    }
    var c1 = document.forms.Sum.getElementsByClassName('checkmark');
    for (var j = 0; j < c1.length; j++) {
        c1[j].innerHTML = 0;

    }

    numberofChunks = Math.ceil((file.size - 84) / chunkSize50 + 1);
    info1.innerHTML = file.name + "<wbr>: " + file.size + "&#160;байт<wbr> ";
    // +"поделено на " +
    //     numberofChunks +
    //     " частей."

    var chunkEnd = start + chunkSize;

    createChunk();



}

var slider = document.getElementById("accuracy");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
    accuracy=5-this.value;
  }

  function Recalculate(){
    // alert(file.name);
    loadSTL();
    handleFiles();
  }

// var inpElem = document.body.children[0],
//     label = inpElem.nextElementSibling;
// inpElem.onclick = function() {
//     label.checked = true;
// };
// inpElem.click();