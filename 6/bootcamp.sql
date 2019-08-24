-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2019 pada 07.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cities`
--

CREATE TABLE `cities` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Jakarta'),
(2, 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hobbies`
--

INSERT INTO `hobbies` (`id`, `name`) VALUES
(1, 'Renang'),
(2, 'Mancing'),
(3, 'Game'),
(4, 'Gibah'),
(5, 'Programming');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth_id` int(10) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `addres` text NOT NULL,
  `last_educaton` enum('SD','SMP','SMA','D1','D2','D3','S1','S2','S3') NOT NULL,
  `religion` enum('Islam','Kristen','Katholik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `full_name`, `date_of_birth`, `place_of_birth_id`, `phone_number`, `addres`, `last_educaton`, `religion`) VALUES
(1, 'Lucinta Luna', '1992-07-12', 1, '081111', 'Cikupa', 'S1', 'Kristen'),
(2, 'Satrio', '2001-07-21', 1, '082222', 'Citarum', 'SMA', 'Islam'),
(3, 'Syahrini', '1988-01-01', 2, ' 083333', 'Ciwalk', 'S1', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_hobbies`
--

CREATE TABLE `users_hobbies` (
  `biodata_id` int(10) NOT NULL,
  `hobby_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_hobbies`
--

INSERT INTO `users_hobbies` (`biodata_id`, `hobby_id`) VALUES
(1, 1),
(1, 3),
(2, 4),
(2, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_of_birth_id` (`place_of_birth_id`);

--
-- Indeks untuk tabel `users_hobbies`
--
ALTER TABLE `users_hobbies`
  ADD KEY `biodata_id` (`biodata_id`),
  ADD KEY `hobby_id` (`hobby_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`place_of_birth_id`) REFERENCES `cities` (`id`);

--
-- Ketidakleluasaan untuk tabel `users_hobbies`
--
ALTER TABLE `users_hobbies`
  ADD CONSTRAINT `users_hobbies_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_hobbies_ibfk_2` FOREIGN KEY (`hobby_id`) REFERENCES `hobbies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
