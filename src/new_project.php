<<<<<<< HEAD
<?php include('./reuse/header.php');
include('./reuse/config.php')
?>

=======
<?php include('./reuse/header.php'); ?>
>>>>>>> b74c5bac2e923373ebf1d6c1930d9d566db62dd7
<div class="containerbg" style="background-color: #e6f2ff;">
    <div class="content-header" style="background-color: #e6f2ff;">
        <div class="container ">
            <div class="row mb-2 ">
                <div class="col-sm-4">
                    <h4>New Project</h4>
                </div>
                <hr class="border border-bottom-5 border-primary">

            </div>
        </div>
    </div>
    <div class="col-lg-12 container">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form action="process_new_project.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Name</label>
                                <input type="text" name="pjName" id="pjName" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="pjStatus" id="pjStatus" class="form-control form-select custom-select-sm border border-primary border-1 rounded">
                                    <option value="1">Pending</option>
                                    <option value="2">On-Hold</option>
                                    <option value="3">Done</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Start Date</label>
                                <input type="date" name="pjStart" id="pjStart" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">End Date</label>
                                <input type="date" name="pjEnd" id="pjEnd" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Project Team Members</label>
                                <select name="userIds" id="userIds" class="form-control form-control-sm border border-primary border-1 rounded" id="userids" >
                                    <option value=""></option>
                                    <?php
                                    $sql1 = "SELECT * FROM tb_user";
                                    $result1 = mysqli_query($conn, $sql1);
                                    while ($row1 = mysqli_fetch_assoc($result1)):
                                    ?>
                                        <option><?php echo $row1['user_nick'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Note</label>
                                <input type="text" name="pjNote" id="pjNote" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="border-3 border-top mt-3 px-0 ">
                            <div class="d-flex w-100 justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary mt-2">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include('./reuse/footer.php'); ?>