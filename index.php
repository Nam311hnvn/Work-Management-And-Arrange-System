<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item d-flex align-items-center">
                                    <span class="fs-5 ps-0">
                                        First you have to sign in.
                                    </span>
                                    <a class="nav-link text-danger fs-5" aria-current="page" href="./View/login.php">Sign
                                        in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>

    <div class="bg-image" style="background-image: url('./asset/imgs/BG.jpg'); height: 100vh">
        <div class="container-float">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 position-absolute top-50 start-30">
                    <h1 class="text-center text-white fs-1">TIME IS FREE, BUT IT'S PRICELESS.</h1>
                    <h1 class="text-center text-white fs-1">YOU CAN'T OWN IT BUT YOU CAN USE IT.</h1>
                    <h1 class="text-center text-white fs-1">YOU CAN'T KEEP IT BUT YOU CAN SPEND.</h1>
                </div>
            </div>
        </div>
    </div>

    <?php
include('./reuse/footer.php');
?>