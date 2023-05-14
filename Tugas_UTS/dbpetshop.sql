-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2023 pada 08.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpetshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'Royal Canin'),
(2, 'Whiskas'),
(3, 'Ori Cat'),
(4, 'Me- O'),
(5, 'Happy Cat'),
(6, 'Friskies Ocean Platter'),
(7, 'Antibiotik'),
(8, 'Obat Vaksin'),
(9, 'Obat Cacing'),
(10, 'Vitamin'),
(11, 'Kandang'),
(12, 'Pasir'),
(13, 'Susu untuk Kucing'),
(14, 'Susu untuk Anjing'),
(15, 'Shampo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `tanggal` date NOT NULL,
  `total_harga` double NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_produk`, `qty`, `tanggal`, `total_harga`, `nama_pemesan`, `alamat_pemesan`) VALUES
(1, 'Royal Canin ', 5, '2021-05-03', 65, 'Fakhriza', 'bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_produk` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga`, `stok`, `jenis_produk`) VALUES
(1, 'RC01', 'Royal Canin', 65000, 500, 'Makanan'),
(2, 'WH02', 'Whiskas', 50000, 800, 'Makanan'),
(3, 'OC03', 'Ori Cat', 20000, 650, 'Makanan'),
(4, 'MO04', 'Me- O', 22000, 650, 'Makanan'),
(5, 'HC05', 'Happy Cat', 250000, 400, 'Makanan'),
(6, 'FOP06', 'Friskies Ocean Platter', 33500, 300, 'Makanan'),
(7, 'AB07', 'Antibiotik', 250000, 800, 'Obat'),
(8, 'VN08', 'Vitamin', 250000, 700, 'Obat'),
(9, 'OC09', 'Obat Cacing', 21340, 400, 'Obat'),
(10, 'VI10', 'Vitamin', 550000, 400, 'Obat'),
(11, 'KG11', 'Kandang', 530000, 650, 'Perlengkapan'),
(12, 'PR12', 'Pasir', 65000, 800, 'Perlengkapan'),
(13, 'SK13', 'Susu untuk Kucing', 27500, 650, 'Perlengkapan'),
(14, 'SA14', 'Susu untuk Anjing', 27500, 700, 'Perlengkapan'),
(15, 'SO15', 'Shampo', 50000, 400, 'Perlengkapan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
