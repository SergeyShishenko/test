<?php
// inc\inc-personal-profile.php
 require_once (dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php'); // подключение к базе данных
 $dbconn=dbconnect();
 $login=$_COOKIE['login'];
//  $res=mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_login`='$login' AND `user_status`= 1");
 $res=mysqli_query($dbconn,"SELECT * FROM `sofia_users` WHERE `user_login`='$login'");
 $data = mysqli_fetch_assoc($res);
 $email=$data['user_mail']; 
 $role=$data['user_role']; 
 if($data['user_status'] == 1){
    $emailaccess=true;// наличие адреса     
 }
 else{
    $emailaccess=false;// наличие адреса 
 }

 $info=true;// новые уведомления для профиля
 
//  $emailaccess=false;// наличие адреса
 $info ? $class_info_alert="button_icon_alert": $class_info_alert="" ;
 ?>
<div  style="position:fixed; left:0; top:80px; " class="btn-side">
        <!-- Button trigger modal -->
        <div class="btn-group  ">
            <button type="button" class="btn btn-default  animated tada user-toggle "  aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user <?php echo $class_info_alert;?>" ></span>
            </button>
            <div class="profile"  style="position: absolute; transform: translate3d(45px, 0px, 0px); top: 0px; left: 0px; z-index: 1100; background-color: #ffffff;">
               
                <ul class="user ">
                    <li>Профиль<br><b><?php echo $login?></b></li>
                    <li class="divider"></li>
                    <!-- sett -->
                    <?php if($role !="guest"){ ?>
                    <li class="sett">
                        <div class="btn btn-default" data-toggle="collapse" href="#collapseSetting" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="glyphicon glyphicon-cog" ><span> Настройки</span></span>
                        </div>
                        <div class="collapse" id="collapseSetting">
                            <div class="card card-body">
                               <div class="form" > 
                                    <div class="divider"></div>
                                    <!-- <b>Изменить пароль</b> -->
                               
                                    <div class="form-group">
                                        <!-- <div class="divider"></div> -->

                                        <div class="form-group  has-success has-feedback">
                                            <label class="control-label" for="password">Новый пароль</label>
                                            <input type="password" class="form-control" id="password" aria-describedby="password" style="display:inline-block;" >
                                            <label for="password"></label>                                         
                                        </div>

                                        <div class="form-group  has-success has-feedback">
                                            <label class="control-label" for="password-check">Подтверждение пароля</label>
                                            <input type="password" class="form-control" id="password-check" aria-describedby="password-check" style="display:inline-block;" >                                         
                                            <label for="password-check" ></label>                                          
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="">
                                            <button type="submit" class="btn btn-success " onclick="changepass();"><b>Сохранить</b></button>
                                            <div id="addpass" class="settingprofile"></div> 
                                        </div> 
                                                                              
                                    </div>
                                    
                                </div><!-- form --> 
                               <div class="divider"></div>  
                                <?php if ($emailaccess){?>
                               <div id="emailaccess"> 
                                     <div class="form-group">
                                        <div class="form-group  has-success has-feedback ">  
                                            <label class="control-label mail" for="email-check" >E-mail</label>                              
                                            <input type="email" class="form-control edit" id="email-check" aria-describedby="email-check" style="display:inline-block;"  readonly  value="<?php echo $email?>">
                                            <label for="email-check" id="emailedit"  class="tool" data-toggle="tooltip" data-placement="left" title="Редактировать" onclick='emailedit();'></label> 
                                           
                                        </div> 
                                    </div>
                                </div> 
                                <?php }else{ ?>

                                <div id="emailaccess">                                
                                    <div class="form-group">
                                        <!-- <div class="divider"></div> -->

                                        <div class="form-group  has-success has-feedback ">
                                            <label class="control-label mail" for="email-check" >E-mail</label>
                                            
                                            <input type="email" class="form-control " id="email-check" aria-describedby="email-check" style="display:inline-block;"  required value="<?php echo $email?>">
                                            <!-- <input type="email" class="form-control disable" id="email-check" aria-describedby="email-check" style="display:inline-block;"  readonly  value="email@example.com"> -->
                                            <label for="email-check" class="tool" data-toggle="tooltip" data-placement="left" title="Восстановление пароля" id="question"></label>  
                                            
                                            <!-- <div class="tool" data-toggle="tooltip" data-placement="left" title="«Восстановление пароля»"><i class="fa fa-question-circle" aria-hidden="true" ></i></div> -->
                                            <!-- <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>                                        -->
                                        </div>

                                    
                                        
                                        <div class="form-group" id="activationmail">
                                            <div >
                                                <button type="submit" class="btn btn-success " id="subemail" onclick='emailaccess();' ><b>Подтвердить</b></button> 
                                                <div id="activate" class="activationmail">&nbsp;</div>                                               
                                            </div>                                        
                                        </div>
                                    </div>


                                    <?php } ?>

                                <div class="divider"></div>  
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                    <!-- /sett -->

                    
                    <li>
                    <button type="button" class="btn btn-default "   title="Новости"  data-toggle="collapse" href="#collapseInfo" role="button" aria-expanded="false" aria-controls="collapseInfo">
                        <span class="glyphicon glyphicon-info-sign <?php echo $class_info_alert;?>" ><span> Информация</span></span>
                    </button>
                    <div class="collapse" id="collapseInfo">

                            <div class="divider"></div>                            
                                <?php if (!$emailaccess){?>

                                <div class="card card-body">
                                    Зарегистрируйте свою электронную почту, и Вам будет доступна функция<br><b>«Восстановление пароля»</b> !                                
                                </div>

                                <?php }?>
                            <div class="divider"></div>
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
                           <!--  <div class="divider"></div>
                            <div class="card card-body">
                                Появилась новая функция2!
                            </div> -->
<!--  -->
<!-- <div class="gnc-notifications-item-wrapper service-ugc" data-id="ee5068cd-d0f5268b-f8781ab2-21cfe524"><div class="gnc-notifications-item gnc-notifications-item_is-viewed"><a class="gnc-notifications-item__link" href="https://yandex.ru/ugcpub/cabinet?utm_content=org_rating_followup&amp;ugc_id=bell_1567939426747_215752&amp;main_tab=reviews&amp;reviews_tab=org&amp;boostId=%2Fsprav%2F61216934718&amp;editBoostId=%2Fsprav%2F61216934718&amp;utm_source=bell" rel="noopener noreferrer" target="_blank"><div class="gnc-notifications-item__inner gnc-notifications-item__inner_desktop"><div class="gnc-notifications-item__avatar"><div class="gnc-avatar gnc-avatar__service-circle" style="position: relative; transform: none;"><img class="gnc-service-logo" src="https://avatars.mds.yandex.net/get-ya_notification_center/469573/ugc_new/svg"></div></div><div class="gnc-notifications-item__content"><div class="gnc-notification-message">Вы поставили «<span class="gnc-notification-message__span">Станция МЦК Окружная</span>» оценку «<span class="gnc-notification-message__span">5</span>». Расскажите, пожалуйста, почему?</div><div class="gnc-notifications-item__misc"><span class="relative-date" title="08.09.2019 14:59">08.09.2019 14:59</span></div></div><div class="gnc-notifications-item__preview"><div class="gnc-notifications-item__preview-image" style="background-image: url(&quot;https://avatars.mds.yandex.net/get-altay/492546/2a0000015f13921553f336549dffb18444e9/L&quot;);"></div></div></div></a></div></div> -->

<!--  -->

                            
                        </div>
                    </li>
                    
                    <li class="divider"></li>
                     <li>
                    <button type="button" class="btn btn-default link" data-toggle="modal" data-target="#mySendModal" title="Написать в службу поддержки">
                        <!-- <span class="glyphicon glyphicon-send" ><span> Письмо администратору</span></span> -->
                        <span class="glyphicon glyphicon-envelope" ><span class=""> info@500stp.website</span></span>
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
    <div  style="position:fixed; left:0; top:115px;" class="btn-side left-menu">
    <!-- Button trigger modal -->
    
        <button type="button" class="btn btn-default center "  title="Левое меню">  
        <span class="glyphicon glyphicon-list" ></span>
        </button>
    </div>
    <div  style="position:fixed; left:0; top:150px;" class="btn-side right-menu">
    <!-- Button trigger modal +35px -->
    
        <button type="button" class="btn btn-default center rmenu"  title="Правое меню">  
        <span  >&#9999;</span>
        <span  >&#9999;</span>
        <span  >&#9999;</span>
        
        </button>
    </div>
