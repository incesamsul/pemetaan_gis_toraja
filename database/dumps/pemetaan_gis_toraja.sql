

INSERT INTO `destination` (`id_destination`, `gambar_destination`, `nama_destination`, `rating_destination`, `harga_tiket`, `deskripsi_destination`, `link_pemetaan`, `ket_pemetaan`, `created_at`, `updated_at`) VALUES
(5, '62d2d77f7e988..jpg', 'toraja 1', 0, 80000, 'deskripsi destinasi', '//www.arcgis.com/apps/Embed/index.html?webmap=3cdbcfe203fa44cfbb03a4a889da0d7c&extent=119.8942,-2.9751,119.9101,-2.9666&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'keterangan peta', '2022-07-16 07:21:35', '2022-07-16 07:21:35'),
(6, '62d2d8022a5ae..jpg', 'toraja 2', 0, 900000, 'deskirpsi', '//www.arcgis.com/apps/Embed/index.html?webmap=3cdbcfe203fa44cfbb03a4a889da0d7c&extent=119.1694,-5.2822,119.6765,-5.0107&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light', 'keterangan pada peta...', '2022-07-16 07:23:46', '2022-07-16 07:23:46'),
(7, '62d2d83681a97..jpg', 'toraja 3', 0, 740000, 'dflkjfdlfslfjsl;fj', 'dlkfdlfj', 'ldkjfdljfldjf', '2022-07-16 07:24:38', '2022-07-16 07:24:38'),
(8, '62d2d846321a5..jpg', 'toraja 4', 0, 453333, 'jfldjfl;q', 'sdlfjsl;a', 'ljfldjl', '2022-07-16 07:24:54', '2022-07-16 07:24:54'),
(9, '62d2d8599713f..jpg', 'toraja 5', 0, 87999, 'l;jfldjfl;q', 'ldfjl;', 'jlfjdlj', '2022-07-16 07:25:13', '2022-07-16 07:25:13');




INSERT INTO `profile` (`id_profile`, `id_user`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nisn`, `alamat`, `no_telp`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `tahun_masuk`, `tahun_lulus`, `no_ijazah`, `no_skhun`, `created_at`, `updated_at`) VALUES
(1, 1, 'L', 'jl;', '2021-11-26', 'jlkjlj', 'ljlj', 'jl', 'jlj', 'ljl', 'jljl', 'jlkjl', 2000, 2000, 'jlkjlkj', 'lkjl', '2021-11-24 11:34:44', '2021-11-24 11:56:23'),
(2, 3, 'L', 'jl;', '2021-11-26', 'jlkjlj', 'ljlj', 'jl', 'jlj', 'ljl', 'jljl', 'jlkjl', 2000, 2000, 'jlkjlkj', 'lkjl', '2021-11-24 11:34:44', '2021-11-24 11:56:23'),
(3, 2, 'L', 'jl;', '2021-11-26', 'jlkjlj', 'ljlj', 'jl', 'jlj', 'ljl', 'jljl', 'jlkjl', 2000, 2000, 'jlkjlkj', 'lkjl', '2021-11-24 11:34:44', '2021-11-24 11:56:23');




INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$N6nmGrHUtLAw5/5SlPZqEehn.S5KDNDFHf1yuW184mEw5zLWhVeLm', 'Administrator', '61b5cf20cb753.jpg', NULL, '2021-11-24 09:06:43', '2021-12-11 18:29:52');
