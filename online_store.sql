-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 03:33 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian_produk`
--

CREATE TABLE `detail_pembelian_produk` (
  `id_detail_pembelian_produk` int(11) NOT NULL,
  `id_pembelian_produk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian_produk`
--

INSERT INTO `detail_pembelian_produk` (`id_detail_pembelian_produk`, `id_pembelian_produk`, `id_produk`, `qty`) VALUES
(19, 15, 7, 1),
(20, 16, 11, 2),
(21, 17, 12, 3),
(44, 35, 7, 1),
(45, 35, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`) VALUES
(1, 'Neilsya', 'Tulungagung', '085806752070'),
(2, 'Maulidatul ', 'Malang', '082334556729'),
(6, 'NeilsyaAMH', 'Blitar', '081334789001');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_petugas`, `tanggal_beli`) VALUES
(15, 8, '2021-10-21'),
(16, 8, '2021-10-21'),
(17, 8, '2021-10-21'),
(35, 8, '2021-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
(1, 'Rini', 'PetugasRini', 'b86872751de1e13c142d050acfd09842', 'Bawah'),
(2, 'Santi', 'PetugasSanti', 'ae1d4b431ead52e5ee1788010e8ec110', 'Menengah'),
(8, 'Neilsya Amstrani', 'PetugasNeilsya', '666b85b83cdf84cdc0d55820cb44bbc4', 'Atas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `harga` int(11) DEFAULT NULL,
  `foto_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES
(7, 'Blouse Wanita', 'Ini Blouse Wanita', 75000, 'Baju1.jpg'),
(8, 'Sweater Wanita', 'Ini Sweater Wanita', 55000, 'Baju4.jpg'),
(11, 'Over All', 'Ini Over All', 95000, 'Baju2.jpg'),
(12, 'Blouse Panjang', 'Ini Bouse', 115000, 'Baju5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembelian_produk`
--
ALTER TABLE `detail_pembelian_produk`
  ADD PRIMARY KEY (`id_detail_pembelian_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembelian_produk`
--
ALTER TABLE `detail_pembelian_produk`
  MODIFY `id_detail_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
