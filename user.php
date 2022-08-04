<?php

    @include 'config.php';
    session_start();

    if(!isset($_SESSION['user_name'])){
    header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page - Berkibar</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <div class="wrapper">
        
        <!--navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-light main-nav px-4">
            <div class="container-fluid d-flex justify-content-beetween">
                <div class="logo text-white">
                    <h1 class="text-uppercase mb-0">Berkibar</h1>
                    <span>Bersama Kita Belajar</span>
                </div>
                <button class="navbar-toggler nav-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navMenu">
                    <ul class="navbar-nav mb-lg-0 fs-5 fw-bolder mt-3 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="user.php#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="user.php#kursus">Kursus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="user.php#tutor">Tutor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="user.php#live">Kelas Live</a>
                        </li>
                        <li class="nav-item dropdown position-absolute end-0 px-4 px-lg-0">
                            <a class="nav-link dropdown-toggle text-white fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/profile-pic.png" class="profile-img" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mx-4 border-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><?php echo($_SESSION["user_name"]) ?></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="logout.php">Log-Out</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">-Segera-</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--navbar ends -->

        <!-- beranda starts -->
        <section id="beranda">
            <div class="container py-4 px-3 mb-4 rounded-3">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6 col-xl-7 text-center text-lg-start beranda-left l">
                        <h1 class="mb-0 display-6 text-capitalize fw-bold">
                            Platform pendidikan tanpa batas
                        </h1>
                        <p class="my-4 lead light fs-5">
                            Pembelajaran lengkap dari kelas dasar sampai atas, serta dengan kursus, latihan soal, video pembelajaran, dan pengajar yang menunjang tiap murid
                        </p>
                    </div>
                    <div class="col-lg-6 col-xl-5 my-2 d-flex justify-content-center beranda-right r">
                        <img src="images/Inspiration.svg" class="img-fluid beranda-img" alt="">
                    </div>
                </div>

                <div class="row g-4 pb-5">
                    <div class="col-sm-6 col-xl-3 t">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-25 rounded-3">
                            <span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="mb-0 fw-bold">2</h5>
                                    <span class="mb-0 h5">K+</span>
                                </div>
                                <p class="mb-0">Soal Latihan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 b">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-primary bg-opacity-10 rounded-3">
                            <span class="display-6 lh-1 text-primary mb-0"><i class="fas fa-user-tie"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="mb-0 fw-bold">150</h5>
                                    <span class="mb-0 h5">+</span>
                                </div>
                                <p class="mb-0">Pengajar Tutor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 t">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-danger bg-opacity-10 rounded-3">
                            <span class="display-6 lh-1 text-danger mb-0"><i class="fas fa-user-graduate"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="mb-0 fw-bold">5</h5>
                                    <span class="mb-0 h5">K+</span>
                                </div>
                                <p class="mb-0">Murid Online</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 b">
                        <div class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-25 rounded-3">
                            <span class="display-6 lh-1 text-success mb-0"><i class="bi bi-patch-check-fill"></i></span>
                            <div class="ms-4 h6 fw-normal mb-0">
                                <div class="d-flex">
                                    <h5 class="mb-0 fw-bold">500</h5>
                                    <span class="mb-0 h5">+</span>
                                </div>
                                <p class="mb-0">Video Pembelajaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- beranda ends -->

        <!-- kursus starts -->
        <section id="kursus" >
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-lg-8 mx-auto text-center b">
                        <h2 class="fs-1 fw-bold">Kursus Berkibar</h2>
                        <p class="mb-0">Kursus dikelompokan sesuai dengan tingkat pendidikan</p>
                    </div>
                </div>
            </div>

            <div class="kursus-wrapper position-relative">
                <div class="container pb-5 l">
                    <!-- Tabs START -->
                    <ul class="nav nav-pills nav-pills-bg-soft justify-content-center mb-4 px-3 py-3" id="course-pills-tab" role="tablist">
                        <!-- Tab item -->
                        <li class="nav-item me-2 me-sm-5">
                            <button class="nav-link mb-2 mb-md-0 fs-5 fw-bold active" id="sd" data-bs-toggle="pill" data-bs-target="#kursus_sd" type="button" role="tab" aria-controls="kursus_sd" aria-selected="false">SD</button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item me-2 me-sm-5">
                            <button class="nav-link mb-2 mb-md-0 fs-5 fw-bold" id="smp" data-bs-toggle="pill" data-bs-target="#kursus_smp" type="button" role="tab" aria-controls="kursus_smp" aria-selected="false">SMP</button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item me-2 me-sm-5">
                            <button class="nav-link mb-2 mb-md-0 fs-5 fw-bold" id="sma" data-bs-toggle="pill" data-bs-target="#kursus_sma" type="button" role="tab" aria-controls="kursus_sma" aria-selected="false">SMA</button>
                        </li>
                    </ul>
                    <!-- Tabs END -->
    
                    <!-- Tabs content START -->
                    <div class="tab-content r" id="course-pills-tabContent">
                        <!-- Content START -->
                        <div class="tab-pane fade show active" id="kursus_sd" role="tabpanel" aria-labelledby="sd">
                            <div class="row g-4 py-2">
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/mtksd.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Matematika</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari perhitungan numerik dengan menggunakan rumus dan logika</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/ipasd.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Ilmu Pengetahuan Alam</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari lingkungan sekitar yang terdapat pada alam</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/ips.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Ilmu Pengetahuan Sosial</h5></a>
                                            <p class="mb-2 text-truncate-2">Memperlajari kehidupan sosial dalam bermasyarakat yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/pkn.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Pendidikan Kewarganegaraan</h5></a>
                                            <p class="mb-2 text-truncate-2">Memperlajari bagaimana untuk hidup berbangsa dan bernegara</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/bindonesia.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Bahasa Indonesia</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari kaidah penggunaan bahasa Indonesia yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/binggris.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Bahasa Inggris</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari kaidah, penulisan, dan penggunaan bahasa inggris yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            </div> 
                        </div>
                        <!-- Content END -->
    
                        <!-- Content START -->
                        <div class="tab-pane fade" id="kursus_smp" role="tabpanel" aria-labelledby="smp">
                            <div class="row g-4">
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/mtksmp.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Matematika</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari perhitungan numerik dengan menggunakan rumus dan logika</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/ipasmp.jpeg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Ilmu Pengetahuan Alam</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari lingkungan sekitar yang terdapat pada alam</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/ips.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Ilmu Pengetahuan Sosial</h5></a>
                                            <p class="mb-2 text-truncate-2">Memperlajari kehidupan sosial dalam bermasyarakat yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/pkn.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Pendidikan Kewarganegaraan</h5></a>
                                            <p class="mb-2 text-truncate-2">Memperlajari bagaimana untuk hidup berbangsa dan bernegara</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/bindonesia.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Bahasa Indonesia</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari kaidah penggunaan bahasa Indonesia yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/binggris.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Bahasa Inggris</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari kaidah, penulisan, dan penggunaan bahasa inggris yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            </div> 
                        </div>
                        <!-- Content END -->
    
                        <!-- Content START -->
                        <div class="tab-pane fade" id="kursus_sma" role="tabpanel" aria-labelledby="sma">
                            <div class="row g-4">
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/bindonesia.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Bahasa Indonesia</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari kaidah penggunaan bahasa Indonesia yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/binggris.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Bahasa Inggris</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari kaidah, penulisan, dan penggunaan bahasa inggris yang baik dan benar</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/pkn.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Pendidikan Kewarganegaraan</h5></a>
                                            <p class="mb-2 text-truncate-2">Memperlajari bagaimana untuk hidup berbangsa dan bernegara</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/mtksma.png" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Matematika</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari perhitungan numerik dengan menggunakan rumus dan logika</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/fisika.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Fisika</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari pergerakan dan sifat yang terdapat pada lingkup ruang dan waktu</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/kimia.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Kimia</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari tentang susunan, struktur, sifat, dan perubahan materi</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/biologi.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Biologi</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari struktur dan pembentuk kehidupan pada mahluk hidup</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/ekonomi.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Ekonomi</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari berbagai aktivitas sosial dalam mengolah sumber daya</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/geografi.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Geografi</h5></a>
                                            <p class="mb-2 text-truncate-2">Geografi adalah ilmu yang mempelajari tentang hubungan, persamaan, dan perbedaan antarruang di Bumi</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="images/course/sosiologi.jpg" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex mb-2 req">
                                                <a href="#" class="badge px-3 bg-premium text-dark">Premium</a>
                                                <a href="#" class="badge px-3 mx-2 bg-berki text-dark">Berki</a>
                                                <a href="#" class="badge px-3 bg-kibar text-dark">Kibar</a>
                                            </div>
                                            <!-- Title -->
                                            <a href="#" class="card-title fw-normal"><h5>Sosiologi</h5></a>
                                            <p class="mb-2 text-truncate-2">Mempelajari tentang berbagai aspek kehidupan dan pengaruhnya</p>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="bi bi-camera-video-fill text-danger me-2"></i>Video</span>
                                                <span class="h6 fw-light mb-0"><i class="bi bi-journal-check text-orange me-2"></i>Latihan Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                
                            </div> 
                        </div>
                        <!-- Content END -->
                    </div>
                </div>
            </div>
    </section>
    <!-- kursus ends -->

    <!-- section live starts -->
    <section class="pt-5 t" id="live">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="bg-info bg-opacity-10 p-4 p-sm-5 rounded-3">
                        <div class="row position-relative">
                            <div class="col-11 mx-auto position-relative">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <h3 class="text-danger"><i class="bi bi-vinyl"></i> Kelas Live</h3>
                                        <p class="text-dark mb-3 mb-lg-0">Akses tertentu !!, para tutor akan mengajar anda secara langsung melalui kelas live yang dilakukan secara berkala. Pastikan anda mengecek jadwal live tutor anda</p>
                                    </div>
                                    <div class="col-lg-5 text-lg-end">
                                        <a href="#" class="btn btn-outline-danger mb-0">Pergi ke Kelas Live</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section live ends -->

    <!-- tutor starts -->
    <section id="tutor">
        <div class="container">
            <!-- Title -->
            <div class="row my-5 b">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fs-1 fw-bold">Tutor Favorit Berkibar</h2>
                </div>
            </div>
        </div>
        <div class="container tutor-container mb-5 l">
            <div class="tutor-slider">
                <div class="swiper-wrapper py-4">
                    <div class="swiper-slide">
                        <div class="card card-tutor">
                            <img src="images/tutor/marix.jpeg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Marix Marchellino Susanto</p>
                                <hr>
                                <p class="card-text">Dikenal dengan menyajikan rumus-rumus yang mudah dan cepat untuk menyelesaikan masalah matematika</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="requestContent(0)" data-bs-target="#staticBackdrop">
                                    Selengkapnya
                                </button>
                                <a href="#" class="btn btn-secondary">Ikut Tutor</a>
                            </div>
                        </div>
                    </div>  
                    <div class="swiper-slide">
                        <div class="card card-tutor">
                            <img src="images/tutor/Dewi Riyani.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Dewi Riyani</p>
                                <hr>
                                <p class="card-text">Terkenal dengan penggunaan bahasa yang sangat baku dalam percakapan yang dilakukan antar murid</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="requestContent(1)" data-bs-target="#staticBackdrop">
                                    Selengkapnya
                                </button>
                                <a href="#" class="btn btn-secondary">Ikut Tutor</a>
                            </div>
                        </div>
                    </div>  
                    <div class="swiper-slide">
                        <div class="card card-tutor">
                            <img src="images/tutor/vikky.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Vikky Aditya Febrianza Husein</p>
                                <hr>
                                <p class="card-text">Dikenal karena bahasa gaulnya yang digunakan dalam percakapan antar murid</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="requestContent(2)" data-bs-target="#staticBackdrop">
                                    Selengkapnya
                                </button>
                                <a href="#" class="btn btn-secondary">Ikut Tutor</a>
                            </div>
                        </div>
                    </div> 
                    <div class="swiper-slide">
                        <div class="card card-tutor">
                            <img src="images/tutor/kevin.jpeg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Muhammad Kevin Darrel</p>
                                <hr>
                                <p class="card-text">Dikenal karena memiliki aksen yang sangat baik dalam mengucapkan kata dan kalimat bahasa inggris</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="requestContent(3)" data-bs-target="#staticBackdrop">
                                    Selengkapnya
                                </button>
                                <a href="#" class="btn btn-secondary">Ikut Tutor</a>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

        <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Profil Tutor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama</th>
                                <td>
                                    <div class="form-control" id="xml_nama"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>NIM</th>
                                <td>
                                    <div class="form-control" id="xml_nim"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>No.Telepon</th>
                                <td>
                                    <div class="form-control" id="xml_telepon"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <div class="form-control" id="xml_email"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Tutor Bidang</th>
                                <td>
                                    <div class="form-control" id="xml_bidang"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal ends -->
    </section>
    <!-- tutor ends -->

    <footer class="footer pt-5 pb-3">
        <div class="container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>BERKIBAR</h4>
                    <ul>
                        <li><a href="user.php#beranda">Beranda</a></li>
                        <li><a href="user.php#kursus">Kursus Berkibar</a></li>
                        <li><a href="user.php#live">Kelas Live</a></li>
                        <li><a href="user.php#tutor">Tutor Berkibar</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Paket Layanan</h4>
                    <ul>
                        <li><a href="user.php#paket">Premium</a></li>
                        <li><a href="user.php#paket">Bersama Kita</a></li>
                        <li><a href="user.php#paket">Kita Belajar</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Kursus Berkibar</h4>
                    <ul>
                        <li><a href="user.php#kursus" onclick="kursus('sd')">Sekolah Dasar</a></li>
                        <li><a href="user.php#kursus" onclick="kursus('smp')">Sekolah Menengah Pertama</a></li>
                        <li><a href="user.php#kursus" onclick="kursus('sma')">Sekolah Menengah Atas</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script>
        
        function kursus(type){
            document.getElementById(type).click();
        }

        function createXMLHttpObject(){
            var xmlhttp = false;
            try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch(e){
                try{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
                }
                catch(E){
                    xmlhttp = false;
                }
            }

            if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
                xmlhttp = new XMLHttpRequest();
            }

            if (!xmlhttp) {
                alert("Terjadi kesalahan dalam proses XMLHttpRequest object")
            }
            
            return xmlhttp;
        }   

        function requestContent(index) {
            reqObj = createXMLHttpObject();
            reqObj.open("GET", "tutor.xml", true);
            reqObj.onreadystatechange = function(){
                if(reqObj.readyState == 4 && reqObj.status == 200){
                    dataXML = reqObj.responseXML;
                    contact = dataXML.getElementsByTagName("tutor")[index];

                    nama = contact.getElementsByTagName("nama")[0].firstChild.data;
                    nim = contact.getElementsByTagName("nim")[0].firstChild.data;
                    telepon = contact.getElementsByTagName("telepon")[0].firstChild.data;
                    email = contact.getElementsByTagName("email")[0].firstChild.data;
                    bidang = contact.getElementsByTagName("bidang")[0].firstChild.data;

                    document.getElementById("xml_nama").innerHTML = nama;
                    document.getElementById("xml_nim").innerHTML = nim;
                    document.getElementById("xml_telepon").innerHTML = telepon;
                    document.getElementById("xml_email").innerHTML = email;
                    document.getElementById("xml_bidang").innerHTML = bidang;
                }
                else{
                    document.getElementById("xml_nama").innerHTML = "loading...";
                }
            }
            reqObj.send(null);
        }

        //slider
        var tutor = new Swiper(".tutor-slider", {
            effect: "coverflow",
            direction : "horizontal",
            grabCursor: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 0,
                slideShadows: true,
            },
        });  

        //scroll reveal
        ScrollReveal().reveal('.l', {delay:250, duration:500, distance: '300px', origin: 'left', reset:'true'})
        ScrollReveal().reveal('.r', {delay:250, duration:500, distance: '300px', origin: 'right', reset:'true'})
        ScrollReveal().reveal('.t', {delay:250, duration:500, distance: '300px', origin: 'top', reset:'true'})
        ScrollReveal().reveal('.b', {delay:250, duration:500, distance: '300px', origin: 'bottom', reset:'true'})
        
    </script>
</body>
</html>