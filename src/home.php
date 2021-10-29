<?php
include('./reuse/header.php');
?>
<div class="container-fluid px-0">
    <div class="row p-0 m-0">
        <div class="col">
            <nav class="navbar navbar-expand-lg " style="background-color:#ccebff">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <h3 class="text" href="./home.php"><b>Task Management System</b></h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <nav class="navbar navbar-expand-lg ">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="#">                                    
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Projects
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Add new</a></li>
                                        <li><a class="dropdown-item" href="#">List</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Task
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Report
                                    </a>
                                </li>

                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>










<?php
include('./reuse/footer.php')
?>