<?php
include 'config/koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang - Markas Phone</title>
    <link rel="shortcut icon" href="assets/image/1665066751539.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d0282e19bc.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="sampul">
            <h1><?php echo "Tambah Barang" ?></h1>
        </div>
    </header>
    <div class="container" style="padding-left: 15%; padding-right: 15%; margin-top: 2%;">
        <form action="tambah.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan Nama Handphone</label> <br>
                <input type="text" class="form-control" name="hp" id="nama-br" aria-describedby="emailHelp" placeholder="Nama Handphone"> <br>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Masukkan Merek Handphone</label>
                <input type="text" class="form-control" name="merek" id="merek" placeholder="iPhone/Samsung/Oppo"> <br>
            </div>
            <div class="mb-3" style="margin-bottom: 10%;">
                <label for="exampleFormControlTextarea1" class="form-label">Masukkan Spesifikasi</label>
                <textarea class="form-control" name="spek" id="spek" rows="3" value=""></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Masukkan Gambar Product</label> <br>
                <input class="form-control" type="file" name="gambar" style="margin-top: 2%;">
            </div>
            <button type="submit" class="btn btn-success">simpan</button>
        </form>

    </div>
</body>

</html>