<?php session_start();
include('../reuse/header.php');
include('../reuse/config.php'); ?>

<div class="content-header">
    <div class="container ">
        <div class="row mb-2 mt-2 ">
            <div class="col-sm-4">
                <h4>New Task</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
</div>
<div class="col-lg-12 container">
    <div class="card card-outline card-primary">
        <div class="card-body bg-light">
            <form action="../process/process_new_task.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pjName" class="control-label">Name Project:</label>
                            <select class="form-select" aria-label="Default select example" name="pjName">
                                <?php
                                $sql = "SELECT * FROM tb_project";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['pj_id'] . '">' . $row['pj_name'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Name Task</label>
                            <input type="text" name="taskName" id="taskName" class="form-control form-control-sm border border-primary border-1 rounded">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Start Date</label>
                            <input type="date" name="taskStart" id="taskStart" class="form-control form-control-sm border border-primary border-1 rounded">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">End Date</label>
                            <input type="date" name="taskEnd" id="taskEnd" class="form-control form-control-sm border border-primary border-1 rounded">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Note</label>
                            <input type="text" name="taskNote" id="taskNote" class="form-control form-control-sm border border-primary border-1 rounded">
                        </div>
                    </div>

                    <div class="border-3 border-top mt-3 px-0 ">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary mt-2">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php include('../reuse/footer.php'); ?>