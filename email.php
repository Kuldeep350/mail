<?php
  require("PHPMailer-master/PHPMailer.php");
  require("PHPMailer-master/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "855deepsingh@gmail.com";
    $mail->Password = "855,deep";
    $mail->SetFrom("855deepsingh@gmail.com");
    $mail->Subject = "Test Email";
    $mail->Body = "This Is test Message";
    $mail->AddAddress("855deepsingh@gmail.com");
 if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>
