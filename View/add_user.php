<?php include('../reuse/header.php')?>
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
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6 pt-2">
                    <div class="form-group">
                        <input type="hidden" id="userid" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" id="usernick" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Name</label>
                        <input type="text" id="name" class="form-control form-control-sm" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">Job</label>
                        <input type="text" id="job" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Date of Birth</label>
                        <input type="date" class="form-control form-control-sm" id="dob">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phonenumber</label>
                        <input type="text" id="phone" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-6 pt-2">

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email" required>
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
                            <option value="0">User</option>
                            <option value="1">Admin</option>
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
        $usernick = $('#usernick').val();
        $password = $('#password').val();
        $level = $('#level').val();
        $name = $('#name').val();
        $email = $('#email').val();
        $dob = $('#dob').val();
        $phone = $('#phone').val();
        $job =$('#job').val();
        if ($("#password").val() != $("#cpass").val()) 
        {
            alert("Mật khẩu không khớp!!");
        }else {
            $.ajax({
                    type: "post",
                    url: "../process/process_add_user.php",
                    data: {
                        usernick: $usernick,
                        password: $password,
                        level: $level,
                        name: $name,
                        email: $email,
                        phone: $phone,
                        dob: $dob,
                        job: $job,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Thêm thành công.");
                        } else if(response == 'error') {
                            alert("Thêm thất bại.");
                        }else if(response == 'erroremail'){
                            alert("Mail đã được dùng.");
                        }
                    }
                });
        }
    })

})
</script>
<?php include('../reuse/footer.php'); ?>