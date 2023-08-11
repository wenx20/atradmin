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
-- Table structure for table `ref_pstb`
--

CREATE TABLE `ref_pstb` (
  `id` int(12) NOT NULL,
  `kd_pstb` varchar(10) NOT NULL,
  `nm_lwarkah` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_pstb`
--

INSERT INTO `ref_pstb` (`id`, `kd_pstb`, `nm_lwarkah`, `keterangan`) VALUES
(1, 'PSTB001', 'Surat Pengantar dari Kanwil', ''),
(2, 'PSTB002', 'Surat Permohonan Pengukuran dari Perusahaan', ''),
(3, 'PSTB003', 'Ijin Lokasi atau KKPR yang masih berlaku', ''),
(4, 'PSTB004', 'Peta Lampiran Ijin Lokasi atau KKPR', ''),
(5, 'PSTB005', 'Izin pelepasan Kawasan Hutan', ''),
(6, 'PSTB006', 'Peta Pelepasan Kawasan Hutan', ''),
(7, 'PSTB007', 'Peta permohonan Pengukuran*)', ''),
(8, 'PSTB008', 'Peta Telaah permohonan dari Kantor Wilayah Badan Pertanahan Nasional*)', ''),
(9, 'PSTB009', 'Akta pendirian perusahaan', ''),
(10, 'PSTB010', 'Fotocopy KTP Pemilik/Direktur Perusahaan', ''),
(11, 'PSTB011', 'Surat Pernyataan Tidak Sengketa', ''),
(12, 'PSTB012', 'Surat Pernyataan Pemasangan Tanda Batas dan Persetujuan Pemilik Yang Berbatasan', ''),
(13, 'PSTB013', 'Daftar Koordinat Tugu Batas Yang dipasang*)', ''),
(14, 'PSTB014', 'Izin Usaha Perkebunan Yang Masih Berlaku', ''),
(15, 'PSTB015', 'Rekapitulasi Perolehan lahan yang telah disahkan oleh pemerintah desa dan bermaterai', ''),
(16, 'PSTB016', 'Peta Perolehan Lahan Sesuai Izin Lokasi*)', ''),
(17, 'PSTB017', 'Surat Pernyataan Penguasan Fisik Bidang Tanah', ''),
(18, 'PSTB018', 'Nomor Telepon dan email Pemohon', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_pstb`
--
ALTER TABLE `ref_pstb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_pstb` (`kd_pstb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_pstb`
--
ALTER TABLE `ref_pstb`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
