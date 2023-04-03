<?php
class Pelanggan
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
        $sql = "SELECT p.*, k.nama as member 
        FROM pelanggan p inner join kartu k on k.id = p.kartu_id
        order by p.id";
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