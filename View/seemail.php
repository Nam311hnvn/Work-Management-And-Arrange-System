<?php
include('../reuse/config.php');
$sql = "SELECT * FROM tb_task ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['user_id'] . '">' . $row['user_name'] . '</option>';
    }
}

?>
</select>



?>