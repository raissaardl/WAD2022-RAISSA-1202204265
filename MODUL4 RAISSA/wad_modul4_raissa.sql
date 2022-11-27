-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2022 at 10:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_raissa`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_raissa_table`
--

CREATE TABLE `showroom_raissa_table` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_raissa_table`
--

INSERT INTO `showroom_raissa_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(2, 'Audi', 'Raissa_1202204265', 'Audi', '2022-06-10', 'Mobil mewah untuk 2 pintu ', 'audi.png', 'Lunas'),
(3, 'porsche','Raissa_1202204265', 'porsche', '2022-04-11', 'Mobil mewah 2 pintu', 'porsche.jpg', 'Lunas'),
(4, 'mercy', 'Raissa_1202204265', 'mercy', '2022-05-08', 'Mobil keluarga mewah ', 'mercy.png', 'Lunas');


--
-- Indexes for dumped tables
--
-- Table structure for table `user_raissa`
--

CREATE TABLE `user_raissa` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

-- Dumping data for table `user_raissa`
--

INSERT INTO `user_raissa` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Raissa Ardelia', 'raissaardelia5gmail.com', '12345678', '081344590489'),
(2, 'raissa', 'raissaardelia5@gmail.com', '12345678', '081344590489');

--
-- Indexes for table `showroom_raissa_table`
--
ALTER TABLE `showroom_raissa_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables

-- Indexes for table `user_raissa`

ALTER TABLE `user_raissa`
    ADD PRIMARY KEY (`id`,`email`);
-- AUTO_INCREMENT for table `user_raissa`
--
ALTER TABLE `user_raissa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `showroom_raissa_table`
--
ALTER TABLE `showroom_raissa_table`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;