-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2020 at 09:27 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u317430902_todoauto`
--

-- --------------------------------------------------------

--
-- Table structure for table `autoparts`
--

DROP TABLE IF EXISTS `accesorios`;
CREATE TABLE IF NOT EXISTS `accesorios` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `noticia` varchar(450) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `autoparts`
--

INSERT INTO `accesorios` (`id_slider`, `titulo`, `imagen`, `noticia`, `link`, `orden`, `estado`) VALUES
(18, 'Auto Parts Anuncio', 'auto-patrs-anuncia-rojo.jpg', 'Auto Parts Anuncio', 'auto-parts.php', 2, 1),
(21, 'Auto Parts', 'auto-patrs2.jpg', 'Auto Parts', 'auto-parts.php', 1, 1),
(19, 'Auto Parts', 'auto-patrs.jpg', 'Auto Parts', 'auto-parts.php', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
