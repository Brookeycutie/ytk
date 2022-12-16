<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["send"])){
 /*  $error = array();

    if(empty($_POST['fullname'])){
        $error['fullname']= "Please enter Your Name";
        }
    if(empty($_POST['email'])){
        $error['email']= "Email is required";
    }
    if(empty($_POST['message'])){
        $error['message']= "Kindly type in your message";
    }
         header("Location:contact?error=Kindly fill in all details on the form!"); */

    if(empty($error)){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yourtechiekids@gmail.com'; //gmail
    $mail->Password = 'dsilyhisfarbungj'; //gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email'], $_POST['fullname']);
    $mail->addAddress('yourtechiekids@gmail.com');
    $mail->addReplyTo($_POST['email'], $_POST['fullname']);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo 
    "
    <script>
    alert('Message Sent Successfully');
    document.location.href = 'start-class';
    </script>
    ";
}

}
?>