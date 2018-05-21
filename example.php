<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer(true);                             
try {
    
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                              
    $mail->Username = 'iit2017016@iiita.ac.in';                 
    $mail->Password = '';                           
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465;                                    

   
    $mail->setFrom('iit2017016@iiita.ac.in','Aadya Mishra');
    $mail->addAddress('aadyamishra24@gmail.com', 'Aadya Mishra');     
    $mail->isHTML(true);                                  
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}