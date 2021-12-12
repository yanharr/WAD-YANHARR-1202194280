-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 12 Des 2021 pada 10.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_table`
--

CREATE TABLE `buku_table` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_table`
--

INSERT INTO `buku_table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(18, 'WAD', 'Yanharr_1202194280', 2020, 'Buku sakti untuk menjadi bill gates', 'pemrograman-web.png', 'Pemrograman', 'Indonesia'),
(19, 'Konspirasi Alam Semesta', 'Yanharr_1202194280', 2017, 'Bukunya fiersa besari, senja indie kopi', 'konspirasi-alam-semesta.jpg', 'Lainnya', 'Lainnya'),
(21, 'Ternak Lele', 'Yanharr_1202194280', 2014, 'cuan dengan ternak lele', '2845_Komplet_Lengkap_Budi_Daya_Bisnis_Ikan_Lele_Semua_Varietas.jpg', 'Pemrograman', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_table`
--
ALTER TABLE `buku_table`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_table`
--
ALTER TABLE `buku_table`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
