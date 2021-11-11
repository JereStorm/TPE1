-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 22:47:43
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe_jt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comen` int(11) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `puntaje` tinyint(5) NOT NULL,
  `id_user_fk` int(11) NOT NULL,
  `id_prod_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comen`, `mensaje`, `fecha`, `puntaje`, `id_user_fk`, `id_prod_fk`) VALUES
(1, 'que onda gato todo piola vitehhh re piola el reishkii', '0000-00-00', 5, 24, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_prod_fk` int(11) NOT NULL,
  `precio_kg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nombre`, `tipo_prod_fk`, `precio_kg`) VALUES
(8, 'Miel de Campo Premium 500g', 1, 890),
(13, 'Girgola Seca 250gr', 3, 400),
(14, 'Shitake disecado 200gr', 3, 380),
(15, 'Reishi 1kg', 2, 2500),
(17, 'Hongo Ganoderma', 2, 780),
(19, 'Huevos de Campo (docena)', 2, 180),
(20, 'Semillas de Girgola Rosada', 5, 800),
(21, 'Semillas Reishi', 5, 1200);

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
(22, 17, 41),
(25, 14, 10),
(26, 19, 30),
(27, 8, 0);

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
(5, 'Esporas', 'Esporas de variedades de hongos para cultivar'),
(7, 'LO QUE SEA', '...');

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
(23, 'admin@admin.com', '$2y$10$ZgNNyiq1okRo/18lJw3gieErA9/Y3WF/WULM7C6nGfjAj64Zrm5ui', '1'),
(24, 'jerestorm@gmail.com', '$2y$10$ZgNNyiq1okRo/18lJw3gieErA9/Y3WF/WULM7C6nGfjAj64Zrm5ui', '3'),
(25, 'sofibeludominguez@hotmail.com', '$2y$10$sXA6bghqkWcuoTuI2AgaRuCgiSunyCWy7sJpXvu.Qpal/s0O7Rmfe', '5');

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
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `tipo_prod_fk` (`tipo_prod_fk`);

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
  MODIFY `id_comen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_user_fk`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_prod_fk`) REFERENCES `producto` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

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
