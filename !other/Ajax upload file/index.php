<!-- !other\Ajax upload file\index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unload</title>
</head>
<body>
<input id="sortpicture" type="file" name="sortpic" />
<button id="upload">Upload</button>

<script src="../../dist/js/jquery.min.js"></script>
<script>
    $('#upload').on('click', function() {
    var file_data = $('#sortpicture').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    // alert(form_data);
    $.ajax({
                url: 'upload.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response){
                    // alert(php_script_response);
                    alert(php_script_response);
                }
     });
});
</script>
</body>
</html>