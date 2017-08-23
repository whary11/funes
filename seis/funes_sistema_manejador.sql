-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2017 a las 04:59:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `funes_sistema_manejador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_funes`
--

CREATE TABLE `clientes_funes` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `condicion_iva` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio_comercial` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contacto1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `whatsapp` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contacto2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contacto3` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo3` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono3` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cargado_por` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_cargue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes_funes`
--

INSERT INTO `clientes_funes` (`id`, `razon_social`, `cuit`, `tipo`, `condicion_iva`, `domicilio_comercial`, `correo1`, `telefono1`, `contacto1`, `whatsapp`, `contacto2`, `correo2`, `telefono2`, `contacto3`, `correo3`, `telefono3`, `cargado_por`, `comentarios`, `fecha_cargue`, `fecha_modificacion`) VALUES
(1, 'EnRedes', '1077444356', 'Resp', 'NA', 'Cali - Colombia', 'whary11@gmail.com', '3127049308', 'Luis Fernando Raga', '3047868668', 'Omar Raga', 'Oraga@enredes.com', '3127899809', 'David Raga', 'Draga@enredes.com', '3214563478', 'Luis Raga', 'Test de prueba', '2017-06-19 22:27:57', '0000-00-00'),
(2, 'Socios Cup', '1077440677', 'Resp', 'NA', 'Cali - Colombia', 'whary11@gmail.com', '3127049308', 'Omar Enrique Raag', '3047868668', 'Omar Raga', 'Oraga@enredes.com', '3127899809', 'David Raga', 'Draga@enredes.com', '3214563478', 'Luis Raga', 'Test de prueba', '2017-06-26 15:57:31', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_presupuesto_funes`
--

CREATE TABLE `detalle_presupuesto_funes` (
  `id` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuestos_funes`
--

CREATE TABLE `presupuestos_funes` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nombre_creador` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `presupuestos_funes`
--

INSERT INTO `presupuestos_funes` (`id`, `cliente_id`, `total`, `nombre_creador`, `fecha_creado`) VALUES
(23, 1, 20040000, 'Luis Raga', '2017-08-11 15:48:14'),
(24, 1, 50000, 'Luis Raga', '2017-08-14 23:42:38'),
(25, 1, 50000, 'Luis Raga', '2017-08-14 23:42:45'),
(26, 2, 40300000, 'Luis Raga', '2017-08-14 23:43:06'),
(27, 1, 50000, 'Luis Raga', '2017-08-16 01:19:01'),
(28, 1, 120570000, 'Luis Raga', '2017-08-16 01:19:41'),
(29, 1, 20000, 'Luis Raga', '2017-08-21 15:23:20'),
(30, 1, 120450000, 'Luis Raga', '2017-08-21 15:23:58'),
(32, 1, 50000, 'Luis Raga', '2017-08-21 15:26:23'),
(33, 1, 50000, 'Luis Raga', '2017-08-21 15:26:54'),
(178, 1, 20100000, 'Luis Raga', '2017-08-21 20:03:29'),
(179, 1, 20100000, 'Luis Raga', '2017-08-21 20:03:29'),
(180, 1, 20100000, 'Luis Raga', '2017-08-21 20:09:08'),
(181, 1, 20100000, 'Luis Raga', '2017-08-21 20:09:08'),
(220, 2, 393260000, 'Luis Raga', '2017-08-21 21:32:04'),
(221, 2, 393260000, 'Luis Raga', '2017-08-21 21:32:04'),
(222, 1, 20000, 'Luis Raga', '2017-08-21 21:37:03'),
(223, 1, 20000, 'Luis Raga', '2017-08-21 21:37:03'),
(224, 1, 20000, 'Luis Raga', '2017-08-21 21:39:13'),
(225, 1, 20000, 'Luis Raga', '2017-08-21 21:39:13'),
(226, 1, 20000, 'Luis Raga', '2017-08-21 21:39:23'),
(227, 1, 20000, 'Luis Raga', '2017-08-21 21:39:23'),
(228, 1, 20000, 'Luis Raga', '2017-08-21 21:39:38'),
(229, 1, 20000, 'Luis Raga', '2017-08-21 21:39:38'),
(232, 1, 20000, 'Luis Raga', '2017-08-21 21:40:15'),
(233, 1, 20000, 'Luis Raga', '2017-08-21 21:40:15'),
(234, 1, 20000, 'Luis Raga', '2017-08-21 21:40:21'),
(235, 1, 20000, 'Luis Raga', '2017-08-21 21:40:21'),
(236, 1, 50000, 'Luis Raga', '2017-08-21 21:40:35'),
(237, 1, 50000, 'Luis Raga', '2017-08-21 21:40:35'),
(238, 1, 50000, 'Luis Raga', '2017-08-21 21:40:41'),
(239, 1, 50000, 'Luis Raga', '2017-08-21 21:40:41'),
(240, 1, 50000, 'Luis Raga', '2017-08-21 21:40:46'),
(241, 1, 50000, 'Luis Raga', '2017-08-21 21:40:46'),
(242, 1, 50000, 'Luis Raga', '2017-08-21 21:40:52'),
(243, 1, 50000, 'Luis Raga', '2017-08-21 21:40:52'),
(244, 1, 50000, 'Luis Raga', '2017-08-21 21:40:54'),
(245, 1, 50000, 'Luis Raga', '2017-08-21 21:40:54'),
(246, 1, 50000, 'Luis Raga', '2017-08-21 21:40:58'),
(247, 1, 50000, 'Luis Raga', '2017-08-21 21:40:58'),
(250, 2, 20000, 'Luis Raga', '2017-08-21 21:41:22'),
(251, 2, 20000, 'Luis Raga', '2017-08-21 21:41:22'),
(252, 2, 20000, 'Luis Raga', '2017-08-21 21:41:28'),
(253, 2, 20000, 'Luis Raga', '2017-08-21 21:41:28'),
(254, 2, 20000, 'Luis Raga', '2017-08-21 21:41:32'),
(255, 2, 20000, 'Luis Raga', '2017-08-21 21:41:32'),
(256, 2, 20000, 'Luis Raga', '2017-08-21 21:41:36'),
(257, 2, 20000, 'Luis Raga', '2017-08-21 21:41:36'),
(258, 2, 20000, 'Luis Raga', '2017-08-21 21:41:41'),
(259, 2, 20000, 'Luis Raga', '2017-08-21 21:41:41'),
(260, 2, 210000, 'Luis Raga', '2017-08-22 01:47:38'),
(261, 2, 210000, 'Luis Raga', '2017-08-22 01:47:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_funes`
--

CREATE TABLE `productos_funes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos_funes`
--

INSERT INTO `productos_funes` (`id`, `codigo`, `precio`, `descripcion`) VALUES
(1, '101224', 50000, '				        					        					        	Tractor de tuerca semicromadas y llantas duracell				        				        				        '),
(2, '102022342', 20000, 'Mula de caballos, con puestos para dos'),
(3, '102022341', 20000, 'Mula de caballos, con puestos para dos'),
(26, '102020', 20000, 'Mula de caballos, con puestos para dos'),
(29, '126387625', 29000000, 'Moto de agua con resorte acomodable.'),
(30, '126387624', 20000000, 'Moto de agua con resorte acomodable.				        '),
(31, '1263907624', 30000000, 'Moto de agua con resorte acomodable.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remitos_funes`
--

CREATE TABLE `remitos_funes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `fecha_cracion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes_funes`
--
ALTER TABLE `clientes_funes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_presupuesto_funes`
--
ALTER TABLE `detalle_presupuesto_funes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_presupuesto` (`id_presupuesto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `presupuestos_funes`
--
ALTER TABLE `presupuestos_funes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente_id`);

--
-- Indices de la tabla `productos_funes`
--
ALTER TABLE `productos_funes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `remitos_funes`
--
ALTER TABLE `remitos_funes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes_funes`
--
ALTER TABLE `clientes_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detalle_presupuesto_funes`
--
ALTER TABLE `detalle_presupuesto_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `presupuestos_funes`
--
ALTER TABLE `presupuestos_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- AUTO_INCREMENT de la tabla `productos_funes`
--
ALTER TABLE `productos_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `remitos_funes`
--
ALTER TABLE `remitos_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_presupuesto_funes`
--
ALTER TABLE `detalle_presupuesto_funes`
  ADD CONSTRAINT `detalle_presupuesto_funes_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos_funes` (`id`),
  ADD CONSTRAINT `detalle_presupuesto_funes_ibfk_2` FOREIGN KEY (`id_presupuesto`) REFERENCES `presupuestos_funes` (`id`);

--
-- Filtros para la tabla `presupuestos_funes`
--
ALTER TABLE `presupuestos_funes`
  ADD CONSTRAINT `presupuestos_funes_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes_funes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
