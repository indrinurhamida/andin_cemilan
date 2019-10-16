-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 08:41 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siandin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `id_barangdetail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `stok`, `deskripsi`, `id_barangdetail`) VALUES
('BRG001', 'Makaroni', 20, 'Baru', 'DEB001'),
('BRG002', 'Bola-bola Cokelat', 20, 'fdxcvbn', 'DEB001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangdetail`
--

CREATE TABLE `tbl_barangdetail` (
  `id_barangdetail` varchar(20) NOT NULL,
  `nama_barangdetail` varchar(50) NOT NULL,
  `rasa` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barangdetail`
--

INSERT INTO `tbl_barangdetail` (`id_barangdetail`, `nama_barangdetail`, `rasa`, `berat`, `harga`) VALUES
('DEB001', 'Makaroni', 'Manis', '20 kg', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangkeluar`
--

CREATE TABLE `tbl_barangkeluar` (
  `id_barangkeluar` varchar(20) NOT NULL,
  `tgl_barangkeluar` date NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `total_barangkeluar` int(20) NOT NULL,
  `id_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangkeluardetail`
--

CREATE TABLE `tbl_barangkeluardetail` (
  `id_barangkeluardetail` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_barangkeluar` int(20) NOT NULL,
  `id_barangdetail` varchar(20) NOT NULL,
  `id_barangkeluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangmasuk`
--

CREATE TABLE `tbl_barangmasuk` (
  `id_barangmasuk` varchar(20) NOT NULL,
  `tgl_barangmasuk` date NOT NULL,
  `total_barangmasuk` int(20) NOT NULL,
  `id_supplier` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangmasukdetail`
--

CREATE TABLE `tbl_barangmasukdetail` (
  `id_barangmasukdetail` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_barangmasuk` int(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `id_barangmasuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` varchar(20) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` int(50) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `diskon` int(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksidetail`
--

CREATE TABLE `tbl_transaksidetail` (
  `id_transaksidetail` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(50) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_barangdetail` (`id_barangdetail`);

--
-- Indexes for table `tbl_barangdetail`
--
ALTER TABLE `tbl_barangdetail`
  ADD PRIMARY KEY (`id_barangdetail`);

--
-- Indexes for table `tbl_barangkeluar`
--
ALTER TABLE `tbl_barangkeluar`
  ADD PRIMARY KEY (`id_barangkeluar`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_barangkeluardetail`
--
ALTER TABLE `tbl_barangkeluardetail`
  ADD PRIMARY KEY (`id_barangkeluardetail`),
  ADD KEY `id_barangdetail` (`id_barangdetail`),
  ADD KEY `id_barangkeluar` (`id_barangkeluar`);

--
-- Indexes for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD PRIMARY KEY (`id_barangmasuk`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_barangmasukdetail`
--
ALTER TABLE `tbl_barangmasukdetail`
  ADD PRIMARY KEY (`id_barangmasukdetail`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_barangmasuk` (`id_barangmasuk`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD PRIMARY KEY (`id_transaksidetail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD CONSTRAINT `tbl_akun_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`id_barangdetail`) REFERENCES `tbl_barangdetail` (`id_barangdetail`);

--
-- Constraints for table `tbl_barangkeluar`
--
ALTER TABLE `tbl_barangkeluar`
  ADD CONSTRAINT `tbl_barangkeluar_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Constraints for table `tbl_barangkeluardetail`
--
ALTER TABLE `tbl_barangkeluardetail`
  ADD CONSTRAINT `tbl_barangkeluardetail_ibfk_1` FOREIGN KEY (`id_barangdetail`) REFERENCES `tbl_barangdetail` (`id_barangdetail`),
  ADD CONSTRAINT `tbl_barangkeluardetail_ibfk_2` FOREIGN KEY (`id_barangkeluar`) REFERENCES `tbl_barangkeluar` (`id_barangkeluar`);

--
-- Constraints for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id_supplier`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Constraints for table `tbl_barangmasukdetail`
--
ALTER TABLE `tbl_barangmasukdetail`
  ADD CONSTRAINT `tbl_barangmasukdetail_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_barangmasukdetail_ibfk_2` FOREIGN KEY (`id_barangmasuk`) REFERENCES `tbl_barangmasuk` (`id_barangmasuk`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Constraints for table `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD CONSTRAINT `tbl_transaksidetail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tbl_transaksidetail_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
