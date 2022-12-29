<?php

include "../../config/koneksi.php";

$jumlah = $_POST['jumlah_data'];
$username = $_POST['user'];
$penerima = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$nomor = $_POST['telepon'];
$id_barang = $_POST['id_barang'];
$rekening_tujuan = $_POST['rekening_tujuan'];
$metode = $_POST['metode'];
$status = $_POST['ubah'];

for ($i = 0; $i <= $jumlah; $i++) {
    $DataDiri = mysqli_query($koneksi, "UPDATE tb_invoice set penerima='$penerima', email='$email', alamat='$alamat', no_telepon='$nomor', target_pembayaran='$rekening_tujuan', metode_pembayaran='$metode'
    , status='$status' WHERE id_invoice = '$id_barang' ");
}

if (mysqli_query($koneksi, $DataDiri)) {
    echo "
    <script>
    location = '../dana_pembayaran.php';
    </script>
    ";
} else {
    echo "
    <script>
    location = '../dana_pembayaran.php';
    </script>
    ";
}
