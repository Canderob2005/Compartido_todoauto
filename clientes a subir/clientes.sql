-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-06-2020 a las 02:55:16
-- Versión del servidor: 10.4.12-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u317430902_todoAuto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `metodoPago` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipoAnuncio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombreCliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombreNegocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `pago` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `id_serv` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoCliente` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoNegocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `direccionNegocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `pueblo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `serv_dom` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `intereses` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `estatus`, `metodoPago`, `tipoAnuncio`, `nombreCliente`, `nombreNegocio`, `pago`, `id_serv`, `email`, `telefonoCliente`, `telefonoNegocio`, `direccionNegocio`, `pueblo`, `serv_dom`, `intereses`) VALUES
(1, 'si', 'No/Aplica', '', 'Auto Nuevo, Inc', 'Auto Nuevo, Inc', 'no', 'Dealers Autos Nuevos', 'n/a', '7877867413', '454787885', 'Na', 'Bayamon', 'SI', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(2, 'si', 'No/Aplica', '', 'Auto Sales', 'Auto Sales', 'no', 'Dealers Autos Nuevos y Udados', 'na', '7873424726', ' 7873424726', 'na', 'Bayamon', 'NO', 'Autos  ,Nuevos'),
(3, 'si', 'NAN', '', 'Auto Outlet', 'Auto Outlet', 'no', 'Dealers Autos Nuevos y Udados', 'na', '787-963-1010', '787-963-1010', 'na', 'Bayamon', 'NO', 'Autos  ,Nuevos'),
(4, 'si', 'No/Aplica', 'No/Aplica', 'Auto Bayamon', 'Auto Bayamon', 'no', 'Dealers Autos Nuevos y Udados', 'N/A', '787-665-0356', '787-665-0356', 'N/A', 'Bayamon', 'NO', 'Autos  ,Nuevos'),
(5, 'si', '', '', 'Auto Piezas Caribe', 'Auto Piezas Caribe', 'no', 'Auto parts', 'n/a', '7877787363', '7877787363', 'n/a', 'Bayamon', 'NO', 'Piezas '),
(6, 'si', 'No/Aplica', 'No/Aplica', 'Scooter Mania Corp.', 'Scooter Mania Corp.', 'no', ' Venta  Motoras', 'N/D', '7872852588', '7872852588', 'Venta de motoras.', 'Bayamon', 'NO', ''),
(7, 'si', 'No/Aplica', 'No/Aplica', 'n/a', 'Vento', 'no', ' Venta  Motoras', 'N/D', '7877801538', '7877801538', 'Venta de motoras.', 'Bayamon', 'NO', 'Venta de ,Motoras  , Nuevas , Usadas'),
(9, 'si', 'NAN', '', 'Colacho Auto, Inc.', 'Colacho Auto, Inc.', 'no', 'Dealers Autos Nuevos y Udados', 'n/a', '7877862425', ' na', 'na', 'Bayamon', 'NO', 'Autos '),
(10, 'si', '', '', 'N/a', 'Dream Motors, Inc.', 'no', 'Dealers Autos', 'n/a', '7877990350', '7877990350', 'na', 'Bayamon', 'NO', 'Autos'),
(11, 'si', 'NAN', '', 'N/A', 'Emmanuel Ramon Virella', 'no', 'Dealers Autos Usados', 'na', '7875323656', '7875323656', 'na', 'Bayamon', 'NO', 'Autos  ,Nuevos'),
(12, 'si', 'NAN', 'No/Aplica', 'Freeway Distributor Humacao Corp.', 'Freeway Distributor Humacao Corp.', 'no', 'Distribuidor', 'N/A', '7872587835', '7872587835', 'FONT MARTELO 209', 'Humacao', 'SI', 'Venta de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,Electricas'),
(13, 'si', '', '', 'N/A', 'Harry Maisonet Auto Sales, Inc.', 'no', 'Dealers Autos', 'n/a', '7872792864', '7872792864', 'n/a', 'Bayamon', 'SI', 'Autos ,Nuevos'),
(14, 'si', 'No/Aplica', 'No/Aplica', 'N/A', 'JZ Motor World', 'no', 'Dealers Autos Nuevos y Udados', 'N/D', '7872513454', '7872513454', 'N/D', 'Bayamon', 'No', 'Venta de ,Autos  ,Nuevos ,Usados'),
(15, 'si', 'NAN', '', 'Maquinas Auto Sales', 'Maquinas Auto Sales', 'si', 'Dealers Autos Usados', 'na', '7872990231', '7872990231', 'na', 'Bayamon', 'NO', 'Autos  ,Nuevos'),
(17, 'si', '', '', 'N/A', 'Santoni Motors', 'no', 'Dealers Autos', 'N/A', '7877643096', ' 7877643096', 'Venta de Autos', 'Bayamon', 'No', 'Autos'),
(18, 'si', 'No/Aplica', 'No/Aplica', 'Yahomy Auto Clinic', 'Yahomy Auto Clinic', 'no', 'Dealers Autos Usados', 'N/D', '7872884818', ' 7872884818', 'N/D', 'Bayamon', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados'),
(19, 'si', 'No/Aplica', 'No/Aplica', 'Yokomuro LLC', 'Yokomuro LLC', 'no', 'Dealers Autos Usados', 'N/D', '7877231233', ' 7877231233', 'N/D', 'Bayamon', 'No', 'Venta de ,Autos  ,Nuevos ,Usados'),
(90, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Balestra', 'Garaje Balestra', 'no', 'Hojalateria y pintura', 'N/A', '7879953400', '7879953400', 'Carr Puerto Rico 2, Candelaria,', 'Toa baja', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(91, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Miranda Body Shop', 'Garaje Miranda Body Shop', 'no', 'Body parts', 'N/A', ' 7877407620', ' 7877407620', ' Marginal #5 km. 4.3', 'Bayamon', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas , Usadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(93, 'si', 'No/Aplica', 'No/Aplica', 'Canito Sánchez', 'GARAJE UNIÓN', 'no', 'Hojalateria y pintura', 'N/A', '787783-3259', '787783-3259', ' Ave. FD Roosevelt (Interior) Urb', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(94, 'si', 'No/Aplica', 'No/Aplica', 'Garage Costales', 'Garage Costales', 'no', 'Hojalateria y pintura', 'N/A', ' 7877954484', ' 7877954484', 'PR-866', 'Toa baja', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(95, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Frank', 'Garaje Frank', 'no', 'Hojalateria y pintura', 'N/A', 'N/D', 'N/D', 'PR-190', 'Carolina', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(96, 'si', 'No/Aplica', 'No/Aplica', 'Garage Gil', 'Garage Gil', 'no', 'Hojalateria y pintura', 'N/D', '7878831044', '7878831044', 'PR-2 km 25.0', 'Dorado', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(97, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Fernández, Inc.', 'Garaje Fernández, Inc.', 'no', 'Hojalateria y pintura', 'N/D', ' 7877838261', ' 7877838261', '20 Calle Blay,', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(98, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Beníquez', 'Garaje Beníquez', 'no', 'Hojalateria y pintura', 'N/D', '7878784260', '7878784260', '1624 Carr Puerto Rico 2', 'Arecibo', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(99, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Armando', 'Garaje Armando', 'no', 'Hojalateria y pintura', 'N/D', '7877992885', '7877992885', 'Calle 11', 'Adjuntas', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(100, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Peña', 'Garaje Peña', 'no', 'Hojalateria y pintura', 'N/D', ' 7873228415', ' 7873228415', 'PR-860', 'Carolina', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(101, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Morales', 'Garaje Morales', 'no', 'Hojalateria y pintura', 'N/D', '7877474445', '7877474445', 'KM 0.3, PR-796', 'Caguas', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(102, 'si', 'No/Aplica', 'No/Aplica', 'Garaje Hojalatería Chico', 'Garaje Hojalatería Chico', 'no', 'Hojalateria y pintura', 'N/D', '7875355832', '7875355832', 'PR-735', 'Cidra', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(103, 'si', 'No/Aplica', 'No/Aplica', 'Pro-Service', 'Pro-Service', 'no', 'Mecanica', 'N/D', '7876383947', '7876383947', ' 57 PR-869 #67', 'Cataño', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados , Nuevas , Usadas ,Gomas ,Gomas Nuevas ,Gomas Usadas'),
(104, 'si', 'No/Aplica', 'No/Aplica', 'Mecánica rafy', 'Mecánica rafy', 'no', 'Mecanica', 'N/D', '7877506996', '7877506996', 'Carretera 190 esquina ave Pontezuela vistamar', 'Carolina', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(105, 'si', 'No/Aplica', 'No/Aplica', 'Irie Works', 'Irie Works', 'no', 'Hojalateria y pintura', 'N/D', '7876328828', '7876328828', '6020 Avenida Campo Rico', 'Carolina', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(106, 'si', 'No/Aplica', 'No/Aplica', 'Servicio Nissan Hato Rey', 'Servicio Nissan Hato Rey', 'no', 'Mecanica', 'N/D', '7877656090', '7877656090', '508 Avenida de la Constitución,', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Nissan ,Piezas  , Nuevas ,Originales ,Computadoras de autos ,Aire acondicionado ,Computadoras de autos ,Gomas ,Motor ,Radiadores ,Radiadores ,Transmisiones ,Gomas Nuevas'),
(107, 'si', 'No/Aplica', 'No/Aplica', 'Garage Luis', 'Garage Luis', 'no', 'Hojalateria y pintura', 'N/D', '7872269538', '7872269538', '47 PR-846', 'Trujillo alto', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados ,Reparación'),
(112, 'si', 'No/Aplica', 'posisionamiento  ,No/Aplica', 'Carlos', 'El bendecido ', 'no', 'Dealers Autos Usados', 'benitezhermanos01@hotmail.com', '7879321347', '7879321347', 'Carr #2 ', 'Vega alta', 'SI', 'Venta de , Servicio a ,Autos  ,Motoras  ,Usados ,Luces decorativas ,Motor'),
(113, 'si', 'No/Aplica', 'No/Aplica', 'N/A', 'Mapfre', 'no', 'Seguro de auto', 'telemapfre@mapfrepr.com', '7872506500', '7872506500', '297 Calle César González', 'San Juan', 'SI', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(114, 'si', 'No/Aplica', '', 'N/D', 'Seguros Multiples', 'no', 'Seguro de auto', 'N/D', '7877580101', '7877580101', '38 Calle Nevárez', 'San Juan', 'NO', 'Venta de ,Autos  ,Camiones  ,Nuevos ,Usados'),
(115, 'si', 'No/Aplica', 'No/Aplica', 'N/D', 'Popular Insurance', 'no', 'Seguro de auto', 'N/D', '787 724 3650', '787 724 3650', '209 Ave. Ponce de León', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(116, 'si', 'No/Aplica', 'No/Aplica', 'N/D', 'Seguros JCE', 'no', 'Seguro de auto', 'Info@segurosjce.com', '787-948-1589', '787-948-1589', '1055 Ave. Kennedy Suite 913 ', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(117, 'si', 'No/Aplica', 'No/Aplica', 'N/D', 'Seguros Puerto Rico', 'no', 'Seguro de auto', 'info@segurospr.com', '787 399 9999', '787 399 9999', 'Extension College Park, Calle Upsala 266, Esquina Glasgow ', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(118, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'velox24.', 'no', 'Seguro de auto', 'No/Disponible', '787-777-5050', '787-777-5050', 'No/Disponible', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(119, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Multinational', 'no', 'Seguro de auto', 'No/Disponible', '787 758-8528', '787 758-8528', '470 Ponce de Leon Avenue', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(120, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Universal Insurance', 'no', 'Seguro de auto', 'No/Disponible', '787 793-7202', '787 793-7202', 'Calle Mejico #16', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(121, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Angelo Towing ', 'no', 'Servicio de grua', 'No/Disponible', '787 375-7682', '787 375-7682', 'No/Disponible', 'Orocovis', 'SI', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(122, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'AR Towing', 'no', 'Servicio de grua', 'No/Disponible', '787 399-6094', '787 399-6094', 'No/Disponible', 'Trujillo alto', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(123, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Arnardys Towing', 'no', 'Servicio de grua', 'No/Disponible', '939 308-2100', '939 308-2100', 'No/Disponible', 'Fajardo', 'SI', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(124, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Bertos Towing', 'no', 'Servicio de grua', 'No/Disponible', '7876439207', '7876439207', 'No/Disponible', 'Adjuntas', 'SI', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(125, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Black Towing', 'no', 'Servicio de grua', 'No/Disponible', '7872398247', '7872398247', 'No/Disponible', 'Adjuntas', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(126, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Carlos Matos Towing', 'no', 'Servicio de grua', 'No/Disponible', '7873146769', '7873146769', 'No/Disponible', 'Ponce', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(127, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Dominick Towing', 'no', 'Servicio de grua', 'No/Disponible', '7874585895', '7874585895', 'No/Disponible', 'Mayagüez', 'SI', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(128, 'si', 'No/Aplica', 'No/Aplica', 'Edwin Rubio ', 'RTS Towing', 'no', 'Servicio de grua', 'No/Disponible', '9392679699', '9392679699', 'No/Disponible', 'Dorado', 'SI', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(129, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'FM Towing', 'no', 'Servicio de grua', 'No/Disponible', '787 688-3637', '787 688-3637', 'No/Disponible', 'Carolina', 'SI', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(131, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Alineacion y Balance de la A a la Z', 'no', 'Alineamiento', 'No/Disponible', '7877934455', '7877934455', ' Urb, 1254 Cll 52 SE', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados ,Gomas Nuevas ,Gomas Usadas'),
(132, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Alineamiento Puerto Nuevo', 'no', 'Alineamiento', 'No/Disponible', '7877825540', '7877825540', '1323 Av. Franklin Delano Roosevelt', 'San Juan', 'NO', ' Servicio a ,Instalación de ,Autos  ,Nuevos ,Usados ,Gomas Nuevas ,Gomas Usadas'),
(133, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Gomera MG', 'no', 'Gomeras', 'No/Disponible', '7879606518', '7879606518', 'No/Disponible', 'San Juan', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Camiones  ,Nuevos ,Usados ,Aros para Autos ,Piezas  , Nuevas , Usadas ,Reparacion  ,Aros ,de Gomas ,Motor ,Gomas Nuevas ,Gomas Usadas'),
(134, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Meineke Car Care Center', 'no', 'Mecanica', 'No/Disponible', '7877057628', '7877057628', 'Los Jardines Shopping Center Lot A1', 'Guaynabo', 'NO', ' Servicio a ,Instalación de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas , Usadas ,Reparacion  ,Motor'),
(135, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'JJ Illuminations and Accessories', 'no', 'Accesorios', 'No/Disponible', '7877795200', '7877795200', 'Urb. Riverview Calle 27 #JJ1', 'Bayamón', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Nuevos ,Usados ,Alarmas ,Aros para Autos ,Equipo Musica ,Luces decorativas'),
(136, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Custom Dream 4x4', 'no', 'Accesorios', 'No/Disponible', '7877544934', '7877544934', '1519 Av. Juan Ponce de León,', 'San Juan', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Nuevos ,Usados ,Alarmas ,Aros para Autos ,Equipo Musica ,Luces decorativas'),
(137, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Indy Performance Parts', 'no', 'Accesorios', 'No/Disponible', ' 7877650209', ' 7877650209', '452 Calle Soldado Alcides Reyes de Jesús', 'San Juan', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Nuevos ,Usados ,Alarmas ,Aros para Autos ,Equipo Musica ,Luces decorativas'),
(138, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Cano Cano Auto Air', 'no', 'Aire autos', 'No/Disponible', '787-768-3030', '787-768-3030', 'Avenida Iturregui #OE-14', 'Carolina', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados ,Aire acondicionado'),
(139, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Georgie Auto Air', 'no', 'Aire autos', 'No/Disponible', '7877891717', '7877891717', 'Sector Emiliano Pol', 'San Juan', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Camiones  ,Nuevos ,Usados ,Reparacion  ,Aire acondicionado'),
(140, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Papote Auto Air', 'no', 'Aire autos', 'No/Disponible', '7875336971', '7875336971', 'Urb. Gardens T1-19, Cll 28', 'Caguas', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Camiones  ,Nuevos ,Usados ,Reparacion  ,Aire acondicionado'),
(141, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Aires Para Autos', 'no', 'Aire autos', 'No/Disponible ', '787-855-2635', '787-855-2635', 'L1 Marginal Suite 3 Urb', 'Vega baja', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados ,Aire acondicionado'),
(143, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'SIXT rent a car', 'no', 'Alquiler', 'No/Disponible', '787-998-0474', '787-998-0474', '301 Cll Navarra', 'San Juan', 'NO', ' Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(144, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Avis Rent-A-Car', 'no', 'Alquiler', 'No/Disponible', '787-753-3083', '787-753-3083', 'Calle Juan Calaf', 'San Juan', 'NO', ' Servicio a ,Autos  ,Camiones  ,Nuevos ,Usados'),
(145, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Target Rent a Car', 'no', 'Alquiler', 'No/Disponible', '(787)728-1447', '(787)728-1447', '203 Cll Pomarrosa', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(146, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Specialized Roadside Assitance ', 'no', 'Servicio en Carretera, Asistencia en la Carretera', 'No/Disponible', '(787)225-9790', '(787)225-9790', '1210 Calle 18 SE', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(147, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', ' Asistencia Ahora', 'no', 'Servicio en Carretera, Asistencia en la Carretera', 'No/Disponible', '(787)706-2985', '(787)706-2985', 'Metro Office Park Lote 8 Calle #1, Ste. 306', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(148, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Connect Assistance', 'no', 'Servicio en Carretera, Asistencia en la Carretera', 'No/Disponible', ' (787)999-5050', ' (787)999-5050', 'No/Disponible', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados'),
(149, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Alcalde Auto Parts', 'no', 'Auto parts', 'No/Disponible', ' (787)274-0804', ' (787)274-0804', ' Av. Quisqueya', 'San Juan', 'NO', 'Venta de ,Autos  ,Camiones  ,Nuevos ,Usados ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing'),
(150, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Pito Auto Parts', 'no', 'Auto parts', 'No/Disponible', ' (787)756-5714', ' (787)756-5714', '454 Calle Francia', 'San Juan', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas , Usadas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing'),
(151, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro Auto Parts', 'no', 'Auto parts', 'No/Disponible', '(787)276-6464', '(787)276-6464', '901 Avenida Campo Rico', 'Carolina', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing'),
(152, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro de Inspección Brothers Petróleo', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)234-2300', 'Ave. De Diego 552 Esq. Carr. #181', 'San Juan', 'NO', ' Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(153, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro inspeccion y venta de Marbetes Cupey Tires', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)755-8555', 'Avenida San Claudio #420 Urbanizacion', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete , Nuevas , Usadas ,Gomas ,Gomas Nuevas ,Gomas Usadas'),
(154, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Joe Tire Centro de Inspección', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', ' (787)590-6152', 'Carr. #848 Km. 2.3 Saint Just ', 'Trujillo alto', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete , Nuevas , Usadas ,Gomas ,Gomas Nuevas ,Gomas Usadas'),
(155, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro de Inspección SJ-0584 y Venta Marbetes', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)785-1757', 'Av. Sta. Juanita', 'Adjuntas', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(156, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro de inspeccion SJ0602', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)473-0910', 'AL LADO DE CARINA BOWLING, Av. Felipe Sánchez Osorio', 'Carolina', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(157, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro De Inspección Pajaros', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)232-8846', 'Candelaria', 'Toa baja', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(158, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro De Inspeccion My Friend', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)233-5481', 'Carretera #2 km 29.1 BO', 'Vega alta', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(159, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro De Inspección Palmarejo Centro', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)245-3057', '164 Bo. Palmarejo, KM 14.6', 'Corozal', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(160, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro De Inspeccion Adneris', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)674-0865', 'No/Disponible', 'Caguas', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(161, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro de Inspección  Colombo', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)369-7440', 'Carr 670 ', 'Vega baja', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(162, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'CANOVANAS MUFFLER CENTER', 'no', 'Mufflers', 'No/Disponible', 'No/Disponible', '(787)876-3366', 'Canovanas', 'Canóvanas', 'NO', 'Venta de , Servicio a ,Instalación de ,Autos  ,Camiones  ,Nuevos ,Usados ,Reparacion  ,Mufflers'),
(163, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'CANOVANAS MUFFLER CENTER', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)876-3366', 'Canovanas', 'Canóvanas', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Marbete'),
(164, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro De Inspección DTOP', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', '(787)404-1030', 'PR-2 Km 142.4, Bo. Caracol', 'Añasco', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Marbete'),
(165, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro de Inspección', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', ' (787)237-8006', 'Candelaria', 'Mayagüez', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Marbete'),
(166, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Willie & Williams Auto Paint', 'no', 'Centro pintura', 'No/Disponible', 'No/Disponible', '(787)856-6777', '8 PR-376', 'Yauco', 'NO', 'Venta de ,Autos  ,Camiones  ,Motoras  ,Nuevos ,Usados ,Pintura Autos'),
(167, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'One Stop Auto Service', 'no', 'Inspección autos', 'No/Disponible', 'No/Disponible', ' (787)686-6286', 'San Vicente Mall Local #7', 'Guayama', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos ,Usados ,Marbete'),
(168, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Caribbean Auto Distributors', 'no', 'Dealers Autos Nuevos', 'No/Disponible', 'No/Disponible', '(787)776-2295', 'Avenida 65 De Infantería, Km 10.2 Esquina Muñoz Rivera,', 'Carolina', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(169, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Honda de San Juan', 'no', 'Dealers Autos Nuevos', 'No/Disponible', 'No/Disponible', ' (787)301-0406', 'Ave. Kennedy, Km 3.2, Urb. Insdustrial Bechara Pueblo Viejo', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(170, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Domínguez Auto', 'no', 'Dealers Autos Nuevos', 'No/Disponible', 'No/Disponible', ' (787)767-5850', '858 Av. 65 de Infantería', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(171, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Auto City 65', 'no', 'Dealers Autos Nuevos', 'No/Disponible', 'No/Disponible', ' (787)250-0503', 'km 3.5, sector, Av. 65 de Infantería, Sabana Llana Sur', 'San Juan', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(172, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Hyundai de Mayaguez', 'no', 'Dealers Autos Nuevos', 'No/Disponible', 'No/Disponible', '(787)652-5002', 'No/Disponible', 'Mayagüez', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(173, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Auto Stop Mayagüez', 'no', 'Dealers Autos Nuevos', 'No/Disponible', 'No/Disponible', '(787)832-5000', 'No/Disponible', 'Mayagüez', 'NO', 'Venta de , Servicio a ,Autos  ,Nuevos'),
(174, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'MR Auto Body Parts', 'no', 'body parts', 'No/Disponible', 'No/Disponible', ' (787)806-2639', '322 Calle Ramón Emeterio Betances', 'Mayagüez', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(175, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Mayaguez Auto Body', 'no', 'body parts', 'No/Disponible', 'No/Disponible', '(787)265-8050', '287 Calle Ramón Emeterio Betances', 'Mayagüez', 'NO', 'Venta de ,Autos  ,Nuevos ,Usados ,Piezas  , Nuevas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(176, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Vento Mayagüez, Inc.', 'no', 'body parts', 'No/Disponible', 'No/Disponible', '(787)833-0186', 'No/Disponible', 'Mayagüez', 'NO', 'Venta de ,Piezas  , Nuevas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(177, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Mayagüez Auto Parts', 'no', 'body parts', 'No/Disponible', 'No/Disponible', ' (787)834-2228', 'No/Disponible', 'Mayagüez', 'NO', 'Venta de ,Piezas  , Nuevas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(178, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Cabo Rojo Body Parts', 'no', 'body parts', 'No/Disponible', 'No/Disponible', '(787)851-4020', 'PR-100', 'Cabo Rojo', 'NO', 'Venta de ,Piezas  , Nuevas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(179, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Kery Air Bags And Body Parts', 'no', 'body parts', 'No/Disponible', 'No/Disponible', '(787)818-5197', 'PR-111', 'Moca', 'NO', 'Venta de ,Piezas  , Nuevas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(180, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Amigo Auto Parts', 'no', 'Auto parts', 'No/Disponible', 'No/Disponible', '(787)877-7538', 'PR-111', 'Moca', 'NO', 'Venta de ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing'),
(181, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Junker Kery', 'no', 'Junkers', 'No/Disponible', 'No/Disponible', ' (787)877-6197', ' PR-112', 'Moca', 'NO', 'Venta de ,Piezas  , Usadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing , Computadoras de autos'),
(182, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Kariduros Auto Parts', 'no', 'Auto parts', 'No/Disponible', 'No/Disponible', ' (787)860-0302', 'Urb baralt ave principal km 44.1', 'Fajardo', 'NO', 'Venta de ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas , Computadoras de autos'),
(183, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'AF Auto Parts', 'no', 'Auto parts', 'No/Disponible', 'No/Disponible', ' (787)655-2782', 'No/Disponible', 'Fajardo', 'NO', 'Venta de ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing , Computadoras de autos'),
(184, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Caribbean Body Parts', 'no', 'body parts', 'No/Disponible', 'No/Disponible', ' (787)743-6900', 'No/Disponible', 'Caguas', 'NO', 'Venta de ,Piezas  ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas'),
(185, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Su Tienda Autoparts (Mopar) ', 'no', 'Auto parts', 'No/Disponible', 'No/Disponible', ' (787)860-5609', ' (787) 860-5609', 'Fajardo', 'NO', 'Venta de ,Piezas  , Nuevas , Re-manufacturadas ,Originales ,Remplazo ,Americanas ,Europeas ,Japonesas ,Koreanas ,electricas ,Raicing , Computadoras de autos'),
(186, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Atlas Transmission Co', 'no', 'Transmisiones automaticas', 'No/Disponible', 'No/Disponible', '(787)860-1122', '4245 Calle Marginal Suite 3', 'Fajardo', 'NO', 'Venta de , Servicio a ,Instalación de ,Piezas  , Nuevas ,Originales ,Remplazo ,Reparacion  ,Transmisiones'),
(187, 'si', 'No/Aplica', 'No/Aplica', 'No/Disponible', 'Centro de Baterías ACDelco', 'no', 'Accesorios', 'No/Disponible', 'No/Disponible', '787.778.3030', 'Ave. Lomas Verdes, Urb. Royal Palm IF-51', 'Bayamón', 'NO', 'Venta de , Servicio a ,Autos  ,Camiones  ,Motoras  ,Baterías ,Piezas  , Nuevas , Re-manufacturadas ,Originales');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre` (`nombreNegocio`,`id_serv`,`pueblo`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_2` (`nombreNegocio`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_3` (`nombreNegocio`,`intereses`,`pueblo`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_4` (`nombreNegocio`,`pago`,`id_serv`,`email`,`telefonoCliente`,`telefonoNegocio`,`direccionNegocio`,`pueblo`,`serv_dom`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_5` (`nombreNegocio`,`pago`,`id_serv`,`email`,`telefonoCliente`,`telefonoNegocio`,`direccionNegocio`,`pueblo`,`serv_dom`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `intereses` (`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `pueblo` (`pueblo`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `dirreccion` (`direccionNegocio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
