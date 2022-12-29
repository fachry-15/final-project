<?php
include "../config/koneksi.php";

$barang = $_GET["id"];

$data = $koneksi->query("SELECT * FROM tb_invoice WHERE id_invoice= $barang");
$setiap = $data->fetch_assoc();
?>

<?php
session_start();
if ($_SESSION['admin'] != "login") {
    header("location:update_admin.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>mPhone - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../assets/css/admin.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
            </div>
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="controller/logout-2.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Utama</div>
                        <a class="nav-link" href="index_admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Partisi</div>
                        <a class="nav-link" href="tambah_admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                            Tambah Barang
                        </a>
                        <a class="nav-link" href="keranjang.php" style="color: white;">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-shop" style="color: white;"></i>
                            </div>
                            Daftar Pembelian
                        </a>
                        <a class="nav-link" href="keranjang.php">
                            <div class="sb-nav-link-icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            Akun User
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Halo <?php echo $_SESSION['username'] ?></div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Detail Pembelian</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                    <div class="" style=" padding-right: 15%; margin-top: 2%;">
                        <h2><b>Data Diri Pembelian</b></h2>
                        <h5 style="margin-top: 4%;">Nama Pembeli</h5>
                        <span><?php echo $setiap['penerima'] ?></span>
                        <h5 style="margin-top: 3%;">No. Telepon Pembeli</h5>
                        <span><?php echo $setiap['no_telepon'] ?></span>
                        <h5 style="margin-top: 3%;">Alamat Pembeli</h5>
                        <span><?php echo $setiap['alamat'] ?></span>
                        <h5 style="margin-top: 3%;">Barang Dibeli</h5>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/image/product/<?php echo $setiap['gambar_barang'] ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $setiap['barang'] ?></h5>
                                        <p class="card-text">Rp.<?php echo number_format($setiap['harga']) ?></p>
                                        <p class="card-text"><small class="text-muted">ID Pembelian : <?php echo $setiap['id_invoice'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 style="margin-top: 4%;"><b>Data Diri Pembayaran</b></h2>
                        <h5 style="margin-top: 3%;">Nama Rekening Pembayaran</h5>
                        <span><?php echo $setiap['atasnama_rekening'] ?></span>
                        <h5 style="margin-top: 3%;">No. Rekening Pembayaran</h5>
                        <span><?php echo $setiap['no_rekening'] ?></span>
                        <h5 style="margin-top: 3%;">Metode Pembayaran</h5>
                        <span><?php echo $setiap['metode_pembayaran'] ?></span>
                        <h5 style="margin-top: 3%;">Bukti Pembayaran</h5>
                        <a type="button" href="../assets/image/bukti_pembayaran/<?php echo $setiap['bukti_pembayaran'] ?>" class="btn btn-outline-dark">Lihat Bukti</a>

                        <h2 style="margin-top: 4%;"><b>Konfirmasi Status Pembelian</b></h2>
                        <form action="controller/status.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $setiap['id_invoice'] ?>" name="barang">
                            <h5 style="margin-top: 3%;">Ubah Status Pembelian</h5>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option selected><?php echo $setiap['status'] ?></option>
                                <option value="Sudah Dikonfirmasi">Sudah Dikonfirmasi</option>
                                <option value="Barang Sudah Dikirim">Barang Sudah Dikirim</option>
                            </select>
                            <button type="submit" class="btn btn-warning" style="margin-top: 1%;"><i class="fa-solid fa-file-pen"></i> Ubah Status</button>
                        </form>
                        <h2 style="margin-top: 4%;"><b>Data Pengiriman Barang</b></h2>
                        <form action="controller/pengiriman.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $setiap['id_invoice'] ?>">
                            <h5 style="margin-top: 3%;">Pilih Ekspedisi Pengiriman</h5>
                            <select class="form-select" name="ekspedisi" aria-label="Default select example">
                                <option selected>Pilih Ekspedisi</option>
                                <option value="Gojek">Gojek</option>
                                <option value="Grab">Grab</option>
                                <option value="JNE Reguler">JNE (Reguler)</option>
                                <option value="J&T">J&T</option>
                                <option value="Si-Cepat">Si Cepat</option>
                            </select>
                            <h5 style="margin-top: 3%;">Kirim Resi Barang Yang Dikirim</h5>
                            <input type="text" class="form-control" name="resi" placeholder="Masukkan Resi Pengiriman" id="" value="<?php echo $setiap['resi'] ?>">
                            <small class="text-muted" style="font-size: 12px;">*Pastikan Barang Dikirim Terlebih Dahulu Kemudian Mengisi Resi</small><br>
                            <h5 style="margin-top: 3%;">Tanggal Pengiriman</h5>
                            <input type="date" class="form-control" name="tanggal_kirim" placeholder="Masukkan Resi Pengiriman" id="" value="<?php echo $setiap['resi'] ?>">

                            <button type="submit" class="btn btn-success" style="margin-top: 1%;"><i class="fa-solid fa-truck-fast"></i> Konfirmasi Pengiriman</button>
                        </form>
                        <h2 style="margin-top: 4%;"><b>Status Pengiriman Barang</b></h2>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-truck"></i> Lihat Pengiriman
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Barang <?php echo $setiap['id_invoice'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <h5>Ekspedisi Pengiriman</h5>
                                            <span><?php echo $setiap['pengiriman'] ?></span>
                                        </div>
                                        <div class="form-group" style="margin-top: 4%;">
                                            <h5>Resi Pengiriman</h5>
                                            <span><?php echo $setiap['resi'] ?></span>
                                        </div>
                                        <div class="form-group" style="margin-top: 4%;">
                                            <h5>Tanggal Pengiriman</h5>
                                            <span><?php echo $setiap['tanggal_pengiriman'] ?></span>
                                        </div>
                                        <div class="form-group" style="margin-top: 4%;">
                                            <form action="controller/barangditerima.php" method="POST">
                                                <h5>Konfirmasi Pengiriman</h5>
                                                <input type="hidden" name="id" value="<?php echo $setiap['id_invoice'] ?>">
                                                <input type="hidden" name="status" value="Barang Sudah Diterima">
                                                <input type="hidden" name="kategori" value="Histori">
                                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-boxes-packing"></i> Barang Sudah Diterima Customer</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; mPhone 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>

</html>