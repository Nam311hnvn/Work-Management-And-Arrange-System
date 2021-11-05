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
                Welcome 
                <?php echo $_SESSION['CurrentUser']?>!
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
}
?>

