-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 04:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `ID_HABITACION` int(11) DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `habitaciones`
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
-- Dumping data for table `habitaciones`
--

INSERT INTO `habitaciones` (`ID_HOTEL`, `ID_HABITACION`, `Nombre_habitacion`, `Descripcion`, `Cantidad_camas`, `Capacidad`, `Precio`, `Disponible`) VALUES
(3, 7, 'Habitacion doble 1 o 2 camas', 'Descripcion hotel Aires de Tandil habitacion doble', 2, 4, 5800, 1),
(1, 11, ' Bungalow', 'Este bungalow cuenta con baño privado, aire acondicionado, cocina totalmente equipada, comedor, zona de estar, TV por cable y reproductor de DVD.', 1, 2, 10000, 0),
(1, 14, 'Bungalow Deluxe', 'Vista a la ciudad, 20m^2, desayuno incluido', 2, 3, 31221, 0),
(7, 16, 'Habitación doble', '1 cama King size, para no fumadores', 1, 2, 9296, 1),
(2, 17, 'Estudio Estándar', '30 m², Balcón, Vistas a un lugar de interés, Aire acondicionado, Baño privado, TV de pantalla plana, Minibar, WiFi gratis', 2, 3, 12338, 0),
(2, 18, 'Estudio Triple Estándar', 'Estudio con balcón, microondas y minibar. Incluye 1 cama doble y 1 sofá cama o 2 camas individuales y 1 sofá cama.', 3, 4, 14507, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoteles`
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
-- Dumping data for table `hoteles`
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
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre_del_usuario`, `Apellido_del_usuario`, `Email_del_usuario`, `Usuario`, `Contraseña`, `Admin`) VALUES
(12, 'nombre', 'apellido', 'nombre@apellido', 'name', '$2y$10$WS3AQh4Hqa9/6LedN0Hq2eMy6AV57yz858J154cI9jft3Rjad3nwG', 0),
(13, 'Lucia', 'martinez', 'luciamartinezcuesta@gmail.com', 'lumartinez9', '$2y$10$8s0UQg2np8UdNAblduOOF.NDvhnHZ0eT1xJ7h5jkj/QfTszUqKT6m', 0),
(18, 'lu', 'ss', 'lu@gmaul.com', 'LUMART', '$2y$10$hoVvrgpksEzr0uKGJaUzb.oeSEYMoQGGPoj7Q8cafIVlSIXegdU7S', 1),
(19, 'LU', 'NART', 'L@GMAIL.COM', 'LU', '$2y$10$XG2C9759piPqtvdYdtukz.ucyp2fhL5C3DygupNtH6ABpw5g4otdK', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `ID_HOTEL` (`ID_HABITACION`),
  ADD KEY `id_Usuario` (`id_usuario`);

--
-- Indexes for table `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`ID_HABITACION`),
  ADD KEY `ID_HOTEL` (`ID_HOTEL`);

--
-- Indexes for table `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`ID_HOTEL`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `ID_HABITACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `ID_HOTEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`ID_HABITACION`) REFERENCES `habitaciones` (`ID_HABITACION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`ID_HOTEL`) REFERENCES `hoteles` (`ID_HOTEL`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
