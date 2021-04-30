-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2021 pada 19.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moklet_perpustakaan1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_anggota`
--

INSERT INTO `t_anggota` (`id`, `nama`, `kelas`, `telp`, `username`, `password`, `id_level`) VALUES
(16, 'Anggota 1', 'XTKJ1', '1234567890', 'agt1', 'agt1', NULL),
(17, 'anggota 2', 'XIRPL1', '12345690', 'agt2', 'agt2', NULL),
(18, 'anggota 3', 'XRPL1', '12345666', 'agt3', 'agt3', NULL),
(19, 'anggota 4', 'XRPL2', '1234567890', 'agt4', 'agt4', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_buku`
--

CREATE TABLE `t_buku` (
  `id` int(3) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `ringkasan` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_buku`
--

INSERT INTO `t_buku` (`id`, `kode_buku`, `judul`, `penerbit`, `pengarang`, `ringkasan`, `cover`, `stok`) VALUES
(5, 'A4', 'seni tinggal di bumi', 'gramedia', 'qooonit', 'blabla', 'blabla', 4),
(7, 'A5', 'TherMelian', 'Gramedia', 'ShiennyMS', 'blablabla', '', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_petugas`
--

CREATE TABLE `t_petugas` (
  `id` int(3) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(11) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `id_level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_petugas`
--

INSERT INTO `t_petugas` (`id`, `nama_petugas`, `username`, `password`, `telp`, `id_level`) VALUES
(11, 'admin ', 'adm1', 'adm1', '12345690', 0),
(12, 'admin 2', 'adm2', 'adm2', '1234567890', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
