<?php
    include('../reuse/config.php');
    include('send-Rmail-process.php');
    $userid = $_POST['userid'];
    $noti = $_POST['noti'];
    $sql = "INSERT INTO `tb_noti` (`user_id`, `noti_info`, `noti_createddate`) VALUES ('$userid', '$noti', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        $sql1 = "SELECT user_email FROM tb_user where user_id = '$userid'";
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0){
        while ($row = mysqli_fetch_assoc($result1)) {
        $email = $row['user_email'];
        }
        sendEmail($email,$noti);
        echo 'success';
        }else{
            echo "error";
        }
    }
    else {
        echo "error";
    }
?>