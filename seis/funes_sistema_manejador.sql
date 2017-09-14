-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2017 a las 03:11:25
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

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
  `tipo_cliente_id` int(11) NOT NULL,
  `condicion_iva_id` int(11) NOT NULL,
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
  `usuario_id` int(11) NOT NULL,
  `comentarios` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_cargue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes_funes`
--

INSERT INTO `clientes_funes` (`id`, `razon_social`, `cuit`, `tipo_cliente_id`, `condicion_iva_id`, `domicilio_comercial`, `correo1`, `telefono1`, `contacto1`, `whatsapp`, `contacto2`, `correo2`, `telefono2`, `contacto3`, `correo3`, `telefono3`, `usuario_id`, `comentarios`, `fecha_cargue`, `fecha_modificacion`) VALUES
(1, 'EnRedes', '1077444356', 1, 2, 'Cali', 'whary11@gmail.com', '3127049308', '', '3047868668', 'Omar', 'Oraga@enredes.com', '3127899809', 'David', 'Draga@enredes.com', '3214563478', 1, 'Test de prueba', '2017-09-13 23:47:27', '2017-09-02'),
(2, 'Socios Cup', '1077440677', 2, 1, 'Cali - Colombia', 'whary11@gmail.com', '3127049308', 'Omar Enrique Raag', '3047868668', 'Omar Raga', 'Oraga@enredes.com', '3127899809', 'David Raga', 'Draga@enredes.com', '3214563478', 1, 'Test de prueba', '2017-09-13 23:47:35', '0000-00-00'),
(3, 'Luis Raga', '10993883', 1, 1, 'Kr 90 # 6A - 98 INT 11 ', 'LRAGA@FUNES.COM', '12634872', '', '3127049308', 'nADA', 'LRAGA@FUNES.COM', '12342345', 'Z<ASDASDF', 'LRAGA@FUNES.COM', '1452345234', 2, 'Test de prueba', '2017-09-13 23:47:39', '0000-00-00'),
(7, 'davo', '98790666', 1, 3, 'asdfas', 'gfx@adasda.com', '345345', 'Luis', '234523', 'asdfasd', 'adad@adfas', '345234', 'asdga', 'ydtyrdt@asfas', '23453456', 1, 'Test de prueba', '2017-09-14 00:33:30', '2017-09-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_iva`
--

CREATE TABLE `condicion_iva` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `condicion_iva`
--

