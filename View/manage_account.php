<?php
    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        include('../reuse/config.php');
        $id = $_SESSION['CurrentId'];
        $sql = "SELECT * FROM `tb_user` t, user_info f WHERE t.user_id = '$id' AND f.user_id = '$id';";
         $result = mysqli_query($conn,$sql);
         if (mysqli_num_rows($result)>0) {
             $row = mysqli_fetch_assoc($result);
             $username =  $row['user_name'];
             $email =  $row['user_email'];
             $job =  $row['user_job'];
             $dob =  $row['user_dob'];
             $phone =  $row['user_phone'];
         }else{
         echo 'alert("bạn chưa có thông tin vui lòng Hỏi admin")'; // NGhi vấn lỗi 
         header("Location: ../View/home.php");
        }
?>

<div class="container-fluid">
    <div class="container">
        <div class="row mb-2 ">
            <div class="col-sm-4 pt-2">
                <h4>Manage Account</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
            </hr>
        </div>
    </div>

    <div id="manage-account" class="container border border-primary border-2 rounded-2 w-50">
        <input type="hidden" id="userid" value="<?php echo $_SESSION['CurrentId'] ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"
                value="<?php echo $username;?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control"
                value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
            <label for="Job">Job</label>
            <input type="text" name="job" id="job" class="form-control"
                value="<?php echo $job;?>" required>
        </div>
        <div class="form-group">
            <label for="DoB">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control"
                value="<?php echo $dob; ?>" >
        </div>
        <div class="form-group">
            <label for="email">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control"
                value="<?php echo $phone; ?>" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
            <small><i>Leave this blank if you dont want to change the password.</i></small>
        </div>
        <hr class="border border-bottom-5 border-primary">
        <div class="col-lg-12 text-right justify-content-center d-flex mb-2">
            <button class="btn btn-primary mr-2" id="save" name="save">Save</button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#save').click(function(e) {
        $userid = $('#userid').val();
        $job = $('#job').val();
        $password = $('#password').val();
        $name = $('#name').val();
        $email = $('#email').val();
        $dob = $('#dob').val();
        $phone = $('#phone').val();
        $.ajax({
            type: "post",
            url: "../process/process_manage_account.php",
            data: {
                job: $job,
                userid: $userid,
                password: $password,
                name: $name,
                email: $email,
                phone: $phone,
                dob: $dob,
            },
            success: function(response) {
                if (response == 'success') {
                    alert("Sửa thành công");
                    window.location.href = "./home.php";
                } else if (response == 'error') {
                    alert("Sửa thất bại");
                }
            }
        });
    })
})
</script>

<?php
include('../reuse/footer.php');
}else header("Location: ../index.php");
?>