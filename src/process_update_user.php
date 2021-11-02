<?php
    include './reuse/config.php';
    $username =$_POST["username"];
    $name =$_POST["name"];
    $job =$_POST["job"];
    $dob =$_POST["dob"];
    $email =$_POST["email"];
    $pass = $_POST["password"];
    $level = $_POST["level"];
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $sql3 =" UPDATE tb_user SET user_nick='$username',user_pass='$pass',user_email='$email',user_level='$level' where user_id='$id' " ;
        $result3 = mysqli_query($conn,$sql3);
        $sql4 ="UPDATE user_info SET user_name='$name',user_job='$job',user_dob='$dob' WHERE user_id = '$id'";
        $result4 = mysqli_query($conn,$sql4);
        if ($result3 > 0 && $result4 >0) {
            header("Location: user_list.php");
        }
        else {
            echo ("Lỗi3!");
        }

    }
    else{

   
    $sql = "INSERT INTO tb_user(user_id, user_nick, user_pass, user_email, user_code, user_level, user_regisdate, user_status) VALUES ('NULL','$username','$pass','$email','NULL','$level',current_timestamp(),'1')";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    if($result > 0){
    
    $sql1 = "SELECT * FROM tb_user WHERE user_email LIKE '$email'";
    echo $sql;
    $result1 = mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result1) > 0) {
        $row = mysqli_fetch_assoc($result1);
        $newId = $row['user_id'];
        $sql2 = "INSERT INTO `user_info` (user_id, user_name, user_job, user_dob,user_phone) VALUES ('$newId', '$name', '$job', '$dob', '')";
        $result2 = mysqli_query($conn,$sql2);
        if($result2 > 0)
        header("Location: user_list.php");
        }else{
            echo ("Lỗi1!");
        }
    }
    else{
        echo ("Lỗi2!");
    } 
    }
mysqli_close($conn);
    
    

    

    
?>