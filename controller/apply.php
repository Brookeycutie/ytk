<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if(isset($_POST['submit'])){
  $error = array();
  if(empty($_POST['firstname'])){
    $error['firstname']="Please enter your first name";
    }
  if(empty($_POST['lastname'])){
    $error['lastname']="Please enter your last name";
    }
  if(empty($_POST['email'])){
    $error['email']= "Enter Email";
    }

  if(empty($_POST['phone'])){
    $error['phone']= "Enter Your Phone Number";
    }
  if(empty($_POST['state'])){
    $error['state']= "Please enter state residence";
    }
  if(empty($_POST['location'])){
    $error['location']= "Please enter your location";
    }

    if(empty($_POST['classtype'])){
    $error['classtype']= "Please enter your location";
    }
    if(empty($_POST['learnerclass'])){
        $error['learnerclass']= "Please enter your location";
        }
    if(empty($_POST['subjects'])){
    $error['subjects']= "Please enter your location";
    }
    if(empty($_POST['lessondate'])){
        $error['lessondate']= "Please enter your location";
        }

        if (!empty($error)) {
            var_dump($error);
            header("Location:start-class?error=Please all fields are required");
        }

  if(empty($error)){
    $stmt = $conn->prepare("INSERT INTO applications VALUES(NULL, :fn, :ln, :em, :ph, :st, :lcn, :ct, :lc, :sub, :ld, NOW(), NOW() )");
    $stmt->bindParam(":fn", $_POST['firstname']);
    $stmt->bindParam(":ln", $_POST['lastname']);
    $stmt->bindParam(":em", $_POST['email']);
    $stmt->bindParam(":ph", $_POST['phone']);
    $stmt->bindParam(":st", $_POST['state']);
    $stmt->bindParam(":lcn", $_POST['location']);
    $stmt->bindParam(":ct", $_POST['classtype']);
    $stmt->bindParam(":lc", $_POST['learnerclass']);
    $stmt->bindParam(":sub", $_POST['subjects']);
    $stmt->bindParam(":ld", $_POST['lessondate']);
    $stmt->execute();

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

    $mail->Subject = 'New Class Application Alert:' . $_POST["firstname"];
    $mail->Body = 'Class Details: ' . $_POST["classtype"] . $_POST["learnerclass"] . $_POST["subjects"] . ' starting on ' . $_POST["lessondate"];

    $mail->send();

    header("Location:start-class?success=Dear ".$_POST['firstname'].", you registered successfully.");
      }
    }
  

?>