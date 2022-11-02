<?php

use PHPMailer\PHPMailer\PHPMailer;


    require 'PHPMailer/vendor/autoload.php';

    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'ssl';

    $mail->Port = 465;
    

    $mail->Username = "tonichok";
    $mail->Password = "*******";
    

    $mail->Mailer = "smtp.gmail.com";
    $mail->CharSet = "UTF-8";

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
    }
    if (isset($_POST["message"])) {
        $subject = $_POST["message"];
    }

    $mail->setFrom('tonichok@gmail.com');
    $mail->addAddress('tonichok@gmail.com');
    $mail->Subject = $subject;
    $mail->SMTPDebug = 2;
    // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    $mail->AltBody = 'This is a plain-text message body';

    $mail->Body = "The new password is ";

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

?>