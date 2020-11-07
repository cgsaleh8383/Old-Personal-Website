<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['message'];


    $email_from = 'cgsaleh83@gmail.com'

    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";


    $to = "cgsaleh83@gmail.com";
    $headers = "Form: $email_form \r\n";
    
    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");

?>