-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 12:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ult_kemdikbud`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `nomor_ktp` varchar(30) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `redaksi_laporan` text NOT NULL,
  `status_laporan` enum('ditanggapi','belum ditanggapi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `alamat_email`, `nama_pelapor`, `alamat_rumah`, `nomor_telepon`, `nomor_ktp`, `profesi`, `provinsi`, `kabupaten`, `kecamatan`, `judul_laporan`, `redaksi_laporan`, `status_laporan`) VALUES
(1, 'lutfi1700018113@webmail.uad.ac.id', 'lutfi', 'jogja', '342423', '324324', 'mahasiswa', 'diy', 'jogja', 'umbulharjo', 'susah', 'dfsfdsd', 'ditanggapi'),
(2, 'lutfipurba122333@gmail.com', 'lutfi', '546456', '464', '546456', 'mahasiswa', 'diy', 'jogja', 'umbulharjo', 'susah', '56454hhgfgfghf', 'belum ditanggapi'),
(3, 'lutfi1700018113@webmail.uad.ac.id', '12', 'jogja', '123123', '32121', 'mahasiswa', 'diy', 'jogja', 'umbulharjo', 'susah', 'fdsfsddfs', 'ditanggapi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` enum('admin','pelapor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
