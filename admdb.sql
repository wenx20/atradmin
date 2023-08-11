-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 03:37 PM
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
-- Table structure for table `dat_login`
--

CREATE TABLE `dat_login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nip` varchar(21) NOT NULL,
  `leveluser` varchar(30) NOT NULL DEFAULT 'user',
  `blokir` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dat_login`
--

INSERT INTO `dat_login` (`id`, `username`, `password`, `nip`, `leveluser`, `blokir`) VALUES
(1, 'admin', '$2y$10$TVNIdjTGIw8LjeG8uv36zu35XeqMymBEKyCmUBhTf4JXq0qqFZC0G', '00000000 000000 1 001', 'admin', 'N'),
(2, 'pst', '$2y$10$TVNIdjTGIw8LjeG8uv36zu35XeqMymBEKyCmUBhTf4JXq0qqFZC0G', '', 'user', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `dat_pegawai`
--

CREATE TABLE `dat_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(21) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dat_pegawai`
--

INSERT INTO `dat_pegawai` (`id`, `nama`, `nip`, `golongan`, `ruang`) VALUES
(1, 'Ir. Virgo Eresta Jaya, M. Eng. Sc.', '19690916 199303 1 001', '', 'Pembina Utama Madya (IV/d)'),
(2, 'Ir. Fitriyani Hasibuan, Dipl.Ph., M.M.', '19670113 199303 2 002', '', 'Pembina Tingkat I (IV/b)'),
(3, 'Ir. Yuli Mardiyono, M. Eng. Sc.', '19640718 199203 1 010', 'IV', 'Pembina Utama Muda (IV/c)'),
(4, 'Ir. Rochmat Darmawan', '19660219 199303 1 003', 'IV', 'Pembina Tingkat I (IV/b)'),
(5, 'Budi Kristiyana, S.SiT., M.H.', '19740310 199403 1 004', 'IV', 'Pembina Tingkat I (IV/b)'),
(6, 'Aulia Latif, S.T., M.S.I.Sc.', '19840412 200903 1 005', 'III', 'Penata Tk. I (III/d)'),
(7, 'Anis Riyanto, S. ST.', '19810729 200212 1 002', 'III', 'Penata Tk. I (III/d)'),
(8, 'Sheilla Ayu Ramadhani, S.T., M.Sc.', '19880414 201101 2 008', 'III', 'Penata (III/c)'),
(9, 'Pandapotan Sidabutar, S.SiT.', '19700812 199103 1 005', 'IV', 'Pembina Tingkat I (IV/b)'),
(10, 'Kusbiantoro, A.Ptnh., M.H.', '19661115 198603 1 002', 'IV', 'Pembina Tingkat I (IV/b)'),
(11, 'Ridwan Saiman, S.SiT., M.H.', '19730710 199303 1 001', 'IV', 'Pembina Tingkat I (IV/b)'),
(12, 'Tagor Harison, A.Ptnh', '19650206 198603 1 003', 'IV', 'Pembina (IV/a)'),
(13, 'Indra R. Hutabarat, S.T., M.Sc.', '19850516 200912 1 002', 'III', 'Penata Tk. I (III/d)'),
(14, 'Nugroho Bayu Saputro, S.T.', '19820415 200912 1 004', 'III', 'Penata Tk. I (III/d)'),
(15, 'Risky Andes Syaputra, S.ST.', '19870906 200604 1 002', 'III', 'Penata Tk. I (III/d)'),
(16, 'Retno Pristiwanto Ponco Widoatmoko, A. Md.', '19820901 200804 1 004', 'III', 'Penata (III/c)'),
(17, 'Eko Budi Febriyanto, S.ST.', '19830204 200312 1 008', 'III', 'Penata (III/c)'),
(18, 'Reza Pratama Putra, S. Tr.', '19870719 200804 1 002', 'III', 'Penata (III/c)'),
(19, 'Dian Ratnasari, S.T.', '19880209 201101 2 010', 'III', 'Penata (III/c)'),
(20, 'Wijaya Agus Trisnawan, A.Md.', '19860827 200903 1 002', 'III', 'Penata Muda Tk. I (III/b)'),
(21, 'Chorina Tri Wicaksono, S.Tr.', '19880918 200903 1 001', 'III', 'Penata Muda Tk. I (III/b)'),
(22, 'Wahyu Ranu Wijaya, S. Tr.', '19890624 201101 1 001', 'III', 'Penata Muda Tk. I (III/b)'),
(23, 'Fajar Subhianto, S.T.', '19880730 201402 1 003', 'III', 'Penata Muda Tk. I (III/b)'),
(24, 'Rika Wibawasari, S.H.', '19850721 200912 2 004', 'III', 'Penata Muda Tk. I (III/b)'),
(25, 'Kania Permata Sari, S.T.', '19940309 201801 2 002', 'III', 'Penata Muda Tk. I (III/b)'),
(26, 'Rostiko Putro Pambudi S.Tr.', '19891219 200912 1 001', 'III', 'Penata Muda (III/a)'),
(27, 'Irvansyah Ardhimulana A.', '19850811 200804 1 002', 'II', 'Pengatur Tk. I (II/d)'),
(28, 'Hendra Laurensus', '19870404 200903 1 001', 'II', 'Pengatur Tk. I (II/d)'),
(29, 'Nur Chusnul Chotimah', '19881222 200804 2 001', 'II', 'Pengatur Tk. I (II/d)'),
(30, 'Nuryanto Wibowo, Amd.', '19960605 202012 1 002', 'II', 'Pengatur (II/c)'),
(31, 'Clava Pratama P. Ginting, S.T.', '19940104 201801 1 001', 'III', 'Penata Muda Tk. I (III/b)'),
(32, 'Muhammad Ghaly Kurniawan, S.T.', '19940814 201801 1 001', 'III', 'Penata Muda Tk. I (III/b)'),
(33, 'Hanhan Lukman Syahid, S.T., M.Sc.', '19790601 200502 1 002', 'III', 'Penata Tk. I (III/d)'),
(34, 'Fitri Astika Mahargyaning Tyas, S.T., M.E.', '19850618 200903 2 005', 'III', 'Penata (III/c)'),
(35, 'Diana Wisnu Wardani, S.T.,M.Sc.', '19820714 200604 2 004', 'III', 'Penata Tk. I (III/d)'),
(36, 'Septein Paramia S, S.T., M.Si.', '19820913 200502 2 001', 'III', 'Penata Tk. I (III/d)'),
(37, 'Ir. Asliah Amir, M.M.', '19680310 199103 2 005', 'IV', 'Pembina (VI/a)');

-- --------------------------------------------------------

--
-- Table structure for table `ref_dati2`
--

CREATE TABLE `ref_dati2` (
  `KD_PROVINSI` char(2) DEFAULT NULL,
  `KD_DATI2` char(4) DEFAULT NULL,
  `NM_DATI2` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_dati2`
