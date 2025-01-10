-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2025 pada 17.07
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
-- Database: `new_user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(39, 'Dreadout 2', 'DreadOut 2 sendiri merupakan kelanjutan dari prekuelnya, Dreadout. Di platform Steam, game lokal ini dirilis pada bulan Februari 2020 yang lalu.', '20250110144600.jpg', '2025-01-10 14:58:19', 'admin'),
(40, 'Coral Island', 'Coral Island adalah simulasi kehidupan bertani tahun 2023 yang dikembangkan oleh Stairway Games dan diterbitkan oleh Humble Games. Gameplaynya berlangsung di pulau tropis dan berisi fitur yang mirip dengan sim pertanian lainnya seperti Stardew Valley.', '20250110144544.jpg', '2025-01-10 15:00:48', 'admin'),
(41, 'A Space For The Unbound', 'Permainan video A Space for the Unbound dibentuk dalam bentuk petualangan dengan teka-teki naratif. Pemain dapat berbicara dengan karakter lain serta mengambil benda lalu menggunakan benda tersebut untuk melanjutkan cerita permainan.', '20250110144512.jpg', '2025-01-10 15:02:20', 'admin'),
(42, 'Lokapala', 'Lokapala adalah game esports pertama dari Indonesia yang terinspirasi dari budaya daerah untuk memperkenalkan pahlawan sejarah dan mitologi tanpa tanda jasa. Kisah Lokapala terjadi di akhir dunia, ketika alam haus, yang terbentuk, dan yang tak berbentuk digabungkan menjadi satu.', '20250110144425.jpg', '2025-01-10 15:03:07', 'admin'),
(43, 'Coffee Talk ', 'Coffee Talk adalah permainan tentang mendengarkan masalah orang dan membantu mereka dengan menyajikan minuman hangat dari bahan-bahan yang Anda miliki.', '20250110144647.jpg', '2025-01-10 14:55:51', 'admin'),
(44, 'Fantasy Town', 'Fantasy Town adalah game kasual dengan misi untuk menginvestasikan sumber daya dengan bijak dan membangun kota yang megah.\r\n', '20250110144723.jpg', '2025-01-10 14:54:21', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama` varchar(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `tanggal`, `gambar`) VALUES
(4, 'Lokapala', '2025-01-10', '20250110144850.jpg'),
(16, 'A Space For', '2025-01-10', '20250110144917.jpg'),
(17, 'Coral Islan', '2025-01-10', '20250110145013.jpg'),
(18, 'Dreadout 2', '2025-01-10', '20250110145043.jpg'),
(19, 'Coffe Talk', '2025-01-10', '20250110145105.jpg'),
(20, 'Fantasy Tow', '2025-01-10', '20250110145130.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20250110151027.jpg'),
(2, 'admin 2', 'c1f13b81cc44be78687906d2d6612ae3', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
