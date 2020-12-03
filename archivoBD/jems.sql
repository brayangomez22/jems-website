-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 07:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jems`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `imagen` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `precio`, `fecha`) VALUES
(1, 'pc1', 'Nombre', 23, '2020-09-14 17:09:52'),
(2, 'pc2', 'Nombre', 30, '2020-09-14 17:09:52'),
(3, 'pc1', 'Nombre', 13, '2020-09-14 17:09:52'),
(4, 'pc2', 'Nombre', 33, '2020-09-14 17:09:52'),
(5, 'pc1', 'Nombre', 11, '2020-09-14 17:09:52'),
(6, 'pc2', 'Nombre', 43, '2020-09-14 17:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `icono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `texto` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id`, `icono`, `nombre`, `texto`, `fecha`) VALUES
(1, '1', 'Gastar dinero ', 'Realice un seguimiento de todos sus gastos diarios y haga que su día a día sea más fácil.', '2020-09-14 17:21:10'),
(2, '2', 'Presupuesto', 'Haga un presupuesto que se ajuste a sus necesidades y que pueda aprovecharlo al máximo.', '2020-09-14 16:58:07'),
(3, '3', 'Seguridad', 'Almacenamos toda la información de la tarjeta y el dinero seguro para que se relaje y se vuelva loco.', '2020-09-14 16:58:07'),
(4, '1', 'Gastar dinero', 'Realice un seguimiento de todos sus gastos diarios y haga que su día a día sea más fácil.', '2020-09-14 16:58:07'),
(5, '2', 'Presupuesto', 'Haga un presupuesto que se ajuste a sus necesidades y que pueda aprovecharlo al máximo.', '2020-09-14 16:58:07'),
(6, '3', 'Seguridad', 'Almacenamos toda la información de la tarjeta y el dinero seguro para que se relaje y se vuelva loco.', '2020-09-14 16:58:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
