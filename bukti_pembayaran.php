<?php

include "config/koneksi.php";

$barang = $_POST['barang'];
$namaRek = $_POST['nama'];
$rekening = $_POST['rekening'];
$bukti = upload_file();
$status = $_POST['status'];

$updatedata = "UPDATE tb_invoice set atasnama_rekening='$namaRek', no_rekening='$rekening', bukti_pembayaran='$bukti', status='$status' WHERE id_invoice ='$barang'";
mysqli_query($koneksi, $updatedata);

function Upload_file()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //check gambar
    $ektensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile = explode('.', $namaFile);
    $extensifile = strtolower(end($extensifile));

    if (!in_array($extensifile, $ektensifileValid)) {

        echo "<script>
        alert('Format Gambar yang Anda Input Tidak Valid');
        </script>
        ";
        die();
    }

    //check ukuran file
    if ($ukuranFile > 10485760) {
        echo "<script>
        alert('Ukuran File Max 10 MB');
        </script>
        ";
        die();
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    move_uploaded_file($tmpName, 'assets/image/bukti_pembayaran/' . $namaFileBaru);
    return $namaFileBaru;
}
