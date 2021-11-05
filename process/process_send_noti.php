<?php
if (isset($_POST['send'])) {
    include('../reuse/config.php');
    $userid = $_POST['userid'];
    $noti = $_POST['noti'];
    $sql = "INSERT INTO `tb_noti` (`user_id`, `noti_info`, `noti_createddate`) VALUES ('$userid', '$noti', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        echo "success";
    }
    else {
        echo "error";
    }
}else{
    echo "error";
}

?>