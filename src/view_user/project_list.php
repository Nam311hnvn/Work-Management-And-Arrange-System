<?php include('../reuse/header.php'); ?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2 ">
			<div class="col-sm-4">
				<h4>Project List</h4>
			</div>
			<hr class="border border-bottom-5 border-primary">
		</div>
	</div>
</div>

<div class="container-fluid">
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
	  <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>



<?php include('../reuse/footer.php'); ?>
