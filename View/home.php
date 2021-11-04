<?php

    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        include('../reuse/config.php');
?>
<div class="container-fluid">
    <div class="col-12 py-2">
        <div class="card ">
            <div class="card-body ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <h4 class="navbar-brand" href="#" disabled>Welcome <?php echo $_SESSION['CurrentUser']?>!!</h4>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fas fa-bell"></i>Notification
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <!-- Làm SQL -->
                                        <li><a class="dropdown-item" href="#">Thông tin</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-4">
            <div class="class col-12">
                <div class="small-box bg-light shadow-sm border">
                    <div class="inner ps-2">
                        <p>Total Projects</p>
                    </div>
                    <div class="icon">
                        <i class="ps-2 fa fa-layer-group"></i>
                    </div>
                </div>
            </div>
            <div class="class col-12">
                <div class="small-box bg-light shadow-sm border">
                    <div class="inner ps-2">
                        <p>Total Tasks</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-tasks ps-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include('../reuse/footer.php');
}else header("Location: ../index.php");

?>