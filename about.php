<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php?pesan=Tolong_Login_Telebih_Dahulu");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About - mPhone</title>
    <link rel="icon" type="image/x-icon" href="assets/image/1665066751539.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #EDE1EF; font-weight: initial; font-style: oblique;">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: black;" href="#">mPhone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarNavDropdown" style="margin-right: 5%;">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="home.php" style="color: black;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="product-menu.php" style="color: black;">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="about.php" style="color: black;">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" style="color: black;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hai <?php echo $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile_user.php"><i class="fa-solid fa-circle-user" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="Belanjaan.php"><i class="fa-solid fa-credit-card" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i> Pembelian Anda</a>
                                </li>
                                <li><a class="dropdown-item" href="riwayat.php"><i class="fa-solid fa-clock-rotate-left" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i> Riwayat Pembelian</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="cart_menu.php" style="color: black;"><i class="fa-solid fa-basket-shopping"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">Mari Kenali Markas Phone</h1>
                            <p class="lead fw-normal text-muted mb-4">Markas Phone adalah sebuah toko handphone yang menjual berbagi tipe dan merek Handphone. Kami disini ingin memeberikan yang terbaik untuk anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    <div class="col-lg-6">
                        <h1 class="fw-bolder">Awal Mula Markas Phone</h1>
                        <hr><br>
                        <p class="lead fw-normal text-muted mb-0">Markas Phone Berdiri pada pertengahan tahun 2022 di Porong Sidoarjo yang dimana berfokus pada penjualan Handphone dan Gadget Canggih.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">Menerapkan Sistem Penjualan Dengan E-Commerce</h2> <br>
                        <p class="lead fw-normal text-muted mb-0">Markas Phone menerapkan sistem penjualan dengan website dan aplikasi milik sendiri dari Mahasiswa Politeknik Negeri Jember dengan sistem yang dapat bersaing.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">Kenapa Harus Markas Phone ?</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-earth-americas"></i></div>
                                <h2 class="h5">Semua Platform</h2>
                                <p class="mb-0">Markas Phone tersedia di Platform Mobile dan Website sehingga memudahkan user.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-regular fa-credit-card"></i></div>
                                <h2 class="h5">Pembayaran Lebih Mudah</h2>
                                <p class="mb-0">Markas Phone telah mendukung beberapa metode pembayaran dari transfer Bank dan E-wallet.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-user-lock"></i></div>
                                <h2 class="h5">Keamanan Terjamin</h2>
                                <p class="mb-0">Keamanan yang terjamin karena kami telah memebrikan sistem keamanan data yang kuat dan terpercaya</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-truck"></i></div>
                                <h2 class="h5">Gratis Ongkir</h2>
                                <p class="mb-0">Gratis Ongkir dalam pengiriman di area Surabaya dan kota sekitarnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team members section-->
        <section class="section-team">
            <div class="container">
                <!-- Start Header Section -->
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="header-section">
                            <h2 class="title">Our Team</h2> <br>
                            <p class="text-muted">Mari Kenali Developer Dibalik Layar Kita</p>
                        </div>
                    </div>
                </div>
                <!-- / End Header Section -->
                <div class="row justify-content-center">
                    <!-- Start Single Person -->
                    <div class="col-xl-3">
                        <div class="single-person">
                            <div class="person-image">
                                <img src="assets/image/foto_tim/fachry.png" alt="">
                                <span class="icon">
                                    <i class="fa-brands fa-php"></i>
                                </span>
                            </div>
                            <div class="person-info">
                                <h3 class="full-name">Fachry Rizky Prasetya</h3>
                                <span class="speciality">Backend Dev &amp; Leader</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="single-person">
                            <div class="person-image">
                                <img src="assets/image/foto_tim/leo.png" alt="">
                                <span class="icon">
                                    <i class="fa-brands fa-android"></i>
                                </span>
                            </div>
                            <div class="person-info">
                                <h3 class="full-name">Leovander Aditama</h3>
                                <span class="speciality">Fullstack Mobile</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Start Single Person -->
                        <!-- / End Single Person -->
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="assets/image/foto_tim/haqi.png" alt="">
                                    <span class="icon">
                                        <i class="fab fa-html5"></i>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">Achmad Baihaqi</h3>
                                    <span class="speciality">Frontend Website</span>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="assets/image/foto_tim/nisa.png" alt="">
                                    <span class="icon">
                                        <i class="fab fa-html5"></i>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">Putri Adelia Khiarunisa</h3>
                                    <span class="speciality">Frontend Website</span>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                        <!-- Start Single Person -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="single-person">
                                <div class="person-image">
                                    <img src="assets/image/foto_tim/dina.png" alt="">
                                    <span class="icon">
                                        <i class="fab fa-html5"></i>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name">Dina Dwi Arika</h3>
                                    <span class="speciality">Frontend Website</span>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                    </div>
                </div>
        </section>

        <!-- Team members section-->
        <section class="section-team">
            <div class="container">
                <!-- Start Header Section -->
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="header-section">
                            <h2 class="title">Contact Us</h2> <br>
                            <p class="text-muted">Berikan Kritik dan Saranmu Agar Kami Lebih Berkembang</p>
                        </div>
                        <div style="width: 100%;">
                            <form action="kritik.php" method="POST" enctype="multipart/form-data">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" style="outline: black; text-align: center; outline-style: solid;"> <br>
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" name="email" style="outline: black; text-align: center; outline-style: solid;"> <br>
                                <label for="" class="form-label">Berikan Kritik & Saran</label>
                                <textarea name="pesan" class="form-control" id="" cols="30" rows="5" style="outline: black; text-align: center; outline-style: solid;"></textarea><br>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark" type="submit">Kirim Kritik & Saran</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p><b>Markas Phone</b> <br>tempat untuk cari apa yang kau cari <br>dan menemukan yang ingin kau temukan</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h6>Produk Unggulan</h6>
                        <ul>
                            <li><a href="kategori/iphone.php">iPhone</a></li>
                            <li><a href="kategori/samsung.php">Samsung</a></li>
                            <li><a href="kategori/oppo.php">Oppo</a></li>
                            <li><a href="kategori/pixel.php">Pixel</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2  col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h6>Menu</h6>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="product-menu.php">Product</a></li>
                            <li><a href="Belanjaan.php">Pembelian</a></li>
                            <li><a href="profile_user.php">Profile</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <p style="color: white;">Selamat Datang Di</p>
                        <a href="#">
                            <div class="button">
                                <div class="box">M</div>
                                <div class="box">A</div>
                                <div class="box">R</div>
                                <div class="box">K</div>
                                <div class="box">A</div>
                                <div class="box">S</div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copyright-text">
                        <p>Copyright &copy; 2022 All rights reserved | <b>Markas Phone</b></p>
                    </div>
                </div>
            </div>


        </div>

    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>