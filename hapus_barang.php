<?php
include "config/koneksi.php";
?>
<?php
$hapus = $_GET["id"];

$data = $koneksi->query("DELETE FROM tb_pembelian WHERE id_pembelian = '$hapus'");

echo "<script>
location='cart_menu.php'
</script>";
