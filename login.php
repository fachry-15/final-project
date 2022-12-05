<?php

session_start();

include "config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * from user where id_username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:product-menu.php");
} else {
    header("location:form-login.php");
}
