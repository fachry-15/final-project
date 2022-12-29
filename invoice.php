<?php
include "config/koneksi.php";

$barang = $_GET["id"];

$data = $koneksi->query("SELECT * FROM tb_invoice WHERE id_invoice= $barang");
$setiap = $data->fetch_assoc();
?>

<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:update_admin.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/invoice.css">
</head>

<body>
    <div class="container">
        <div class="row m-0">
            <div class="col-md-7 col-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="row box-right">
                            <div class="col-md-8 ps-0 ">
                                <p class="ps-3 textmuted fw-bold h6 mb-0">Total Pembelian</p>
                                <p class="h1 fw-bold d-flex">Rp.<?php echo number_format($setiap['harga']) ?></p>
                                <p>Status Pembelian : <?php echo $setiap['status'] ?></p>
                            </div>
                            <div class="col-md-4">
                                <p class="p-blue"> <span class="fas fa-circle pe-2"></span>Harga Barang</p>
                                <p class="fw-bold mb-3">Rp.<?php echo number_format($setiap['harga']) ?></p>
                                <p class="p-org"><span class="fas fa-circle pe-2"></span>Ongkir Pembelian</p>
                                <p class="fw-bold">Rp.0,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 mb-4">
                        <div class="box-right">
                            <div class="d-flex pb-2">
                                <p class="fw-bold h7"><span class="textmuted">Barang</p><br>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/image/product/<?php echo $setiap['gambar_barang'] ?>" class="img-fluid rounded-start" alt="..." style="max-width: 130px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $setiap['barang'] ?></h5>
                                        <p class="card-text">Rp.<?php echo number_format($setiap['harga']) ?></p>
                                        <p class="card-text"><small class="text-muted">ID Pembelian : <?php echo $setiap['id_invoice'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="box-right">
                            <div class="d-flex mb-2">
                                <p class="fw-bold">Data Pengiriman Barang Pembelian</p>

                            </div>
                            <div class="d-flex mb-2">
                                <p class="h7">#<?php echo $setiap['id_invoice'] ?></p>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <p class="textmuted h8">Pengiriman Melalui</p> <input class="form-control text-muted" type="text" value="<?php echo $setiap['pengiriman'] ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <p class="textmuted h8">Resi Pengiriman</p> <input class="form-control text-muted" type="text" value="<?php echo $setiap['resi'] ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <p class="textmuted h8">Tanggal Pengiriman</p> <input class="form-control text-muted" type="text" value="<?php echo $setiap['tanggal_pengiriman'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 ps-md-5 p-0 ">
                <div class="box-left">
                    <p class="textmuted h8">Invoice</p>
                    <p class="fw-bold h7"><?php echo $setiap['penerima'] ?></p>
                    <p class="textmuted h8"><?php echo $setiap['alamat'] ?></p>
                    <div class="h8">
                        <div class="row m-0 border mb-3">
                            <div class="col-6 h8 pe-0 ps-2">
                                <p class="textmuted py-2">Barang</p> <span class="d-block py-2 border-bottom"><?php echo $setiap['barang'] ?>
                            </div>
                            <div class="col-2 text-center p-0">
                                <p class="textmuted p-2">Qty</p> <span class="d-block p-2 border-bottom">1
                            </div>
                            <div class="col-2 p-0 text-center h8 border-end">
                                <p class="textmuted p-2">Harga</p> <span class="d-block border-bottom py-2">Rp.<?php echo number_format($setiap['harga']) ?></span>
                            </div>
                            <div class="col-2 p-0 text-center">
                                <p class="textmuted p-2">Total</p> <span class="d-block py-2 border-bottom">Rp.<?php echo number_format($setiap['harga']) ?></span>
                            </div>
                        </div>
                        <div class="d-flex h7 mb-2">
                            <p class="">Total Pembayaran</p>
                            <p class="ms-auto">Rp.<?php echo number_format($setiap['harga']) ?></p>
                        </div>
                        <div class="h8 mb-5">
                            <p class="textmuted">Terima Kasih Telah Berbelanja di Markas Phone</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="button"><i class="fa-solid fa-box"></i> Barang Telah Diterima</button>
                        <a href="Belanjaan.php" class="btn btn-secondary" type="button"><i class="fa-solid fa-angle-left"></i> Kembali</a href="Belanjaan.php">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>