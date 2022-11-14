-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 05:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_agen` int(11) NOT NULL,
  `no_perusahaan` int(11) NOT NULL,
  `nama_agen` varchar(30) NOT NULL,
  `no_telp_agen` varchar(20) NOT NULL,
  `alamat_agen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calon_penumpang`
--

CREATE TABLE `calon_penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `nama_penumpang` varchar(50) NOT NULL,
  `no_telp_penumpang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kepunyaan`
--

CREATE TABLE `data_kepunyaan` (
  `tiket_dibeli` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL,
  `kode_tujuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `kode_penjualan` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `kode_tujuan` int(11) NOT NULL,
  `kode_tiket` int(11) NOT NULL,
  `waktu_penjualan` date NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kantor_pusat`
--

CREATE TABLE `kantor_pusat` (
  `no_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(300) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `no_telp_perusahaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kode_tiket` int(11) NOT NULL,
  `kode_tujuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_tujuan`
--

CREATE TABLE `tiket_tujuan` (
  `kode_tujuan` int(11) NOT NULL,
  `tiket_tersedia` int(11) NOT NULL,
  `status_ketersediaan` varchar(10) NOT NULL,
  `waktu_operasional_bus` varchar(30) NOT NULL,
  `tujuan_keberangkatan` varchar(30) NOT NULL,
  `harga_tiket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`),
  ADD KEY `fk_no_perusahaan` (`no_perusahaan`);

--
-- Indexes for table `calon_penumpang`
--
ALTER TABLE `calon_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `data_kepunyaan`
--
ALTER TABLE `data_kepunyaan`
  ADD KEY `fk_id_agen` (`id_agen`),
  ADD KEY `fk_kode_tujuan2` (`kode_tujuan`);

--
-- Indexes for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `fk_id_penumpang` (`id_penumpang`),
  ADD KEY `fk_kode_tujuan3` (`kode_tujuan`),
  ADD KEY `fk_kode_tiket` (`kode_tiket`);

--
-- Indexes for table `kantor_pusat`
--
ALTER TABLE `kantor_pusat`
  ADD PRIMARY KEY (`no_perusahaan`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD KEY `fk_kode_tujuan` (`kode_tujuan`);

--
-- Indexes for table `tiket_tujuan`
--
ALTER TABLE `tiket_tujuan`
  ADD PRIMARY KEY (`kode_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id_agen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calon_penumpang`
--
ALTER TABLE `calon_penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  MODIFY `kode_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kantor_pusat`
--
ALTER TABLE `kantor_pusat`
  MODIFY `no_perusahaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kode_tiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket_tujuan`
--
ALTER TABLE `tiket_tujuan`
  MODIFY `kode_tujuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agen`
--
ALTER TABLE `agen`
  ADD CONSTRAINT `fk_no_perusahaan` FOREIGN KEY (`no_perusahaan`) REFERENCES `kantor_pusat` (`no_perusahaan`);

--
-- Constraints for table `data_kepunyaan`
--
ALTER TABLE `data_kepunyaan`
  ADD CONSTRAINT `fk_id_agen` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`),
  ADD CONSTRAINT `fk_kode_tujuan2` FOREIGN KEY (`kode_tujuan`) REFERENCES `tiket_tujuan` (`kode_tujuan`);

--
-- Constraints for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD CONSTRAINT `fk_id_penumpang` FOREIGN KEY (`id_penumpang`) REFERENCES `calon_penumpang` (`id_penumpang`),
  ADD CONSTRAINT `fk_kode_tiket` FOREIGN KEY (`kode_tiket`) REFERENCES `tiket` (`kode_tiket`),
  ADD CONSTRAINT `fk_kode_tujuan3` FOREIGN KEY (`kode_tujuan`) REFERENCES `tiket_tujuan` (`kode_tujuan`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fk_kode_tujuan` FOREIGN KEY (`kode_tujuan`) REFERENCES `tiket_tujuan` (`kode_tujuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
