<?php

$message = "";
if($_POST['website']){
    $message = $_POST['message']."<br/>".$_POST['comment'];
}else{
    $message = $_POST['comment'];
}
$to = "lfulbel@iastate.edu";

$subject = "Email from ISCORE Website by ".$_POST['name'].".";
$message = $_POST['comment'];

$headers = 'From: lfulbel@iastate.edu' . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to,$subject,$message,$headers);
header("Location: /press.php");

?>