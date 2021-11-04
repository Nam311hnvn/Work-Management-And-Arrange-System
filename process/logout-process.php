
<?php
session_start();
unset($_SESSION['loginOK']);
unset($_SESSION['CurrentLevel']);
header('location: index.php');
?>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>