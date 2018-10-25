<?php
//Import the PHPMailer class into the global namespace

use PHPMailer\PHPMailer\PHPMailer;

require '../NFCWP/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require '../NFCWP/PHPMailer-master/PHPMailer-master/src/Exception.php';


    //Make sure the address they provided is valid before trying to use it
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

    if ($name == "" || $email == "" || $details == "") {
        echo "Please fill in required fields: Name, Email, and Message";
        exit;
    }
    if ($_POST["address"] != "") {
        echo "Bad form input";
        exit;
    }


    if (!PHPMailer::validateAddress($email)) {
        echo "Invalid Email Address";
        exit;

    }


    $email_body = "";
    $email_body .= "Name " . $name . "\n";
    $email_body .= "Email " . $email . "\n";
    $email_body .= "Message " . $message . "\n";

    $mail = new PHPMailer;

    //It's important not to use the submitter's address as the from address as it's forgery,

    //which will cause your messages to fail SPF checks.

    //Use an address in your own domain as the from address, put the submitter's address in a reply-to

    $mail->setFrom('tyler@courtwatchproject.org', $name);

    $mail->addAddress('tskulley29@yahoo.com', "Tyler");

    $mail->addReplyTo($email, $name);

    $mail->Subject = 'Contact form: ' . $name;

    $mail->Body = $email_body;

    if (!$mail->send()) {

        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
    }

    header("location:contact.php?status=thanks");

    $pageTitle = "";
    $section = "";
}


 ?>
