<?php
include "../bot.php";
include "../config.php";

if ($photo != null) {$count = count($photo)-1; $file_id = $photo[$count]->file_id;}
elseif ($audio != null) {$file_id = $audio->file_id;}
elseif ($document != null) {$file_id = $document->file_id;}
elseif ($sticker != null) {$file_id = $sticker->file_id;}
elseif ($video != null) {$file_id = $video->file_id;}
elseif ($voice != null) {$file_id = $voice->file_id;}
     $get_url = json_decode(file_get_contents('https://api.pwrtelegram.xyz/bot'.API_KEY.'/getFile?file_id='.$file_id));
     $url = $get_url->result->file_path;
     $error = $get_url->error_code;
     $file_link = 'https://storage.pwrtelegram.xyz/'.$url;
     if ($url == null && $file_id != null || $error != null && $file_id != null)
             sendAction($chat_id,"typing")
	     sendMessage($chat_id,"❗️خطا❗️\n\n🔻سرور در حال حاضر توانایی اپلو کردن فایل شم را ندارد🔻",$message_id);}
     elseif ($file_id != null && $error == null)
	     {$message = "فایل شما آپلود شد!\nلینک شما : ".$file_link;
	     sendAction($chat_id,"typing")
	     sendMessage($chat_id,$message,$message_id);}
  ?>
