<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../asset/css/select2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Time Control</title>
</head>

<body>
    <header class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand fs-5 ps-3" href="../View/home.php"><i class="fas fa-home me-3"></i> Task Management
                        System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../View/project_list.php"><i
                                        class="fas fa-layer-group me-1"></i> Projects</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="../View/task_list.php"><i
                                        class="fas fa-tasks me-1"></i> Task</a>
                            </li>

                            <?php 
                                if (isset($_SESSION['CurrentUser'])) {
                                if ($_SESSION['CurrentLevel']==1) {
                            
                            ?> <li class="nav-item">
                                <a class="nav-link text-white" href="../View/user_list.php"><i class="fas fa-users"></i> User Manage</a>
                            </li> 
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-paper-plane"></i>Send Notification
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="../View/Send_noti_user.php">Send to User</a></li>
                                        <a class="dropdown-item" href="../View/Send_noti_gruser.php">Send to Group User</a></li>
                                    </ul>
                                </li>
                            <?php
                            }
                            }
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    if (isset($_SESSION['CurrentUser'])) {
                                        echo $_SESSION['CurrentUser'] ;
                                    } else {
                                        echo "Username";
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item " href="#"><i class="fas fa-cog"></i>Manage
                                            Account</a></li>
                                    <li><a class="dropdown-item " href="../process/logout-process.php"><i
                                                class="fas fa-power-off"></i>Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>