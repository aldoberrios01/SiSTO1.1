-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2020 a las 04:29:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_datos`
--
CREATE DATABASE IF NOT EXISTS `base_datos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `base_datos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

DROP TABLE IF EXISTS `auditorias`;
CREATE TABLE IF NOT EXISTS `auditorias` (
  `cod_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `qf` int(11) NOT NULL,
  `tema` text COLLATE utf8_spanish_ci NOT NULL,
  `numero_t` int(11) NOT NULL,
  `observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`qf`),
  KEY `cod_usuario` (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `auditorias`
--

INSERT INTO `auditorias` (`cod_usuario`, `qf`, `tema`, `numero_t`, `observacion`, `fecha`) VALUES
('0002', 12345, '23151234', 123451, 'Esto es una Prueba', '2020-02-14'),
('1313', 48899011, 'F121424', 34567, 'Debió  tipificar con la  linea y  no  el id  del cliente', '2020-02-12'),
('1414', 48901212, '23154578', 23154578, 'Era  un  soporte efectivo  y  no  un  se  genera averia ', '2020-02-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `briefing`
--

DROP TABLE IF EXISTS `briefing`;
CREATE TABLE IF NOT EXISTS `briefing` (
  `idbriefing` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idestados` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idbriefing`),
  KEY `estados_briefing` (`idestados`),
  KEY `usuario_briefing` (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_staff`
--

