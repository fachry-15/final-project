<?php

include "config/koneksi.php";

// var_dump($_POST);
// die;

$nama = $_POST['nama'];
$merek = $_POST['merek'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$jumlah = $_POST['jumlah'];

$keranjang = mysqli_query($koneksi, "INSERT INTO tb_pembelian (barang, merek, harga, gambar, jumlah) VALUES ('$nama', '$merek', '$harga', '$gambar', '$jumlah')");

if ($keranjang) {
    echo "
    <script>
    location = 'cart_menu.php';
    </script>
    ";
} else {
    echo "
    <script>
    location = 'detail.php';
    </script>
    ";
}
