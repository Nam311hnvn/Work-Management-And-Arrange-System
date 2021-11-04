<?php
    include './reuse/config.php';
    $id = $_GET['id'];
    $sql = "DELETE from tb_project WHERE pj_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location: project_list.php");
    }
?>