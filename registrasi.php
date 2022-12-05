<?php
include "config/koneksi.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$register = mysqli_query($koneksi, "INSERT INTO user (id_username, email, password) VALUES ('$username','$email','$password')");

if ($register) {
    echo "
            <script>
                alert('Horeee Kamu Udah Terdaftar !');
                window.location = 'form-login.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Coba Kamu Cek lagi kamu gagal nih !');

                // window.location = 'form-login.php';
            </script>
        ";
}
