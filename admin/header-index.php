<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Админ панель 500СТП</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href='css/animate.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/shesterenka-admin.png">

    <style>
        .row {

            margin-left: 15px;
            margin-right: 15px;

        }

        .form-control-label {
            color: #317eac;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }


        /* высота  input*/


        .input-group {
            margin-bottom: 5px;
        }

        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child),
        .input-group .form-control:not(:first-child):not(:last-child) {

            height: 40px;
        }

        .input-group-addon:first-child {

            height: 40px;
        }

        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group {

            height: 40px;

        }

        /* убрать подсветку последнего select */
        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child),
        .input-group .form-control:not(:first-child):not(:last-child) {
            /* border-radius: 0px; */
            border-radius: 4px;
        }


        .file {
            width: 200px !important;
        }

        .cls {
            height: 38px !important;
            cursor: pointer;
        }
    </style>
</head>

<body>