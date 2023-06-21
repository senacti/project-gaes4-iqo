-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 03:12:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iqo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendamiento`
--

CREATE TABLE `agendamiento` (
  `ID_AGENDAMIENTO` int(11) NOT NULL,
  `DESCRIPC_AGENDAMIENTO` varchar(50) DEFAULT NULL,
  `HORA_AGENDAMIENTO` time DEFAULT NULL,
  `FECHA_AGENDAMIENTO` date DEFAULT NULL,
  `ID_ESTADO_DISPONIBILIDAD` int(11) DEFAULT NULL,
  `ID_EMPLEADO` int(11) DEFAULT NULL,
  `ID_SERVICIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agendamiento`
--

INSERT INTO `agendamiento` (`ID_AGENDAMIENTO`, `DESCRIPC_AGENDAMIENTO`, `HORA_AGENDAMIENTO`, `FECHA_AGENDAMIENTO`, `ID_ESTADO_DISPONIBILIDAD`, `ID_EMPLEADO`, `ID_SERVICIO`) VALUES
(1, 'seguimiento al servicio', '01:00:00', '0000-00-00', 1, 7, 1),
(2, 'seguimiento al servicio', '02:00:00', '0000-00-00', 1, 25, 3),
(3, 'enviar notificacion', '10:00:00', '0000-00-00', 1, 21, 2),
(4, 'sin observacion', '09:00:00', '0000-00-00', 1, 8, 4),
(5, 'sin observacion', '08:00:00', '0000-00-00', 1, 7, 5),
(6, 'trabajo terminado', '01:00:00', '0000-00-00', 1, 8, 1),
(7, 'mantenimiento camara', '02:00:00', '0000-00-00', 1, 26, 3),
(8, 'seguimiento al servicio', '10:00:00', '0000-00-00', 1, 21, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL,
  `NOMBRE_CARGO` varchar(30) DEFAULT NULL,
  `ID_ESPECIALIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `NOMBRE_CARGO`, `ID_ESPECIALIDAD`) VALUES
(2, 'Mensajero', 2),
(4, 'Vendedor', 4),
(5, 'Gerente', 5),
(11, 'Tecnico', 11),
(12, 'Tecnico', 12),
(13, 'Tecnico', 13),
(31, 'Administrador', 31),
(32, 'Administrador', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOMBRE_CATEGORIA` varchar(40) DEFAULT NULL,
  `DESCRIPCION_CATEGORIA` varchar(50) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`, `DESCRIPCION_CATEGORIA`, `ID_PRODUCTO`) VALUES
(1, 'DVR', 'Categorizar DVR', 29),
(2, 'CAMARAS', 'Categorizar Camara', 1),
(3, 'CABLES', 'Categorizar Cables', 26),
(4, 'CAMARAS', 'Categorizar Camara', 1),
(5, 'RACKS', 'Categorizar Rack', 34),
(6, 'CAMARAS', 'Categorizar Camara', 12),
(7, 'CAMARAS', 'Categorizar Camara', 13),
(8, 'CAMARAS', 'Categorizar Camara', 1),
(9, 'CAMARAS', 'Categorizar Camara', 2),
(10, 'CABLES', 'Categorizar Cables', 27),
(11, 'ADAPTADORES', 'Categorizar Adaptador', 33),
(12, 'RACKS', 'Categorizar Rack', 34),
(13, 'CAMARAS', 'Categorizar Camara', 14),
(14, 'RACKS', 'Categorizar Rack', 34),
(15, 'RACKS', 'Categorizar Rack', 34),
(16, 'RACKS', 'Categorizar Rack', 34),
(17, 'RACKS', 'Categorizar Rack', 34),
(18, 'CAMARAS', 'Categorizar Camara', 15),
(19, 'CAMARAS', 'Categorizar Camara', 3),
(20, 'CABLES', 'Categorizar Cables', 26),
(21, 'CAMARAS', 'Categorizar Camara', 4),
(22, 'CAMARAS', 'Categorizar Camara', 5),
(23, 'CAMARAS', 'Categorizar Camara', 6),
(24, 'CAMARAS', 'Categorizar Camara', 7),
(25, 'CAMARAS', 'Categorizar Camara', 8),
(26, 'CAMARAS', 'Categorizar Camara', 9),
(27, 'CAMARAS', 'Categorizar Camara', 10),
(28, 'CAMARAS', 'Categorizar Camara', 16),
(29, 'DISCO DURO', 'Catgorizar Disco Duro', 28),
(30, 'CAMARAS', 'Categorizar Camara', 11),
(31, 'CABLES', 'Categorizar Cables', 27),
(32, 'CABLES', 'Categorizar Cables', 27),
(33, 'DISCO DURO', 'Catgorizar Disco Duro', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_CIUDAD` int(11) NOT NULL,
  `NOMBRE_CIUDAD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ID_CIUDAD`, `NOMBRE_CIUDAD`) VALUES
(1, 'Bogota\r'),
(2, 'Medellin\r'),
(3, 'Cali\r'),
(4, 'Barranquilla\r'),
(5, 'Cartagena\r'),
(6, 'Bucaramanga\r'),
(7, 'Pereira\r'),
(8, 'Cucuta\r'),
(9, 'Santa Marta\r'),
(10, 'Villavicencio\r'),
(11, 'Ibague\r'),
(12, 'Pasto\r'),
(13, 'Manizales\r'),
(14, 'Monteria\r'),
(15, 'Neiva\r'),
(16, 'Valledupar\r'),
(17, 'Armenia\r'),
(18, 'Sincelejo\r'),
(19, 'Tunja\r'),
(20, 'Florencia\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_TIPO_CLIEN` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `ID_TIPO_CLIEN`, `ID_USUARIO`) VALUES
(1, 1, 3),
(2, 2, 14),
(3, 3, 18),
(4, 4, 22),
(5, 1, 29),
(6, 2, 33),
(7, 3, 34),
(8, 4, 35),
(9, 1, 36),
(10, 2, 37),
(11, 3, 38),
(12, 4, 39),
(13, 1, 40),
(14, 2, 41),
(15, 3, 42),
(16, 4, 43),
(17, 1, 44),
(18, 2, 45),
(19, 3, 46),
(20, 4, 47),
(21, 1, 48),
(22, 2, 49),
(23, 3, 50),
(24, 4, 51),
(25, 1, 52),
(26, 2, 53),
(27, 3, 54),
(28, 4, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID_CONTACTO` int(11) NOT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  `ID_CIUDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`ID_CONTACTO`, `DIRECCION`, `ID_CIUDAD`) VALUES
(1, 'Carrera 10 #24-45', 15),
(2, 'Calle 5 #17A-12', 8),
(3, 'Avenida 15 #33-78', 3),
(4, 'Transversal 22 #40-63', 19),
(5, 'Diagonal 8A #12-25', 12),
(6, 'Calle 40 #19-55', 2),
(7, 'Carrera 17 #28-40', 6),
(8, 'Avenida 25 #14A-30', 10),
(9, 'Transversal 12B #22-17', 18),
(10, 'Calle 30 #11-48', 5),
(11, 'Carrera 8 #42-59', 14),
(12, 'Diagonal 18A #35-22', 7),
(13, 'Avenida 7 #10-27', 1),
(14, 'Calle 12B #29-14', 17),
(15, 'Transversal 24 #16-33', 9),
(16, 'Carrera 32 #19A-50', 11),
(17, 'Avenida 21 #27-19', 4),
(18, 'Calle 9A #36-42', 13),
(19, 'Diagonal 14 #23-38', 20),
(20, 'Carrera 25 #31-26', 16),
(21, 'Transversal 11 #18-24', 3),
(22, 'Calle 35 #15-19', 10),
(23, 'Avenida 18 #22-11', 19),
(24, 'Diagonal 7A #14-30', 6),
(25, 'Carrera 20 #28-35', 13),
(26, 'Calle 22B #17A-40', 1),
(27, 'Transversal 28A #21-17', 11),
(28, 'Avenida 10 #32-48', 18),
(29, 'Calle 27 #9-22', 14),
(30, 'Carrera 11 #36-19', 8),
(31, 'Diagonal 16 #25-33', 20),
(32, 'Avenida 23 #19-14', 2),
(33, 'Aqu? tienes una lista de direc', 1),
(34, 'Avenida 39 #89', 2),
(35, 'Calle 123 # 45-67, Barrio El D', 4),
(36, 'Carrera 10 # 98-76, Barrio La ', 3),
(37, 'Avenida 56 # 12-34, Barrio San', 2),
(38, 'Calle 78 # 23-45, Barrio Santa', 3),
(39, 'Carrera 32 # 54-76, Barrio La ', 6),
(40, 'Avenida 87 # 65-43, Barrio El ', 7),
(41, 'Calle 21 # 67-89, Barrio Los A', 8),
(42, 'Carrera 43 # 76-98, Barrio El ', 9),
(43, 'Avenida 90 # 34-56, Barrio Cha', 8),
(44, 'Calle 56 # 89-12, Barrio Quint', 1),
(45, 'Carrera 78 # 45-67, Barrio La ', 1),
(46, 'Avenida 34 # 76-98, Barrio Teu', 1),
(47, 'Calle 67 # 23-45, Barrio Galer', 1),
(48, 'Carrera 12 # 54-76, Barrio San', 1),
(49, 'Avenida 45 # 32-54, Barrio Ciu', 1),
(50, 'Calle 98 # 67-89, Barrio Model', 1),
(51, 'Carrera 23 # 76-98, Barrio Ced', 1),
(52, 'Avenida 76 # 34-56, Barrio La ', 1),
(53, 'Calle 54 # 89-12, Barrio Kenne', 1),
(54, 'Carrera 67 # 45-67, Barrio Usa', 1),
(55, 'Cll 157 no.15-32', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_EMPLEADO` int(11) NOT NULL,
  `ID_TIEMPO_TRABAJO` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ID_CARGO` int(11) DEFAULT NULL,
  `ID_ESTADO_DISPONIBILIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_EMPLEADO`, `ID_TIEMPO_TRABAJO`, `ID_USUARIO`, `ID_CARGO`, `ID_ESTADO_DISPONIBILIDAD`) VALUES
