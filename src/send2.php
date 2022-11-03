<?php

    use PHPMailer\PHPMailer\PHPMailer;

    if (array_key_exists('email', $_POST)) {
        date_default_timezone_set('Etc/UTC');
        require '../vendor/autoload.php';
        $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;

    $mail->setFrom('from@example.com', 'First Last');

    
    }

?>