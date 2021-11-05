<?php
    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        include('../reuse/config.php');
?>

<?php

$id = $_GET['id'];
$sql_cr = "SELECT * FROM tb_task WHERE task_id = '$id'";
$result_cr = mysqli_query($conn, $sql_cr);
$row_cr = mysqli_fetch_assoc($result_cr);
$task_name = $row_cr['task_name'];
$task_start = $row_cr['task_start'];
$task_end = $row_cr['task_end'];
$task_note = $row_cr['task_note'];
$task_id =  $row_cr['task_id'];

?>

<div class="content-header">
    <div class="container ">
        <div class="row mb-2 mt-2 ">
            <div class="col-sm-4">
                <h4>Update Task</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
</div>

<div class="col-lg-12 container">
    <div class="card card-outline card-primary">
        <div class="card-body bg-light">
            <form action="../process/process_edit_task.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pjName" class="control-label">Name Project</label>
                            <select class="form-select" aria-label="Default select example" name="pjName" id="pjName" value="<?php echo $pj_name ?>">
                                <?php
                                $sql = "SELECT * FROM tb_project";
                                $sql1 = "SELECT p.*, t.* FROM tb_project as p, tb_task as t
                                WHERE t.pj_id = p.pj_id AND t.task_id = '.$id.'"; // select ra thông tin 2 bảng khi có task_id bằng task_id
                                $result = mysqli_query($conn, $sql);
                                $result1 = mysqli_query($conn, $sql1);
                                $row1 = mysqli_fetch_assoc($result1);
                                if (mysqli_num_rows($result) > 0) {   
                                    echo '<option value="' . $row1['pj_id'] . '">' . $row1['pj_name'] . '</option>';
                                    //while($row = mysqli_fetch_assoc($result)){                                
                                }
                                
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Name Task</label>
                            <input type="text" name="taskName" id="taskName" value="<?php echo $task_name ?>" class="form-control form-control-sm border border-dark border-1 rounded">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Start Date</label>
                            <input type="date" name="taskStart" id="taskStart" value="<?php echo $task_start ?>" class="form-control form-control-sm border border-dark border-1 rounded">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">End Date</label>
                            <input type="date" name="taskEnd" id="taskEnd" value="<?php echo $task_end ?>" class="form-control form-control-sm border border-dark border-1 rounded">
                        </div>
                    </div>

						<input type="hidden" name="userId" value="<?php echo $_SESSION['CurrentId'] ?>">
                               
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Note</label>
                            <input type="text" name="taskNote" id="taskNote" value="<?php echo $task_note ?>" class="form-control form-control-sm border border-dark border-1 rounded">
                        </div>
                    </div>

                    <div class="border-3 border-top mt-3 px-0 ">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <input type="hidden" name="task_id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-primary mt-2">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include('../reuse/footer.php');
}else header("Location: ../index.php");
?>