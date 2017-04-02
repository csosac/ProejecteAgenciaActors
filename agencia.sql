-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 02-04-2017 a les 07:04:32
-- Versió del servidor: 10.1.19-MariaDB
-- Versió de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `actor`
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
-- Bolcant dades de la taula `actor`
--

INSERT INTO `actor` (`id`, `nif`, `name`, `lastname`, `genre`, `photoURL`) VALUES
(1, '12345678Z', 'Nieves', 'Bravo', 'female', 'view/images/actors/nieves_bravo.png'),
(2, '47807196H', 'Alfredo', 'Landa', 'male', 'view/images/actors/alfredo_landa.png'),
(3, '47807123A', 'Antonio', 'Banderas', 'male', 'view/images/actors/antonio_banderas.png'),
(6, '39893660E', 'Amparo', 'Baro', 'female', 'view/images/actors/amparo_baro.png'),
(7, '12345876M', 'Ana', 'Duato', 'female', 'view/images/actors/ana_duato.png'),
(8, '12345878F', 'Antonio', 'Resines', 'male', 'view/images/actors/antonio_resines.png'),
(12, '12365874Q', 'Marivel', 'Verdu', 'female', 'view/images/actors/marivel_verdu.png'),
(13, '12358746H', 'Carmen', 'Machi', 'female', 'view/images/actors/carmen_machi.png'),
(14, '12354746C', 'Belen', 'Rueda', 'female', 'view/images/actors/belen_rueda.png');

-- --------------------------------------------------------

--
-- Estructura de la taula `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `nif` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photoUrlDirector` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `director`
--

INSERT INTO `director` (`id`, `nif`, `name`, `lastname`, `photoUrlDirector`) VALUES
(1, '47807197H', 'David', 'Yates', 'view/images/directors/david_yates.png'),
(4, '15935789D', 'Joan LluÃ­s ', 'Bozzo', 'view/images/directors/j_l_bozzo.png'),
(5, '15935780T', 'Mario', 'Gas', 'view/images/directors/mario_gas.png'),
(9, '15935000W', 'Magda', 'Puyo', 'view/images/directors/magda_puyo.png'),
(10, '15930000Q', 'Quim', 'Masferrer', 'view/images/directors/quim_masferrer.png'),
(11, '15474236C', 'David', 'Cortés', 'view/images/directors/rodrigo_cortes.png');

-- --------------------------------------------------------

--
-- Estructura de la taula `obra`
--

CREATE TABLE `obra` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `directorId` int(11) DEFAULT NULL,
  `photoUrlObra` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `obra`
--

INSERT INTO `obra` (`id`, `name`, `description`, `type`, `startDate`, `endDate`, `directorId`, `photoUrlObra`) VALUES
(1, 'Cop de Rock', 'COP DE ROCK és un missatge d’amor, d’admiració, i d’agraïment a les bandes mítiques que van fer possible el miracle del ROCK CATALÀ a principis de la dècada dels 90 del segle XX i fins als nostres dies. També és un missatge d’estímul i record a un públic ', 'Musical', '2017-05-14', '2018-01-02', 1, 'view/images/obres/copRock.png'),
(2, 'Fuenteovejuna', 'El nucli de la història gira al voltant de la lluita solidària d''un poble contra la tirania d''un cacic, símbol del despotisme i dels privilegis inamovibles de les classes dominants. "La llum dels quadres de Velázquez, el teatre del Segle d''Or, l''enorme ri', 'Tragèdia', '2012-01-01', '2012-01-02', NULL, 'view/images/obres/fuenteovejuna.png'),
(7, 'L''auca del senyor esteve', 'Rusinyol narra la vida del senyor Esteve, un home gris, prudent i prÃ ctic, amo dâ€™una botiga, La Puntual, que el seu avi havia fundat el 1830. Els dies monÃ²tons i la vida assenyada del protagonista dedicats a afermar i eixamplar el negoci, es veuran tr', 'Tragedia', '2017-04-02', '2017-05-06', 4, 'view/images/obres/auca.png'),
(8, 'El café de la Marina', 'Caterina, ha estat abandonada pel seu amant i ha hagut d''avortar. La seva tristor es posa de manifest quan la seva germana Rosa es casa amb Rafel, un jove pescador, mentre ella ha de suportar els rumors i xiuxiueigs que es produeixen al cafè on treballa, ', 'Tragèdia', '2017-04-05', '2017-05-06', 9, 'view/images/obres/cafe_marina.png');

-- --------------------------------------------------------

--
-- Estructura de la taula `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `paper` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actorId` int(11) DEFAULT NULL,
  `obraId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `paper`
--

INSERT INTO `paper` (`id`, `paper`, `actorId`, `obraId`) VALUES
(1, 'Hermione Grangere', 1, 1),
(2, 'Ronald Weasley', 2, 1),
(3, 'Katniss Everdreen', NULL, NULL),
(5, 'Laurencia', 12, NULL),
(6, 'Jacinta', 14, NULL),
(7, 'Comendador1', 8, NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', NULL);

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_447556F9ADE62BBB` (`nif`);

--
-- Index de la taula `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1E90D3F0ADE62BBB` (`nif`);

--
-- Index de la taula `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8244BE2221DB3FB1` (`directorId`);

--
-- Index de la taula `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_57698A6A6DCBA9B2` (`actorId`),
  ADD KEY `IDX_57698A6AA1D6191D` (`obraId`);

--
-- Index de la taula `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT per la taula `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT per la taula `obra`
--
ALTER TABLE `obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT per la taula `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT per la taula `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `FK_8244BE2221DB3FB1` FOREIGN KEY (`directorId`) REFERENCES `director` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restriccions per la taula `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `FK_57698A6A6DCBA9B2` FOREIGN KEY (`actorId`) REFERENCES `actor` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_57698A6AA1D6191D` FOREIGN KEY (`obraId`) REFERENCES `obra` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
