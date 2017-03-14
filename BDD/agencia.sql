-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2017 a las 16:42:26
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `nif` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photoURL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id`, `nif`, `name`, `lastname`, `genre`, `photoURL`) VALUES
(1, '47807198H', 'Emma', 'Watson', 'female', NULL),
(2, '47807196H', 'Rupert', 'Grint', 'male', NULL),
(3, '47807123A', 'Daniel', 'Radcliffe', 'male', NULL),
(4, '47807123C', 'Jennifer', 'Laurence', 'female', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `nif` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `nif`, `name`, `lastname`) VALUES
(1, '47807197H', 'David', 'Yates'),
(2, '47807123B', 'Sam', 'Raimi'),
(3, '47807197B', 'Francis', 'Laurence');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `directorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id`, `name`, `description`, `type`, `startDate`, `endDate`, `directorId`) VALUES
(1, 'Harry Potter y la piedra filosofal', 'Harry Potter y la piedra filosofal es una película de fantasía y aventuras basada en el libro homónimo de J. K. Rowling, dirigida por el cineasta Chris Columbus y estrenada en 2001', 'ciencia ficcion', '2012-01-01', '2012-01-02', 1),
(2, 'Spiderman', 'Spider-Man (El Hombre Araña en Hispanoamérica) es una película estadounidense de 2002 dirigida por Sam Raimi, escrita por David Koepp, e inspirada en el personaje homónimo creado por Stan Lee y Steve Ditko en 1962. Fue la segunda de la serie de películas ', 'ciencia ficcion', '2012-01-01', '2012-01-02', 2),
(3, 'Los Juegos del Hambre', 'Los juegos del hambre: sinsajo - Parte 1 es el tercer largometraje de la trilogía de Los juegos del hambre, de la escritora estadounidense Suzanne Collins', 'ciencia ficcion', '2014-01-01', '2014-04-08', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `paper` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actorId` int(11) DEFAULT NULL,
  `filmId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paper`
--

INSERT INTO `paper` (`id`, `paper`, `actorId`, `filmId`) VALUES
(1, 'Hermione Grangere', 1, 1),
(2, 'Ronald Weasley', 2, 1),
(3, 'Katniss Everdreen', 4, 3),
(4, 'Katniss Everdreen', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'barchar', 'iOgyhdY1gJJPj7y7mMN8obgqMQZH2fLDuQuXfqZesC1Iqxo6iHxRuAA9m8E1ZUz76OIiPGTann7uJ3BNhPDoEA==', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_447556F9ADE62BBB` (`nif`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1E90D3F0ADE62BBB` (`nif`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8244BE2221DB3FB1` (`directorId`);

--
-- Indices de la tabla `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_57698A6A6DCBA9B2` (`actorId`),
  ADD KEY `IDX_57698A6AA1D6191D` (`filmId`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `obra`
--
ALTER TABLE `obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `FK_8244BE2221DB3FB1` FOREIGN KEY (`directorId`) REFERENCES `director` (`id`);

--
-- Filtros para la tabla `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `FK_57698A6A6DCBA9B2` FOREIGN KEY (`actorId`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `FK_57698A6AA1D6191D` FOREIGN KEY (`filmId`) REFERENCES `obra` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
