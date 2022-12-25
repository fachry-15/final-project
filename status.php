<?php

include "config/koneksi.php";

$status = $_POST['status'];
$user = $_POST['user'];
// $status = ['Menunggu Pembayaran'];

$updatestatus = "UPDATE tb_pembelian set status = 'Menunggu Pembayaran' WHERE status = '$status' AND username = '$user'";
mysqli_query($koneksi, $updatestatus);

if (mysqli_query($koneksi, $updatestatus)) {

    echo " 
    <script>
    location = 'pilih_pembayaran.php';
    </script> ";
} else {
    echo ("Error description: " . mysqli_error($koneksi));
}
