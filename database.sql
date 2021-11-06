-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 04-11-2021 a las 15:44:04
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

-- ----------------------------------------------1----------

--
-- Estructura de tabla para la tabla `erabiltzaile`
--

CREATE TABLE `erabiltzaile` (
  `erabIz` varchar(20) NOT NULL,
  `pasahitza` varchar(30) NOT NULL,
  `izena` varchar(20) NOT NULL,
  `abizena` varchar(20) NOT NULL,
  `telefonoa` int(11) NOT NULL,
  `nan` varchar(9) NOT NULL,
  `jaioData` varchar(10) NOT NULL,
  `emaila` varchar(30) NOT NULL
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
