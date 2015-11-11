<?php
 
$botToken = "155094884:AAHZ_DTJAznjxLBrCbEgivaFj2B4s2H2o-c";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
       
        case "/fotoariana":
                sendMessage($chatId, "diocane!");
                break;
        case "/testoariana":
                sendMessage($chatId, "porcodio!");
                break;
        default:
                sendMessage($chatId, "default");
       
}
 
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
 
 
 
 
 
?>
