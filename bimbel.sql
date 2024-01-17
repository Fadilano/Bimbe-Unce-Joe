-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 01:47 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `kode_guru` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_guru`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_datasiswa` (
  `npm` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `sekolah` varchar(30) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `telepon` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datasiswa`
--

INSERT INTO `tbl_datasiswa` (`npm`, `nama`, `kelas`, `sekolah`, `alamat`, `telepon`) VALUES
(50421436, 'Fadilano', '8', 'SMA YADIKA 4', 'Legok', '085883327454'),
(50421437, 'Abraham', '2', 'SD anjay', 'Bekasi', '0125123465'),
(242452235, 'Fadilsdasfas', '2', 'SD anjay', 'Bekasi', '0125123465'),
(51421104, 'muzi', '6', 'SDN 05', 'kampung ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE IF NOT EXISTS `tbl_laporan` (
  `id` int(10) NOT NULL,
  `npm` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `matpel` varchar(25) NOT NULL,
  `materi` varchar(25) NOT NULL,
  `penilaian` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id`, `npm`, `tanggal`, `matpel`, `materi`, `penilaian`) VALUES
(3, 50421436, '2024-01-17', 'BAHASA', 'aljabar', 20),
(4, 50421437, '2024-01-07', 'Mandarin', 'Halo', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `npm` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`npm`, `username`, `password`) VALUES
(51421103, 'adi', 'adi123'),
(51421104, 'muzi', 'muzi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
