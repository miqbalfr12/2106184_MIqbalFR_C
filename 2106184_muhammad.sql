-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2023 pada 13.35
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
-- Database: `2106184_muhammad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensus_penduduk`
--

CREATE TABLE `sensus_penduduk` (
  `id` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `tgl` date NOT NULL,
  `kwn` tinyint(1) NOT NULL,
  `hbgn` enum('Kepala keluarga','Suami','Istri','Anak','Menantu','Cucu') NOT NULL,
  `prv` enum('Jawa Barat','Jawa Tengah','Jawa Timur') NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kcmtn` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `jln` varchar(255) NOT NULL,
  `stskep` enum('Milik Sendiri','Sewa','Menumpang','Lainnya') NOT NULL,
  `lstk` varchar(255) NOT NULL,
  `airm` varchar(255) NOT NULL,
  `akti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sensus_penduduk`
--

INSERT INTO `sensus_penduduk` (`id`, `nama`, `jk`, `tgl`, `kwn`, `hbgn`, `prv`, `kota`, `kcmtn`, `desa`, `rt`, `rw`, `jln`, `stskep`, `lstk`, `airm`, `akti`) VALUES
(1, 'iqbal', 'laki-laki', '2003-04-12', 1, 'Kepala keluarga', 'Jawa Barat', 'Garut', 'Karangpawitan', 'Sindanggalih', 13, 3, 'Perumahan Abdi Negara 1 No 197', 'Milik Sendiri', '1400', 'PDAM', 'bekerja'),
(2, 'noval', 'laki-laki', '2023-11-21', 1, 'Kepala keluarga', 'Jawa Tengah', 'Garut', 'Bayongbong', 'Cinisti', 2, 1, 'BYB 120', 'Menumpang', '800', 'Keran', 'tidak bekerja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sensus_penduduk`
--
ALTER TABLE `sensus_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sensus_penduduk`
--
ALTER TABLE `sensus_penduduk`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
