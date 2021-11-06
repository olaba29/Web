-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 06, 2021 at 11:29 AM
-- Server version: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Erabiltzailea`
--

CREATE TABLE `Erabiltzailea` (
  `nickname` varchar(20) NOT NULL,
  `pasahitza` varchar(20) NOT NULL,
  `izena` varchar(20) NOT NULL,
  `abizena` varchar(20) NOT NULL,
  `telf` int(9) NOT NULL,
  `nan_zenb` varchar(9) NOT NULL,
  `jaiotze_data` varchar(10) NOT NULL,
  `emaila` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Erabiltzailea`
--

INSERT INTO `Erabiltzailea` (`nickname`, `pasahitza`, `izena`, `abizena`, `telf`, `nan_zenb`, `jaiotze_data`, `emaila`) VALUES
('martin', 'batbihiru', 'Martin', 'Amezola', 689667865, '70934565G', '06/04/2003', 'amezola77@ehu.eus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Erabiltzailea`
--
ALTER TABLE `Erabiltzailea`
  ADD PRIMARY KEY (`nickname`),
  ADD UNIQUE KEY `nickname` (`nickname`,`nan_zenb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
