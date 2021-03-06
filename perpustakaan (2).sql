-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 05:40 AM
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
  `denda` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nis`, `nama_anggota`, `jk`, `alamat`, `denda`) VALUES
(124343, 'rudi setyawan', 'Laki-laki', 'ngaglik sleman', 0),
(231123, 'santo nur fadillah hanif', 'Laki-laki', 'sidomulyo, bambang, bantul', 0),
(12161522, 'Ikrom Syakur', 'Laki-laki', 'sedayu', 0),
(12161532, 'Rahmat Arifin', 'Laki-laki', 'Gunung kunci tirtohargo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `kode_kategori` text NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `pengarang`, `description`, `gambar`, `kode_kategori`, `jumlah`) VALUES
(121768, 'Anjing yang terlupakan', 'wuri', 'cerita fabel', 'default.jpg', '2', 1),
(1201191, 'King of hell', 'coy too sik', 'komik korea', 'default.jpg', '3', 2),
(1201193, 'cara memanjangkan rambut yang benar', 'j. marsudi', 'asaaa', 'default.jpg', '2', 1),
(1920119, 'Titisan Cinta', 'Fredy S.', 'Novel remaja tentang percintaan', 'default.jpg', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(10) NOT NULL,
  `kategori` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `kategori`) VALUES
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
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
(1, 'admin', 'tugas', '0192023a7bbd73250516f069df18b500', 'admin'),
(121, 'sony', 'norh3m', 'c56cb0b654928b752a8694b9b51605f7', 'petugas'),
(1233246, 'Rahmat Arifin', 'remaja', 'a115a602f6c92634fb5fc30a2caffd55', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(99) NOT NULL,
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

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`, `denda`, `status`) VALUES
(45331, 12161532, 121768, '2019-01-13 09:18:01', NULL, 0, 'pinjam'),
(121311, 124343, 1201192, '2019-01-12 12:00:00', '2019-01-13 08:20:07', 0, 'kembali'),
(233122, 231123, 1920119, '2019-01-12 04:58:45', NULL, 0, 'pinjam'),
(345543, 12161522, 1201193, '2019-01-12 00:00:00', NULL, 0, 'pinjam'),
(453321, 12161532, 1201191, '2019-01-12 00:00:00', '2019-01-13 07:10:44', 0, 'kembali'),
(12123111, 124343, 1201192, '2019-01-12 00:00:00', '2019-01-21 00:00:00', 0, '');

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
  ADD PRIMARY KEY (`id_transaksi`);

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
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1233247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
