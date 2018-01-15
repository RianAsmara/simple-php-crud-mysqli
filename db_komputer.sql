-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 02:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_komputer`
--

CREATE TABLE `tb_komputer` (
  `id` int(11) NOT NULL,
  `namaKomputer` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komputer`
--

INSERT INTO `tb_komputer` (`id`, `namaKomputer`, `merk`, `stok`, `harga`) VALUES
(1, 'ACER A72S', 'ACER', 8, 3200000),
(2, 'ASUS X200', 'ASUS', 5, 2900000),
(3, 'LENOVO GT', 'LENOVO', 7, 3150000),
(4, 'ACER ASPIRE ONE', 'ONE', 9, 2700000),
(5, 'ASUS X455', 'ASUS', 6, 3500000),
(8, 'Lenovo G405S', 'Lenovo', 2, 5000000),
(9, 'Samsung 77', 'Samsung CO', 5, 7000000),
(10, 'ACER A72S', 'ACER', 10, 3200000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_askes` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hak_askes`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(2, 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_komputer`
--
ALTER TABLE `tb_komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_komputer`
--
ALTER TABLE `tb_komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
