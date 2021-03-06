<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Админ панель 500СТП</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template."> -->
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    <!-- <link href='css/pages.css' rel='stylesheet'> -->

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <style>
        /* /pages-213/demo/html/tabs_accordian.html */
        .nav-tabs.nav-tabs-left {
            float: left;
            padding-right: 0;
        }
        /* .nav-tabs-simple > li.active a, .nav-tabs-simple > li.active a:hover, .nav-tabs-simple > li.active a:focus {
            background-color: transparent;
            border-color: transparent;
        } */

        .nav-tabs-simple {
            border-bottom: 0px;
        }
                .nav-tabs.nav-tabs-left > li, .nav-tabs.nav-tabs-right > li {
            float: none;
        }

        .nav-tabs > li {
            padding-left: 0;
            padding-right: 0;
        }
        .nav-tabs-simple.nav-tabs-left > li:after {
            right: 0;
        }

        .nav-tabs-simple.nav-tabs-left > li.active:after,
         .nav-tabs-simple.nav-tabs-right > li.active:after,
         .nav-tabs-simple.nav-tabs-left > li:hover:after,
          .nav-tabs-simple.nav-tabs-right > li:hover:after
           {
            width: 3px;
        }

        .nav-tabs-simple.nav-tabs-left > li:after, .nav-tabs-simple.nav-tabs-right > li:after {
            width: 0px;
            height: 100%;
            top: 0;
            bottom: 0;
            position: absolute;
        }
        .nav-tabs-simple > li:after {
            -webkit-transition: all 0.1s linear 0s;
            transition: all 0.1s linear 0s;
            -webkit-backface-visibility: hidden;
            width: 100%;
            display: block;
            background-color: #f55753;
            height: 0px;
            content: '';
            z-index: 125;
        }
        .nav-tabs-simple.nav-tabs-left > li:after {
            right: 0;
        }
        .nav-tabs.nav-tabs-left ~ .tab-content {
            border-left: 1px solid rgba(0, 0, 0, 0.1);
        }
        .nav-tabs ~ .tab-content {
            overflow: hidden;
            padding: 15px;
            margin-left: -15px;
            margin-right: -15px;
        }
        .box-content .nav-tabs {
            margin-right: 0px;
            margin-left: 0px
        }
                a, a:focus, a:hover, a:active {
            outline: 0 !important;
            text-decoration: none;
        }
       
        .panelTab{border: 1px solid #dddddd;}

        .panel {
     margin-bottom: 0; 
    /* background-color: #ffffff; */
     border: none; 
     /* border-radius: 4px;  */
     -webkit-box-shadow: none; 
     box-shadow: none; 
}
ul.thumbnails.gallery{padding-left:0px;
    margin-left: -15px;
    }
.row {

margin-left: 0;
margin-right: 0;

}
.nav-tabs > li > a {
   
   max-width: 200px;
   height: 76px;
}
/* .ch-container{min-height:768px;} */

    </style>
<style>
.tab-controls {
    position: absolute;
    z-index: 1;
    margin-top: 0px;
    /* height: 1px; */
    /* min-height: 1px; */
    /* padding: 0 7.5px; */
    /* padding: 0 ; */
    /* right:0; */
}

 .tab-controls p {
    display: block;
    /* margin: auto; */
    /* width: 100%; */
}
.tab-controls a.btn{
    padding: 0 ;
}

.nav-tabs-simple > li.active a, .nav-tabs-simple > li.active a:hover, .nav-tabs-simple > li.active a:focus  {
    color: #555555;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    /* border-bottom-color: transparent; */
    cursor: default;
    border-radius: 4px 0 0 4px  ;
}
/* юnav-tabs-simple > li a {border-left-color:} */
</style>
<style>
.box-content:not(.pane) {
    display:none;
}

.navbar-brand { width: 200px;letter-spacing: 0px;}
.thumbnail p{
    margin:0;
    font-size: 10px;
    width: 100px;
    /* height:14.28px; */
    white-space: nowrap; /* Запрещаем перенос строк */
    overflow: hidden; 
    text-overflow: ellipsis;
    }

</style>
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Админ 500СТП</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> админ</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Профиль</a></li>
                    <li class="divider"></li>
                    <li><a href="login.php">Выйти</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Изменить тему / Фон</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="http://localhost/"><i class="glyphicon glyphicon-globe"></i> Перейти на сайт</a></li>
                <!-- <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li> -->
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Поиск" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <!-- <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="ui.php"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                        </li>
                        <li><a class="ajax-link" href="form.php"><i
                                    class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                        <li><a class="ajax-link" href="chart.php"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.php"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a class="ajax-link" href="gallery.php"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="table.php"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="calendar.php"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="ajax-link" href="grid.php"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="tour.php"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                        <li><a class="ajax-link" href="icon.php"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="error.php"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="login.php"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div> -->
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-12 col-sm-12">
            <!-- content starts -->
            <?php } ?>
