<?php
include "../bot.php";
include "../config.php";

  if(preg_match('/^\/([Pp]hoto)/',$text) and $reply){
    if($reply->sticker){
      $file = $reply->sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('data/Sticker.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
      SendPhoto($chat_id , new CURLFile('data/Sticker.png') , "@MrCyberBot");
    }
  }
  ?>
