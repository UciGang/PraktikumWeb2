<?php
function total($produk, $jumlah)
{
    // TV
    if ($produk == "TV") {
        return 4200000 * $jumlah;
    } elseif ($produk == "Kulkas") {
        return 3100000 * $jumlah;
    } else {
        return 3800000 * $jumlah;
    }
}
?>