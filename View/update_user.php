<?php include('./reuse/header.php')?>
<?php //Check ID
    include('./reuse/config.php');
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $sql = "SELECT * FROM `tb_user` t, user_info f WHERE t.user_id = '$id' AND f.user_id = '$id';";
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
                <h4>Update User</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
    <div class="container border border-primary border-2 rounded-2">
        <form action="" id="manage_user" method="post">
            <div class="row">
                <div class="col-md-6 pt-2">
                    <div class="form-group">
                        <input type="hidden" id="userid" class="form-control form-control-sm" value="<?php if (isset($_GET["id"])) {echo $id;} ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" id="usernick" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $usernick;}?>" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Name</label>
                        <input type="text" id="name" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $username;}?>" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">Job</label>
                        <input type="text" id="job" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $job;}?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Date of Birth</label>
                        <input type="date" class="form-control form-control-sm"id="dob" value="<?php if (isset($_GET["id"])) {echo $dob;}?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phonenumber</label>
                        <input type="text" id="phone" class="form-control form-control-sm"value="<?php if (isset($_GET["id"])) {echo $phone;}?>">
                    </div>
                </div>

                <div class="col-md-6 pt-2">
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email" required
                        value="<?php if (isset($_GET["id"])) {echo $email;}?>">
                        <small id="#msg"></small>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password" >
                    </div>
                    <div class="form-group">
                        <label class="label control-label">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm" id="cpass" name="cpass">

                    </div>
                    <div class="form-group">
                        <label class="control-label">User Role:</label>
                        <select name="level" id="level" class="form-select form-select-sm">
                            <option value="0" <?php echo isset($level) && $level == 0 ? 'selected' : '' ?>>User</option>
                            <option value="1" <?php echo isset($level) && $level == 1 ? 'selected' : '' ?>>Admin</option>
                        </select>
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
<script>
    $(document).ready(function() {
    $("#save").click(function() {
        $userid = $('#userid').val();
        $job = $('#job').val();
        $usernick = $('#usernick').val();
        arlert($password);
        $password = $('#password').val();
        $level = $('#level').val();
        $name = $('#name').val();
        $email = $('#email').val();
        $dob = $('#dob').val();
        $phone = $('#phone').val();
        if ($("#password").val() != $("#cpass").val()) 
        {
            alert("Mật khẩu không khớp!!");
        }else {
            $.ajax({
                    type: "post",
                    url: "process_update_user.php",
                    data: {
                        job: $job,
                        userid: $userid,
                        usernick: $usernick,
                        password: $password,
                        level: $level,
                        name: $name,
                        email: $email,
                        phone: $phone,
                        dob: $dob,
                    },
                    success: function(response) {
                        if (response) {
                            alert(response);
                        } else if(response == 'error') {
                            alert("Sửa thất bại");
                        }
                        else if() {
                            alert("Sửa thành công");
                        }
                    
                    }
                });
        }
    });

})
</script>
<!-- alert(reponse); -->
<?php include('./reuse/footer.php'); ?>