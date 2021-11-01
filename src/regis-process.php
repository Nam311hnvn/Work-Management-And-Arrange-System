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

    $sql ="SELECT * FROM tb_user WHERE user_nick= '$usernick' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo 'Wrong';
    } else {
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));

        $sql_2="INSERT INTO tb_user "
    
    
    
    }



}








?>