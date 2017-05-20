-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2017 a las 19:17:31
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mirrorwatch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admi_usu`
--

CREATE TABLE `admi_usu` (
  `id_admin_uso` int(11) NOT NULL,
  `id_datospersonales2` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_usuario2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admi_usu`
--

INSERT INTO `admi_usu` (`id_admin_uso`, `id_datospersonales2`, `usuario`, `password`, `id_tipo_usuario2`) VALUES
(1, 15, 'Byron', '$2y$10$qejhI5y.pmjYl2z1PoJ7jexxH3kOv6uODGTHAzk9OvmlKrdZ7e7y6', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_usu`
--

CREATE TABLE `clientes_usu` (
  `id_cliente_usu` int(11) NOT NULL,
  `id_datospersonales1` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentarios` int(11) NOT NULL,
  `id_producto1` int(11) NOT NULL,
  `id_cliente_usu1` int(11) NOT NULL,
  `respuesta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `estado_comentario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_datospersonales` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `Telefono` int(8) NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id_datospersonales`, `nombre`, `apellido`, `fecha_nacimiento`, `Telefono`, `correo`) VALUES
(15, 'Byron Alberto', 'Solorzano Fuentes', '1999-01-04', 76691524, 'basfuentes25@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(11) NOT NULL,
  `id_producto2` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_venta1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_producto`
--

CREATE TABLE `marca_producto` (
  `id_marca_producto` int(11) NOT NULL,
  `nombre_marca` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marca_producto`
--

INSERT INTO `marca_producto` (`id_marca_producto`, `nombre_marca`) VALUES
(1, 'Sony');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `precio_producto` float NOT NULL,
  `existencia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_marca_producto1` int(11) NOT NULL,
  `id_tipo_producto1` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_producto` mediumblob NOT NULL,
  `estado_producto` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipo_producto`, `nombre_tipo`) VALUES
(11, 'Analogo'),
(14, 'Digital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usu`
--

INSERT INTO `tipo_usu` (`id_tipo_usuario`, `nombre_tipo`) VALUES
(2, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_cliente_uso2` int(11) NOT NULL,
  `fecha_venta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admi_usu`
--
ALTER TABLE `admi_usu`
  ADD PRIMARY KEY (`id_admin_uso`),
  ADD UNIQUE KEY `id_admin_uso` (`id_admin_uso`),
  ADD UNIQUE KEY `id_datospersonales2` (`id_datospersonales2`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `fk_tipo_usu_admi_usu` (`id_tipo_usuario2`);

--
-- Indices de la tabla `clientes_usu`
--
ALTER TABLE `clientes_usu`
  ADD PRIMARY KEY (`id_cliente_usu`),
  ADD UNIQUE KEY `id_cliente_usu` (`id_cliente_usu`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `id_datospersonales1` (`id_datospersonales1`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`),
  ADD UNIQUE KEY `id_comentarios` (`id_comentarios`),
  ADD KEY `fk_clientes_usu_comentarios` (`id_cliente_usu1`),
  ADD KEY `fk_productos_comentarios` (`id_producto1`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_datospersonales`),
  ADD UNIQUE KEY `id_datospersonales` (`id_datospersonales`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `Telefono` (`Telefono`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_venta`),
  ADD UNIQUE KEY `id_detalle_venta` (`id_detalle_venta`),
  ADD KEY `fk_venta_detalle_venta` (`id_venta1`),
  ADD KEY `fk_productos_venta` (`id_producto2`);

--
-- Indices de la tabla `marca_producto`
--
ALTER TABLE `marca_producto`
  ADD PRIMARY KEY (`id_marca_producto`),
  ADD UNIQUE KEY `id_marca_producto` (`id_marca_producto`),
  ADD UNIQUE KEY `nombre_marca` (`nombre_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `id_producto` (`id_producto`),
  ADD KEY `fk_marca_producto_productos` (`id_marca_producto1`),
  ADD KEY `fk_tipo_producto_productos` (`id_tipo_producto1`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipo_producto`),
  ADD UNIQUE KEY `id_tipo_producto` (`id_tipo_producto`),
  ADD UNIQUE KEY `nombre_tipo` (`nombre_tipo`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD PRIMARY KEY (`id_tipo_usuario`),
  ADD UNIQUE KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD UNIQUE KEY `id_venta` (`id_venta`),
  ADD KEY `fk_cliente_usu_venta` (`id_cliente_uso2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admi_usu`
--
ALTER TABLE `admi_usu`
  MODIFY `id_admin_uso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes_usu`
--
ALTER TABLE `clientes_usu`
  MODIFY `id_cliente_usu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_datospersonales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca_producto`
--
ALTER TABLE `marca_producto`
  MODIFY `id_marca_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admi_usu`
--
ALTER TABLE `admi_usu`
  ADD CONSTRAINT `fk_admin_usu_datos_personales` FOREIGN KEY (`id_datospersonales2`) REFERENCES `datos_personales` (`id_datospersonales`),
  ADD CONSTRAINT `fk_admin_usu_tipo_usu` FOREIGN KEY (`id_tipo_usuario2`) REFERENCES `tipo_usu` (`id_tipo_usuario`);

--
-- Filtros para la tabla `clientes_usu`
--
ALTER TABLE `clientes_usu`
  ADD CONSTRAINT `fk_clientes_usu_datos_personales` FOREIGN KEY (`id_datospersonales1`) REFERENCES `datos_personales` (`id_datospersonales`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_clientes_usu` FOREIGN KEY (`id_cliente_usu1`) REFERENCES `clientes_usu` (`id_cliente_usu`),
  ADD CONSTRAINT `fk_comentarios_productos` FOREIGN KEY (`id_producto1`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_detalle_venta_productos` FOREIGN KEY (`id_producto2`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `fk_detalle_venta_venta` FOREIGN KEY (`id_venta1`) REFERENCES `venta` (`id_venta`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_marca_producto` FOREIGN KEY (`id_marca_producto1`) REFERENCES `marca_producto` (`id_marca_producto`),
  ADD CONSTRAINT `fk_productos_tipo_producto` FOREIGN KEY (`id_tipo_producto1`) REFERENCES `tipo_producto` (`id_tipo_producto`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_clientes_use` FOREIGN KEY (`id_cliente_uso2`) REFERENCES `clientes_usu` (`id_cliente_usu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
