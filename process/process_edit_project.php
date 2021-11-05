<?php
include '../reuse/config.php';

//Lấy dữ liệu
$id = $_POST['pj_id'];
$pj_name = $_POST['pjName'];
$pj_status = $_POST['pjStatus'];
$pj_start = $_POST['pjStart'];
$pj_end = $_POST['pjEnd'];
// $user_ids = $_POST['userIds[]'];
$pj_note= $_POST['pjNote'];
$manager_id = $_POST['pjManager'];
$user_ids = [1, 2, 3, 4];
echo $id;

//SQL
$sql = "UPDATE tb_project 
        SET pj_name='$pj_name',pj_note='$pj_note',pj_start='$pj_start',pj_end='$pj_end',
        pj_status='$pj_status',pj_manager='$manager_id',pj_userids='$user_ids'
        WHERE pj_id='$id'";
$result = mysqli_query($conn, $sql);

//Xử lý
if ($result) {
    header('location: ../View/project_list.php');
} else {
    die ('Lỗi');
}
?>