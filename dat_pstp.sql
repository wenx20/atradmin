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
-- Table structure for table `dat_pstp`
--

CREATE TABLE `dat_pstp` (
  `id` int(12) NOT NULL,
  `no_permohonan` varchar(21) NOT NULL,
  `no_pengantar` varchar(21) NOT NULL,
  `jns_permohonan` varchar(50) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `luas_permohonan` float NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `dati2` varchar(50) NOT NULL,
  `pstp001` varchar(1) NOT NULL,
  `pstp002` varchar(1) NOT NULL,
  `pstp003` varchar(1) NOT NULL,
  `pstp004` varchar(1) NOT NULL,
  `pstp005` varchar(1) NOT NULL,
  `pstp006` varchar(1) NOT NULL,
  `pstp007` varchar(1) NOT NULL,
  `pstp008` varchar(1) NOT NULL,
  `pstp009` varchar(1) NOT NULL,
  `pstp010` varchar(1) NOT NULL,
  `pstp011` varchar(1) NOT NULL,
  `pstp012` varchar(1) NOT NULL,
  `pstp013` varchar(1) NOT NULL,
  `pstp014` varchar(1) NOT NULL,
  `pstp015` varchar(1) NOT NULL,
  `pstp016` varchar(1) NOT NULL,
  `pstp017` varchar(1) NOT NULL,
  `status_telaah` varchar(1) NOT NULL,
  `penelaah` varchar(50) NOT NULL,
  `status_berkas` varchar(1) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_pstp`
--
ALTER TABLE `dat_pstp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_permohonan` (`no_permohonan`),
  ADD UNIQUE KEY `no_pengantar` (`no_pengantar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_pstp`
--
ALTER TABLE `dat_pstp`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
