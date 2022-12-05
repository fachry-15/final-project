<?php
include "config/koneksi.php";

$product = array();

$data = $koneksi->query("SELECT * FROM products");
while ($setiap = $data->fetch_assoc()) {
    $hp[] = $setiap;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Markas Phone</title>
    <link rel="shortcut icon" href="assets/image/1665066751539.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d0282e19bc.js" crossorigin="anonymous"></script>
</head>

<body class="hero-anime" style="background-color: #fff;">
    <header class="main-header" style="background-color: white;">
        <div class="container">
            <nav class="navbar navbar-expand-lg main-nav px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar icon-bar-1"></span>
                    <span class="icon-bar icon-bar-2"></span>
                    <span class="icon-bar icon-bar-3"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu" style="margin-left: 33%;">
                    <ul class="navbar-nav ml-auto text-uppercase f1">
                        <li>
                            <a href="index.php">home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="product.php" class="active active-first">Product</a>
                        </li>
                        <li>
                            <a href="test.php">Pulsaku</a>
                        </li>
                        <li>
                            <a href="matematika.php">Sale</a>
                        </li>
                        <li>
                            <a href="form-1.php">contact</a>
                        </li>
                    </ul>
                    <a href="" style="color: #181818; margin-left: 32% ;">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>


                </div>
            </nav>
        </div>
    </header>

    <section>
        <div class="sampul">
            <h1><?php echo "Our Products" ?></h1>
        </div>
    </section>

    <section>
        <div class="navigasi" style="margin-top: 10px;">
            <nav class="nav">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="tambah.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Masukkan Nama Hp</label> <br>
                                        <input style="margin-top: 1%;" type="text" name="hp" class="form-control" placeholder="Masukkan Nama Hp"><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih Merek Hp</label> <br>
                                        <select class="form-control custom-select mr-sm-2" name="merek">
                                            <option value="">Pilih Merek HP anda</option>
                                            <option value="iPhone">iPhone</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Oppo">Oppo</option>
                                            <option value="Pixel">Pixel</option>
                                            <option value="Pixel">Vivo</option>
                                        </select> <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Spesifikasi</label> <br>
                                        <textarea class="form-control" name="spek" rows="3"></textarea> <br>
                                    </div>
                                    <label for="exampleFormControlTextarea1">Masukkan Harga Produk</label> <br>
                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Rp.</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp.</div>
                                        </div>
                                        <input type="text" name="harga" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Langsung Nominal tanpa Rupiah"><br>
                                    </div>
                                    <label for="exampleFormControlTextarea1">Masukkan Gambar Produk</label> <br>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="file" name="gambar" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <h3 style="margin-top: 10px; margin-left: 27%;">Jelajahi Apa Yang Kamu Mau</h3>
                <i class="fa-solid fa-magnifying-glass" style="margin-left: 34%; margin-top: 15px;"></i>
            </nav>
            <hr>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <?php foreach ($data as $key => $value) : ?>
                    <div class="col-3">
                        <div class="card mb-3" style="width: 320px;" class="card-img-top">
                            <img src="assets/image/product/<?php echo $value['gambar'] ?>" alt="" style="max-width: 300px; max-height: 300px;">
                            <div class="card-body">
                                <h6 class="card-tittle" style="text-align: center;"><?php echo $value['nama_hp'] ?> - <?php echo $value['merek'] ?></h6>
                                <p style="text-align: center;"><?php echo substr($value['spesifikasi'], 0, 70) ?>..</p>

                                <a href="form-update.php?id=<?php echo $value["id_barang"] ?>" class="btn btn-outline-warning btn-sm" style="margin-left: 27%;"> <strong>Update</strong></a>
                                <a href="hapus.php?id=<?php echo $value["id_barang"] ?>" class="btn btn-outline-danger btn-sm"><Strong>Hapus</Strong></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>
</body>

</html>