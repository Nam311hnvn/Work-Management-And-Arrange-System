<?php include('./reuse/header.php')?>
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
                        <input type="text" name="id" value="<?php if (isset($_GET["id"])) {
                         echo $_GET["id"];
                        } ?>"disabled >
                        <label for="" class="control-label">Username</label>
                        <input type="text" name="username" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">Job</label>
                        <input type="text" name="job" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Date of Birth</label>
                        <input type="date" class="form-control form-control-sm" autocomplete="off" name="dob">
                    </div>
                </div>
                <div class="col-md-6 pt-2">

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" required
                            value="<?php echo isset($email) ? $email : '' ?>">
                        <small id="#msg"></small>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password">
                    </div>
                    <div class="form-group">
                        <label class="label control-label">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm" name="cpass">
                        <p id="checkpass"></p>

                    </div>
                    <div class="form-group">
                        <label class="control-label">User Role: </label>
                        <select name="level" id="level" class="form-select form-select-sm">
                            <option value="0" <?php echo isset($level) && $type == 0 ? 'selected' : '' ?>>User</option>
                            <option value="1" <?php echo isset($level) && $type == 1 ? 'selected' : '' ?>>Admin</option>
                        </select>
                    </div>

                </div>
            </div>
            <hr>
            <div class="col-lg-12 text-right justify-content-center d-flex mb-2">
                <button type="submit" class="btn btn-primary mr-2" name="save">Save</button>
            </div>
        </form>
    </div>
</div>
<?php include('./reuse/footer.php'); ?>