<?php
$id = $_POST['task_id'];
$task_name = $_POST['taskName'];
$task_start = $_POST['taskStart'];
$task_end = $_POST['taskEnd'];
$task_note = $_POST['taskNote'];
$user_id = 3;
$pj_name = $_POST['pjName'];



include'./reuse/config.php';

//Bước 2: truy vấn
$sql = "UPDATE tb_task 
SET task_name='$task_name', task_note='$task_note',
user_id='$user_id', task_start='$task_start', task_end='$task_end', pj_id='$pj_name' 
WHERE task_id = '$id'";
$result = mysqli_query($conn, $sql);
//Bước 3: xử lý
if($result >0){
    header("Location: task_list.php");
}else{
    die ("Lỗi");
}
