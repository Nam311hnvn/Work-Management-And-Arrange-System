<?php include('./reuse/header.php'); ?>

<div class="container-fluid px-0">
    <section class="vh-100" style="background-image: url('../imgs/BG.jpg')">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-75">
                <div class=" col-md-5 col-lg-5">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-m-5 top-50">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form class="mx-4" action="" method="post">
                                        <h2 class="fw-bold text-center">Log in!</h2>
                                        <div class="input-group flex-nowrap py-3">
                                            <span class="input-group-text" id="addon-wrapping">Email</span>
                                            <input type="text" class="form-control" placeholder="Enter your Email"
                                                aria-label="Username" aria-describedby="addon-wrapping" id="Login_email">
                                        </div>
                                        <div class="input-group flex-nowrap pb-3">
                                            <span class="input-group-text" id="addon-wrapping">Password</span>
                                            <input type="text" class="form-control" placeholder="Enter your Password"
                                                aria-label="Password" aria-describedby="addon-wrapping" id="Login_Password">
                                        </div>
                                        <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                            <a class="text-decoration-none" href="#">New around here? Sign up</a>
                                        </div>
                                        <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary" name='Login' id='Login'>Log In</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('./reuse/footer.php'); ?>