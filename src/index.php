<?php
include('./reuse/header.php');
?>
<div class="container-fluid px-0">
    <div class="row">
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
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./login.php">
                                    <h5 class="text-danger">(Đăng nhập)</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>

<div class="bg-image" 
     style="background-image: url('../imgs/BG.jpg'); height: 100vh">
</div>











<?php



include('./reuse/footer.php');
?>