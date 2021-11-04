<?php
    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        include('../reuse/config.php');
?>

<div class="content-header">
    <div class="container ">
        <div class="row mb-2 mt-2 ">
            <div class="col-sm-4">
                <h4>New Project</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
</div>

<div class="col-lg-12 container">
    <div class="card card-outline card-primary">
        <div class="card-body bg-light">
            <form action="../process/process_new_project.php" method="POST">
            <input type="hidden" id="userid" class="form-control form-control-sm" value="<?php if (isset($_GET["id"])) {echo $id;} ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Name</label>
                            <input type="text" name="pjName" id="pjName" class="form-control form-control-sm border border-dark border-1 rounded">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="pjStatus" id="pjStatus" class="form-control form-select custom-select-sm border border-dark rounded">
                                <option value="1">Pending</option>
                                <option value="2">On-Hold</option>
                                <option value="3">Done</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Start Date</label>
                            <input type="date" name="pjStart" id="pjStart" class="form-control form-control-sm border border-dark rounded">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">End Date</label>
                            <input type="date" name="pjEnd" id="pjEnd" class="form-control form-control-sm border border-dark rounded">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Project Team Members</label>
                                <select name="userIds[]" class="form-control multiple-select form-control-ms  border rounded" style="display: flex;" multiple>
                                    <?php
                                    $sql = 'SELECT * FROM tb_user';
                                    $query = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($query) > 0) {
                                        foreach ($query as $rowhob) {
                                    ?>
                                            <option value="<?php $rowhob['user_id'] ?>"><?php echo $rowhob['user_name']; ?>
                                            </option>
                                    <?php
                                        }
                                    } else {
                                        echo "Lỗi!";
                                    }
                                    ?>
                                
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Note</label>
                            <input type="text" name="pjNote" id="pjNote" class="form-control form-control-sm border border-dark border-1 rounded">
                        </div>
                    </div>


                    <div class="border-3 border-top mt-3 px-0 ">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <button type="submit" name="save-multiple" class="btn btn-primary mt-2">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".mutiple-select").select2({});
</script>


<?php
include('../reuse/footer.php');
}else header("Location: ../index.php");
?>