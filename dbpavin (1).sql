-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2018 at 05:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpavin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_beton`
--

CREATE TABLE `tm_beton` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_beton`
--

INSERT INTO `tm_beton` (`id_pavin`, `tebal`, `harga`, `isi`) VALUES
(2, '7', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tm_beton_belah`
--

CREATE TABLE `tm_beton_belah` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_cacing`
--

CREATE TABLE `tm_cacing` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_fullpave`
--

CREATE TABLE `tm_fullpave` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_pavin`
--

CREATE TABLE `tm_pavin` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_segienam`
--

CREATE TABLE `tm_segienam` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_trihex`
--

CREATE TABLE `tm_trihex` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_user`
--

CREATE TABLE `tm_user` (
  `id_user` int(3) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tm_user`
--

INSERT INTO `tm_user` (`id_user`, `nama`, `username`, `password`, `last_login`) VALUES
(001, 'sinar baru', 'admin', '$2y$12$4V/dg9OnPk2eMWrf0175QuC12.5Yvtqu9knKwyLq7s4jRfgMWkzC.', '2018-03-22 04:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `tm_uskup`
--

CREATE TABLE `tm_uskup` (
  `id_pavin` int(5) NOT NULL,
  `tebal` varchar(32) DEFAULT NULL,
  `harga` varchar(64) DEFAULT NULL,
  `isi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tm_beton`
--
ALTER TABLE `tm_beton`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_beton_belah`
--
ALTER TABLE `tm_beton_belah`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_cacing`
--
ALTER TABLE `tm_cacing`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_fullpave`
--
ALTER TABLE `tm_fullpave`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_pavin`
--
ALTER TABLE `tm_pavin`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_segienam`
--
ALTER TABLE `tm_segienam`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_trihex`
--
ALTER TABLE `tm_trihex`
  ADD PRIMARY KEY (`id_pavin`);

--
-- Indexes for table `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tm_uskup`
--
ALTER TABLE `tm_uskup`
  ADD PRIMARY KEY (`id_pavin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_beton`
--
ALTER TABLE `tm_beton`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_beton_belah`
--
ALTER TABLE `tm_beton_belah`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_cacing`
--
ALTER TABLE `tm_cacing`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_fullpave`
--
ALTER TABLE `tm_fullpave`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_pavin`
--
ALTER TABLE `tm_pavin`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_segienam`
--
ALTER TABLE `tm_segienam`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_trihex`
--
ALTER TABLE `tm_trihex`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_user`
--
ALTER TABLE `tm_user`
  MODIFY `id_user` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_uskup`
--
ALTER TABLE `tm_uskup`
  MODIFY `id_pavin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
