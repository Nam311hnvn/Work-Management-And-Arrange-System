<?php
    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        
?>
<?php
if($_SESSION['CurrentLevel'] ==0){
?>
<div class="container-fluid">
    <div class="col-12 py-2">
        <div class="card ">
            <div class="card-body ">
<<<<<<< HEAD
                Welcome 
                <?php echo $_SESSION['CurrentUser']?>!
=======
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
>>>>>>> abb7c17451b247ce2f79d3c9cb0cf75494851f08
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
            <tbody>
                <?php               
                include('../reuse/config.php');
                $sql = "SELECT t.*, p.* FROM tb_task t, tb_project p WHERE p.pj_id = t.pj_id";
                            
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<th scope="row">' . $count++ . '</th>';
                                echo '<td>' . $row['pj_name'] . '</td>';
                                echo '<td>' . $row['pj_status'] . '</td>';    
                                echo '<a class = "btn btn-primary" href = "delete_task.php?id=' . $row['task_id'] . '">Xóa</a>';                       
                                echo '<td>';
                                echo '</tr>';
                            }
                        }
                ?>
            </tbody>
        </div>
        <div class="col-md-4">
            <div class="class col-12">
                <div class="small-box bg-light shadow-sm border">
                    <div class="inner ps-2">
                        <h3><?php echo $conn->query("SELECT Count(user_id)")?></h3>
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
                        <h3></h3>
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
<<<<<<< HEAD
}
?>

=======

?>
>>>>>>> abb7c17451b247ce2f79d3c9cb0cf75494851f08
