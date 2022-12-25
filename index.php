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
    header("location:login_user.php?pesan=Tolong_Login_Telebih_Dahulu");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body class="hero-anime" style="background-color: white;">

    <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #EDE1EF; font-weight: initial; font-style: oblique;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: black;" href="#">mPhone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown" style="margin-right: 5%;">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="index.php" style="color: black;">Home</a>
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
                            <li><a class="dropdown-item" href="profile_user.php"><i class="fa-solid fa-circle-user" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="Belanjaan.php"><i class="fa-solid fa-gear" style="font-size: 14px; margin-right: 6px; margin-bottom: 4px;"></i>Pembelian Anda</a>
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

    <section>
        <section class="welcome">
            <h1 style="text-align: center;">
                <b>Markas Phone</b> <br>tempat untuk cari apa yang kau cari <br>dan menemukan yang ingin kau temukan
            </h1>
        </section>
    </section>

    <div class="container">
        <div class="contens">
            <div class="image-container" onclick="location.href='Produk_Terbaru/iPhone13.php';" style="cursor: pointer;">
                <div class="iphone-12">
                    <div class="title">
                        <h1>iPhone 13 Pro</h1>
                        <p>Kini Hadir di Markas Phone</p>
                    </div>
                    <div class="cta-links">
                        <a href="Produk_Terbaru/iPhone13.php" class="learn-more-link">Lihat Detail</a>

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
                    <a href="kategori/samsung.php" class="learn-more-link">Lihat Produk ></a>
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
                    <a href="kategori/oppo.php" class="learn-more-link">Lihat Produk ></a>
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
                    <a href="kategori/pixel.php" class="learn-more-link">Lihat Produk ></a>
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
                    <a href="kategori/iphone.php" class="learn-more-link">Lihat Produk></a>
                </div>
                <div class="unit-image">
                    <figure>
                        <img src="assets/image/landing/iPhone14.png" alt="iPhone" style="width: 65%; margin-left: 15%;">
                    </figure>
                </div>
            </div>
        </li>


    </ul>

    <section>
        <h1 style="text-align: center; font-size: 60px; color: black; margin-top: 8%; margin-bottom: 1%;"><b>Rekomendasi Untuk Kamu</b></h1>
        <div class=" container py-5">
            <div class="row ">
                <?php

                $product = array();

                $data = $koneksi->query("SELECT * FROM products WHERE merek = 'iPhone' AND id_barang >= 4");
                while ($setiap = $data->fetch_assoc()) {
                    $hp[] = $setiap;
                }

                foreach ($data as $key => $value) : ?>
                    <div class="col-md-8" style="width: 24%; border-radius: 2px; margin-left: 1%; margin-bottom: 2%;">
                        <div class="card text-black">
                            <img src="assets/image/merek/<?php echo $value['merek'] ?>.png" alt="" style="max-width: 20px; margin-left: 5%; margin-top: 3%;">
                            <img src="assets/image/product/<?php echo $value['gambar'] ?>" class="card-img-top" alt="Apple Computer" style="margin-top: 8%; margin-left: 5%; width: 250px; align-items: center;" />
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title"><?php echo $value['nama_hp'] ?></h5>
                                    <p class="text-muted mb-2.5"><?php echo $value['merek'] ?></p>
                                    <p class="text-muted mb-1">Rp.<?php echo $value['harga'] ?></p>
                                    <a href="detail.php?id=<?php echo $value["id_barang"] ?>" type="button" class="btn" style="background-color: #EDE1EF;">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <script src="assets/js/menu.js"></script>


</body>

</html>