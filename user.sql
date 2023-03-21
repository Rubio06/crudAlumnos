-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 23:31:11
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplodatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `comentarios` text NOT NULL,
  `carrera_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `nombre`, `paterno`, `materno`, `numero`, `dni`, `fecha`, `email`, `comentarios`, `carrera_fk`) VALUES
(1, 'Alberto', 'Campos', 'Lozano', 2147483647, 48254414, '2023-03-14', 'Anrl@gmail.com', 'Buenas tardes necesito informacion sobre la carrera', 2),
(2, 'Camila', 'Quispe ', 'Palomino', 947752148, 45874123, '2023-03-07', 'Cami.love@hotmail.com', 'Hola buenas noches deseo informacion acerca de la carrera', 2),
(3, 'Claudio', 'Rojas', 'Paredes', 972584716, 485896325, '2023-03-16', 'Rogel.145@hotmail.com', 'Informacion porfavor', 3),
(4, 'Cristian ', 'Silva', 'Bazan', 947505896, 48521475, '2023-03-14', 'Cristian_44@gmmail.com', 'Buenas noches deseo informacion de la carrera', 4),
(5, 'Karem', 'Yauca', 'Ascona', 947521147, 42147852, '2023-03-14', 'Karem144@hotmail.com', 'Buenas nochez deseo informacion', 2),
(6, 'Carlos', 'Vargas', 'Alonso', 947204863, 48083811, '2023-03-15', 'Rosario.45@hotmail.com', 'Buenas noches deseo información', 2),
(7, 'Ramon', 'Reinaldo', 'Peña', 947204863, 48083811, '2023-03-22', 'Luz14@hotmail.com', 'Buenas tardes', 4),
(8, 'Augusto', 'Robles', 'Santos', 958744789, 43214475, '2023-03-15', 'Augusto24@hotmail.com', 'Buenas tardes deseo informaciòn acerca de la carrera que deseo ', 8),
(9, 'Eimy', 'Soras', 'Osorio', 947586369, 38544744, '2023-03-15', 'SorasEmi25@hotmail.com', 'Buenas tardes deseo informacion de la carrera por favor', 4),
(10, 'Victor', 'Flores', 'Atencio', 947748524, 36987856, '2023-03-08', 'Victor@hotmail.com', 'Buenas tardes deseo informacion', 6),
(11, 'Simon', 'Sisto', 'Argedads', 947522477, 54518515, '2023-03-15', 'Simon14@hotmail.com', 'Buenas tardes deseo informaciòn de la carrera', 5),
(12, 'Amelia', 'Ventura', 'Apaza', 947524147, 32147859, '2023-03-14', 'Enoc.Rubio06@hotmail.com', 'Buenas tardes deseo informacion para sobre la carrera que deseo estudiar', 7),
(13, 'Alfonso', 'Alarcon', 'Tuesta', 996584222, 49247856, '2023-03-09', 'Alfonso@gmail.com', 'Buenas tardes deseo informnación de acerca de una pagina web', 6),
(14, 'Ruth', 'Rubio', 'Solis', 996325486, 44741148, '2023-03-07', 'Ruth.45@outloak.com', 'Buenas tardes deseo informacion importante para mi sistema de informacion', 1),
(16, 'Rodrigo', 'Overlar', 'Valtarsar', 996332587, 47225898, '2023-03-15', 'Rodri@hotmail.com', 'Buenas tardes deseo informacion', 5),
(17, 'Enoc', 'Rubio', 'Paucar', 947204863, 48083811, '2023-03-08', 'Enoc.Rubio06@hotmail.com', 'Buenas tardes deseo informacion de la carrera', 5),
(18, 'Roberto', 'Cardenas', 'Aguirre', 996322585, 41147852, '2023-03-09', 'Robert14@jhotmail.com', 'Buenas tardes deseo informacion de la carrera', 5),
(19, 'Almendra', 'Rubio', 'Paucar', 996558214, 47114785, '2023-03-03', 'Almendra111@hotmail.com', 'Deseo informacion', 8),
(20, 'Roberto', 'Samanta', 'Gonzles', 996582248, 47147852, '2023-03-16', 'Roberto.14@hotmail.com', 'Buenas noches aqui en la sala de espera verificando la informacion de los cabiares.', 7),
(74, 'Enoc', 'Rubio', 'Paucar', 947204863, 48255, '0000-00-00', 'Enoc.Rubio06@hotmail.com', 'sdfsdf', 1),
(75, 'Enoc', 'Rubio', 'Paucar', 947204863, 48255, '0000-00-00', 'Enoc.Rubio06@hotmail.com', 'sdfsdf', 1),
(76, 'Enoc', 'Rubio', 'Paucar', 947204863, 48255, '2023-03-15', 'Enoc.Rubio06@hotmail.com', 'sdfsdf', 1),
(77, 'Enoc', 'Rubio', 'Paucar', 947204863, 48255, '0000-00-00', 'Enoc.Rubio06@hotmail.com', 'sdfsdfdsf', 1),
(78, 'Enoc', 'Rubio', 'Paucar', 947204863, 48255, '0000-00-00', 'Enoc.Rubio06@hotmail.com', 'sdfsdfdsf', 1),
(79, 'Enoc', 'Rubio', 'Paucar', 947204863, 48255, '0000-00-00', 'Enoc.Rubio06@hotmail.com', 'sdfsdfdsf', 1),
(80, 'ee', 'Rubio', 'Paucar', 947204863, 48255, '2023-03-21', 'Enoc.Rubio06@hotmail.com', 'sdfsdf', 1),
(81, 'err', 'Rubio', 'Paucar', 947204863, 48083811, '2023-03-07', 'Enoc.Rubio06@hotmail.com', 'dsfdsf', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `carrera_fk` (`carrera_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`carrera_fk`) REFERENCES `carrera` (`carrera_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
