<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $message=$_POST['message'];

    $email_from="mauryachurag114@gmail.com";
    $email_subject="New Form Submission";
    $email_body="User Name: $name.\n". 
                "User Email:$visitor_email.\n".
                "User Phone:$phone.\n".
                "User address:$address.\n". 
                "User Message: $message.\n";

    $to="mauryachirag7468@gmail.com";
    $headers= "From: $email_from\r\n";
    $headers= "Reply-To: $visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    echo '<script type="text/javascript"> alert("Message sent successfully") </script>';
    header("Location: contactus.html");
?>