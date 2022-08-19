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
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(10) UNSIGNED NOT NULL,
  `gambar_penginapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penginapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_penginapan` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `deskripsi_penginapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_pemetaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_pemetaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `gambar_penginapan`, `nama_penginapan`, `rating_penginapan`, `harga_tiket`, `deskripsi_penginapan`, `link_pemetaan`, `ket_pemetaan`, `created_at`, `updated_at`) VALUES
(2, '62f802a878cca..jpg', 'Hotel Misliana Toraja', 0, 600000, 'Walaupun berbentuk tradisional, hotel ini dimodernisasi dan dilengkapi dengan kamar tidur beserta kamar mandi yang bersih.\r\nDari hotel, pengunjung dapat melihat pemandangan sungai Sa’dan. Hotel Misliana juga memiliki fasilitas kolam renang.Hotel Misliana ', 'Jl. Pongtiku No. 27, Lemo Menduruk, Rantepao, Tallulolo, Kec. Kesu, Kabupaten Tana Toraja, Sulawesi Selatan 91861', 'none', '2022-08-13 11:59:36', '2022-08-13 11:59:36'),
(3, '62f8032e76c24..jpg', 'Lande Villa', 0, 500000, 'Dari segi eksterior, villa ini terlihat sangat estetik dengan bangunan yang seperti bentuk tradisional tapi dibuat minimalis modern. Lande Villa berada di Jalan Pongtiku sehingga dekat dengan bandara Pongtiku.', 'Jalan Pongtiku jembatan alang alang No.depan, Sangubua, Kec. Kesu, Kabupaten Toraja Utara, Sulawesi Selatan 91852', 'none', '2022-08-13 12:01:50', '2022-08-13 12:01:50'),
(4, '62f8f59668970..jpg', 'Wisma Maestro Toraja', 0, 100000, 'Wisma Maestro Toraja adalah pilihan yang tepat. Bahkan kamar mandi di sini pun sangat bersih dan minimalis. Wisma ini terletak di Rantepao yang tentunya strategis dan terdapat berbagai objek wisata seperti Kalimbuang dan Gunung Tambolang', 'Jl. Pahlawan No.73, Rante Pasele, Kec. Rantepao, Kabupaten Toraja Utara, Sulawesi Selatan 91833', 'none', '2022-08-14 05:16:06', '2022-08-14 05:16:06'),
(5, '62f8f61cc2118..jpg', 'RedDoorz Makale', 0, 200000, 'Rekomendasi penginapan di toraja yang dekat dengan Patung Yesus Memberkati. Jika Anda pergi ke Tana Toraja untuk melihat patung Yesus Memberkati, Anda bisa menginap di RedDoorz Makale. Tidak hanya itu, penginapan ini juga dekat ke Wisata Pango-Pango.', 'Jl. Poros Makale Makassar, Tondon Mamullu, Kec. Makale, Kabupaten Tana Toraja, Sulawesi Selatan 91817', 'none', '2022-08-14 05:18:20', '2022-08-14 05:18:20'),
(6, '62f8f70b14b2c..jpg', 'D\'Lempe Resort Tongkonan', 0, 1300000, 'Jika tidak ingin ribet-ribet datang subuh demi melihat samudera awan di Puncak Lolai, Anda bisa menginap di hotel mewah yang ada di puncak Lolai. Yang menakjubkan adalah Anda bisa melihat view hamparan awan langsung dari kamar! Melalui jendela kamar yang ', '3V35+PG9, Benteng Mamulu, Kec. Kapala Pitu, Kabupaten Toraja Utara, Sulawesi Selatan 91854', 'none', '2022-08-14 05:22:19', '2022-08-14 05:22:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
