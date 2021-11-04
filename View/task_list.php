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

<div class="container bg-light border border-top border-primary rounded-2">
    <div class="row pt-2">
        <div class="col">
            <div class="mb-2 mb-lg-0 d-flex justify-content-end">
                <div class="col-md-2 ">
                    <div class="card-tools">
                        <a class="btn btn-sm btn-outline-success border-primary me-2 mb-4" href="new_task.php"> <i class="fal fa-plus"></i>Add New Task</a>
                    </div>
                </div>
            </div>
            <div class="">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Project</th>
                            <th scope="col">Task</th>
                            <th scope="col">Date Started</th>
                            <th scope="col">Dua Date</th>
                            <th scope="col">Create On</th>
                            <th scope="col">Note</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Bước 1:
                        include './reuse/config.php';
                        //Bước 2:
                        $sql = "SELECT t.*, p.* FROM tb_task t, tb_project p
                            WHERE p.pj_id = t.pj_id";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<th scope="row">' . $count++ . '</th>';
                                echo '<td>' . $row['pj_name'] . '</td>';
                                echo '<td>' . $row['task_name'] . '</td>';
                                echo '<td>' . $row['task_start'] . '</td>';
                                echo '<td>' . $row['task_end'] . '</td>';
                                echo '<td>' . $row['created_on'] . '</td>';
                                echo '<td>' . $row['task_note'] . '</td>';
                                echo '<td>';
                                echo '<a class = "btn btn-primary me-2" href = "edit_task.php?id=' . $row['task_id'] . '">Sửa</a>';
                                echo '<a class = "btn btn-danger" href = "delete_task.php?id=' . $row['task_id'] . '">Xóa</a>';
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
<?php include('./reuse/footer.php'); ?>