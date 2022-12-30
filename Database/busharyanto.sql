-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busharyanto`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_agen` varchar(50) NOT NULL,
  `no_perusahaan` varchar(50) NOT NULL,
  `nama_agen` varchar(50) NOT NULL,
  `no_telp_agen` bigint(20) NOT NULL,
  `alamat_agen` varchar(50) NOT NULL,
  `email_agen` varchar(50) NOT NULL,
  `katasandi_agen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id_agen`, `no_perusahaan`, `nama_agen`, `no_telp_agen`, `alamat_agen`, `email_agen`, `katasandi_agen`) VALUES
('205314000', '36496062', 'Clara', 91112341178, 'Paingan', 'clara@gmail.com', 'Clara'),
('205314042', '36496062', 'Dandy', 891234, 'Babarsari', 'Dandy@gmail.com', 'DandyTegar'),
('205314049', '36496062', 'Sally', 91112341780, 'Jogja', 'Sally@gmail.com', 'Sally'),
('205314060', '36496062', 'Krisna', 85747471454, 'Maguwoharjo', 'priyananda65@gmail.com', 'Fransiskus'),
('205314062', '36496062', 'Egi', 823447812, 'Paingan', 'Egi@gmail.com', 'AkuEgi');

-- --------------------------------------------------------

--
-- Table structure for table `calon_penumpang`
--

CREATE TABLE `calon_penumpang` (
  `id_penumpang` varchar(50) NOT NULL,
  `nama_penumpang` varchar(50) NOT NULL,
  `no_telp_penumpang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_penumpang`
--

INSERT INTO `calon_penumpang` (`id_penumpang`, `nama_penumpang`, `no_telp_penumpang`) VALUES
('21', 'James', 89711);

-- --------------------------------------------------------

--
-- Table structure for table `data_kepunyaan`
--

CREATE TABLE `data_kepunyaan` (
  `id_agen` varchar(50) NOT NULL,
  `kode_tujuan` varchar(50) NOT NULL,
  `kapasitas_tiket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kepunyaan`
--

INSERT INTO `data_kepunyaan` (`id_agen`, `kode_tujuan`, `kapasitas_tiket`) VALUES
('205314060', 'SMG01', 30);

-- --------------------------------------------------------

--
-- Table structure for table `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `kode_penjualan` int(50) NOT NULL,
  `id_penumpang` varchar(50) NOT NULL,
  `kode_tujuan` varchar(50) NOT NULL,
  `kode_tiket` varchar(50) NOT NULL,
  `waktu_penjualan` date NOT NULL,
  `biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penjualan`
--

INSERT INTO `data_penjualan` (`kode_penjualan`, `id_penumpang`, `kode_tujuan`, `kode_tiket`, `waktu_penjualan`, `biaya`) VALUES
(220, '21', 'SMG02', 'A101', '2022-12-21', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `kantor_pusat`
--

CREATE TABLE `kantor_pusat` (
  `no_perusahaan` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `noHP_perusahaan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kantor_pusat`
--

INSERT INTO `kantor_pusat` (`no_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `email_perusahaan`, `noHP_perusahaan`) VALUES
('36496062', 'PO. Haryanto', 'Jl. Lingkar Ngembal Kulon, Ngembal Kulon, Kec. Jati, Kudus', 'poharyanto@gmail.com', 291441888);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kode_tiket` varchar(50) NOT NULL,
  `kode_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kode_tiket`, `kode_tujuan`) VALUES
('A101', 'SMG01');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_tujuan`
--

CREATE TABLE `tiket_tujuan` (
  `kode_tujuan` varchar(50) NOT NULL,
  `kapasitas_tiket` int(20) NOT NULL,
  `status_ketersediaan` varchar(50) NOT NULL,
  `waktu_operasional` date NOT NULL,
  `jam_operasional` time NOT NULL,
  `asal_keberangkatan` varchar(50) NOT NULL,
  `tujuan_keberangkatan` varchar(50) NOT NULL,
  `harga_tiket` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket_tujuan`
--

INSERT INTO `tiket_tujuan` (`kode_tujuan`, `kapasitas_tiket`, `status_ketersediaan`, `waktu_operasional`, `jam_operasional`, `asal_keberangkatan`, `tujuan_keberangkatan`, `harga_tiket`) VALUES
('SMG01', 30, 'Tersedia', '2022-12-25', '14:00:00', 'Semarang', 'Jakarta', 70000),
('SMG02', 30, 'Tersedia', '2022-12-25', '07:00:00', 'Semarang', 'Jakarta', 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`),
  ADD KEY `no_perusahaan` (`no_perusahaan`);

--
-- Indexes for table `calon_penumpang`
--
ALTER TABLE `calon_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `data_kepunyaan`
--
ALTER TABLE `data_kepunyaan`
  ADD KEY `id_agen` (`id_agen`),
  ADD KEY `kode_tujuan` (`kode_tujuan`);

--
-- Indexes for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `id_penumpang` (`id_penumpang`),
  ADD KEY `kode_tujuan` (`kode_tujuan`),
  ADD KEY `kode_tiket` (`kode_tiket`);

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
  ADD KEY `kode_tujuan` (`kode_tujuan`);

--
-- Indexes for table `tiket_tujuan`
--
ALTER TABLE `tiket_tujuan`
  ADD PRIMARY KEY (`kode_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  MODIFY `kode_penjualan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agen`
--
ALTER TABLE `agen`
  ADD CONSTRAINT `agen_ibfk_1` FOREIGN KEY (`no_perusahaan`) REFERENCES `kantor_pusat` (`no_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kepunyaan`
--
ALTER TABLE `data_kepunyaan`
  ADD CONSTRAINT `data_kepunyaan_ibfk_1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_kepunyaan_ibfk_2` FOREIGN KEY (`kode_tujuan`) REFERENCES `tiket_tujuan` (`kode_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD CONSTRAINT `data_penjualan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `calon_penumpang` (`id_penumpang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_penjualan_ibfk_2` FOREIGN KEY (`kode_tiket`) REFERENCES `tiket` (`kode_tiket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_penjualan_ibfk_3` FOREIGN KEY (`kode_tujuan`) REFERENCES `tiket_tujuan` (`kode_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`kode_tujuan`) REFERENCES `tiket_tujuan` (`kode_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
