<?php include('./reuse/header.php')?>
<?php //Check ID
    include('./reuse/config.php');
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $sql = "SELECT * FROM `tb_user` t, user_info f WHERE t.user_id = 2 AND f.user_id =2;";
         $result = mysqli_query($conn,$sql);
         if (mysqli_num_rows($result)>0) {
             $row = mysqli_fetch_assoc($result);
             $id =  $row['user_id'];
             $usernick =  $row['user_nick'];
             $username =  $row['user_name'];
             $email =  $row['user_email'];
             $job =  $row['user_job'];
             $dob =  $row['user_dob'];
             $phone =  $row['user_phone'];
             $level = $row['user_level'];
         }
        }
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-sm-4 pt-2">
                <h4>Add User</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
    <div class="container border border-primary border-2 rounded-2">
        <form action="process_update_user.php" id="manage_user" method="post">
            <div class="row">
                <div class="col-md-6 pt-2">
                    <div class="form-group">
                        <input type="hidden" name="userid" class="form-control form-control-sm" value="<?php if (isset($_GET["id"])) {echo $id;} ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" name="username" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $usernick;}?>" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $username;}?>" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">Job</label>
                        <input type="text" name="job" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $job;}?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Date of Birth</label>
                        <input type="date" class="form-control form-control-sm"name="dob" value="<?php if (isset($_GET["id"])) {echo $dob;}?>">
                    </div>
                </div>
                <div class="col-md-6 pt-2">

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" required
                        value="<?php if (isset($_GET["id"])) {echo $email;}?>">
                        <small id="#msg"></small>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label class="label control-label">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm" id="cpass" name="cpass">

                    </div>
                    <div class="form-group">
                        <label class="control-label">User Role:</label>
                        <select name="level" id="level" class="form-select form-select-sm">
                            <option value="0" <?php  if(isset(($_GET["id"])) && $level == 0){echo'selected';} ?>>User</option>
                            <option value="1" <?php if(isset(($_GET["id"])) && $level == 1){echo'selected';} ?>>Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phonenumber</label>
                        <input type="text" name="Phone" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $phone;}?>">
                    </div>

                </div>
            </div>
            <hr>
            <div class="col-lg-12 text-right justify-content-center d-flex mb-2">
                <button type="submit" class="btn btn-primary mr-2" id="save" name="save">Save</button>
            </div>
        </form>
    </div>
</div>
<script>$(document).ready(function(){
    $("#save").click(function(){
        if ($("#password").val() == $("#cpass").val()) {
            
        }
        else{
            alert("Mật khẩu không khớp!!");
        }
    })

})
</script>
<?php include('./reuse/footer.php'); ?>