<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
   
<body>

    <div class="container-fluid px-0">
        <div class="row p-0 m-0">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <h3 class="text" href="./index.php"><b>TIME CONTROL!<i class="fas fa-clock"></i></b></h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item d-flex align-items-center">
                                    <a class="nav-link text-danger fs-5" aria-current="page" href="./regis.php">Sign
                                        Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>


    <!-- Section Login -->
    <div class="container-fluid px-0">
        <section class="vh-100" style="background-image: url('../asset/imgs/BG.jpg')">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-75">
                    <div class=" col-md-5 col-lg-5">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-m-5 top-50">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <form class="mx-4" action="" method="POST">
                                            <h2 class="fw-bold text-center">Log in!</h2>
                                            <div class="input-group flex-nowrap py-3">
                                                <span class="input-group-text col-3" id="addon-wrapping"><i class="fas fa-user-alt pe-1"></i>Username</span>
                                                <input type="text" class="form-control" placeholder="Enter your Username" aria-label="Username" aria-describedby="addon-wrapping" id="txtNick" name="txtNick" required autofocus>
                                            </div>
                                            <div class="input-group flex-nowrap pb-3">
                                                <span class="input-group-text col-3" id="addon-wrapping"><i class="fas fa-key pe-1"></i>Password</span>
                                                <input type="password" class="form-control" placeholder="Enter your Password" aria-label="Password" aria-describedby="addon-wrapping" id="txtPass" name="txtPass" required>
                                            </div>
                                            <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                                <a class="text-decoration-none" href="./regis.php">New around here? Sign up</a>
                                            </div>
                                            <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-login" name='do_login' id='login'>Log In</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    
<script> 
    $(document).ready(function(){
    $("#login").click(function(){
        $txtNick = $("#txtNick").val();
        $txtPass = $("#txtPass").val();
        if ($txtNick== "" || $txtPass == "") {
            alert("Vui lòng nhập đầy đủ TK và MK");
            } else {
            $.ajax({
            url: "login-process.php",
            type: "POST",
            data: {
                do_login: "login",
                txtNick: $txtNick,
                txtPass: $txtPass,
            },
            success: function(response) {
            if (response == "admin") {
                window.location.href = "home.php";
            } else if (response == "user") {
                window.location.href = "home.php";
            }else if (response == "wrong") {
                alert("Mật khẩu không chính xác !");
            } else if(response == "cxt"){
                alert("TK chưa đc xác thực");
            }
            else {
                alert("Tài khoản không tồn tại");
            }
            }
        });
        }
});



});

</script>



    
                    if ($txtNick== '' || $txtPass == '') {
                        alert("Vui lòng nhập đầy đủ TK và MK");
                    } else {
                        $.ajax({
                            url: "login-process.php",
                            type: "POST",
                            data: {
                                do_login: "do_login",
                                txtNick: $txtNick,
                                txtPass: $txtPass,
                            },
                            success: function(response) {
                                if (response == "admin") {
                                    window.location.href = "home.php";
                                } else if (response == "user") {
                                    window.location.href = "home.php";
                                }else if (response == "wrong") {
                                    alert("Mật khẩu không chính xác !");
                                } else if(response == "cxt"){
                                    alert("TK chưa đc xác thực");
                                }
                                else {
                                    alert("Tài khoản không tồn tại");
                                }
                            }
                        });
                    }

    <?php include('./reuse/footer.php'); ?>