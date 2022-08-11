-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2022 pada 21.22
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
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) UNSIGNED NOT NULL,
  `tgl_berita` date NOT NULL,
  `gambar_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tgl_berita`, `gambar_berita`, `judul_berita`, `isi_berita`, `created_at`, `updated_at`) VALUES
(1, '2022-08-11', '62f40097bfe9b..jpg', 'Toraja Highland Festival pada 11-13 Agustus 2022', 'Toraja Highland Festival (THF) 2022 kembali akan digelar di Toraja Utara, pada 11-13 Agustus 2022.\r\n\r\nAjang promosi wisata berbasis budaya dengan tema \'Taste of Toraja\' ini akan memperkenalkan olahraga dan keindahan alam Toraja. \r\nNantinya Pameran UMKM, P', '2022-08-10 11:01:43', '2022-08-10 11:01:43'),
(2, '2022-08-15', '62f401cc5e474..jpg', 'Magical Toraja 2022', 'Event Magical Toraja dilaksanakan oleh Perhimpunan Masyarakat Toraja Indonesia (PMTI) bekerja sama dengan Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) RI. Tema yang diusung ialah \"Pariwisata Maju Indonesia Bangkit, Melalui Festival Berbasis ', '2022-08-10 11:06:52', '2022-08-10 11:06:52'),
(3, '2022-12-05', '62f403ed7e0d3..jpg', 'Lovely Desember Toraja', 'Salah satu agenda pariwisatanya yaitu Lovely December di Tana Toraja akan digelar kembali atas permintaan masyarakat setempat.  juga akan lebih memperkenalkan branding Wonderful Indonesia serta Pesona Indonesia kepada masyarakat luas dalam program Lovely ', '2022-08-10 11:15:57', '2022-08-10 11:15:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
