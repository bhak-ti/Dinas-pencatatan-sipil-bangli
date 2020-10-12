-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 02:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kepadatan`
--

CREATE TABLE `kepadatan` (
  `provinsi` char(20) NOT NULL,
  `kabupaten` char(20) NOT NULL,
  `kodedagri` char(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepadatan`
--

INSERT INTO `kepadatan` (`provinsi`, `kabupaten`, `kodedagri`, `kecamatan`, `jml`) VALUES
('Jawa Tengah', 'Kota Semarang', '337401', 'Semarang Tengah', 2300),
('Jawa Tengah', 'Kota Semarang', '337402', 'Semarang Utara', 433),
('Jawa Tengah', 'Kota Semarang', '337403', 'Semarang Timur', 1002),
('Jawa Tengah', 'Kota Semarang', '337404', 'Gayam Sari', 1300),
('Jawa Tengah', 'Kota Semarang', '337405', 'Genuk', 750),
('Jawa Tengah', 'Kota Semarang', '337406', 'Pedurungan', 400),
('Jawa Tengah', 'Kota Semarang', '337407', 'Semarang Selatan', 2700),
('Jawa Tengah', 'Kota Semarang', '337408', 'Candisari', 300),
('Jawa Tengah', 'Kota Semarang', '337409', 'Gajah Mungkur', 450),
('Jawa Tengah', 'Kota Semarang', '337410', 'Tembalanag', 688),
('Jawa Tengah', 'Kota Semarang', '337411', 'Banyumanik', 1200),
('Jawa Tengah', 'Kota Semarang', '337412', 'Gunungpati', 360),
('Jawa Tengah', 'Kota Semarang', '337413', 'Semarang Barat', 800),
('Jawa Tengah', 'Kota Semarang', '337414', 'Mijen', 970),
('Jawa Tengah', 'Kota Semarang', '337415', 'Ngaliyan', 2356),
('Jawa Tengah', 'Kota Semarang', '337416', 'Tugu', 1020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kepadatan`
--
ALTER TABLE `kepadatan`
  ADD PRIMARY KEY (`kodedagri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
