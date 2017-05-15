-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2017 a las 17:38:01
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
DROP DATABASE IF EXISTS `mirrorwatch`;
CREATE DATABASE IF NOT EXISTS `mirrorwatch` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `mirrorwatch`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admi_usu`
--

CREATE TABLE `admi_usu` (
  `id_admin_uso` int(11) NOT NULL,
  `id_datospersonales2` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cotraseña` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_usuario2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_usu`
--

CREATE TABLE `clientes_usu` (
  `id_cliente_usu` int(11) NOT NULL,
  `id_datospersonales1` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario1` int(11) NOT NULL
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
  `edad` int(2) NOT NULL,
  `Telefono` int(8) NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `presio_producto` int(11) NOT NULL,
  `id_marca_producto1` int(11) NOT NULL,
  `id_tipo_producto1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD UNIQUE KEY `id_admin_uso` (`id_admin_uso`),
  ADD UNIQUE KEY `id_datospersonales2` (`id_datospersonales2`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `fk_tipo_usu_admi_usu` (`id_tipo_usuario2`);

--
-- Indices de la tabla `clientes_usu`
--
ALTER TABLE `clientes_usu`
  ADD UNIQUE KEY `id_cliente_usu` (`id_cliente_usu`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `id_datospersonales1` (`id_datospersonales1`),
  ADD KEY `fk_tipo_usuario_cliente_usu` (`tipo_usuario1`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD UNIQUE KEY `id_comentarios` (`id_comentarios`),
  ADD KEY `fk_clientes_usu_comentarios` (`id_cliente_usu1`),
  ADD KEY `fk_productos_comentarios` (`id_producto1`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD UNIQUE KEY `id_datospersonales` (`id_datospersonales`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `Telefono` (`Telefono`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD UNIQUE KEY `id_detalle_venta` (`id_detalle_venta`),
  ADD KEY `fk_venta_detalle_venta` (`id_venta1`),
  ADD KEY `fk_productos_venta` (`id_producto2`);

--
-- Indices de la tabla `marca_producto`
--
ALTER TABLE `marca_producto`
  ADD UNIQUE KEY `id_marca_producto` (`id_marca_producto`),
  ADD UNIQUE KEY `nombre_marca` (`nombre_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD UNIQUE KEY `id_producto` (`id_producto`),
  ADD KEY `fk_marca_producto_productos` (`id_marca_producto1`),
  ADD KEY `fk_tipo_producto_productos` (`id_tipo_producto1`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD UNIQUE KEY `id_tipo_producto` (`id_tipo_producto`),
  ADD UNIQUE KEY `nombre_tipo` (`nombre_tipo`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD UNIQUE KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD UNIQUE KEY `id_venta` (`id_venta`),
  ADD KEY `fk_cliente_usu_venta` (`id_cliente_uso2`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admi_usu`
--
ALTER TABLE `admi_usu`
  ADD CONSTRAINT `fk_datos_personales_admi_usu` FOREIGN KEY (`id_datospersonales2`) REFERENCES `datos_personales` (`id_datospersonales`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo_usu_admi_usu` FOREIGN KEY (`id_tipo_usuario2`) REFERENCES `tipo_usu` (`id_tipo_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes_usu`
--
ALTER TABLE `clientes_usu`
  ADD CONSTRAINT `fk_datos_personales_clientes_usu` FOREIGN KEY (`id_datospersonales1`) REFERENCES `datos_personales` (`id_datospersonales`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo_usuario_cliente_usu` FOREIGN KEY (`tipo_usuario1`) REFERENCES `tipo_usu` (`id_tipo_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_clientes_usu_comentarios` FOREIGN KEY (`id_cliente_usu1`) REFERENCES `clientes_usu` (`id_cliente_usu`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productos_comentarios` FOREIGN KEY (`id_producto1`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_productos_venta` FOREIGN KEY (`id_producto2`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_venta_detalle_venta` FOREIGN KEY (`id_venta1`) REFERENCES `venta` (`id_venta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_marca_producto_productos` FOREIGN KEY (`id_marca_producto1`) REFERENCES `marca_producto` (`id_marca_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo_producto_productos` FOREIGN KEY (`id_tipo_producto1`) REFERENCES `tipo_producto` (`id_tipo_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_cliente_usu_venta` FOREIGN KEY (`id_cliente_uso2`) REFERENCES `clientes_usu` (`id_cliente_usu`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
