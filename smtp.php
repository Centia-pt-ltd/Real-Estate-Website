<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'libs/src/Exception.php';
require 'libs/src/PHPMailer.php';
require 'libs/src/SMTP.php';

if(isset($_POST)){
    
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    
    $template = '
    <h3 style="text-align: center;">Mapush Group</h3>
    <p>Hi,</p>
    <p>Regards<br>Mapush Group</p>
    <hr>
    <p>Here is your request #</p>
    <table width="100%" cellpadding="10" style="border: 1px solid #ff9a9c; border-collapse: collapse; font-size: 14px;">
        <tr style="border: 1px solid #ff9a9c;">
            <td width="50%">Full Name :</td>
            <td width="50%">'.$name.'</td>
        </tr>
        <tr style="border: 1px solid #ff9a9c;">
            <td width="50%">Contact :</td>
            <td width="50%">'.$phone.'</td>
        </tr>
        <tr style="border: 1px solid #ff9a9c;">
        <td width="50%">Email :</td>
        <td width="50%">'.$email.'</td>
        </tr>
        <tr style="border: 1px solid #ff9a9c;">
            <td width="50%">Query :</td>
            <td width="50%">'.$message.'</td>
        </tr>
    </table>';
    
    
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mail.mapushgroup.com';
        $mail->Port =  25;
        $mail->SMTPDebug  = 0;
        $mail->SMTPSecure = false;
        $mail->SMTPAutoTLS = false;
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = 'enquiry@mapushgroup.com';
        $mail->Password = 'MapushKMI@123#';
        $mail->setFrom('enquiry@mapushgroup.com', 'Mapush Group');
        //$mail->addReplyTo('email for reply to');
        $mail->addAddress('vicky09213sinha@gmail.com', 'Diwakar Sinha | Mapush Group');
        //$mail->addBcc('bcc mail', 'NAAM');
        $mail->isHTML(true);
        $mail->Subject = "Enquiry Mapush Group";
        $mail->Body = $template;
    
        if(!$mail->send())
        {
            echo "There is something wrong: " . $mail->ErrorInfo;
        }
        else
        {
            // echo 'Sent Successfully';
            header("location:http://mapushgroup.com/");
        }
  
    }