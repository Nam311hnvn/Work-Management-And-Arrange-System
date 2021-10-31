<?php
include('./reuse/header.php');
?>                 
<div class="container-fluid">
    <div class="col-12 py-2">
        <div class="card ">
            <div class="card-body ">
                Welcome !
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-4">
            <div class="class col-12">
                <div class="small-box bg-light shadow-sm border">
                    <div class="inner ps-2">
                        <p>Total Projects</p>
                    </div>
                    <div class="icon">
                        <i class="ps-2 fa fa-layer-group"></i>
                    </div>
                </div>
            </div>
            <div class="class col-12">
                <div class="small-box bg-light shadow-sm border">
                    <div class="inner ps-2">
                        <p>Total Tasks</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-tasks ps-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<?php
include('./reuse/footer.php')
?>