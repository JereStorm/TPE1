-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2021 a las 02:28:36
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comen` int(11) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `puntaje` tinyint(5) NOT NULL,
  `id_user_fk` int(11) NOT NULL,
  `id_prod_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comen`, `mensaje`, `fecha`, `puntaje`, `id_user_fk`, `id_prod_fk`) VALUES
(3, 'esdfefaa', '2021-11-13', 3, 10, 8),
(4, 'sfsefsfs f sf sf sdf sdf s', '2021-11-10', 5, 10, 20),
(5, 's f ad v dfvdafvadf df dog a', '2021-11-12', 2, 6, 8),
(6, 'buena pinta tiene el producto aunque bátanme malo', '2020-11-04', 2, 11, 8),
(7, 'buena pinta tiene el producto aunque bátanme malo', '2020-11-04', 2, 11, 8),
(8, 'buena pinta tiene el producto aunque bátanme malo', '2020-11-04', 2, 11, 8),
(9, 'buena pinta tiene el producto aunque bátanme malo', '2020-11-04', 2, 11, 8),
(10, 'buena pinta tiene el producto aunque bátanme malo', '2020-11-04', 2, 11, 8),
(11, 'dacascsa', '2021-11-16', 2, 1, 22),
(12, 'asd ascasc ', '2021-11-16', 4, 1, 22),
(14, 'ss 32 4134 2314 14 ', '2021-11-16', 2, 1, 22),
(15, 'ss 32 4134 2314 14 ', '2021-11-16', 1, 1, 22),
(16, '1234', '2021-11-16', 4, 1, 22),
(17, '1234', '2021-11-16', 5, 1, 22),
(21, 'Excelente producto', '2021-11-21', 5, 1, 12),
(25, 'esta muy bien', '2021-11-21', 3, 1, 13),
(26, 'Exelente producto!!!', '2021-11-21', 3, 1, 13),
(57, 'Esta muy bien', '2021-11-21', 4, 11, 12),
(60, 'Esto esta muy bien', '2021-11-23', 3, 1, 22),
(61, 'sdfsdf', '2021-11-23', 5, 1, 22),
(62, 'sdfgvsdf', '2021-11-23', 5, 1, 22),
(63, 'Gran Producto ideal para nutrición sana', '2021-11-23', 5, 1, 23),
(64, 'malísimo caro y feo', '2021-11-23', 1, 1, 23),
(65, 'Esta bien', '2021-11-23', 3, 1, 23),
(66, 'Por el precio, excelente calidad', '2021-11-23', 4, 1, 23),
(68, 'Los mejores del condado!!!', '2021-11-23', 5, 1, 19),
(69, 'Excelente calidad buen precio, floja atención al cliente', '2021-11-23', 3, 1, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_prod_fk` int(11) NOT NULL,
  `precio_kg` float NOT NULL,
  `img_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nombre`, `tipo_prod_fk`, `precio_kg`, `img_path`) VALUES
(7, 'Pepinillos en Conserva', 1, 570, 'images/no_image_uploaded.jpeg'),
(8, 'Miel de Campo Premium 500g', 1, 900, 'images/upload/619ed24eb59f05.92096852.jpg'),
(12, 'Girgola Parda', 2, 1000, 'images/upload/619ed5e17fe675.32014447.jpg'),
(13, 'Girgola Seca 250gr', 3, 400, 'images/no_image_uploaded.jpeg'),
(14, 'Shitake disecado 200gr', 3, 650, 'images/upload/619ed685135815.42403226.png'),
(15, 'Reishi 1kg', 2, 2800, 'images/upload/619ed61c2b5027.83563828.jpg'),
(17, 'Hongo Ganoderma 1kg', 2, 1800, 'images/upload/619edbfb183354.16315849.jpg'),
(19, 'Huevos de Campo x12', 2, 180, 'images/upload/619edaed7fb4f5.30872044.jpeg'),
(20, 'Semillas de Girgola Rosada', 5, 800, 'images/no_image_uploaded.jpeg'),
(21, 'Semillas Reishi 1kg', 5, 1200, 'images/no_image_uploaded.jpeg'),
(22, 'Pan Integral lactal 1kg', 2, 350, 'images/no_image_uploaded.jpeg'),
(23, 'Turron Granola 250gr', 3, 300, 'images/no_image_uploaded.jpeg'),
(24, 'Jugo Frutal xLt', 2, 230, 'images/no_image_uploaded.jpeg'),
(29, 'Salsa Picante Perro Loco 200cc', 1, 750, 'images/upload/619ed2a99c7f75.21390734.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `producto_fk` int(11) NOT NULL,
  `cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `producto_fk`, `cantidad`) VALUES
(21, 15, 47),
(22, 17, 25),
(23, 7, 0),
(25, 14, 36),
(26, 19, 27),
(27, 8, 30),
(28, 20, 0),
(29, 21, 50),
(31, 12, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_prod` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipo_prod`, `tipo`, `descripcion`) VALUES
(1, 'Envasados', 'Phasellus quis sollicitudin quam, a semper arcu. Nullam imperdiet enim turpis, ac lacinia diam placerat at. Nam at commodo felis.'),
(2, 'Frescos', 'Nam sit amet enim justo. Maecenas justo odio, dignissim sit amet est non, ultrices sagittis nisi. Mauris dapibus sit amet sem ut hendrerit.'),
(3, 'Secos', 'Vivamus in sapien ut turpis dignissim consectetur eget vitae lectus. Etiam blandit non est vitae fermentum. Proin ac neque id massa cursus gravida. Nam ac pharetra sem.'),
(5, 'Esporas', 'Esporas de variedades de hongos para cultivar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `email`, `password`, `rol`) VALUES
(1, 'admin@admin.com', '$2y$10$WvGcMVfIIGXfsccl5rlgd...DvDLrbN8RjyNCF9qypLoLLtdbRLBu', '1'),
(3, 'user@user.com', '$2y$10$TaHvG9mvKbnQmlhlOTsFde4HA2yv1VyHlLmjTHX4z8WETH39SBqga', '3'),
(6, 'client@client.com', '$2y$10$ngt3CvOEf29IeMleiti5JubZlxscuQwk6KZSsCePlrcGrqZwIXO/m', '5'),
(9, 'client@demo.com', '$2y$10$Zs637ip9Jj6AkGlgDpp0nO6hfO01EMFPCjgVI2B4YLL7hGae4/gBS', '5'),
(10, 'admin@demo.com', '$2y$10$/BIAYMGWBl7xLzwtJb5mJebn5KoNqjXXqNeyFAEZ.q75VjBaMNxfi', '1'),
(11, 'user@demo.com', '$2y$10$DIrZK/r9eltZEidmFWHBl.PQzbNS5lO5pVSEunq0uI487UHFemJuG', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comen`),
  ADD KEY `id_user_fk` (`id_user_fk`),
  ADD KEY `id_prod_fk` (`id_prod_fk`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `tipo_prod_fk` (`tipo_prod_fk`),
  ADD KEY `id_img_fk` (`img_path`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `producto_fk` (`producto_fk`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipo_prod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_user_fk`) REFERENCES `usuario` (`id_user`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_prod_fk`) REFERENCES `producto` (`id_prod`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`tipo_prod_fk`) REFERENCES `tipo_producto` (`id_tipo_prod`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`producto_fk`) REFERENCES `producto` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
