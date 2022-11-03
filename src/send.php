<?php

use PHPMailer\PHPMailer\PHPMailer;


    require 'PHPMailer/vendor/autoload.php';

    $mail = new PHPMailer();

    $mail->setFrom('tonichok@i.ua', 'First Last');
    $mail->addAddress('tonichok@gmail.com', 'John Doe');

    $mail->Subject = 'Це я';

    // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

    $mail->AltBody = 'This is a plain-text message body';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
    

?>