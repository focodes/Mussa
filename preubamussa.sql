-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 01:51:37
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
-- Base de datos: `preubamussa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feria`
--

CREATE TABLE `feria` (
  `id` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `numero_de_participantes` int(11) NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proyecto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_users`
--

CREATE TABLE `m_users` (
  `Id_user` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `Imagen` varchar(200) NOT NULL DEFAULT '''/img/avatar.png''',
  `Password` varchar(205) NOT NULL,
  `Level` int(10) NOT NULL DEFAULT 0,
  `Fechasitema` timestamp NOT NULL DEFAULT current_timestamp(),
  `salto_password` char(128) NOT NULL,
  `acepta_terminos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `m_users`
--

INSERT INTO `m_users` (`Id_user`, `Username`, `Nombre`, `Apellidos`, `email`, `Imagen`, `Password`, `Level`, `Fechasitema`, `salto_password`, `acepta_terminos`) VALUES
(9, 'demotron8', 'demotron8', 'estevez', 'ccc@gmail.com', '../../img/user/demotron8_2023-09-17_thump.jpg', '57ac33467769394e98a719b12873bfbd168f820cfb52b9b7f974a6a68d6a62e60d53de3a095d17f1684b225712e19588f75f1055efe63c871cafc48f6e7367e2', 0, '2023-09-17 20:55:28', '720c88f1572c06234aca7e6969afe6fe959fe827b15673018ce15e26d69e0fb158d76b5791acb7a5cd2a43013bae456defcd672f1a302d715d9d719a496e2ca0', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponente`
--

CREATE TABLE `ponente` (
  `id` int(11) NOT NULL,
  `id_Institucion` int(11) NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eje_tematico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_de_participantes` int(11) NOT NULL,
  `proyecto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poster`
--

CREATE TABLE `poster` (
  `id` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `numero_de_participantes` int(11) NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyecto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `robotica`
--

CREATE TABLE `robotica` (
  `id` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_de_participantes` int(11) NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `feria`
--
ALTER TABLE `feria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`Id_user`);

--
-- Indices de la tabla `ponente`
--
ALTER TABLE `ponente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Institucion` (`id_Institucion`);

--
-- Indices de la tabla `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `robotica`
--
ALTER TABLE `robotica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `feria`
--
ALTER TABLE `feria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_users`
--
ALTER TABLE `m_users`
  MODIFY `Id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ponente`
--
ALTER TABLE `ponente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `robotica`
--
ALTER TABLE `robotica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `feria`
--
ALTER TABLE `feria`
  ADD CONSTRAINT `feria_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`);

--
-- Filtros para la tabla `ponente`
--
ALTER TABLE `ponente`
  ADD CONSTRAINT `ponente_ibfk_1` FOREIGN KEY (`id_Institucion`) REFERENCES `institucion` (`id`);

--
-- Filtros para la tabla `poster`
--
ALTER TABLE `poster`
  ADD CONSTRAINT `poster_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`);

--
-- Filtros para la tabla `robotica`
--
ALTER TABLE `robotica`
  ADD CONSTRAINT `robotica_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
