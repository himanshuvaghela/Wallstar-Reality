<?php
$subject="";
$txt="";
$name="";
$email="";
$to = "kbgandhi12@gmail.com";
if(isset($_POST['subject'])){
$subject = $_POST['subject'];
}
if(isset($_POST['message'])){
$txt = $_POST['message'];
}
if(isset($_POST['email'])){
$email = $_POST['email'];
}
if(isset($_POST['name'])){
$name = $_POST['name'];
}
$headers = "From:".$email." NAME: ".$name. "\r\n" .
"CC: kavishgandhi36@gmail.com";

mail($to,$subject,$txt,$headers);
header("Location: contact.html");
?>