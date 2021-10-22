<?php

require 'smtpmailer/PHPMailerAutoload.php';

if(isset($_POST)){
    
    $name = $_POST['txtName'];
    $phone = $_POST['txtPhone'];
    $email = $_POST['txtEmail'];
    $message = $_POST['txtMessage'];
    
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

    // print_r($_POST);
    
$mail = new PHPMailer;
                            // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.mapushgroup.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'enquiry@mapushgroup.com';                 // SMTP username
$mail->Password = 'MapushKMI@123#';                           // SMTP password
$mail->SMTPSecure = 'tls';                       // Enable TLS encryption, `ssl` also accepted
$mail->SMTPDebug  = 0;
$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = true;                     
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('enquiry@mapushgroup.com', 'Mapush Group');
$mail->addAddress('enquiry@mapushgroup.com', 'Mapush Group');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Enquiry Mapush Group';
$mail->Body    = $template;



if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    // echo 'Message has been sent';
    header("location:http://mapushgroup.com/residential-invest.php");
}
}