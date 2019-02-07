-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2019 a las 00:57:25
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id_almacen` int(11) NOT NULL,
  `id_articulo` int(11) DEFAULT NULL,
  `f_alta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id_almacen`, `id_articulo`, `f_alta`) VALUES
(1, 1, '2019-02-07'),
(2, 2, '2019-02-14'),
(3, 3, '2019-02-12'),
(4, 4, '2019-02-13'),
(5, 5, '2019-02-24'),
(6, 6, '2019-02-20'),
(7, 7, '2019-02-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_cattipo` int(11) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `precio_unico` float DEFAULT NULL,
  `precio_mayoreo` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nombre`, `id_categoria`, `id_cattipo`, `codigo`, `precio_unico`, `precio_mayoreo`, `cantidad`) VALUES
(1, 'clips', 6, 1, 1, 0.5, 25, 100),
(2, 'hojas', 2, 1, 2, 1, 100, 50),
(3, 'block de pago', 2, 1, 3, 25, 20, 12),
(4, 'boligrafo', 1, 1, 4, 7, 5.5, 100),
(5, 'cafe', 3, 2, 5, 50, 25, 10),
(6, 'aromatizante', 5, 3, 6, 24.5, 20, 10),
(7, 'folders', 2, 1, 8, 2, 17, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `tipo`) VALUES
(1, 'pieza'),
(2, 'bolsa'),
(3, 'paquete'),
(4, 'cubeta'),
(5, 'caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_tipo`
--

CREATE TABLE `categoria_tipo` (
  `id_cattipo` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_tipo`
--

INSERT INTO `categoria_tipo` (`id_cattipo`, `tipo`) VALUES
(1, 'papeleria'),
(2, 'cafeteria'),
(3, 'limpieza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rfc`
--

CREATE TABLE `rfc` (
  `id_rfc` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rfc`
--

INSERT INTO `rfc` (`id_rfc`, `nombre`) VALUES
(1, 'sfs orange'),
(2, 'procuradores prestadores de servicios'),
(3, 'pop box'),
(4, 'finpop'),
(5, 'ceps');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `id_rfc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `nombre`, `lugar`, `id_rfc`) VALUES
(1, 'satelite', 'ciudad de mexico', 1),
(2, 'ags prex', 'aguascalientes', 2),
(3, 'opciones economicas', 'michoacan', 3),
(4, 'prospeccion global', 'plueba', 4),
(5, 'gdl services', 'guadalajara', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `id_puesto` int(11) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `contraseña2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombre`, `apellidos`, `correo`, `id_puesto`, `contraseña`, `id_sucursal`, `contraseña2`) VALUES
(1, 'lorena', 'vilchis', 'lore@gmail.com', 1, 'lore123', 1, 'lore123'),
(2, 'luis ', 'hernandez', 'luis@gmail.com', 2, 'luis789', 2, 'luis789'),
(3, 'fernando', 'lovera', 'lovera@gmail.com', 1, 'love456', 3, 'love456'),
(4, 'miller', 'perafan', 'miller@gmail.com', 2, 'miller456', 4, 'miller456'),
(5, 'armando', 'nieto', 'nieto@gmaiol.com', 2, 'nieto789', 1, 'nieto789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id_almacen`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `categoria_tipo`
--
ALTER TABLE `categoria_tipo`
  ADD PRIMARY KEY (`id_cattipo`);

--
-- Indices de la tabla `rfc`
--
ALTER TABLE `rfc`
  ADD PRIMARY KEY (`id_rfc`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id_almacen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria_tipo`
--
ALTER TABLE `categoria_tipo`
  MODIFY `id_cattipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rfc`
--
ALTER TABLE `rfc`
  MODIFY `id_rfc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
