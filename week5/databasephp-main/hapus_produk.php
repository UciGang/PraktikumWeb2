<?php
require_once 'dbkoneksi.php';

// delete id
$id = $_GET['iddel'];

// delete order
$sqlo = "DELETE FROM pesanan_items WHERE id=?";
$st = $dbh->prepare($sqlo);
$st->execute([$id]);

// delete purchase
$sqlp = "DELETE FROM pembelian WHERE id=?";
$st = $dbh->prepare($sqlp);
$st->execute([$id]);

// delete product
$sql = "DELETE FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$id]);

header('location:list_produk.php')

    ?>