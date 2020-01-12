</head>
<body>
<?php 
$cart=false; // корзина
include 'inc/inc-header.php';
?>   
<!-- .modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="image-gallery">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                    <i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" class="btn btn-secondary float-right" id="show-next-image">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<?php
include 'inc/inc-personal-profile.php';
include 'inc/inc-header-send-modal.php';
include 'inc/inc-func.php';


