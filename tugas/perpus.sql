-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 04:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_anggota`
--

CREATE TABLE `db_anggota` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `meminjam` varchar(70) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `aksi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_anggota`
--

INSERT INTO `db_anggota` (`id`, `nama`, `meminjam`, `jurusan`, `aksi`) VALUES
(1611010001, 'adit', 'kecerdasan', 'akutansi', 0),
(1611010020, 'pras', 'mtk', 'manajamen', 0),
(1611010081, 'jarwo', 'database', 'informatika', 0),
(1611102008, 'maya', 'logika', 'akutansi', 0),
(1612010019, 'madun', 'database', 'informatika', 0),
(1612010081, 'prasetya', 'manajemen pemasaran', 'manajamen', 0),
(1711010034, 'rizky', 'kewarganegaraan', 'manajamen', 0),
(1711010089, 'bimas', 'logika', 'akutansi', 0),
(1711010091, 'bagus ', 'aljabar', 'informatika', 0),
(1715010089, 'ika', 'algoritma', 'sistem informasi', 0),
(1811010030, 'putra', 'logika', 'akutansi', 0),
(1811010043, 'febri', 'hak paten', 'akutansi', 0),
(1811010063, 'agil', 'kewarganegaraan', 'informatika', 0),
(1811010081, 'bagus', 'mobile computing', 'dkv', 0),
(1811010083, 'bagus', 'kecerdasan', 'informatika', 0),
(1811010099, 'arya', 'bahasa', 'dkv', 0),
(1812010083, 'roby', 'manajemen keuangan', 'manajamen', 0),
(1815010079, 'iyon', 'kalkulus', 'akutansi', 0),
(1911010081, 'bejo', 'multimedia', 'multimedia', 0),
(1911010089, 'putri', 'aljabar', 'dkv', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_buku`
--

CREATE TABLE `db_buku` (
  `kode` int(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `isbn` int(30) NOT NULL,
  `jumblah_buku` int(30) NOT NULL,
  `aksi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_buku`
--

INSERT INTO `db_buku` (`kode`, `judul`, `pengarang`, `penerbit`, `isbn`, `jumblah_buku`, `aksi`) VALUES
(1111, 'mobile computing', 'bima', 'safitri', 1998, 28, 0),
(2020, 'kecerdasan', 'santoso', 'erik', 2111, 51, 0),
(2043, 'manajemen keuangan', 'reva', 'putra', 2910, 32, 0),
(2108, 'kalkulus', 'indah', 'susi', 2901, 59, 0),
(2123, 'mtk', 'indah', 'susi', 2008, 32, 0),
(2322, 'kalkulus', 'indah', 'bono', 2000, 45, 0),
(2323, 'multimedia', 'putra', 'rajasa', 2001, 9, 0),
(2324, 'bahasa', 'bejo', 'budi', 2002, 53, 0),
(2325, 'database', 'suparjo', 'sumarwan', 2013, 40, 0),
(2326, 'aljabar', 'anton', 'iwan', 2004, 9, 0),
(2327, 'kewarganegaraan', 'sari', 'rizky', 2075, 44, 0),
(2328, 'logika', 'putri', 'putra', 2006, 10, 0),
(2329, 'statistika', 'riki', 'riko', 2007, 5, 0),
(2401, 'algoritma', 'bagus', 'suparjo', 2089, 53, 0),
(2403, 'manajemen pemasaran', 'indah', 'santi', 2080, 40, 0),
(2918, 'hak paten', 'sari', 'rizky', 2188, 78, 0),
(2919, 'pancasila', 'sari', 'bono', 2919, 422, 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_transaksi`
--

CREATE TABLE `db_transaksi` (
  `isbn` int(40) NOT NULL,
  `id` int(49) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_pinjam` varchar(40) NOT NULL,
  `tgl_kembali` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `aksi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_transaksi`
--

INSERT INTO `db_transaksi` (`isbn`, `id`, `judul`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `aksi`) VALUES
(0, 0, '', '', '', '', '', ''),
(1998, 1811010081, 'mobile computing', 'bagus', '30-01-2020', '06-02-2020', 'pinjam', ''),
(2001, 1911010081, 'multimedia', 'bejo', '31-01-2020', '07-02-2020', 'pinjam', ''),
(2002, 1811010099, 'bahasa', 'arya', '22-01-2019', '29-01-2020', 'pinjam', ''),
(2003, 1611010081, 'database', 'jarwo', '28-01-2020', '04-02-2020', 'pengembalian', ''),
(2004, 1711010091, 'aljabar', 'bagus', '31-01-2020', '07-02-2020', 'pinjam', ''),
(2005, 1811010063, 'kewarganegaraan', 'agil', '24-01-2020', '31-01-2020', 'pinjam', ''),
(2006, 1715010089, 'logika', 'bimas', '29-01-2020', '05-02-2020', 'pengembalian', ''),
(2008, 1611010020, 'mtk', 'pras', '23-01-2020', '30-01-2020', 'pinjam', ''),
(2013, 1612010019, 'database', 'madun', '28-01-2020', '05-02-2020', 'pinjam', ''),
(2075, 1711010034, 'kewarganegaraan', 'rizky', '27-01-2020', '04-02-2020', 'pinjam', ''),
(2078, 1612010081, 'manajemen pemasaran', 'pras', '23-01-2020', '30-01-2020', 'pengembalian', ''),
(2111, 1611010001, 'kecerdasan', 'adit', '28-01-2020', '05-02-2020', 'pinjam', ''),
(2901, 1815010079, 'kalkulus', 'iyon', '29-01-2020', '05-02-2020', 'pinjam', ''),
(2910, 1812010083, 'manajemen keuangan', 'roby', '28-01-2020', '04-02-2020', 'pinjam', ''),
(2918, 1811010043, 'hak paten', 'febri', '28-01-2020', '05-02-2020', 'pinjam', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` int(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `password`, `username`) VALUES
(123, 'bagus', 123, 'bagus'),
(1233, 'bimol', 123, 'bimo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_anggota`
--
ALTER TABLE `db_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_buku`
--
ALTER TABLE `db_buku`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indexes for table `db_transaksi`
--
ALTER TABLE `db_transaksi`
  ADD PRIMARY KEY (`isbn`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
