<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require '../phpmailer/vendor/autoload.php';
// function SendEmail($to,$subject,$body,$attachment='')
// {  
// $from = "alimostfa2030@gmail.com";
// ini_set("SMTP","tls://smtp.gmail.com"); 
// ini_set("smtp_port","587");
// $fromName="FCIH Student Union";
// $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
// $mail->IsSMTP(); // telling the class to use SMTP
// $mail->SMTPOptions = array(
// 'ssl' => array(
// 'verify_peer' => false,
// 'verify_peer_name' => false,
// 'allow_self_signed' => true
// )
// );
// //587
// try {
//  $mail->Host       = "smtp.gmail.com"; // SMTP server
//   $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
//   $mail->SMTPAuth   = true;                  // enable SMTP authentication
//   $mail->SMTPSecure = 'tls';
//   $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
//   $mail->Username   = "alimostfa2030@gmail.com"; // SMTP account username
//   $mail->Password   = "alymostafa1234";        // SMTP account password
//   $mail->authentication= 'plain';

//   $mail->AddAddress($to, $to);
//   $mail->SetFrom($from, $from);
//   //$mail->AddReplyTo($from, $fromName);
//   $mail->Subject = $subject;
//   //$mail->AltBody = $body; // optional - MsgHTML will create an alternate automatically
//   $mail->MsgHTML($body);
//   $mail->CharSet='utf-8';
//   //$mail->AddAttachment('images/phpmailer.gif');      // attachment
//   //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
//   $mail->Send();
//          echo "Message Sent OK</p>\n";
//   //echo $e->getMessage(); //Boring error messages from anything else!
// }


//  catch (phpmailerException $e) {
//   echo $e->errorMessage(); //Pretty error messages from PHPMailer
// } 
// }




