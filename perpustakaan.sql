-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2019 at 02:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nis` int(20) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jk` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nis`, `nama_anggota`, `jk`, `alamat`, `tempat_lahir`, `tanggal_lahir`) VALUES
(12161522, 'Ikrom Syakur', 'Laki-laki', 'sedayu', 'sedayu', '1997-12-12'),
(12161531, 'Rahma Sunita', 'Perempuan', 'Bengkulu', 'Bengkulu', '1995-01-30'),
(12161532, 'Rahmat Arifin', 'Laki-laki', 'Gunung kunci tirtohargo', '', '0000-00-00'),
(12161535, 'Rudi Setyawan', 'Laki-laki', 'Lampung', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `kode_kategori` text NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  `penerbit` varchar(99) NOT NULL,
  `isbn` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `pengarang`, `kode_kategori`, `tahun_terbit`, `penerbit`, `isbn`) VALUES
(1201191, 'King of hell', 'coy too sik', '3', '2005', 'Yoonko', '12-ada-34-4565'),
(1201193, 'cara memanjangkan rambut yang benar', 'j. marsudi', '2', '', '', ''),
(1920119, 'Titisan Cinta', 'Fredy S.', '2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(10) NOT NULL,
  `jenis_kategori` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `jenis_kategori`) VALUES
(1, 'Sejarah'),
(2, 'Fiksi'),
(3, 'Romance'),
(4, 'Demon');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`, `alamat`) VALUES
(1, 'admin', 'tugas', '0192023a7bbd73250516f069df18b500', 'admin', ''),
(121, 'sony', 'norh3m', 'c56cb0b654928b752a8694b9b51605f7', 'petugas', ''),
(12151423, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', ''),
(12161532, 'Rahmat', 'ksl1', '5f2f6d13a6ae65943ecccceaa237057f', 'petugas', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` int(99) NOT NULL,
  `nis` int(50) NOT NULL,
  `kode_buku` int(50) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_kembali` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `denda` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`, `denda`, `status`) VALUES
(131344, 12161522, 1201191, '2019-01-26 00:00:00', '2019-01-30 07:43:48', 0, 'kembali'),
(345543, 12161522, 1201191, '2019-01-26 06:43:13', '2019-01-26 07:35:24', 0, 'kembali'),
(454345, 12161532, 1201191, '2019-01-30 13:41:19', NULL, 0, 'pinjam'),
(656688, 12161532, 1201191, '2019-01-10 00:00:00', '2019-01-30 07:45:46', 13000, 'kembali'),
(1221211, 12161535, 1201191, '2019-01-01 00:00:00', '2019-01-26 07:34:34', 18000, 'kembali'),
(1233321, 12161532, 1201193, '2019-01-26 06:21:16', '2019-01-26 07:35:13', 0, 'kembali'),
(45455544, 12161532, 1201191, '2019-01-11 07:31:44', '2019-01-30 04:43:02', 12000, 'kembali'),
(121233322, 12161532, 1201193, '2019-01-29 03:52:06', '2019-01-30 07:34:32', 0, 'kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12161533;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
