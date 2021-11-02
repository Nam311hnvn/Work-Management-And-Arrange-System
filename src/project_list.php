<?php include('./reuse/header.php'); ?>
<div class="content-header">
	<div class="container">
		<div class="row mb-2 mt-2">
			<div class="col-sm-4">
				<h4>Project List</h4>
			</div>
			<hr class="border border-bottom-5 border-primary">
		</div>
	</div>
</div>

<div class="container bg-light border border-top border-primary rounded-2">
	<div class="row pt-2">
		<div class="col">
			<div class="mb-2  mb-lg-0 d-flex justify-content-end">
				<div class="col-md-2 ">
					<div class="card-tools">
						<a class="btn btn-sm btn-outline-success border-primary me-2" href="new_project.php"> <i class="fal fa-plus"></i>Add New Project</a>
					</div>
				</div>
			</div>
			<div class="mt-2 mb-2 mb-lg-0 d-flex justify-content-end">
				<div class="col-md-2 ">
					<form class="d-flex">
						<input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Project</th>
						<th scope="col">Date Started</th>
						<th scope="col">Dua Date</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					//Bước 1:
					include './reuse/config.php';
					//Bước 2:
					$sql = "SELECT * FROM tb_project";
					$result = mysqli_query($conn, $sql);
					$count = 1;
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo '<tr>';
							echo '<th scope="row">' . $count++ . '</th>';
							echo '<td>' . $row['pj_name'] . '</td>';
							echo '<td>' . $row['pj_start'] . '</td>';
							echo '<td>' . $row['pj_end'] . '</td>';
							if ($row['pj_status'] == 1) {
								echo '<td ><span class="badge bg-secondary">Pending</span></td>';
							} else if ($row['pj_status'] == 2) {
								echo '<td><span class="badge bg-warning">On-Hold</span></td>';
							} else {
								echo '<td><span class="badge bg-success">Done</span></td>';
							}
							echo '<td>';
							echo '<a class = "btn btn-primary me-2" href = "edit_project.php?id=' . $row['pj_id'] . '">Sửa</a>';
							echo '<a class = "btn btn-danger" href = "delete_project.php?id=' . $row['pj_id'] . '">Xóa</a>';
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
<?php include('./reuse/footer.php'); ?>