(1, 3, 1, 5, 1),
(2, 3, 2, 2, 1),
(3, 1, 4, 31, 1),
(4, 2, 5, 5, 1),
(5, 1, 6, 2, 1),
(6, 2, 7, 4, 1),
(7, 3, 8, 11, 1),
(8, 1, 9, 12, 2),
(9, 2, 10, 32, 1),
(10, 3, 11, 4, 2),
(11, 1, 12, 2, 1),
(12, 2, 13, 31, 1),
(13, 2, 15, 32, 1),
(14, 2, 16, 4, 1),
(15, 2, 17, 5, 2),
(16, 1, 19, 5, 2),
(17, 2, 20, 31, 1),
(18, 1, 21, 5, 2),
(19, 2, 23, 32, 1),
(20, 3, 24, 5, 2),
(21, 3, 25, 12, 1),
(22, 2, 26, 2, 1),
(23, 3, 27, 4, 1),
(24, 2, 28, 4, 2),
(25, 3, 30, 13, 1),
(26, 2, 31, 13, 2),
(27, 1, 32, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidadcargo`
--

CREATE TABLE `especialidadcargo` (
  `ID_ESPECIALIDAD` int(11) NOT NULL,
  `ESPECIALIDAD_CARGO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidadcargo`
--

INSERT INTO `especialidadcargo` (`ID_ESPECIALIDAD`, `ESPECIALIDAD_CARGO`) VALUES
(2, 'Mensajero\r'),
(4, 'Vendedor\r'),
(5, 'Gerente Central\r'),
(11, 'tecnico electricista\r'),
(12, 'tecnico de instalacion electronica\r'),
(13, 'tecnico en mantenimiento\r'),
(31, 'Administrador de Personal\r'),
(32, 'Administrador Inventario\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadodisponibilidad`
--

CREATE TABLE `estadodisponibilidad` (
  `ID_ESTADO_DISPONIBILIDAD` int(11) NOT NULL,
  `DESCRIPCION_ESTADO_DIS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadodisponibilidad`
--

INSERT INTO `estadodisponibilidad` (`ID_ESTADO_DISPONIBILIDAD`, `DESCRIPCION_ESTADO_DIS`) VALUES
(1, 'Disponible\r'),
(2, 'No disponible\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedidoclien`
--

CREATE TABLE `estadopedidoclien` (
  `CODIGO_ESTADO` int(11) NOT NULL,
  `ESTADO_PEDIDO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadopedidoclien`
--

INSERT INTO `estadopedidoclien` (`CODIGO_ESTADO`, `ESTADO_PEDIDO`) VALUES
(1, 'Completado\r'),
(2, 'Pendiente\r'),
(3, 'Enviado\r'),
(4, 'Recogido\r'),
(5, 'En Proceso\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedidoprov`
--

CREATE TABLE `estadopedidoprov` (
  `ID_ESTADO_PEDIDO_PROVEEDOR` int(11) NOT NULL,
  `NOMBRE_ESTADO_PEDIDO_PROVEEDOR` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadopedidoprov`
--

INSERT INTO `estadopedidoprov` (`ID_ESTADO_PEDIDO_PROVEEDOR`, `NOMBRE_ESTADO_PEDIDO_PROVEEDOR`) VALUES
(1, 'Pedido\r'),
(2, 'Entrega Pedido\r'),
(3, 'Entrega con Retraso\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoserv`
--

CREATE TABLE `estadoserv` (
  `ID_ESTADO_SERV` int(11) NOT NULL,
  `NOMBRE_ESTADO_SERV` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadoserv`
--

INSERT INTO `estadoserv` (`ID_ESTADO_SERV`, `NOMBRE_ESTADO_SERV`) VALUES
(1, 'Activo\r'),
(2, 'Inactivo\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estnovedadespedidoprov`
--

CREATE TABLE `estnovedadespedidoprov` (
  `ID_ESTADO_NOVEDADES_PEDIDO_PROV` int(11) NOT NULL,
  `NOMBRE_ESTADO_NOVEDADES_PEDIDO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estnovedadespedidoprov`
--

INSERT INTO `estnovedadespedidoprov` (`ID_ESTADO_NOVEDADES_PEDIDO_PROV`, `NOMBRE_ESTADO_NOVEDADES_PEDIDO`) VALUES
(1, 'Completado\r'),
(2, 'Pendiente\r'),
(3, 'Enviado\r'),
(4, 'Recogido\r'),
(5, 'En Proceso\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoinventario`
--

CREATE TABLE `flujoinventario` (
  `ID_FLUJO` int(11) NOT NULL,
  `ID_TIPO_FLUJO` int(11) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujoinventario`
--

INSERT INTO `flujoinventario` (`ID_FLUJO`, `ID_TIPO_FLUJO`, `ID_PRODUCTO`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 2, 9),
(10, 1, 10),
(11, 2, 11),
(12, 1, 12),
(13, 2, 13),
(14, 1, 14),
(15, 2, 15),
(16, 1, 16),
(17, 2, 17),
(18, 1, 18),
(19, 2, 19),
(20, 2, 20),
(21, 2, 21),
(22, 2, 22),
(23, 2, 23),
(24, 2, 24),
(25, 1, 25),
(26, 2, 26),
(27, 1, 27),
(28, 2, 28),
(29, 1, 29),
(30, 2, 30),
(31, 1, 31),
(32, 1, 32),
(33, 1, 1),
(34, 2, 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantia`
--

CREATE TABLE `garantia` (
  `ID_GARANTIA` int(11) NOT NULL,
  `DESCRIPCION_GARANTIA` varchar(50) DEFAULT NULL,
  `TIEMPO_GARANTIA` varchar(30) DEFAULT NULL,
  `ID_TIPO_GARANTIA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `garantia`
--

INSERT INTO `garantia` (`ID_GARANTIA`, `DESCRIPCION_GARANTIA`, `TIEMPO_GARANTIA`, `ID_TIPO_GARANTIA`) VALUES
(1, 'Garantia Camaras', '30 dias', 1),
(2, 'Garantia Cables', '20 dias', 1),
(3, 'instalacion camara', '20 dias', 2),
(4, 'Garantia UPS', '10 dias', 1),
(5, 'Garantia Fuentes', '10 dias', 1),
(6, 'Garantia Disco Duro', '30 dias', 1),
(7, 'Garantia Dvr', '20 dias', 1),
(8, 'instalacion cables', '10 dias', 2),
(9, 'instalacion UPS', '20 dias', 2),
(10, 'mantenimiento camara', '20 dias', 2),
(11, 'instalacion dvr', '10 dias', 2),
(12, 'mantenimiento disco duro', '20 dias', 2),
(13, 'instalacion fuentes', '10 dias', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_MARCA` int(11) NOT NULL,
  `NOMBRE_MARCA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`ID_MARCA`, `NOMBRE_MARCA`) VALUES
(1, 'HikVision\r'),
(2, 'Dahua\r'),
(3, 'Axis Communications\r'),
(4, 'Samsung Techwin\r'),
(5, 'Lorex\r'),
(6, 'Zmodo\r'),
(7, 'Uniview\r'),
(8, 'Vision\r'),
(9, 'HoneyWell\r'),
(10, 'Nest\r'),
(11, 'Foscam\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedadespedidoprov`
--

CREATE TABLE `novedadespedidoprov` (
  `ID_NOVEDADES_PEDIDO_PROV` int(11) NOT NULL,
  `FECHA_NOVEDAD_PEDIDO_PROV` date DEFAULT NULL,
  `ID_ESTADO_NOVEDADES_PEDIDO_PROV` int(11) DEFAULT NULL,
  `ID_EMPLEADO` int(11) DEFAULT NULL,
  `ID_PEDIDO_PROVEEDOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `novedadespedidoprov`
--

INSERT INTO `novedadespedidoprov` (`ID_NOVEDADES_PEDIDO_PROV`, `FECHA_NOVEDAD_PEDIDO_PROV`, `ID_ESTADO_NOVEDADES_PEDIDO_PROV`, `ID_EMPLEADO`, `ID_PEDIDO_PROVEEDOR`) VALUES
(1, '0000-00-00', 1, 2, 1),
(2, '0000-00-00', 2, 5, 2),
(3, '0000-00-00', 3, 11, 3),
(4, '0000-00-00', 4, 27, 1),
(5, '0000-00-00', 5, 2, 2),
(6, '0000-00-00', 1, 5, 3),
(7, '0000-00-00', 2, 11, 1),
(8, '0000-00-00', 3, 27, 2),
(9, '0000-00-00', 4, 2, 3),
(10, '0000-00-00', 5, 5, 1),
(11, '0000-00-00', 1, 11, 2),
(12, '0000-00-00', 2, 27, 3),
(13, '0000-00-00', 3, 2, 1),
(14, '0000-00-00', 4, 5, 2),
(15, '0000-00-00', 5, 11, 3),
(16, '0000-00-00', 1, 27, 1),
(17, '2051-02-05', 2, 2, 2),
(18, '0000-00-00', 3, 5, 3),
(19, '0000-00-00', 4, 11, 1),
(20, '0000-00-00', 5, 27, 2),
(21, '0000-00-00', 1, 2, 3),
(22, '2010-12-06', 2, 5, 1),
(23, '1971-12-06', 3, 11, 2),
(24, '0000-00-00', 4, 27, 3),
(25, '0000-00-00', 5, 2, 1),
(26, '0000-00-00', 1, 5, 2),
(27, '0000-00-00', 2, 11, 3),
(28, '0000-00-00', 3, 27, 1),
(29, '0000-00-00', 4, 2, 2),
(30, '0000-00-00', 5, 5, 3),
(31, '0000-00-00', 1, 11, 1),
(32, '0000-00-00', 2, 27, 2),
(33, '0000-00-00', 3, 2, 3),
(34, '0000-00-00', 4, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoclien`
--

CREATE TABLE `pedidoclien` (
  `ID_PEDIDO` int(11) NOT NULL,
  `FECHA_PEDIDO` date DEFAULT NULL,
  `CANTIDAD_PEDIDO` int(11) DEFAULT NULL,
  `CODIGO_ESTADO` int(11) DEFAULT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL,
  `ID_AGENDAMIENTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidoclien`
--

INSERT INTO `pedidoclien` (`ID_PEDIDO`, `FECHA_PEDIDO`, `CANTIDAD_PEDIDO`, `CODIGO_ESTADO`, `ID_CLIENTE`, `ID_PRODUCTO`, `ID_AGENDAMIENTO`) VALUES
(1, '0000-00-00', 5, 1, 1, 1, 2),
(2, '0000-00-00', 10, 2, 2, 2, 5),
(3, '0000-00-00', 1, 3, 3, 3, 1),
(4, '0000-00-00', 3, 4, 4, 4, 3),
(5, '0000-00-00', 2, 5, 5, 3, 6),
(6, '0000-00-00', 3, 1, 6, 4, 4),
(7, '0000-00-00', 4, 2, 7, 5, 2),
(8, '0000-00-00', 5, 3, 8, 6, 1),
(9, '0000-00-00', 3, 4, 9, 7, 3),
(10, '0000-00-00', 4, 5, 10, 23, 6),
(11, '0000-00-00', 5, 1, 11, 2, 5),
(12, '0000-00-00', 12, 2, 12, 24, 2),
(13, '0000-00-00', 6, 3, 13, 25, 4),
(14, '0000-00-00', 7, 4, 14, 26, 1),
(15, '0000-00-00', 6, 5, 15, 23, 6),
(16, '0000-00-00', 4, 1, 16, 32, 3),
(17, '0000-00-00', 5, 2, 17, 31, 5),
(18, '0000-00-00', 6, 2, 18, 12, 2),
(19, '0000-00-00', 5, 3, 19, 11, 1),
(20, '0000-00-00', 4, 4, 20, 10, 4),
(21, '0000-00-00', 5, 5, 21, 11, 6),
(22, '0000-00-00', 54, 1, 22, 12, 3),
(23, '0000-00-00', 78, 2, 23, 13, 2),
(24, '0000-00-00', 7, 3, 24, 14, 5),
(25, '0000-00-00', 8, 4, 25, 15, 1),
(26, '0000-00-00', 23, 5, 26, 16, 6),
(27, '0000-00-00', 3, 1, 27, 16, 4),
(28, '0000-00-00', 3, 2, 28, 23, 3),
(29, '0000-00-00', 2, 3, 13, 25, 2),
(30, '0000-00-00', 34, 4, 14, 26, 5),
(31, '0000-00-00', 5, 1, 15, 27, 1),
(32, '0000-00-00', 7, 2, 16, 28, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoproveedor`
--

CREATE TABLE `pedidoproveedor` (
  `ID_PEDIDO_PROVEEDOR` int(11) NOT NULL,
  `FECHA_PEDIDO` date DEFAULT NULL,
  `CANTIDAD_PRODUCTO` int(11) DEFAULT NULL,
  `PRECIO_PEDIDO` float DEFAULT NULL,
  `FECHA_ENTREGA` date DEFAULT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  `ID_ESTADO_PEDIDO_PROVEEDOR` int(11) DEFAULT NULL,
  `ID_EMPLEADO` int(11) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL,
  `ID_PROVEEDOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidoproveedor`
--

INSERT INTO `pedidoproveedor` (`ID_PEDIDO_PROVEEDOR`, `FECHA_PEDIDO`, `CANTIDAD_PRODUCTO`, `PRECIO_PEDIDO`, `FECHA_ENTREGA`, `DIRECCION`, `ID_ESTADO_PEDIDO_PROVEEDOR`, `ID_EMPLEADO`, `ID_PRODUCTO`, `ID_PROVEEDOR`) VALUES
(1, '0000-00-00', 10, 1000000, '2023-03-13', 'Carrera 1 # 123-45', 1, 1, 18, 7),
(2, '0000-00-00', 23, 200000, '0000-00-00', 'Calle 2 # 678-90', 2, 3, 10, 3),
(3, '0000-00-00', 56, 30000, '0000-00-00', 'Avenida 3 Este # 543-21', 3, 4, 28, 9),
(4, '0000-00-00', 89, 5000000, '0000-00-00', 'Diagonal 4 # 876-54', 3, 9, 24, 1),
(5, '0000-00-00', 21, 8000000, '0000-00-00', 'Transversal 5 # 210-98', 2, 12, 29, 5),
(6, '0000-00-00', 2, 60000, '0000-00-00', 'Carrera 6 # 765-43', 1, 13, 16, 8),
(7, '0000-00-00', 11, 20000, '0000-00-00', 'Calle 7 # 109-87', 2, 15, 8, 2),
(8, '0000-00-00', 12, 50000, '0000-00-00', 'Avenida 8 Este # 654-32', 2, 16, 21, 6),
(9, '0000-00-00', 13, 4100000, '0000-00-00', 'Diagonal 9 # 987-65', 2, 17, 3, 4),
(10, '0000-00-00', 15, 20000, '0000-00-00', 'Transversal 10 # 321-09', 2, 18, 13, 10),
(11, '0000-00-00', 16, 60000, '0000-00-00', 'Carrera 11 # 654-32', 2, 19, 2, 2),
(12, '0000-00-00', 20, 20000, '0000-00-00', 'Calle 12 # 987-65', 2, 20, 30, 9),
(13, '0000-00-00', 23, 50000, '0000-00-00', 'Avenida 13 Este # 210-98', 2, 1, 27, 3),
(14, '0000-00-00', 15, 60000, '0000-00-00', 'Diagonal 14 # 543-21', 2, 3, 5, 8),
(15, '0000-00-00', 16, 80000, '0000-00-00', 'Transversal 15 # 876-54', 2, 4, 14, 6),
(16, '0000-00-00', 20, 9000000, '0000-00-00', 'Carrera 16 # 321-09', 2, 9, 23, 1),
(17, '0000-00-00', 30, 200000, '0000-00-00', 'Calle 17 # 654-32', 2, 12, 7, 7),
(18, '0000-00-00', 30, 300000, '0000-00-00', 'Avenida 18 Este # 987-65', 2, 13, 15, 5),
(19, '0000-00-00', 23, 6000, '0000-00-00', 'Diagonal 19 # 210-98', 2, 15, 1, 4),
(20, '0000-00-00', 15, 30000, '0000-00-00', 'Transversal 20 # 543-21', 2, 16, 19, 10),
(21, '0000-00-00', 16, 50000, '0000-00-00', 'Carrera 21 # 876-54', 2, 17, 26, 6),
(22, '0000-00-00', 18, 10000, '0000-00-00', 'Calle 22 # 321-09', 2, 18, 6, 3),
(23, '0000-00-00', 19, 50000000, '0000-00-00', 'Avenida 23 Este # 654-32', 2, 19, 9, 2),
(24, '0000-00-00', 20, 6000000, '0000-00-00', 'Diagonal 24 # 987-65', 2, 20, 32, 8),
(25, '0000-00-00', 21, 30000, '0000-00-00', 'Transversal 25 # 210-98', 2, 1, 25, 9),
(26, '0000-00-00', 22, 5500000, '0000-00-00', 'Carrera 26 # 543-21', 2, 3, 11, 7),
(27, '0000-00-00', 23, 62000, '0000-00-00', 'Calle 27 # 876-54', 2, 4, 4, 1),
(28, '0000-00-00', 25, 200000, '0000-00-00', 'Avenida 28 Este # 321-09', 2, 9, 31, 4),
(29, '0000-00-00', 26, 2200000, '0000-00-00', 'Diagonal 29 # 654-32', 2, 12, 20, 5),
(30, '0000-00-00', 27, 20000, '0000-00-00', 'Transversal 30 # 987-65', 2, 13, 12, 10),
(31, '0000-00-00', 28, 30000, '0000-00-00', 'Carrera 31 # 210-98', 2, 15, 17, 6),
(32, '0000-00-00', 29, 1000000, '0000-00-00', 'Calle 32 # 543-21', 2, 16, 22, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `ID_PERMISOS` int(11) NOT NULL,
  `TIPO_PERMISO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`ID_PERMISOS`, `TIPO_PERMISO`) VALUES
(1, 'Permitido\r'),
(2, 'Denegado\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(50) DEFAULT NULL,
  `DESCRIPCION_PRODUCTO` varchar(50) DEFAULT NULL,
  `REFERENCIA_PRODUCTO` varchar(50) DEFAULT NULL,
  `VALOR_PRODUCTO` float DEFAULT NULL,
  `CANTIDAD_PRODUCTO` int(11) DEFAULT NULL,
  `ID_MARCA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `NOMBRE_PRODUCTO`, `DESCRIPCION_PRODUCTO`, `REFERENCIA_PRODUCTO`, `VALOR_PRODUCTO`, `CANTIDAD_PRODUCTO`, `ID_MARCA`) VALUES
(1, 'CAMARA DOMO', 'Camara de seguridad con carcasa domo', 'CAM001', 100, 123, 1),
(2, 'CAMARA BULLET', 'Camara de seguridad con carcasa bullet', 'CAM002', 200000, 52, 2),
(3, 'CAMARA PTZ', 'Camara de seguridad con movimiento PTZ', 'CAM003', 50000, 15, 3),
(4, 'CAMARA IP', 'Camara de seguridad con conexion IP', 'CAM004', 60000, 263, 4),
(5, 'CAMARA OCULTA', 'Camara de seguridad oculta', 'CAM005', 30000, 25, 5),
(6, 'KIT DE CAMARAS', 'Kit de 4 camaras de seguridad', 'KIT001', 40000, 62, 6),
(7, 'CAMARA PANORAMICA', 'Camara de seguridad panoramica', 'CAM006', 80000, 35, 7),
(8, 'CAMARA INALAMBRICA', 'Camara de seguridad con conexion inalambrica', 'CAM007', 90000, 369, 8),
(9, 'CAMARA DE INTERIOR', 'Camara de seguridad para interiores', 'CAM008', 200000, 52, 9),
(10, 'CAMARA DE EXTERIOR', 'Camara de seguridad para exteriores', 'CAM009', 30000, 62, 10),
(11, 'CAMARA CON AUDIO', 'Camara de seguridad con audio bidireccional', 'CAM010', 2000, 15, 11),
(12, 'CAMARA DE 360 GRADOS', 'Camara de seguridad de 360 grados', 'CAM011', 30000, 26, 1),
(13, 'CAMARA DE VIGILANCIA', 'Camara de seguridad para vigilancia', 'CAM012', 1000, 52, 2),
(14, 'CAMARA CON ZOOM', 'Camara de seguridad con zoom', 'CAM013', 52000, 5, 3),
(15, 'CAMARA CON SENSOR DE MOVIMIENTO', 'Camara de seguridad con sensor de movimiento', 'CAM014', 5000, 41, 4),
(16, 'CAMARA DE LARGA DISTANCIA', 'Camara de seguridad de larga distancia', 'CAM015', 4000, 25, 5),
(17, 'CAMARA CON VISION NOCTURNA', 'Camara de seguridad con vision nocturna', 'CAM016', 22000, 26, 6),
(18, 'CAMARA DE RECONOCIMIENTO FACIAL', 'Camara de seguridad de reconocimiento facial', 'CAM017', 2000, 226, 7),
(19, 'CAMARA CON DETECCION DE HUMO', 'Camara de seguridad con deteccion de humo', 'CAM018', 10000, 52, 2),
(20, 'CAMARA CON ALARMA INCORPORADA', 'Camara de seguridad con alarma incorporada', 'CAM019', 100000, 65, 3),
(21, 'CAMARA CON GRABACION EN LA NUBE', 'Camara de seguridad con grabacion en la Nube', 'CAM020', 45000, 26, 4),
(22, 'CAMARA BALA', 'Camara de vigilancia bala con resolucion 1080p', 'CAM021', 820000, 52, 5),
(23, 'CAMARA ESPIA', 'Camara de vigilancia espia en cargador USB', 'CAM022', 5000, 64, 4),
(24, 'CAMARA HD', 'Camara de vigilancia HD con resolucion 720p', 'CAM023', 51000, 5, 5),
(25, 'CAMARA IP WIFI', 'Camara de seguridad IP inalambrica para interior y', 'CAM024', 410000, 21, 6),
(26, 'CABLE COAXIAL', 'Cable para instalacion de camaras de seguridad, al', 'CABLECOAX', 410100, 6512, 5),
(27, 'CABLE UTP', 'Cable para instalacion de camaras de seguridad, al', 'CABLEUTP', 81000, 62, 4),
(28, 'DISCO DURO PARA CCTV', 'Disco duro optimizado para sistemas de seguridad C', 'DDCCTV', 90000, 265, 5),
(29, 'DVR DE 16 CANALES', 'Grabador digital de video con capacidad para 16 ca', 'DVR16C', 5000, 26, 11),
(30, 'CONTROL REMOTO PARA ALARMA', 'Control remoto para activar o desactivar alarma de', 'CONTROLREM', 11000, 22, 2),
(31, 'SENSOR DE HUMO', 'Sensor de humo para alarmas de seguridad, alcance ', 'SENHUM', 45000, 651, 3),
(32, 'LLAVE ELECTRONICA', 'Llave electronica para control de acceso a edifici', 'LLAVEELC', 41000, 52, 4),
(33, 'ADAPTADORES DE SEGURIDAD', 'Adaptador para seguridad', 'ADAPSEG', 10000, 2, 4),
(34, 'WAREHOUSE RACK', 'Ayuda a la seguridad', 'RACKWARE', 20000, 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_PROVEEDOR` int(11) NOT NULL,
  `NOM_PROVEEDOR` varchar(30) DEFAULT NULL,
  `DIR_PROVEEDOR` varchar(30) DEFAULT NULL,
  `EMAIL_PROVEEDOR` varchar(30) DEFAULT NULL,
  `NIT_PROVEEDOR` varchar(30) DEFAULT NULL,
  `TEL_PROVEEDOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID_PROVEEDOR`, `NOM_PROVEEDOR`, `DIR_PROVEEDOR`, `EMAIL_PROVEEDOR`, `NIT_PROVEEDOR`, `TEL_PROVEEDOR`) VALUES
(1, 'Conelec', 'Calle 123 # 45-67, Bogot?;cone', '900123456-8', '3219006574\r', NULL),
(2, 'Alfatronic', 'Carrera 8 Este # 23-45, Medell', 'alfatronic@email.es', '801234567-2', 2147483647),
(3, 'Electrycams', 'Avenida Sur # 12-34, Cali', 'electry.cams@electry.com.co', '700987654-4', 2147483647),
(4, 'telectronics', 'Transversal 56 # 78-90, Barran', 'telectronics@gmail.com', '600246813-9', 2147483647),
(5, 'bunker', 'Diagonal 10A # 32-54, Cartagen', 'bunker@bunker.com.co', '500135792-1', 2147483647),
(6, 'Imposeg', 'Carrera 15 # 67-89, Pereira', 'imposeg@gmail.com.es', '400864209-7', 2147483647),
(7, 'Provesi', 'Calle 21B Este # 43-21, Bucara', 'provesi@gmail.com', '300543210-6', 2147483647),
(8, 'Total Safety', 'Avenida Norte # 98-76, C?cuta', 'total.safety.sas@safety.com.co', '200135790-3', 2147483647),
(9, 'Seguridad Industrial S.A.S', 'Carrera 30A # 12-34, Santa Mar', 'seguridad@gmail.com', '100864209-0', 2147483647),
(10, 'Prosiami', 'Calle 25B Oeste # 56-78, Villa', 'prosiami@gmail.com', '901098765-5', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_ROLES` int(11) NOT NULL,
  `NOMBRE_ROL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROLES`, `NOMBRE_ROL`) VALUES
(1, 'Gerente\r'),
(2, 'Administrador\r'),
(3, 'Vendedor\r'),
(4, 'Cliente\r'),
(5, 'Tecnico\r'),
(6, 'Mensajero\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolespermisos`
--

CREATE TABLE `rolespermisos` (
  `ID_ROLES_PERMISOS` int(11) NOT NULL,
  `ID_PERMISOS` int(11) DEFAULT NULL,
  `ID_ROLES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rolespermisos`
--

INSERT INTO `rolespermisos` (`ID_ROLES_PERMISOS`, `ID_PERMISOS`, `ID_ROLES`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 3),
(4, 2, 2),
(5, 2, 5),
(6, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `ID_SERVICIO` int(11) NOT NULL,
  `DESCRIPCION_SERV` varchar(50) DEFAULT NULL,
  `PRECIO_SERVICIO` float DEFAULT NULL,
  `ID_TIPO_SERV` int(11) DEFAULT NULL,
  `ID_ESTADO_SERV` int(11) DEFAULT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`ID_SERVICIO`, `DESCRIPCION_SERV`, `PRECIO_SERVICIO`, `ID_TIPO_SERV`, `ID_ESTADO_SERV`, `ID_CLIENTE`) VALUES
(1, 'instalacion camara', 0, 1, 1, 15),
(2, 'instalacion dvr', 0, 1, 1, 10),
(3, 'mantenimiento camara', 0, 2, 2, 8),
(4, 'instalacion camara', 0, 1, 2, 6),
(5, 'instalacion dvr', 0, 1, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempotrabajo`
--

CREATE TABLE `tiempotrabajo` (
  `ID_TIEMPO_TRABAJO` int(11) NOT NULL,
  `DESCRIPCION_TIEMPO_TRABAJO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiempotrabajo`
--

INSERT INTO `tiempotrabajo` (`ID_TIEMPO_TRABAJO`, `DESCRIPCION_TIEMPO_TRABAJO`) VALUES
(1, 'Tiempo Completo\r'),
(2, 'Medio Tiempo\r'),
(3, 'Parcial\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoclien`
--

CREATE TABLE `tipoclien` (
  `ID_TIPO_CLIEN` int(11) NOT NULL,
  `NOMBRE_TIPO_CLIEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoclien`
--

INSERT INTO `tipoclien` (`ID_TIPO_CLIEN`, `NOMBRE_TIPO_CLIEN`) VALUES
(1, 'Frecuente\r'),
(2, 'Poco Frecuente\r'),
(3, 'Nuevo\r'),
(4, 'VIP\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoflujo`
--

CREATE TABLE `tipoflujo` (
  `ID_TIPO_FLUJO` int(11) NOT NULL,
  `NOMBRE_TIPO_FLUJO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoflujo`
--

INSERT INTO `tipoflujo` (`ID_TIPO_FLUJO`, `NOMBRE_TIPO_FLUJO`) VALUES
(1, 'Entrada\r'),
(2, 'Salidas\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipogarantia`
--

CREATE TABLE `tipogarantia` (
  `ID_TIPO_GARANTIA` int(11) NOT NULL,
  `NOMBRE_TIPO_GARANTIA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipogarantia`
--

INSERT INTO `tipogarantia` (`ID_TIPO_GARANTIA`, `NOMBRE_TIPO_GARANTIA`) VALUES
(1, 'Productos\r'),
(2, 'Servicios\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE `tipoidentificacion` (
  `ID_TIPO_IDEN` int(11) NOT NULL,
  `DESC_TIPO_IDEN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`ID_TIPO_IDEN`, `DESC_TIPO_IDEN`) VALUES
(1, 'Cedula Ciudadania\r'),
(2, 'Tarjeta Identidad\r'),
(3, 'RUT\r'),
(4, 'NIP\r'),
(5, 'Registro Civil\r'),
(6, 'NIT\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposerv`
--

CREATE TABLE `tiposerv` (
  `ID_TIPO_SERV` int(11) NOT NULL,
  `NOMBRE_SERV` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposerv`
--

INSERT INTO `tiposerv` (`ID_TIPO_SERV`, `NOMBRE_SERV`) VALUES
(1, 'instalacion\r'),
(2, 'Mantenimiento\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE_1` varchar(30) DEFAULT NULL,
  `NOMBRE_2` varchar(30) DEFAULT NULL,
  `APELLIDO_1` varchar(30) DEFAULT NULL,
  `APELLIDO_2` varchar(30) DEFAULT NULL,
  `EMAIL_USUARIO` varchar(30) DEFAULT NULL,
  `TELEFONO` int(30) DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `ID_TIPO_IDEN` int(11) DEFAULT NULL,
  `ID_ROLES` int(11) DEFAULT NULL,
  `ID_CONTACTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE_1`, `NOMBRE_2`, `APELLIDO_1`, `APELLIDO_2`, `EMAIL_USUARIO`, `TELEFONO`, `FECHA_NACIMIENTO`, `ID_TIPO_IDEN`, `ID_ROLES`, `ID_CONTACTO`) VALUES
(1, 'OSCAR', '-', 'FAJARDO', '-', 'os@gmail.com', 2147483647, '0000-00-00', 1, 1, 1),
(2, 'CLAUDIA', 'MARCELA', 'BADILLO', '-', 'clau34235@hotmail.com', 2147483647, '0000-00-00', 6, 6, 2),
(3, 'JOHANNA', '-', 'CARDENAS', '-', 'jc354667@yahoo.com', 2147483647, '0000-00-00', 4, 4, 3),
(4, 'ZULMA', 'PATRICIA', 'CASALLAS', 'BAUTISTA', 'zulmpatr@gmail.com', 2147483647, '0000-00-00', 2, 2, 4),
(5, 'LIBIA', '-', 'SIERRA', '-', 'libsier@gmail.com', 2147483647, '0000-00-00', 1, 1, 5),
(6, 'LORENA', '-', 'CIFUENTES', '-', 'lorcif@gmail.com', 2147483647, '0000-00-00', 6, 6, 6),
(7, 'HENRY', 'ALFONSO', 'OTERO', 'RODRIGUEZ', 'henryo@gmail.com', 2147483647, '0000-00-00', 3, 3, 7),
(8, 'ADRIANA', '-', 'MARTINEZ', '-', 'adri@gmail.com', 2147483647, '0000-00-00', 5, 5, 8),
(9, 'JANETH', 'PATRICIA', 'PALACIOS', '-', 'janethpatr@gmail.com', 2147483647, '0000-00-00', 5, 5, 9),
(10, 'JUAN', 'CARLOS', 'ALCEDO', '-', 'jca@gmail.com', 2147483647, '0000-00-00', 2, 2, 10),
(11, 'ROCIO', 'ZULEIMA', 'SANCHEZ', 'ORTIZ', 'rociorgo@hotmail.com', 2147483647, '0000-00-00', 3, 3, 11),
(12, 'FABIOLA', '-', 'CANO', '-', 'fabi29292@gmail.com', 2147483647, '0000-00-00', 6, 6, 12),
(13, 'GLADYS', '-', 'FONSECA', '-', 'edificio@gmail.com', 2147483647, '0000-00-00', 2, 2, 13),
(14, 'ALFONSO', '-', 'ACOSTA', 'PAEZ', 'alf4342@gmail.com', 2147483647, '0000-00-00', 4, 4, 14),
(15, 'TATIANA', '-', 'ROSALES', '-', 'tat345@gmail.com', 2147483647, '0000-00-00', 2, 2, 15),
(16, 'ROCIO', 'CAMILA', 'RODRIGUEZ', 'SALCEDO', 'roci@gmail.com', 2147483647, '0000-00-00', 3, 3, 16),
(17, 'JUAN', 'CARLOS', 'PE?A', 'ROCHA', 'adassd@gmail.com', 2147483647, '0000-00-00', 1, 1, 17),
(18, 'EDGAR', 'GIOVANY', 'PINZON', 'CRUZ', 'edyo235345@hotmail.com', 2147483647, '0000-00-00', 4, 4, 18),
(19, 'ALFONSO', 'GREGORIO', 'SOCHA', 'CAMARGO', 'alf4342@gmail.com', 2147483647, '0000-00-00', 1, 1, 19),
(20, 'LIZ', '-', 'PE?A', '-', 'lizpe@gmail.com', 2147483647, '0000-00-00', 2, 2, 20),
(21, 'CARMEN', 'LIGIA', 'SALCEDO', '-', 'cramlig@gmail.com', 2147483647, '0000-00-00', 1, 1, 21),
(22, 'ROCIO', '-', 'ORTEGA', '-', 'rociorte@gmail.com', 2147483647, '0000-00-00', 4, 4, 22),
(23, 'LILIANA', 'PATRICIA', 'RUIZ', 'CIFUENTES', 'lilpuen@gmail.com', 2147483647, '0000-00-00', 2, 2, 23),
(24, 'OLGA', '-', 'DONOSO', '-', 'olgdono@gmail.com', 2147483647, '0000-00-00', 1, 1, 24),
(25, 'TERESA', '-', 'CAMARGO', '-', 'teca@gmail.com', 2147483647, '0000-00-00', 5, 5, 25),
(26, 'NARIBE', 'QUITIAN', 'FAJARDO', '-', 'nyib545@gmail.com', 2147483647, '0000-00-00', 6, 6, 26),
(27, 'AMANDA', '-', 'GARCIA', '-', 'amand4546@hotmail.com', 2147483647, '0000-00-00', 3, 3, 27),
(28, 'LILIBETH', '-', 'VALDERRAMA', '-', 'lili4546@hotmail.com', 2147483647, '0000-00-00', 3, 3, 28),
(29, 'ANA', '-', 'DIAZ', '-', 'anad@hotmail.com', 2147483647, '0000-00-00', 4, 4, 29),
(30, 'MARITZA', '-', 'PRIETO', '', 'marpriet@gmail.com', 2147483647, '0000-00-00', 5, 5, 30),
(31, 'CLAUDIA', 'MILENA', 'DUQUE', '-', 'clau2345@gmail.com', 2147483647, '0000-00-00', 5, 5, 31),
(32, 'FANY', '-', 'NAVARRETE', '', 'fanynava@gmail.com', 2147483647, '0000-00-00', 6, 6, 32),
(33, 'JOHN', 'DOE', 'SMITH', 'JOHNSON', 'john@gmail.com', 1234567890, '0000-00-00', 1, 4, 33),
(34, 'JANETH', 'JOHNSON', 'DAVIS', '-', 'jane@gmail.com', 2147483647, '0000-00-00', 2, 4, 34),
(35, 'MICHAEL', 'WILLIAMS', 'THOMPSON', '-', 'michael@gmail.com', 2147483647, '0000-00-00', 3, 4, 35),
(36, 'SARA', '-', 'THOMPSON', 'RODRIGUEZ', 'sarah@gmail.com', 1111111111, '0000-00-00', 4, 4, 36),
(37, 'ROBERT', 'DAVIS', 'ANDERSON', '-', 'robert@gmail.com', 2147483647, '0000-00-00', 5, 4, 37),
(38, 'EMILY', 'GRACE', 'ANDERSON', 'WILLIAMS', 'emily@gmail.com', 2147483647, '0000-00-00', 6, 4, 38),
(39, 'WILLIAM', '-', 'RODRIGUEZ', 'JOHNSON', 'william@gmail.com', 2147483647, '0000-00-00', 1, 4, 39),
(40, 'SOPHIA', 'DAVIS', 'THOMPSON', '-', 'sophia@gmail.com', 2147483647, '0000-00-00', 2, 4, 40),
(41, 'EMMA', 'ROSE', 'ANDERSON', '-', 'emma@gmail.com', 2147483647, '0000-00-00', 3, 4, 41),
(42, 'JAMES', '-', 'RODRIGUEZ', '-', 'james@gmail.com', 2147483647, '0000-00-00', 4, 4, 42),
(43, 'OLIVIA', 'ESTEFANIA', 'CUELLAR', '-', 'olivia@gmail.com', 2147483647, '0000-00-00', 5, 4, 43),
(44, 'LIAM', '-', 'CASALLAS', '-', 'liam@gmail.com', 2147483647, '0000-00-00', 6, 4, 44),
(45, 'BENJAMIN', '-', 'GLASS', '-', 'benjamin@gmail.com', 1231231231, '0000-00-00', 1, 4, 45),
(46, 'AMELIA', '-', 'CARSON', '-', 'amelia@gmail.com', 2147483647, '0000-00-00', 2, 4, 46),
(47, 'ETHAN', 'DANIEL', 'CAMELLO', '-', 'ethan@gmail.com', 2147483647, '0000-00-00', 3, 4, 47),
(48, 'MIA', 'STEPHANY', 'PARRA', '-', 'mia@gmail.com', 2147483647, '0000-00-00', 4, 4, 48),
(49, 'NOAH', '-', 'PEDRAZA', '-', 'noah@gmail.com', 2147483647, '0000-00-00', 5, 4, 49),
(50, 'AVA', 'JAMES', 'PEREZ', '-', 'oliver@gmail.com', 2147483647, '0000-00-00', 6, 4, 50),
(51, 'JUAN', 'CARLOS', 'PEREZ', 'GARCIA', 'emma@gmail.com', 1111111111, '0000-00-00', 1, 4, 51),
(52, 'ALISON', 'ALEXA', 'RODRIGUEZ', 'PEDRAZA', 'juan.perez@gmail.com', 2147483647, '0000-00-00', 2, 4, 52),
(53, 'LUCIA', '-', 'ESCOBAR', '-', 'lucia@gmail.com', 1111111111, '0000-00-00', 3, 4, 53),
(54, 'DANIELA', '-', 'GOMEZ', 'VARGAS', 'daniela@gmail.com', 5, '0000-00-00', 4, 4, 54),
(55, 'LAURA', 'ISABEL', 'MARTINEZ', 'TORRES', 'laura.martinez@gmail.com', 30, '0000-00-00', 5, 4, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ID_VENTA` int(11) NOT NULL,
  `FECHA_VENTA` date DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `PRECIO` float DEFAULT NULL,
  `SUBTOTAL` float DEFAULT NULL,
  `IVA` float DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `ID_EMPLEADO` int(11) DEFAULT NULL,
  `ID_PEDIDO` int(11) DEFAULT NULL,
  `ID_GARANTIA` int(11) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ID_VENTA`, `FECHA_VENTA`, `CANTIDAD`, `PRECIO`, `SUBTOTAL`, `IVA`, `TOTAL`, `ID_EMPLEADO`, `ID_PEDIDO`, `ID_GARANTIA`, `ID_PRODUCTO`) VALUES
(1, '0000-00-00', 5, 100000, 500000, 95000, 595000, 1, 1, 1, 1),
(2, '0000-00-00', 10, 200000, 2000000, 380000, 2380000, 3, 2, 2, 2),
(3, '0000-00-00', 1, 50000, 50000, 9500, 59500, 4, 3, 3, 3),
(4, '0000-00-00', 3, 60000, 180000, 34200, 214200, 6, 4, 4, 4),
(5, '0000-00-00', 2, 30000, 60000, 11400, 71400, 9, 5, 5, 5),
(6, '0000-00-00', 3, 40000, 120000, 22800, 142800, 10, 6, 6, 6),
(7, '0000-00-00', 4, 80000, 320000, 60800, 380800, 12, 7, 7, 7),
(8, '0000-00-00', 5, 90000, 450000, 85500, 535500, 13, 8, 8, 8),
(9, '0000-00-00', 3, 200000, 600000, 114000, 714000, 14, 9, 9, 9),
(10, '0000-00-00', 4, 30000, 120000, 22800, 142800, 15, 10, 10, 10),
(11, '0000-00-00', 5, 2000, 10000, 1900, 11900, 16, 11, 11, 11),
(12, '0000-00-00', 12, 30000, 360000, 68400, 428400, 17, 12, 12, 12),
(13, '0000-00-00', 6, 1000, 6000, 1140, 7140, 18, 13, 13, 13),
(14, '0000-00-00', 7, 52000, 364000, 69160, 433160, 19, 14, 10, 14),
(15, '0000-00-00', 6, 5000, 30000, 5700, 35700, 20, 15, 4, 15),
(16, '0000-00-00', 4, 4000, 16000, 3040, 19040, 23, 16, 4, 16),
(17, '0000-00-00', 5, 22000, 110000, 20900, 130900, 24, 17, 4, 17),
(18, '0000-00-00', 6, 2000, 12000, 2280, 14280, 1, 18, 4, 18),
(19, '0000-00-00', 5, 10000, 50000, 9500, 59500, 3, 19, 13, 19),
(20, '0000-00-00', 4, 100000, 400000, 76000, 476000, 4, 20, 1, 20),
(21, '0000-00-00', 5, 45000, 225000, 42750, 267750, 6, 21, 6, 21),
(22, '0000-00-00', 54, 820000, 44280000, 8413200, 52693200, 9, 22, 4, 22),
(23, '0000-00-00', 78, 5000, 390000, 74100, 464100, 10, 23, 5, 23),
(24, '0000-00-00', 7, 51000, 357000, 67830, 424830, 12, 24, 2, 24),
(25, '0000-00-00', 8, 410000, 3280000, 623200, 3903200, 13, 25, 2, 25),
(26, '0000-00-00', 23, 410100, 9432300, 1792140, 11224400, 14, 26, 1, 26),
(27, '0000-00-00', 3, 81000, 243000, 46170, 289170, 15, 27, 3, 27),
(28, '0000-00-00', 3, 90000, 270000, 51300, 321300, 16, 28, 1, 28),
(29, '0000-00-00', 2, 5000, 10000, 1900, 11900, 17, 29, 13, 29),
(30, '0000-00-00', 34, 11000, 374000, 71060, 445060, 18, 30, 5, 30),
(31, '0000-00-00', 5, 45000, 225000, 42750, 267750, 19, 31, 7, 31),
(32, '0000-00-00', 7, 41000, 287000, 54530, 341530, 20, 32, 8, 32);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendamiento`
--
ALTER TABLE `agendamiento`
  ADD PRIMARY KEY (`ID_AGENDAMIENTO`),
  ADD KEY `ID_ESTADO_DISPONIBILIDAD` (`ID_ESTADO_DISPONIBILIDAD`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`),
  ADD KEY `ID_SERVICIO` (`ID_SERVICIO`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_CARGO`),
  ADD KEY `ID_ESPECIALIDAD` (`ID_ESPECIALIDAD`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_CATEGORIA`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID_CIUDAD`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`),
  ADD KEY `ID_TIPO_CLIEN` (`ID_TIPO_CLIEN`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`),
  ADD KEY `ID_CIUDAD` (`ID_CIUDAD`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_EMPLEADO`),
  ADD KEY `ID_TIEMPO_TRABAJO` (`ID_TIEMPO_TRABAJO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_CARGO` (`ID_CARGO`),
  ADD KEY `ID_ESTADO_DISPONIBILIDAD` (`ID_ESTADO_DISPONIBILIDAD`);

--
-- Indices de la tabla `especialidadcargo`
--
ALTER TABLE `especialidadcargo`
  ADD PRIMARY KEY (`ID_ESPECIALIDAD`);

--
-- Indices de la tabla `estadodisponibilidad`
--
ALTER TABLE `estadodisponibilidad`
  ADD PRIMARY KEY (`ID_ESTADO_DISPONIBILIDAD`);

--
-- Indices de la tabla `estadopedidoclien`
--
ALTER TABLE `estadopedidoclien`
  ADD PRIMARY KEY (`CODIGO_ESTADO`);

--
-- Indices de la tabla `estadopedidoprov`
--
ALTER TABLE `estadopedidoprov`
  ADD PRIMARY KEY (`ID_ESTADO_PEDIDO_PROVEEDOR`);

--
-- Indices de la tabla `estadoserv`
--
ALTER TABLE `estadoserv`
  ADD PRIMARY KEY (`ID_ESTADO_SERV`);

--
-- Indices de la tabla `estnovedadespedidoprov`
--
ALTER TABLE `estnovedadespedidoprov`
  ADD PRIMARY KEY (`ID_ESTADO_NOVEDADES_PEDIDO_PROV`);

--
-- Indices de la tabla `flujoinventario`
--
ALTER TABLE `flujoinventario`
  ADD PRIMARY KEY (`ID_FLUJO`),
  ADD KEY `ID_TIPO_FLUJO` (`ID_TIPO_FLUJO`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`);

--
-- Indices de la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD PRIMARY KEY (`ID_GARANTIA`),
  ADD KEY `ID_TIPO_GARANTIA` (`ID_TIPO_GARANTIA`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_MARCA`);

--
-- Indices de la tabla `novedadespedidoprov`
--
ALTER TABLE `novedadespedidoprov`
  ADD PRIMARY KEY (`ID_NOVEDADES_PEDIDO_PROV`),
  ADD KEY `ID_ESTADO_NOVEDADES_PEDIDO_PROV` (`ID_ESTADO_NOVEDADES_PEDIDO_PROV`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`),
  ADD KEY `ID_PEDIDO_PROVEEDOR` (`ID_PEDIDO_PROVEEDOR`);

--
-- Indices de la tabla `pedidoclien`
--
ALTER TABLE `pedidoclien`
  ADD PRIMARY KEY (`ID_PEDIDO`),
  ADD KEY `CODIGO_ESTADO` (`CODIGO_ESTADO`),
  ADD KEY `ID_CLIENTE` (`ID_CLIENTE`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`),
  ADD KEY `ID_AGENDAMIENTO` (`ID_AGENDAMIENTO`);

--
-- Indices de la tabla `pedidoproveedor`
--
ALTER TABLE `pedidoproveedor`
  ADD PRIMARY KEY (`ID_PEDIDO_PROVEEDOR`),
  ADD KEY `ID_ESTADO_PEDIDO_PROVEEDOR` (`ID_ESTADO_PEDIDO_PROVEEDOR`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`),
  ADD KEY `ID_PROVEEDOR` (`ID_PROVEEDOR`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`ID_PERMISOS`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `ID_MARCA` (`ID_MARCA`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_PROVEEDOR`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_ROLES`);

--
-- Indices de la tabla `rolespermisos`
--
ALTER TABLE `rolespermisos`
  ADD PRIMARY KEY (`ID_ROLES_PERMISOS`),
  ADD KEY `ID_PERMISOS` (`ID_PERMISOS`),
  ADD KEY `ID_ROLES` (`ID_ROLES`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID_SERVICIO`),
  ADD KEY `ID_TIPO_SERV` (`ID_TIPO_SERV`),
  ADD KEY `ID_ESTADO_SERV` (`ID_ESTADO_SERV`),
  ADD KEY `ID_CLIENTE` (`ID_CLIENTE`);

--
-- Indices de la tabla `tiempotrabajo`
--
ALTER TABLE `tiempotrabajo`
  ADD PRIMARY KEY (`ID_TIEMPO_TRABAJO`);

--
-- Indices de la tabla `tipoclien`
--
ALTER TABLE `tipoclien`
  ADD PRIMARY KEY (`ID_TIPO_CLIEN`);

--
-- Indices de la tabla `tipoflujo`
--
ALTER TABLE `tipoflujo`
  ADD PRIMARY KEY (`ID_TIPO_FLUJO`);

--
-- Indices de la tabla `tipogarantia`
--
ALTER TABLE `tipogarantia`
  ADD PRIMARY KEY (`ID_TIPO_GARANTIA`);

--
-- Indices de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  ADD PRIMARY KEY (`ID_TIPO_IDEN`);

--
-- Indices de la tabla `tiposerv`
--
ALTER TABLE `tiposerv`
  ADD PRIMARY KEY (`ID_TIPO_SERV`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ID_TIPO_IDEN` (`ID_TIPO_IDEN`),
  ADD KEY `ID_ROLES` (`ID_ROLES`),
  ADD KEY `ID_CONTACTO` (`ID_CONTACTO`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ID_VENTA`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`),
  ADD KEY `ID_PEDIDO` (`ID_PEDIDO`),
  ADD KEY `ID_GARANTIA` (`ID_GARANTIA`),
  ADD KEY `ID_PRODUCTO` (`ID_PRODUCTO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agendamiento`
--
ALTER TABLE `agendamiento`
  ADD CONSTRAINT `agendamiento_ibfk_1` FOREIGN KEY (`ID_ESTADO_DISPONIBILIDAD`) REFERENCES `estadodisponibilidad` (`ID_ESTADO_DISPONIBILIDAD`),
  ADD CONSTRAINT `agendamiento_ibfk_2` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `agendamiento_ibfk_3` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`);

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_ibfk_1` FOREIGN KEY (`ID_ESPECIALIDAD`) REFERENCES `especialidadcargo` (`ID_ESPECIALIDAD`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ID_TIPO_CLIEN`) REFERENCES `tipoclien` (`ID_TIPO_CLIEN`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`ID_CIUDAD`) REFERENCES `ciudad` (`ID_CIUDAD`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`ID_TIEMPO_TRABAJO`) REFERENCES `tiempotrabajo` (`ID_TIEMPO_TRABAJO`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`),
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`ID_CARGO`) REFERENCES `cargo` (`ID_CARGO`),
  ADD CONSTRAINT `empleado_ibfk_4` FOREIGN KEY (`ID_ESTADO_DISPONIBILIDAD`) REFERENCES `estadodisponibilidad` (`ID_ESTADO_DISPONIBILIDAD`);

--
-- Filtros para la tabla `flujoinventario`
--
ALTER TABLE `flujoinventario`
  ADD CONSTRAINT `flujoinventario_ibfk_1` FOREIGN KEY (`ID_TIPO_FLUJO`) REFERENCES `tipoflujo` (`ID_TIPO_FLUJO`),
  ADD CONSTRAINT `flujoinventario_ibfk_2` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`);

--
-- Filtros para la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD CONSTRAINT `garantia_ibfk_1` FOREIGN KEY (`ID_TIPO_GARANTIA`) REFERENCES `tipogarantia` (`ID_TIPO_GARANTIA`);

--
-- Filtros para la tabla `novedadespedidoprov`
--
ALTER TABLE `novedadespedidoprov`
  ADD CONSTRAINT `novedadespedidoprov_ibfk_1` FOREIGN KEY (`ID_ESTADO_NOVEDADES_PEDIDO_PROV`) REFERENCES `estnovedadespedidoprov` (`ID_ESTADO_NOVEDADES_PEDIDO_PROV`),
  ADD CONSTRAINT `novedadespedidoprov_ibfk_2` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `novedadespedidoprov_ibfk_3` FOREIGN KEY (`ID_PEDIDO_PROVEEDOR`) REFERENCES `pedidoproveedor` (`ID_PEDIDO_PROVEEDOR`);

--
-- Filtros para la tabla `pedidoclien`
--
ALTER TABLE `pedidoclien`
  ADD CONSTRAINT `pedidoclien_ibfk_1` FOREIGN KEY (`CODIGO_ESTADO`) REFERENCES `estadopedidoclien` (`CODIGO_ESTADO`),
  ADD CONSTRAINT `pedidoclien_ibfk_2` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `pedidoclien_ibfk_3` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`),
  ADD CONSTRAINT `pedidoclien_ibfk_4` FOREIGN KEY (`ID_AGENDAMIENTO`) REFERENCES `agendamiento` (`ID_AGENDAMIENTO`);

--
-- Filtros para la tabla `pedidoproveedor`
--
ALTER TABLE `pedidoproveedor`
  ADD CONSTRAINT `pedidoproveedor_ibfk_1` FOREIGN KEY (`ID_ESTADO_PEDIDO_PROVEEDOR`) REFERENCES `estadopedidoprov` (`ID_ESTADO_PEDIDO_PROVEEDOR`),
  ADD CONSTRAINT `pedidoproveedor_ibfk_2` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `pedidoproveedor_ibfk_3` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`),
  ADD CONSTRAINT `pedidoproveedor_ibfk_4` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedores` (`ID_PROVEEDOR`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_MARCA`) REFERENCES `marca` (`ID_MARCA`);

--
-- Filtros para la tabla `rolespermisos`
--
ALTER TABLE `rolespermisos`
  ADD CONSTRAINT `rolespermisos_ibfk_1` FOREIGN KEY (`ID_PERMISOS`) REFERENCES `permisos` (`ID_PERMISOS`),
  ADD CONSTRAINT `rolespermisos_ibfk_2` FOREIGN KEY (`ID_ROLES`) REFERENCES `roles` (`ID_ROLES`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`ID_TIPO_SERV`) REFERENCES `tiposerv` (`ID_TIPO_SERV`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`ID_ESTADO_SERV`) REFERENCES `estadoserv` (`ID_ESTADO_SERV`),
  ADD CONSTRAINT `servicio_ibfk_3` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_TIPO_IDEN`) REFERENCES `tipoidentificacion` (`ID_TIPO_IDEN`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`ID_ROLES`) REFERENCES `roles` (`ID_ROLES`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`ID_CONTACTO`) REFERENCES `contacto` (`ID_CONTACTO`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`ID_PEDIDO`) REFERENCES `pedidoclien` (`ID_PEDIDO`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`ID_GARANTIA`) REFERENCES `garantia` (`ID_GARANTIA`),
  ADD CONSTRAINT `venta_ibfk_4` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
