<?php 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->userame;
$text = $message->text;
$photo = $update->message->photo;
$audio = $update->message->audio;
$document = $update->message->document;
$sticker = $update->message->sticker;
$video = $update->message->video;
$voice = $update->message->voice;
$forward = $update->message->forward_from;
$reply = $update->message->reply_to_message;
$block = file_get_contents("data/Block-List.txt");
$start = file_get_contents("data/Start.txt");
$help = file_get_contents("data/Help.txt");
$command = file_get_contents("data/Command.txt");

include "config.php";
include "plugins/Admin.php";
include "plugins/Qr.php";
include "plugins/Calculator.php";
include "plugins/Uploader.php";
include "plugins/Photo.php";
include "plugins/Echo.php";
include "plugins/DateTime.php";
include "plugins/Logo.php";
include "plugins/Love.php";
include "plugins/WebShot.php";
include "plugins/Voice.php";
include "plugins/Short.php";
include "plugins/Reply.php";
include "plugins/Location.php";
include "plugins/Sticker.php";
include "plugins/Start.php";
if (strpos($block , "$from_id") !== false) {
	return false;
	}
$user = file_get_contents('data/Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('data/Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('data/Member.txt',$add_user);
    }unlink('error_log');
?>
