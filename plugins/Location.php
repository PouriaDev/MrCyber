<?php
include "../bot.php";
include "../config.php";

if(preg_match('/^\/([Ll]ocation) (.*)/s',$text)){
	preg_match('/^\/([Ll]ocation) (.*)/s',$text,$match);
	$location = json_decode(file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".$match[2]));
	bot('sendLocation',[
    'chat_id'=>$chat_id,
    'latitude'=>$location->results[0]->geometry->location->lat,
	'longitude'=>$location->results[0]->geometry->location->lng
  ]);
  }
  ?>
