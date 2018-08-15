<?php
// inc-header-send-modal
 echo'   
 <!-- Modal -->
<div class="modal fade" id="mySendModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"> Отправка сообщения автору сайта</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="recall">
                    <div class="form-group">
                        <div>
                            <textarea id="message" class="form-control" style="width: 100%;" rows="5" name="message" placeholder="Введите сообщение"
                                required></textarea>
                                <br>
                                <label for="Email"  style=" margin-top: 20px;font-weight: normal;padding-left: 15px;font-size:14px;">Обратная связь (не обязательно) </label>
                                <input type="email" class="form-control" style="width: 100%;" id="Email" name="Email"  placeholder="Email">
                                <br>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submit" class="btn btn-primary " style="float:left;">Отправить</button>
                        <div style="float:left; padding: 6px;"></div>
                       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- /Modal -->
';?>
