<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Ll]ogo) (.*)/s',$text)){
	$text = str_replace('/Logo ','',$text);
	$text = str_replace('/logo ','',$text);
	$photo = file_get_contents('http://api.norbert-team.ir/photo-fa/?key=slm&size=50&color=white&text='.urlencode($text));
	file_put_contents('data/Logo.png',$photo);
	SendPhoto($chat_id , new CURLFILE('data/Logo.png'),"@MrCyberBot");
  }
  ?>
