<?php
session_start();

if(isset($POST['signup'])){
    $usernick = $POST['user_nick'];
    $username = $POST['user_name'];
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

        $sql_2 = "INSERT INTO tb_user  (user_nick, user_name,user_email, user_pass,user_code) VALUES ('$usernick,'$username','$email','$pass_hash','$code');";
        $result_2 = mysqli_query($conn, $sql_2);
        $sql_3 = "SELECT * FROM tb_user WHERE user_email='$email' OR user_nick='$usernick' ";
        $result_3 = mysqli_query($conn, $sql_3);
        $user = mysqli_fetch_assoc($result_3);
        $_SESSION['loginOK'] = $user;
        if ($result_2 > 0) {
            echo 'Gửi thành công!';
        } else {
            include './index.php';
        }
    
    
    
    }



}








?>