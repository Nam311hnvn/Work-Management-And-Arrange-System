<?php 
include '../reuse/config.php';
$id = $_POST['taskid'];
$sql = "DELETE FROM tb_task WHERE task_id='$id'";
$result = mysqli_query($conn, $sql);
if ($result > 0) {
        echo "success";
    } else {
        echo "error";
    }
?>

