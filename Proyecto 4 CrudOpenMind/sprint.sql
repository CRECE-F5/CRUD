-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2019 a las 17:16:02
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sprint`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `fk_pais` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `fk_pais`, `nombre`) VALUES
(2, 1, 'Madrid'),
(3, 2, 'Paris'),
(4, 3, 'Lisboa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coders`
--

CREATE TABLE `coders` (
  `id_coders` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fk_promociones` int(11) NOT NULL,
  `fk_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coders`
--

INSERT INTO `coders` (`id_coders`, `nombre`, `apellido`, `dni`, `fecha_nacimiento`, `fk_promociones`, `fk_pais`) VALUES
(1, 'BELEN', 'RUIZ', '49001331S', '1985-06-17', 5, 1),
(8, 'Fatima', 'rojo', '45574555D', '1995-12-22', 11, 2),
(9, 'Margarita', 'Robles', '12345678P', '1976-02-05', 5, 2),
(16, 'Raquel', 'Perez Delgado', '12345678L', '1998-12-27', 5, 2),
(17, 'Aliona', 'Gallardo', '12345678A', '1966-12-18', 5, 1),
(18, 'gema', 'garcia', '47036989B', '1978-11-10', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

CREATE TABLE `fabrica` (
  `id_fabrica` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fk_ciudad` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fabrica`
--

INSERT INTO `fabrica` (`id_fabrica`, `nombre`, `fk_ciudad`, `estatus`) VALUES
(1, 'factoriaana', 4, 0),
(2, 'telva', 3, 0),
(3, 'factoria f5', 3, 1),
(6, 'TOMILLO', 2, 1),
(8, 'J.P MORGAN', 3, 1),
(11, 'factoria f10', 2, 1),
(16, 'factorina', 4, 1),
(17, 'LaFabrikF5', 2, 1),
(19, 'La ClaseF5', 4, 0),
(23, 'simplon', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre`, `nacionalidad`) VALUES
(1, 'España', 'Española'),
(2, 'Francia', 'Francesa'),
(3, 'portugal', 'Portuguesa'),
(4, 'Argentina', 'Argentino'),
(5, 'Australia', 'Australiano'),
(6, 'Belgica', 'Belga'),
(7, 'Bolivia', 'Boliviano'),
(8, 'Brasil', 'Brasileno'),
(9, 'Camboya', 'Camboyano'),
(10, 'Canada', 'Canadiense'),
(11, 'Chile', 'Chileno'),
(12, 'China', 'Chino'),
(13, 'Colombia', 'Colombiano'),
(14, 'Corea', 'Coreano'),
(15, 'Costa Rica', 'Costarricense'),
(16, 'Cuba', 'Cubano'),
(17, 'Dinamarca', 'Danes'),
(18, 'Ecuador', 'Ecuatoriano'),
(19, 'Egipto', 'Egipcio'),
(20, 'El Salvador', 'Salvadoreno'),
(21, 'Escocia', 'Escoces'),
(22, 'Espana', 'Espanol'),
(23, 'Estados Unidos', 'Estadounidense'),
(24, 'Estonia', 'Estonio'),
(25, 'Etiopia', 'Etiope'),
(26, 'Filipinas', 'Filipino'),
(27, 'Finlandia', 'Finlandes'),
(28, 'Francia', 'Frances'),
(29, 'Gales', 'Gales'),
(30, 'Grecia', 'Griego'),
(31, 'Guatemala', 'Guatemalteco'),
(32, 'Haiti', 'Haitiano'),
(33, 'Holanda', 'Holandes'),
(34, 'Honduras', 'Hondureno'),
(35, 'Indonesia', 'Indones'),
(36, 'Inglaterra', 'Ingles'),
(37, 'Irak', 'Iraqui'),
(38, 'Iran', 'Irani'),
(39, 'Irlanda', 'Irlandes'),
(40, 'Israel', 'Israeli'),
(41, 'Italia', 'Italiano'),
(42, 'Japon', 'Japones'),
(43, 'Jordania', 'Jordano'),
(44, 'Laos', 'Laosiano'),
(45, 'Letonia', 'Leton'),
(46, 'Lituania', 'Letones'),
(47, 'Malasia', 'Malayo'),
(48, 'Marruecos', 'Marroqui'),
(49, 'Mexico', 'Mexicano'),
(50, 'Nicaragua', 'Nicarag?ense'),
(51, 'Noruega', 'Noruego'),
(52, 'Nueva Zelanda', 'Neozelandes'),
(53, 'Nueva Zelandia', 'Neozelandesa'),
(54, 'Panama', 'Panameno'),
(55, 'Paraguay', 'Paraguayo'),
(56, 'Peru', 'Peruano'),
(57, 'Polonia', 'Polaco'),
(58, 'Portugal', 'Portugues'),
(59, 'Puerto Rico', 'Puertorriqueno'),
(60, 'Republica Dominicana', 'Dominicano'),
(61, 'Rumania', 'Rumano'),
(62, 'Rusia', 'Ruso'),
(63, 'Suecia', 'Sueco'),
(64, 'Suiza', 'Suizo'),
(65, 'Tailandia', 'Tailandes'),
(66, 'Taiwan', 'Taiwanes'),
(67, 'Turquia', 'Turco'),
(68, 'Ucrania', 'Ucraniano'),
(69, 'Uruguay', 'Uruguayo'),
(70, 'Venezuela', 'Venezolano'),
(71, 'Vietnam', 'Vietnamita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promociones` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fk_fabrica` int(11) NOT NULL,
  `ESTATUS` int(1) NOT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_promociones`, `nombre`, `fecha_inicio`, `fk_fabrica`, `ESTATUS`, `fecha_fin`) VALUES
(1, 'Primera promo', '2019-10-05', 23, 1, '2020-05-12'),
(4, 'java', '0000-00-00', 1, 0, '0000-00-00'),
(5, 'Big Data', '2019-12-12', 6, 1, '2020-12-12'),
(11, 'factorin', '0000-00-00', 1, 0, NULL),
(17, 'ciberseguridad', '2019-12-10', 6, 1, '2020-09-10'),
(18, 'full Stack', '2019-01-03', 17, 1, '2020-05-12'),
(19, 'javascript', '2020-02-02', 23, 1, '2020-12-12'),
(20, 'sap', '2019-10-02', 6, 1, '2020-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promo_usuario`
--

CREATE TABLE `promo_usuario` (
  `id_promo_usuario` int(11) NOT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_promociones` int(11) DEFAULT NULL,
  `estatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promo_usuario`
--

INSERT INTO `promo_usuario` (`id_promo_usuario`, `fk_usuario`, `fk_promociones`, `estatus`) VALUES
(1, 1, 5, 0),
(2, 4, 5, 0),
(3, 5, 5, 1),
(6, 8, 5, 1),
(7, 9, 1, 1),
(8, 10, 1, 1),
(9, 11, 1, 1),
(10, 12, 1, 1),
(11, 13, 5, 1),
(12, 14, 5, 1),
(13, 15, 5, 1),
(14, 16, 5, NULL),
(15, 17, 17, NULL),
(16, 18, 20, NULL),
(17, 19, 18, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `estatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `password`, `tipo`, `estatus`) VALUES
(1, 'Marta', 'mar12@hotmail.com', '1234', '3', 0),
(4, 'Pepito', 'pepe@gmail.com', '1111', '2', 0),
(5, 'marilyn', 'marilyn@gmail.com', '$2y$10$.HvoscwrIxuE6WVKhgZoZ.QpaYWa0irOu/nP9hB9Xc2Dme9iENBbW', '3', 1),
(8, 'Margarita', 'marga@gmail.com', '$2y$10$UH8a2AP5gLA42ZyG0kifgeJQzQXMSrKfL1MM9t1pt.0en9v54uNHu', '1', 1),
(9, 'Samuel', 'sam@gmail.com', '$2y$10$AMdTqgrtHoje9rwh2P6W4u22Iwi9QQgSKPZFGm2xYNSPpW1rOl0X2', '1', 1),
(10, 'lula', 'lula@gmail.com', '$2y$10$GjHzVxkjtPxRe7THN7SIPe19JZL8R0xZgV5lrIc0IAKyRXxl6pdjG', '2', 1),
(11, 'melanie', 'mel@gmail.com', '$2y$10$CRAwJphLju/0z0Lm/A1/.OIdeFQpGf41u1MLtGB3i0BgEGHxFGeYK', '3', 1),
(12, 'luka', 'luka@gmail.com', '$2y$10$vcX.uaygawyiHhnUqg7EcOXiFhui8gw6W/.dAbPY.M4.38yHXf/IG', '3', 1),
(13, 'dayana', 'dayana.@gmail.com', '$2y$10$VFnL49EnP7T3tZhOJ8eHSeBzVu2lCRQG7nKwROAhPDUCtHCt9ox1C', '3', 1),
(14, 'tatiana', 'tatiana@gmail.com', '$2y$10$9wfPHvmDVFK1YZuVIolhBug.xMyalnZ0HYYETyx9QA6tQGzhNtDhq', '2', 1),
(15, 'Alex', 'alex@gmail.com', '$2y$10$ZJZJcj8tEoCdWmb4jKa/me/pGSaYAC9lPtrZMsp1DLs.8UWnAWMd.', '3', 1),
(16, 'Eduardo', 'edu@gmail.com', '$2y$10$w6UJsBNK445C78gerWskW.oWRZqfvt/Bb0oFMAHDN2msO5YsjvKZG', '3', 1),
(17, 'lucia', 'lucia@gmail.com', '$2y$10$CJWba0OVTVW2q/ByZrSrROcWVf62hr0bpPtr8oqL1hiP2JjZCWypy', '3', 1),
(18, 'gabriela', 'gab@gmail.com', '$2y$10$lAwMJxgqXhuEt61WCmEDq.yegXFtslf3hVaNcr6mKh0Fwjzde3z9G', '3', 1),
(19, 'miguel', 'miguel@gmail.com', '$2y$10$rK3jiSv84ZZFAlpkAi5Nb.cgvkrDWHKOZ0LBusFIyfuHVyrRNzZGe', '3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `fk_pais` (`fk_pais`);

--
-- Indices de la tabla `coders`
--
ALTER TABLE `coders`
  ADD PRIMARY KEY (`id_coders`),
  ADD KEY `fk_promociones` (`fk_promociones`),
  ADD KEY `fk_pais` (`fk_pais`);

--
-- Indices de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD PRIMARY KEY (`id_fabrica`),
  ADD KEY `fk_ciudad` (`fk_ciudad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promociones`),
  ADD KEY `fk_fabrica` (`fk_fabrica`);

--
-- Indices de la tabla `promo_usuario`
--
ALTER TABLE `promo_usuario`
  ADD PRIMARY KEY (`id_promo_usuario`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_promociones` (`fk_promociones`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `coders`
--
ALTER TABLE `coders`
  MODIFY `id_coders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  MODIFY `id_fabrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promociones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `promo_usuario`
--
ALTER TABLE `promo_usuario`
  MODIFY `id_promo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`fk_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `coders`
--
ALTER TABLE `coders`
  ADD CONSTRAINT `coders_ibfk_1` FOREIGN KEY (`fk_promociones`) REFERENCES `promociones` (`id_promociones`),
  ADD CONSTRAINT `coders_ibfk_2` FOREIGN KEY (`fk_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD CONSTRAINT `fabrica_ibfk_1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`fk_fabrica`) REFERENCES `fabrica` (`id_fabrica`);

--
-- Filtros para la tabla `promo_usuario`
--
ALTER TABLE `promo_usuario`
  ADD CONSTRAINT `promo_usuario_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `promo_usuario_ibfk_2` FOREIGN KEY (`fk_promociones`) REFERENCES `promociones` (`id_promociones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
