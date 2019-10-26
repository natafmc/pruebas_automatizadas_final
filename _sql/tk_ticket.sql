-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2019 at 06:20 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tk_atencion_actual`
--

CREATE TABLE `tk_atencion_actual` (
  `ID_ATENCION` int(11) NOT NULL,
  `CODIGO_TICKET` varchar(150) COLLATE ucs2_spanish2_ci NOT NULL,
  `ESTACION` varchar(150) COLLATE ucs2_spanish2_ci NOT NULL,
  `FECHA_REG` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tk_bitacora_atencion`
--

CREATE TABLE `tk_bitacora_atencion` (
  `ID_BITACORA_ATENCION` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_TICKET` int(11) NOT NULL,
  `ID_ESTACION` int(11) NOT NULL,
  `FECHA_INICIO_ATENCION` date DEFAULT NULL,
  `HORA_INICIO_ATENCION` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `FECHA_FIN_ATENCION` date DEFAULT NULL,
  `HORA_FIN_ATENCION` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ACCION` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_bitacora_atencion`
--

INSERT INTO `tk_bitacora_atencion` (`ID_BITACORA_ATENCION`, `ID_USUARIO`, `ID_TICKET`, `ID_ESTACION`, `FECHA_INICIO_ATENCION`, `HORA_INICIO_ATENCION`, `FECHA_FIN_ATENCION`, `HORA_FIN_ATENCION`, `ACCION`) VALUES
(1, 1, 7, 1, '2018-09-14', '22:00:32', NULL, NULL, '1'),
(2, 2, 4, 2, '2018-09-14', '22:00:42', NULL, NULL, '1'),
(3, 1, 7, 1, '2018-09-14', '22:01:02', NULL, NULL, '2'),
(4, 1, 7, 1, '2018-09-14', '22:03:31', NULL, NULL, '3'),
(5, 2, 4, 1, '2018-09-14', '22:03:42', NULL, NULL, '2'),
(6, 1, 8, 1, '2018-09-14', '22:03:45', NULL, NULL, '1'),
(7, 2, 4, 1, '2018-09-14', '22:03:51', NULL, NULL, '3'),
(8, 2, 5, 2, '2018-09-14', '22:03:55', NULL, NULL, '1'),
(9, 1, 8, 1, '2018-09-14', '22:05:12', NULL, NULL, '2'),
(10, 3, 6, 3, '2018-09-14', '22:07:41', NULL, NULL, '1'),
(11, 2, 5, 1, '2018-09-14', '22:08:16', NULL, NULL, '2'),
(12, 2, 5, 1, '2018-09-14', '22:08:25', NULL, NULL, '3'),
(13, 3, 6, 1, '2018-09-14', '22:08:34', NULL, NULL, '2'),
(14, 2, 1, 2, '2018-09-14', '22:08:40', NULL, NULL, '1'),
(15, 3, 6, 1, '2018-09-14', '22:08:48', NULL, NULL, '3'),
(16, 3, 2, 3, '2018-09-14', '22:08:51', NULL, NULL, '1'),
(17, 3, 2, 1, '2018-09-14', '22:09:00', NULL, NULL, '1'),
(18, 3, 2, 1, '2018-09-14', '22:09:01', NULL, NULL, '1'),
(19, 3, 2, 1, '2018-09-14', '22:09:02', NULL, NULL, '5'),
(20, 3, 3, 3, '2018-09-14', '22:09:04', NULL, NULL, '1'),
(21, 3, 3, 1, '2018-09-14', '22:09:14', NULL, NULL, '2'),
(22, 3, 3, 1, '2018-09-14', '22:09:17', NULL, NULL, '3'),
(23, 1, 8, 1, '2018-09-14', '22:09:22', NULL, NULL, '3'),
(24, 2, 1, 1, '2018-09-14', '22:09:30', NULL, NULL, '1'),
(25, 2, 1, 1, '2018-09-14', '22:09:30', NULL, NULL, '1'),
(26, 2, 1, 1, '2018-09-14', '22:09:31', NULL, NULL, '5'),
(27, 1, 10, 1, '2018-09-17', '22:16:13', NULL, NULL, '1'),
(28, 2, 17, 2, '2018-09-17', '22:19:42', NULL, NULL, '1'),
(29, 1, 10, 1, '2018-09-17', '22:20:09', NULL, NULL, '2'),
(30, 2, 17, 1, '2018-09-17', '22:20:22', NULL, NULL, '2'),
(31, 2, 17, 1, '2018-09-17', '22:20:27', NULL, NULL, '3'),
(32, 1, 10, 1, '2018-09-17', '22:20:37', NULL, NULL, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tk_bitacora_categoria`
--

CREATE TABLE `tk_bitacora_categoria` (
  `ID_BITACORA_CATEGORIA` int(11) NOT NULL,
  `ID_CATEGORIA` int(11) NOT NULL,
  `FECHA_CIERRE` date DEFAULT NULL,
  `HORA_CIERRE` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `SECUENCIAL_CIERRE` int(11) DEFAULT NULL,
  `CANT_ATENDIDOS` int(11) DEFAULT NULL,
  `CANT_EN_COLA` int(11) DEFAULT NULL,
  `PRIMER_NUMERO` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ULTIMO_NUMERO` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CANT_PERDIDOS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tk_categoria`
--

CREATE TABLE `tk_categoria` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOMBRE` varchar(300) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `DESCRIPCION` text COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `HORA_INICIO_ATENCION` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `HORA_CIERRE` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `USUARIO_REG` int(11) DEFAULT NULL,
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ESTADO_REG` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `CODIGO` varchar(50) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `SECUENCIAL` int(11) DEFAULT NULL,
  `PRIORIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_categoria`
--

INSERT INTO `tk_categoria` (`ID_CATEGORIA`, `NOMBRE`, `DESCRIPCION`, `ESTADO`, `HORA_INICIO_ATENCION`, `HORA_CIERRE`, `USUARIO_REG`, `USUARIO_MOD`, `FECHA_REG`, `FECHA_MOD`, `ESTADO_REG`, `CODIGO`, `SECUENCIAL`, `PRIORIDAD`) VALUES
(2, 'Normal', 'a', 'activo', '15:30', NULL, NULL, NULL, '2018-09-12 22:16:57', '0000-00-00 00:00:00', 'activo', 'N1', 2, 1),
(4, 'TERCERA EDAD', 'b', 'activo', NULL, NULL, NULL, NULL, '2018-09-12 22:17:06', '0000-00-00 00:00:00', 'activo', 'TE', 2, 3),
(6, 'EMBARAZADAS', 'd', 'activo', NULL, NULL, NULL, NULL, '2018-09-12 22:17:08', '0000-00-00 00:00:00', 'activo', 'EM', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tk_categoria_zona`
--

CREATE TABLE `tk_categoria_zona` (
  `ID_CATEGORIA_ZONA` int(11) NOT NULL,
  `ID_ZONA` int(11) DEFAULT NULL,
  `ID_CATEGORIA` int(11) DEFAULT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_categoria_zona`
--

INSERT INTO `tk_categoria_zona` (`ID_CATEGORIA_ZONA`, `ID_ZONA`, `ID_CATEGORIA`, `FECHA_REG`, `USUARIO_REG`, `FECHA_MOD`, `USUARIO_MOD`, `ESTADO`) VALUES
(1, 1, 2, '2018-09-12 15:12:29', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(2, 4, 4, '2018-09-12 15:12:33', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(3, 4, 2, '2018-09-12 15:22:23', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(4, 3, 6, '2018-09-12 21:24:17', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(5, 2, 6, '2018-09-12 21:22:23', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(6, 2, 4, '2018-09-12 21:22:26', NULL, '0000-00-00 00:00:00', NULL, 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `tk_categoria_zona_bitacora`
--

CREATE TABLE `tk_categoria_zona_bitacora` (
  `ID_CATEGORIA_ZONA` int(11) NOT NULL,
  `ID_CAT_ZONA_BITACORA` int(11) NOT NULL,
  `FECHA_REG` date DEFAULT NULL,
  `HORA_INICIO_ATENCION` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `HORA_CIERRE` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SECUENCIAL_ZONA_CAT` int(11) DEFAULT NULL,
  `CODIGO` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_categoria_zona_bitacora`
--

INSERT INTO `tk_categoria_zona_bitacora` (`ID_CATEGORIA_ZONA`, `ID_CAT_ZONA_BITACORA`, `FECHA_REG`, `HORA_INICIO_ATENCION`, `HORA_CIERRE`, `FECHA_MOD`, `SECUENCIAL_ZONA_CAT`, `CODIGO`) VALUES
(3, 1, '2018-09-14', '21:59:43', NULL, '0000-00-00 00:00:00', 3, 'OC-N1'),
(2, 2, '2018-09-14', '21:59:50', NULL, '0000-00-00 00:00:00', 3, 'OC-TE'),
(1, 3, '2018-09-14', '22:00:03', NULL, '0000-00-00 00:00:00', 3, 'CJ-N1'),
(1, 4, '2018-09-17', '22:10:25', NULL, '0000-00-00 00:00:00', 4, 'CJ-N1'),
(6, 5, '2018-09-17', '22:10:47', NULL, '0000-00-00 00:00:00', 2, 'P-TE'),
(5, 6, '2018-09-17', '22:10:51', NULL, '0000-00-00 00:00:00', 3, 'P-EM'),
(4, 7, '2018-09-17', '22:18:18', NULL, '0000-00-00 00:00:00', 1, 'SRV-EM'),
(2, 8, '2018-09-17', '22:18:31', NULL, '0000-00-00 00:00:00', 2, 'OC-TE'),
(3, 9, '2018-09-17', '22:18:33', NULL, '0000-00-00 00:00:00', 2, 'OC-N1'),
(1, 10, '2019-10-26', '17:53:00', NULL, '0000-00-00 00:00:00', 7, 'CJ-N1');

-- --------------------------------------------------------

--
-- Table structure for table `tk_estacion`
--

CREATE TABLE `tk_estacion` (
  `ID_ZONA` int(11) NOT NULL,
  `ID_ESTACION` int(11) NOT NULL,
  `DESCRIPCION` text COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `CODIGO` varchar(50) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `NOMBRE_DISPLAY` char(10) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_estacion`
--

INSERT INTO `tk_estacion` (`ID_ZONA`, `ID_ESTACION`, `DESCRIPCION`, `CODIGO`, `NOMBRE_DISPLAY`, `USUARIO_REG`, `FECHA_REG`, `USUARIO_MOD`, `FECHA_MOD`, `ESTADO`) VALUES
(1, 1, '<p>\r\n	CJ-DRM</p>\r\n', 'CJ-DRM', 'CJ-DRM', 1, '2018-09-14 19:26:46', NULL, '0000-00-00 00:00:00', 'activo'),
(2, 2, '<p>\r\n	Caja Nata</p>\r\n', 'Caja Nata', 'Caja Nata', NULL, '2018-09-14 19:26:30', NULL, '0000-00-00 00:00:00', 'activo'),
(4, 3, '<p>\n	LOLA</p>\n', 'LOLA CAJA', 'LLCJ', NULL, '2018-09-14 20:06:42', NULL, '0000-00-00 00:00:00', 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `tk_multimedia`
--

CREATE TABLE `tk_multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `reproducido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tk_persona`
--

CREATE TABLE `tk_persona` (
  `ID_PERSONA` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `NOMBRE` varchar(300) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `APELLIDOS` varchar(300) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `ESTADO` enum('activo','inactivo') COLLATE ucs2_spanish2_ci NOT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_MOD` int(11) NOT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `USUARIO_REG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_persona`
--

INSERT INTO `tk_persona` (`ID_PERSONA`, `ID_USUARIO`, `NOMBRE`, `APELLIDOS`, `FECHA_NAC`, `ESTADO`, `FECHA_MOD`, `USUARIO_MOD`, `FECHA_REG`, `USUARIO_REG`) VALUES
(1, NULL, 'Romina', 'Medrano Cambara', '2018-09-01', 'activo', '2019-10-26 16:19:31', 0, '0000-00-00 00:00:00', 0),
(2, NULL, 'Nata', 'Medrano', '2018-09-01', 'activo', '2018-09-15 01:25:45', 1, '0000-00-00 00:00:00', 0),
(3, NULL, 'Lola', 'La Trailera', '2018-09-05', 'activo', '2019-10-26 16:19:45', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tk_solicitud_ticket`
--

CREATE TABLE `tk_solicitud_ticket` (
  `ID_SOLICITUD` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_TICKET` int(11) NOT NULL,
  `ID_ESTACION` int(11) NOT NULL,
  `FECHA_LLAMADA` date DEFAULT NULL,
  `HORA_LLAMADA` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ESTADO_LLAMADA` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `NRO_LLAMADA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_solicitud_ticket`
--

INSERT INTO `tk_solicitud_ticket` (`ID_SOLICITUD`, `ID_USUARIO`, `ID_TICKET`, `ID_ESTACION`, `FECHA_LLAMADA`, `HORA_LLAMADA`, `ESTADO_LLAMADA`, `NRO_LLAMADA`) VALUES
(1, 1, 7, 1, '2018-09-14', '22:00:32', '2', 1),
(2, 2, 4, 2, '2018-09-14', '22:00:42', '2', 1),
(3, 1, 8, 1, '2018-09-14', '22:03:45', '2', 1),
(4, 2, 5, 2, '2018-09-14', '22:03:55', '2', 1),
(5, 3, 6, 3, '2018-09-14', '22:07:41', '2', 1),
(6, 2, 1, 2, '2018-09-14', '22:08:40', '2', 1),
(7, 3, 2, 3, '2018-09-14', '22:08:51', '2', 1),
(8, 3, 2, 1, '2018-09-14', '22:09:00', '2', 2),
(9, 3, 2, 1, '2018-09-14', '22:09:01', '2', 3),
(10, 3, 2, 1, '2018-09-14', '22:09:02', '6', 4),
(11, 3, 3, 3, '2018-09-14', '22:09:04', '2', 1),
(12, 2, 1, 1, '2018-09-14', '22:09:30', '2', 2),
(13, 2, 1, 1, '2018-09-14', '22:09:30', '2', 3),
(14, 2, 1, 1, '2018-09-14', '22:09:31', '6', 4),
(15, 1, 10, 1, '2018-09-17', '22:16:13', '2', 1),
(16, 2, 17, 2, '2018-09-17', '22:19:42', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tk_ticket`
--

CREATE TABLE `tk_ticket` (
  `ID_TICKET` int(11) NOT NULL,
  `ID_CATEGORIA` int(11) NOT NULL,
  `ID_ZONA` int(11) NOT NULL,
  `NUMERO` varchar(50) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `CODIGO` varchar(50) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `PRIORIDAD` int(11) NOT NULL,
  `QR` text COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ON_DISPLAY` int(11) NOT NULL,
  `USUARIO_REG` int(11) DEFAULT NULL,
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `ESTADO_REG` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `FECHA_REG` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `HORA_IMPRESION` varchar(30) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `FECHA_IMPRESION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_ticket`
--

INSERT INTO `tk_ticket` (`ID_TICKET`, `ID_CATEGORIA`, `ID_ZONA`, `NUMERO`, `CODIGO`, `PRIORIDAD`, `QR`, `ON_DISPLAY`, `USUARIO_REG`, `USUARIO_MOD`, `ESTADO_REG`, `ESTADO`, `FECHA_MOD`, `FECHA_REG`, `HORA_IMPRESION`, `FECHA_IMPRESION`) VALUES
(1, 2, 4, '1', 'OC-N1-1', 1, '...', 2, 0, NULL, NULL, '6', '2018-09-14 20:09:31', '2018-09-14 04:00:00', '21:59:43', '2018-09-14'),
(2, 2, 4, '2', 'OC-N1-2', 1, '...', 2, 0, NULL, NULL, '6', '2018-09-14 20:09:02', '2018-09-14 04:00:00', '21:59:46', '2018-09-14'),
(3, 2, 4, '3', 'OC-N1-3', 1, '...', 2, 0, NULL, NULL, '4', '2018-09-14 20:09:17', '2018-09-14 04:00:00', '21:59:48', '2018-09-14'),
(4, 4, 4, '1', 'OC-TE-1', 3, '...', 2, 0, NULL, NULL, '4', '2018-09-14 20:03:51', '2018-09-14 04:00:00', '21:59:50', '2018-09-14'),
(5, 4, 4, '2', 'OC-TE-2', 3, '...', 2, 0, NULL, NULL, '4', '2018-09-14 20:08:25', '2018-09-14 04:00:00', '21:59:52', '2018-09-14'),
(6, 4, 4, '3', 'OC-TE-3', 3, '...', 2, 0, NULL, NULL, '4', '2018-09-14 20:08:48', '2018-09-14 04:00:00', '21:59:54', '2018-09-14'),
(7, 2, 1, '1', 'CJ-N1-1', 1, '...', 2, 0, NULL, NULL, '4', '2018-09-14 20:03:31', '2018-09-14 04:00:00', '22:00:03', '2018-09-14'),
(8, 2, 1, '2', 'CJ-N1-2', 1, '...', 2, 0, NULL, NULL, '4', '2018-09-14 20:09:23', '2018-09-14 04:00:00', '22:00:05', '2018-09-14'),
(9, 2, 1, '3', 'CJ-N1-3', 1, '...', 0, 0, NULL, NULL, '1', '2018-09-14 20:00:07', '2018-09-14 04:00:00', '22:00:07', '2018-09-14'),
(10, 2, 1, '1', 'CJ-N1-1', 1, '...', 2, 0, NULL, NULL, '4', '2018-09-17 20:20:37', '2018-09-17 04:00:00', '22:10:25', '2018-09-17'),
(11, 4, 2, '1', 'P-TE-1', 3, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:10:47', '2018-09-17 04:00:00', '22:10:47', '2018-09-17'),
(12, 6, 2, '1', 'P-EM-1', 2, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:10:51', '2018-09-17 04:00:00', '22:10:51', '2018-09-17'),
(13, 2, 1, '2', 'CJ-N1-2', 1, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:13:59', '2018-09-17 04:00:00', '22:13:59', '2018-09-17'),
(14, 6, 2, '2', 'P-EM-2', 2, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:14:05', '2018-09-17 04:00:00', '22:14:05', '2018-09-17'),
(15, 4, 2, '2', 'P-TE-2', 3, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:14:07', '2018-09-17 04:00:00', '22:14:07', '2018-09-17'),
(16, 6, 3, '1', 'SRV-EM-1', 2, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:18:18', '2018-09-17 04:00:00', '22:18:18', '2018-09-17'),
(17, 4, 4, '1', 'OC-TE-1', 3, '...', 2, 0, NULL, NULL, '4', '2018-09-17 20:20:27', '2018-09-17 04:00:00', '22:18:31', '2018-09-17'),
(18, 2, 4, '1', 'OC-N1-1', 1, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:18:34', '2018-09-17 04:00:00', '22:18:33', '2018-09-17'),
(19, 2, 1, '3', 'CJ-N1-3', 1, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:18:41', '2018-09-17 04:00:00', '22:18:41', '2018-09-17'),
(20, 2, 1, '4', 'CJ-N1-4', 1, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:18:43', '2018-09-17 04:00:00', '22:18:43', '2018-09-17'),
(21, 6, 2, '3', 'P-EM-3', 2, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:18:47', '2018-09-17 04:00:00', '22:18:47', '2018-09-17'),
(22, 2, 4, '2', 'OC-N1-2', 1, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:19:30', '2018-09-17 04:00:00', '22:19:30', '2018-09-17'),
(23, 4, 4, '2', 'OC-TE-2', 3, '...', 0, 0, NULL, NULL, '1', '2018-09-17 20:19:33', '2018-09-17 04:00:00', '22:19:33', '2018-09-17'),
(24, 2, 1, '1', 'CJ-N1-1', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 15:53:00', '2019-10-26 04:00:00', '17:53:00', '2019-10-26'),
(25, 2, 1, '2', 'CJ-N1-2', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 16:02:40', '2019-10-26 04:00:00', '18:02:40', '2019-10-26'),
(26, 2, 1, '3', 'CJ-N1-3', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 16:07:05', '2019-10-26 04:00:00', '18:07:05', '2019-10-26'),
(27, 2, 1, '4', 'CJ-N1-4', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 16:08:00', '2019-10-26 04:00:00', '18:08:00', '2019-10-26'),
(28, 2, 1, '5', 'CJ-N1-5', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 16:09:18', '2019-10-26 04:00:00', '18:09:18', '2019-10-26'),
(29, 2, 1, '6', 'CJ-N1-6', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 16:12:06', '2019-10-26 04:00:00', '18:12:06', '2019-10-26'),
(30, 2, 1, '7', 'CJ-N1-7', 1, '...', 0, 0, NULL, NULL, '1', '2019-10-26 16:18:47', '2019-10-26 04:00:00', '18:18:47', '2019-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `tk_usuario`
--

CREATE TABLE `tk_usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `NOMBRE_USUARIO` varchar(150) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `PASSWORD` text COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ESTADO_REG` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `FECHA_EXPIRACION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_usuario`
--

INSERT INTO `tk_usuario` (`ID_USUARIO`, `ID_PERSONA`, `NOMBRE_USUARIO`, `PASSWORD`, `ESTADO`, `USUARIO_REG`, `FECHA_REG`, `USUARIO_MOD`, `FECHA_MOD`, `ESTADO_REG`, `FECHA_EXPIRACION`) VALUES
(1, 1, 'romina.medrano', 'romina.medrano', 'activo', NULL, '2019-10-26 15:03:42', NULL, '0000-00-00 00:00:00', NULL, '2018-09-30'),
(2, 2, 'nata.medrano', 'nata.medrano', 'activo', NULL, '2018-09-14 19:34:00', NULL, '0000-00-00 00:00:00', NULL, '2018-09-30'),
(3, 3, 'lola.latra', 'lola.latra', 'activo', NULL, '2019-10-26 16:20:02', NULL, '0000-00-00 00:00:00', NULL, '2018-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `tk_usuario_estacion`
--

CREATE TABLE `tk_usuario_estacion` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ESTACION` int(11) NOT NULL,
  `ID_ZONA` int(11) NOT NULL,
  `ID_USUARIO_ESTACION` int(11) NOT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_usuario_estacion`
--

INSERT INTO `tk_usuario_estacion` (`ID_USUARIO`, `ID_ESTACION`, `ID_ZONA`, `ID_USUARIO_ESTACION`, `FECHA_REG`, `USUARIO_REG`, `FECHA_MOD`, `USUARIO_MOD`, `ESTADO`) VALUES
(1, 1, 1, 1, '2018-09-13 23:30:30', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(1, 1, 4, 2, '2018-09-14 16:02:25', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(2, 2, 4, 3, '2018-09-14 19:27:08', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(3, 3, 4, 4, '2018-09-14 20:06:59', NULL, '0000-00-00 00:00:00', NULL, 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `tk_usuario_zona`
--

CREATE TABLE `tk_usuario_zona` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ZONA` int(11) NOT NULL,
  `ID_USUARIO_ZONA` int(11) NOT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_usuario_zona`
--

INSERT INTO `tk_usuario_zona` (`ID_USUARIO`, `ID_ZONA`, `ID_USUARIO_ZONA`, `FECHA_REG`, `USUARIO_REG`, `FECHA_MOD`, `USUARIO_MOD`, `ESTADO`) VALUES
(1, 1, 1, '2018-09-12 21:50:57', NULL, '0000-00-00 00:00:00', NULL, 'activo'),
(1, 4, 2, '2018-09-12 21:50:57', NULL, '0000-00-00 00:00:00', NULL, 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `tk_zona_atencion`
--

CREATE TABLE `tk_zona_atencion` (
  `ID_ZONA` int(11) NOT NULL,
  `NOMBRE` varchar(300) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `DESCRIPCION` text COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `CODIGO` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `ESTADO` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL,
  `USUARIO_REG` int(11) DEFAULT NULL,
  `FECHA_REG` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `USUARIO_MOD` int(11) DEFAULT NULL,
  `FECHA_MOD` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ESTADO_REG` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `tk_zona_atencion`
--

INSERT INTO `tk_zona_atencion` (`ID_ZONA`, `NOMBRE`, `DESCRIPCION`, `CODIGO`, `ESTADO`, `USUARIO_REG`, `FECHA_REG`, `USUARIO_MOD`, `FECHA_MOD`, `ESTADO_REG`) VALUES
(1, 'Cajas', '<p>\r\n	Cajas</p>\r\n', 'CJ', 'activo', NULL, '2018-09-12 21:23:32', NULL, '0000-00-00 00:00:00', 'activo'),
(2, 'Plataforma', '<p>\r\n	Plataforma</p>\r\n', 'P', 'activo', NULL, '2018-09-12 21:23:47', NULL, '0000-00-00 00:00:00', 'activo'),
(3, 'Servicios', '<p>\r\n	Servicios</p>\r\n', 'SRV', 'activo', NULL, '2018-09-12 21:23:44', NULL, '0000-00-00 00:00:00', 'activo'),
(4, 'ODECO', '<p>\r\n	ODECO</p>\r\n', 'OC', 'activo', NULL, '2018-09-12 21:23:40', NULL, '0000-00-00 00:00:00', 'activo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tk_atencion_actual`
--
ALTER TABLE `tk_atencion_actual`
  ADD PRIMARY KEY (`ID_ATENCION`);

--
-- Indexes for table `tk_bitacora_atencion`
--
ALTER TABLE `tk_bitacora_atencion`
  ADD PRIMARY KEY (`ID_BITACORA_ATENCION`),
  ADD KEY `FK_R1` (`ID_USUARIO`),
  ADD KEY `FK_R2` (`ID_TICKET`);

--
-- Indexes for table `tk_bitacora_categoria`
--
ALTER TABLE `tk_bitacora_categoria`
  ADD PRIMARY KEY (`ID_BITACORA_CATEGORIA`),
  ADD KEY `FK_R9` (`ID_CATEGORIA`);

--
-- Indexes for table `tk_categoria`
--
ALTER TABLE `tk_categoria`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indexes for table `tk_categoria_zona`
--
ALTER TABLE `tk_categoria_zona`
  ADD PRIMARY KEY (`ID_CATEGORIA_ZONA`),
  ADD KEY `FK_R11` (`ID_ZONA`),
  ADD KEY `FK_R12` (`ID_CATEGORIA`);

--
-- Indexes for table `tk_categoria_zona_bitacora`
--
ALTER TABLE `tk_categoria_zona_bitacora`
  ADD PRIMARY KEY (`ID_CAT_ZONA_BITACORA`),
  ADD KEY `FK_R16` (`ID_CATEGORIA_ZONA`);

--
-- Indexes for table `tk_estacion`
--
ALTER TABLE `tk_estacion`
  ADD PRIMARY KEY (`ID_ESTACION`),
  ADD KEY `FK_R20` (`ID_ZONA`);

--
-- Indexes for table `tk_multimedia`
--
ALTER TABLE `tk_multimedia`
  ADD PRIMARY KEY (`id_multimedia`);

--
-- Indexes for table `tk_persona`
--
ALTER TABLE `tk_persona`
  ADD PRIMARY KEY (`ID_PERSONA`),
  ADD KEY `FK_R6` (`ID_USUARIO`);

--
-- Indexes for table `tk_solicitud_ticket`
--
ALTER TABLE `tk_solicitud_ticket`
  ADD PRIMARY KEY (`ID_SOLICITUD`),
  ADD KEY `FK_R5` (`ID_USUARIO`),
  ADD KEY `FK_R8` (`ID_TICKET`);

--
-- Indexes for table `tk_ticket`
--
ALTER TABLE `tk_ticket`
  ADD PRIMARY KEY (`ID_TICKET`),
  ADD KEY `FK_R3` (`ID_CATEGORIA`);

--
-- Indexes for table `tk_usuario`
--
ALTER TABLE `tk_usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `FK_R7` (`ID_PERSONA`);

--
-- Indexes for table `tk_usuario_estacion`
--
ALTER TABLE `tk_usuario_estacion`
  ADD PRIMARY KEY (`ID_USUARIO_ESTACION`);

--
-- Indexes for table `tk_usuario_zona`
--
ALTER TABLE `tk_usuario_zona`
  ADD PRIMARY KEY (`ID_USUARIO_ZONA`),
  ADD KEY `FK_R10` (`ID_ZONA`),
  ADD KEY `FK_R4` (`ID_USUARIO`);

--
-- Indexes for table `tk_zona_atencion`
--
ALTER TABLE `tk_zona_atencion`
  ADD PRIMARY KEY (`ID_ZONA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tk_atencion_actual`
--
ALTER TABLE `tk_atencion_actual`
  MODIFY `ID_ATENCION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tk_bitacora_atencion`
--
ALTER TABLE `tk_bitacora_atencion`
  MODIFY `ID_BITACORA_ATENCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tk_bitacora_categoria`
--
ALTER TABLE `tk_bitacora_categoria`
  MODIFY `ID_BITACORA_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tk_categoria`
--
ALTER TABLE `tk_categoria`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tk_categoria_zona`
--
ALTER TABLE `tk_categoria_zona`
  MODIFY `ID_CATEGORIA_ZONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tk_categoria_zona_bitacora`
--
ALTER TABLE `tk_categoria_zona_bitacora`
  MODIFY `ID_CAT_ZONA_BITACORA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tk_estacion`
--
ALTER TABLE `tk_estacion`
  MODIFY `ID_ESTACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tk_multimedia`
--
ALTER TABLE `tk_multimedia`
  MODIFY `id_multimedia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tk_persona`
--
ALTER TABLE `tk_persona`
  MODIFY `ID_PERSONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tk_solicitud_ticket`
--
ALTER TABLE `tk_solicitud_ticket`
  MODIFY `ID_SOLICITUD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tk_ticket`
--
ALTER TABLE `tk_ticket`
  MODIFY `ID_TICKET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tk_usuario`
--
ALTER TABLE `tk_usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tk_usuario_estacion`
--
ALTER TABLE `tk_usuario_estacion`
  MODIFY `ID_USUARIO_ESTACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tk_usuario_zona`
--
ALTER TABLE `tk_usuario_zona`
  MODIFY `ID_USUARIO_ZONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tk_zona_atencion`
--
ALTER TABLE `tk_zona_atencion`
  MODIFY `ID_ZONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tk_bitacora_atencion`
--
ALTER TABLE `tk_bitacora_atencion`
  ADD CONSTRAINT `FK_R1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tk_usuario` (`ID_USUARIO`),
  ADD CONSTRAINT `FK_R2` FOREIGN KEY (`ID_TICKET`) REFERENCES `tk_ticket` (`ID_TICKET`);

--
-- Constraints for table `tk_bitacora_categoria`
--
ALTER TABLE `tk_bitacora_categoria`
  ADD CONSTRAINT `FK_R9` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `tk_categoria` (`ID_CATEGORIA`);

--
-- Constraints for table `tk_categoria_zona`
--
ALTER TABLE `tk_categoria_zona`
  ADD CONSTRAINT `FK_R11` FOREIGN KEY (`ID_ZONA`) REFERENCES `tk_zona_atencion` (`ID_ZONA`),
  ADD CONSTRAINT `FK_R12` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `tk_categoria` (`ID_CATEGORIA`);

--
-- Constraints for table `tk_categoria_zona_bitacora`
--
ALTER TABLE `tk_categoria_zona_bitacora`
  ADD CONSTRAINT `FK_R16` FOREIGN KEY (`ID_CATEGORIA_ZONA`) REFERENCES `tk_categoria_zona` (`ID_CATEGORIA_ZONA`);

--
-- Constraints for table `tk_estacion`
--
ALTER TABLE `tk_estacion`
  ADD CONSTRAINT `FK_R20` FOREIGN KEY (`ID_ZONA`) REFERENCES `tk_zona_atencion` (`ID_ZONA`);

--
-- Constraints for table `tk_persona`
--
ALTER TABLE `tk_persona`
  ADD CONSTRAINT `FK_R6` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tk_usuario` (`ID_USUARIO`);

--
-- Constraints for table `tk_solicitud_ticket`
--
ALTER TABLE `tk_solicitud_ticket`
  ADD CONSTRAINT `FK_R5` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tk_usuario` (`ID_USUARIO`),
  ADD CONSTRAINT `FK_R8` FOREIGN KEY (`ID_TICKET`) REFERENCES `tk_ticket` (`ID_TICKET`);

--
-- Constraints for table `tk_ticket`
--
ALTER TABLE `tk_ticket`
  ADD CONSTRAINT `FK_R3` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `tk_categoria` (`ID_CATEGORIA`);

--
-- Constraints for table `tk_usuario`
--
ALTER TABLE `tk_usuario`
  ADD CONSTRAINT `FK_R7` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tk_persona` (`ID_PERSONA`);

--
-- Constraints for table `tk_usuario_zona`
--
ALTER TABLE `tk_usuario_zona`
  ADD CONSTRAINT `FK_R10` FOREIGN KEY (`ID_ZONA`) REFERENCES `tk_zona_atencion` (`ID_ZONA`),
  ADD CONSTRAINT `FK_R4` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tk_usuario` (`ID_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
