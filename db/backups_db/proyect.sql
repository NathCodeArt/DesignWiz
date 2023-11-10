-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 05:27:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `design-wiz_2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyect`
--

CREATE TABLE `proyect` (
  `id_project` int(25) NOT NULL,
  `month` date NOT NULL,
  `status_proyect` tinyint(1) NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_client` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyect`
--
ALTER TABLE `proyect`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyect`
--
ALTER TABLE `proyect`
  MODIFY `id_project` int(25) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyect`
--
ALTER TABLE `proyect`
  ADD CONSTRAINT `proyect_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `proyect_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
