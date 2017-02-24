<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Kk]eep[Cc]alm) (.*)/s',$text)){
	preg_match('/^\/([Kk]eep[Cc]alm) (.*)/s',$text,$match);
	$photo = file_get_contents('http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A'.$match[2].'%0D%0A'.$match[3].'%0D%0A'.$match[4].'&bc=E31F17&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq');
	file_put_contents('data/keepcalm.png',$photo);
	SendSticker($chat_id , new CURLFILE('data/keepcalm.png'),"@MrCyberBot");
  }
  ?>
