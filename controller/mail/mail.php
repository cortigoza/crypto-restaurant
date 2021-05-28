<?php
function emailSend($accountsMail, $body, $subject)
{
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = "restaurantecrypto@gmail.com";
    $mail->Password = "restaurante2020";
    $mail->isHTML(true);
    

    foreach ($accountsMail as $key => $value) {
        $mail->addAddress($value, $key);
    }
   
   
    $mail->setFrom("restaurantecrypto@gmail.com", "Ofertas Crypto Restaurante");
   
    $mail->Subject = $subject;
    $mail->msgHTML($body);

    if (!$mail->send()) {
        header('HTTP/1.1 400'); 
    }
}

function recoveryPassword($mail, $url) {
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = "restaurantecrypto@gmail.com";
    $mail->Password = "restaurante2020";
    $mail->isHTML(true);
    
    $mail->addAddress($value, $key);
    
   
   
    $mail->setFrom("restaurantecrypto@gmail.com", "Recuperar Contraseña");
   
    $mail->Subject = $subject;
    $mail->msgHTML($url);

    if (!$mail->send()) {
        header('HTTP/1.1 400'); 
    }
}