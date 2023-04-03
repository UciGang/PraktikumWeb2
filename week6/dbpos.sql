-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2023 pada 08.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'elektronik'),
(2, 'furniture'),
(3, 'makanan'),
(4, 'minuman'),
(5, 'komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu`
--

CREATE TABLE `kartu` (
  `id` int(11) NOT NULL,
  `kode` varchar(6) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `iuran` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kartu`
--

INSERT INTO `kartu` (`id`, `kode`, `nama`, `diskon`, `iuran`) VALUES
(1, 'GOLD', 'Gold Utama', 0.05, 100000),
(2, 'PLAT', 'Platinum Jaya', 0.1, 150000),
(3, 'SLV', 'Silver', 0.025, 50000),
(4, 'NO', 'Non Member', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kartu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `kode`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `email`, `kartu_id`) VALUES
(1, 'C001', 'Agung Sedayu', 'L', 'Solo', '2010-01-01', 'sedayu@gmail.com', 1),
(2, 'C002', 'Pandan Wangi', 'P', 'Yogyakarta', '1950-01-01', 'wangi@gmail.com', 2),
(3, 'C003', 'Sekar Mirah', 'P', 'Kediri', '1983-02-20', 'mirah@yahoo.com', 1),
(4, 'C004', 'Swandaru Geni', 'L', 'Kediri', '1981-01-04', 'swandaru@yahoo.com', 4),
(5, 'C005', 'Pradabashu', 'L', 'Pati', '1985-04-02', 'prada85@gmail.com', 2),
(6, 'C006', 'Gayatri Dwi', 'P', 'Jakarta', '1987-11-28', 'gaya87@gmail.com', 1),
(7, 'C007', 'Dewi Gyat', 'P', 'Jakarta', '1988-12-01', 'giyat@gmail.com', 1),
(8, 'C008', 'Andre Haru', 'L', 'Surabaya', '1990-07-15', 'andre.haru@gmail.com', 4),
(9, 'C009', 'Ahmad Hasan', 'L', 'Surabaya', '1992-10-15', 'ahasan@gmail.com', 4),
(10, 'C010', 'Cassanndra', 'P', 'Belfast', '1990-11-20', 'casa90@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nokuitansi` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `ke` int(11) DEFAULT NULL,
  `pesanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `nomor` varchar(10) DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `nomor`, `produk_id`, `jumlah`, `harga`, `vendor_id`) VALUES
(2, '2019-11-20', 'P002', 2, 5, 5500000, 2),
(3, '2019-12-12', 'P003', 2, 5, 5400000, 1),
(4, '2020-01-20', 'P004', 7, 200, 1800, 3),
(5, '2020-01-20', 'P005', 5, 100, 2300, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `total`, `pelanggan_id`) VALUES
(1, '2015-11-04', 9720000, 1),
(2, '2015-11-04', 17500, 3),
(3, '2015-11-04', 0, 6),
(4, '2015-11-04', 0, 7),
(5, '2015-11-04', 0, 10),
(6, '2015-11-04', 0, 2),
(7, '2015-11-04', 0, 5),
(8, '2015-11-04', 0, 4),
(9, '2015-11-04', 0, 8),
(10, '2015-11-04', 0, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_items`
--

CREATE TABLE `pesanan_items` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pesanan_items`
--

INSERT INTO `pesanan_items` (`id`, `produk_id`, `pesanan_id`, `qty`, `harga`) VALUES
(2, 3, 1, 1, 4680000),
(3, 5, 2, 5, 3500),
(6, 5, 3, 10, 3500),
(9, 5, 5, 10, 3500),
(10, 5, 6, 20, 3500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `jenis_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_beli`, `harga_jual`, `stok`, `min_stok`, `jenis_produk_id`) VALUES
(2, 'TV02', 'Televisi 40 inch', 5500000, 7440000, 4, 2, 1),
(3, 'K001', 'Kulkas 2 pintu', 3500000, 4680000, 6, 2, 1),
(4, 'M001', 'Meja Makan', 500000, 600000, 4, 3, 2),
(5, 'TK01', 'Teh Botol', 3000, 3600, 6, 10, 4),
(6, 'PC01', 'PC Desktop HP', 7000000, 9600000, 9, 2, 5),
(7, 'TB01', 'Tehpucuk', 2000, 2400, 53, 10, 4),
(8, 'AC01', 'Notebook Acer', 8000000, 10800000, 7, 2, 5),
(9, 'LN01', 'Notebook Lenovo', 9000000, 12000000, 9, 2, 5),
(10, 'L004', 'Laptop HP', 12000000, 13000000, 20, 5, 5),
(11, 'han12', 'msi modern14', 9, 10.8, 20, 1, 5),
(13, 'han13', 'msi modern14', 9000000, 10800000, 20, 1, 1),
(14, 'han123', 'Iphone xs max', 11000000, 13200000, 20, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nomor` varchar(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kontak` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`id`, `nomor`, `nama`, `kota`, `kontak`) VALUES
(1, 'V001', 'PT Guna Samudra', 'Surabaya', 'Ali Nurdin'),
(2, 'V002', 'PT Pondok C9', 'Depok', 'Putri Ramadhani'),
(3, 'V003', 'CV Jaya Raya Semesta', 'Jakarta', 'Dwi Rahayu'),
(4, 'V004', 'PT Lekulo X', 'Kebumen', 'Mbambang G'),
(5, 'V005', 'PT IT Prima', 'Jakarta', 'David W');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kartu`
--
ALTER TABLE `kartu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pelanggan_kartu1_idx` (`kartu_id`),
  ADD KEY `idx_nama_pelanggan` (`nama`),
  ADD KEY `idx_tgllahir_pelanggan` (`tgl_lahir`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokuitansi_UNIQUE` (`nokuitansi`),
  ADD KEY `fk_pembayaran_pesanan1_idx` (`pesanan_id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_UNIQUE` (`nomor`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_customer_idx` (`pelanggan_id`);

--
-- Indeks untuk tabel `pesanan_items`
--
ALTER TABLE `pesanan_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_items_pesanan1_idx` (`pesanan_id`),
  ADD KEY `fk_pesanan_items_produk1_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_produk_jenis_produk1_idx` (`jenis_produk_id`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kartu`
--
ALTER TABLE `kartu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesanan_items`
--
ALTER TABLE `pesanan_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`kartu_id`) REFERENCES `kartu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan_items`
--
ALTER TABLE `pesanan_items`
  ADD CONSTRAINT `pesanan_items_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_items_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`jenis_produk_id`) REFERENCES `jenis_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
