<?php
// F:\OpenServer_5.3.8\domains\localhost\www\ICQ\ICQ-BOT.php
// ICQ-Bot, посылаем сообщение пользователю или в групповой чат
$msg = "Привет! Я от Сергея Шишенко!";
$ICQ_BOTTOKEN = "001.3889243197.2133753185:759985177"; //Bot token
$ICQ_IDCHAT = "@sh79037727187"; //ChatID, ник пользователя
// $ICQ_IDCHAT = "@410595229"; //ChatID, ник пользователя
// $ICQ_IDCHAT = "AaLE2gDip1ZYY1112s"; //ChatID, ник группового чата
$icq_msg = rawurlencode(str_replace("@", " ", $msg));

$icq_full_url = "https://api.icq.net/bot/v1/messages/sendText?token=".$ICQ_BOTTOKEN."&chatId=".$ICQ_IDCHAT."&text=".$icq_msg;
//https://api.icq.net/bot/v1/messages/sendText?token=001.3889243197.2133753185:759985177&chatId=@sh79037727187&text="Привет!%20Я%20от%20Сергея%20Шишенко"
// https://api.icq.net/bot/v1/messages/sendText?token=001.3889243197.2133753185:759985177&chatId=@sh79037727187&text="Привет!%20Я%20от%20Сергея%20Шишенко"
// passthru("/usr/bin/wget -q -O- $icq_full_url > /dev/null 2>&1 &");
echo $icq_full_url;
file_get_contents($icq_full_url);
?>