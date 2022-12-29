<?php

include "../../config/koneksi.php";

$username = $_POST['user'];
$nama = $_POST['nama'];
$rekening = $_POST['rekening'];
$barang = $_POST['id_barang'];

$pembayaran = mysqli_query($koneksi, "UPDATE tb_invoice set atasnama_rekening = '$nama', no_rekening = '$rekening'  WHERE id_invoice = '$barang'");


if (mysqli_query($koneksi, $pembayaran)) {
    echo "
    <script>
    location = '../../Belanjaan.php';
    </script>
    ";
} else {
    echo "
    <script>
    location = '../../Belanjaan.php';
    </script>
    ";
}
