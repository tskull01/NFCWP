<?php
if (array_key_exists('email', $_POST)) {

    date_default_timezone_set('Etc/UTC');



    require '../PHPMailerAutoload.php';



    //Create a new PHPMailer instance

    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP - requires a local mail server

    //Faster and safer than using mail()

    $mail->isSMTP();

    $mail->Host = 'localhost';

    $mail->Port = 25;



    //Use a fixed address in your own domain as the from address

    //**DO NOT** use the submitter's address here as it will be forgery

    //and will cause your messages to fail SPF checks

    $mail->setFrom('tskulley29@yahoo.com', 'Tyler Skulley');

    //Send the message to yourself, or whoever should receive contact for submissions

    $mail->addAddress('tskulley29@yahoo.com', 'Tyler Skulley');

    //Put the submitter's address in a reply-to header

    //This will fail if the address provided is invalid,

    //in which case we should ignore the whole request

    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {

        $mail->Subject = 'PHPMailer contact form';

        //Keep it simple - don't use HTML

        $mail->isHTML(false);

        //Build a simple message body

        $mail->Body = <<<EOT

Email: {$_POST['email']}

Name: {$_POST['name']}

uniName: {$_POST['uniName']}

Message: {$_POST['message']}

Number: {$_POST['number']}

Professor: {$_POST['professor']}

Address: {$_POST['address']}

State Select: {$_POST['stateSelect']}

Name: {$_POST['name']}

Interest: {$_POST['interest']}

Present: {$_POST['present']}

Project: {$_POST['project']}

EOT;

        //Send the message, check for errors

        if (!$mail->send()) {

            //The reason for failing to send will be in $mail->ErrorInfo

            //but you shouldn't display errors to users - process the error, log it on your server.

            $msg = 'Sorry, something went wrong. Please try again later.';

        } else {

            $msg = 'Message sent! Thanks for contacting us.';

        }

    } else {

        $msg = 'Invalid email address, message ignored.';

    }

}



?>