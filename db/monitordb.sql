-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2021 a las 23:25:52
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `monitordb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `idactor` int(11) NOT NULL,
  `actor_nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`idactor`, `actor_nombre`) VALUES
(1, 'Pertenece al Órgano Legislativo'),
(2, 'Pertenece al Órgano Ejecutivo'),
(3, 'Pertenece al Órgano Judicial'),
(4, 'Pertenece al Órgano Electoral'),
(5, 'Pertenece a un partido político'),
(6, 'Pertenece a la sociedad civil'),
(7, 'Pertenece al Órgano Ejecutivo Departamental'),
(8, 'Pertenece al Órgano Legislativo Departamental'),
(9, 'Pertenece al Órgano Ejecutivo Municipal'),
(10, 'Pertenece al Órgano Legislativo Municipal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_comunicacion`
--

CREATE TABLE `medio_comunicacion` (
  `idmedio` int(11) NOT NULL,
  `nombre_medio` varchar(150) NOT NULL,
  `rel_idtipomedio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medio_comunicacion`
--

INSERT INTO `medio_comunicacion` (`idmedio`, `nombre_medio`, `rel_idtipomedio`) VALUES
(1, 'Red UNITEL', 2),
(2, 'Red UNO', 2),
(3, 'Red ATB', 2),
(4, 'Red TVB', 2),
(5, 'La Razón', 4),
(6, 'Pagina Siete', 4),
(7, 'Panamericana', 3),
(8, 'Fides', 3),
(9, 'ERBOL', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idnoticia` int(11) NOT NULL,
  `fecha` int(12) NOT NULL,
  `titular` varchar(150) NOT NULL,
  `resumen` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `rel_idactor` int(11) NOT NULL,
  `rel_subtema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtema`
--

CREATE TABLE `subtema` (
  `idsubtema` int(11) NOT NULL,
  `nombre_subtema` varchar(150) NOT NULL,
  `es_otro_subtema` tinyint(1) NOT NULL DEFAULT '0',
  `rel_idtema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subtema`
--

INSERT INTO `subtema` (`idsubtema`, `nombre_subtema`, `es_otro_subtema`, `rel_idtema`) VALUES
(1, 'Estatutos de organizaciones políticas – Ley 1096', 0, 1),
(2, 'Competencias del TSE', 0, 2),
(3, 'Tutela de derechos políticos', 0, 2),
(4, 'Juzgamiento de faltas y delitos electorales', 0, 2),
(5, 'Cartografía electoral', 0, 4),
(6, 'Delimitación de circunscripciones', 0, 4),
(7, 'Sanciones por la difusión de encuestas electorales', 0, 5),
(8, 'Requisitos de habilitación de empresas encuestadoras', 0, 5),
(9, 'Fechas de presentación de candidaturas e inhabilitaciones', 0, 6),
(10, 'Procedimientos para el traslado de actas', 0, 7),
(11, 'Procedimientos para el juzgamiento de actas', 0, 7),
(12, 'Plazos para entrega de resultados', 0, 7),
(13, 'Irregularidades del padrón', 0, 8),
(14, 'Plataforma tecnológica del padrón', 0, 8),
(15, 'Inclusión de poblaciones indígenas', 0, 8),
(16, 'Intercambio de información con el SEGIP', 0, 8),
(17, 'Selección y capacitación de notarios', 0, 9),
(18, 'Capacitación de jurados electorales', 0, 9),
(19, 'Estrategia de educación cívica y ciudadana', 0, 9),
(20, 'Papel de los medios de comunicación en campaña electoral', 0, 9),
(21, 'Financiamiento en etapas electorales y no electorales', 0, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `idtema` int(11) NOT NULL,
  `nombre_tema` varchar(150) NOT NULL,
  `es_otro_tema` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`idtema`, `nombre_tema`, `es_otro_tema`) VALUES
(1, 'Presentación de estatutos de organizaciones políticas', 0),
(2, 'Competencias jurisdiccionales del TSE', 0),
(3, 'Redistribución de escaños', 0),
(4, 'Circunscripciones uninominales', 0),
(5, 'Difusión de encuestas', 0),
(6, 'Inhabilitación de candidatos', 0),
(7, 'Cómputo departamental', 0),
(8, 'Padrón electoral', 0),
(9, 'Procedimientos técnico electorales', 0),
(10, 'Financiamiento político y partidario', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_medio`
--

CREATE TABLE `tipo_medio` (
  `idtipomedio` int(11) NOT NULL,
  `nombre_tipo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_medio`
--

INSERT INTO `tipo_medio` (`idtipomedio`, `nombre_tipo`) VALUES
(1, 'Pagina de Red Social'),
(2, 'Canal de Televisión'),
(3, 'Emisora radial'),
(4, 'Prensa Escrita');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`idactor`);

--
-- Indices de la tabla `medio_comunicacion`
--
ALTER TABLE `medio_comunicacion`
  ADD PRIMARY KEY (`idmedio`),
  ADD KEY `fk_relacion_tipo_medio` (`rel_idtipomedio`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idnoticia`),
  ADD KEY `fk_relacion_actor` (`rel_idactor`),
  ADD KEY `fk_relacion_subtema` (`rel_subtema`);

--
-- Indices de la tabla `subtema`
--
ALTER TABLE `subtema`
  ADD PRIMARY KEY (`idsubtema`),
  ADD KEY `fk_relacion_tema` (`rel_idtema`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idtema`);

--
-- Indices de la tabla `tipo_medio`
--
ALTER TABLE `tipo_medio`
  ADD PRIMARY KEY (`idtipomedio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `idactor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `medio_comunicacion`
--
ALTER TABLE `medio_comunicacion`
  MODIFY `idmedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subtema`
--
ALTER TABLE `subtema`
  MODIFY `idsubtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_medio`
--
ALTER TABLE `tipo_medio`
  MODIFY `idtipomedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medio_comunicacion`
--
ALTER TABLE `medio_comunicacion`
  ADD CONSTRAINT `fk_relacion_tipo_medio` FOREIGN KEY (`rel_idtipomedio`) REFERENCES `tipo_medio` (`idtipomedio`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_relacion_actor` FOREIGN KEY (`rel_idactor`) REFERENCES `actor` (`idactor`),
  ADD CONSTRAINT `fk_relacion_subtema` FOREIGN KEY (`rel_subtema`) REFERENCES `subtema` (`idsubtema`);

--
-- Filtros para la tabla `subtema`
--
ALTER TABLE `subtema`
  ADD CONSTRAINT `fk_relacion_tema` FOREIGN KEY (`rel_idtema`) REFERENCES `tema` (`idtema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
