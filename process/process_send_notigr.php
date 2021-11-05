<?php
    include('../reuse/config.php');
    include('send-Rmail-process.php');
    $pjid = $_POST['pjid'];
    $noti = $_POST['noti'];
    $sql1 = "SELECT u.user_email FROM  tb_user u,  pj_apply p where  p.apply_user = u.user_id AND  p.apply_pj= '$pjid' GROUP BY p.apply_user;";
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0){
        while ($row = mysqli_fetch_assoc($result1)) {
        $email = $row['user_email'];
        sendEmail($email,$noti);
        }
        echo 'success';
        }else{
            echo 'error';
        }
?>