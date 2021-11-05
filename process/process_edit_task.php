<?php
include'../reuse/config.php';

//Lấy dữ liệu
$id = $_POST['task_id'];
$task_name = $_POST['taskName'];
$task_start = $_POST['taskStart'];
$task_end = $_POST['taskEnd'];
$task_note = $_POST['taskNote'];
$user_id = $_POST['userId'];
$pj_name = $_POST['pjName'];

//SQL
$sql = "UPDATE tb_task 
SET task_name='$task_name', task_note='$task_note',
user_id='$user_id', task_start='$task_start', task_end='$task_end' 
WHERE task_id = '$id'";
$result = mysqli_query($conn, $sql);
echo $sql;

//Xử lý
if($result >0){
    header("Location: ../View/task_list.php");
}else{
    die ("Lỗi");
}

?>