<?php
        // Dịch vụ bảo vệ:
        session_start(); //Công ty dịch vụ Bảo vệ

        if(isset($_POST['Login'])){
            $usernick = $_POST['txtNick'];
            $password = $_POST['txtPass'];

            // Bước 01: Kết nối DB Server
           include('./reuse/config.php');}

            // Bước 02: Truy vấn thông tin
            $sql = "SELECT * FROM tb_user WHERE user_nick= '$usernick' ";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_assoc($result);
            // B3. Kiểm tra và xử lý kết quả
            if(mysqli_num_rows($result) > 0){
                $password_hash = $row['user_pass'];              
                // Kiểm tra Mật khẩu có khớp không
                if(password_verify($password,$password_hash)){  
                    if($user['user_status']>0){                 
                    $_SESSION['loginOK'] = $usernick;                    
                    header("Location: home.php");
                    }else{
                        echo 'tài khoản chưa được xác thực';
                    }
                }else{
                    echo 'Mật khẩu không khớp';
                    header("Location: login.php");
                }
            }else{
                echo 'tài khoản không tồn tại';
            }       

?>