<?php

if(isset($_POST['save-multiple']))
{
    $user_ids = $_POST['userIds'];
    foreach($user_ids as $urow)
    {
        echo $urow;
    }
}



$pj_name = $_POST['pjName'];
$pj_status = $_POST['pjStatus'];
$pj_start = $_POST['pjStart'];
$pj_end = $_POST['pjEnd'];
// $user_ids = $_POST['userIds[]'];
$pj_note= $_POST['pjNote'];
$manager_id = 2;
// $user_ids = [1, 2, 3, 4];

include './reuse/config.php';

//Bước 2:
$sql = "INSERT INTO tb_project (pj_name, pj_note, pj_start, pj_end, pj_status, pj_manager, pj_userids) 
VALUES ('$pj_name', '$pj_note', '$pj_start', '$pj_end', '$pj_status', '$manager_id', '$user_ids');";

$result = mysqli_query($conn,$sql);

// Bước 3:
if($result > 0){
    header("Location: project_list.php");
}else{
    die ("Lỗi");
}

mysqli_close($conn);
?>

