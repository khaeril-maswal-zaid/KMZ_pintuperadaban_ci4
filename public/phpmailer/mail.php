<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "srv49.niagahoster.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "niagatest@pintuperadaban.com"; //user email
$mail->Password = "Percobaan123"; //password email 
$mail->SetFrom("niagatest@pintuperadaban.com","supportnh"); //set email pengirim
$mail->Subject = "ini percobaan smtp"; //subyek email
$mail->AddAddress("percobaan.nh123@gmail.com","Niaga");  //tujuan email
$mail->MsgHTML("ini percobaan SMTP mail");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>
