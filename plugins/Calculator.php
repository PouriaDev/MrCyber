<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Cc]alc) (.*)/s',$text)){
    preg_match('/^\/([Cc]alc) (.*)/s',$text,$match);
    SendAction($chat_id,'typing');
    $rs = file_get_contents('http://api.mathjs.org/v1/?expr='.urlencode($match[2]));
	SendMessage($chat_id , "<code>".$rs."</code>" , 'html');
  }
  ?>