DROP TABLE IF EXISTS `categoria_staff`;
CREATE TABLE IF NOT EXISTS `categoria_staff` (
  `idcategoria_staff` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL COMMENT 'nombre de categoria estaff',
  PRIMARY KEY (`idcategoria_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_staff`
--

INSERT INTO `categoria_staff` (`idcategoria_staff`, `nombre`) VALUES
(1, 'Agente PL'),
(2, 'BO'),
(4, 'Supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `idestados` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `comentario` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idestados`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idestados`, `nombre`, `comentario`) VALUES
(1, 'X', 'Presente/Justificado'),
(2, 'A', 'Ausente'),
(3, 'VAC', 'Vacaciones'),
(4, 'MED', 'Subsidio'),
(5, 'JANP', 'Reposo'),
(6, 'SUSP', 'Suspension'),
(7, 'Other', 'Periodo de prueba'),
(8, 'IA', 'Baja'),
(9, 'OFF', 'Día libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

DROP TABLE IF EXISTS `informacion`;
CREATE TABLE IF NOT EXISTS `informacion` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cod_servicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Imangen` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_servicio` (`cod_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`Codigo`, `cod_usuario`, `cod_servicio`, `titulo`, `fecha`, `descripcion`, `Imangen`) VALUES
(1, '0001', '100', 'Linea Fija', '2019-09-02', 'Esta  es una Prueba  de Linea ', 'assets/Imagenes/informacion/aldo.png'),
(2, '0000', '100', 'Linea Fija 2', '2019-09-02', 'Linea Fija  2 Cuerpo', 'assets/Imagenes/informacion/1.png'),
(5, '0001', '100', 'Línea telefonica', '2019-09-29', 'Una “línea telefónica” o “circuito telefónico” es un circuito eléctrico de un sistema de telecomunicaciones por teléfono. Típicamente, se refiere a un cable físico u otro medio de transmisión de señales que conecte el aparato telefónico del usuario a la red de telecomunicaciones, y normalmente supone también un único número de teléfono asociado a dicho usuario para poder facturarle el servicio prestado.\r\n\r\nEn 1876 las primeras líneas eran simples conductores metálicos directamente conectados de un teléfono a otro con la Tierra como toma de tierra. Más tarde, en 1878, la compañía de teléfonos Bell Telephone Company llevó líneas, conocidas como bucle local, desde el teléfono de cada usuario a la centralita o central telefónica, que llevaba a cabo todos los intercambios eléctricos necesarios para permitir que las señales de voz fueran transmitidas a teléfonos.\r\n\r\nCuando se realiza una llamada local, la centralita conecta el bucle local al bucle de abonado del número marcado.\r\n\r\nLos cables eran normalmente de cobre, aunque también se usó aluminio, y se llevaban de dos en dos, separados aproximadamente 25 centímetros, sobre postes, y más tarde como cable de par trenzado de 2 hilos.\r\n\r\nLas líneas modernas pueden ir bajo tierra a un conversor analógico-digital que convierte la señal analógica a digital para transmitirla por fibra óptica.\r\n\r\nLa mayoría de los hogares están conectados mediante conductores de cobre y conectores RJ-11. ', 'assets/Imagenes/informacion/telefono.png'),
(6, '0000', '100', 'Hola2', '2019-11-01', 'esta  es una prueba Hola', 'assets/Imagenes/informacion/font-login.jpg'),
(7, '0000', '100', 'Prueba', '2019-09-30', 'Esta  es una Prueba.\r\nEste el segundo Párrafo\r\nEl tercer Párrafo', 'assets/Imagenes/informacion/IMG_20150101_064247.jpg'),
(8, '0000', '105', 'TV Basico', '2019-11-27', 'Te ofrecemos mas 99 canales en tv basico', 'assets/Imagenes/informacion/institution.png'),
(9, '0000', '102', 'Internet Adsl', '2020-01-18', 'Internet  Adsl  es por  medio de par de  cobre', 'assets/Imagenes/informacion/section.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

DROP TABLE IF EXISTS `reportes`;
CREATE TABLE IF NOT EXISTS `reportes` (
  `cod_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_QF` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cic` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`codigo_QF`),
  KEY `cod_usuario` (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`cod_usuario`, `codigo_QF`, `cic`, `observaciones`, `fecha`) VALUES
('1313', '45451234', '78901234', 'Falla  en la llamada no  me  escucha el  cliente ,  se procedió a corta la  comunicacion', '2020-02-06'),
('0001', '456789', '23114567', 'Cliente no  me  escucha en la llamada', '2020-02-13'),
('0000', '48649090', '89472316', 'Falla cic', '2020-02-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `cod_servicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_servico` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`cod_servicio`, `tipo_servico`) VALUES
('000', 'General'),
('100', 'Linea Fija'),
('101', 'Linea IP'),
('102', 'Internet Adsl'),
('103', 'Internet HFC'),
('104', 'Gpon'),
('105', 'TV Basico'),
('106', 'TV Digital'),
('107', 'DTH'),
('108', 'Transmisión de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `idskills` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idskills`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `skills`
--

INSERT INTO `skills` (`idskills`, `nombre`) VALUES
(1, 'Soporte Fijo'),
(2, 'Soporte Comercial Movil'),
(3, 'Redes Sociales'),
(4, 'Migracion DTA'),
(5, 'Despacho Nivel I'),
(6, 'Soporte Corporativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idskills` int(11) NOT NULL,
  `idcategoria_staff` int(11) NOT NULL,
  `cod_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `nickname` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `skills_usuarios` (`idskills`),
  KEY `categoriastaff_usuario` (`idcategoria_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idskills`, `idcategoria_staff`, `cod_usuario`, `nombre`, `apellido`, `nickname`, `password`, `tipo_usuario`) VALUES
(1, 1, '0000', 'admin', 'admin', 'admin', '12345', 'Administrador'),
(1, 2, '0001', 'Aldo', 'Berrios', 'aldo.berrios', '123456', 'Administrador'),
(6, 1, '0002', 'Juan', 'Berrios', 'juan.berrios', '12345', 'Normal'),
(1, 2, '111', 'zelmira', 'ortiz', 'zelmi', '12345', 'Normal'),
(1, 1, '1313', 'Julio Victor', 'Lopez', 'juliov.lopez', '1', 'Administrador'),
(2, 1, '1414', 'Alicia', 'Bustamantes', 'alicia.bustamantes', '12345', 'Normal');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD CONSTRAINT `auditorias_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`);

--
-- Filtros para la tabla `briefing`
--
ALTER TABLE `briefing`
  ADD CONSTRAINT `estados_briefing` FOREIGN KEY (`idestados`) REFERENCES `estados` (`idestados`),
  ADD CONSTRAINT `usuario_briefing` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`);

--
-- Filtros para la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD CONSTRAINT `informacion_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`),
  ADD CONSTRAINT `informacion_ibfk_2` FOREIGN KEY (`cod_servicio`) REFERENCES `servicios` (`cod_servicio`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `cod_usuario` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `categoriastaff_usuario` FOREIGN KEY (`idcategoria_staff`) REFERENCES `categoria_staff` (`idcategoria_staff`),
  ADD CONSTRAINT `skills_usuarios` FOREIGN KEY (`idskills`) REFERENCES `skills` (`idskills`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
