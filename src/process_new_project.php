<?php
$pj_name = $_POST['pjName'];
$pj_status= $_POST['pjStatus'];
$pj_start = $_POST['pjStart'];
$pj_end = $_POST['pjEnd'];
$user_ids = $_POST['userIds'];
$pj_note= $_POST['pjNote'];

include './reuse/config.php';

//Bước 2:
$sql = "INSERT INTO tb_project (pj_name, pj_status, pj_start, pj_end, user_ids, pj_note)
VALUES ('$pj_name', '$pj_status', '$pj_start', '$pj_end', '$user_ids', '$pj_note')";

echo $sql;
$result = mysqli_query($conn,$sql);

// Bước 3:
if($result > 0){
    header("Location: project_list.php");
}else{
    echo ("Lỗi!");
}

mysqli_close($conn);
?>

