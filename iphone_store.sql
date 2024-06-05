-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iphone_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pemesan`
--

CREATE TABLE `daftar_pemesan` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nomor` varchar(64) NOT NULL,
  `alamat` varchar(5000) NOT NULL,
  `kode_pos` varchar(16) NOT NULL,
  `ongkir` varchar(24) NOT NULL,
  `nama_barang` varchar(10000) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pemesan`
--

INSERT INTO `daftar_pemesan` (`id`, `date`, `nama`, `email`, `nomor`, `alamat`, `kode_pos`, `ongkir`, `nama_barang`, `jumlah_barang`, `total_harga`) VALUES
(13, '2024-05-08', 'abid falih', 'eshrege@gmail.com', '08232287757', 'uvhvhhjhvhgc', '35625', 'Reguler( 11.000 )', 'iPhone 11 Series,iwatch Series Ultra', 2, 12),
(22, '2024-05-22', 'abidd', 'fbesrfb@gmail.com', '08785073027', 'bdfgdsgres', '471147', 'Reguler( 11.000 )', 'iPhone 14 Series,iPhone 11 Series', 2, 20),
(29, '2024-05-22', 'qewf', 'fbesrfb@gmail.com', '068965734534', 'fyhjtfhrtfh', '471147', 'Reguler( 11.000 )', 'iPhone 14 Series', 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pemesan`
--
ALTER TABLE `daftar_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pemesan`
--
ALTER TABLE `daftar_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