INSERT INTO `condicion_iva` (`id`, `nombre`) VALUES
(1, 'RESP. INSC'),
(2, 'CONS. FINAL'),
(3, 'EXENTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_presupuesto_funes`
--

CREATE TABLE `detalle_presupuesto_funes` (
  `id` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `codigo_producto` int(11) NOT NULL,
  `precio` varchar(123) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_presupuesto_funes`
--

INSERT INTO `detalle_presupuesto_funes` (`id`, `id_presupuesto`, `codigo_producto`, `precio`) VALUES
(29, 19, 126387625, '29000000'),
(30, 19, 126387624, '20000000'),
(31, 20, 126387625, '29000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuestos_funes`
--

CREATE TABLE `presupuestos_funes` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `presupuestos_funes`
--

INSERT INTO `presupuestos_funes` (`id`, `cliente_id`, `total`, `usuario_id`, `fecha_creado`) VALUES
(1, 1, 20040000, 1, '2017-09-13 20:18:51'),
(2, 2, 40050000, 1, '2017-09-13 20:19:31'),
(3, 2, 80000000, 1, '2017-09-13 20:24:49'),
(4, 2, 20000000, 1, '2017-09-13 20:26:41'),
(5, 2, 30040000, 1, '2017-09-13 20:27:34'),
(6, 1, 30040000, 1, '2017-09-13 20:29:18'),
(7, 2, 20000, 1, '2017-09-13 20:29:50'),
(8, 2, 29040000, 1, '2017-09-13 20:42:35'),
(9, 1, 78000000, 1, '2017-09-13 20:43:23'),
(10, 3, 78000000, 1, '2017-09-13 20:45:21'),
(11, 2, 78000000, 1, '2017-09-13 20:46:32'),
(12, 3, 117100000, 1, '2017-09-13 20:47:35'),
(13, 3, 29000000, 1, '2017-09-13 20:50:07'),
(14, 2, 20000, 1, '2017-09-13 20:50:40'),
(15, 3, 20000, 1, '2017-09-13 20:51:14'),
(16, 2, 50000, 1, '2017-09-13 20:55:05'),
(17, 2, 88000000, 1, '2017-09-13 20:57:18'),
(18, 3, 50000, 1, '2017-09-13 20:59:11'),
(19, 1, 78000000, 1, '2017-09-13 21:34:14'),
(20, 2, 29000000, 1, '2017-09-13 23:35:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_funes`
--

CREATE TABLE `productos_funes` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(3000) COLLATE utf8_bin NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos_funes`
--

INSERT INTO `productos_funes` (`id`, `codigo`, `precio`, `descripcion`, `usuario_id`) VALUES
(1, 101224, 50000, 'Tractor de tuerca semicromadas y llantas duracell.', 1),
(7, 126387624, 20000000, 'Moto de agua con resorte acomodable.', 1),
(5, 126387625, 29000000, 'Moto de agua con resorte acomodable', 1),
(9, 1263907624, 30000000, 'Moto de agua con resorte acomodable.', 1),
(3, 2147483647, 20000, 'Mula de caballos, con puestos para dos.', 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE `sistema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `logo` varchar(100) COLLATE utf8_bin NOT NULL,
  `nota` varchar(200) COLLATE utf8_bin NOT NULL,
  `representante_legal` varchar(40) COLLATE utf8_bin NOT NULL,
  `cuit` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`id`, `nombre`, `direccion`, `logo`, `nota`, `representante_legal`, `cuit`) VALUES
(1, 'Funes', 'Bogota', 'funes.jpg', 'bien', '', ''),
(2, 'Agrocentro', 'Argentona', 'agrocentro.jpg', 'bien', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id`, `nombre`) VALUES
(1, 'Cliente'),
(2, 'Proveedor'),
(3, 'Cliente-Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_funes`
--

CREATE TABLE `usuarios_funes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `biografia` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `sistema_id` int(11) NOT NULL,
  `cargo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios_funes`
--

INSERT INTO `usuarios_funes` (`id`, `nombre`, `apellidos`, `usuario`, `clave`, `biografia`, `sistema_id`, `cargo`, `correo`, `img`, `codigo`) VALUES
(1, 'Luis Fernando', 'Raga Renteria', 'Lraga', 'ragas', '			  				Apasionado Por el desarrollo web\n			  						  						  			', 1, 'Desarrollador', 'whary11@gmail.com', 'Luis Fernando Raga_1.jpg', 1040),
(2, 'David', 'Raga Renteria', 'admin', 'admin', '  							  							  							  							  							  							  							  							  							  							  				sdasdfsdhggggg\n			  						  						  						  						  						  						  						  						  						  						  			', 2, 'empresario', 'da-vo1996@hotmail.com', 'David_2.jpg', 1041);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes_funes`
--
ALTER TABLE `clientes_funes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cuit` (`cuit`),
  ADD KEY `tipo_cliente_id` (`tipo_cliente_id`),
  ADD KEY `condicion_iva_id` (`condicion_iva_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `condicion_iva`
--
ALTER TABLE `condicion_iva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_presupuesto_funes`
--
ALTER TABLE `detalle_presupuesto_funes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_presupuesto` (`id_presupuesto`),
  ADD KEY `id_producto` (`codigo_producto`);

--
-- Indices de la tabla `presupuestos_funes`
--
ALTER TABLE `presupuestos_funes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `productos_funes`
--
ALTER TABLE `productos_funes`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `remitos_funes`
--
ALTER TABLE `remitos_funes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_funes`
--
ALTER TABLE `usuarios_funes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sistema_id` (`sistema_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes_funes`
--
ALTER TABLE `clientes_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `condicion_iva`
--
ALTER TABLE `condicion_iva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle_presupuesto_funes`
--
ALTER TABLE `detalle_presupuesto_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `presupuestos_funes`
--
ALTER TABLE `presupuestos_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `productos_funes`
--
ALTER TABLE `productos_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `remitos_funes`
--
ALTER TABLE `remitos_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sistema`
--
ALTER TABLE `sistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios_funes`
--
ALTER TABLE `usuarios_funes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes_funes`
--
ALTER TABLE `clientes_funes`
  ADD CONSTRAINT `clientes_funes_ibfk_1` FOREIGN KEY (`condicion_iva_id`) REFERENCES `condicion_iva` (`id`),
  ADD CONSTRAINT `clientes_funes_ibfk_2` FOREIGN KEY (`tipo_cliente_id`) REFERENCES `tipo_cliente` (`id`),
  ADD CONSTRAINT `clientes_funes_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios_funes` (`id`);

--
-- Filtros para la tabla `detalle_presupuesto_funes`
--
ALTER TABLE `detalle_presupuesto_funes`
  ADD CONSTRAINT `detalle_presupuesto_funes_ibfk_2` FOREIGN KEY (`id_presupuesto`) REFERENCES `presupuestos_funes` (`id`),
  ADD CONSTRAINT `detalle_presupuesto_funes_ibfk_3` FOREIGN KEY (`codigo_producto`) REFERENCES `productos_funes` (`codigo`);

--
-- Filtros para la tabla `presupuestos_funes`
--
ALTER TABLE `presupuestos_funes`
  ADD CONSTRAINT `presupuestos_funes_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios_funes` (`id`);

--
-- Filtros para la tabla `productos_funes`
--
ALTER TABLE `productos_funes`
  ADD CONSTRAINT `productos_funes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios_funes` (`id`);

--
-- Filtros para la tabla `usuarios_funes`
--
ALTER TABLE `usuarios_funes`
  ADD CONSTRAINT `usuarios_funes_ibfk_1` FOREIGN KEY (`sistema_id`) REFERENCES `sistema` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
