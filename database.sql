-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Dec 19, 2021 at 12:33 PM
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
  `pasahitza` varchar(255) NOT NULL,
  `izena` varchar(30) NOT NULL,
  `abizena` varchar(30) NOT NULL,
  `telefonoa` int(11) NOT NULL,
  `nan` varchar(9) NOT NULL,
  `jaioData` varchar(10) NOT NULL,
  `emaila` varchar(30) NOT NULL,
  `bankuZenb` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erabiltzaile`
--

INSERT INTO `erabiltzaile` (`erabIz`, `pasahitza`, `izena`, `abizena`, `telefonoa`, `nan`, `jaioData`, `emaila`, `bankuZenb`) VALUES
('gonAlo2000', '$2y$10$fP7/NQg2EwWJi/pnvMKHdew859v10ep3MHU10jPwtuASHYLO4OWmS', 'Unai', 'Gonzalez', 692407503, '45673912Y', '2000/05/06', 'unai@gmail.com', NULL),
('mamezola01', '$2y$10$2.VnOEBraq2HOMCs79W/F.VaSEqmod9.XgPV8Po0jaeEsabirVBhK', 'Martin', 'Amezola', 689505097, '79135423J', '2000/06/04', 'martin@gmail.com', NULL),
('olabarria02', '$2y$10$ycIJG.BLywKmH5Cf5W5SXeJMIQklYIkkKx4/xYr9lzpiQRRT.eqCG', 'Andoni', 'Olabarria', 676787526, '79455561Z', '2001/07/12', 'andoni@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `liburu`
--

CREATE TABLE `liburu` (
  `libIz` varchar(60) NOT NULL,
  `egileIz` varchar(30) NOT NULL,
  `egileAb` varchar(30) NOT NULL,
  `publikazioUrte` int(10) NOT NULL,
  `orriak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liburu`
--

INSERT INTO `liburu` (`libIz`, `egileIz`, `egileAb`, `publikazioUrte`, `orriak`) VALUES
('Confía en la gracia', 'Olvido', 'García', 2020, 366),
('El hijo del chófer', 'Jordi', 'Amat', 2020, 122),
('El Imperio Final', 'Brandon', 'Sanderson', 2005, 500),
('La madre de Frankenstein', 'Almudena', 'Grandes', 2020, 100),
('Los Europeos', 'Orlando', 'Figes', 2020, 360),
('Metamorfosia', 'Franz', 'Kafka', 1916, 200),
('Mikela Igela', 'Unknown', 'Unknown', 2010, 45),
('Un Amor', 'Sara', 'Mesa', 2020, 245);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `erabIzena` varchar(30) NOT NULL,
  `saiakeraOrdua` datetime NOT NULL,
  `arrakastatsua` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`erabIzena`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
