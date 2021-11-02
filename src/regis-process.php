<?php

if(isset($_POST['SbmRegis'])){
    $usernick = $_POST['usernick'];
    $username = $_POST['username'];
    $email =  $_POST['useremail'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
}
// ket noi db
    include('./reuse/config.php');
// truy van du lieu
    $sql ="SELECT * FROM tb_user WHERE user_email='$email' OR user_nick= '$usernick' ";
    $result = mysqli_query($conn, $sql);
//xu ly ket qua
    if (mysqli_num_rows($result) > 0) {
        echo 'email hoặc username đã tồn tại';
    } else {
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));

        $sql_2 = "INSERT INTO tb_user (user_id, user_nick, user_name, user_pass, user_email, user_code, user_level, user_regisdate, user_status) VALUES (NULL, '$usernick', '$username', '$pass_hash', '$email', '$code', '0', current_timestamp(), '0');";
        echo $sql_2;
        $result_2 = mysqli_query($conn, $sql_2);  
        
        if($result_2 >=1){
            echo 'đki thành công';
        }else{
            echo ' đki thất bại';
        }
    }












?>