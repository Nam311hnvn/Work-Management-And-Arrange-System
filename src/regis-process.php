<?php
session_start();

if(isset($POST['signup'])){
    $usernick = $POST['user_nick'];
    $username = $POST['user_name'];
    $job = $POST['job']
    $email =  $POST['user_email'];
    $pass1 = $POST['pass1'];
    $pass2 = $POST['pass2'];

    include('./reuse/config.php');
}








?>