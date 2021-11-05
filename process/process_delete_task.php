<?php
include('../reuse/config.php');
$idtask = $_POST['tkid'];
$sql ="DELETE FROM tb_task WHERE task_id='$idtask'";
$result = mysqli_query($conn,$sql);
if ($result > 0) {
    echo "success";
}else
    echo "error";
?>
