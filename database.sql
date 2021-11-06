-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 06-11-2021 a las 15:58:20
-- Versión del servidor: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaile`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irakurketa`
--

CREATE TABLE `irakurketa` (
  `irakurlea` varchar(30) NOT NULL,
  `liburua` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liburu`
--

CREATE TABLE `liburu` (
  `libIz` varchar(30) NOT NULL,
  `egileIz` varchar(30) NOT NULL,
  `egileAb` varchar(30) NOT NULL,
  `publikazioUrte` varchar(4) NOT NULL,
  `orriak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `erabiltzaile`
--
ALTER TABLE `erabiltzaile`
  ADD PRIMARY KEY (`erabIz`),
  ADD UNIQUE KEY `erabIz` (`erabIz`,`nan`);

--
-- Indices de la tabla `irakurketa`
--
ALTER TABLE `irakurketa`
  ADD PRIMARY KEY (`irakurlea`,`liburua`);

--
-- Indices de la tabla `liburu`
--
ALTER TABLE `liburu`
  ADD PRIMARY KEY (`libIz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
