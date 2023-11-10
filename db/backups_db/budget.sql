-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 04:41:35
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
-- Estructura de tabla para la tabla `budget`
--

CREATE TABLE `budget` (
  `id_budget` int(25) NOT NULL,
  `value` int(255) NOT NULL,
  `date_budget` date NOT NULL,
  `id_time_work` int(25) NOT NULL,
  `id_project` int(25) NOT NULL,
  `id_service` int(25) NOT NULL,
  `id_expense` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id_budget`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_expense` (`id_expense`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `budget`
--
ALTER TABLE `budget`
  MODIFY `id_budget` int(25) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `budget_ibfk_2` FOREIGN KEY (`id_expense`) REFERENCES `expense` (`id_expense`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
