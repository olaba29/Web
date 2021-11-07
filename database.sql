-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 07, 2021 at 09:49 PM
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
-- Table structure for table `erabiltzaile`
--

CREATE TABLE `erabiltzaile` (
  `erabIz` varchar(30) NOT NULL,
  `pasahitza` varchar(30) NOT NULL,
  `izena` varchar(30) NOT NULL,
  `abizena` varchar(30) NOT NULL,
  `telefonoa` int(11) NOT NULL,
  `nan` varchar(9) NOT NULL,
  `jaioData` varchar(10) NOT NULL,
  `emaila` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erabiltzaile`
--

INSERT INTO `erabiltzaile` (`erabIz`, `pasahitza`, `izena`, `abizena`, `telefonoa`, `nan`, `jaioData`, `emaila`) VALUES
('martintxo', 'esku', 'Martin', 'Amezola', 678567832, '76545675J', '2001/07/12', 'martin@gmail.com'),
('olaba', 'mano', 'Andoni', 'Olabarria', 678567832, '76545675J', '2001/07/12', 'andoni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `liburu`
--

CREATE TABLE `liburu` (
  `libIz` varchar(30) NOT NULL,
  `egileIz` varchar(30) NOT NULL,
  `egileAb` varchar(30) NOT NULL,
  `publikazioUrte` int(10) NOT NULL,
  `orriak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liburu`
--

INSERT INTO `liburu` (`libIz`, `egileIz`, `egileAb`, `publikazioUrte`, `orriak`) VALUES
('El Imperio Final', 'Brandon', 'Sanderson', 2005, 500),
('Metamorfosia', 'Franz', 'Kafka', 1916, 200),
('Mikela Igela', 'Unknown', 'Unknown', 2010, 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erabiltzaile`
--
ALTER TABLE `erabiltzaile`
  ADD PRIMARY KEY (`erabIz`),
  ADD UNIQUE KEY `erabIz` (`erabIz`,`nan`);

--
-- Indexes for table `liburu`
--
ALTER TABLE `liburu`
  ADD PRIMARY KEY (`libIz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
