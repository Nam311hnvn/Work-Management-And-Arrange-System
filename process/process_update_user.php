<?php
    include '../reuse/config.php';

    //Lấy dữ liệu
    $usernick =$_POST["usernick"];
    $name =$_POST["name"];
    $job =$_POST["job"];
    $dob =$_POST["dob"];
    $email =$_POST["email"];
    $pass = $_POST["password"];
    $level = $_POST["level"];
    $id = $_POST["userid"];

    //SQL
    if ($password != "") {
        $sql =" UPDATE `tb_user` SET `user_nick` ='$usernick',`user_email`='$email',user_level='$level' where tb_user.user_id='$id' " ;
    }
    else {
        $sql =" UPDATE `tb_user` SET `user_nick` ='$usernick',`user_pass`='$pass',`user_email`='$email',user_level='$level' where tb_user.user_id='$id' " ;
    }
    $result = mysqli_query($conn,$sql);
    $sql1 ="UPDATE `user_info` SET `user_name`='$name',`user_job`='$job',`user_dob`='$dob' WHERE user_info.user_id = '$id' ";
    $result1 = mysqli_query($conn,$sql1);
    if ($result3 > 0 && $result4 >0) {
        echo "success";
    }
    else {
        echo "error";
    }

  

   
    
    
    

    

    
?>