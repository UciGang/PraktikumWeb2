<?php
class Produk
{
    private $koneksi;
    // akses properti yg bersifat private menggunakan $this
    public function __construct()
    // function yg pertama kali dijalankan
    {
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil()
    {
        // cetak seluruh data produk menggunakan query select
        $sql = "SELECT p.*, j.nama as namajenisproduk 
        FROM produk p INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id
        ORDER BY p.id DESC";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan
        $ps->execute();
        // siapkan data sql yg sudah di eksekusi dengan method fetchAll
        $show = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $show;
    }
}

?>