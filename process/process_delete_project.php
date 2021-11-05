<?php 
include '../reuse/config.php';
$id = $_POST["pjid"];
$sql = "DELETE FROM tb_task WHERE task_id='$id'";
if ($result=mysqli_query($conn, $sql)) {
    $sql1 = "DELETE FROM tb_project WHERE pj_id='$id'";
    if (mysqli_query($conn, $sql1)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>