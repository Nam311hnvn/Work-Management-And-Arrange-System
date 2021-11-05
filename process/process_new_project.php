<?php
include '../reuse/config.php';

//Lấy dữ liệu
$pj_name = $_POST['pjName'];
$pj_status = $_POST['pjStatus'];
$pj_start = $_POST['pjStart'];
$pj_end = $_POST['pjEnd'];
//$user_ids = $_POST['userIds[]'];
$pj_note= $_POST['pjNote'];
$manager_id = $_POST['pjManager'];
// $user_ids = [1, 2, 3, 4];

//SQL
$sql = "INSERT INTO tb_project (pj_name, pj_note, pj_start, pj_end, pj_status, pj_manager, pj_userids) 
VALUES ('$pj_name', '$pj_note', '$pj_start', '$pj_end', '$pj_status', '$manager_id', '$user_ids');";

$result = mysqli_query($conn,$sql);

//Xử lý
if($result > 0){
    header("Location: ../View/project_list.php");
}else{
    die ("Lỗi");
}

?>

