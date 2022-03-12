<?php

require_once("class.phpmailer.php");

function sendEmail($to, $subject, $bodytext){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = "mlmdairyz@gmail.com";
    $mail->Password = "Admin@123";
    $mail->SetFrom('mlmdairyz@gmail.com', 'AK Satta - Siddh Purush');
    $mail->Subject = $subject;
    $mail->Body = $bodytext;
    $mail->AddAddress($to);
    $status = $mail->Send();
}

?>
