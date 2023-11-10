-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 04:37:14
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_user`
--

CREATE TABLE `category_user` (
  `id_category` int(25) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id_client` int(25) NOT NULL,
  `name` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expense`
--

CREATE TABLE `expense` (
  `id_expense` int(25) NOT NULL,
  `value` int(255) NOT NULL,
  `date_expense` date NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_project` int(25) NOT NULL,
  `id_service` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `income`
--

CREATE TABLE `income` (
  `id_income` int(25) NOT NULL,
  `value` int(255) NOT NULL,
  `date_income` date NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_project` int(25) NOT NULL,
  `id_service` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(25) NOT NULL,
  `value` int(255) NOT NULL,
  `date_invoice` date NOT NULL,
  `id_expense` int(25) NOT NULL,
  `id_project` int(25) NOT NULL,
  `id_service` int(25) NOT NULL,
  `id_budgest` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyect`
--

CREATE TABLE `proyect` (
  `id_project` int(25) NOT NULL,
  `month` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_client` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `id_service` int(25) NOT NULL,
  `month` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_client` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `time_work`
--

CREATE TABLE `time_work` (
  `id_time_work` int(25) NOT NULL,
  `time` time NOT NULL,
  `date_time_work` date NOT NULL,
  `id_service` int(25) NOT NULL,
  `id_project` int(25) NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL,
  `names` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL
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
-- Indices de la tabla `category_user`
--
ALTER TABLE `category_user`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `id_person` (`id_person`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id_expense`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id_income`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_expense` (`id_expense`);

--
-- Indices de la tabla `proyect`
--
ALTER TABLE `proyect`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `time_work`
--
ALTER TABLE `time_work`
  ADD PRIMARY KEY (`id_time_work`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_person`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `budget`
--
ALTER TABLE `budget`
  MODIFY `id_budget` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category_user`
--
ALTER TABLE `category_user`
  MODIFY `id_category` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expense`
--
ALTER TABLE `expense`
  MODIFY `id_expense` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `income`
--
ALTER TABLE `income`
  MODIFY `id_income` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyect`
--
ALTER TABLE `proyect`
  MODIFY `id_project` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `time_work`
--
ALTER TABLE `time_work`
  MODIFY `id_time_work` int(25) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `budget_ibfk_2` FOREIGN KEY (`id_expense`) REFERENCES `expense` (`id_expense`);

--
-- Filtros para la tabla `category_user`
--
ALTER TABLE `category_user`
  ADD CONSTRAINT `category_user_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `category_user_ibfk_2` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`);

--
-- Filtros para la tabla `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `expense_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);

--
-- Filtros para la tabla `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `income_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);

--
-- Filtros para la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_expense`) REFERENCES `expense` (`id_expense`);

--
-- Filtros para la tabla `proyect`
--
ALTER TABLE `proyect`
  ADD CONSTRAINT `proyect_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `proyect_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);

--
-- Filtros para la tabla `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);

--
-- Filtros para la tabla `time_work`
--
ALTER TABLE `time_work`
  ADD CONSTRAINT `time_work_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `users` (`id_person`),
  ADD CONSTRAINT `time_work_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
