-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 04:05 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `nis`, `nama`, `kelas`, `sex`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(1, 1111, 'doni', '7B', 'Laki - Laki', 'YOGYAKARTA', '081802706314', '2016-11-03 20:20:30', '2016-11-03 20:22:04'),
(2, 1112, 'julia', '7B', 'Perempuan', 'SOLO', '081802706314', '2016-11-03 20:20:55', '2016-11-03 20:21:13'),
(3, 1113, 'marissa', '7C', 'Perempuan', 'YOGYAKARTA', '081802706314', '2016-11-03 20:21:48', '2016-11-03 20:21:48'),
(4, 1114, 'Putri', '9B', 'Perempuan', 'Surakarta', '081802706315', '2016-11-15 00:13:27', '2016-11-15 00:13:27'),
(5, 1115, 'Sergey', '8C', 'Laki - Laki', 'Jakarta', '081802706319', '2016-11-15 01:05:12', '2016-11-15 01:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogger_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloggers`
--

CREATE TABLE `bloggers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `isbn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desk` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penerbit_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thn_terbit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rak_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `isbn`, `judul`, `desk`, `pengarang_id`, `penerbit_id`, `jumlah`, `thn_terbit`, `rak_id`, `created_at`, `updated_at`) VALUES
(3, '12121', 'Laravel', 'eloquent', '1', '0', '7', '2017', '1', '2016-11-04 02:54:46', '2016-11-04 02:54:46'),
(4, '34445', 'Ajax', 'Vestibulum nec vestibulum erat, id luctus nisl. Quisque tristique pulvinar elementum. Proin venenatis libero nisl, quis eleifend nunc mattis vitae. Ut ut augue ipsum. Fusce felis tortor, condimentum nec interdum quis, efficitur ac sapien. In a lorem dictu', '2', '1', '6', '2017', '2', '2016-11-04 03:43:28', '2016-11-09 21:57:06'),
(5, '55862', 'HTML', 'Vestibulum nec vestibulum erat, id luctus nisl. Quisque tristique pulvinar elementum. Proin venenatis libero nisl, quis eleifend nunc mattis vitae. Ut ut augue ipsum. Fusce felis tortor, condimentum nec interdum quis, efficitur ac sapien. In a lorem dictu', '2', '0', '5', '2015', '1', '2016-11-04 03:51:05', '2016-11-04 21:22:09'),
(6, '34445', 'Javascript', 'Belajar dasar-dasar javascript', '3', '2', '5', '2016', '1', '2016-11-09 21:56:19', '2016-11-09 21:56:19'),
(7, '34440', 'CSS', 'Laravel is a clean and classy framework for PHP web development. Freeing you from spaghetti code, it helps you create wonderful applications, using simple, expressive syntax. Development should be a creative experience that you enjoy, not something that i', '1', '2', '7', '2016', '2', '2016-11-09 22:03:16', '2016-11-09 22:03:16'),
(8, '12127', 'Angular JS', 'Laravel is a clean and classy framework for PHP web development. Freeing you from spaghetti code, it helps you create wonderful applications, using simple, expressive syntax. Development should be a creative experience that you enjoy, not something that i', '2', '1', '5', '2017', '2', '2016-11-09 22:05:30', '2016-11-09 22:05:30'),
(9, '12139', 'Php', 'Sebagian materi di bab ini bukan untuk Anda yang baru mengenal PHP. Jika Anda mengalami gejala pusing dan mual-mual setelah membaca materi di bab ini, silahkan pelajari kembali dasar-dasar PHP Procedural dan OOP.\r\n', '3', '2', '4', '', '1', '2016-11-12 01:34:14', '2016-11-12 01:34:14'),
(10, '55800', 'Twitter Bootsrtap', 'Sebagian materi di bab ini bukan untuk Anda yang baru mengenal PHP. Jika Anda mengalami gejala pusing dan mual-mual setelah membaca materi di bab ini, silahkan pelajari kembali dasar-dasar PHP Procedural dan OOP.\r\n', '2', '0', '3', '2016', '2', '2016-11-12 01:35:36', '2016-11-12 01:35:36'),
(11, '55833', 'SEO', 'Sebagian materi di bab ini bukan untuk Anda yang baru mengenal PHP. Jika Anda mengalami gejala pusing dan mual-mual setelah membaca materi di bab ini, silahkan pelajari kembali dasar-dasar PHP Procedural dan OOP.', '3', '1', '5', '2017', '2', '2016-11-15 01:15:52', '2016-11-15 01:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `kembalis`
--

CREATE TABLE `kembalis` (
  `id` int(10) UNSIGNED NOT NULL,
  `pinjam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terlambat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `denda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_27_070233_create_anggotas_table', 1),
('2016_09_27_070315_create_penerbits_table', 1),
('2016_09_27_070332_create_pengarangs_table', 1),
('2016_09_27_070346_create_bukus_table', 1),
('2016_09_27_070404_create_raks_table', 1),
('2016_09_27_070454_create_peminjamans_table', 1),
('2016_11_02_134608_create_articles_table', 1),
('2016_11_02_134704_create_bloggers_table', 1),
('2016_11_12_070705_create_pinjams_create', 2),
('2016_11_12_134442_create_kembalis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerbits`
--

CREATE TABLE `penerbits` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penerbits`
--

INSERT INTO `penerbits` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(0, 'Marissa', 'BANDUNG', '081802706314', '2016-11-02 08:23:58', '2016-11-08 09:09:12'),
(1, 'Terry', 'JAKARTA', '081802706314', '2016-11-02 08:23:26', '2016-11-08 09:08:51'),
(2, 'John D', 'Semarang', '081802706315', '2016-11-08 09:05:25', '2016-11-08 09:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `pengarangs`
--

CREATE TABLE `pengarangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengarangs`
--

INSERT INTO `pengarangs` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Doni', 'yogyakarta', '081802706314', '2016-11-02 08:18:34', '2016-11-08 09:08:31'),
(2, 'Julia', 'bandung', '081802706314', '2016-11-02 08:19:01', '2016-11-08 09:08:19'),
(3, 'Lissa', 'Surabaya', '081802706319', '2016-11-08 09:07:49', '2016-11-08 09:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `pinjams`
--

CREATE TABLE `pinjams` (
  `id` int(10) UNSIGNED NOT NULL,
  `anggota_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buku_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pinjams`
--

INSERT INTO `pinjams` (`id`, `anggota_id`, `buku_id`, `tgl_pinjam`, `tgl_kembali`, `status`, `created_at`, `updated_at`) VALUES
(13, '1', '3', '2017-11-12', '2017-11-19', 'Pinjam', '2016-11-14 09:44:02', '2016-11-14 09:44:02'),
(14, '2', '4', '2017-11-12', '2017-11-19', 'Bebas', '2016-11-14 09:44:19', '2016-11-15 02:18:22'),
(15, '3', '10', '2017-11-12', '2017-11-19', 'Bebas', '2016-11-14 09:44:41', '2016-11-15 01:49:01'),
(16, '5', '11', '2017-11-12', '2017-11-19', 'Pinjam', '2016-11-19 19:43:37', '2016-11-19 19:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `raks`
--

CREATE TABLE `raks` (
  `id` int(10) UNSIGNED NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `raks`
--

INSERT INTO `raks` (`id`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'a1', '2016-11-02 08:30:32', '2016-11-02 08:30:32'),
(2, 'c1', '2016-11-02 08:30:42', '2016-11-02 08:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'donnipr', 'donipr95@gmail.com', '$2y$10$lCJbicrIIRgFcnPvTgtLROHl9WQG0H1pUf3z9cabjN2bPSz20Z2iC', NULL, '2016-11-20 07:59:43', '2016-11-20 07:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloggers`
--
ALTER TABLE `bloggers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kembalis`
--
ALTER TABLE `kembalis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `penerbits`
--
ALTER TABLE `penerbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengarangs`
--
ALTER TABLE `pengarangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjams`
--
ALTER TABLE `pinjams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raks`
--
ALTER TABLE `raks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bloggers`
--
ALTER TABLE `bloggers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kembalis`
--
ALTER TABLE `kembalis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerbits`
--
ALTER TABLE `penerbits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengarangs`
--
ALTER TABLE `pengarangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pinjams`
--
ALTER TABLE `pinjams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `raks`
--
ALTER TABLE `raks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
