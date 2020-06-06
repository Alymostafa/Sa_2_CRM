<?php



require_once 'vendor/autoload.php';

   function SendEmail($to){
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
    ->setUsername('aliashrafwork@gmail.com ')
    ->setPassword('0113036729');
    $mailer = new Swift_Mailer($transport);
    $message = (new Swift_Message('confirmation mail'))
    ->setFrom(['aliashrafwork@gmail.com ' => 'CRM for ISP'])
    ->setTo([$to => 'A nam'])
   ->setBody('Messege');
    $result = $mailer->send($message);
}






?>