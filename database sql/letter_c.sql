-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2024 pada 15.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letter_c`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'danendra.saskara@gmail.com', 1, '2024-06-19 05:12:01', 1),
(2, '::1', 'danendra.saskara@gmail.com', 1, '2024-06-19 05:21:39', 1),
(3, '::1', 'danendra.saskara@gmail.com', NULL, '2024-06-19 05:39:23', 0),
(4, '::1', 'admin', NULL, '2024-06-19 05:44:22', 0),
(5, '::1', 'danendra.saskara@gmail.com', 2, '2024-06-19 05:44:29', 1),
(6, '::1', 'icikiwir@gmail.com', 3, '2024-06-19 05:49:18', 1),
(7, '::1', 'icikiwir@gmail.com', 3, '2024-06-19 05:50:22', 1),
(8, '::1', 'icikiwir@gmail.com', 3, '2024-06-19 05:59:45', 1),
(9, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 08:04:21', 1),
(10, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 08:05:17', 1),
(11, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 08:05:53', 1),
(12, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 08:14:29', 1),
(13, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 09:13:19', 1),
(14, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 12:32:43', 1),
(15, '::1', 'admin', NULL, '2024-06-19 14:27:37', 0),
(16, '::1', 'admin1234', NULL, '2024-06-19 14:27:54', 0),
(17, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 14:28:09', 1),
(18, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 16:54:56', 1),
(19, '::1', 'admin1234', NULL, '2024-06-19 17:10:25', 0),
(20, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 17:10:36', 1),
(21, '::1', 'ucup123@gmail.com', 9, '2024-06-19 17:11:37', 1),
(22, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 17:17:14', 1),
(23, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 17:19:01', 1),
(24, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 17:45:27', 1),
(25, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-19 18:13:13', 1),
(26, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 00:11:57', 1),
(27, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 06:06:11', 1),
(28, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 13:11:57', 1),
(29, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 13:45:44', 1),
(30, '::1', 'danendra.saskara@gmail.com', 4, '2024-06-20 14:10:36', 1),
(31, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 14:19:07', 1),
(32, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 14:32:54', 1),
(33, '::1', 'rizkyb4141@gmail.com', 7, '2024-06-20 15:08:15', 1),
(34, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-20 15:59:30', 1),
(35, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 01:10:53', 1),
(36, '::1', 'rizkyb4141@gmail.com', 13, '2024-06-21 01:31:11', 1),
(37, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 01:45:57', 1),
(38, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 01:58:32', 1),
(39, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 02:24:15', 1),
(40, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 03:47:00', 1),
(41, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 04:30:08', 1),
(42, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 06:35:14', 1),
(43, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 06:41:34', 1),
(44, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 07:01:13', 1),
(45, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 07:16:32', 1),
(46, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 07:27:35', 1),
(47, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 08:48:42', 1),
(48, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-21 11:02:54', 1),
(49, '::1', 'danendra.saskara@gmail.com', 12, '2024-06-22 01:29:46', 1),
(50, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-02 10:08:18', 1),
(51, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-02 10:11:38', 1),
(52, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-02 10:11:48', 1),
(53, '::1', 'admin', NULL, '2024-07-02 10:14:22', 0),
(54, '::1', 'admin1', NULL, '2024-07-02 10:14:34', 0),
(55, '::1', 'rizkyb4141@gmail.com', NULL, '2024-07-02 10:14:42', 0),
(56, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-02 10:18:31', 1),
(57, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-11 04:35:46', 1),
(58, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-11 04:37:07', 1),
(59, '::1', 'admin', NULL, '2024-07-11 04:42:20', 0),
(60, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-11 04:42:31', 1),
(61, '::1', 'admin', NULL, '2024-07-11 04:43:09', 0),
(62, '::1', 'salah', NULL, '2024-07-11 04:43:47', 0),
(63, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-11 04:44:10', 1),
(64, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-11 05:15:14', 1),
(65, '::1', 'danendra.saskara@gmail.com', 12, '2024-07-12 03:01:08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'rizkyb4141@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '512b2f2ccc2507bb7eb206bb66884146', '2024-06-19 08:00:48'),
(2, 'rizkyb4141@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'bd6b76bca8cdc5f8242d9158bbd28699', '2024-06-19 17:09:22'),
(3, 'rizkyb4141@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-20 14:09:43'),
(4, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-20 14:10:05'),
(5, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-21 01:27:59'),
(6, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-21 01:28:10'),
(7, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-21 01:28:40'),
(8, 'rizkyb4141@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-21 01:28:59'),
(9, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-21 01:29:14'),
(10, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'b593436ef837c2bb96a52760edc51bcc', '2024-06-21 01:29:34'),
(11, 'rizkyb4141@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '5a3abc1816dbe101c5e2c9592a66501a', '2024-06-21 01:30:54'),
(12, 'rizkyb4141@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'a184b5ab231d8e75f4824933db17bc16', '2024-06-21 07:28:54'),
(13, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '', '2024-07-02 10:15:15'),
(14, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '', '2024-07-02 10:15:23'),
(15, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '', '2024-07-02 10:15:28'),
(16, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'e13da30c5e39f259b88bf4d23a61b03c', '2024-07-11 04:40:34'),
(17, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'e13da30c5e39f259b88bf4d23a61b03c', '2024-07-11 04:41:01'),
(18, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'e13da30c5e39f259b88bf4d23a61b03c', '2024-07-11 04:41:24'),
(19, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'e13da30c5e39f259b88bf4d23a61b03c', '2024-07-11 04:41:47'),
(20, 'danendra.saskara@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'e13da30c5e39f259b88bf4d23a61b03c', '2024-07-11 04:41:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `batas_bidang`
--

CREATE TABLE `batas_bidang` (
  `id_batas` int(11) NOT NULL,
  `id_bidangC` int(20) NOT NULL,
  `utara` varchar(100) NOT NULL,
  `timur` varchar(100) NOT NULL,
  `selatan` varchar(100) NOT NULL,
  `barat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `batas_bidang`
