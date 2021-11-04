<?php
$task_name = $_POST['taskName'];
$task_start = $_POST['taskStart'];
$task_end = $_POST['taskEnd'];
$task_note = $_POST['taskNote'];
$user_id = 3;
$pj_name = $_POST['pjName'];

include'./reuse/config.php';

//Bước 2: truy vấn
$sql = "INSERT INTO tb_task(task_name, task_note, user_id, task_start, task_end, pj_id) 
VALUES ('$task_name','$task_note','$user_id','$task_start', '$task_end', '$pj_name')";
echo $sql;
$result = mysqli_query($conn, $sql);
//Bước 3: xử lý
if($result >0){
    header("Location: task_list.php");
}else{
    die ("Lỗi");
}




?>