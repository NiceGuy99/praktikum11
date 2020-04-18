-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `tanggal` varchar(20) NOT NULL,
  `nama` varchar(52) NOT NULL,
  `jenis_kelamin` char(15) NOT NULL,
  `nisn` int(16) NOT NULL,
  `nik` int(16) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `no_registrasi` int(31) NOT NULL,
  `agama` char(10) NOT NULL,
  `kewarganegaraan` char(15) NOT NULL,
  `berkebutuhan_khusus` char(5) DEFAULT NULL,
  `alamat` varchar(60) NOT NULL,
  `rt` int(3) DEFAULT NULL,
  `rw` int(3) DEFAULT NULL,
  `dusun` varchar(31) NOT NULL,
  `desa` varchar(31) NOT NULL,
  `kecamatan` varchar(31) NOT NULL,
  `kodepos` int(5) DEFAULT NULL,
  `lintang` varchar(31) DEFAULT NULL,
  `bujur` varchar(31) DEFAULT NULL,
  `tempat_tinggal` varchar(10) DEFAULT NULL,
  `transportasi` varchar(10) DEFAULT NULL,
  `no_kks` int(8) DEFAULT NULL,
  `anak_ke` int(2) NOT NULL,
  `penerima_kps` char(5) DEFAULT NULL,
  `no_kps` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`tanggal`, `nama`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `no_registrasi`, `agama`, `kewarganegaraan`, `berkebutuhan_khusus`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kodepos`, `lintang`, `bujur`, `tempat_tinggal`, `transportasi`, `no_kks`, `anak_ke`, `penerima_kps`, `no_kps`) VALUES
('', '', '', 0, 0, '', 0, '', '', NULL, '', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
