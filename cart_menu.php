<?php
include "config/koneksi.php";
session_start();
$user = $_SESSION['username'];
if ($_SESSION['status'] != "login") {
    header("location:product-menu.php?pesan=belum_login");
}


$product = array();

$data = $koneksi->query("SELECT * FROM tb_pembelian WHERE username = '$user' AND status = 'keranjang'");
while ($setiap = $data->fetch_assoc()) {
    $hp[] = $setiap;
    $jumlah = $setiap['jumlah'];
    $harga = $setiap['harga'];
    $subharga = $setiap['harga'] * $setiap['jumlah'];
    $semua[] = $subharga;
    $total = array_sum($semua);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>mPhone - Keranjang</title>
    <link rel="shortcut icon" href="assets/image/1665066751539.png" type="image/x-icon">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/product -1 .css">
    <link rel="stylesheet" href="assets/css/menu_checkout.css">
</head>

<body>

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

    <main class="page">
        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: black; font-size: 60px;"><b>Keranjang Anda</b></h1>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row">

                                        <?php
                                        foreach ($data as $key => $value) : ?>
                                            <div class="col-md-3">
                                                <a href="detail.php?id=<?php echo $value["id_pembelian"] ?>"><img class="img-fluid mx-auto d-block image" src="assets/image/product/<?php echo $value['gambar'] ?>"></a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="info">

                                                    <div class="row">

                                                        <div class="col-md-5 product-name">
                                                            <div class="product-name">
                                                                <span><?php echo $value['barang'] ?></span>
                                                                <div class="product-info">
                                                                    <div>Merek: <span class="value"><?php echo $value['merek'] ?></span></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 quantity">
                                                            <label for="quantity">Jumlah:</label>
                                                            <input id="quantity" type="number" value="<?php echo $value['jumlah'] ?>" class="form-control quantity-input" readonly style="width: 27%; text-align: center;">
                                                        </div>
                                                        <div class="col-md-3 price">
                                                            <span>Rp.<?php echo number_format($value['harga'] * $value['jumlah'])  ?></span>
                                                        </div>
                                                        <div class="col-md-3 price">
                                                            <a href="hapus_barang.php?id=<?php echo $value["id_pembelian"] ?>" style="color: black; font-size: 18px;"><button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Hapus</button>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <?php

                                $data ?>
                                <h3>Total Belanja Anda</h3>
                                <div class="summary-item"><span class="text">Total</span><span class="price">Rp. <?php echo number_format($total) ?></span></div>

                                <form action="status.php" method="POST" enctype="multipart/form-data">
                                    <?php
                                    foreach ($data as $key => $value) : ?>
                                        <input type="hidden" name="status" value="<?php echo $value['status'] ?>">
                                        <input type="hidden" name="user" value="<?php echo $value['username'] ?>">

                                    <?php endforeach ?>
                                    <!-- <input type="hidden" name="status" value="Menunggu Pembayaran" id=""> -->
                                    <button style="margin-left: 25%;" type="submit">
                                        <span>Beli Sekarang</span>
                                        <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="assets/">
                                            <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                                            <path d="M25 39.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
                                        </svg>
                                    </button>

                                </form>

                                <?php  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</body>

</html>