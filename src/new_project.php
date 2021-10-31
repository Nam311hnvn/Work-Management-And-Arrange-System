<?php include('./reuse/header.php'); ?>
<div class="containerbg" style="background-color: #e6f2ff;">
    <div class="content-header" style="background-color: #e6f2ff;">
        <div class="container ">
            <div class="row mb-2 ">
                <div class="col-sm-4">
                    <h4>New Project</h4>
                </div>
                <hr class="border border-bottom-5 border-primary">

            </div>
        </div>
    </div>
    <div class="col-lg-12 container">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Name</label>
                                <input type="text" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="status" class="form-control form-select custom-select-sm border border-primary border-1 rounded">
                                    <option value="">Pending</option>
                                    <option value="">On-Hold</option>
                                    <option value="">Done</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Start Date</label>
                                <input type="date" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">End Date</label>
                                <input type="date" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Project Team Members</label>
                                <input type="text" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Note</label>
                                <input type="text" class="form-control form-control-sm border border-primary border-1 rounded">
                            </div>
                        </div>
                        <div class="border-3 border-top mt-3 px-0 ">
                            <div class="d-flex w-100 justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary mt-2">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('./reuse/footer.php'); ?>