<?php include('./reuse/header.php')?>
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
                            <a class="btn btn-sm btn-outline-success border-primary me-2" href="new_project.php"> <i
                                    class="fal fa-plus"></i>Add New Project</a>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            //Bước 1:
                            include './reuse/config.php';
                            //Bước 2:
                            $sql = "SELECT * FROM  tb_user a, tb_userinfo b where a.user_id = b.user_id ";
                            $result = mysqli_query($conn, $sql);
                            $count=1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<th scope="row">' .$a . '</th>';
                                    echo '<td>' . $row['user_name'] . '</td>';
                                    echo '<td>' . $row['user_nick'] . '</td>';
                                    echo '<td>' . $row['user_dob'] . '</td>';
                                    echo '<td>' . $row['user_status'] . '</td>';
                                    echo '<td>';
                                    echo '<a class = "btn btn-primary me-2" href = "">Sửa</a>';
                                    echo '<a class = "btn btn-danger" href = "">Xóa</a>';
                                    echo '<td>';
                                    echo '</tr>';
                                    $count +=1;
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>s
</div>
<?php include('./reuse/footer.php'); ?>