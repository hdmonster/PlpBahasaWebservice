<?php
session_start();

include 'connect.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $uid = rand(1000,100000);

    $md5Pass = md5($pass);

    $hash = md5( rand(0,1000) );

    $register = mysqli_query($con, "INSERT INTO TbUser (u_id, name, email, password, hash) VALUES ('$uid', '$name', '$email', '$md5Pass','$hash')");

    $to      = $email; // Send email to our user
    $subject = 'Signup | Verification'; // Give the email a subject
    $message = '
         
        Thanks for signing up!
        Your account has been created, you can now login with the following credentials after you have activated your account by clicking the url below.
         
        Please click link below to activate your account:
        http://haydardzaky.000webhostapp.com/member/verify.php?email='.$email.'&hash='.$hash.'
        
         
        '; // Our message above including the link

    $reply = 'noreply@plpbahasa.ubkplus.org';
    $from = '<no-reply>';
    $fromemail = 'noreply@plpbahasa.ubkplus.org';

    $header .= "Reply-To: no-reply <$reply>\r\n";
    $header .= "Return-Path: no-reply <$reply>\r\n";
    $header .= "From: $from <$fromemail>\r\n";
    $header .= "Organization: getFreexBoxLiveCodes\r\n";
    $header .= "Content-Type: text/plain\r\n";

    mail($to, $subject, $message, $header);

    if($register){
        $_SESSION['message'] = 'Thanks for signing up! Verification link will sent to your email directly!';
        header('location: ../client/confirm/login');
    }else{
        $_SESSION['message'] = 'Error:' . mysqli_error($con);
        header('location: ../client/confirm/join');
    }

    mysqli_close($register);
}