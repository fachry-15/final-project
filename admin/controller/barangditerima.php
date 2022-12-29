<?php

include "../../config/koneksi.php";

$id = $_POST['id'];
$status = $_POST['status'];
$kategori = $_POST['kategori'];

$updatedata = "UPDATE tb_invoice set status='$status', kategori='$kategori' WHERE id_invoice='$id'";
mysqli_query($koneksi, $updatedata);

var_dump($updatedata);
