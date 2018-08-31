<?php require('header.php'); ?>
<!-- <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div> -->


<!-- ПРОБА -->
<article>

    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> РАЗДЕЛ 1 - ДЕТАЛИ</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default" title="РЕДАКТИРОВАТЬ"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-down"></i></a>  
                    <a href="#" class="btn btn-close btn-round btn-default" title="ДОБАВИТЬ РАЗДЕЛ"><i class="glyphicon glyphicon-plus-sign"></i></a>
                </div>
            </div>

            <div class="box-content">
                <div>
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">  
                        <div class="panel-body no-padding">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- <h5 class="semi-bold">Добавить категорию</h5>  -->
                                    <div class="box-icon">
                                        <a href="#" class="btn btn-setting btn-round btn-default" title="ДОБАВИТЬ КАТЕГОРИЮ"><i
                                                class="glyphicon glyphicon-plus-sign"></i></a>
                                    </div>
                                    <div class="panel panel-transparent ">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                            <li class="active">
                                                <a data-toggle="tab" href="#tab-fillup11"><span>Профили гладкие</span></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab-fillup21"><span>Категория 2</span></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab-fillup31"><span>САНитарно-эпидемиологические
                                                        Правила И Нормативы</span></a>
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
                                                                                <a data-toggle="tab" href="#tab3hellowWorld22">Под
                                                                                    ротанговую сетку</a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="#tab3FollowUs22">Группа
                                                                                    2</a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-toggle="tab" href="#tab3Inspire32">ПОРОГИ
                                                                                    АВТОМАТИЧЕСКИЕ для ПОЛОТЕН ДВЕРНЫХ</a>
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
                                                                                    “ Nothing is <span class="semi-bold">impossible</span>,
                                                                                    the word
                                                                                    itself says 'I'm <span class="semi-bold">possible</span>'!
                                                                                    ”
                                                                                </h3>
                                                                                <p>
                                                                                    A style represents visual
                                                                                    customizations on top of a layout.
                                                                                    By editing a style, you can use
                                                                                    Squarespace's visual interface to
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
                                                            <span class="semi-bold">impossible</span>, the word itself
                                                            says 'I'm
                                                            <span class="semi-bold">possible</span>'! ”</h3>
                                                        <p>A style represents visual customizations on top of a layout.
                                                            By editing a style, you can use Squarespace's visual
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
                                                        <p>Instantly connect to what's most important to you. Follow
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



</article>

<script>
       $('ul.nav-tabs li').hover(function () {
        // $('a', this).fadeToggle(1000);
        // $(this).find('.gallery-controls').remove();
        $(this).append('<div class=" tab-controls">' + '<p><a href="#" class="gallery-edit btn" ><i class="glyphicon glyphicon-edit"></i></a></p>' +  '</div>');
        $(this).find('.tab-controls').stop().animate({'margin-top': '-15'}, 400);
    }, function () {
        // $('a', this).fadeToggle(1000);
        $(this).find('.tab-controls').stop().animate({'margin-top': '0'}, 200, function () {  $(this).remove();   });
    });
</script>

   

<?php require('footer.php'); ?>
