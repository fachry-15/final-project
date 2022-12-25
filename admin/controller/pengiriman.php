<?php 

include "../../config/koneksi.php";

$id = $_POST['id'];
$pengirman = $_POST['ekspedisi'];
$resi = $_POST['resi'];

$updatedata = "UPDATE tb_invoice set pengiriman='$pengirman', resi='$resi' WHERE id_invoice='$id'";
mysqli_query($koneksi, $updatedata);

var_dump($updatedata);