--

INSERT INTO `batas_bidang` (`id_batas`, `id_bidangC`, `utara`, `timur`, `selatan`, `barat`) VALUES
(10, 24, 'jalan kabupaten', 'Kantor', 'Gereja', 'didin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_tanah`
--

CREATE TABLE `bidang_tanah` (
  `id_bidangC` int(20) NOT NULL,
  `id_dataC` int(20) NOT NULL,
  `persil` varchar(100) NOT NULL,
  `kelas_desa` varchar(100) NOT NULL,
  `luas` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bidang_tanah`
--

INSERT INTO `bidang_tanah` (`id_bidangC`, `id_dataC`, `persil`, `kelas_desa`, `luas`, `klasifikasi`, `bukti`) VALUES
(23, 17, '206', 'DII', '2000', 'Sawah', '.'),
(24, 18, '805', 'DII', '1000', 'Sawah', 'dede.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_induk`
--

CREATE TABLE `data_induk` (
  `id_dataC` int(20) NOT NULL,
  `no_letter_c` varchar(50) NOT NULL,
  `no_pemilik_baru` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `filescan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_induk`
--

INSERT INTO `data_induk` (`id_dataC`, `no_letter_c`, `no_pemilik_baru`, `nama`, `filescan`, `keterangan`) VALUES
(17, '3216.5065.3232156.20.1', ' 206', ' H ENGKOS KOMARUDIN', '1718959791_cceca361806505918a41.jpg', '-'),
(18, '3216.5065.3232156.20.1', ' 3216062307030013', ' Dede Ari', '1720673408_816378bff7c30db7b99c.jpg', 'Tanah Milik Dede');

-- --------------------------------------------------------

--
-- Struktur dari tabel `letak_bidang`
--

CREATE TABLE `letak_bidang` (
  `id_letak` int(11) NOT NULL,
  `id_bidangC` int(20) NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `blok_tanah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `letak_bidang`
--

INSERT INTO `letak_bidang` (`id_letak`, `id_bidangC`, `dusun`, `rt`, `rw`, `alamat`, `blok_tanah`) VALUES
(23, 23, 'Cikijing', '02', '01', 'Jalan Mangunarga', 'Blok B2'),
(24, 24, 'Cikijing', '02', '01', 'Jl Setiadarma 2 No 07', 'Santaka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(21, '2024-06-11-102505', 'App\\Database\\Migrations\\DataInduk', 'default', 'App', 1718616096, 1),
(22, '2024-06-12-145345', 'App\\Database\\Migrations\\Bidangtanah', 'default', 'App', 1718616096, 1),
(23, '2024-06-13-033632', 'App\\Database\\Migrations\\Sppt', 'default', 'App', 1718616096, 1),
(24, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1718754252, 2),
(25, '2024-06-20-062652', 'App\\Database\\Migrations\\LetakBidang', 'default', 'App', 1718865751, 3),
(26, '2024-06-20-104830', 'App\\Database\\Migrations\\BatasBidang', 'default', 'App', 1718880761, 4),
(27, '2024-06-20-124626', 'App\\Database\\Migrations\\Riwayatbidang', 'default', 'App', 1718887877, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_bidang`
--

CREATE TABLE `riwayat_bidang` (
  `id_riwayat` int(10) NOT NULL,
  `id_bidangC` int(20) NOT NULL,
  `riwayat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `riwayat_bidang`
--

INSERT INTO `riwayat_bidang` (`id_riwayat`, `id_bidangC`, `riwayat`) VALUES
(10, 24, 'Pada Tahun 1965 Terjadi Perpindahan Tanah Milik Dede ke Aidit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppt`
--

CREATE TABLE `sppt` (
  `id_sppt` int(10) NOT NULL,
  `id_bidangC` int(20) NOT NULL,
  `sppt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sppt`
--

INSERT INTO `sppt` (`id_sppt`, `id_bidangC`, `sppt`) VALUES
(15, 23, '23072323'),
(16, 24, '23072323');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'danendra.saskara@gmail.com', 'admin', '$2y$10$wbX4ecr4UsvWh2881VuDquA9xyeMSj1IWoI0gaj1ti6A1QvsgSLFa', NULL, '2024-07-11 04:41:58', NULL, NULL, NULL, NULL, 1, 0, '2024-06-20 15:58:44', '2024-07-11 04:41:58', NULL),
(14, 'rizkyb4141@gmail.com', 'Danendra', '$2y$10$tjFpfP4d8h84Wd6F6ehjgu3Ixju38jM9WCnJvpEpI01sxBVWl1L9K', '7c80c1b0a0b256bc7def7d43df62f3df', '2024-06-21 07:28:54', '2024-07-11 05:35:33', NULL, NULL, NULL, 1, 0, '2024-06-21 07:28:00', '2024-07-11 04:35:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `batas_bidang`
--
ALTER TABLE `batas_bidang`
  ADD PRIMARY KEY (`id_batas`),
  ADD KEY `id_bidangC` (`id_bidangC`);

--
-- Indeks untuk tabel `bidang_tanah`
--
ALTER TABLE `bidang_tanah`
  ADD PRIMARY KEY (`id_bidangC`),
  ADD KEY `id_dataC` (`id_dataC`);

--
-- Indeks untuk tabel `data_induk`
--
ALTER TABLE `data_induk`
  ADD PRIMARY KEY (`id_dataC`);

--
-- Indeks untuk tabel `letak_bidang`
--
ALTER TABLE `letak_bidang`
  ADD PRIMARY KEY (`id_letak`),
  ADD KEY `id_bidangC` (`id_bidangC`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_bidang`
--
ALTER TABLE `riwayat_bidang`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_bidangC` (`id_bidangC`);

--
-- Indeks untuk tabel `sppt`
--
ALTER TABLE `sppt`
  ADD PRIMARY KEY (`id_sppt`),
  ADD KEY `id_bidangC` (`id_bidangC`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `batas_bidang`
--
ALTER TABLE `batas_bidang`
  MODIFY `id_batas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `bidang_tanah`
--
ALTER TABLE `bidang_tanah`
  MODIFY `id_bidangC` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `data_induk`
--
ALTER TABLE `data_induk`
  MODIFY `id_dataC` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `letak_bidang`
--
ALTER TABLE `letak_bidang`
  MODIFY `id_letak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `riwayat_bidang`
--
ALTER TABLE `riwayat_bidang`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sppt`
--
ALTER TABLE `sppt`
  MODIFY `id_sppt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `batas_bidang`
--
ALTER TABLE `batas_bidang`
  ADD CONSTRAINT `batas_bidang_ibfk_1` FOREIGN KEY (`id_bidangC`) REFERENCES `bidang_tanah` (`id_bidangC`);

--
-- Ketidakleluasaan untuk tabel `bidang_tanah`
--
ALTER TABLE `bidang_tanah`
  ADD CONSTRAINT `bidang_tanah_ibfk_1` FOREIGN KEY (`id_dataC`) REFERENCES `data_induk` (`id_dataC`);

--
-- Ketidakleluasaan untuk tabel `letak_bidang`
--
ALTER TABLE `letak_bidang`
  ADD CONSTRAINT `letak_bidang_ibfk_1` FOREIGN KEY (`id_bidangC`) REFERENCES `bidang_tanah` (`id_bidangC`);

--
-- Ketidakleluasaan untuk tabel `riwayat_bidang`
--
ALTER TABLE `riwayat_bidang`
  ADD CONSTRAINT `riwayat_bidang_ibfk_1` FOREIGN KEY (`id_bidangC`) REFERENCES `bidang_tanah` (`id_bidangC`);

--
-- Ketidakleluasaan untuk tabel `sppt`
--
ALTER TABLE `sppt`
  ADD CONSTRAINT `sppt_ibfk_1` FOREIGN KEY (`id_bidangC`) REFERENCES `bidang_tanah` (`id_bidangC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
