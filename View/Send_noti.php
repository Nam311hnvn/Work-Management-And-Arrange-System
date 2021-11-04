<?php include('../reuse/header.php')?>
<div class="container-header">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ">
                <div class="col-sm-4 pt-2">
                    <h4>Send Notification</h4>
                </div>
                <hr class="border border-bottom-5 border-primary">
            </div>
        </div>
    </div>

    <div class="search">
        <div class="container mt-5">
            <div class="row justify-content-center w-auto h-auto">


                <form class="d-flex w-75 h-75" action="" method="POST">
                    <div class="col-md-2">
                        <div class="form-check px-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value='Radio1'
                                id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Users
                            </label>
                        </div>

                        <div class="form-check px-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value='Radio2'
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Project Group
                            </label>
                        </div>
                    </div>

                    <input class="form-control me-2 px-0" type="search" placeholder="Type here ...." aria-label="Search"
                        id="searchinput" name="searchinput">
                    <button class="btn btn-primary" type="submit" name='btnsearch' id="Search">Search</button>
                </form>


            </div>
        </div>

    </div>
</div>


<?php include('../reuse/footer.php'); ?>