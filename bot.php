<?php

include 'Telegram.php';


$telegram = new Telegram('8120035468:AAG4crs__k-KCE3fSiRIOXIfLziUYc0wgRc');

$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);



?>