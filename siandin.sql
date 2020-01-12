-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jan 2020 pada 23.56
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
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` char(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` enum('owner','kasir','gudang','') NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `username`, `password`, `jabatan`, `id_pegawai`) VALUES
('AKN001', 'owner', '579233b2c479241523cba5e3af55d0f50f2d6414', 'owner', 'PGW001'),
('AKN002', 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 'kasir', 'PGW002'),
('AKN003', 'gudang', 'a80dd043eb5b682b4148b9fc2b0feabb2c606fff', 'gudang', 'PGW003');

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
('BRG001', 'makaroni pipa', 'super pedas'),
('BRG002', 'makaroni pipa', 'pedas biasa'),
('BRG003', 'makaroni pipa', 'jagung manis'),
('BRG004', 'makaroni pipa', 'jagung manis pedas'),
('BRG005', 'makaroni pipa', 'balado'),
('BRG006', 'makaroni pipa', 'ayam bakar'),
('BRG007', 'makaroni pipa', 'lada hitam'),
('BRG008', 'makaroni pipa', 'lada hitam pedas'),
('BRG009', 'makaroni pipa', 'barbeque'),
('BRG010', 'makaroni pipa', 'rumput laut'),
('BRG011', 'makaroni pipa', 'keju asin'),
('BRG012', 'makaroni spiral', 'super pedas'),
('BRG013', 'makaroni spiral', 'balado'),
('BRG014', 'makaroni spiral', 'barbeque'),
('BRG015', 'mie lidi', 'super pedas'),
('BRG016', 'mie lidi', 'jagung manis'),
('BRG017', 'mie lidi', 'jagung manis pedas'),
('BRG018', 'mie lidi', 'jagung bakar'),
('BRG019', 'mie lidi', 'jagung bakar pedas'),
('BRG020', 'mie lidi', 'sapi panggang'),
('BRG021', 'mie lidi', 'sapi panggang pedas'),
('BRG022', 'mie lidi', 'asin'),
('BRG023', 'mie lidi', 'cabe ijo'),
('BRG024', 'mie lidi', 'coklat'),
('BRG025', 'mie lidi', 'balado'),
('BRG026', 'mie lidi', 'balado pedas'),
('BRG027', 'mie lidi', 'keju'),
('BRG028', 'mie lidi', 'keju bakar'),
('BRG029', 'mie lidi', 'ayam bakar'),
('BRG030', 'mie lidi', 'ayam bawang'),
('BRG031', 'mie lidi', 'ayam bawang pedas'),
('BRG032', 'molring', 'asin'),
('BRG033', 'molring', 'pedas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barangdetail`
--

CREATE TABLE `tbl_barangdetail` (
  `id_barangdetail` char(8) NOT NULL,
  `id_barang` char(8) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barangdetail`
--

INSERT INTO `tbl_barangdetail` (`id_barangdetail`, `id_barang`, `berat`, `harga`, `stok`) VALUES
('DEB001', 'BRG001', '50 g', 2000, 40),
('DEB002', 'BRG001', '500 g', 18000, 30),
('DEB003', 'BRG001', '1000 g', 33000, 10),
('DEB004', 'BRG002', '50 g', 2000, 45),
('DEB005', 'BRG002', '500 g', 18000, 10),
('DEB006', 'BRG002', '1000 g', 33000, 15),
('DEB007', 'BRG003', '50g', 2000, 80),
('DEB008', 'BRG003', '500 g', 18000, 10),
('DEB009', 'BRG012', '50g', 2000, 60),
('DEB010', 'BRG013', '50g', 2000, 40),
('DEB011', 'BRG014', '500 g', 18000, 30),
('DEB012', 'BRG015', '1000 g', 33000, 20),
('DEB013', 'BRG016', '50g', 2000, 20),
('DEB014', 'BRG017', '500 g', 18000, 50),
('DEB015', 'BRG018', '50g', 2000, 30),
('DEB016', 'BRG019', '50g', 2000, 50),
('DEB017', 'BRG020', '500 g', 18000, 20),
('DEB018', 'BRG021', '50g', 2000, 30),
('DEB019', 'BRG022', '1000 g', 33000, 10),
('DEB020', 'BRG023', '500 g', 18000, 10),
('DEB021', 'BRG024', '50g', 2000, 50),
('DEB022', 'BRG025', '500 g', 18000, 20),
('DEB023', 'BRG026', '1000 g', 33000, 20),
('DEB024', 'BRG027', '50g', 2000, 100),
('DEB025', 'BRG028', '50g', 2000, 30),
('DEB026', 'BRG029', '500 g', 18000, 20),
('DEB027', 'BRG030', '500 g', 18000, 10),
('DEB028', 'BRG030', '50g', 2000, 100),
('DEB029', 'BRG031', '50g', 2000, 100),
('DEB030', 'BRG032', '500 g', 18000, 30),
('DEB031', 'BRG033', '50g', 2000, 50);

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
  `qty` int(7) NOT NULL,
  `harga_beli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barangmasuk`
--

INSERT INTO `tbl_barangmasuk` (`id_barangmasuk`, `tgl_masuk`, `id_supplier`, `id_barang`, `id_pegawai`, `berat`, `qty`, `harga_beli`) VALUES
('BRM001', '2019-12-29', 'SPL003', 'BRG015', 'PGW003', '2', 5, '65000'),
('BRM002', '2019-12-16', 'SPL005', 'BRG013', 'PGW003', '2', 5, '65000'),
('BRM003', '0000-00-00', 'SPL002', 'BRG032', 'PGW003', '2', 6, '70000'),
('BRM004', '2019-12-28', 'SPL004', 'BRG003', 'PGW003', '2', 6, '70000');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `akses` varchar(7) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `akses`, `no_hp`) VALUES
('PGW001', 'Regita', 'Situbondo', 'admin', '089765345567'),
('PGW002', 'Andin', 'Situbondo', 'kasir', '+6285607498613'),
('PGW003', 'Andi', 'Situbondo', 'gudang', '085791277247');

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
('SPL001', 'nina', 'bondowoso', '082257433552'),
('SPL002', 'Waroeng Camilan SBY', 'Surabaya', '087852859762'),
('SPL003', 'Tobat Surabaya Sidoarjo', 'sidoarjo', '082230830446'),
('SPL004', 'selamet camilan', 'Jl.moch seruji, besuki, kec.situbondo', '086336208329'),
('SPL005', 'Cahaya Snack', 'Bataan, Jember', '085105190005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksidetail`
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
  ADD CONSTRAINT `tbl_barangdetail_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id_supplier`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tbl_barangmasuk_ibfk_4` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

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
