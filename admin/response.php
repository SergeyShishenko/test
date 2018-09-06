<?php
//подключаем конфигурационный файл бд
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/DATA/TABLES/configDB.php'); 

$dbconn=dbconnect();
//проверяем $_POST["content_txt"] на пустое значение
if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0)
{

    // очищаем значение переменной, PHP фильтры FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH
    // (Удаляют тэги, при необходимости удаляет или кодирует специальные символы)

    $contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING);

    // Insert sanitize string in record
    if(mysqli_query($dbconn,"INSERT INTO head(name_head) VALUES('".$contentToSave."')"))
    {
        //Record is successfully inserted, respond to ajax request
        $head_id = mysqli_insert_id($dbconn); //Get ID of last inserted record from MySQL
        
  ?>
        <!-- //    <div id="item_'.$head_id.'">
        //    <div class="del_wrapper"><a href="#" class="del_button" id="del-'.$head_id.'">
        //    <img src="img/icon_del.gif" border="0" />
        //    </a></div>'.$contentToSave.'</div> -->
          
    <div class="box col-md-12" id="head_<?php echo $head_id ?>">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> <?php echo $contentToSave ?></h2>
                <div class="box-icon" >
                    <a href="#" class="btn btn-setting btn-round btn-default del_button"title="РЕДАКТИРОВАТЬ" id="del-'.$head_id.'"><i class="glyphicon glyphicon-edit" ></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>  
                    <!-- <a href="#" class="btn btn-close btn-round btn-default" title="ДОБАВИТЬ РАЗДЕЛ"><i class="glyphicon glyphicon-plus-sign"></i></a> -->
                </div>
            </div>

            <div  class="box-content">
                <div>
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">  
                        <div class="panel-body no-padding">
                            <div class="row">
                                <div class="col-sm-12">                                   
                                    <div class="box-icon">
                                        <a href="#" class="btn btn-setting btn-round btn-default" title="ДОБАВИТЬ КАТЕГОРИЮ"><i
                                                class="glyphicon glyphicon-plus-sign"></i></a>
                                    </div>
                                    <div class="panel panel-transparent ">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                            <li class="active">
                                                <a data-toggle="tab" href="#tab-fillup11"><span>Категория 1</span></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab-fillup21"><span>Категория 2</span></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab-fillup31"><span>Категория 3</span></a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-fillup11">
                                                <div class="row column-seperation panelTab">
                                                    <div class="col-md-12">
                                                        <div class="panel-body no-padding">
                                                            <div class="row">
                                                                <div class="box-icon ">

                                                                    <a href="#" class="btn btn-setting btn-round btn-default "
                                                                        title="ДОБАВИТЬ ГРУППУ"><i class="glyphicon glyphicon-plus-sign"></i></a>
                                                                </div>
                                                                <div class="col-lg-12 ">

                                                                    <div class="panel panel-transparent ">

                                                                        <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left bg-white"
                                                                            id="tab-3">
                                                                            <li class="active">
                                                                                <a data-toggle="tab" href="#tab3hellowWorld22">Группа 1</a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="#tab3FollowUs22">Группа 2</a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="#tab3Inspire32">Группа 3</a>
                                                                            </li>

                                                                        </ul>
                                                                        <div class="tab-content bg-white">
                                                                            <div class="tab-pane" id="tab3hellowWorld22">
                                                                                <div class="row column-seperation">
                                                                                    <div class="col-md-6">
                                                                                        <h3>
                                                                                            <span class="semi-bold">Sometimes
                                                                                            </span>Small things in life
                                                                                            means the most
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h3 class="semi-bold">
                                                                                            great tabs
                                                                                        </h3>
                                                                                        <p>Native boostrap tabs
                                                                                            customized to Pages look
                                                                                            and feel, simply changing
                                                                                            class name you can change
                                                                                            color as well as its
                                                                                            animations</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane active" id="tab3FollowUs22">
                                                                                <h3>
                                                                                    Nothing is 
                                                                                    
                                                                                </h3>
                                                                                <p>
                                                                                    A style represents visual
                                                                                    customizations on top of a layout.
                                                                                    By editing a style, you can use
                                                                                    Squarespaces visual interface to
                                                                                    customize your...
                                                                                </p>
                                                                                <br>
                                                                                <p class="pull-right">
                                                                                    <button class="btn btn-default btn-cons"
                                                                                        type="button">White</button>
                                                                                    <button class="btn btn-success btn-cons"
                                                                                        type="button">Success</button>
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="tab3Inspire32">
                                                                                <div class="box-content pane">

                                                                                    <ul class="thumbnails gallery">
                                                                                        <?php for ($i = 1; $i <= 24; $i++) { ?>
                                                                                        <li id="image-<?php echo $i ?>"
                                                                                            class="thumbnail">
                                                                                            <p class="">Конструкции width: 100px;</p>
                                                                                            <a style="background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/<?php echo $i ?>.jpg)"
                                                                                                title="Sample Image <?php echo $i ?>"
                                                                                                href="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/<?php echo $i ?>.jpg"><img
                                                                                                    class="grayscale"
                                                                                                    src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/<?php echo $i ?>.jpg"
                                                                                                    alt="Sample Image <?php echo $i ?>"></a>
                                                                                        </li>
                                                                                        <?php } ?>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-fillup21">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>“ Nothing is
                                                            </h3>
                                                        <p>A style represents visual customizations on top of a layout.
                                                            By editing a style, you can use Squarespaces visual
                                                            interface to customize your...</p>
                                                        <br>
                                                        <p class="pull-right">
                                                            <button type="button" class="btn btn-default btn-cons">White</button>
                                                            <button type="button" class="btn btn-success btn-cons">Success</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-fillup31">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Follow us &amp; get updated!</h3>
                                                        <p>Instantly connect to whats most important to you. Follow
                                                            your friends, experts, favorite celebrities, and breaking
                                                            news.</p>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END PANEL -->

                </div>
            </div>
        </div>
    </div>
    
    <!-- END box col-md-12 -->

<?php        
        mysqli_close($dbconn);

    }else{
        //вывод ошибки

        //header('HTTP/1.1 500 '.mysql_error());
        header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
        exit();
    }

}
elseif(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{//do we have a delete request? $_POST["recordToDelete"]

    // очищаем значение переменной, PHP фильтр FILTER_SANITIZE_NUMBER_INT
    // Удаляет все символы, кроме цифр и знаков плюса и минуса

    $idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT);

    //try deleting record using the record ID we received from POST
    if(!mysqli_query($dbconn,"DELETE FROM head WHERE id=".$idToDelete))
    {
        //If mysql delete record was unsuccessful, output error
        header('HTTP/1.1 500 Could not delete record!');
        exit();
    }
    mysqli_close($dbconn);

}
else{

    //Output error
    header('HTTP/1.1 500 Error occurred, Could not process request!');
    exit();
}
?>