-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 04:19 PM
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
  `id_akun` char(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` enum('owner','kasir','gudang','') NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `username`, `password`, `jabatan`, `id_pegawai`) VALUES
('AKN001', 'owner', '579233b2c479241523cba5e3af55d0f50f2d6414', 'owner', 'PGW001'),
('AKN002', 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 'kasir', 'PGW002'),
('AKN003', 'gudang', 'a80dd043eb5b682b4148b9fc2b0feabb2c606fff', 'gudang', 'PGW003');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` char(8) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `rasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `rasa`) VALUES
('BRG003', 'bola-bola', 'coklat'),
('BRG004', 'bola bola ', 'asin'),
('BRG005', 'Makaron', 'Pedas'),
('BRG006', 'mie lidi', 'Pedas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangdetail`
--

CREATE TABLE `tbl_barangdetail` (
  `id_barangdetail` char(8) NOT NULL,
  `id_barang` char(8) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barangdetail`
--

INSERT INTO `tbl_barangdetail` (`id_barangdetail`, `id_barang`, `berat`, `harga`, `stok`) VALUES
('DEB003', 'BRG003', '100 g', 1000, 10),
('DEB004', 'BRG003', '50 g', 2000, 3),
('DEB005', 'BRG003', '50 g', 2000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangmasuk`
--

CREATE TABLE `tbl_barangmasuk` (
  `id_barangmasuk` char(8) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_supplier` char(8) NOT NULL,
  `id_barang` char(8) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `qty` int(7) NOT NULL,
  `harga_beli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barangmasuk`
--

INSERT INTO `tbl_barangmasuk` (`id_barangmasuk`, `tgl_masuk`, `id_supplier`, `id_barang`, `id_pegawai`, `berat`, `qty`, `harga_beli`) VALUES
('BRM002', '2019-11-23', 'SPL001', 'BRG003', 'PGW001', '50', 0, '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` char(8) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `point` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `email`, `alamat`, `no_hp`, `point`) VALUES
('MBR001', 'azizah', 'burhan@gmail.com', 'jember', '086567234566', 15),
('MBR002', 'munaroh', 'jihu@gmail.com', 'lamongan', '089765734234', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `akses` varchar(7) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `akses`, `no_hp`) VALUES
('PGW001', 'Regita', 'Situbondo', 'admin', '089765345567'),
('PGW002', 'Andin', 'Situbondo', 'kasir', '+6285607498613'),
('PGW003', 'Andi', 'Situbondo', 'gudang', '085791277247');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` char(8) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp`) VALUES
('SPL001', 'mintul dah', 'jombag', '089765778765'),
('SPL002', 'dika', 'jomban', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` char(8) NOT NULL,
  `id_member` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jumlah_bayar` varchar(10) NOT NULL,
  `kembalian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_member`, `tgl_transaksi`, `id_pegawai`, `qty`, `total`, `jumlah_bayar`, `kembalian`) VALUES
('TRK001', 'MBR001', '0000-00-00', 'PGW001', 0, 0, '15000', '3000'),
('TRK002', 'MBR001', '2020-01-12', 'PGW001', 0, 0, '20000', '2000'),
('TRK003', 'MBR001', '2020-01-12', 'PGW002', 0, 0, '6000', '0'),
('TRK004', 'MBR001', '2020-01-12', 'PGW002', 0, 0, '4000', '0'),
('TRK005', 'MBR001', '2020-01-13', 'PGW001', 0, 0, '6000', '0'),
('TRK006', 'MBR002', '2020-01-12', 'PGW003', 0, 0, '2000', '0'),
('TRK007', 'MBR001', '2020-01-12', 'PGW001', 1, 2000, '2000', '0'),
('TRK008', 'MBR001', '2020-01-12', 'PGW001', 1, 2000, '2000', '0'),
('TRK009', 'MBR001', '2020-01-12', 'PGW001', 1, 2000, '2000', '0'),
('TRK010', 'MBR001', '2020-01-12', 'PGW001', 20, 40000, '40000', '0'),
('TRK011', 'MBR001', '2020-01-12', 'PGW002', 2, 4000, '4000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksidetail`
--

CREATE TABLE `tbl_transaksidetail` (
  `id_transaksidetail` char(8) NOT NULL,
  `id_transaksi` char(8) NOT NULL,
  `id_barangdetail` char(8) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `subtotal` int(11) NOT NULL
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
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_barangdetail`
--
ALTER TABLE `tbl_barangdetail`
  ADD PRIMARY KEY (`id_barangdetail`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `id_barang_3` (`id_barang`),
  ADD KEY `id_barang_4` (`id_barang`);

--
-- Indexes for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD PRIMARY KEY (`id_barangmasuk`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

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
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD PRIMARY KEY (`id_transaksidetail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barangdetail` (`id_barangdetail`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD CONSTRAINT `tbl_akun_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Constraints for table `tbl_barangdetail`
--
ALTER TABLE `tbl_barangdetail`
  ADD CONSTRAINT `tbl_barangdetail_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id_supplier`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_4` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Constraints for table `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD CONSTRAINT `tbl_transaksidetail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tbl_transaksidetail_ibfk_2` FOREIGN KEY (`id_barangdetail`) REFERENCES `tbl_barangdetail` (`id_barangdetail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
