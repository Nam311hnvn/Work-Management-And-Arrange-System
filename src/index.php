<?php
include('./reuse/header.php');
?>
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
                                <span class="fs-5 ps-0">
                                    Hãy đăng nhập.
                                </span>
                                <a class="nav-link text-danger fs-5" aria-current="page" href="./login.php">(Đăng nhập)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>

<div class="bg-image" style="background-image: url('../imgs/BG.jpg'); height: 100vh">
    <div class="container-float">
        <div class="row">
            <div class="col">
                <a class="text-white"></a><h4>Free Fire</h4></a>
            </div>
        </div>
    </div>
</div>



<?php
include('./reuse/footer.php');
?>