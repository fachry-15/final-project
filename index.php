<?php
include "config/koneksi.php";

$product = array();

$data = $koneksi->query("SELECT * FROM products");
while ($setiap = $data->fetch_assoc()) {
    $hp[] = $setiap;
}

?>

<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:product-menu.php?pesan=belum_login");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Markas Phone</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="shortcut icon" href="assets/image/1665066751539.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d0282e19bc.js" crossorigin="anonymous"></script>

</head>

<body class="hero-anime" style="background-color: white;">

    <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #EDE1EF;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown" style="margin-right: 5%;">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="" style="color: black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="product-menu.php" style="color: black;">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="" style="color: black;">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" style="color: black;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hai <?php echo $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-circle-user" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i>Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i>Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#" style="color: black;"><i class="fa-solid fa-basket-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <section class="welcome">
            <h1 style="text-align: center;">
                <b>Markas Phone</b> <br>tempat untuk cari apa yang kau cari <br>dan menemukan yang ingin kau temukan
            </h1>
        </section>
    </section>

    <div class="container">
        <div class="contens">
            <div class="image-container" onclick="location.href='https://www.apple.com/iphone-12/';" style="cursor: pointer;">
                <div class="iphone-12">
                    <div class="title">
                        <h1>iPhone 13 Series</h1>
                        <p>Kini Hadir di Markas Phone</p>
                    </div>
                    <div class="cta-links">
                        <a href="#" class="learn-more-link">Lihat Detail</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 style="text-align: center; font-size: 60px; color: black; margin-top: 5%; margin-bottom: 5%;"><b>Kategori Produk</b></h1>
    <ul class="flex-list" style="padding-left: 0; padding-bottom: 0; margin-top: 15px;">
        <li class="li1 content">

            <div class="theme-dark container-main" onclick="location.href='kategori/samsung.php';" style="cursor: pointer;">
                <div class="unit-copy-wrapper">
                    <img class="logo-kategori" src="assets/image/landing/samsung-logo.jpeg" alt="apple-watch-logo">
                    <h2 class="headline" style="text-align: center; color: #FFFFFF;">Sobat Teknologi Banget !</h2>
                </div>
                <div class="cta-links">
                    <a href="https://www.apple.com/apple-watch-series-6/" class="learn-more-link">Lihat Produk ></a>
                </div>
                <div class="unit-image">
                    <figure>
                        <img src="assets/image/landing/samsung-bnr.png" alt="samsung" style="max-width: 500px; margin-left: 15%;">
                    </figure>
                </div>
            </div>
        </li>

        <li class="li2 content">

            <div class="theme-light container-main" onClick="location.href='kategori/oppo.php';" style="cursor: pointer;">
                <div class="unit-copy-wrapper">
                    <img class="logo-kategori" src="assets/image/landing/Desain tanpa judul (32).png" style="padding-left: 0;" alt="">
                    <h2 class="headline" style="text-align: center;">Buat Kamu si Paling Gamer.</h2>
                </div>
                <div class="cta-links">
                    <a href="" class="learn-more-link">Lihat Produk ></a>
                </div>
                <div class="unit-image">
                    <figure>
                        <img src="assets/image/landing/oppo.png" alt="ipad-air" style="width: 70%; margin-left: 15%;">
                    </figure>
                </div>
            </div>
        </li>

        <li class="li3 content" style="margin-top: 10px;">

            <div class="theme-dark container-main" onclick="location.href='kategori/pixel.php';" style="cursor: pointer;">
                <div class="unit-copy-wrapper">
                    <img class="logo-kategori" src="assets/image/landing/pixel.png" alt="" style="width: 35%; margin-top: 55px; margin-left: 30%;">
                    <h2 class="headline" style="text-align: center; color: #FFFFFF;">Buat Kamu Yang Anti Mainstream !</h2>
                </div>
                <div class="cta-links">
                    <a href="" class="learn-more-link">Lihat Produk ></a>
                </div>
                <div class="unit-image">
                    <figure>
                        <img src="assets/image/landing/google-pixel.png" alt="" style="width: 70%; margin-left: 15%;">
                    </figure>
                </div>
            </div>
        </li>

        <li class="li4 content" style="margin-top: 10px;">

            <div class="theme-light container-main" onclick="location.href='kategori/iphone.php'" style="cursor: pointer;">
                <div class="unit-copy-wrapper">
                    <img class="logo-kategori" src="assets/image/landing/iphone.png" alt="" style="margin-top: 7%; margin-bottom: 10%;">
                    <h2 class="headline" style="text-align: center;">Buat Kamu Yang Suka Simple <br>dan Elegan.</h2>
                </div>
                <div class="cta-links">
                    <a href="" class="learn-more-link">Lihat Produk></a>
                </div>
                <div class="unit-image">
                    <figure>
                        <img src="assets/image/landing/iPhone14.png" alt="iPhone" style="width: 65%; margin-left: 15%;">
                    </figure>
                </div>
            </div>
        </li>


    </ul>

    <script src="assets/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>