<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Vv]oice) (.*)/s',$text)){
	preg_match('/^\/([Vv]oive) (.*)/s',$text,$match);
	$photo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.$match[2]);
	file_put_contents('data/voice.ogg',$photo);
	SendVoice($chat_id , new CURLFILE('data/voice.ogg'),"@MrCyberBot");
  }
  ?>
