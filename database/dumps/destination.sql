-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2022 pada 20.22
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
-- Struktur dari tabel `destination`
--

CREATE TABLE `destination` (
  `id_destination` int(10) UNSIGNED NOT NULL,
  `gambar_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_destination` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `deskripsi_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_pemetaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_pemetaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destination`
--

INSERT INTO `destination` (`id_destination`, `gambar_destination`, `nama_destination`, `rating_destination`, `harga_tiket`, `deskripsi_destination`, `link_pemetaan`, `ket_pemetaan`, `created_at`, `updated_at`) VALUES
(10, '62f3ee2f0d2aa..jpg', 'Patung Yesus Buntu Burake', 0, 0, 'Buka setiap hari jam 07.00 - 21.00', '//www.arcgis.com/apps/Embed/index.html?webmap=92036a2d18e4403da5e314b16af080ef&extent=119.8464,-3.1069,119.8913,-3.0848&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Patung Tuhan Yesus', '2022-08-10 09:43:11', '2022-08-10 09:43:11'),
(11, '62f3ef09b059b..jpg', 'Agrowisata Pango-Pango', 0, 0, 'Buka Setiap Hari\r\nPango-pango merupakan satu dari sekian destinasi wisata di Toraja yang berada di atas awan. Letaknya di ketinggian 1700 mdpl dan berjarak sekitar 7 kilometer dari pusat Kota Makale. Selain keindahan pemandangannya, kesejukan udaranya jug', '//www.arcgis.com/apps/Embed/index.html?webmap=db0191076a6d49928de16add2b0e0ce6&extent=119.7979,-3.158,119.8428,-3.1359&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Agrowisata Pango-Pango', '2022-08-10 09:46:49', '2022-08-10 09:46:49'),
(12, '62f3efad56bef..jpg', 'Wisata Ollon', 0, 15, 'Buka Setiap hari\r\nmenikmati hamparan bukit luas yang hijau dan bermain bersama kuda', '//www.arcgis.com/apps/Embed/index.html?webmap=75ccdaf10ad24df8957fa032a46772b3&extent=119.5898,-3.1862,119.7694,-3.0979&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Wisata Ollon', '2022-08-10 09:49:33', '2022-08-10 09:49:33'),
(13, '62f3f0af22fa3..jpg', 'Mata Air Tilangga', 0, 15, 'Buka setiap Hari 08.30–16.00\r\nSuguhan pemandangan alamnya sangat memanjakan mata. Suasana dingin semakin melengkapi kesejukan di tempat ini. Sangat cocok untuk kamu yang ingin mencari ketenangan.', '//www.arcgis.com/apps/Embed/index.html?webmap=9ba016f304e84243bf06284d82b2bd91&extent=119.8386,-3.0522,120.0182,-2.964&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Mata Air Tilangga', '2022-08-10 09:53:51', '2022-08-10 09:53:51'),
(14, '62f3f2b395b8b..jpg', 'Lolai Negeri diatas Awan', 0, 15, 'Lolai berada di kawasan Toraja Utara. Pesonanya tak terbantahkan. Atmosfer paginya begitu luar biasa. Gulungan kabut tebal lembut menyentuh kulit. Belum lagi kicauan burung-burung yang terdengar begitu merdu di telinga.', '//www.arcgis.com/apps/Embed/index.html?webmap=92036a2d18e4403da5e314b16af080ef&extent=119.6243,-2.965,119.9834,-2.7884&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Lolai Negeri diatas Awan', '2022-08-10 10:02:27', '2022-08-10 10:02:27'),
(15, '62f3f38fc51b1..jpg', 'Wisata Kete Kesu', 0, 15, 'Wisata ini merupakan desa yang indah dan unik. Mereka yang berkunjung ke desa Kete Kesu sangat bisa melihat pemandangan yang menyegarkan. Adanya view menakjubkan serta udara yang masih alami dan tidak terpapar polusi merupakan daya tarik terbesar. Desa in', '//www.arcgis.com/apps/Embed/index.html?webmap=8bdd6977b2cb4ca69ecd12c87d038b4c&extent=119.8949,-2.9983,119.9398,-2.9763&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Wisata Kete Kesu', '2022-08-10 10:06:07', '2022-08-10 10:06:07'),
(16, '62f3f422b4dbc..jpg', 'Wisata Londa', 0, 15, 'Londa merupakan sebuah kompleks kuburan yang ada di sebuah tebing batu besar.  Bahkan Londa ini juga diketahui dikelilingi oleh pegunungan sehingga memberi suasana yang begitu sejuk dan menyegarkan. Ada sensasi berbeda ketika memasuki Londa karena bernuan', '//www.arcgis.com/apps/Embed/index.html?webmap=9221035aee284c68bc6d15f0af1d4e3d&extent=119.853,-3.0203,119.8979,-2.9982&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Wisata Londa', '2022-08-10 10:08:34', '2022-08-10 10:08:34'),
(17, '62f3f4a172cd9..jpg', 'wisata museum Ne\' Gandeng', 0, 0, 'Dulunya, bangunan tersebut merupakan sebuah tempat pelaksanaan prosesi penguburan Ne’ Gandeng. Meninggal di tanggal 3 Agustus 1994 silam dan prosesinya dilakukan dengan begitu detail. Sebab, masyarakat Toraja sendiri juga dikenal sebagai pribadi yang begi', '//www.arcgis.com/apps/Embed/index.html?webmap=c53e0d534f9246819eb6cc27e84c17ff&extent=119.9307,-2.9359,119.9756,-2.9138&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'wisata museum Ne\' Gandeng', '2022-08-10 10:10:41', '2022-08-10 10:10:41'),
(18, '62f3f50865ea5..jpg', 'Danau Limbong', 0, 0, 'Wisata yang disebut sebagai kolam alam limbong ini menghadirkan panorama yang eksotis dan menarik untuk dinikmati. Tentunya, Anda akan menemukan kondisi alam yang indah dan segar karena danau ini dikelilingi oleh deretan pegunungan.\r\n\r\nObjek wisata yang m', '//www.arcgis.com/apps/Embed/index.html?webmap=0f4b5aca81a44deea0a27e985f210561&extent=119.8664,-2.9758,119.9113,-2.9537&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Danau Limbong', '2022-08-10 10:12:24', '2022-08-10 10:12:24'),
(19, '62f3f574c79cc..jpg', 'Wisata Kalimbuang Bori', 0, 0, 'Pengunjung bisa melihat banyaknya batu menhir atau batu berdiri. Batu ini memang sengaja didirikan dengan fungsi sebagai bukti untuk menghormati para tetua adat atau keluarga bangsawan yang sudah meninggal di ratusan tahun silam. Sebab, batu menhir ini ju', '//www.arcgis.com/apps/Embed/index.html?webmap=be5c742aaa1e49e784ebb500b1ccf91a&extent=119.8973,-2.9299,119.9422,-2.9078&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Wisata Kalimbuang Bori', '2022-08-10 10:14:12', '2022-08-10 10:14:12'),
(20, '62f3f5c679006..jpg', 'Objek Wisata Pallawa', 0, 15, 'Berkunjungi ke Objek Wisata Palawa akan membuat para wisatawan melihat adanya rumah adat Toraja yang unik. Rumah adat tersebut didesain dan juga didekor semenarik mungkin menggunakan tanduk kerbau yang ditempatkan di bagian depan Tongkonan.', '//www.arcgis.com/apps/Embed/index.html?webmap=3d4d7bf489a7445cada8105c5700e174&extent=119.8966,-2.9329,119.9415,-2.9108&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Objek Wisata Pallawa', '2022-08-10 10:15:34', '2022-08-10 10:15:34'),
(21, '62f3f6528f2db..jpg', 'Air Terjun Talondo Tallu', 0, 15, 'Anda juga bisa menemukan keindahan wisata air terjun di tempat ini. Air Terjun Talondo Tallu yang sangat terkenal di tempat ini menawarkan pemandangan ciamik dengan tiga cabang air terjun yang sangat unik.', '//www.arcgis.com/apps/Embed/index.html?webmap=781880543fdc41fa9bfe8d13b107bbc5&extent=119.6347,-3.0521,119.6796,-3.0301&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Air Terjun Talondo Tallu', '2022-08-10 10:17:54', '2022-08-10 10:17:54'),
(22, '62f3f6db615d4..jpg', 'Lokomata', 0, 15, 'Tempat ini juga tak jauh berbeda dengan tempat pemakaman lainnya Lokomata dikenal sebagai tempat menyimpan jenazah dan berada di pinggir jalan raya. Lokomata berarti lubang, tempat yang terdiri dari batu yang sangat besar daan dilubangi untuk meletakkan j', '//www.arcgis.com/apps/Embed/index.html?webmap=f33e031275e147498a0a411359ce25f0&extent=119.8467,-2.9183,119.8916,-2.8963&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Lokomata', '2022-08-10 10:20:11', '2022-08-10 10:20:11'),
(23, '62f3f72b7daeb..jpg', 'Wisata Batu Tumonga', 0, 15, 'Wisata Batutumonga merupakan tempat wisata yang sayang untuk dilewatkan. Sebab, desa ini memiliki pemandangan alam yang masih begitu terjaga. Pengunjung bisaa melihat adanya Kota Rantepao dari ketinggian mencapai 1300 M diatas permukaan laut. Keberadaanny', '//www.arcgis.com/apps/Embed/index.html?webmap=8c5965c975cb4644a1c2444708e055f7&extent=119.8966,-2.9329,119.9415,-2.9108&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'Wisata Batu Tumonga', '2022-08-10 10:21:31', '2022-08-10 10:21:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destination`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destination` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
