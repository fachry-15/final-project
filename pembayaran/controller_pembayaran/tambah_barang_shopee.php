<?php
include "../../config/koneksi.php";
$count = $_POST['jumlah'];
$username = $_POST['username'];
$barang = $_POST['barang'];
$merek = $_POST['merek'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$status = $_POST['status'];


for ($i = 0; $i < $count; $i++) {
    $pembayaran = mysqli_query($koneksi, "INSERT INTO tb_invoice (username, barang, merek, harga, gambar_barang, status) VALUES 
('$username[$i]', '$barang[$i]', '$merek[$i]', '$harga[$i]', '$gambar[$i]', '$status[$i]')");
}

if (mysqli_query($koneksi, $pembayaran)) {
    echo "
    <script>
    location = '../shopee_data.php';
    </script>
    ";
} else {
    echo "
    <script>
    location = '../shopee_data.php';
    </script>
    ";
}
