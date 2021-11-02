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
                                    <a class="nav-link text-danger fs-5" aria-current="page" href="./login.php">Sign
                                        In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <?php
    session_start(); // bắt đầu session cho người đăng nhập
    (empty($_SESSION['loginOK']))
    ?>
    <!-- Section Regis -->
    <div class="container-fluid px-0">
        <section class="vh-100" style="background-image: url('../asset/imgs/BG.jpg')">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-75">
                    <div class=" col-md-9 col-lg-9">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-m-5 top-50">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <form class="mx-4" action="" method="post">
                                            <h2 class="fw-bold text-center">Sign Up!</h2>
                                            <div class="input-group flex-nowrap py-3">
                                                <span class="input-group-text col-2" id="addon-wrapping">Username</span>
                                                <input type="text" class="form-control" placeholder="Enter your Username" aria-label="Username" aria-describedby="addon-wrapping" id="Username" required autofocus>
                                            </div>
                                            <div class="input-group flex-nowrap pb-3">
                                                <span class="input-group-text col-2" id="addon-wrapping">Name</span>
                                                <input type="text" class="form-control" placeholder="Enter your Name" aria-label="Name" aria-describedby="addon-wrapping" id="Name" required>
                                            </div>
                                            <div class="input-group flex-nowrap pb-3">
                                                <span class="input-group-text col-2" id="addon-wrapping">Email</span>
                                                <input type="email" class="form-control" placeholder="Enter your Email" aria-label="Email" aria-describedby="addon-wrapping" id="Email" required>
                                            </div>
                                            <div class="input-group flex-nowrap pb-3">
                                                <span class="input-group-text col-2" id="addon-wrapping">Password</span>
                                                <input type="password" class="form-control" placeholder="Enter your Password" aria-label="Password" aria-describedby="addon-wrapping" id="Password" required>
                                            </div>
                                            <div class="input-group flex-nowrap pb-3">
                                                <span class="input-group-text col-2" id="addon-wrapping">Confirm
                                                    Password</span>
                                                <input type="password" class="form-control" placeholder="Enter your Password" aria-label="Confirm_Password" aria-describedby="addon-wrapping" id="Password2" required>
                                            </div>
                                            <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary" name='Signin' id='Signin'>Register</button>
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

    <?php include('./reuse/footer.php'); ?>