-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2020 at 08:17 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo-auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `metodoPago` varchar(30) NOT NULL,
  `tipoAnuncio` varchar(200) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL,
  `nombreNegocio` varchar(500) NOT NULL,
  `pago` varchar(500) NOT NULL,
  `id_serv` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefonoCliente` varchar(500) NOT NULL,
  `telefonoNegocio` varchar(500) NOT NULL,
  `direccionNegocio` varchar(500) NOT NULL,
  `pueblo` varchar(500) NOT NULL,
  `serv_dom` varchar(500) NOT NULL,
  `intereses` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `metodoPago`, `tipoAnuncio`, `nombreCliente`, `nombreNegocio`, `pago`, `id_serv`, `email`, `telefonoCliente`, `telefonoNegocio`, `direccionNegocio`, `pueblo`, `serv_dom`, `intereses`) VALUES
(1, '', '', 'Auto Nuevo, Inc', 'Auto Nuevo, Inc', 'no', 'Dealers Autos', 'n/a', '787-786-7413', '454787885', 'Na', 'Bayamon', 'SI', 'Autos ,Nuevos'),
(2, '', '', 'Auto Sales', 'Auto Sales', 'no', 'Dealers Autos', 'na', '7873424726', ' 7873424726', 'na', 'Bayamon', 'NO', 'Autos ,Nuevos'),
(3, '', '', 'Auto Outlet', 'Auto Outlet', 'no', 'Accesorios', 'na', '787-963-1010', '787-963-1010', 'na', 'Bayamon', 'NO', 'Autos ,Nuevos'),
(4, '', '', 'Auto Bayamon', 'Auto Bayamon', 'no', 'Accesorios', 'N/a', '787-665-0356', '787-665-0356', 'N/a', 'Bayamon', 'NO', 'Autos ,Nuevos'),
(5, '', '', 'Auto Piezas Caribe', 'Auto Piezas Caribe', 'no', 'Auto parts', 'n/a', '7877787363', '7877787363', 'n/a', 'Bayamon', 'NO', 'Piezas '),
(6, '', '', 'Scooter Mania Corp.', 'Scooter Mania Corp.', 'no', 'Accesorios', 'n/a', '7872852588', '7872852588', 'Venta de motoras.', 'Bayamon', 'No', ''),
(7, '', '', 'n/a', 'Vento', 'no', 'Accesorios', 'n/a', '7877801538', '7877801538', 'Venta de motoras.', 'Bayamon', 'No', ''),
(8, '', '', 'Carlos Feliciano Collazo', 'Carlos Feliciano Collazo', 'no', 'Accesorios', 'n/a', '7872014518', '', 'n/a', 'Bayamon', 'No', ''),
(9, '', '', 'Colacho Auto, Inc.', 'Colacho Auto, Inc.', 'no', 'Dealers Autos', 'n/a', '7877862425', ' na', 'na', 'Bayamon', 'NO', 'Autos'),
(10, '', '', 'N/a', 'Dream Motors, Inc.', 'no', 'Dealers Autos', 'n/a', '7877990350', '7877990350', 'na', 'Bayamon', 'NO', 'Autos'),
(11, '', '', 'N/A', 'Emmanuel Ramon Virella', 'no', 'Dealers Autos', 'na', '7875323656', '7875323656', 'na', 'Bayamon', 'NO', 'Autos ,Nuevos'),
(12, '', '', 'N/A', 'Freeway Distributor Humacao Corp.', 'no', 'Auto parts', 'na', '7872587835', '7872587835', 'na', 'Bayamon', 'NO', 'Piezas  ,Piezas Remplazo'),
(13, '', '', 'N/A', 'Harry Maisonet Auto Sales, Inc.', 'no', 'Dealers Autos', 'n/a', '7872792864', '7872792864', 'n/a', 'Bayamon', 'SI', 'Autos ,Nuevos'),
(14, '', '', 'N/A', 'JZ Motor World', 'No', 'Accesorios', 'N/A', '7872513454', '7872513454', 'N/A', 'Bayamon', 'No', ''),
(15, '', '', 'Maquinas Auto Sales', 'Maquinas Auto Sales', 'no', 'Dealers Autos', 'na', '7872990231', '7872990231', 'na', 'Bayamon', 'NO', 'Autos ,Nuevos'),
(17, '', '', 'N/A', 'Santoni Motors', 'no', 'Dealers Autos', 'N/A', '7877643096', ' 7877643096', 'Venta de Autos', 'Bayamon', 'No', 'Autos'),
(18, '', '', 'n/a', 'Yahomy Auto Clinic', 'no', 'Accesorios', 'n/a', '7872884818', ' 7872884818', 'Mecanica', 'Bayamon', 'No', ''),
(19, '', '', 'N/A', 'Yokomuro LLC', 'no', 'Accesorios', 'N/A', '7877231233', ' 7877231233', 'Venta de Autos', 'Bayamon', 'No', ''),
(20, '', '', 'ACDelco Truck Service Center', 'ACDelco Truck Service Center', 'no', 'Accesorios', 'n/a', 'N/A', ' n/a', 'n/a', 'Bayamon', 'NO', 'Chevrolet ,Chrysler ,Dodge ,Ford ,Gmc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre` (`nombreNegocio`,`id_serv`,`pueblo`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_2` (`nombreNegocio`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_3` (`nombreNegocio`,`intereses`,`pueblo`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_4` (`nombreNegocio`,`pago`,`id_serv`,`email`,`telefonoCliente`,`telefonoNegocio`,`direccionNegocio`,`pueblo`,`serv_dom`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_5` (`nombreNegocio`,`pago`,`id_serv`,`email`,`telefonoCliente`,`telefonoNegocio`,`direccionNegocio`,`pueblo`,`serv_dom`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `intereses` (`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `pueblo` (`pueblo`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `dirreccion` (`direccionNegocio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
