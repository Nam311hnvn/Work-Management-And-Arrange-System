<?php 
include '../reuse/config.php';
$usernick =$_POST["usernick"];
$name =$_POST["name"];
$job =$_POST["job"];
$dob =$_POST["dob"];
$email =$_POST["email"];
$pass = $_POST["password"];
$level = $_POST["level"];
$phone =$_POST["phone"];

    $sql = "INSERT INTO `tb_user`(`user_id`, `user_nick`, `user_pass`, `user_email`, `user_code`, `user_level`, `user_regisdate`, `user_status`) VALUES ('NULL','$usernick','$pass','$email','NULL','$level',current_timestamp(),'1')";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
    $sql1 = "SELECT * FROM tb_user WHERE user_email LIKE '$email'";
    $result1 = mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result1) > 0) {
        $row = mysqli_fetch_assoc($result1);
        $newId = $row['user_id'];
        $sql2 = "INSERT INTO `user_info` (`user_id`, `user_name`, `user_job`, `user_dob`,`user_phone`) VALUES ('$newId', '$name', '$job', '$dob', '$phone')";
        $result2 = mysqli_query($conn,$sql2);
        if($result2 > 0)
            echo "success";
        }else{
            echo "error";
        }
    }
    else{
        echo "error";
    } 

mysqli_close($conn);
?>