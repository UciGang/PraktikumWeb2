<?php
require_once 'dbkoneksi.php';

// delete id
$id = $_GET['iddel'];

// delete order
$sql1 = "SELECT * FROM pesanan WHERE pelanggan_id=" . $id;
$rs = $dbh->query($sql1);

foreach ($rs as $pel) {
    $sql1 = "DELETE FROM pesanan_items WHERE pesanan_id=?";
    $st = $dbh->prepare($sql1);
    $st->execute([$pel['id']]);
}

$sql2 = "DELETE FROM pesanan WHERE pelanggan_id=?";
$st = $dbh->prepare($sql2);
$st->execute([$id]);

// hapus produk
$sql = "DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$id]);


header('location:list_pelanggan.php')

    ?>