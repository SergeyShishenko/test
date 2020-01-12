</head>
<body>
<?php 
$cart=false; // корзина
include 'inc/inc-header.php';
?>
<!-- .modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                    
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  style="margin-top: -2px !important;">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>                
            </div>
            <div class="modal-body full-screen">
                    <!-- <p id="content"></p> -->
                <div id="im" data-dismiss="modal">
                    <!-- <img src="./dist/images/mdf-nakladka-051-dsh.png" alt=""class="img-thumbnail " > -->
                </div>
            </div>
            <!-- <div class="modal-footer">-->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>-->
                <!-- <a href="img.jpg" type="button" class="btn btn-primary"download="img.jpg">Save</a> -->
                <!-- </div>-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal --> 
<?php
include 'inc/inc-personal-profile.php';
include 'inc/inc-header-send-modal.php';
include 'inc/inc-func.php';


