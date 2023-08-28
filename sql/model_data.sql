-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 03:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `model_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_user`
--

CREATE TABLE `id_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('superadmin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_user`
--

INSERT INTO `id_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'coba', 'admin', '12345', 'superadmin'),
(2, 'syahrul', 'admin1', '12345', 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_komoditas`
--

CREATE TABLE `jenis_komoditas` (
  `id_komoditas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_komoditas`
--

INSERT INTO `jenis_komoditas` (`id_komoditas`, `nama`) VALUES
(1, 'sapi'),
(2, 'kambing'),
(3, 'domba'),
(4, 'itik'),
(5, 'ayam buras'),
(6, 'ayam petelur'),
(7, 'olahan hasil ternak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(255) NOT NULL,
  `id_kelompok` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kelompok`, `nik`, `nama`, `desa`, `kecamatan`) VALUES
('111', '123', '-', 'paijon', 'modo', 'lamongan'),
('112', '123', '-', 'paimin', 'jetis', 'lamongan'),
('113', '123', '-', 'karno', 'modo', 'lamongan'),
('20230821053447', '123', '12331312', 'Afif S', 'Menongo', 'Sukodadi'),
('20230821053522', '123', '12331312', 'Afif', 'Menongo', 'Sukodadi'),
('20230821053558', '123', '12331312', 'Afif', 'Menongo', 'Sukodadi'),
('20230821053638', '123', '12331312', 'Afif', 'Menongo', 'Sukodadi'),
('20230821053911', '123', '12331312', 'Afif', 'Menongo', 'Sukodadi'),
('20230821054007', '123', '12331312', 'Afif', 'Menongo', 'Sukodadi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelompok`
--

CREATE TABLE `tb_kelompok` (
  `id` varchar(255) NOT NULL,
  `nama_kelompok` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `nama_sekertaris` varchar(255) NOT NULL,
  `nama_bendahara` varchar(255) NOT NULL,
  `tanggal_berita_acara` date NOT NULL,
  `no_sk_berita_acara` varchar(255) NOT NULL,
  `no_sk_kades` varchar(255) NOT NULL,
  `tanggal_sk_kades` date NOT NULL,
  `no_surat_domisili` varchar(255) NOT NULL,
  `no_surat_permohonan_pengesahan` varchar(255) NOT NULL,
  `tanggal_surat_permohonan_pengesahan` date NOT NULL,
  `komoditas_utama` int(11) NOT NULL,
  `sk_pengesahan` varchar(255) NOT NULL,
  `tanggal_sk_pengesahan` date NOT NULL,
  `ver_sk_kadis` int(11) NOT NULL,
  `no_sk_kadis` varchar(255) NOT NULL,
  `ver_terdaftar_simluhtan` int(11) NOT NULL,
  `sk_kemkumhan` varchar(255) NOT NULL,
  `tanggal_sk_kemkumhan` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelompok`
--

INSERT INTO `tb_kelompok` (`id`, `nama_kelompok`, `desa`, `kecamatan`, `nama_ketua`, `nama_sekertaris`, `nama_bendahara`, `tanggal_berita_acara`, `no_sk_berita_acara`, `no_sk_kades`, `tanggal_sk_kades`, `no_surat_domisili`, `no_surat_permohonan_pengesahan`, `tanggal_surat_permohonan_pengesahan`, `komoditas_utama`, `sk_pengesahan`, `tanggal_sk_pengesahan`, `ver_sk_kadis`, `no_sk_kadis`, `ver_terdaftar_simluhtan`, `sk_kemkumhan`, `tanggal_sk_kemkumhan`, `keterangan`, `status_aktif`) VALUES
('123', 'maju jaya', 'menongo', 'Sukodadi', 'ahmad', 'fahres', 'rozi', '2023-08-10', '-', '-', '2023-08-10', '-', '-', '2023-08-10', 1, '-', '2023-08-10', 0, '-', 0, '-', '2023-08-10', '-', 1),
('124', 'sumber maju', 'sukolilo', 'sukodadi', 'dani', 'budi', 'dendy', '2023-08-10', '-', '-', '2023-08-10', '-', '-', '2023-08-10', 1, '-', '2023-08-10', 0, '-', 0, '-', '2023-08-10', '-', 1),
('125', 'mulia jaya', 'modo', 'lamongan', 'abid', 'adib', 'daffa', '2023-08-10', '-', '-', '2023-08-10', '-', '-', '2023-08-10', 1, '-', '2023-08-10', 0, '-', 0, '-', '2023-08-10', '-', 1),
('20230821035225', 'hhhh', 'karangbinangun', 'lamongan', 'jono', 'joni', 'tejo', '0000-00-00', '-', '-', '0000-00-00', '355', '-', '0000-00-00', 1, '-', '0000-00-00', 0, '-', 0, '-', '0000-00-00', '-', 1),
('20230821035322', 'hhhh', 'karangbinangun', 'lamongan', 'jono', 'joni', 'tejo', '0000-00-00', '-', '-', '0000-00-00', '355', '-', '0000-00-00', 1, '-', '0000-00-00', 0, '-', 0, '-', '0000-00-00', '-', 1),
('20232108035059 am', 'hhhh', 'karangbinangun', 'lamongan', 'jono', 'joni', 'tejo', '0000-00-00', '-', '-', '0000-00-00', '355', '-', '0000-00-00', 1, '-', '0000-00-00', 0, '-', 0, '-', '0000-00-00', '-', 1),
('889', 'hhhh', 'karangbinangun', 'lamongan', 'jono', 'joni', 'tejo', '0000-00-00', '-', '-', '0000-00-00', '355', '-', '0000-00-00', 1, '-', '0000-00-00', 0, '-', 0, '-', '0000-00-00', '-', 1),
('990', 'hhhh', 'karangbinangun', 'lamongan', 'jono', 'joni', 'tejo', '0000-00-00', '-', '-', '0000-00-00', '', '-', '0000-00-00', 1, '-', '0000-00-00', 0, '-', 0, '-', '0000-00-00', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_komoditas`
--

CREATE TABLE `tb_komoditas` (
  `id_komoditas` varchar(255) NOT NULL,
  `id_pemilik` varchar(255) NOT NULL,
  `id_kelompok` varchar(255) NOT NULL,
  `jenis_komoditas` int(11) NOT NULL,
  `jumlah_komoditas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_komoditas`
--

INSERT INTO `tb_komoditas` (`id_komoditas`, `id_pemilik`, `id_kelompok`, `jenis_komoditas`, `jumlah_komoditas`) VALUES
('1', '111', '123', 1, 10),
('2', '111', '123', 2, 5),
('20230821093655', '111', '123', 3, 12),
('20230823030200', '111', '123', 2, 10),
('20230823030340', '111', '123', 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_user`
--
ALTER TABLE `id_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_komoditas`
--
ALTER TABLE `jenis_komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komoditas`
--
ALTER TABLE `tb_komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_user`
--
ALTER TABLE `id_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
