<?php
if (isset($_POST['send'])) {
    include('../reuse/config.php');
    $userid = $_POST['userid'];
    $noti = $_POST['noti'];
    $sql = "INSERT INTO `tb_noti` (`user_id`, `noti_info`, `noti_createddate`) VALUES ('$userid', '$noti', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        $sql1 = "SELECT * FROM tb_user a , tb_noti b where a.user_id = '$userid' AND b.user_id = '$userid';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Xử lý gửi Gmailađgit co
        }
        }
        echo "success";
    }
    else {
        echo "error";
    }
}else{
    echo "error";
}

?>