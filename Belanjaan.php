<?php
include "config/koneksi.php";
session_start();
$user = $_SESSION['username'];
if ($_SESSION['status'] != "login") {
    header("location:product-menu.php?pesan=belum_login");
}


$product = array();

$data = $koneksi->query("SELECT * FROM tb_invoice WHERE username = '$user'");
while ($setiap = $data->fetch_assoc()) {
    $hp[] = $setiap;
    // $jumlah = $setiap['jumlah'];
    // $harga = $setiap['harga'];
    // $subharga = $setiap['harga'] * $setiap['jumlah'];
    // $semua[] = $subharga;
    // $total = array_sum($semua);
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
    <link rel="stylesheet" href="assets/css/belanja.css">
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
                    <h1 style="color: black; font-size: 60px;"><b>Belanjaan Anda</b></h1>
                </div>

                <div class="container rounded mt-5 bg-white p-md-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Barang Belanjaan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Metode Pembayaran</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-blue">
                                    <?php
                                    foreach ($data as $key => $value) : ?>
                                        <td><img src="assets/image/product/<?php echo $value['gambar_barang'] ?>" alt=""></td>
                                        <td class="pt-3">
                                            <b><?php echo $value['barang'] ?></b>
                                        </td>
                                        <td class="pt-3 mt-1">Rp.<?php echo number_format($value['harga']) ?></td>
                                        <td class="pt-3"><?php echo $value['metode_pembayaran'] ?></td>
                                        <td class="pt-3"><?php echo $value['status'] ?></td>
                                        <td class="pt-3" style="text-align: center; padding-left: 40px;">
                                            <a href="kirim_bukti.php?id=<?php echo $value['id_invoice'] ?>" style="text-decoration: none;">
                                                <span class="shadow"></span>
                                                <span class="edge"></span>
                                                <span class="front text">Kirim Bukti
                                                </span>
                                            </a>
                                        </td>
                                    <?php endforeach ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</body>

</html>