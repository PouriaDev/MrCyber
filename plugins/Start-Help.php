<?php
include "../bot.php";
include "../config.php";

if(preg_match("/^\/([Ss]tart)/",$text)){
	SendAction($chat_id,'typing');
	SendMessage($chat_id , $start , "html");
}
elseif(preg_match("/^\/([Hh]elp)/",$text)){
	SendAction($chat_id,'typing');
	SendMessage($chat_id , $help , "html");
}

?>
