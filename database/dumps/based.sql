

INSERT INTO `profile` (`id_profile`, `id_user`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nisn`, `alamat`, `no_telp`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `tahun_masuk`, `tahun_lulus`, `no_ijazah`, `no_skhun`, `created_at`, `updated_at`) VALUES
(1, 1, 'L', 'jl;', '2021-11-26', 'jlkjlj', 'ljlj', 'jl', 'jlj', 'ljl', 'jljl', 'jlkjl', 2000, 2000, 'jlkjlkj', 'lkjl', '2021-11-24 19:34:44', '2021-11-24 19:56:23'),
(2, 3, 'L', 'jl;', '2021-11-26', 'jlkjlj', 'ljlj', 'jl', 'jlj', 'ljl', 'jljl', 'jlkjl', 2000, 2000, 'jlkjlkj', 'lkjl', '2021-11-24 19:34:44', '2021-11-24 19:56:23'),
(3, 2, 'L', 'jl;', '2021-11-26', 'jlkjlj', 'ljlj', 'jl', 'jlj', 'ljl', 'jljl', 'jlkjl', 2000, 2000, 'jlkjlkj', 'lkjl', '2021-11-24 19:34:44', '2021-11-24 19:56:23');



INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$N6nmGrHUtLAw5/5SlPZqEehn.S5KDNDFHf1yuW184mEw5zLWhVeLm', 'Administrator', '61b5cf20cb753.jpg', NULL, '2021-11-24 17:06:43', '2021-12-12 02:29:52'),
(2, 'user', 'user@mail.com', NULL, '$2y$10$rzbEl5L/96hsivMG1QDkp.Y6kNXGIDUOMmYxnuWSBK8EmFPxpoHn6', 'user', '61b5dcc0ab820.png', NULL, '2021-11-24 21:15:14', '2021-12-12 03:28:00'),
(3, 'penilai1', 'penilai1@mail.com', NULL, '$2y$10$nmqzXCRDpJb9asVkZKvsduSHMsMlPMn7g.pFz0Lq6SIIGh7EaIxda', 'penilai', '', NULL, '2021-11-26 10:13:42', '2021-11-26 10:13:42');

