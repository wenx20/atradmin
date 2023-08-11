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
-- Table structure for table `ref_pstp`
--

CREATE TABLE `ref_pstp` (
  `id` int(11) NOT NULL,
  `kd_pstp` varchar(10) NOT NULL,
  `nm_lwarkah` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_pstp`
--

INSERT INTO `ref_pstp` (`id`, `kd_pstp`, `nm_lwarkah`, `keterangan`) VALUES
(1, 'PSTP001', 'Surat Pengantar dari Kanwil', ''),
(2, 'PSTP002', 'Surat Permohonan Pengukuran dari Perusahaan', ''),
(3, 'PSTP003', 'Copy Sertifikat sesuau dengan Aslinya', ''),
(4, 'PSTB004', 'Gambar Situasi/PGSK atau Peta Lampiran Surat Ukur', ''),
(5, 'PSTP005', 'Izin Pelepasan Kawasan Hutan', ''),
(6, 'PSTP006', 'Peta Pelepasan Kawasan Hutan', ''),
(7, 'PSTP007', 'Peta Permohonan Pengukuran *)', ''),
(8, 'PSTP008', 'Peta Telaah permohonan dari Kantor Wilayah Badan Pertanahan Nasional *)', ''),
(9, 'PSTP009', 'Akta pendirian perusahaan', ''),
(10, 'PSTP010', 'Fotocopy KTP Pemilik/Direktur Perusahaan', ''),
(11, 'PSTP011', 'Surat Pernyataan Tidak Sengketa', ''),
(12, 'PSTP012', 'Surat Pernyataan Pemasangan Tanda Batas dan Persetujuan Pemilik Yang Berbatasan', ''),
(13, 'PSTP013', 'Daftar Koordinat Tugu Batas Yang dipasang *)', ''),
(14, 'PSTP014', 'Izin Usaha Perkebunan Yang Masih Berlaku', ''),
(15, 'PSTP015', 'Surat Pernyataan Penguasaan Fisik Bidang Tanah', ''),
(16, 'PSTP016', 'SKPT', ''),
(17, 'PSTP017', 'Nomor Telepon dan email Pemohon', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_pstp`
--
ALTER TABLE `ref_pstp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_pstbaru` (`kd_pstp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_pstp`
--
ALTER TABLE `ref_pstp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
