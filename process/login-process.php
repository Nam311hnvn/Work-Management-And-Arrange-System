<?php
        // Dịch vụ bảo vệ:
        session_start(); //Công ty dịch vụ Bảo vệ

        if(isset($_POST['do_login'])){
            $usernick = $_POST['txtNick'];
            $password = $_POST['txtPass'];

            // Bước 01: Kết nối DB Server
           include('./reuse/config.php');

            // Bước 02: Truy vấn thông tin
            $sql = "SELECT * FROM tb_user WHERE user_nick= '$usernick' ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $level = $row['user_level'];
            // B3. Kiểm tra và xử lý kết quả
                
                $password_hash = $row['user_pass'];              
                // Kiểm tra Mật khẩu có khớp không

                if(password_verify($password,$password_hash)){
                    
                        
                    if($row['user_status']>0){    
                        $_SESSION['CurrentUser'] = $usernick;
                        $_SESSION['CurrentLevel']=$level;                                             
                        if($level == 1){
                            echo "admin";
                        }else {
                            echo "user";
                        }
                    }else{
                        echo "cxt";
                    }
                }else{
                    echo "wrong";
                    }
            }else{
                echo 'tài khoản không tồn tại';
            }  
        }else header('location:login.php');
?>
<?php


