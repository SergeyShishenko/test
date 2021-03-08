UploadFile = function () {
    var size = file.size;

    var count = Math.round(size / chunkSize) + 1;

    var start = 0,
        end = chunkSize;
    while ((chunkNumber < count)) {

        chunk = file.slice(start, end);

        var data = new FormData();

        data.append('chunk', chunk);
        data.append('chunkNumber', chunkNumber);
        data.append('fileName', filename);
        data.append('userName', userName);
        data.append('hash', hash);

        $.ajax({
            url: partialUploadUrl,
            type: 'POST',

            cache: false,
            contentType: false,
            processData: false,
            data: data,

            success: function(response){
            },
        });
        ++chunkNumber;

        start = end;
        end = end + chunkSize;
    }

    UploadComplete(count);
}

UploadComplete = function (count) {
    $.ajax({
        url: uploadCompleteUrl,
        type: 'POST',
        data: {
            fileName: filename,
            chunksCount: count,
            userName: userName,
            hash: hash,
        },
        success: function (result) {
            console.log('combing succeeded');
        },
        error: function (response, status) {
            $.growl.error({ title: 'Ошибка', message: status });
        },
    });
};

