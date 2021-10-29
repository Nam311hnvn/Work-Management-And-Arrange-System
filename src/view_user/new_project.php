<?php include('../reuse/header.php'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-sm-4">
                <h4>New Project</h4>
            </div>
            <hr class="border border-bottom-5 border-primary">
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Name</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="custom-select custom-select-sm">
                                <option value="">Pending</option>
                                <option value="">On-Hold</option>
                                <option value="">Done</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Start Date</label>
                            <input type="date" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">End Date</label>
                            <input type="date" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Project Team Members</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Description</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>

<?php include('../reuse/footer.php'); ?>