-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2023 pada 17.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_meme`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmeme`
--

CREATE TABLE `daftarmeme` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'none',
  `creator` varchar(100) NOT NULL DEFAULT 'unknown',
  `status` varchar(100) NOT NULL,
  `love` int(11) NOT NULL,
  `hate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarmeme`
--

INSERT INTO `daftarmeme` (`id`, `judul`, `gambar`, `creator`, `status`, `love`, `hate`) VALUES
(1, 'pram face', 'Senyum Kodomo.png', 'kang jepret', 'dilihat', 98, 0),
(2, 'man face', 'helloman.png', 'kang jepret', 'dilihat', 0, 0),
(3, 'mahen face', 'IMG-20220915-WA0008.jpg', 'anonymous', 'dilihat', 0, 0),
(4, 'syam face', 'syam2.jpg', 'kang jepret', 'dilihat', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarmeme`
--
ALTER TABLE `daftarmeme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarmeme`
--
ALTER TABLE `daftarmeme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
