<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
<?php } ?>
</div><!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

    <!-- Ad, you can remove it -->
    <!-- <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
           
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-5108790028230107"
                 data-ad-slot="3193373905"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="col-md-2 col-lg-3 col-sm-12 col-xs-12 email-subscription-footer">
            <div class="mc_embed_signup">
                <form action="//halalit.us3.list-manage.com/subscribe/post?u=444b176aa3c39f656c66381f6&amp;id=eeb0c04e84" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div>
                        <label>Keep up with my work</label>
                        <input type="email" value="" name="EMAIL" class="email" placeholder="Email address" required>

                        <div class="power_field"><input type="text" name="b_444b176aa3c39f656c66381f6_eeb0c04e84" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" class="button"></div>
                    </div>
                </form>
            </div> -->

            <!--End mc_embed_signup-->

                
        </div>

   <!-- </div>
     Ad ends -->

    <hr>
 <!-- .modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <!-- <p>Here settings can be configured...</p> -->
                    <!-- <input type="hidden" id="tbl" value=""> -->
                    <!-- <input type="hidden" id="field" value=""> -->
                    <!-- <input type="hidden" id="fieldid" value=""> -->
                    <input type="hidden" id="id" value="">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Имя:</label>
                        <input type="text" class="form-control" id="recipient-name"  required>
                        <ul class="list-tbl">
                                <!-- <li id="tb-head" class="active">
                                    <label for="recipient-href" class="form-control-label">Файл:</label>
                                    <input type="text" class="form-control" id="recipient-href"  required>
                                    <label for="recipient-order" class="form-control-label">Номер по порядку:</label>
                                    <input type="text" class="form-control" id="recipient-order"  required>
                                </li> -->
                                
                        </ul>
              
                     </div>
            <!-- <div class="form-group">
              <label for="message-text" class="form-control-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div> -->
          </form>
                </div>
                <div class="modal-footer">
                    <a href="#openModal">Открыть модальное окно</a>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Закрыть</a>
                    <a href="#" class="btn btn-primary " data-dismiss="modal" id="ChangeSubmit">Сохранить изменения</a>
                    <a href="#" class="btn btn-primary " data-dismiss="modal" id="AddSubmit">Добавить</a>
                </div>
            </div>
        </div>
    </div>
 <!-- /.modal -->

<!-- modal2 -->
 <div id="openModal" class="modalDialog">

    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>
        <p>Пример простого модального окна, которое может быть создано с использованием CSS3.</p>
        <p>Его можно использовать в широком диапазоне, начиная от вывода сообщений и заканчивая формой регистрации.</p>
    </div>

</div>
<!-- /modal2 -->

    <footer class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 copyright">
        <!-- <label>Добавить раздел</label> -->
                    <input type="text" value="" name="add_section" class="text" placeholder="Наименование раздела" id="contentText" required>                   
                    <!-- <input type="submit" value="Добавить раздел" name="write" class="button" id="FormSubmit0"> -->
                    <button type="submit" class="button animated tada" id="FormSubmit" >Добавить раздел  <span class="glyphicon glyphicon-plus-sign"></span>   </button>
                </div>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">
        &copy; <a href="#" >Сергей Шишенко</a> <?php echo date('Y') ?>
                </p>
    </footer>
<?php } ?>

<!--</div>/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<!-- <script src="bower_components/colorbox/jquery.colorbox-min.js"></script> -->
<script src="bower_components/colorbox/jquery.colorbox.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>



</body>
</html>
