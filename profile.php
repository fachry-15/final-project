<?php
include "config/koneksi.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];

$datauser = "UPDATE user set username = '$username', email = '$email', No_telepon = '$nomor', Alamat_utama = '$alamat' WHERE id_user = '$id'";
mysqli_query($koneksi, $datauser);


if (mysqli_query($koneksi, $datauser)) {

    echo " <div class='alert alert-success'>
        <strong>Success!</strong> Redirecting you back in 1 seconds.
      </div>
    <meta http-equiv='refresh' content='1; url= profile_user.php'/>  ";
} else {
    echo ("Error description: " . mysqli_error($koneksi));
}
