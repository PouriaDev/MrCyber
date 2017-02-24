<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Rr]eply) (.*)/s',$text) and $reply){
	$text = str_replace('/reply ','',$text);
	$text = str_replace('/Reply ','',$text);
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'parse_mode'=>'html',
	'reply_to_message_id'=>$reply->message_id
  ]);
  }
  ?>
