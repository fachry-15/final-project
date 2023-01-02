<?php

include "config/koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$tambah = mysqli_query($koneksi, "INSERT INTO tb_kritik (nama, email, kritik_saran) VALUES ('$nama','$email','$pesan')");

if (mysqli_query($koneksi, $tambah)) {

    echo " 
    <script>
    location = 'about.php';
    </script> ";
} else {
    echo " 
    <script>
    location = 'about.php';
    </script> ";
}
