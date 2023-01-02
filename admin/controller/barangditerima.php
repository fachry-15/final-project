<?php

include "../../config/koneksi.php";

$id = $_POST['id'];
$status = $_POST['status'];
$kategori = $_POST['kategori'];

$updatedata = "UPDATE tb_invoice set status='$status', kategori='$kategori' WHERE id_invoice='$id'";
mysqli_query($koneksi, $updatedata);

if (mysqli_query($koneksi, $updatedata)) {

    echo " 
    <script>
    location = '../detail_pembelian.php';
    </script> ";
} else {
    echo " 
    <script>
    location = '../detail_pembelian.php';
    </script> ";
}
