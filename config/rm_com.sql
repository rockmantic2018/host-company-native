-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2018 pada 09.16
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rm_com`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_domain`
--

CREATE TABLE `tb_domain` (
  `id_domain` int(25) NOT NULL,
  `nama_domain` char(15) DEFAULT NULL,
  `harga` varchar(150) DEFAULT NULL,
  `stok` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_domain`
--

INSERT INTO `tb_domain` (`id_domain`, `nama_domain`, `harga`, `stok`) VALUES
(1, 'XYZ', 'Rp 120.000', 'SALE'),
(2, 'COM', 'Rp 120.000', 'SALE'),
(4, 'MY.ID', 'Rp 90.000', 'SALE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hosting`
--

CREATE TABLE `tb_hosting` (
  `id_hosting` int(15) NOT NULL,
  `plan` varchar(225) DEFAULT NULL,
  `disk_space` int(4) DEFAULT NULL,
  `subdomain` char(25) DEFAULT NULL,
  `transfer` char(5) DEFAULT NULL,
  `db` int(2) DEFAULT NULL,
  `harga` varchar(150) DEFAULT NULL,
  `ktr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hosting`
--

INSERT INTO `tb_hosting` (`id_hosting`, `plan`, `disk_space`, `subdomain`, `transfer`, `db`, `harga`, `ktr`) VALUES
(1, 'basic', 2, '1', '2', 1, '550.000', ''),
(2, 'normal', 4, '2', '4', 2, '550.000', ''),
(3, 'bisnis', 6, '5', '6', 5, '550.000', ''),
(5, 'pro', 10, '10', '10', 10, '900.000', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id_pengunjung` int(99) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id_pengunjung`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '::1', '2018-02-28', 17, '1519805440'),
(2, '::2', '2018-02-24', 1, '1519486701'),
(3, '::3', '2018-02-24', 1, '1519486701'),
(4, '::1', '2018-02-28', 10, '1519805440');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testi`
--

CREATE TABLE `tb_testi` (
  `id_testi` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_testi`
--

INSERT INTO `tb_testi` (`id_testi`, `nama`, `isi`) VALUES
(1, 'Farhan Sutama', 'Ini adalah tempat hosting yang cocok bagi mereka yang ingin keamanan dan sistem lebih, rekomended'),
(2, 'tatang', 'ini adasdasdsadasdasfasf asdas asfas fas fas fasd asd asf asfasda sd asfasdada fasfas ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` char(1) NOT NULL,
  `foto` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'a', 'admin.jpg'),
(2, 'Operator 1', 'user1', 'ee11cbb19052e40b07aac0ca060c23ee', 'a', 'user.jpg'),
(3, 'Riki Mahendra', 'riki', '21232f297a57a5a743894a0e4a801fc3', 'a', 'user.jpg'),
(4, 'User 2', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'a', 'user.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_web`
--

CREATE TABLE `tb_web` (
  `id_web` int(1) NOT NULL,
  `title_web` varchar(200) NOT NULL,
  `hp` char(12) DEFAULT NULL,
  `email` varchar(123) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_web`
--

INSERT INTO `tb_web` (`id_web`, `title_web`, `hp`, `email`, `alamat`, `about`) VALUES
(1, 'Web RM HOST | Portfolio RM Development', '-', 'official.rmdevelopment@gmail.com', 'Jl. Setempat', '<p>Ini adalah website profile company one page responsive developed by RM Development. Website ini berfungsi untuk portfolio dan juga demo bagi klien yang ingin berlangganan aplikasi berbasis web.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_domain`
--
ALTER TABLE `tb_domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indexes for table `tb_hosting`
--
ALTER TABLE `tb_hosting`
  ADD PRIMARY KEY (`id_hosting`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `tb_testi`
--
ALTER TABLE `tb_testi`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_web`
--
ALTER TABLE `tb_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_domain`
--
ALTER TABLE `tb_domain`
  MODIFY `id_domain` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_hosting`
--
ALTER TABLE `tb_hosting`
  MODIFY `id_hosting` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id_pengunjung` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_testi`
--
ALTER TABLE `tb_testi`
  MODIFY `id_testi` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_web`
--
ALTER TABLE `tb_web`
  MODIFY `id_web` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
