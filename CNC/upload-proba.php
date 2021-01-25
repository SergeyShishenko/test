<?php

$uploaddir = getcwd().DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;
$uploadfile = $uploaddir.basename($_FILES['file']['name']);


move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
echo "uploads ".var_dump($_FILES);

?>