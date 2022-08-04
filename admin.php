<?php

    @include 'config.php';
    session_start();

    if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Page - Berkibar</title>
</head>
<body>
    <div class="wrapper">

        <!--navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-custom text-white px-4">
            <div class="container-fluid d-flex justify-content-beetween">
                <div class="logo">
                    <h1 class="text-uppercase mb-0">Berkibar</h1>
                    <span>Bersama Kita Belajar</span>
                </div>
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/profile-pic.png" class="profile-img" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><?php echo($_SESSION["admin_name"]) ?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Log-Out</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">-Segera-</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--navbar ends -->

        <main class="d-flex">
            <!-- Sidebar starts -->
            <div class="sidebar-container collapse" id="sidebar-container">
                <div class="sidebar-heading text-center text-uppercase">
                    <div class="list-group list-group-flush text-start">
                        <a href="admin.php" class="list-group-item list-group-item-action active">
                            <i class="bi bi-house-door-fill"></i> Dashboard
                        </a>
                        <a href="admin_userlist.php" class="list-group-item list-group-item-action">
                            <i class="bi bi-person-lines-fill"></i> User List
                        </a>
                        <hr>
                        <a href="logout.php" class="list-group-item list-group-item-action text-danger">
                            <i class="bi bi-person-x-fill"></i> Log-Out
                        </a>
                    </div>
                </div>
            </div>
            <!-- Sidebar ends-->
    
            <!-- page content starts -->
            <div class="page-content-container">
                <div class="container-fluid px-4">
                    <div class="row py-3">
                        <div class="col head-page d-flex mb-3">
                            <button class="navbar-toggler p-0" id="sidebar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-container" aria-controls="sidebar-container">
                                <i class="bi bi-list"></i>
                            </button>
                            <h3 class="fs-4 fw-bold mb-0 px-2">Dashboard</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col align-middle">
                            <p>
                                Selamat datang di Halaman Admin Website Berkibar, <?php echo($_SESSION["admin_name"]) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page content ends -->
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function mediaquery(media) {
            if (media.matches) {
                $("#sidebar-container").addClass("hide");
                $("#sidebar-container").removeClass("show");
                $("#sidebar-toggler").removeAttr("aria-expanded");
                $("#sidebar-toggler").attr("aria-expanded", "false");
            } else {
                $("#sidebar-container").addClass("show");
                $("#sidebar-container").removeClass("hide");
                $("#sidebar-toggler").removeAttr("aria-expanded");
                $("#sidebar-toggler").attr("aria-expanded", "true");
            }
        }

        const media = window.matchMedia("(max-width: 1080px)")
        mediaquery(media)
        media.addListener(mediaquery)
    </script>
</body>
</html>