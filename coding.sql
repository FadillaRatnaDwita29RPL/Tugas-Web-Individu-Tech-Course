-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 07.00
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coding`
--

CREATE TABLE `coding` (
  `id` int(20) NOT NULL,
  `id_class` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quota` int(50) NOT NULL,
  `photo` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `description` text NOT NULL,
  `materi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coding`
--

INSERT INTO `coding` (`id`, `id_class`, `name`, `quota`, `photo`, `harga`, `description`, `materi`) VALUES
(10, 1, 'Learn Basic Framework Vue', 30, 'vue.jpg', 150000, 'Learning Basic Framework Vue with material that is gradual, structured, and easy to understand and is guided by a professional mentor', 'Bedah Kisi-Kisi PAS PAI SMST1.pdf'),
(11, 1, 'Learn Basic JS Frame Node JS', 120, 'node.jpg', 400000, 'Learn basic JS with framework Node JS backend', 'Kompetisi Kebaikan (1) (2).ppt');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `coding`
--
ALTER TABLE `coding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coding`
--
ALTER TABLE `coding`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
