<?php
session_start();
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){ 
    //  echo  "local"; exit();
        $role = include  dirname(dirname(__FILE__)).'/DATA/TABLES/configDB.php';//local
    }else{
        $role = include   dirname(dirname(dirname(__FILE__))).'/DATA/TABLES/configDB.php';
    }


if (empty($_SESSION['token'])) {
    $_SESSION['token'] = Mbot::gettoken();
    // $_SESSION['tokentime']  = time();
  }

if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
         // Proceed to process the form data
        //  Приступайте к обработке данных формы
        $twoFactorAuthentication = Mbot::getrnd();      
        $ICQ_BOTTOKEN = Mbot::ICQ_BOTTOKEN;        
        $ICQ_IDCHAT = Mbot::ICQ_IDCHAT; 
// echo "ICQ_BOTTOKEN ".$ICQ_BOTTOKEN; exit();
    //    echo $ICQ_BOTTOKEN; exit();
        $icq_msg = rawurlencode(str_replace("@", " ", $twoFactorAuthentication));
        $_SESSION['icq_msg']=$icq_msg;

        $icq_full_url = "https://api.icq.net/bot/v1/messages/sendText?token=".$ICQ_BOTTOKEN."&chatId=".$ICQ_IDCHAT."&text=".$icq_msg;
        //  echo  "local"; exit();


        // Проверка на дублирование кода на почту sml=1 - отправить код напочту / sml=0 - не отправлять
        if ($_POST['sml']==="1"){ // дублирование кода на почту
                if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/www/index.php')){          
                    // header('Location:/../../../www/users/mail.php?message='.$icq_msg);   //local         
                    header('Location:/../../../www/users/mail.php');   //local         
                }else{
                    // header('Location:/../../../users/mail.php?message='.$icq_msg);        
                    header('Location:/../../../users/mail.php');        
                }
            }


      
        $data = file_get_contents($icq_full_url);
        $msgId = json_decode($data)->msgId;
        $_SESSION['tfa']=$twoFactorAuthentication;
        $_SESSION['tfatime']  = time();
        
        // echo $twoFactorAuthentication; // Something like B9CD0F
        echo $msgId; //


    } else {
         // Log this as a warning and keep an eye on these attempts
        //  Запишите это в качестве предупреждения и следите за этими попытками
        echo "Ошибка токена";
    }
}else{echo "Ошибка токена";}



?>