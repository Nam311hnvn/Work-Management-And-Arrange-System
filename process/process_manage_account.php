<?php
    include '../reuse/config.php';
    //Lấy dữ liệu
    $name = $_POST['name'];
    $job =$_POST["job"];
    $dob =$_POST["dob"];
    $email =$_POST["email"];
    $pass = $_POST["password"];
    $id = $_POST["userid"];
    $phone = $_POST["phone"];
    //SQL
    if ($pass == "") {
        $sql =" UPDATE `tb_user` SET `user_email`='$email' where tb_user.user_id='$id' " ;
    }
    else {
        $sql =" UPDATE `tb_user` SET `user_pass`='$pass',`user_email`='$email' where user_id='$id' " ;
    }
    $result = mysqli_query($conn,$sql);
    $sql1 ="UPDATE `user_info` SET `user_name`='$name',`user_job`='$job',`user_dob`='$dob',`user_phone`='$phone' WHERE user_info.user_id = '$id' ";
    $result1 = mysqli_query($conn,$sql1);
    if ( $result > 0) {
       echo "success";
    }else {
        echo "error";
    }
?>