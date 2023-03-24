<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->Username = "ssetfmail@gmail.com";
$mail->Password = "gltzupymxryshazg";

$mail->setFrom("ssetfmail@gmail.com");
$mail->addAddress($email);

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = "Email: " . $email . "\nIme: " . $name . "\n-----------------------------" . "\nPoruka:\n" . $message . "\n-----------------------------";

$mail->send();

echo "Radi";