--

INSERT INTO `ref_dati2` (`KD_PROVINSI`, `KD_DATI2`, `NM_DATI2`) VALUES
('61', '6108', 'LANDAK'),
('61', '6109', 'SEKADAU'),
('61', '6110', 'MELAWI'),
('61', '6111', 'KAB. KAYONG UTARA'),
('61', '6112', 'KUBU RAYA'),
('61', '6171', 'PONTIANAK'),
('61', '6172', 'SINGKAWANG'),
('61', '6199', 'KAB. KETAPANG'),
('62', '6201', 'KOTAWARINGIN BARAT'),
('62', '6202', 'KOTAWARINGIN TIMUR'),
('62', '6203', 'KAPUAS'),
('62', '6204', 'BARITO SELATAN'),
('62', '6205', 'BARITO UTARA'),
('62', '6206', 'PULANG PISAU'),
('62', '6207', 'GUNUNG MAS'),
('62', '6208', 'LAMANDAU'),
('62', '6209', 'SUKAMARA'),
('62', '6210', 'KAB. SERUYAN'),
('62', '6211', 'KAB. KATINGAN'),
('62', '6212', 'BARITO TIMUR'),
('62', '6213', 'MURUNG RAYA'),
('62', '6271', 'PALANGKA RAYA'),
('63', '6301', 'TANAH LAUT'),
('63', '6302', 'KOTA BARU'),
('63', '6303', 'BANJAR'),
('63', '6304', 'BARITO KUALA'),
('63', '6305', 'TAPIN'),
('63', '6306', 'HULU SUNGAI SELATAN'),
('63', '6307', 'HULU SUNGAI TENGAH'),
('63', '6308', 'HULU SUNGAI UTARA'),
('63', '6309', 'TABALONG'),
('63', '6310', 'TANAH BUMBU'),
('63', '6311', 'BALANGAN'),
('63', '6371', 'BANJARMASIN'),
('63', '6372', 'BANJARBARU'),
('64', '6401', 'PASER'),
('64', '6402', 'KUTAI KARTANEGARA'),
('64', '6403', 'BERAU'),
('64', '6405', 'KUTAI BARAT'),
('64', '6406', 'KUTAI TIMUR'),
('64', '6409', 'PENAJAM PASER UTARA'),
('64', '6411', 'MAHAKAM ULU'),
('64', '6471', 'BALIKPAPAN'),
('64', '6472', 'SAMARINDA'),
('64', '6474', 'BONTANG'),
('65', '6504', 'BULUNGAN'),
('65', '6507', 'MALINAU'),
('65', '6508', 'NUNUKAN'),
('65', '6510', 'TANA TIDUNG'),
('65', '6573', 'TARAKAN'),
('61', '6108', 'LANDAK'),
('61', '6109', 'SEKADAU'),
('61', '6110', 'MELAWI'),
('61', '6111', 'KAB. KAYONG UTARA'),
('61', '6112', 'KUBU RAYA'),
('61', '6171', 'PONTIANAK'),
('61', '6172', 'SINGKAWANG'),
('61', '6199', 'KAB. KETAPANG'),
('62', '6201', 'KOTAWARINGIN BARAT'),
('62', '6202', 'KOTAWARINGIN TIMUR'),
('62', '6203', 'KAPUAS'),
('62', '6204', 'BARITO SELATAN'),
('62', '6205', 'BARITO UTARA'),
('62', '6206', 'PULANG PISAU'),
('62', '6207', 'GUNUNG MAS'),
('62', '6208', 'LAMANDAU'),
('62', '6209', 'SUKAMARA'),
('62', '6210', 'KAB. SERUYAN'),
('62', '6211', 'KAB. KATINGAN'),
('62', '6212', 'BARITO TIMUR'),
('62', '6213', 'MURUNG RAYA'),
('62', '6271', 'PALANGKA RAYA'),
('63', '6301', 'TANAH LAUT'),
('63', '6302', 'KOTA BARU'),
('63', '6303', 'BANJAR'),
('63', '6304', 'BARITO KUALA'),
('63', '6305', 'TAPIN'),
('63', '6306', 'HULU SUNGAI SELATAN'),
('63', '6307', 'HULU SUNGAI TENGAH'),
('63', '6308', 'HULU SUNGAI UTARA'),
('63', '6309', 'TABALONG'),
('63', '6310', 'TANAH BUMBU'),
('63', '6311', 'BALANGAN'),
('63', '6371', 'BANJARMASIN'),
('63', '6372', 'BANJARBARU'),
('64', '6401', 'PASER'),
('64', '6402', 'KUTAI KARTANEGARA'),
('64', '6403', 'BERAU'),
('64', '6405', 'KUTAI BARAT'),
('64', '6406', 'KUTAI TIMUR'),
('64', '6409', 'PENAJAM PASER UTARA'),
('64', '6411', 'MAHAKAM ULU'),
('64', '6471', 'BALIKPAPAN'),
('64', '6472', 'SAMARINDA'),
('64', '6474', 'BONTANG'),
('65', '6504', 'BULUNGAN'),
('65', '6507', 'MALINAU'),
('65', '6508', 'NUNUKAN'),
('65', '6510', 'TANA TIDUNG'),
('65', '6573', 'TARAKAN'),
('71', '7102', 'BOLAANG MONGONDOW'),
('71', '7103', 'MINAHASA'),
('71', '7104', 'KEPULAUAN SANGIHE'),
('71', '7106', 'MINAHASA SELATAN'),
('71', '7107', 'MINAHASA UTARA'),
('71', '7108', 'MINAHASA TENGGARA'),
('71', '7109', 'BOLAANG MONGONDOW UTARA'),
('71', '7110', 'BOLAANG MONGONDOW TIMUR'),
('71', '7111', 'BOLAANG MONGONDOW SELATAN'),
('71', '7141', 'KEPULAUAN TALAUD'),
('71', '7142', 'KEP. SITARO'),
('71', '7172', 'MANADO'),
('71', '7173', 'KOTA BITUNG'),
('71', '7174', 'TOMOHON'),
('71', '7175', 'KOTA KOTAMOBAGU'),
('72', '7201', 'BANGGAI KEPULAUAN'),
('72', '7202', 'BANGGAI'),
('72', '7203', 'MOROWALI'),
('72', '7204', 'POSO'),
('72', '7205', 'DONGGALA'),
('72', '7206', 'TOLITOLI'),
('72', '7207', 'BUOL'),
('72', '7208', 'PARIGI MOUTONG'),
('72', '7209', 'TOJO UNA-UNA'),
('72', '7210', 'SIGI'),
('72', '7271', 'KOTA PALU'),
('73', '7301', 'KEPULAUAN SELAYAR'),
('73', '7302', 'BULUKUMBA'),
('73', '7303', 'BANTAENG'),
('73', '7304', 'JENEPONTO'),
('73', '7305', 'TAKALAR'),
('73', '7306', 'GOWA'),
('73', '7307', 'SINJAI'),
('73', '7308', 'MAROS'),
('73', '7309', 'PANGKEP'),
('73', '7310', 'BARRU'),
('73', '7311', 'BONE'),
('73', '7312', 'SOPPENG'),
('73', '7313', 'WAJO'),
('73', '7314', 'SIDRAP'),
('73', '7315', 'PINRANG'),
('73', '7316', 'ENREKANG'),
('73', '7317', 'LUWU'),
('73', '7318', 'TANA TORAJA'),
('73', '7319', 'TORAJA UTARA'),
('73', '7322', 'LUWU UTARA'),
('73', '7324', 'LUWU TIMUR'),
('73', '7371', 'KOTA MAKASSAR'),
('73', '7372', 'PAREPARE'),
('73', '7373', 'PALOPO'),
('74', '7401', 'BUTON'),
('74', '7402', 'MUNA'),
('74', '7403', 'KAB. KONAWE'),
('74', '7404', 'KOLAKA'),
('74', '7405', 'KAB.KONAWE SELATAN'),
('74', '7406', 'WAKATOBI'),
('74', '7407', 'BOMBANA'),
('74', '7408', 'KOLAKA UTARA'),
('74', '7409', 'BUTON UTARA'),
('74', '7410', 'KAB. KONAWE UTARA'),
('74', '7411', 'KAB. KOLAKA TIMUR'),
('74', '7412', 'KAB. MUNA BARAT'),
('74', '7413', 'KAB. BUTON TENGAH'),
('74', '7414', 'KAB. BUTON SELATAN'),
('74', '7471', 'KOTA KENDARI'),
('74', '7472', 'KOTA BAUBAU'),
('75', '7501', 'KAB. BOALEMO'),
('75', '7502', 'KAB. GORONTALO'),
('75', '7503', 'POHUWATO'),
('75', '7504', 'BONE BOLANGO'),
('75', '7505', 'GORONTALO UTARA'),
('75', '7571', 'KOTA GORONTALO'),
('76', '7601', 'POLEWALI MANDAR'),
('76', '7602', 'MAJENE'),
('76', '7603', 'MAMUJU'),
('76', '7604', 'MAMASA'),
('76', '7605', 'MAMUJU UTARA'),
('81', '8101', 'MALUKU TENGGARA'),
('81', '8102', 'MALUKU TENGAH'),
('81', '8103', 'BURU'),
('81', '8104', 'MALUKU TENGGARA BARAT'),
('81', '8105', 'KEPULAUAN ARU'),
('81', '8106', 'SERAM BAGIAN BARAT'),
('81', '8107', 'SERAM BAGIAN TIMUR'),
('81', '8108', 'BURU SELATAN'),
('81', '8109', 'MALUKU BARAT DAYA'),
('81', '8171', 'AMBON'),
('81', '8172', 'KOTA TUAL'),
('82', '8201', 'MERAUKE'),
('82', '8202', 'JAYAWIJAYA'),
('82', '8203', 'JAYAPURA'),
('82', '8204', 'NABIRE'),
('82', '8206', 'PANIAI'),
('82', '8208', 'KEPULAUAN YAPEN'),
('82', '8209', 'BIAK NUMFOR'),
('82', '8210', 'MIMIKA'),
('82', '8212', 'PUNCAK JAYA'),
('82', '8214', 'WAROPEN'),
('82', '8215', 'SUPIORI'),
('82', '8216', 'YAHUKIMO'),
('82', '8217', 'TOLIKARA'),
('82', '8218', 'PEGUNUNGAN BINTANG'),
('82', '8219', 'KEEROM'),
('82', '8220', 'SARMI'),
('82', '8221', 'MAPPI'),
('82', '8222', 'ASMAT'),
('82', '8223', 'BOVENDIGUL'),
('82', '8224', 'MAMBERAMO RAYA'),
('82', '8232', 'MAMBERAMO TENGAH'),
('82', '8233', 'YALIMO'),
('82', '8234', 'LANNY JAYA'),
('82', '8235', 'NDUGA'),
('82', '8236', 'PUNCAK'),
('82', '8237', 'DOGIYAI'),
('82', '8238', 'INTAN JAYA'),
('82', '8239', 'DEIYAI'),
('82', '8239', 'TAMBRAUW'),
('82', '8271', 'KOTA JAYAPURA'),
('83', '8302', 'KAB. HALMAHERA BARAT'),
('83', '8303', 'KAB. HALMAHERA TENGAH'),
('83', '8304', 'KAB. HALMAHERA UTARA'),
('83', '8305', 'KAB. HALMAHERA SELATAN'),
('83', '8306', 'KAB. KEPULAUAN SULA'),
('83', '8307', 'KAB. HALMAHERA TIMUR'),
('83', '8308', 'PULAU MOROTAI'),
('83', '8371', 'KOTA TERNATE'),
('83', '8372', 'KOTA TIDORE KEPULAUAN'),
('92', '9205', 'FAK-FAK'),
('92', '9207', 'MANOKWARI'),
('92', '9213', 'KOTA SORONG'),
('92', '9225', 'SORONG SELATAN'),
('92', '9226', 'TELUK BINTUNI'),
('92', '9227', 'TELUK WONDAMA'),
('92', '9228', 'KAIMANA'),
('92', '9229', 'RAJA AMPAT'),
('92', '9230', 'KAB. SORONG'),
('92', '9232', 'MAMBERAMO TENGAH'),
('92', '9234', 'LANNY JAYA'),
('92', '9238', 'MAYBRAT'),
('92', '9239', 'TAMBRAUW'),
('92', '9240', 'MANOKWARI SELATAN'),
('92', '9241', 'PEGUNUNGAN ARFAK'),
('11', '1101', 'KAB. ACEH SELATAN'),
('11', '1102', 'KAB. ACEH TENGGARA'),
('11', '1103', 'ACEH TIMUR'),
('11', '1104', 'ACEH TENGAH'),
('11', '1105', 'ACEH BARAT'),
('11', '1106', 'KAB. ACEH BESAR'),
('11', '1107', 'KAB. PIDIE'),
('11', '1108', 'ACEH UTARA'),
('11', '1109', 'KAB.SIMEULUE'),
('11', '1110', 'KAB. ACEH SINGKIL'),
('11', '1111', 'ACEH TAMIANG'),
('11', '1112', 'GAYO LUES'),
('11', '1113', 'BIREUEN'),
('11', '1114', 'ACEH JAYA'),
('11', '1115', 'NAGAN RAYA'),
('11', '1116', 'KAB.ACEH BARAT DAYA'),
('11', '1118', 'BENER MERIAH'),
('11', '1119', 'PIDIE JAYA'),
('11', '1171', 'KOTA BANDA ACEH'),
('11', '1172', 'KOTA SABANG'),
('11', '1173', 'KOTA LANGSA'),
('11', '1174', 'KOTA LHOKSEUMAWE'),
('11', '1175', 'KAB. SUBULUSSALAM'),
('12', '1201', 'NIAS'),
('12', '1202', 'MANDAILING NATAL'),
('12', '1203', 'TAPANULI SELATAN'),
('12', '1204', 'TAPANULI TENGAH'),
('12', '1205', 'LABUHAN BATU'),
('12', '1206', 'ASAHAN'),
('12', '1207', 'SIMALUNGUN'),
('12', '1208', 'DAIRI'),
('12', '1209', 'KARO'),
('12', '1210', 'DELI SERDANG'),
('12', '1211', 'LANGKAT'),
('12', '1212', 'PAKPAK BHARAT'),
('12', '1215', 'TOBA SAMOSIR'),
('12', '1216', 'TAPANULI UTARA'),
('12', '1217', 'NIAS SELATAN'),
('12', '1218', 'HUMBANG HASUNDUTAN'),
('12', '1219', 'SERDANG BEDAGAI'),
('12', '1220', 'SAMOSIR'),
('12', '1221', 'BATU BARA'),
('12', '1222', 'PADANG LAWAS'),
('12', '1223', 'PADANG LAWAS UTARA'),
('12', '1224', 'LABUHAN BATU UTARA'),
('12', '1225', 'LABUHAN BATU SELATAN'),
('12', '1226', 'NIAS UTARA'),
('12', '1227', 'NIAS BARAT'),
('12', '1271', 'KOTA SIBOLGA'),
('12', '1272', 'TANJUNG BALAI'),
('12', '1273', 'PEMATANG SIANTAR'),
('12', '1274', 'TEBING TINGGI'),
('12', '1275', 'MEDAN'),
('12', '1276', 'BINJAI'),
('12', '1278', 'KOTA PADANGSIDIMPUAN'),
('12', '1279', 'KOTA GUNUNG SITOLI'),
('13', '1301', 'PESISIR SELATAN'),
('13', '1302', 'KAB.SOLOK'),
('13', '1303', 'SIJUNJUNG'),
('13', '1304', 'TANAH DATAR'),
('13', '1305', 'PADANG PARIAMAN'),
('13', '1306', 'AGAM'),
('13', '1307', 'LIMAPULUH KOTA'),
('13', '1308', 'PASAMAN'),
('13', '1309', 'KAB.KEP. MENTAWAI'),
('13', '1310', 'KAB. SOLOK SELATAN'),
('13', '1311', 'DHARMASRAYA'),
('13', '1312', 'PASAMAN BARAT'),
('13', '1371', 'PADANG'),
('13', '1372', 'SOLOK'),
('13', '1373', 'SAWAH LUNTO'),
('13', '1374', 'PADANG PANJANG'),
('13', '1375', 'BUKITTINGGI'),
('13', '1376', 'PAYAKUMBUH'),
('13', '1377', 'KOTA PARIAMAN'),
('14', '1401', 'INDRAGIRI HULU'),
('14', '1402', 'INDRAGIRI HILIR'),
('14', '1404', 'PELALAWAN'),
('14', '1405', 'SIAK'),
('14', '1406', 'KAMPAR'),
('14', '1407', 'ROKAN HULU'),
('14', '1408', 'KAB. BENGKALIS'),
('14', '1409', 'KAB. ROKAN HILIR'),
('14', '1412', 'KUANTAN SINGINGI'),
('14', '1413', 'KEPULAUAN MERANTI'),
('14', '1471', 'PEKANBARU'),
('14', '1475', 'KOTA DUMAI'),
('15', '1501', 'KERINCI'),
('15', '1502', 'MERANGIN'),
('15', '1503', 'SAROLANGUN'),
('15', '1504', 'BATANGHARI'),
('15', '1505', 'MUARO JAMBI'),
('15', '1506', 'TANJUNG JABUNG TIMUR'),
('15', '1507', 'TANJUNG JABUNG BARAT'),
('15', '1508', 'TEBO'),
('15', '1509', 'BUNGO'),
('15', '1571', 'JAMBI'),
('15', '1572', 'KOTA SUNGAI PENUH'),
('16', '1601', 'OGAN KOMERING ULU'),
('16', '1602', 'OGAN KOMERING ILIR'),
('16', '1603', 'MUARA ENIM'),
('16', '1604', 'LAHAT'),
('16', '1605', 'MUSI RAWAS'),
('16', '1606', 'MUSI BANYUASIN'),
('16', '1607', 'BANYUASIN'),
('16', '1608', 'OGAN KOMERING ULU TIMUR'),
('16', '1609', 'OGAN KOMERING ULU SELATAN'),
('16', '1611', 'OGAN ILIR'),
('16', '1612', 'EMPAT LAWANG'),
('16', '1613', 'PENUKAL ABAB LEMATANG ILIR'),
('16', '1614', 'MUSI RAWAS UTARA'),
('16', '1671', 'PALEMBANG'),
('16', '1674', 'KOTA PRABUMULIH'),
('16', '1675', 'PAGAR ALAM'),
('16', '1676', 'LUBUK LINGGAU'),
('17', '1701', 'BENGKULU SELATAN'),
('17', '1702', 'REJANG LEBONG'),
('17', '1703', 'BENGKULU UTARA'),
('17', '1704', 'KAUR'),
('17', '1705', 'SELUMA'),
('17', '1706', 'MUKOMUKO'),
('17', '1707', 'KEPAHIANG'),
('17', '1708', 'LEBONG'),
('17', '1709', 'BENGKULU TENGAH'),
('17', '1771', 'KOTA BENGKULU'),
('18', '1801', 'LAMPUNG SELATAN'),
('18', '1803', 'LAMPUNG UTARA'),
('18', '1804', 'LAMPUNG BARAT'),
('18', '1805', 'TULANG BAWANG'),
('18', '1806', 'TANGGAMUS'),
('18', '1808', 'WAY KANAN'),
('18', '1810', 'LAMPUNG TIMUR'),
('18', '1811', 'LAMPUNG TENGAH'),
('18', '1812', 'PESAWARAN'),
('18', '1813', 'PRINGSEWU'),
('18', '1814', 'TULANG BAWANG BARAT'),
('18', '1815', 'MESUJI'),
('18', '1816', 'PESISIR BARAT'),
('18', '1871', 'BANDAR LAMPUNG'),
('18', '1872', 'METRO'),
('19', '1901', 'BANGKA'),
('19', '1902', 'BELITUNG'),
('19', '1903', 'BANGKA BARAT'),
('19', '1904', 'BANGKA TENGAH'),
('19', '1905', 'BANGKA SELATAN'),
('19', '1906', 'BELITUNG TIMUR'),
('19', '1971', 'PANGKALPINANG'),
('21', '2101', 'KARIMUN'),
('21', '2103', 'BINTAN'),
('21', '2111', 'KAB. NATUNA'),
('21', '2113', 'LINGGA'),
('21', '2115', 'KAB. KEPULAUAN ANAMBAS'),
('21', '2171', 'BATAM'),
('21', '2174', 'TANJUNG PINANG'),
('31', '3171', 'JAKARTA SELATAN'),
('31', '3172', 'JAKARTA TIMUR'),
('31', '3173', 'JAKARTA PUSAT'),
('31', '3174', 'JAKARTA BARAT'),
('31', '3175', 'JAKARTA UTARA'),
('31', '3176', 'KEPULAUAN SERIBU'),
('32', '3203', 'BOGOR'),
('32', '3204', 'KAB. SUKABUMI'),
('32', '3205', 'CIANJUR'),
('32', '3206', 'KAB. BANDUNG'),
('32', '3207', 'GARUT'),
('32', '3208', 'TASIKMALAYA'),
('32', '3209', 'CIAMIS'),
('32', '3210', 'KUNINGAN'),
('32', '3211', 'CIREBON'),
('32', '3212', 'MAJALENGKA'),
('32', '3213', 'SUMEDANG'),
('32', '3214', 'INDRAMAYU'),
('32', '3215', 'SUBANG'),
('32', '3216', 'PURWAKARTA'),
('32', '3217', 'KARAWANG'),
('32', '3218', 'BEKASI'),
('32', '3222', 'PANGANDARAN'),
('32', '3271', 'KOTA BOGOR'),
('32', '3272', 'KOTA SUKABUMI'),
('32', '3273', 'KOTA BANDUNG'),
('32', '3274', 'KOTA CIREBON'),
('32', '3275', 'KOTA BEKASI'),
('32', '3276', 'DEPOK'),
('32', '3277', 'KOTA TASIKMALAYA'),
('32', '3279', 'KOTA BANJAR'),
('32', '3280', 'CIMAHI'),
('32', '3299', 'BANDUNG BARAT'),
('33', '3301', 'CILACAP'),
('33', '3302', 'BANYUMAS'),
('33', '3303', 'PURBALINGGA'),
('33', '3304', 'BANJARNEGARA'),
('33', '3305', 'KEBUMEN'),
('33', '3306', 'PURWOREJO'),
('33', '3307', 'WONOSOBO'),
('33', '3308', 'MAGELANG'),
('33', '3309', 'BOYOLALI'),
('33', '3310', 'KLATEN'),
('33', '3311', 'SUKOHARJO'),
('33', '3312', 'WONOGIRI'),
('33', '3313', 'KARANGANYAR'),
('33', '3314', 'SRAGEN'),
('33', '3315', 'GROBOGAN'),
('33', '3316', 'BLORA'),
('33', '3317', 'REMBANG'),
('33', '3318', 'PATI'),
('33', '3319', 'KUDUS'),
('33', '3320', 'JEPARA'),
('33', '3321', 'DEMAK'),
('33', '3322', 'SEMARANG'),
('33', '3323', 'TEMANGGUNG'),
('33', '3324', 'KENDAL'),
('33', '3325', 'BATANG'),
('33', '3326', 'PEKALONGAN'),
('33', '3327', 'PEMALANG'),
('33', '3328', 'KAB. TEGAL'),
('33', '3329', 'BREBES'),
('33', '3371', 'MAGELANG'),
('33', '3372', 'SURAKARTA'),
('33', '3373', 'SALATIGA'),
('33', '3374', 'KOTA SEMARANG'),
('33', '3375', 'KOTA PEKALONGAN'),
('33', '3376', 'KOTA TEGAL'),
('34', '3401', 'KULONPROGO'),
('34', '3402', 'BANTUL'),
('34', '3403', 'GUNUNGKIDUL'),
('34', '3404', 'SLEMAN'),
('34', '3471', 'YOGYAKARTA'),
('35', '3501', 'PACITAN'),
('35', '3502', 'PONOROGO'),
('35', '3503', 'TRENGGALEK'),
('35', '3504', 'TULUNGAGUNG'),
('35', '3505', 'BLITAR'),
('35', '3506', 'KAB. KEDIRI'),
('35', '3507', 'MALANG'),
('35', '3508', 'LUMAJANG'),
('35', '3509', 'JEMBER'),
('35', '3510', 'BANYUWANGI'),
('35', '3511', 'BONDOWOSO'),
('35', '3512', 'SITUBONDO'),
('35', '3513', 'KAB.PROBOLINGGO'),
('35', '3514', 'PASURUAN'),
('35', '3515', 'SIDOARJO'),
('35', '3516', 'KAB.MOJOKERTO'),
('35', '3517', 'JOMBANG'),
('35', '3518', 'KAB.NGANJUK'),
('35', '3519', 'MADIUN'),
('35', '3520', 'MAGETAN'),
('35', '3521', 'NGAWI'),
('35', '3522', 'BOJONEGORO'),
('35', '3523', 'TUBAN'),
('35', '3524', 'LAMONGAN'),
('35', '3525', 'GRESIK'),
('35', '3526', 'BANGKALAN'),
('35', '3527', 'SAMPANG'),
('35', '3528', 'PAMEKASAN'),
('35', '3529', 'SUMENEP'),
('35', '3571', 'KOTA KEDIRI'),
('35', '3572', 'KOTA BLITAR'),
('35', '3573', 'KOTA MALANG'),
('35', '3574', 'KOTA PROBOLINGGO'),
('35', '3575', 'KOTA PASURUAN'),
('35', '3576', 'KOTA MOJOKERTO'),
('35', '3577', 'KOTA MADIUN'),
('35', '3578', 'SURABAYA'),
('35', '3579', 'KOTA BATU'),
('36', '3601', 'PANDEGLANG'),
('36', '3602', 'LEBAK'),
('36', '3604', 'SERANG'),
('36', '3619', 'KAB. TANGERANG'),
('36', '3672', 'CILEGON'),
('36', '3673', 'KOTA SERANG'),
('36', '3675', 'TANGERANG'),
('36', '3676', 'TANGERANG SELATAN'),
('51', '5101', 'JEMBRANA'),
('51', '5102', 'TABANAN'),
('51', '5103', 'BADUNG'),
('51', '5104', 'GIANYAR'),
('51', '5105', 'KLUNGKUNG'),
('51', '5106', 'BANGLI'),
('51', '5107', 'KARANG ASEM'),
('51', '5108', 'BULELENG'),
('51', '5171', 'DENPASAR'),
('52', '5201', 'LOMBOK BARAT'),
('52', '5202', 'LOMBOK TENGAH'),
('52', '5203', 'LOMBOK TIMUR'),
('52', '5204', 'SUMBAWA'),
('52', '5205', 'DOMPU'),
('52', '5206', 'BIMA'),
('52', '5207', 'SUMBAWA BARAT'),
('52', '5208', 'LOMBOK UTARA'),
('52', '5271', 'KOTA MATARAM'),
('52', '5272', 'KOTA BIMA'),
('53', '5301', 'SUMBA BARAT'),
('53', '5301', 'SUMBA TIMUR'),
('53', '5302', 'SUMBA TIMUR'),
('53', '5303', 'KUPANG'),
('53', '5304', 'TIMOR TENGAH SELATAN'),
('53', '5305', 'TIMOR TENGAH UTARA'),
('53', '5306', 'BELU'),
('53', '5307', 'ALOR'),
('53', '5308', 'FLORES TIMUR'),
('53', '5309', 'SIKKA'),
('53', '5310', 'ENDE'),
('53', '5311', 'NGADA'),
('53', '5312', 'MANGGARAI'),
('53', '5314', 'LEMBATA'),
('53', '5315', 'ROTE NDAO'),
('53', '5316', 'MANGGARAI BARAT'),
('53', '5317', 'NAGEKEO'),
('53', '5318', 'SUMBA BARAT DAYA'),
('53', '5319', 'SUMBA TENGAH'),
('53', '5320', 'MANGGARAI TIMUR'),
('53', '5321', 'SABU RAIJUA'),
('53', '5371', 'KOTA KUPANG'),
('61', '6101', 'SAMBAS'),
('61', '6102', 'KAB. MEMPAWAH'),
('61', '6103', 'SANGGAU'),
('61', '6104', 'KAB. KETAPANG'),
('61', '6105', 'SINTANG'),
('61', '6106', 'KAPUAS HULU'),
('61', '6107', 'BENGKAYANG');

