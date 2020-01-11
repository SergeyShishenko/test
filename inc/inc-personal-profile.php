<?php
// inc\inc-personal-profile.php
 $info=true;// новые уведомления для профиля
 $info ? $class_info_alert="button_icon_alert": $class_info_alert="" ;
 ?>
<div  style="position:fixed; left:0; top:115px; " class="btn-side">
        <!-- Button trigger modal -->
        <div class="btn-group  ">
            <button type="button" class="btn btn-default  animated tada user-toggle "  aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user <?php echo $class_info_alert;?>" ></span>
            </button>
            <div class="profile"  style="position: absolute; transform: translate3d(45px, 0px, 0px); top: 0px; left: 0px; z-index: 1100; background-color: #ffffff;">
               
                <ul class="user ">
                    <li>Профиль<br><b><?php echo $_COOKIE['login']?></b></li>
                    <li class="divider"></li>
                    <li>
                        <div class="btn btn-default" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="glyphicon glyphicon-cog" ><span> Настройки</span></span>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                        </div>
                    </li>
                    <li>
                    <button type="button" class="btn btn-default "   title="Новости"  data-toggle="collapse" href="#collapseInfo" role="button" aria-expanded="false" aria-controls="collapseInfo">
                        <span class="glyphicon glyphicon-info-sign <?php echo $class_info_alert;?>" ><span> Информация</span></span>
                    </button>
                    <div class="collapse" id="collapseInfo">
                            <div class="divider"></div>
                            <div class="card card-body">
                                Появилась новая функция1!                                
                            </div>
                            <!-- <div class="gnc-notifications-item__menu ">
                                <div class="gnc-notifications-item__menu-kebab ">
                                    <svg width="24" height="24"><path d="M0 0h24v24H0z" fill="none">                                        
                                        </path><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                    </svg>
                                </div>
                                <div class="gnc-notifications-item__popup">
                                    <div class="gnc-notifications-item__popup-option "><span>Отметить прочитанным</span></div>
                                </div>
                            </div> -->
                            <div class="divider"></div>
                            <div class="card card-body">
                                Появилась новая функция2!
                            </div>
<!--  -->
<!-- <div class="gnc-notifications-item-wrapper service-ugc" data-id="ee5068cd-d0f5268b-f8781ab2-21cfe524"><div class="gnc-notifications-item gnc-notifications-item_is-viewed"><a class="gnc-notifications-item__link" href="https://yandex.ru/ugcpub/cabinet?utm_content=org_rating_followup&amp;ugc_id=bell_1567939426747_215752&amp;main_tab=reviews&amp;reviews_tab=org&amp;boostId=%2Fsprav%2F61216934718&amp;editBoostId=%2Fsprav%2F61216934718&amp;utm_source=bell" rel="noopener noreferrer" target="_blank"><div class="gnc-notifications-item__inner gnc-notifications-item__inner_desktop"><div class="gnc-notifications-item__avatar"><div class="gnc-avatar gnc-avatar__service-circle" style="position: relative; transform: none;"><img class="gnc-service-logo" src="https://avatars.mds.yandex.net/get-ya_notification_center/469573/ugc_new/svg"></div></div><div class="gnc-notifications-item__content"><div class="gnc-notification-message">Вы поставили «<span class="gnc-notification-message__span">Станция МЦК Окружная</span>» оценку «<span class="gnc-notification-message__span">5</span>». Расскажите, пожалуйста, почему?</div><div class="gnc-notifications-item__misc"><span class="relative-date" title="08.09.2019 14:59">08.09.2019 14:59</span></div></div><div class="gnc-notifications-item__preview"><div class="gnc-notifications-item__preview-image" style="background-image: url(&quot;https://avatars.mds.yandex.net/get-altay/492546/2a0000015f13921553f336549dffb18444e9/L&quot;);"></div></div></div></a></div></div> -->

<!--  -->

                            <div class="divider"></div>
                        </div>
                    </li>
                    
                    <li class="divider"></li>
                     <li>
                    <button type="button" class="btn btn-default " data-toggle="modal" data-target="#mySendModal" title="Отправить сообщение администратору сайта">
                        <span class="glyphicon glyphicon-send" ><span> Письмо администратору</span></span>
                    </button>
                    </li>
                    <li>
                    <button type="button" class="btn btn-default " onclick="location.href='exit.php';" title="Выйти">  
                     <span class="glyphicon glyphicon-log-out" aria-hidden="true"><span> Выйти</span></span>
                    </button>
                    </li>
                </ul>
            </div>
            </div>       
    </div>
    <!-- <div  style="position:fixed; left:0; top:150px; " class="btn-side">
        
        <button type="button" class="btn btn-default  animated tada" data-toggle="modal" data-target="#mySendModal" title="Отправить сообщение">
            <span class=" glyphicon glyphicon-envelope" ></span>
        </button>
       
    </div>
    <div  style="position:fixed; left:0; top:185px;" class="btn-side">
        
        
        <button type="button" class="btn btn-default center" onclick="location.href=\'exit.php\';" title="Выйти">  
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
        </button>
    </div>
    <div  style="position:fixed; left:0; top:220px;" class="btn-side">
    
    
        <button type="button" class="btn btn-default center" onclick="location.href=\'index.php\';" title="Карта сайта">  
        <span class="glyphicon glyphicon-home" ></span>
        </button>
    </div>
    -->
    <div  style="position:fixed; left:0; top:150px;" class="btn-side left-menu">
    <!-- Button trigger modal -->
    
        <button type="button" class="btn btn-default center "  title="Левое меню">  
        <span class="glyphicon glyphicon-list" ></span>
        </button>
    </div>
    <div  style="position:fixed; left:0; top:185px;" class="btn-side right-menu">
    <!-- Button trigger modal +35px -->
    
        <button type="button" class="btn btn-default center rmenu"  title="Правое меню">  
        <span  >&#9999;</span>
        <span  >&#9999;</span>
        <span  >&#9999;</span>
        
        </button>
    </div>
