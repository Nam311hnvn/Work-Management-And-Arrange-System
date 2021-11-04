<?php
    include '../reuse/config.php';
    $id = $_GET['id'];
    $sql = "DELETE from tb_task WHERE task_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location: ../View/task_list.php");
    }
?>