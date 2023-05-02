-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 09:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `no m` int(10) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`no m`, `nik`, `nama`, `pekerjaan`, `email`) VALUES
(20, 1222, 'putra ', 'dosen', 'putra@gmail.com'),
(31, 1222, 'hhhh', 'pengangguran', 'bob@gmail.com'),
(32, 1114, 'jenny', 'asli', 'jenny@gmail.com'),
(35, 1222, 'assssdgfg', 'asli', 'asli@gfmail.com'),
(38, 1222, 'hhhh', 'dokter', 'bob@gmail.com'),
(39, 1222, 'putra', 'dokter', 'bob@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cicilan`
--

CREATE TABLE `tb_cicilan` (
  `no_m` int(8) NOT NULL,
  `jumlah_cicilan` varchar(50) NOT NULL,
  `jumlah_pembayaran` varchar(50) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `sisa_cicilan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cicilan`
--

INSERT INTO `tb_cicilan` (`no_m`, `jumlah_cicilan`, `jumlah_pembayaran`, `tanggal_pembayaran`, `sisa_cicilan`) VALUES
(1, '780000 ', '500000 ', '2022-06-22', '280000'),
(2, '78877', 'IDR 90019 ', '2022-06-12', '866554');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `no_p` int(8) NOT NULL,
  `status_p` varchar(50) NOT NULL,
  `jumlah_pinjaman` varchar(50) NOT NULL,
  `tempo` varchar(35) NOT NULL,
  `angsuran` varchar(35) NOT NULL,
  `tanggal_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjaman`
--

INSERT INTO `tb_pinjaman` (`no_p`, `status_p`, `jumlah_pinjaman`, `tempo`, `angsuran`, `tanggal_pinjam`) VALUES
(2, 'anggota', 'IDR 90019 ', '3 bulan ', 'IDR 761511 ', '0000-00-00'),
(3, 'ketua', 'IDR 890000', '3 bulan', 'IDR 761511', '2022-06-29'),
(4, 'ytfss', 'IDR 890000', '7 bulan', 'IDR 76543', '2022-06-13'),
(5, 'ytfss', '500000', '7 bulan', 'IDR 70000', '2022-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shu`
--

CREATE TABLE `tb_shu` (
  `no_m` int(8) NOT NULL,
  `jumlah_dana` varchar(50) NOT NULL,
  `total_shu` varchar(50) NOT NULL,
  `hasil_bagi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_shu`
--

INSERT INTO `tb_shu` (`no_m`, `jumlah_dana`, `total_shu`, `hasil_bagi`) VALUES
(2, 'Rp. 9088', 'Rp.126627 ', 'Rp.829287 '),
(3, 'Rp. 56', 'Rp.126627', 'Rp.8 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_simpanan`
--

CREATE TABLE `tb_simpanan` (
  `no_s` int(8) NOT NULL,
  `status_s` varchar(50) NOT NULL,
  `jumlah_simpanan` int(8) NOT NULL,
  `jenis_simpanan` varchar(35) NOT NULL,
  `tanggal_simpan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_simpanan`
--

INSERT INTO `tb_simpanan` (`no_s`, `status_s`, `jumlah_simpanan`, `jenis_simpanan`, `tanggal_simpan`) VALUES
(1, 'bendahara', 56698, 'qurban', '2021-08-23'),
(3, 'anggota', 50504, 'Wajib', '2021-09-29'),
(8, 'anggota', 123345, 'qurban ', '2022-06-21'),
(12, 'ketua', 346777, 'Qurban ', '2022-06-01'),
(13, 'anggota', 345355, 'pokok', '2023-07-21'),
(14, 'anggota', 575433, 'pokok', '2022-06-15'),
(15, 'ypooug', 321133, 'qurban', '2022-07-09'),
(18, 'yuddww', 2345567, 'pokok', '2022-06-27'),
(19, 'anggota', 12334, 'Sukarela', '2022-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('ADMIN','USER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'yoga', 'admin', '12345', 'ADMIN'),
(2, 'Nanda', 'user', '12345', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`no m`);

--
-- Indexes for table `tb_cicilan`
--
ALTER TABLE `tb_cicilan`
  ADD PRIMARY KEY (`no_m`);

--
-- Indexes for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`no_p`);

--
-- Indexes for table `tb_shu`
--
ALTER TABLE `tb_shu`
  ADD PRIMARY KEY (`no_m`);

--
-- Indexes for table `tb_simpanan`
--
ALTER TABLE `tb_simpanan`
  ADD PRIMARY KEY (`no_s`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `no m` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_cicilan`
--
ALTER TABLE `tb_cicilan`
  MODIFY `no_m` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  MODIFY `no_p` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_shu`
--
ALTER TABLE `tb_shu`
  MODIFY `no_m` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_simpanan`
--
ALTER TABLE `tb_simpanan`
  MODIFY `no_s` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
