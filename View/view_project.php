<?php
    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        include('../reuse/config.php');
?>

<?php

$id = $_GET['id'];
$sql1 = "SELECT * FROM tb_project WHERE pj_id = '$id'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$pj_name = $row1['pj_name'];
$pj_status = $row1['pj_status'];
$pj_start = $row1['pj_start'];
$pj_end = $row1['pj_end'];
// $user_ids = $row1['userIds[]'];
$pj_note = $row1['pj_note'];
$user_ids = [1, 2, 3, 4];

?>
<div class="content-header">
    <div class="container ">
        <div class="row mb-2 mt-2 ">
            <div class="col-sm-4">
                <h4>View Project</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
</div>
<div class="col-lg-12 container">
    <div class="card card-outline card-primary">
        <div class="card-body bg-light">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <dl>
                            <dt><b class="border-bottom border-primary ">Project Name</b></dt>
                            <dd><?php echo ucwords($pj_name) ?></dd>
                            <dt><b class="border-bottom border-primary">Note</b></dt>
                            <dd><?php echo ucwords($pj_note) ?></dd>
                        </dl>
                    </div>

                    <div class="col-md-6">
                        <dl>
                            <dt><b class="border-bottom border-primary">Start Date</b></dt>
                            <dd><?php echo ucwords($pj_start) ?></dd>
                        </dl>

                        <dl>
                            <dt><b class="border-bottom border-primary">End Date</b></dt>
                            <dd><?php echo ucwords($pj_end) ?></dd>
                        </dl>

                        <dl>
                            <dt><b class="border-bottom border-primary">Status</b></dt>
                            <dd>
                                <?php
                            
                                    if ($pj_status == 1) {
                                        echo '<td ><span class="badge bg-secondary">Pending</span></td>';
                                    } else if ($pj_status == 2) {
                                        echo '<td><span class="badge bg-warning">On-Hold</span></td>';
                                    } else {
                                        echo '<td><span class="badge bg-success">Done</span></td>';
                                    }
                                    echo '<td>';
                                

                                ?>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card card-outline ">
                <div class="card-header">
                    <span><b>Team Member/s:</b></span>

                </div>
                <div class="card-body">
                    <ul class="users-list">
                        <?php
                        $sql = "SELECT * FROM tb_user";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <li>

                                <a class="" href="javascript:void(0)"><?php echo ucwords($row['user_name']) ?></a>
                                
                            </li>
                        <?php
                        }
                        ?>
                </div>
            </div>
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