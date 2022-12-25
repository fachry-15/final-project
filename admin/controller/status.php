<?php

include "../../config/koneksi.php";

$barang = $_POST['barang'];
$status = $_POST['status'];

$updatedata = "UPDATE tb_invoice set status='$status' WHERE id_invoice='$barang'";
mysqli_query($koneksi, $updatedata);

var_dump($updatedata);
