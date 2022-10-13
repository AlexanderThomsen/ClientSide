<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    function problem($error)
    {
        echo "Det beklager jeg, men det lader til vi har nogen problemer med at sende mailen. ";
        echo "Fejlene står nedenunder.<br><br>";
        echo $error . "<br><br>";
        echo "Vær sød at løse problemerne og prøv igen.<br><br>";
        die();
    }

    
    // $error_message = "";
    // $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    // // if (!preg_match($email_exp, $email)) {
    // //     $error_message .= 'Den indtastede e-mail lader til ikke at være gyldig.<br>';
    // // }

    // $string_exp = "/^[A-Za-z .'-]+$/";

    // if (!preg_match($string_exp, $name)) {
    //     $error_message .= 'Det indtastede navn lader til ikke at være gyldig.<br>';
    // }

    // if (strlen($message) < 2) {
    //     $error_message .= 'Den indtastede besked ser ikke ud til at være gyldig.<br>';
    // }

    // if (strlen($error_message) > 0) {
    //     problem($error_message);
    // }

    // $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $mailTo = "alexander.j.thomsen0339@gmail.com";
    //$mailTo = "larrsvestby@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}