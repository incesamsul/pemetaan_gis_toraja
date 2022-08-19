-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2022 pada 19.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemetaan_gis_toraja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(10) UNSIGNED NOT NULL,
  `gambar_kuliner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kuliner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_kuliner` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi_kuliner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `gambar_kuliner`, `nama_kuliner`, `rating_kuliner`, `harga`, `deskripsi_kuliner`, `created_at`, `updated_at`) VALUES
(1, '62f7fd0488c9d..jpg', 'Café Arion', 0, 0, 'Buka Seriap Hari Jam 10.00 - 21.00 \r\nHadirkan suasana baru dengan konsep yang berbeda dan pertama kalinya di Toraja, ada Cafe, Tempat Service dan Cuci Kendaraan, SPBU Serta Minimarket Hadir Dalam Satu Kompleks. Konsep pelayanan satu kompleks untuk memperm', '2022-08-13 11:35:32', '2022-08-13 11:35:32'),
(2, '62f7fed095d51..jpg', 'Yamoke Café', 0, 0, 'Buka Setiap Hari 17.00 - 21.00\r\nMelayani Makan di tempat\r\nPesan Antar\r\nBawa Pulang\r\nSilahkan hubungi No tlfon : 081343737941', '2022-08-13 11:43:13', '2022-08-13 11:43:13'),
(3, '62f7ffe99cf75..jpg', 'Warung Makan Hj. Idaman', 0, 0, 'Buka Setiap Hari 09.00 - 22.00\r\nMelayani Makan di tempat\r\nPesan Antar\r\nBawa Pulang\r\nHalal', '2022-08-13 11:47:53', '2022-08-13 11:47:53'),
(4, '62f801589c3a3..jpg', 'Rumah Makan Depot 99', 0, 0, 'Buka Setiap Hari jam 13.00 - 21.00\r\nSilahkan hubungi No tlfon : 081242369799\r\nMelayani Makan di tempat, Pesan Antar, Bawa Pulang', '2022-08-13 11:54:00', '2022-08-13 11:54:00'),
(5, '62f8fa8c6ab0a..jpg', 'Warung Khalisa', 0, 0, 'Buka Setiap Hari jam 09.00 - 22.00', '2022-08-14 05:37:16', '2022-08-14 05:37:16'),
(7, '62f8fe6460ef3..jpg', 'Rumah Makan Mitra Patma', 0, 0, 'Buka Setiap Hari jam 08.00 - 19. 00 . Menyediakan Makanan Halal', '2022-08-14 05:53:40', '2022-08-14 05:53:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
