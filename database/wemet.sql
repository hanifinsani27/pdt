-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2021 pada 17.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wemet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `phonenum` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`name`, `phonenum`, `username`, `password`, `role`) VALUES
('admin', 0, 'admin', 'admin', 'admin'),
('Hanif', 81, 'Insani', '$2y$10$1b0djyVjdZCtV2XeLTrKLeI8nTd6kZ.UoerRy4jES0S6UUmnFwHSW', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `field`
--

CREATE TABLE `field` (
  `fieldnum` int(11) NOT NULL,
  `tipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `field`
--

INSERT INTO `field` (`fieldnum`, `tipe`) VALUES
(1, 'Pengetahuan Alam'),
(2, 'Pengetahuan Sosial'),
(3, 'Pengembangan Moral'),
(4, 'Konsep Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `listharga`
--

CREATE TABLE `listharga` (
  `opt` int(11) NOT NULL,
  `fieldnum` int(11) DEFAULT NULL,
  `startday` int(11) NOT NULL,
  `endday` int(11) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentoring`
--

CREATE TABLE `mentoring` (
  `transnum` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `Mulai` int(11) NOT NULL,
  `Berakhir` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `Kode Mentoring` int(11) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Waiting for Confirmation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentorprice`
--

CREATE TABLE `mentorprice` (
  `transnum` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `start` int(11) DEFAULT NULL,
  `end` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `fieldnum` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `price`
--

CREATE TABLE `price` (
  `transnum` int(11) DEFAULT NULL,
  `opt` int(11) DEFAULT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `price`
--

INSERT INTO `price` (`transnum`, `opt`, `totalprice`) VALUES
(96, 5, 160000),
(323, 13, 135000),
(406, 13, 150000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fieldnum`);

--
-- Indeks untuk tabel `listharga`
--
ALTER TABLE `listharga`
  ADD PRIMARY KEY (`opt`);

--
-- Indeks untuk tabel `mentoring`
--
ALTER TABLE `mentoring`
  ADD PRIMARY KEY (`transnum`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mentoring`
--
ALTER TABLE `mentoring`
  MODIFY `transnum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
