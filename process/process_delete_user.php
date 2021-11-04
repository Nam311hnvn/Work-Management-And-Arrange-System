<?php 
include '../reuse/config.php';
$id = $_POST["userid"];
$sql = "DELETE FROM user_info WHERE user_id='$id'";
if ($result=mysqli_query($conn, $sql)) {
    $sql1 = "DELETE FROM tb_user WHERE user_id='$id'";
    if (mysqli_query($conn, $sql1)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>