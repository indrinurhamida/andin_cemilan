-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jan 2020 pada 20.13
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.34

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
-- Struktur dari tabel `costemer`
--

CREATE TABLE `costemer` (
  `costeme_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` char(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `username`, `password`, `jabatan`, `id_pegawai`) VALUES
('1', 'admin', 'admin', 'admin', 'PGW001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` char(8) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `rasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `rasa`) VALUES
('BRG001', 'Makaroni', 'asin'),
('BRG002', 'mie lidi', 'pedes'),
('BRG003', 'bola-bola', 'coklat'),
('BRG004', 'bola bola ', 'asin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barangdetail`
--

CREATE TABLE `tbl_barangdetail` (
  `id_barangdetail` char(8) NOT NULL,
  `id_barang` char(8) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barangdetail`
--

INSERT INTO `tbl_barangdetail` (`id_barangdetail`, `id_barang`, `berat`, `harga`, `stok`) VALUES
('DEB001', 'BRG001', '100 g', '2000', '30'),
('DEB002', 'BRG002', '200', '3000', '40'),
('DEB003', 'BRG003', '100 g', '1000', '10'),
('DEB004', 'BRG003', '50 g', '2000', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barangmasuk`
--

CREATE TABLE `tbl_barangmasuk` (
  `id_barangmasuk` char(8) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_supplier` char(8) NOT NULL,
  `id_barang` char(8) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `harga_beli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barangmasuk`
--

INSERT INTO `tbl_barangmasuk` (`id_barangmasuk`, `tgl_masuk`, `id_supplier`, `id_barang`, `id_pegawai`, `berat`, `harga_beli`) VALUES
('BRM001', '2019-11-14', 'SPL001', 'BRG002', 'PGW001', '50', '1000'),
('BRM002', '2019-11-23', 'SPL001', 'BRG003', 'PGW001', '50', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barangmasukdetail`
--

CREATE TABLE `tbl_barangmasukdetail` (
  `id_barangmasukdetail` char(8) NOT NULL,
  `id_barangdetail` char(8) NOT NULL,
  `id_barangmasuk` char(8) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
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
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `email`, `alamat`, `no_hp`, `point`) VALUES
('MBR001', 'azizah', 'burhan@gmail.com', 'jember', '086567234566', 6),
('MBR002', 'munaroh', 'jihu@gmail.com', 'lamongan', '089765734234', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `email`, `no_hp`) VALUES
('PGW001', 'murdin dah', 'jember', 'murdin@gmail.com', '089765345567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` char(8) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp`) VALUES
('SPL001', 'mintul dah', 'jombag', '089765778765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` char(8) NOT NULL,
  `id_member` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(10) NOT NULL,
  `kembalian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_member`, `tgl_transaksi`, `id_pegawai`, `jumlah_bayar`, `kembalian`) VALUES
('TRK001', 'MBR001', '0000-00-00', 'PGW001', '15000', '3000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksidetail`
--

CREATE TABLE `tbl_transaksidetail` (
  `id_transaksidetail` char(8) NOT NULL,
  `id_transaksi` char(8) NOT NULL,
  `id_barangdetail` char(8) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costemer`
--
ALTER TABLE `costemer`
  ADD PRIMARY KEY (`costeme_id`);

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
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD PRIMARY KEY (`id_barangmasuk`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tbl_barangmasukdetail`
--
ALTER TABLE `tbl_barangmasukdetail`
  ADD PRIMARY KEY (`id_barangmasukdetail`),
  ADD KEY `id_barangdetail` (`id_barangdetail`),
  ADD KEY `id_barangmasuk` (`id_barangmasuk`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costemer`
--
ALTER TABLE `costemer`
  MODIFY `costeme_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD CONSTRAINT `tbl_akun_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `tbl_barangdetail`
--
ALTER TABLE `tbl_barangdetail`
  ADD CONSTRAINT `tbl_barangdetail_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id_supplier`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `tbl_barangmasukdetail`
--
ALTER TABLE `tbl_barangmasukdetail`
  ADD CONSTRAINT `tbl_barangmasukdetail_ibfk_1` FOREIGN KEY (`id_barangdetail`) REFERENCES `tbl_barangdetail` (`id_barangdetail`),
  ADD CONSTRAINT `tbl_barangmasukdetail_ibfk_2` FOREIGN KEY (`id_barangmasuk`) REFERENCES `tbl_barangmasuk` (`id_barangmasuk`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD CONSTRAINT `tbl_transaksidetail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tbl_transaksidetail_ibfk_2` FOREIGN KEY (`id_barangdetail`) REFERENCES `tbl_barangdetail` (`id_barangdetail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
