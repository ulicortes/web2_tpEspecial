-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-10-2021 a las 00:29:30
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
(1, 14, 'Bungalow Deluxe', 'Vista a la ciudad, 20m^2, desayuno incluido', 2, 3, 31221, 0),
(7, 16, 'Habitación doble', '1 cama King size, para no fumadores', 1, 2, 9296, 1),
(2, 17, 'Estudio Estándar', '30 m², Balcón, Vistas a un lugar de interés, Aire acondicionado, Baño privado, TV de pantalla plana, Minibar, WiFi gratis', 2, 3, 12338, 0),
(2, 18, 'Estudio Triple Estándar', 'Estudio con balcón, microondas y minibar. Incluye 1 cama doble y 1 sofá cama o 2 camas individuales y 1 sofá cama.', 3, 4, 14507, 1),
(8, 19, 'Habitacion Doble', 'Habitación con aire acondicionado, calefacción, minibar y baño privado.', 1, 2, 9000, 0),
(9, 20, 'Family Suite', 'lorem lorem lorem lorem ', 4, 6, 40000, 0),
(9, 21, 'Suite simple', 'Descripcion ramdom para llenar espacio y que la descripcion sea grande', 1, 2, 20000, 1);

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
(7, 'T. Design Hotel', 'Fuerte Independencia 57, Tandil, 7000, Pcia de Buenos Aires, Argentina', 1234567890, 9, 30),
(8, 'Hotel Libertador', 'Bartolomé Mitre 545, Tandil, Argentina', 2494422127, 8, 30),
(9, 'Hotel Loba', 'Actis 322, Tandil, Buenos Aires, Argentina', 2444598071, 7, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `Nombre_del_usuario` varchar(60) NOT NULL,
  `Apellido_del_usuario` varchar(60) NOT NULL,
  `Email_del_usuario` varchar(200) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `Nombre_del_usuario`, `Apellido_del_usuario`, `Email_del_usuario`, `Usuario`, `Contraseña`) VALUES
(7, 'Ulises', 'Cortes', 'uli@cortes.com', 'uli', '$2y$10$rl9UCkPLjuxjBytLkhXQ5uFkeCAlaZE8Gem0O6jRmmhwgO9e8h3FW'),
(8, 'user', 'test', 'user@test.com', 'user', '$2y$10$Ti5oIEX5P32ap1pmMlHlE.Q8EYn0lTKEgYu6UXiEXQnGxYqMPd8SK'),
(9, 'user', 'test', 'user@test.com', 'user', '$2y$10$1AfyjT4L2EffW48j9pYEWe9hVu.6/PML5gxoTQmdfy59NGgt/bsxe'),
(10, 'Usuario prueba', 'prueba', 'user@prueba.com', 'prueba', '$2y$10$Kr2uINKHoQy1tI.4LBkdi.OZp5enQP5dlvu6InyegK3SdwJx2F.BC'),
(11, 'Lionel', 'Messi', 'leo@messi', 'lio', '$2y$10$EGzYP3idhPAWd5EiSnjx7u5lXw2jyg5WLyQ3wo1Ds/H/M7nfQ0cuC'),
(12, 'nombre', 'apellido', 'nombre@apellido', 'name', '$2y$10$WS3AQh4Hqa9/6LedN0Hq2eMy6AV57yz858J154cI9jft3Rjad3nwG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`ID_HABITACION`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`ID_HOTEL`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `ID_HABITACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `ID_HOTEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
