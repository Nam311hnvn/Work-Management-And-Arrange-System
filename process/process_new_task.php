<?php
include'../reuse/config.php';

//Lấy dữ liệu
$task_name = $_POST['taskName'];
$task_start = $_POST['taskStart'];
$task_end = $_POST['taskEnd'];
$task_note = $_POST['taskNote'];
$user_id = $_POST['userId'] ;
$pj_name = $_POST['pjName'];


//SQL
$sql = "INSERT INTO tb_task(task_name, task_note, user_id, task_start, task_end, pj_id) 
VALUES ('$task_name','$task_note','$user_id','$task_start', '$task_end', '$pj_name')";
$result = mysqli_query($conn, $sql);

//xử lý
if($result >0){
    header("Location: ../View/task_list.php");
}else{
    die ("Lỗi");
}

?>