<?php
session_start();

    $email_to = "contact@ntibatiment.com"; // change with your email
    $name     = $_POST['name'];  
    $email    = $_POST['email'];
    // $subject   = $_POST['subject'];
    $message    = $_POST['message'];
    
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $message, $headers)){
        echo "succès";       
    } 
    else{
        echo "échoué";     
    }  
?> 
