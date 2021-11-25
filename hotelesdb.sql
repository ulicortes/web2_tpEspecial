-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2021 a las 01:05:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotelesdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `ID_HABITACION` int(11) DEFAULT NULL,
  `comentario` text DEFAULT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usuario`, `ID_HABITACION`, `comentario`, `puntaje`) VALUES
(5, 22, 7, 'dhasjkdasjdhasjkdhasjd adhadhaskjdhasjdahdjka dahsjdhasjkdhajkdhasj dajdhajkdhajsdhajkhdasjk dahkdjasdhjkashdjakhd dhajdkhajkdhaj dajdhasjdhasjkhdkasjdhkj', 4),
(25, 7, 11, 'AAAAAAA', 2),
(32, 7, 7, 'COMENTARIO NRO 7', 5),
(33, 7, 16, 'Excelente habitacion, super recomendada', 5),
(34, 7, 16, 'No me gusto', 1),
(35, 7, 16, 'Maoso maso', 2),
(36, 7, 18, 'Mas o menos, la TV no andaba', 2),
(37, 7, 17, 'Bastante bueno', 3),
(38, 23, 14, 'Gustó · muy bien puesto, habitación amplia y cómoda,cama amplia, decoración moderada, muy bien!\nel personal muy dispuesto, bien el desayuno.\nno pudimos probar el restaurante porque estaba cerrado.\n\nNo gustó · los sommier están algo gastados y hundidos.\ndeberían incluir la cochera en la estadía.', 2),
(40, 22, 17, 'prueba 2', 1),
(68, 7, 18, 'comentario', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `ID_HOTEL` int(11) NOT NULL,
  `ID_HABITACION` int(11) NOT NULL,
  `Nombre_habitacion` varchar(250) NOT NULL,
  `Descripcion` varchar(1000) DEFAULT NULL,
  `Cantidad_camas` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`ID_HOTEL`, `ID_HABITACION`, `Nombre_habitacion`, `Descripcion`, `Cantidad_camas`, `Capacidad`, `Precio`, `Disponible`) VALUES
(3, 7, 'Habitacion doble 1 o 2 camas', 'Descripcion hotel Aires de Tandil habitacion doble', 2, 4, 5800, 1),
(1, 11, ' Bungalow', 'Este bungalow cuenta con baño privado, aire acondicionado, cocina totalmente equipada, comedor, zona de estar, TV por cable y reproductor de DVD.', 1, 2, 10000, 0),
(1, 14, 'Bungalow Deluxe', 'Vista a la ciudad, 20m^2, desayuno incluido', 2, 3, 31221, 1),
(7, 16, 'Habitación doble', '1 cama King size, para no fumadores', 1, 2, 9296, 1),
(2, 17, 'Estudio Estándar', '30 m², Balcón, Vistas a un lugar de interés, Aire acondicionado, Baño privado, TV de pantalla plana, Minibar, WiFi gratis', 2, 3, 12338, 0),
(2, 18, 'Estudio Triple Estándar', 'Estudio con balcón, microondas y minibar. Incluye 1 cama doble y 1 sofá cama o 2 camas individuales y 1 sofá cama.', 3, 4, 14507, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `ID_HOTEL` int(11) NOT NULL,
  `Nombre_hotel` varchar(250) NOT NULL,
  `Direccion` varchar(600) NOT NULL,
  `Telefono` bigint(20) NOT NULL,
  `Puntuacion` double NOT NULL,
  `Cant_habitaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`ID_HOTEL`, `Nombre_hotel`, `Direccion`, `Telefono`, `Puntuacion`, `Cant_habitaciones`) VALUES
(1, 'Apart Piedra Libre', ' Sandino 142, Tandil, Argentina ', 2494647119, 9.3, 50),
(2, 'Mulen Hotel Tandil', 'Avenida Santamarina 380, 7000 Tandil, Argentina', 2494221718, 8.6, 150),
(3, 'Hotel Aires de Tandil', 'Sarmiento 261, Tandil, Provincia de Buenos Aires', 2494220020, 8, 25),
(7, 'T. Design Hotel', 'Fuerte Independencia 57, Tandil, 7000, Pcia de Buenos Aires, Argentina', 1234567890, 9, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombre_del_usuario` varchar(60) NOT NULL,
  `Apellido_del_usuario` varchar(60) NOT NULL,
  `Email_del_usuario` varchar(200) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(150) NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre_del_usuario`, `Apellido_del_usuario`, `Email_del_usuario`, `Usuario`, `Contraseña`, `Admin`) VALUES
(7, 'Ulises', 'Cortes', 'uli@cortes.com', 'uli', '$2y$10$rl9UCkPLjuxjBytLkhXQ5uFkeCAlaZE8Gem0O6jRmmhwgO9e8h3FW', 1),
(22, 'Leo', 'Messi', 'l@m', 'leo', '$2y$10$7wPv0EjbYwKs1ZhcJlCcrumxsZwD.51KnAf7tqj8WloF47E2AaOGm', 0),
(23, 'Usuario', 'Comun', 'user@comun.com', 'userc', '$2y$10$zpQZSKz5.rwypqJ6HzqJJO2LgbXNo2SohKcqXLE9svp.PNJ0iJq3W', 0),
(24, 'aaaaa', 'aaaaaa', 'a@aa.com', 'aaa', '$2y$10$Ejbs.IbrQnES1WFg8mZH..QfgBnsUtGY4/ZgQl0qk5OWn0Hrdzhfq', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `ID_HOTEL` (`ID_HABITACION`),
  ADD KEY `id_Usuario` (`id_usuario`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`ID_HABITACION`),
  ADD KEY `ID_HOTEL` (`ID_HOTEL`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`ID_HOTEL`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `ID_HABITACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `ID_HOTEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`ID_HABITACION`) REFERENCES `habitaciones` (`ID_HABITACION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`ID_HOTEL`) REFERENCES `hoteles` (`ID_HOTEL`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
