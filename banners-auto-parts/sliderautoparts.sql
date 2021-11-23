-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2021 at 06:27 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `sliderautoparts`
--

DROP TABLE IF EXISTS `sliderautoparts`;
CREATE TABLE IF NOT EXISTS `sliderautoparts` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `noticia` varchar(450) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sliderautoparts`
--

INSERT INTO `sliderautoparts` (`id_slider`, `titulo`, `imagen`, `noticia`, `link`, `orden`, `estado`) VALUES
(12, 'anuncia tu Auto parts', 'anuncia-tu-auto-parts.jpg', 'anuncia tu dealers', '../formulario/formulario.php', 1, 1),
(15, 'auto parts anunciate aqui', 'anuncia-tu-auto-parts-rojo.jpg', 'auto parts anunciate aquÃ­', '../formulario/formulario.php', 2, 1),
(16, 'anuncia tu auto parts', 'anuncia-tu-auto-parts-verde.jpg', 'Anuncia tu auto parts', '../formulario/formulario.php', 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
