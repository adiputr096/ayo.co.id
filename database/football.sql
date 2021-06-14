-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 11.20
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pertandingan`
--

CREATE TABLE `hasil_pertandingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skor_akhir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemain_cetak_gol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_gol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil_pertandingan`
--

INSERT INTO `hasil_pertandingan` (`id`, `skor_akhir`, `pemain_cetak_gol`, `waktu_gol`, `created_at`, `updated_at`) VALUES
(2, '10-0', 'Adi', '50:00', NULL, '2021-06-14 01:23:40'),
(3, '7-0', 'Arteta', '72:00', NULL, NULL),
(4, '3-0', 'David Luis', '23:00', NULL, NULL),
(5, '4-0', 'Willian', '11:00', NULL, NULL),
(6, '1-3', 'Son', '34:00', NULL, NULL),
(7, '2-0', 'Pogba', '88:00', NULL, NULL),
(8, '1-0', 'Raul Gonzales', '15:00', NULL, NULL),
(9, '1-0', 'Van Persie', '05:00', NULL, NULL),
(10, '5-0', 'Ronaldo', '03:00', NULL, NULL),
(11, '2-1', 'Messi', '07:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pertandingan`
--

CREATE TABLE `jadwal_pertandingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pertandingan` date NOT NULL,
  `waktu_pertandingan` time NOT NULL,
  `tim_tuan_rumah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim_tamu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_pertandingan`
--

INSERT INTO `jadwal_pertandingan` (`id`, `tanggal_pertandingan`, `waktu_pertandingan`, `tim_tuan_rumah`, `tim_tamu`, `created_at`, `updated_at`) VALUES
(1, '2020-10-20', '50:20:10', 'Arsenal FC', 'London FC', '2021-06-13 22:43:35', '2021-06-14 00:47:26'),
(3, '2019-01-01', '50:20:20', 'Sriwijaya FC', 'Arema FC', '2021-06-14 01:31:07', '2021-06-14 01:31:07'),
(4, '2019-02-02', '50:20:10', 'Persib Bandung', 'Persija Jakarta', '2021-06-14 01:31:48', '2021-06-14 01:31:48'),
(5, '2019-03-03', '50:20:30', 'Aston Villa', 'Everton', '2021-06-14 01:32:58', '2021-06-14 01:32:58'),
(6, '2019-04-04', '01:20:40', 'Persipura', 'Persebaya', '2021-06-14 01:33:46', '2021-06-14 01:33:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_12_064453_create_tim_table', 1),
(5, '2021_06_14_030950_create_pemain_table', 2),
(6, '2021_06_14_032058_create_jadwal_pertandingan_table', 2),
(7, '2021_06_14_032229_create_hasil_pertandingan_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemain`
--

CREATE TABLE `pemain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_badan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_pemain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_punggung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemain`
--

INSERT INTO `pemain` (`id`, `nama_pemain`, `tinggi_badan`, `berat_badan`, `posisi_pemain`, `nomor_punggung`, `created_at`, `updated_at`) VALUES
(3, 'Gading', '180 cm', '70 kg', 'Kiper', '1', '2021-06-13 23:12:05', '2021-06-13 23:12:05'),
(4, 'Adi', '175 cm', '67 kg', 'Striker', '10', '2021-06-14 01:35:01', '2021-06-14 01:35:01'),
(5, 'Al Varo', '165 cm', '55 kg', 'Bek Kanan', '3', '2021-06-14 01:35:44', '2021-06-14 01:35:44'),
(6, 'Duden', '185 cm', '72 kg', 'Bek Tengah', '5', '2021-06-14 01:36:15', '2021-06-14 01:36:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_tim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_berdiri_tim` date NOT NULL,
  `alamat_tim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id`, `nama_tim`, `logo_tim`, `tahun_berdiri_tim`, `alamat_tim`, `kota_tim`, `created_at`, `updated_at`) VALUES
(6, 'Arema FC', 'Adi saputro.jpg', '1996-09-03', 'Malang, Jawa Timur', 'Malang', '2021-06-12 08:19:58', '2021-06-12 08:19:58'),
(7, 'Persija', 'Adi saputro.jpg', '1986-01-02', 'DKI Jakarta', 'Jakarta', '2021-06-12 08:21:00', '2021-06-12 08:21:00'),
(8, 'Persib', 'Adi saputro.jpg', '1987-05-06', 'Bandung Jawa Barat', 'Bandung', '2021-06-12 08:21:48', '2021-06-12 08:21:48'),
(9, 'Barito Putera', 'C:\\xampp\\tmp\\php242D.tmp', '1968-09-10', 'Kalimantan Timur', 'Kalimantan', '2021-06-13 20:01:02', '2021-06-13 20:01:02'),
(11, 'Capung FC', 'C:\\xampp\\tmp\\php82DB.tmp', '1996-09-03', 'Tangerang Selatan', 'Pamulang', '2021-06-14 02:10:39', '2021-06-14 02:10:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_pertandingan`
--
ALTER TABLE `jadwal_pertandingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pertandingan`
--
ALTER TABLE `jadwal_pertandingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
