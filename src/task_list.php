<?php include('./reuse/header.php'); ?>
<div class="content-header">
    <div class="container">
        <div class="row mb-2 mt-2">
            <div class="col-sm-4">
                <h4>Task List</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
</div>

<div class="container border border-top border-primary rounded-2">
    <div class="row pt-2">
        <div class="col">
            <div class="mb-2 mb-lg-0 d-flex justify-content-end">
                <div class="col-md-2 ">
                    <div class="card-tools">
                        <a class="btn btn-sm btn-outline-success border-primary me-2" href="new_task.php"> <i class="fal fa-plus"></i>Add New Task</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row pt-2">
                    <div class="col">
                        <div class="mb-2 mb-lg-0 d-flex justify-content-end">
                            <div class="col-md-2 ">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Project</th>
                                <th scope="col">Task</th>
                                <th scope="col">Create On</th>
                                <th scope="col">Date Time</th>
                                <th scope="col">Note</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Bước 1:
                            include './reuse/config.php';
                            //Bước 2:
                            $sql = "SELECT p.pj_name, c.cal_name, c.create_on, c.date_time, c.note FROM tb_calendar c, tb_project p";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $a = 1;
                                    echo '<tr>';
                                    echo '<th scope="row">'.$a.'</th>';
                                    echo '<td>' . $row['pj_name'] . '</td>';
                                    echo '<td>' . $row['cal_name'] . '</td>';
                                    echo '<td>' . $row['create_on'] . '</td>';
                                    echo '<td>' . $row['date_time'] . '</td>';
                                    echo '<td>' . $row['note'] . '</td>';
                                    echo '<td>';
                                    echo '<a class = "btn btn-primary me-2" href = "">Sửa</a>';
                                    echo '<a class = "btn btn-danger" href = "">Xóa</a>';
                                    echo '<td>';
                                    echo '</tr>';
                                    $a += 1;
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
<?php include('./reuse/footer.php'); ?>