<?php include('../reuse/header.php')?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-sm-4 pt-2">
                <h4>User List</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>

    <div class="container border border-top border-primary rounded-2">
        <div class="row pt-2">
            <div class="col">
                <div class="mb-2 mb-lg-0 d-flex justify-content-end">
                    <div class="col-md-2 ">
                        <div class="card-tools">
                            <a class="btn btn-sm btn-outline-success border-primary me-2" href="add_user.php"> <i
                                    class="fas fa-user-plus"></i>Add User</a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid ">
                    <div class="row pt-2">
                        <div class="col">
                            <div class="mb-2 mb-lg-0 d-flex justify-content-end">
                                <div class="col-md-2 ">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div style="width:100% ; overflow:auto ; height:auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date of Birth</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            //Bước 1:
                            include '../reuse/config.php';
                            //Bước 2:
                            $sql = "SELECT a.user_email,a.user_id,a.user_nick ,b.user_name,b.user_job,b.user_dob,b.user_phone, a.user_level  FROM  tb_user a, user_info b where a.user_id = b.user_id ";
                            
                            $result = mysqli_query($conn, $sql);
                            $count=1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($row['user_level'] == 1) {
                                        $Level = 'Admin';
                                    }
                                    else{
                                        $Level = 'User';
                                    }
                                    echo '<tr>';
                                    echo '<th scope="row">' .$count++ . '</th>';
                                    echo '<td>' . $row['user_nick'] . '</td>';
                                    echo '<td>' . $row['user_name'] . '</td>';
                                    echo '<td>' . $row['user_email'] . '</td>';
                                    echo '<td>' . $row['user_dob'] . '</td>';
                                    echo '<td>' . $row['user_phone'] . '</td>';
                                    echo '<td>' . $Level . '</td>';
                                    echo '<td>';
                                    echo '<a class = "btn btn-primary me-2 " href ="update_user.php?id='.$row['user_id'].' ">Sửa</a>';
                                    echo '<a class = "btn btn-danger deleteAccount" name = "'.$row['user_id'].'" id="delete" >Xóa</a>';
                                    echo '<td>';
                                    echo '</tr>';

                                }
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('.deleteAccount').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị id của hàng cần xóa
            if (confirm("Bạn có muốn xoá tài khoản này không?")) {
                $.ajax({
                    type: "post",
                    url: "../process/process_delete_user.php",
                    data: {
                        userid: $id,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            alert("Xoá thành công!");
                            window.location.href = "./user_list.php";
                        } else if (response == 'error'){
                            alert("Xoá thất bại");
                        }
                    }
                });
            } else{
                return false;
            }
        });
            
})
</script>
<?php include('../reuse/footer.php'); ?>