<?php

//Dịch vụ bảo vệ
session_start();
if (isset($_SESSION['CurrentUser'])) {
    include('../reuse/header.php');
    include('../reuse/config.php');
?>
    <div class="container-fluid">
        <div class="col-12 py-2">
            <div class="card ">
                <div class="card-body ">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container">
                            <h4 class="navbar-brand" href="#" disabled>Welcome <?php echo $_SESSION['CurrentUser'] ?>!!</h4>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell"></i>Notification
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <!-- Làm -->
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
                    <table class="table m-0 table-hover">
                        <!-- <colgroup>
                            <col width="5%">
                            <col width="30%">
                            <col width="15%">
                            <col width="15%">
                            <col width="35%">
                        </colgroup> -->
                        <thead>
                            <tr class="text-center">
                                <th class="col-1 text-center">#</th>
                                <th class="col-6">Project</th>
                                <th class="col-5">Status</th>
                                <th></th>
                                
                               
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $sql1 = "SELECT * FROM tb_project ";
                            $result1 = mysqli_query($conn, $sql1);


                            if (mysqli_num_rows($result1) > 0) {
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result1)) { ?>
                                    <th class="text-center"><?php echo $count++; ?></th>
                                    <td><?php echo $row['pj_name']; ?></td>

                                    <td><?php

                                        if ($row['pj_status'] == 1) {
                                            echo '<c class="badge bg-secondary">Pending</c>';
                                        } else if ($row['pj_status'] == 2) {
                                            echo '<c class="badge bg-warning">On-Hold</c>';
                                        } else {
                                            echo '<span class="badge bg-success">Done</span>';
                                        }
                                        ?></td>
                                    <td><?php echo '<a class = "btn btn-primary" href = "../View/view_project.php?id=' . $row['pj_id'] . '">View</a>'; ?></td>



                                    </tr>

                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
            </div>
            <div class="col-md-4">
                <div class="class col-12">
                    <div class="small-box bg-light shadow-sm border">
                        <div class="inner ps-2">
                            <!-- câu lệnh in tổng dự án đã tham gia -->
                            <h3><?php echo $conn->query("SELECT apply_user, COUNT(apply_id) FROM pj_apply GROUP BY apply_user ")->num_rows ?></h3>
                        
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
                        <h3><?php echo $conn->query("SELECT user_id, COUNT(task_id) FROM tb_task GROUP BY  user_id ")->num_rows ?></h3>
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
} else header("Location: ../index.php");

?>