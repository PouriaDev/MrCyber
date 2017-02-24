<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Ll]ove) (.*)/s',$text)){
        preg_match('/^\/([Ll]ove) (.*) (.*)/s',$text,$match);
        $photo = file_get_contents('http://www.iloveheartstudio.com/-/p.php?t='.$match[2].'%20%EE%BB%AE%20'.$match[3].'&bc=000000&tc=FFFFFF&hc=ff0000&f=c&uc=true&ts=true&ff=PNG&w=500&ps=sq');
        file_put_contents('data/love.png',$photo);
        SendSticker($chat_id , new CURLFILE('data/love.png'),"@MrCyberBot");
  }
  ?>
