<?php
include "../bot.php";
include "../config.php";

  if(preg_match('/^\/([Ss]ticker)/',$text) and $reply){
    if($reply->photo){
	  $photo = $reply->photo;
      $file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('data/Photo-S.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
      SendSticker($chat_id , new CURLFile('data/Photo-S.png') , "@MrCyberBot");
    }
  }
  ?>