-- --------------------------------------------------------

--
-- Table structure for table `ref_pengantar`
--

CREATE TABLE `ref_pengantar` (
  `id` int(11) NOT NULL,
  `no_pengantar` int(11) NOT NULL,
  `tgl_pengantar` date NOT NULL,
  `hal_pengantar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ref_permohonan`
--

CREATE TABLE `ref_permohonan` (
  `id` int(11) NOT NULL,
  `no_permohonan` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `hal_permohonan` text NOT NULL,
  `jns_permohonan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ref_provinsi`
--

CREATE TABLE `ref_provinsi` (
  `KD_PROVINSI` char(2) DEFAULT NULL,
  `NM_PROVINSI` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_provinsi`
--

INSERT INTO `ref_provinsi` (`KD_PROVINSI`, `NM_PROVINSI`) VALUES
('11', 'NANGGROE ACEH DARUSSALAM'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'D.I. YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'PAPUA'),
('83', 'MALUKU UTARA'),
('92', 'PAPUA BARAT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_login`
--
ALTER TABLE `dat_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `dat_pegawai`
--
ALTER TABLE `dat_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `ref_pengantar`
--
ALTER TABLE `ref_pengantar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_permohonan`
--
ALTER TABLE `ref_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_login`
--
ALTER TABLE `dat_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dat_pegawai`
--
ALTER TABLE `dat_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ref_pengantar`
--
ALTER TABLE `ref_pengantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_permohonan`
--
ALTER TABLE `ref_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
