<?php 

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


function getClientMessage(){

    $message =  <<< EOT
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link href='cid:emailCss'/>
    </head>
    <body>
        <img src="cid:food"/>
        <h1>firstName: {$_POST['firstname']} </h1>
        <h1>Last Name:  {$_POST['lastname']}</h1>
        <h1>Country:  {$_POST['country']}</h1>
        <h1>Subject: {$_POST['subject']}</h1>
    </body>
    </html>
    EOT;
    
    return $message;
}
print_r($_POST);
    if($_POST){
        require 'PHPMailer-master/PHPMailer-master/vendor/autoload.php';

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->Username = "kennethemmanuel28@gmail.com";
    $mail->Password = "KENNETH781227$";
    $mail->SetFrom("iamjulieann.26@gmail.com");

    //Content
    $mail->IsHTML(true);
    $mail->Subject = "Contact Email";
    $body = getClientMessage();
    $mail->AddEmbeddedImage("../foodImg/pic1.jpg", 'food');
    $mail->AddEmbeddedImage("./email.css", 'emailCss');

    $mail->Body =  "$body";
    $mail->AddAddress("kennethemmanuelziguy28@gmail.com");
    
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
     

     }

?>