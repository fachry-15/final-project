<?php

include "config/koneksi.php";

$id_barang = $_POST['id'];
$status = $_POST['status'];
$kategori = $_POST['kategori'];

$pembayaran = mysqli_query($koneksi, "UPDATE tb_invoice set status = '$status', kategori = '$kategori'  WHERE id_invoice = '$id_barang'");

if (mysqli_query($koneksi, $pembayaran)) {

    echo " 
    <script>
    location = 'Belanjaan.php';
    </script> ";
} else {
    echo " 
    <script>
    location = 'Belanjaan.php';
    </script> ";
}
