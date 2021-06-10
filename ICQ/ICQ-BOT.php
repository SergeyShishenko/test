<?php
// F:\OpenServer_5.3.8\domains\localhost\www\ICQ\ICQ-BOT.php
// ICQ-Bot, посылаем сообщение пользователю или в групповой чат

// https://icq.com/botapi/#/messages/get_messages_sendFile

$msg = "Привет еще раз! Я от Сергея Шишенко!";
$ICQ_BOTTOKEN = "001.3889243197.2133753185:759985177"; //Bot token @Info.500stp.bot
// $ICQ_IDCHAT = "@sh79037727187"; //ChatID, ник пользователя Мой

// $ICQ_IDCHAT = "@n410595229"; //ChatID, ник пользователя Наташенька
$ICQ_IDCHAT = "AoLGnNp-rOWFMNPIQho"; //ChatID, ник группового чата https://icq.im/AoLGnNp-rOWFMNPIQho  "Сайт"
$icq_msg = rawurlencode(str_replace("@", " ", $msg));

$icq_full_url = "https://api.icq.net/bot/v1/messages/sendText?token=".$ICQ_BOTTOKEN."&chatId=".$ICQ_IDCHAT."&text=".$icq_msg;
//https://api.icq.net/bot/v1/messages/sendText?token=001.3889243197.2133753185:759985177&chatId=@sh79037727187&text="Привет!%20Я%20от%20Сергея%20Шишенко"
// https://api.icq.net/bot/v1/messages/sendText?token=001.3889243197.2133753185:759985177&chatId=@sh79037727187&text="Привет!%20Я%20от%20Сергея%20Шишенко"
// passthru("/usr/bin/wget -q -O- $icq_full_url > /dev/null 2>&1 &");
// echo $icq_full_url;
// echo "<hr>";
echo file_get_contents($icq_full_url);



// lastEventId - Id последнего известного события.
// pollTime
// https://api.icq.net/bot/v1/events/get?token=001.3889243197.2133753185:759985177&lastEventId=0&pollTime=60
// {
//     "events": [
//       {
//         "eventId": 1,
//         "payload": {
//           "chat": { "chatId": "759918364", "type": "private" },
//           "from": {
//             "firstName": "Сергей",
//             "lastName": "Шишенко",
//             "nick": "sh79037727187",
//             "userId": "759918364"
//           },
//           "msgId": "6972133541035377009",
//           "text": "Привкт",
//           "timestamp": 1623326340
//         },
//         "type": "newMessage"
//       },
//       {
//         "eventId": 2,
//         "payload": {
//           "chat": { "chatId": "759918364", "type": "private" },
//           "from": {
//             "firstName": "Сергей",
//             "lastName": "Шишенко",
//             "nick": "sh79037727187",
//             "userId": "759918364"
//           },
//           "msgId": "6972133833093153013",
//           "text": "Привет!",
//           "timestamp": 1623326408
//         },
//         "type": "newMessage"
//       },
//       {
//         "eventId": 3,
//         "payload": {
//           "chat": { "chatId": "759918364", "type": "private" },
//           "from": {
//             "firstName": "Сергей",
//             "lastName": "Шишенко",
//             "nick": "sh79037727187",
//             "userId": "759918364"
//           },
//           "msgId": "6972133936172368580",
//           "text": "111",
//           "timestamp": 1623326432
//         },
//         "type": "newMessage"
//       },
//       {
//         "eventId": 4,
//         "payload": {
//           "chat": { "chatId": "759918364", "type": "private" },
//           "editedTimestamp": 1623326446,
//           "from": {
//             "firstName": "Сергей",
//             "lastName": "Шишенко",
//             "nick": "sh79037727187",
//             "userId": "759918364"
//           },
//           "msgId": "6972133541035377009",
//           "text": "Привет",
//           "timestamp": 1623326340
//         },
//         "type": "editedMessage"
//       }
//     ],
//     "ok": true
//   }
  

?>