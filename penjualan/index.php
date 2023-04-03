<?php

include_once 'dbkoneksi.php';
include_once 'models/Produk.php';
include_once 'models/Kartu.php';
include_once 'models/Pesanan.php';
include_once 'models/Vendor.php';
include_once 'models/Pembelian.php';
include_once 'models/Pembayaran.php';
include_once 'models/Jenis.php';
include_once 'models/Pelanggan.php';

include_once 'navbar.php';
include_once 'sidebar.php';

// request halaman di menu url dengan membuka terlebih dahulu
// file index.php
$hal = $_REQUEST['hal'];
// jika ad request dari url browser berupa HAL tampilkan halaman sesuai request
if (!empty($hal)) {
    include_once $hal . '.php';
    // include once 'produk.php'
} else {
    // jika tidak ad request HAL tampilkan halaman home
    include_once 'home.php';
}


include_once 'footer.php';

?>