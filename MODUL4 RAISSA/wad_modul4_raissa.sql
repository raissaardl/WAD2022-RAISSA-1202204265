-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Generation Time: Nov 27, 2022 at 08:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_raissa_table`
--

INSERT INTO `showroom_raissa_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(0, 'Audi', 'Raissa_1202204265', 'Audi', '2022-06-10', 'Mobil mewah untuk 2 pintu ', 'audi.png', 'Lunas'),
(0, 'porsche','Raissa_1202204265', 'porsche', '2022-04-11', 'Mobil mewah 2 pintu', 'porsche.jpg', 'Lunas'),
(0, 'mercy', 'Raissa_1202204265', 'mercy', '2022-05-08', 'Mobil keluarga mewah ', 'mercy.png', 'Lunas');


-- --------------------------------------------------------

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

--
-- Dumping data for table `user_raissa`
--

INSERT INTO `user_raissa` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Raissa Ardelia', 'raissaardelia5gmail.com', '12345678', '081344590489'),
(2, 'raissa', 'raissaardelia5@gmail.com', '12345678', '081344590489');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
