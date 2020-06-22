<?php 

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


function getClientMessage(){

    //The initial html  and css files
    $htmlFile = file_get_contents("./contactF/email.php");
    $cssFile = file_get_contents("./contactF/email.css");


    //Values that the user entered in the form
    $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
      $email = $_POST['email'];
     $title= $_POST['title'];
    $message = $_POST['message'];


    //fill the html
    $htmlFile = str_replace("&firstname",$firstname, $htmlFile );
    $htmlFile = str_replace("&lastname",$lastname, $htmlFile );
    $htmlFile = str_replace("&email",$email, $htmlFile );
    $htmlFile = str_replace("&title",$title, $htmlFile );
    $htmlFile = str_replace("&message",$message, $htmlFile );
    $htmlFile = str_replace("<style></style>","<style>" .  $cssFile ."</style>", $htmlFile );


    //The html file to send through email
    $emailHtml =  $htmlFile;
    
    
    return $emailHtml;
}
print_r($_POST);
    if($_POST){
        require 'PHPMailer-master/PHPMailer-master/vendor/autoload.php';

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 587
    $mail->Username = "kennethemmanuel28@gmail.com";
    $mail->Password = "KENNETH781227$&";
    $mail->SetFrom("kennethemmanuel28@gmail.com");

    //Content
    $mail->IsHTML(true);
    $mail->Subject = "Welcome To 'The Modern Website'";
    $mail->AddEmbeddedImage("foodImg/pic1.jpg", 'food');
    $mail->AddEmbeddedImage("logo/my_logo.jpg", 'logo');

    $body = getClientMessage();

    $mail->Body =  "$body";
    $mail->AddAddress("{$_POST['email']}");
    $mail->AddAddress("dannyloc28@gmail.com");

    
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
     

     }

?>