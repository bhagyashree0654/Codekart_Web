<?php

require_once('../db.php');
require '../includes/PHPMailer.php';
require '../includes/SMTP.php';
require '../includes/Exception.php';
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["contact-btn"])) {

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $intrest = $_POST['intrest'];
    $message = ($_POST['message']);


    $status = 1;
    $sql = "INSERT INTO `contact`(`fname`, `lname`, `email`, `phone`, `intrest`,`message`) VALUES ('$first_name','$last_name','$email','$phone', '$intrest','$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo ("<SCRIPT LANGUAGE='JavaScript'>
        // window.alert('Thank you for contacting us...')
        // window.location.href='../index.php';
        // </SCRIPT>");

        $html = "<table><tr><td>First Name</td><td>$first_name</td></tr><tr><td>Last Name</td><td>$last_name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Phone No.</td><td>$phone</td></tr><tr><td>Intrest</td><td>$intrest</td></tr><tr><td>Intrest</td><td>$intrest</td></tr><tr><td>Message</td><td>$message</td></tr></table>";

        // include('smtp/PHPMailerAutoload.php');
        // $mail = new PHPMailer(true);
        // $mail->isSMTP();
        // $mail->Host = "smtp.gmail.com";
        // $mail->Port = 587;
        // $mail->SMTPSecure = "tls";
        // $mail->SMTPAuth = true;
        // $mail->Username = "rsmrutikant8@gmail.com";
        // $mail->Password = "RSlipun@123";
        // $mail->SetFrom("rsmrutikant8@gmail.com");
        // $mail->addAddress("rsmrutikant8@gmail.com");
        // $mail->IsHTML(true);
        // $mail->Subject = "New Contact Us";
        // $mail->Body = $html;
        // $mail->SMTPOptions = array('ssl' => array(
        //     'verify_peer' => false,
        //     'verify_peer_name' => false,
        //     'allow_self_signed' => false
        // ));
        // Bhagyashree
        $mail = new PHPMailer(true);    
        // $mail->SMTPDebug = 3;                              
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true; 
        $mail->Username   = 'patrabhagyashree004@gmail.com';        //email-id         
        $mail->Password   = 'Bhagya@1998MCAPatra';             //password           
        $mail->SMTPSecure = 'tls';         //ssl       tls               
        $mail->Port       = 587;  //465 587
        $mail->addReplyTo($email, $first_name.' '.$last_name);
        $mail->setFrom($email, $first_name.' '.$last_name); //from email and name
        $mail->addAddress('patrabhagyashree004@gmail.com'); //receiver details
        $mail->Subject = "New Contact Us";
        $mail->Body = $html;
        $mail->isHTML(true);
// end
        if ($mail->send()) {
            //echo "Mail send";
        } else {
            //echo "Error occur";
        }
        // echo $message;
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Server error..')
        window.location.href='../index.php';
        </SCRIPT>");
    }
}
