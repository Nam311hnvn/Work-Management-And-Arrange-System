<?php
$pj_name = $_POST['pjName'];
$pj_status = $_POST['pjStatus'];
$pj_start = $_POST['pjStart'];
$pj_end = $_POST['pjEnd'];
// $user_ids = $_POST['userIds[]'];
$pj_note= $_POST['pjNote'];
$manager_id = 2;
$user_ids = [1, 2, 3, 4];


echo $pj_name;
echo $pj_status;

include './reuse/config.php';

//Bước 2:
$sql = "INSERT INTO tb_project (pj_id, pj_name, pj_note, pj_start, pj_end, pj_status, pj_manager, pj_userids, pj_createdtime) 
VALUES ('NULL', '$pj_name', '$pj_note', '$pj_start', '$pj_end', '$pj_status', '$manager_id', '$user_ids', current_timestamp());";

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
