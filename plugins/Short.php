<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Ss]hort) (.*)/s',$text)){
	preg_match('/^\/([Ss]hort) (.*)/s',$text,$match);
	SendAction($chat_id,'typing');
	$short = file_get_contents("http://yeo.ir/api.php?url=".$match[2]);
	if($short == 'Error: Invalid Url!'){
	SendMessage($chat_id , "Error: Invalid Url!","html");
	}else{
	SendMessage($chat_id , "لینک کوتاه شده: $short","html");
	}
  }
  ?>
