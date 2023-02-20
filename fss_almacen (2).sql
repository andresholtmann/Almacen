-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2016 a las 17:02:40
-- Versión del servidor: 5.7.13-0ubuntu0.16.04.2
-- Versión de PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fss_almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `operacion` varchar(10) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `host` varchar(30) NOT NULL,
  `modificado` datetime DEFAULT NULL,
  `tabla` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `operacion`, `usuario`, `host`, `modificado`, `tabla`) VALUES
(1, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 11:37:20', 'categoria'),
(2, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 11:37:22', 'categoria'),
(3, 'INSERTAR', 'root', 'localhost', '2016-09-02 14:32:22', 'pres_alma'),
(4, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 14:43:31', 'categoria'),
(5, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 14:43:35', 'categoria'),
(6, 'INSERTAR', 'root', 'localhost', '2016-09-02 14:51:18', 'pres_alma'),
(7, 'ELIMINAR', 'root', 'localhost', '2016-09-02 14:51:22', 'pres_alma'),
(8, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:34', 'pres_alma'),
(9, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:40', 'pres_alma'),
(10, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:41', 'pres_alma'),
(11, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:42', 'pres_alma'),
(12, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:43', 'pres_alma'),
(13, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:44', 'pres_alma'),
(14, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:45', 'pres_alma'),
(15, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:52', 'pres_alma'),
(16, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:01:55', 'pres_alma'),
(17, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:02:31', 'pres_alma'),
(18, 'ACTUALIZAR', 'root', 'localhost', '2016-09-02 15:02:32', 'pres_alma'),
(19, 'INSERTAR', 'root', 'localhost', '2016-09-02 15:05:42', 'pres_alma'),
(20, 'ELIMINAR', 'root', 'localhost', '2016-09-02 15:05:55', 'pres_alma'),
(21, 'INSERTAR', 'root', 'localhost', '2016-10-26 11:07:18', 'pres_alma'),
(22, 'ELIMINAR', 'root', 'localhost', '2016-10-26 11:07:22', 'pres_alma'),
(23, 'ACTUALIZAR', 'root', 'localhost', '2016-10-26 11:38:23', 'categoria'),
(24, 'ACTUALIZAR', 'root', 'localhost', '2016-10-26 11:38:31', 'categoria'),
(25, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:53:45', 'categoria'),
(26, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:54:09', 'categoria'),
(27, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:54:44', 'categoria'),
(28, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:55:09', 'categoria'),
(29, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:56:10', 'categoria'),
(30, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:56:10', 'categoria'),
(31, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:56:44', 'categoria'),
(32, 'INSERTAR', 'root', 'localhost', '2016-11-08 11:57:34', 'categoria'),
(33, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(34, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(35, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(36, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(37, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(38, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(39, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(40, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(41, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(42, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(43, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(44, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(45, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(46, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(47, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(48, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(49, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(50, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(51, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(52, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(53, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(54, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(55, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(56, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(57, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(58, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(59, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(60, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(61, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(62, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(63, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(64, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(65, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(66, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(67, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(68, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(69, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(70, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(71, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(72, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(73, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(74, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(75, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(76, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(77, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(78, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(79, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(80, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(81, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(82, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(83, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(84, 'INSERTAR', 'root', 'localhost', '2016-11-08 12:21:33', 'pres_alma'),
(85, 'ACTUALIZAR', 'root', 'localhost', '2016-11-08 14:39:50', 'pres_alma'),
(86, 'ACTUALIZAR', 'root', 'localhost', '2016-11-08 14:40:21', 'pres_alma'),
(87, 'ACTUALIZAR', 'root', 'localhost', '2016-11-08 15:08:16', 'categoria'),
(88, 'ELIMINAR', 'root', 'localhost', '2016-11-08 15:09:06', 'pres_alma'),
(89, 'ELIMINAR', 'root', 'localhost', '2016-11-08 15:09:17', 'pres_alma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_alma`
--

CREATE TABLE `cat_alma` (
  `id_cat` int(20) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `fe_cat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Useing` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_alma`
--

INSERT INTO `cat_alma` (`id_cat`, `cat`, `fe_cat`, `Useing`) VALUES
(1, 'Cafetería', '2016-10-26 17:38:31', '1'),
(2, 'Limpieza', '2016-09-01 18:27:02', ''),
(3, 'Oficina', '2016-09-01 18:27:02', ''),
(4, 'Toner', '2016-09-01 18:27:02', ''),
(5, 'Tintas', '2016-09-01 18:27:02', ''),
(6, 'Combustibles y Lubricantes', '2016-11-08 17:53:45', ''),
(7, 'Metales Diversos', '2016-11-08 17:54:09', ''),
(8, 'Herramientas', '2016-11-08 17:54:44', ''),
(9, 'Repuestos en General', '2016-11-08 17:55:09', ''),
(10, 'Productos Químicos', '2016-11-08 17:56:10', ''),
(11, 'Accesorios Varios', '2016-11-08 21:08:16', '1'),
(12, 'Materiales Eléctricos', '2016-11-08 17:56:44', ''),
(13, 'Mobiliario y Equipo', '2016-11-08 17:57:34', '');

--
-- Disparadores `cat_alma`
--
DELIMITER $$
CREATE TRIGGER `bit_carr_del` AFTER DELETE ON `cat_alma` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ELIMINAR", NOW(), "categoria")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_carr_upd` AFTER UPDATE ON `cat_alma` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), "categoria")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora` AFTER INSERT ON `cat_alma` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "INSERTAR", NOW(), "categoria")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fac_alma`
--

CREATE TABLE `fac_alma` (
  `id_fac` int(20) NOT NULL,
  `prov_fac` int(20) NOT NULL,
  `num_fac` varchar(20) NOT NULL,
  `fech_fac` varchar(10) NOT NULL,
  `fe_fac` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `useing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fac_alma`
--

INSERT INTO `fac_alma` (`id_fac`, `prov_fac`, `num_fac`, `fech_fac`, `fe_fac`, `useing`) VALUES
(1, 3, '21659', '10/11/2016', '2016-11-10 18:09:58', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_alma`
--

CREATE TABLE `mov_alma` (
  `id_mov` int(20) NOT NULL,
  `fac_mov` int(20) NOT NULL,
  `tip_mov` varchar(10) NOT NULL,
  `prod_mov` int(20) NOT NULL,
  `cant_mov` int(20) NOT NULL,
  `fe_mov` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `useing` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mov_alma`
--

INSERT INTO `mov_alma` (`id_mov`, `fac_mov`, `tip_mov`, `prod_mov`, `cant_mov`, `fe_mov`, `useing`) VALUES
(1, 1, 'ING', 297, 20, '2016-11-11 18:43:16', 1),
(2, 1, 'ING', 298, 20, '2016-11-11 19:25:02', 1),
(6, 1, 'ING', 297, 30, '2016-11-11 22:18:38', 1);

--
-- Disparadores `mov_alma`
--
DELIMITER $$
CREATE TRIGGER `sumaprod` AFTER INSERT ON `mov_alma` FOR EACH ROW UPDATE prod_alma a
   SET a.act_pro = 
    (SELECT SUM(cant_mov) 
       FROM mov_alma
      WHERE prod_mov = a.id_pro)
 WHERE a.id_pro = NEW.prod_mov
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pres_alma`
--

CREATE TABLE `pres_alma` (
  `id_pres` int(20) NOT NULL,
  `pres_pres` varchar(250) NOT NULL,
  `fe_pres` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Useing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pres_alma`
--

INSERT INTO `pres_alma` (`id_pres`, `pres_pres`, `fe_pres`, `Useing`) VALUES
(1, 'Block', '2016-11-08 20:40:21', '1'),
(2, 'Block con 25 hojas', '2016-11-08 18:21:33', '1'),
(3, 'Block de 70 hojas', '2016-11-08 18:21:33', '1'),
(4, 'Bobina', '2016-11-08 18:21:33', '1'),
(5, 'Bolsa', '2016-11-08 18:21:33', '1'),
(6, 'Bolsa de 2kg', '2016-11-08 18:21:33', '1'),
(7, 'Bolsa de 5 libras', '2016-11-08 18:21:33', '1'),
(8, 'Bote de 1 lb.', '2016-11-08 18:21:33', '1'),
(9, 'Bote de 180 g.', '2016-11-08 18:21:33', '1'),
(10, 'Bote de 333g', '2016-11-08 18:21:33', '1'),
(11, 'Bote de 345g', '2016-11-08 18:21:33', '1'),
(12, 'Bote de 600g', '2016-11-08 18:21:33', '1'),
(13, 'Bote de 8 oz', '2016-11-08 18:21:33', '1'),
(14, 'Botella de 1050ml', '2016-11-08 18:21:33', '1'),
(15, 'Caja con 12 piezas', '2016-11-08 18:21:33', '1'),
(16, 'Caja con 50 ganchos', '2016-11-08 18:21:33', '1'),
(17, 'Cajita', '2016-11-08 18:21:33', '1'),
(18, 'Cajita con 100 Unidades', '2016-11-08 18:21:33', '1'),
(19, 'Cajita con 1000 piezas', '2016-11-08 18:21:33', '1'),
(20, 'Cajita con 12 Unidades', '2016-11-08 18:21:33', '1'),
(21, 'Cajita con 5000 piezas', '2016-11-08 18:21:33', '1'),
(22, 'Cajita de 100 Unidades', '2016-11-08 18:21:33', '1'),
(23, 'Cajita de 20 Unidades', '2016-11-08 18:21:33', '1'),
(24, 'Cubeta', '2016-11-08 18:21:33', '1'),
(25, 'Galón', '2016-11-08 18:21:33', '1'),
(26, 'Garrafón', '2016-11-08 18:21:33', '1'),
(28, 'Juego ', '2016-11-08 18:21:33', '1'),
(29, 'Lata ', '2016-11-08 18:21:33', '1'),
(30, 'Libra', '2016-11-08 18:21:33', '1'),
(31, 'Litro', '2016-11-08 18:21:33', '1'),
(32, 'Metro', '2016-11-08 18:21:33', '1'),
(33, 'Paquete', '2016-11-08 18:21:33', '1'),
(34, 'Paquete con 100 tarjetas', '2016-11-08 18:21:33', '1'),
(35, 'Paquete con 125 señales', '2016-11-08 18:21:33', '1'),
(36, 'Paquete de 10 Unidades', '2016-11-08 18:21:33', '1'),
(37, 'Paquete de 100g', '2016-11-08 18:21:33', '1'),
(38, 'Paquete de 200 Unidades', '2016-11-08 18:21:33', '1'),
(39, 'Paquete de 25 Unidades', '2016-11-08 18:21:33', '1'),
(40, 'Paquete de 350 g.', '2016-11-08 18:21:33', '1'),
(41, 'Paquete de 40 grs.', '2016-11-08 18:21:33', '1'),
(42, 'Paquete de 5 Unidades', '2016-11-08 18:21:33', '1'),
(43, 'Par', '2016-11-08 18:21:33', '1'),
(44, 'Pliego', '2016-11-08 18:21:33', '1'),
(45, 'Resma', '2016-11-08 18:21:33', '1'),
(47, 'Rollo ', '2016-11-08 18:21:33', '1'),
(48, 'Roll-on', '2016-11-08 18:21:33', '1'),
(49, 'Roll-on de 60 ml', '2016-11-08 18:21:33', '1'),
(50, 'Tarro  de 425g', '2016-11-08 18:21:33', '1'),
(51, 'Tubo de 12 piezas', '2016-11-08 18:21:33', '1'),
(52, 'Unidad', '2016-11-08 18:21:33', '1');

--
-- Disparadores `pres_alma`
--
DELIMITER $$
CREATE TRIGGER `bit_prese_del` AFTER DELETE ON `pres_alma` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ELIMINAR", NOW(), "pres_alma")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_prese_ins` AFTER INSERT ON `pres_alma` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "INSERTAR", NOW(), "pres_alma")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bit_prese_upd` AFTER UPDATE ON `pres_alma` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), "pres_alma")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_alma`
--

CREATE TABLE `prod_alma` (
  `id_pro` int(20) NOT NULL,
  `cod_pro` varchar(20) NOT NULL,
  `cat_pro` varchar(10) NOT NULL,
  `pro_pro` varchar(200) NOT NULL,
  `pres_pro` varchar(20) NOT NULL,
  `limin_pro` varchar(10) NOT NULL,
  `act_pro` varchar(10) NOT NULL,
  `fe_pro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ing_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prod_alma`
--

INSERT INTO `prod_alma` (`id_pro`, `cod_pro`, `cat_pro`, `pro_pro`, `pres_pro`, `limin_pro`, `act_pro`, `fe_pro`, `ing_pro`) VALUES
(1, 'CAF-001', '1', 'Azúcar', '7', '15', '0', '2016-11-10 20:56:45', 1),
(2, 'CAF-002', '1', 'Café Instantáneo', '9', '15', '0', '2016-11-10 20:56:45', 1),
(3, 'CAF-003', '1', 'Café para hervir', '40', '15', '0', '2016-11-10 20:56:45', 1),
(4, 'CAF-004', '1', 'Cremora', '8', '15', '0', '2016-11-10 20:56:45', 1),
(5, 'CAF-005', '1', 'Té', '23', '15', '0', '2016-11-10 20:57:00', 1),
(6, 'CAF-006', '1', 'Vaso Cónico', '38', '15', '0', '2016-11-10 20:57:10', 1),
(7, 'CAF-007', '1', 'Vaso Desechable', '39', '15', '0', '2016-11-10 20:56:45', 1),
(8, 'CAF-008', '1', 'Plato Desechable', '39', '15', '0', '2016-11-10 20:56:45', 1),
(9, 'CAF-009', '1', 'Agua purificada', '26', '15', '0', '2016-11-10 20:56:45', 1),
(10, 'LIM-001', '2', 'Jabón en polvo para trastes', '12', '15', '0', '2016-11-10 20:56:45', 1),
(11, 'LIM-002', '2', 'Ambiental 52', '11', '15', '0', '2016-11-10 20:56:45', 1),
(12, 'LIM-003', '2', 'Detergente en polvo', '6', '15', '0', '2016-11-10 20:56:45', 1),
(13, 'LIM-004', '2', 'Bolsa para basura mediana', '36', '15', '0', '2016-11-10 20:56:45', 1),
(14, 'LIM-005', '2', 'Bolsa para basura pequeña', '36', '15', '0', '2016-11-10 20:56:45', 1),
(15, 'LIM-006', '2', 'Cepillos de baño', '52', '15', '0', '2016-11-10 20:56:45', 1),
(16, 'LIM-007', '2', 'Cloro', '25', '15', '0', '2016-11-10 20:56:45', 1),
(17, 'LIM-008', '2', 'Desinfectante', '25', '15', '0', '2016-11-10 20:56:45', 1),
(18, 'LIM-009', '2', 'Esponja para lavar trastos', '52', '15', '0', '2016-11-10 20:56:45', 1),
(19, 'LIM-010', '2', 'Jabón de Bola', '52', '15', '0', '2016-11-10 20:56:45', 1),
(20, 'LIM-011', '2', 'Jabón en tarro', '50', '15', '0', '2016-11-10 20:56:45', 1),
(21, 'LIM-012', '2', 'Jabón liquido de manos', '25', '15', '0', '2016-11-10 20:56:45', 1),
(22, 'LIM-013', '2', 'Limpiador tela', '52', '15', '0', '2016-11-10 20:56:45', 1),
(23, 'LIM-014', '2', 'Limpiavidrios', '14', '15', '0', '2016-11-10 20:56:45', 1),
(24, 'LIM-015', '2', 'Servilletas', '37', '15', '0', '2016-11-10 20:57:20', 1),
(25, 'LIM-016', '2', 'Pastillas para baño', '52', '15', '0', '2016-11-10 20:57:28', 1),
(26, 'LIM-017', '2', 'Limpiador de superficies', '10', '15', '0', '2016-11-10 20:59:44', 1),
(27, 'LIM-018', '2', 'Toalla para trapear', '52', '15', '0', '2016-11-10 20:59:44', 1),
(28, 'LIM-019', '2', 'Guante Domestico', '43', '15', '0', '2016-11-10 20:59:44', 1),
(29, 'LIM-020', '2', 'Papel Higiénico', '4', '15', '0', '2016-11-10 20:59:44', 1),
(30, 'LIM-021', '2', 'Papel toalla Rollos', '4', '15', '0', '2016-11-10 20:59:44', 1),
(31, 'LIM-022', '2', 'Bolsa para basura grande', '36', '15', '0', '2016-11-10 20:59:44', 1),
(32, 'LIM-023', '2', 'Bolsa para basura jardinera', '42', '15', '0', '2016-11-10 20:59:44', 1),
(33, 'LIM-024', '2', 'Mascarilla ', '52', '15', '0', '2016-11-10 20:59:44', 1),
(34, 'LIM-025', '2', 'Escobas ', '52', '15', '0', '2016-11-10 20:59:44', 1),
(35, 'LIM-026', '2', 'Plumeros', '52', '15', '0', '2016-11-10 20:59:44', 1),
(36, 'OFI-001', '3', 'Almohadilla para sello', '52', '15', '0', '2016-11-10 20:59:44', 1),
(37, 'OFI-002', '3', 'Archivadores  carta ', '52', '15', '0', '2016-11-10 20:59:44', 1),
(38, 'OFI-003', '3', 'Archivadores  oficio', '52', '15', '0', '2016-11-10 20:59:44', 1),
(39, 'OFI-004', '3', 'Bolsa de hules', '5', '15', '0', '2016-11-10 20:59:44', 1),
(40, 'OFI-005', '3', 'Borrador', '52', '15', '0', '2016-11-10 20:59:44', 1),
(41, 'OFI-006', '3', 'Grapas Estándar', '21', '15', '0', '2016-11-10 20:59:44', 1),
(42, 'OFI-007', '3', 'Grapas Industriales', '19', '15', '0', '2016-11-10 20:59:44', 1),
(43, 'OFI-008', '3', 'Mina 0.5', '51', '15', '0', '2016-11-10 20:59:44', 1),
(44, 'OFI-009', '3', 'CD', '52', '15', '0', '2016-11-10 20:59:44', 1),
(45, 'OFI-010', '3', 'Clip grande', '18', '15', '0', '2016-11-10 20:59:44', 1),
(46, 'OFI-011', '3', 'Clip pequeño', '18', '15', '0', '2016-11-10 20:59:44', 1),
(47, 'OFI-012', '3', 'Cuadernos de espiral', '52', '15', '0', '2016-11-10 20:59:44', 1),
(48, 'OFI-013', '3', 'Cuenta fácil', '52', '15', '0', '2016-11-10 20:59:44', 1),
(49, 'OFI-014', '3', 'Dispensador de tape', '52', '15', '0', '2016-11-10 20:59:55', 1),
(50, 'OFI-015', '3', 'Engrapadora', '52', '15', '0', '2016-11-10 21:00:03', 1),
(51, 'OFI-016', '3', 'Fastener ', '16', '15', '0', '2016-11-09 01:53:29', 1),
(52, 'OFI-017', '3', 'Fastener plástico', '16', '15', '0', '2016-11-09 01:53:29', 1),
(53, 'OFI-018', '3', 'Folder carta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(54, 'OFI-019', '3', 'Folder oficio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(55, 'OFI-020', '3', 'Goma liquida', '13', '15', '0', '2016-11-09 01:53:29', 1),
(56, 'OFI-021', '3', 'Hojas protectoras carta ', '52', '15', '0', '2016-11-09 01:53:29', 1),
(57, 'OFI-022', '3', 'Lapiceros', '52', '15', '0', '2016-11-09 01:53:29', 1),
(58, 'OFI-023', '3', 'Lapiceros gel', '52', '15', '0', '2016-11-09 01:53:29', 1),
(59, 'OFI-024', '3', 'Lápiz', '52', '15', '0', '2016-11-09 01:53:29', 1),
(60, 'OFI-025', '3', 'Libreta de taquigrafía', '52', '15', '0', '2016-11-09 01:53:29', 1),
(61, 'OFI-026', '3', 'Marcador de pizarra', '52', '15', '0', '2016-11-09 01:53:29', 1),
(62, 'OFI-027', '3', 'Marcador permanente', '52', '15', '0', '2016-11-09 01:53:29', 1),
(63, 'OFI-028', '3', 'Masking Tape de 1"', '47', '15', '0', '2016-11-09 01:53:29', 1),
(64, 'OFI-029', '3', 'Portaminas 0.5', '52', '15', '0', '2016-11-09 01:53:29', 1),
(65, 'OFI-030', '3', 'Post-it grande', '1', '15', '0', '2016-11-09 01:53:29', 1),
(66, 'OFI-031', '3', 'Post-it mediano', '1', '15', '0', '2016-11-09 01:53:29', 1),
(67, 'OFI-032', '3', 'Prensa papeles grande', '15', '15', '0', '2016-11-09 01:53:29', 1),
(68, 'OFI-033', '3', 'Prensa papeles pequeño ', '20', '15', '0', '2016-11-09 01:53:29', 1),
(69, 'OFI-034', '3', 'Regla', '52', '15', '0', '2016-11-09 01:53:29', 1),
(70, 'OFI-035', '3', 'Hojas Carta', '45', '15', '0', '2016-11-09 01:53:29', 1),
(71, 'OFI-036', '3', 'Hojas Oficio', '45', '15', '0', '2016-11-09 01:53:29', 1),
(72, 'OFI-037', '3', 'Tape Mágico', '47', '15', '0', '2016-11-09 01:53:29', 1),
(73, 'OFI-038', '3', 'Sacagrapas', '52', '15', '0', '2016-11-09 01:53:29', 1),
(74, 'OFI-039', '3', 'Separador Carta', '42', '15', '0', '2016-11-09 01:53:29', 1),
(75, 'OFI-040', '3', 'Sobres carta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(76, 'OFI-041', '3', 'Sobres media carta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(77, 'OFI-042', '3', 'Sobres oficio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(78, 'OFI-043', '3', 'Tape de 1/2', '47', '15', '0', '2016-11-09 01:53:29', 1),
(79, 'OFI-044', '3', 'Tinta para almohadilla', '49', '15', '0', '2016-11-09 01:53:29', 1),
(80, 'OFI-045', '3', '1 Rotafolio', '1', '15', '0', '2016-11-09 01:53:29', 1),
(81, 'OFI-046', '3', 'Papel construcción', '44', '15', '0', '2016-11-09 01:53:29', 1),
(82, 'OFI-047', '3', 'Tarjeta blanca', '34', '15', '0', '2016-11-09 01:53:29', 1),
(83, 'OFI-048', '3', 'Base para rotafolio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(84, 'OFI-049', '3', 'Papel Kraft', '47', '15', '0', '2016-11-09 01:53:29', 1),
(85, 'OFI-050', '3', 'Banderitas Adhesivas', '35', '15', '0', '2016-11-09 01:53:29', 1),
(86, 'OFI-051', '3', '1 Rayado', '3', '15', '0', '2016-11-09 01:53:29', 1),
(87, 'OFI-052', '3', 'Post-it pequeño', '1', '15', '0', '2016-11-09 01:53:29', 1),
(88, 'OFI-053', '3', 'Contometro', '47', '15', '0', '2016-11-09 01:53:29', 1),
(89, 'OFI-054', '3', 'DVD', '52', '15', '0', '2016-11-09 01:53:29', 1),
(90, 'OFI-055', '3', 'Goma en barra', '41', '15', '0', '2016-11-09 01:53:29', 1),
(91, 'OFI-056', '3', 'Hojas protectoras oficio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(92, 'OFI-057', '3', 'Pastas plásticas para encuadernar carta', '28', '15', '0', '2016-11-09 01:53:29', 1),
(93, 'OFI-058', '3', 'Pastas plásticas para encuadernar Oficio', '28', '15', '0', '2016-11-09 01:53:29', 1),
(94, 'OFI-059', '3', 'Push pin', '22', '15', '0', '2016-11-09 01:53:29', 1),
(95, 'OFI-060', '3', 'Hojas 120 gramos Carta', '45', '15', '0', '2016-11-09 01:53:29', 1),
(96, 'OFI-061', '3', 'Hojas 120 gramos Oficio', '45', '15', '0', '2016-11-09 01:53:29', 1),
(97, 'OFI-062', '3', 'Perforador', '52', '15', '0', '2016-11-09 01:53:29', 1),
(98, 'OFI-063', '3', 'Sacapuntas', '52', '15', '0', '2016-11-09 01:53:29', 1),
(99, 'OFI-064', '3', 'Separador Oficio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(100, 'OFI-065', '3', 'Sobre extra oficio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(101, 'OFI-066', '3', 'Tape sellador', '47', '15', '0', '2016-11-09 01:53:29', 1),
(102, 'OFI-067', '3', 'Tijera', '52', '15', '0', '2016-11-09 01:53:29', 1),
(103, 'OFI-068', '3', 'Corrector tipo pluma', '52', '15', '0', '2016-11-09 01:53:29', 1),
(104, 'OFI-069', '3', 'Resaltadores', '52', '15', '0', '2016-11-09 01:53:29', 1),
(105, 'OFI-070', '3', 'Papel calco (Cebolla)', '2', '15', '0', '2016-11-09 01:53:29', 1),
(106, 'OFI-071', '3', 'Papel para plotter', '47', '15', '0', '2016-11-09 01:53:29', 1),
(107, 'OFI-072', '3', 'Caja Plástica', '52', '15', '0', '2016-11-09 01:53:29', 1),
(108, 'OFI-073', '3', 'Hule para sello', '52', '15', '0', '2016-11-09 01:53:29', 1),
(109, 'OFI-074', '3', 'Libro de actas (200 hojas)', '52', '15', '0', '2016-11-09 01:53:29', 1),
(110, 'OFI-075', '3', 'Sello automatico', '52', '15', '0', '2016-11-09 01:53:29', 1),
(111, 'OFI-076', '3', 'Foliadora', '52', '15', '0', '2016-11-09 01:53:29', 1),
(112, 'OFI-077', '3', 'Almohadilla para sello automatico', '52', '15', '0', '2016-11-09 01:53:29', 1),
(113, 'OFI-078', '3', 'Tinta para sello en gotero', '52', '15', '0', '2016-11-09 01:53:29', 1),
(114, 'OFI-079', '3', 'Hojas movibles para solicitud de compra', '52', '15', '0', '2016-11-09 01:53:29', 1),
(115, 'OFI-080', '3', 'Cinta para maquina de escribir electrica', '52', '15', '0', '2016-11-09 01:53:29', 1),
(116, 'OFI-081', '3', 'Espiral de 1/2', '52', '15', '0', '2016-11-09 01:53:29', 1),
(117, 'OFI-082', '3', 'Espiral de 1/4', '52', '15', '0', '2016-11-09 01:53:29', 1),
(118, 'OFI-083', '3', 'Espiral de 3/4', '52', '15', '0', '2016-11-09 01:53:29', 1),
(119, 'OFI-084', '3', 'Espiral de 3/8', '52', '15', '0', '2016-11-09 01:53:29', 1),
(120, 'OFI-085', '3', 'Espiral de 5/16', '52', '15', '0', '2016-11-09 01:53:29', 1),
(121, 'OFI-086', '3', 'Espiral de 5/8', '52', '15', '0', '2016-11-09 01:53:29', 1),
(122, 'OFI-087', '3', 'Espiral de 7/16', '52', '15', '0', '2016-11-09 01:53:29', 1),
(123, 'OFI-088', '3', 'Espiral de 7/8', '52', '15', '0', '2016-11-09 01:53:29', 1),
(124, 'OFI-089', '3', 'Espiral de 9/16', '52', '15', '0', '2016-11-09 01:53:29', 1),
(125, 'OFI-090', '3', 'Calculadora de escritorio estándar', '52', '15', '0', '2016-11-09 01:53:29', 1),
(126, 'OFI-091', '3', 'Lápiz marca económico', '52', '15', '0', '2016-11-09 01:53:29', 1),
(127, 'OFI-092', '3', 'Masking tape de 1/2 marca bestape', '47', '15', '0', '2016-11-09 01:53:29', 1),
(128, 'OFI-093', '3', 'Papel pasante tamaño oficio', '33', '15', '0', '2016-11-09 01:53:29', 1),
(129, 'OFI-094', '3', 'Perforador de 1 agujero', '52', '15', '0', '2016-11-09 01:53:29', 1),
(130, 'OFI-095', '3', 'Perforador de 3 agujeros', '52', '15', '0', '2016-11-09 01:53:29', 1),
(131, 'OFI-096', '3', 'Post-it grande 3*5" marca stick´n', '33', '15', '0', '2016-11-09 01:53:29', 1),
(132, 'OFI-097', '3', 'Post-it pequeño 1.5*2" marca stick´n', '33', '15', '0', '2016-11-09 01:53:29', 1),
(133, 'OFI-098', '3', 'Prensa papel pequeño marca barrilito', '17', '15', '0', '2016-11-09 01:53:29', 1),
(134, 'OFI-099', '3', 'Resma de hoja carta marca icopy', '45', '15', '0', '2016-11-09 01:53:29', 1),
(135, 'OFI-100', '3', 'Sacagrapa marca studmark', '52', '15', '0', '2016-11-09 01:53:29', 1),
(136, 'OFI-101', '3', 'Sobre manila extra oficio marca concept', '52', '15', '0', '2016-11-09 01:53:29', 1),
(137, 'OFI-102', '3', 'Sobre manila oficio marca concept', '52', '15', '0', '2016-11-09 01:53:29', 1),
(138, 'OFI-103', '3', 'Tinta para almohadilla color rojo', '48', '15', '0', '2016-11-09 01:53:29', 1),
(139, 'OFI-104', '3', 'Borrador de lapicero', '52', '15', '0', '2016-11-09 01:53:29', 1),
(140, 'OFI-105', '3', 'Folder tamaño oficio marca apunta livsa', '52', '15', '0', '2016-11-09 01:53:29', 1),
(141, 'OFI-106', '3', 'Almohadilla para pizarron', '52', '15', '0', '2016-11-09 01:53:29', 1),
(142, 'OFI-107', '3', 'Libro de actas 400 hojas', '52', '15', '0', '2016-11-09 01:53:29', 1),
(143, 'OFI-108', '3', 'Folder colgante tamaño oficio', '52', '15', '0', '2016-11-09 01:53:29', 1),
(144, 'TON-001', '4', 'MT 502A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(145, 'TON-002', '4', '104A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(146, 'TON-003', '4', '13X', '52', '15', '0', '2016-11-09 01:53:29', 1),
(147, 'TON-004', '4', '15X', '52', '15', '0', '2016-11-09 01:53:29', 1),
(148, 'TON-005', '4', '53A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(149, 'TON-006', '4', 'AL 100 TDN', '52', '15', '0', '2016-11-09 01:53:29', 1),
(150, 'TON-007', '4', 'AR 016', '52', '15', '0', '2016-11-09 01:53:29', 1),
(151, 'TON-008', '4', 'MX 235 NT', '52', '15', '0', '2016-11-09 01:53:29', 1),
(152, 'TON-009', '4', '12A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(153, 'TON-010', '4', '114', '52', '15', '0', '2016-11-09 01:53:29', 1),
(154, 'TON-011', '4', '05A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(155, 'TON-012', '4', '80A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(156, 'TON-013', '4', '49A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(157, 'TON-014', '4', '15A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(158, 'TON-015', '4', 'MX 312 NT', '52', '15', '0', '2016-11-09 01:53:29', 1),
(159, 'TON-016', '4', '305A Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(160, 'TON-017', '4', '305A Cyan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(161, 'TON-018', '4', '305A Amarillo', '52', '15', '0', '2016-11-09 01:53:29', 1),
(162, 'TON-019', '4', '305A Magenta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(163, 'TON-020', '4', '96A', '52', '15', '0', '2016-11-09 01:53:29', 1),
(164, 'TON-021', '4', '126A Negro ', '52', '15', '0', '2016-11-09 01:53:29', 1),
(165, 'TON-022', '4', '126A Cyan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(166, 'TON-023', '4', '126A Amarillo', '52', '15', '0', '2016-11-09 01:53:29', 1),
(167, 'TON-024', '4', '126A Magenta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(168, 'TON-025', '4', 'GPR15', '52', '15', '0', '2016-11-09 01:53:29', 1),
(169, 'TON-026', '4', 'MP3554', '52', '15', '0', '2016-11-09 01:53:29', 1),
(170, 'TON-027', '4', 'CINTA SO15337', '52', '15', '0', '2016-11-09 01:53:29', 1),
(171, 'TIN-001', '5', 'HP 122 Negra', '52', '15', '0', '2016-11-09 01:53:29', 1),
(172, 'TIN-002', '5', 'Epson 82N T120 Negra', '52', '15', '0', '2016-11-09 01:53:29', 1),
(173, 'TIN-003', '5', 'Epson 82N T220 Cyan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(174, 'TIN-004', '5', 'Epson 82N T320 Magenta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(175, 'TIN-005', '5', 'Epson 82N T420 Amarillo', '52', '15', '0', '2016-11-09 01:53:29', 1),
(176, 'TIN-006', '5', 'Epson 82N T520 Cyan claro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(177, 'TIN-007', '5', 'Epson 82N T620 Magenta claro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(178, 'TIN-008', '5', 'HP 27 Negra', '52', '15', '0', '2016-11-09 01:53:29', 1),
(179, 'TIN-009', '5', 'HP 60 Negra', '52', '15', '0', '2016-11-09 01:53:29', 1),
(180, 'TIN-010', '5', 'HP 60 Tricolor', '52', '15', '0', '2016-11-09 01:53:29', 1),
(181, 'TIN-011', '5', 'Tinta CLI-36', '52', '15', '0', '2016-11-09 01:53:29', 1),
(182, 'TIN-012', '5', 'Epson 73N T120 Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(183, 'TIN-013', '5', 'Epson 73N T220 Cyan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(184, 'TIN-014', '5', 'Epson 73N T320 Magenta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(185, 'TIN-015', '5', 'Epson 73N T420 Amarillo', '52', '15', '0', '2016-11-09 01:53:29', 1),
(186, 'TIN-016', '5', 'Epson 73N T520 Cyan claro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(187, 'TIN-017', '5', 'Epson 73N T620 Magenta claro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(188, 'TIN-018', '5', 'HP 122 Tricolor', '52', '15', '0', '2016-11-09 01:53:29', 1),
(189, 'TIN-019', '5', 'HP 10 Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(190, 'TIN-020', '5', 'HP 11 Color', '52', '15', '0', '2016-11-09 01:53:29', 1),
(191, 'TIN-021', '5', 'HP 11 Y', '52', '15', '0', '2016-11-09 01:53:29', 1),
(192, 'TIN-022', '5', 'HP 45', '52', '15', '0', '2016-11-09 01:53:29', 1),
(193, 'TIN-023', '5', 'HP 28 Tricolor ', '52', '15', '0', '2016-11-09 01:53:29', 1),
(194, 'TIN-024', '5', 'HP 21 Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(195, 'TIN-025', '5', 'HP 97 Tricolor', '52', '15', '0', '2016-11-09 01:53:29', 1),
(196, 'TIN-026', '5', 'HP 96 Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(197, 'TIN-027', '5', 'Canon PG 210 Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(198, 'TIN-028', '5', 'Canon CL 211 Color', '52', '15', '0', '2016-11-09 01:53:29', 1),
(199, 'TIN-029', '5', 'HP 662 XL Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(200, 'TIN-030', '5', 'HP 662 XL Color', '52', '15', '0', '2016-11-09 01:53:29', 1),
(201, 'TIN-031', '5', 'HP 78 Tricolor', '52', '15', '0', '2016-11-09 01:53:29', 1),
(202, 'TIN-032', '5', 'HP 22 Tricolor', '52', '15', '0', '2016-11-09 01:53:29', 1),
(203, 'TIN-033', '5', 'HP 711 CZ129A Negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(204, 'TIN-034', '5', 'HP 711 CZ130A Cyan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(205, 'TIN-035', '5', 'HP 711 CZ121A Magenta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(206, 'TIN-036', '5', 'HP 711 CZ132A Amarillo', '52', '15', '0', '2016-11-09 01:53:29', 1),
(207, 'TIN-037', '5', '950 negro', '52', '15', '0', '2016-11-09 01:53:29', 1),
(208, 'TIN-038', '5', '951 Cyan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(209, 'TIN-039', '5', '951 magenta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(210, 'TIN-040', '5', '951 amarillo', '52', '15', '0', '2016-11-09 01:53:29', 1),
(211, 'TIN-041', '5', 'Tinta PGI-35', '52', '15', '0', '2016-11-09 01:53:29', 1),
(212, 'CUP-001', '6', 'Cupones de combustible de Q. 50.00', '52', '15', '0', '2016-11-09 01:53:29', 1),
(213, 'CUP-002', '6', 'Cupones de combustible de Q. 100.00', '52', '15', '0', '2016-11-09 01:53:29', 1),
(214, 'CUP-003', '6', 'Cupones de combustible de Q. 1,000.00', '52', '15', '0', '2016-11-09 01:53:29', 1),
(215, 'CUP-004', '6', 'Aceite 20w50', '31', '15', '0', '2016-11-09 01:53:29', 1),
(216, 'CUP-005', '6', 'Aceite 15w40', '31', '15', '0', '2016-11-09 01:53:29', 1),
(217, 'CUP-006', '6', 'Aceite 4t 20w50', '31', '15', '0', '2016-11-09 01:53:29', 1),
(218, 'Mat-001', '7', 'Esponja para lijar ', '52', '15', '0', '2016-11-09 01:53:29', 1),
(219, 'Mat-002', '7', 'Pita plastica', '47', '15', '0', '2016-11-09 01:53:29', 1),
(220, 'Mat-003', '7', 'Pasta para tablayeso', '24', '15', '0', '2016-11-09 01:53:29', 1),
(221, 'Mat-004', '7', 'Tornillo tablayeso de 1/2', '52', '15', '0', '2016-11-09 01:53:29', 1),
(222, 'Mat-005', '7', 'Tornillo tablayeso de 1', '52', '15', '0', '2016-11-09 01:53:29', 1),
(223, 'Mat-006', '7', 'Planchas de tablayeso', '52', '15', '0', '2016-11-09 01:53:29', 1),
(224, 'Mat-007', '7', 'Tornillos de punta fina de 1"', '52', '15', '0', '2016-11-09 01:53:29', 1),
(225, 'Mat-008', '7', 'Cinta de tablayeso', '47', '15', '0', '2016-11-09 01:53:29', 1),
(226, 'Mat-009', '7', 'Brocha de 3"', '52', '15', '0', '2016-11-09 01:53:29', 1),
(227, 'Mat-010', '7', 'Tornillo de 1/2" punta fina', '52', '15', '0', '2016-11-09 01:53:29', 1),
(228, 'Mat-011', '7', 'Pintura de Aceite color negro', '29', '15', '0', '2016-11-09 01:53:29', 1),
(229, 'Mat-012', '7', 'Paral', '52', '15', '0', '2016-11-09 01:53:29', 1),
(230, 'Mat-013', '7', 'Tapacanto', '32', '15', '0', '2016-11-09 02:33:24', 1),
(231, 'Mat-014', '7', 'Tornillo tablayeso 2 1/2', '52', '15', '0', '2016-11-09 01:53:29', 1),
(232, 'Mat-015', '7', 'Tarugo para tablayeso de 1', '52', '15', '0', '2016-11-09 01:53:29', 1),
(233, 'Mat-016', '7', 'Tornillo tablayeso 2 ', '52', '15', '0', '2016-11-09 01:53:29', 1),
(234, 'Mat-017', '7', 'Lija de agua', '52', '15', '0', '2016-11-09 01:53:29', 1),
(235, 'Mat-018', '7', 'Tarugo para tablayeso de 3', '52', '15', '0', '2016-11-09 01:53:29', 1),
(236, 'Mat-019', '7', 'Lija de lona grano 36', '52', '15', '0', '2016-11-09 01:53:29', 1),
(237, 'Mat-020', '7', 'Plywood 1/2 x 4*8', '52', '15', '0', '2016-11-09 01:53:29', 1),
(238, 'Mat-021', '7', 'Cinta de aislar', '47', '15', '0', '2016-11-09 01:53:29', 1),
(239, 'Mat-022', '7', 'Canaleta de 40mm*25mm', '52', '15', '0', '2016-11-09 01:53:29', 1),
(240, 'Mat-023', '7', 'Cinta doble cara', '52', '15', '0', '2016-11-09 01:53:29', 1),
(241, 'Mat-024', '7', 'Cincho plastico de amarre de 12"', '52', '15', '0', '2016-11-09 01:53:29', 1),
(242, 'Mat-025', '7', 'Lamina troquelada de 1 x 6.87 mts', '52', '15', '0', '2016-11-09 01:53:29', 1),
(243, 'Mat-026', '7', 'Lamina troquelada de 1 x 5.37 mts', '52', '15', '0', '2016-11-09 01:53:29', 1),
(244, 'Mat-027', '7', 'Tornillo polser de 1/4 x 1" punta de broca', '52', '15', '0', '2016-11-09 01:53:29', 1),
(245, 'Her-001', '8', 'Punta No. 2', '52', '15', '0', '2016-11-09 01:53:29', 1),
(246, 'Her-002', '8', 'Sierra Ordinaria', '52', '15', '0', '2016-11-09 01:53:29', 1),
(247, 'Her-003', '8', 'Ponchadora ', '52', '15', '0', '2016-11-09 01:53:29', 1),
(248, 'Her-004', '8', 'Kit de destornilladores', '52', '15', '0', '2016-11-09 01:53:29', 1),
(249, 'Her-005', '8', 'Grabador electrico', '52', '15', '0', '2016-11-09 01:53:29', 1),
(250, 'Rep-001', '9', 'Valvula para extintor', '52', '15', '0', '2016-11-09 01:53:29', 1),
(251, 'Rep-002', '9', 'Orring Universal', '52', '15', '0', '2016-11-09 01:53:29', 1),
(252, 'Rep-003', '9', 'Tapon de Radiador', '52', '15', '0', '2016-11-09 01:53:29', 1),
(253, 'Rep-004', '9', 'Plumilla Universal', '52', '15', '0', '2016-11-09 01:53:29', 1),
(254, 'Rep-005', '9', 'Disco para sierra electrica', '52', '15', '0', '2016-11-09 01:53:29', 1),
(255, 'Rep-006', '9', 'Broca de metal de 1/8', '52', '15', '0', '2016-11-09 01:53:29', 1),
(256, 'Rep-007', '9', 'Cojinete de rodamiento', '52', '15', '0', '2016-11-09 01:53:29', 1),
(257, 'Rep-008', '9', 'Bomba auxiliar de frenos', '52', '15', '0', '2016-11-09 01:53:29', 1),
(258, 'Rep-009', '9', 'Frenos traseros', '52', '15', '0', '2016-11-09 01:53:29', 1),
(259, 'Rep-010', '9', 'Cruz de Transmisión', '52', '15', '0', '2016-11-09 01:53:29', 1),
(260, 'Rep-011', '9', 'Frenos pegados grandes', '52', '15', '0', '2016-11-09 01:53:29', 1),
(261, 'Rep-012', '9', 'Pastillas para frenos de motocicleta', '28', '15', '0', '2016-11-09 01:53:29', 1),
(262, 'Rep-013', '9', 'Tubo para llanta de motocicleta Rin 18', '52', '15', '0', '2016-11-09 01:53:29', 1),
(263, 'Rep-014', '9', 'Bombilla de 12 voltios delantera', '52', '15', '0', '2016-11-09 01:53:29', 1),
(264, 'Rep-015', '9', 'Filtro de Aceite para Pick-up Ford', '52', '15', '0', '2016-11-09 01:53:29', 1),
(265, 'Rep-016', '9', 'Filtro de Aceite para Pick-up y Camioneta Toyota', '52', '15', '0', '2016-11-09 01:53:29', 1),
(266, 'Rep-017', '9', 'Filtro de Aceite para Pick-up Isuzu', '52', '15', '0', '2016-11-09 01:53:29', 1),
(267, 'Rep-018', '9', 'Filtro de Aceite para Panel Fiat', '52', '15', '0', '2016-11-09 01:53:29', 1),
(268, 'Rep-019', '9', 'Filtro de Aceite para Automovil Toyota', '52', '15', '0', '2016-11-09 01:53:29', 1),
(269, 'Rep-020', '9', 'Filtro de Aceite para Camioneta Mitsubishi', '52', '15', '0', '2016-11-09 01:53:29', 1),
(270, 'Rep-021', '9', 'Filtro de Aceite para Camioneta Hyundai', '52', '15', '0', '2016-11-09 01:53:29', 1),
(271, 'Rep-022', '9', 'Filtro de Aceite para Pick-up Mitsubishi', '52', '15', '0', '2016-11-09 01:53:29', 1),
(272, 'Rep-023', '9', 'Filtro de Aceite para Pick-up Mazda y Camioneta Hyundai', '52', '15', '0', '2016-11-09 01:53:29', 1),
(273, 'Rep-024', '9', 'Filtro de Aceite para Pick-up Nissan', '52', '15', '0', '2016-11-09 01:53:29', 1),
(274, 'Rep-025', '9', 'Filtro de Aceite para Pick-up ZX Auto', '52', '15', '0', '2016-11-09 01:53:29', 1),
(275, 'Rep-026', '9', 'Filtro de Aceite para Automovil Chevolet y Suzuki', '52', '15', '0', '2016-11-09 01:53:29', 1),
(276, 'Rep-027', '9', 'Filtro de Aceite para Pick-up Toyota', '52', '15', '0', '2016-11-09 01:53:29', 1),
(277, 'PQC-001', '10', 'Refrigerante', '52', '15', '0', '2016-11-09 01:53:29', 1),
(278, 'PQC-002', '10', 'Silicone (Industrial)', '52', '15', '0', '2016-11-09 01:53:29', 1),
(279, 'PQC-003', '10', 'Diluyente (Thinner)', '52', '15', '0', '2016-11-09 01:53:29', 1),
(280, 'ACV-001', '11', 'Candado de 25mm', '52', '15', '0', '2016-11-09 01:53:29', 1),
(281, 'ACV-002', '11', 'Bisabra de 1 1/4', '52', '15', '0', '2016-11-09 01:53:29', 1),
(282, 'ACV-003', '11', 'Chapa', '52', '15', '0', '2016-11-09 01:53:29', 1),
(283, 'ACV-004', '11', 'Rotulo recepcion puerta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(284, 'ACV-005', '11', 'Rotulo recepcion tercer nivel', '52', '15', '0', '2016-11-09 01:53:29', 1),
(285, 'ACV-006', '11', 'Rotulo empuje puerta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(286, 'Mel-001', '12', 'Regleta', '52', '15', '0', '2016-11-09 01:53:29', 1),
(287, 'Mel-002', '12', 'Electrodo de 3/32 libras', '30', '15', '0', '2016-11-09 01:53:29', 1),
(288, 'Mel-003', '12', 'Conector RJ-45', '52', '15', '0', '2016-11-09 01:53:29', 1),
(289, 'Mel-004', '12', 'Cubiertas portectoras para conector RJ-45', '52', '15', '0', '2016-11-09 01:53:29', 1),
(290, 'Mel-005', '12', 'Conector RJ-11', '52', '15', '0', '2016-11-09 01:53:29', 1),
(291, 'Mel-006', '12', 'Cable UTP categoria 5', '4', '15', '0', '2016-11-09 01:53:29', 1),
(292, 'Mel-007', '12', 'Cable telefonico de 4 hilos', '4', '15', '0', '2016-11-09 01:53:29', 1),
(293, 'Mel-008', '12', 'Roseta sencilla RJ-45', '52', '15', '0', '2016-11-09 01:53:29', 1),
(294, 'Mel-009', '12', 'Roseta doble RJ-45', '52', '15', '0', '2016-11-09 01:53:29', 1),
(295, 'Mel-010', '12', 'Conector hembra RJ-45', '52', '15', '0', '2016-11-09 01:53:29', 1),
(296, 'MYE-001', '13', 'Equipo de aire acondicionado', '52', '15', '0', '2016-11-09 01:53:29', 1),
(297, 'abc', '11', 'Mierda', '1', '15', '50', '2016-11-11 22:18:38', 1),
(298, 'abcde', '11', 'Mierda2', '1', '15', '0', '2016-11-11 16:26:51', 1),
(299, 'abdef', '11', 'Mierda3', '1', '15', '0', '2016-11-11 16:27:08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov_alma`
--

CREATE TABLE `prov_alma` (
  `id_prov` int(20) NOT NULL,
  `n_prov` varchar(200) NOT NULL,
  `nit_prov` varchar(30) NOT NULL,
  `tel_prov` varchar(30) NOT NULL,
  `des_prov` mediumtext NOT NULL,
  `fe_prov` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `use_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prov_alma`
--

INSERT INTO `prov_alma` (`id_prov`, `n_prov`, `nit_prov`, `tel_prov`, `des_prov`, `fe_prov`, `use_id`) VALUES
(1, 'Super Tiendas Pais S.A.', '123456-7', '21212121', 'Tienda de la Esquina', '2016-11-09 17:11:53', 1),
(3, 'Tienda Chanita', '5188088-5', '23212122', '', '2016-11-09 17:12:22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido` varchar(250) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `roll` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `Nombre`, `Apellido`, `username`, `password`, `roll`, `status`) VALUES
(1, 'Admin', 'Informática', 'Admin', 'Admin.2016', 'Admin', '1'),
(3, 'Kevin', 'Holtman', 'kholtman', 'abc', 'User', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_alma`
--
ALTER TABLE `cat_alma`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `fac_alma`
--
ALTER TABLE `fac_alma`
  ADD PRIMARY KEY (`id_fac`);

--
-- Indices de la tabla `mov_alma`
--
ALTER TABLE `mov_alma`
  ADD PRIMARY KEY (`id_mov`);

--
-- Indices de la tabla `pres_alma`
--
ALTER TABLE `pres_alma`
  ADD PRIMARY KEY (`id_pres`);

--
-- Indices de la tabla `prod_alma`
--
ALTER TABLE `prod_alma`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `prov_alma`
--
ALTER TABLE `prov_alma`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `cat_alma`
--
ALTER TABLE `cat_alma`
  MODIFY `id_cat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `fac_alma`
--
ALTER TABLE `fac_alma`
  MODIFY `id_fac` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mov_alma`
--
ALTER TABLE `mov_alma`
  MODIFY `id_mov` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pres_alma`
--
ALTER TABLE `pres_alma`
  MODIFY `id_pres` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `prod_alma`
--
ALTER TABLE `prod_alma`
  MODIFY `id_pro` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT de la tabla `prov_alma`
--
ALTER TABLE `prov_alma`
  MODIFY `id_prov` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
