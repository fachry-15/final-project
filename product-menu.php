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

<?php  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/product -1 .css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>
    <title>Product - mPhone</title>
    <link rel="shortcut icon" href="assets/image/1665066751539.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #EDE1EF;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
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
        <div class="">
            <div>
                <div class="col-md-5 mx-auto">
                    <div class="input-group" style="margin-top: 4%;">
                        <input class="form-control border-end-0 border rounded-pill" type="search" id="example-search-input" placeholder=" Mau Cari Apa">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 1%;">
                <div class="row no-gutters">
                    <div class="filtering col-sm-12 text-center">
                        <span data-filter="*" class="active">All</span>
                        <span data-filter=".architecture" class="">iPhone</span>
                        <span data-filter=".decor" class="">Samsung</span>
                        <span data-filter=".interior" class="">Xiaomi</span>
                        <span data-filter=".interior" class="">Oppo</span>
                    </div>
    </section>

    <section>
        <div class=" container py-5">
            <div class="row ">
                <?php foreach ($data as $key => $value) : ?>
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
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white"> Gurungg ges Footer e sabar</p>
        </div>
    </footer>

    <script src="assets/js/product.js"></script>
</body>

</html>