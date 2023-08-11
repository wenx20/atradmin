-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 12:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_pstb`
--

CREATE TABLE `dat_pstb` (
  `id` int(12) NOT NULL,
  `no_permohonan` varchar(21) NOT NULL,
  `no_pengantar` varchar(21) NOT NULL,
  `jns_permohonan` varchar(50) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `luas_permohonan` float NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `dati2` varchar(50) NOT NULL,
  `pstb001` varchar(1) NOT NULL,
  `pstb002` varchar(1) NOT NULL,
  `pstb003` varchar(1) NOT NULL,
  `pstb004` varchar(1) NOT NULL,
  `pstb005` varchar(1) NOT NULL,
  `pstb006` varchar(1) NOT NULL,
  `pstb007` varchar(1) NOT NULL,
  `pstb008` varchar(1) NOT NULL,
  `pstb009` varchar(1) NOT NULL,
  `pstb010` varchar(1) NOT NULL,
  `pstb011` varchar(1) NOT NULL,
  `pstb012` varchar(1) NOT NULL,
  `pstb013` varchar(1) NOT NULL,
  `pstb014` varchar(1) NOT NULL,
  `pstb015` varchar(1) NOT NULL,
  `pstb016` varchar(1) NOT NULL,
  `pstb017` varchar(1) NOT NULL,
  `pstb018` varchar(1) NOT NULL,
  `softcopy` varchar(1) NOT NULL,
  `scfilename` varchar(255) NOT NULL,
  `status_telaah` varchar(1) NOT NULL,
  `penelaah` varchar(50) NOT NULL,
  `status_berkas` varchar(1) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_pstb`
--
ALTER TABLE `dat_pstb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_permohonan` (`no_permohonan`),
  ADD UNIQUE KEY `no_pengantar` (`no_pengantar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_pstb`
--
ALTER TABLE `dat_pstb`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
