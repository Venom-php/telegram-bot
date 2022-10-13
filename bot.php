<?php

ob_start();

define('API_KEY',"5636285498:AAHfPPvkkuftECjr9U5SaDzIW4pF2J_r1ek");

echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";

function bot($method,$datas=[]){

    $url = "https://api.telegram.org/bot".API_KEY."/".$method;

$ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);

    $res = curl_exec($ch);

    if(curl_error($ch)){

        var_dump(curl_error($ch));

    }else{

        return json_decode($res);

    }

}

$update = json_decode(file_get_contents('php://input'));

$message = $update->message;

$chat_id = $message->chat->id;

$text = $message->text;

if($text == "/start" ):

bot('Sendmessage',[

'chat_id'=>$chat_id,

'text'=>"انا بوت تحميل من SoundCloud ارسل الرابط"

]);

endif;

if($text == "/start" ):

bot('Sendmessage',[

'chat_id'=>$chat_id,

'text'=>"انا بوت تحميل من SoundCloud ارسل الرابط"

]);

endif;

