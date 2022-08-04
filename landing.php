<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkibar</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/landing.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <nav id="nav">
                    <a href="#beranda">
                        <div class="logo">
                            <h1>BerKibar</h1>
                            <span>Bersama Kita Belajar</span>
                        </div>
                    </a>
                    <ul class="nav-menu">
                        <a href="landing.php#beranda">
                            <li class="menu" id="menu">
                                <h4 id="menu">Beranda</h4> 
                                <i class='bx bx-chevron-down' id="menu"></i>
                            </li>
                        </a>
                        <a href="landing.php#tentang">
                            <li class="menu" id="menu">
                                <h4 id="menu">Tentang Kami</h4>
                                <i class='bx bx-chevron-down' id="menu"></i>
                            </li>
                        </a>
                        <a href="landing.php#layanan">
                            <li class="menu" id="menu">
                                <h4 id="menu">Layanan</h4>
                                <i class='bx bx-chevron-down' id="menu"></i>
                            </li>
                        </a>
                        <a href="landing.php#testimoni">
                            <li class="menu" id="menu">
                                <h4 id="menu">Testimoni</h4>
                                <i class='bx bx-chevron-down' id="menu"></i>
                            </li>
                        </a>
                        <a href="landing.php#paket">
                            <li class="menu" id="menu">
                                <h4 id="menu">Paket</h4>
                                <i class='bx bx-chevron-down' id="menu"></i>
                            </li>
                        </a>
                    </ul>

                    <a href="login.php" class="login">
                        <div class="btn">
                            <h4>Login</h4>
                        </div>
                    </a>

                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                </nav>
            </div>
        </header>
        
        <section class="beranda" id="beranda">
            <div class="container">
                <div class="content-left">
                    <h1>Platform <span>belajar online</span> terbesar dan terlengkap</h1>
                    <p>Layanan belajar online terfavorit, dengan ribuan pengguna yang tersebar di seluruh wilayah Indoneisa. Fitur yang menarik dan mudah untuk digunakan.</p>
                    <div class="btn-container">
                        <a href="login.php" class="btn">
                            Join now
                        </a>
                        <a href="landing.php#tentang" class="btn">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="content-right">
                    <img src="images/Welcome.svg" alt="profile">
                </div>
            </div>                
        </section>
   
        <section class="tentang" id="tentang">
            <h1 class="heading">Tentang Kami</h1>
            <p class="sub-heading r">
                <span>Berkibar</span> (Bersama Kita Belajar), dibentuk pada <span>16 Maret 2005</span>. Berawal dengan menyediakan layanan kursus secara ofline, hingga akhirnya
                Berkibar mengikuti perkembangan teknologi dengan menyediakan layanan kursus secara online pada <span>20 Maret 2016</span>. Berkibar menjadi platform pendidikan 
                online yang menyediakan pembelajaran mulai dari pendidikan <span>SD</span>, <span>SMP</span>, hingga <span>SMA</span>. Berkibar telah berhasil bekembang menjadi 
                platform pendidikan <span>No. 1 di Indonesia</span> pada tahun 2020.
            </p>
            <div class="swiper-container tentang-slider l">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="desc">Terfektif & terefisien</div>
                        <img src="images/Dashboard.svg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="desc">Pengajar ahli & handal</div>
                        <img src="images/Customer Interview.svg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="desc">Terfleksibel</div>
                        <img src="images/Report.svg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="desc">Terpecaya</div>
                        <img src="images/testimonial.svg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="desc">Terjamin</div>
                        <img src="images/Succes.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="layanan" id="layanan">
            <h1 class="heading">Paket Layanan</h1>
            <div class="content-container r">
                <div class="btn-container">
                    <button class="active" id="sd">SD</button>
                    <button id="smp">SMP</button>
                    <button id="sma">SMA</button>
                </div>

                <div class="content active" id="sdcontent">
                    <div class="swiper-container layanan-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card premium">
                                    <div class="img-container">
                                        <img src="images/Solving Problem.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-videos'></i> Video Belajar
                                    </div>
                                    <div class="jenis">
                                        Paket Premium
                                    </div>
                                </div>
                                <div class="details">
                                    SD 1, 2, 3
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card premium">
                                    <div class="img-container">
                                        <img src="images/Solving Problem.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-videos'></i> Video Belajar
                                    </div>
                                    <div class="jenis">
                                        Paket Premium
                                    </div>
                                </div>
                                <div class="details">
                                    SD 4, 5, 6
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card berki">
                                    <div class="img-container">
                                        <img src="images/Integrated.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-badge-check'></i> Simulasi TO + UN
                                    </div>
                                    <div class="jenis">
                                        Bersama Kita
                                    </div>
                                </div>
                                <div class="details">
                                    TO + UN SD
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card kibar">
                                    <div class="img-container">
                                        <img src="images/Management.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-package'></i> Paket Lengkap
                                    </div>
                                    <div class="jenis">
                                        Kita Belajar
                                    </div>
                                </div>
                                <div class="details">
                                    Kibar SD
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content" id="smpcontent">
                    <div class="swiper-container layanan-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card premium">
                                    <div class="img-container">
                                        <img src="images/Solving Problem.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-videos'></i> Video Belajar
                                    </div>
                                    <div class="jenis">
                                        Paket Premium
                                    </div>
                                </div>
                                <div class="details">
                                    SMP 1, 2, 3
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card berki">
                                    <div class="img-container">
                                        <img src="images/Integrated.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-badge-check'></i> Simulasi TO + UN
                                    </div>
                                    <div class="jenis">
                                        Bersama Kita
                                    </div>
                                </div>
                                <div class="details">
                                    TO + UN SMP
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card kibar">
                                    <div class="img-container">
                                        <img src="images/Management.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-package'></i> Paket Lengkap
                                    </div>
                                    <div class="jenis">
                                        Kita Belajar
                                    </div>
                                </div>
                                <div class="details">
                                    Kibar SMP
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content" id="smacontent">
                    <div class="swiper-container layanan-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card premium">
                                    <div class="img-container">
                                        <img src="images/Solving Problem.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-videos'></i> Video Belajar
                                    </div>
                                    <div class="jenis">
                                        Paket Premium
                                    </div>
                                </div>
                                <div class="details">
                                    SMA 1, 2, 3
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card premium">
                                    <div class="img-container">
                                        <img src="images/Solving Problem.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-videos'></i> Video Belajar
                                    </div>
                                    <div class="jenis">
                                        Paket Premium
                                    </div>
                                </div>
                                <div class="details">
                                    UTBK + UM
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card berki">
                                    <div class="img-container">
                                        <img src="images/Integrated.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-badge-check'></i> Simulasi TO + UN
                                    </div>
                                    <div class="jenis">
                                        Bersama Kita
                                    </div>
                                </div>
                                <div class="details">
                                    TO + UN SMA
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card berki">
                                    <div class="img-container">
                                        <img src="images/Integrated.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-badge-check'></i> Simulasi UTBK
                                    </div>
                                    <div class="jenis">
                                        Bersama Kita
                                    </div>
                                </div>
                                <div class="details">
                                    Siap UTBK
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card kibar">
                                    <div class="img-container">
                                        <img src="images/Management.svg" alt="">
                                    </div>
                                    <div class="feature">
                                        <i class='bx bxs-package'></i> Paket Lengkap
                                    </div>
                                    <div class="jenis">
                                        Kita Belajar
                                    </div>
                                </div>
                                <div class="details">
                                    Kibar SMA
                                    <a href="#">
                                        <i class='bx bxs-right-arrow-square bigger'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimoni" id="testimoni">
            <h1 class="heading">Testimoni</h1>
            <div class="container l">
                <div class="swiper-container testimoni-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <div class="image">
                                    <img src="images/pas 1.jpeg">
                                </div>
                                <div class="testi">
                                    <cite>-Diana</cite>
                                    <blockquote>
                                        Berkibar jadi pilihan paling tepat banget buat aku yang anaknya susah fokus kalau belajar bareng temen. Video materinya lengkap dan diajarinnya 
                                        dari konsepnya. Bikin aku bener-bener ngerti dan lancar dalam ngerjain ujian.
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <div class="image">
                                    <img src="images/pas 3.jpg">
                                </div>
                                <div class="testi">
                                    <cite>-Moana</cite>
                                    <blockquote>
                                        Gak nyesel pake Berkibar. Habis nonton video materi, lanjut latihan soal. Bantu banget buat nge-remind yang baru kita pelajari. 
                                        Pembahasan tryout-nya pun lengkap, dikasih tahu perlu tingkatin di mana dan aku udah mahir di mana.
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <div class="image">
                                    <img src="images/pas 2.jpg">
                                </div>
                                <div class="testi">
                                    <cite>-Yahya</cite>
                                    <blockquote>
                                        Ketinggalan pelajaran jadi gak khawatir karena ada Berkibar! Aku bisa download video materinya dan tonton berulang-ulang sampe bener-bener ngerti. 
                                        Aku juga ngandelin latihan soal dan latihan-latihan soal dari Berkibar buat ngelatih kemampuan aku tiap harinya.
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="paket" id="paket">
            <h1 class="heading">Perbandingan Paket</h1>
            <div class="grid-wrapper">
                <div class="grid-container">
                    <div class="container t">
                        <div class="header premium">
                            <div class="title">
                                <div class="jenis">Paket Premium</div>
                                <div class="feature"><i class='bx bxs-like'></i> Terfavorit</div>
                            </div>
                            <div class="desc">
                                <p>Paket dengan video pembelajaran dan materi yang lengkap melalui akses premium.</p>
                            </div>
                            <div class="image">
                                <img src="images/Solving Problem.svg" alt="">
                            </div>
                        </div>
                        <div class="harga">
                            <p><i class='bx bx-money-withdraw'></i> Rp 450.000 / Tahun</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 300.000 / 6 Bulan</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 60.000 / Bulan</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 2.500 / Hari</p>
                            <a href="#layanan">Lihat Paket Layanan</a>
                        </div>
                        <div class="details">
                            <h3>Keunggulan :</h3>
                            <p><i class='bx bx-check-circle' ></i> Akses video pembelajaran premium</p>
                            <p><i class='bx bx-check-circle' ></i> Akses rangkuman materi premium</p>
                            <p><i class='bx bx-check-circle' ></i> Akses penjelasan latihan soal</p>
                        </div>
                    </div>
                    <div class="container b">
                        <div class="header berki">
                            <div class="title">
                                <div class="jenis">Paket Bersama Kita</div>
                                <div class="feature"><i class='bx bxs-check-shield' ></i> Terjamin</div>
                            </div>
                            <div class="desc">
                                <p>Paket dengan video pembelajaran dan materi yang lengkap + Simulasi, kisi-kisi, dan pembahasan soal ujian.</p>
                            </div>
                            <div class="image">
                                <img src="images/Integrated.svg" alt="">
                            </div>
                        </div>
                        <div class="harga">
                            <p><i class='bx bx-money-withdraw'></i> Rp 600.000 / Tahun</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 425.000 / 6 Bulan</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 80.000 / Bulan</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 3.000 / Hari</p>
                            <a href="#layanan">Lihat Paket Layanan</a>
                        </div>
                        <div class="details">
                            <h3>Keunggulan :</h3>
                            <p class="premium"><i class='bx bx-check-circle' ></i> Paket Premium</p>
                            <p><i class='bx bx-check-circle' ></i> Mengikuti simulasi ujian paket per minggu</p>
                            <p><i class='bx bx-check-circle' ></i> Sertifikat nilai simulasi ujian</p>
                            <p><i class='bx bx-check-circle' ></i> Kisi-kisi soal ujian</p>
                            <p><i class='bx bx-check-circle' ></i> Rumus super 101</p>
                        </div>
                    </div>
                    <div class="container t">
                        <div class="header kibar">
                            <div class="title">
                                <div class="jenis">Paket Kita Belajar</div>
                                <div class="feature"><i class='bx bxs-bookmark-plus' ></i> Terlengkap</div>
                            </div>
                            <div class="desc">
                                <p>Paket dengan akses segala fitur dan keuntungan dengan harga termurah dan terhemat</p>
                            </div>
                            <div class="image">
                                <img src="images/Management.svg" alt="">
                            </div>
                        </div>
                        <div class="harga">
                            <p><i class='bx bx-money-withdraw'></i> Rp 800.000 / Tahun</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 550.000 / 6 Bulan</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 99.000 / Bulan</p>
                            <p><i class='bx bx-money-withdraw'></i> Rp 3.500 / Hari</p>
                            <a href="#layanan">Lihat Paket Layanan</a>
                        </div>
                        <div class="details">
                            <h3>Keunggulan :</h3>
                            <p class="premium"><i class='bx bx-check-circle' ></i> Paket Premium</p>
                            <p class="berki"><i class='bx bx-check-circle' ></i> Paket Bersama Kita</p>
                            <p><i class='bx bx-check-circle' ></i> Akses live tutor super kibar</p>
                            <p><i class='bx bx-check-circle' ></i> Arahan mentor pengajar berpengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>BERKIBAR</h4>
                        <ul>
                            <li><a href="landing.php#beranda">Beranda</a></li>
                            <li><a href="landing.php#tentang">Tentang Kami</a></li>
                            <li><a href="landing.php#layanan">Layanan</a></li>
                            <li><a href="landing.php#testimoni">Testimoni</a></li>
                            <li><a href="landing.php#paket">Paket</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Paket Layanan</h4>
                        <ul>
                            <li><a href="landing.php#paket">Premium</a></li>
                            <li><a href="landing.php#paket">Bersama Kita</a></li>
                            <li><a href="landing.php#paket">Kita Belajar</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="landing.php#layanan" id="sd">Sekolah Dasar</a></li>
                            <li><a href="landing.php#layanan" id="smp">Sekolah Menengah Pertama</a></li>
                            <li><a href="landing.php#layanan" id="sma">Sekolah Menengah Atas</a></li>
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
    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>

        //tentang section swiper
        var tentang = new Swiper(".tentang-slider", {
            effect: "coverflow",
            direction : "horizontal",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 10,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            loop:true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });   
        //tentang section swiper end 
        
        //layanan section swiper
        var layanan = new Swiper(".layanan-slider", {
            effect: "coverflow",
            direction : "horizontal",
            grabCursor: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 0,
                modifier: 0,
                slideShadows: true,
            },
        });
        //layanan section swiper end

        //testimoni section swiper
        var testimoni = new Swiper(".testimoni-slider", {
            effect: "coverflow",
            direction : "horizontal",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 0,
                slideShadows: true,
            },
            loop:true,
        });    
        //testimoni section swiper end

        //menu toggle nav
        let menuToggler = document.querySelector('.menu-toggle');
        let body = document.querySelector('body');

        menuToggler.addEventListener('click', function() {
            body.classList.toggle('open');
        });
        //menu toggle nav end

        document.onclick = function(click){
            //nav
	        if (click.target.id == 'nav' || click.target.id == 'menu') {
                body.classList.remove('open');
	        }
            //nav 

            //layanan section
            let sd = document.querySelector("#sd");
            let smp = document.querySelector("#smp");
            let sma = document.querySelector("#sma");
            let sdcontent = document.querySelector("#sdcontent");
            let smpcontent = document.querySelector("#smpcontent");
            let smacontent = document.querySelector("#smacontent");
    
            if (click.target.id == "sd") {
                sd.classList.add("active");
                sdcontent.classList.add("active");
            }
            else if (click.target.id == "smp" || click.target.id == "sma"){
                sd.classList.remove("active");
                sdcontent.classList.remove("active");
            }
    
            if (click.target.id == "smp") {
                smp.classList.add("active");
                smpcontent.classList.add("active");
            }
            else if (click.target.id == "sd" || click.target.id == "sma"){
                smp.classList.remove("active");
                smpcontent.classList.remove("active");
                }
    
            if (click.target.id == "sma") {
                sma.classList.add("active");
                smacontent.classList.add("active");
            }
            else if (click.target.id == "sd" || click.target.id == "smp"){
                sma.classList.remove("active");
                smacontent.classList.remove("active");
            }
            //layanan section end
        }

        ScrollReveal().reveal('.beranda', {delay:250, duration:250, easing: 'ease-in', reset: 'true'});
        ScrollReveal().reveal('.tentang', {delay:250, duration:250, easing: 'ease-in', reset: 'true'});
        ScrollReveal().reveal('.layanan', {delay:250, duration:250, easing: 'ease-in', reset: 'true'});
        ScrollReveal().reveal('.testimoni', {delay:250, duration:250, easing: 'ease-in', reset: 'true'});
        ScrollReveal().reveal('.paket', {delay:250, duration:250, easing: 'ease-in', reset: 'true'});
        ScrollReveal().reveal('.content-left', {delay:250, duration:500, distance: '150px', origin: 'left', reset:'true'})
        ScrollReveal().reveal('.content-right', {delay:250, duration:500, distance: '150px', origin: 'right', reset:'true'})
        ScrollReveal().reveal('.heading', {delay:250, duration:500, distance: '150px', origin: 'top', reset:'true'})
        ScrollReveal().reveal('.l', {delay:250, duration:500, distance: '300px', origin: 'left', reset:'true'})
        ScrollReveal().reveal('.r', {delay:250, duration:500, distance: '300px', origin: 'right', reset:'true'})
        ScrollReveal().reveal('.t', {delay:250, duration:500, distance: '300px', origin: 'top', reset:'true'})
        ScrollReveal().reveal('.b', {delay:250, duration:500, distance: '300px', origin: 'bottom', reset:'true'})
        
    </script>
</body>
</html>