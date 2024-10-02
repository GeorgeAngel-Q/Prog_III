-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2024 a las 22:52:30
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
-- Base de datos: `gestion_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesmenu`
--

CREATE TABLE `opcionesmenu` (
  `IdOpcionMenu` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `UrlMenu` varchar(50) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `IdPadre` int(11) DEFAULT NULL,
  `EstadoRegistro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesmenu_perfiles`
--

CREATE TABLE `opcionesmenu_perfiles` (
  `IdOpcionMenu` int(11) NOT NULL,
  `IdPerfil` int(11) NOT NULL,
  `Orden` tinyint(4) NOT NULL,
  `EstadoRegistro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `IdPerfil` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(500) DEFAULT NULL,
  `EstadoRegistro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`IdPerfil`, `Nombre`, `Descripcion`, `EstadoRegistro`) VALUES
(1, 'Administrador', 'Perfil encargado de la gestion total del acceso y mantenimiento del aplicativo', b'1'),
(2, 'Docente', 'Perfil encargado de la gestión de las notas y asistencias del alumno', b'1'),
(3, 'Estudiante', 'Perfil solo para observar', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `DNI` varchar(15) NOT NULL,
  `Nombres` varchar(40) NOT NULL,
  `ApellidoPaterno` varchar(40) NOT NULL,
  `ApellidoMaterno` varchar(40) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  `CorreoElectronico` varchar(40) NOT NULL,
  `Clave` varchar(40) NOT NULL,
  `UsuarioCreacion` int(11) DEFAULT NULL,
  `FechaCreacion` datetime NOT NULL,
  `UsuarioModificacion` int(11) DEFAULT NULL,
  `FechaModificacion` datetime DEFAULT NULL,
  `EstadoRegistro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `DNI`, `Nombres`, `ApellidoPaterno`, `ApellidoMaterno`, `Celular`, `CorreoElectronico`, `Clave`, `UsuarioCreacion`, `FechaCreacion`, `UsuarioModificacion`, `FechaModificacion`, `EstadoRegistro`) VALUES
(1, '', 'JUAN CARLOS', 'GARCIA', 'PEREZ', '968522304', 'jcar_garp@gmail.com', '9$7pQ*34', 1, '2024-09-26 18:25:14', 0, '2024-09-26 18:25:14', b'1'),
(2, '', 'GEORGE ANGEL', 'QUISPE', 'MESCUA', '978208254', 'quispemescuag@gmail.com', 'R3AiJX', 1, '2024-09-26 18:29:36', 0, '2024-09-26 18:29:36', b'1'),
(3, '84098461', 'LAURA', 'PÉREZ', 'SÁNCHEZ', '984611853', 'laura.pérez@yahoo.com', '1kxpmf6o', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(4, '23239096', 'ANA', 'GÓMEZ', 'RODRÍGUEZ', '976715948', 'ana.gómez@gmail.com', 'a644dvg5', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(5, '76702743', 'RICARDO', 'SÁNCHEZ', 'GÓMEZ', '965360714', 'ricardo.sánchez@yahoo.com', 'hpj6jla8', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(6, '82720012', 'SOFÍA', 'LÓPEZ', 'RAMÍREZ', '992203650', 'sofía.lópez@hotmail.com', 'rf6kdnzr', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(7, '32565160', 'RICARDO', 'PÉREZ', 'RODRÍGUEZ', '929779052', 'ricardo.pérez@yahoo.com', 'a5ywe8fq', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(8, '54802271', 'ANA', 'RAMÍREZ', 'GÓMEZ', '991957210', 'ana.ramírez@hotmail.com', 'omajizrt', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(9, '88199452', 'LAURA', 'FLORES', 'RODRÍGUEZ', '959154893', 'laura.flores@yahoo.com', '94dhorl0', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(10, '38796852', 'JUAN', 'FLORES', 'PÉREZ', '950721627', 'juan.flores@hotmail.com', 'yxe1o8rc', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(11, '92367502', 'PEDRO', 'SÁNCHEZ', 'MARTÍNEZ', '921818859', 'pedro.sánchez@gmail.com', 'xb41d0eo', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1'),
(12, '41005067', 'MIGUEL', 'LÓPEZ', 'GARCÍA', '911407057', 'miguel.lópez@hotmail.com', 'ic1w1bsq', 1, '2024-10-02 18:33:00', 0, '2024-10-02 18:33:00', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_perfiles`
--

CREATE TABLE `usuario_perfiles` (
  `IdUsuario` int(11) NOT NULL,
  `IdPerfil` int(11) NOT NULL,
  `EstadoRegistro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_perfiles`
--

INSERT INTO `usuario_perfiles` (`IdUsuario`, `IdPerfil`, `EstadoRegistro`) VALUES
(1, 3, b'1'),
(2, 1, b'1'),
(3, 3, b'1'),
(4, 2, b'1'),
(5, 3, b'1'),
(6, 2, b'1'),
(7, 1, b'1'),
(8, 2, b'1'),
(9, 3, b'1'),
(10, 1, b'1'),
(11, 2, b'1'),
(12, 3, b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  ADD PRIMARY KEY (`IdOpcionMenu`),
  ADD KEY `IdPadre` (`IdPadre`);

--
-- Indices de la tabla `opcionesmenu_perfiles`
--
ALTER TABLE `opcionesmenu_perfiles`
  ADD KEY `IdOpcionMenu` (`IdOpcionMenu`),
  ADD KEY `IdPerfil` (`IdPerfil`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`IdPerfil`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Indices de la tabla `usuario_perfiles`
--
ALTER TABLE `usuario_perfiles`
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdPerfil` (`IdPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  MODIFY `IdOpcionMenu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `IdPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opcionesmenu`
--
ALTER TABLE `opcionesmenu`
  ADD CONSTRAINT `opcionesmenu_ibfk_1` FOREIGN KEY (`IdPadre`) REFERENCES `opcionesmenu` (`IdOpcionMenu`);

--
-- Filtros para la tabla `opcionesmenu_perfiles`
--
ALTER TABLE `opcionesmenu_perfiles`
  ADD CONSTRAINT `opcionesmenu_perfiles_ibfk_1` FOREIGN KEY (`IdOpcionMenu`) REFERENCES `opcionesmenu` (`IdOpcionMenu`),
  ADD CONSTRAINT `opcionesmenu_perfiles_ibfk_2` FOREIGN KEY (`IdPerfil`) REFERENCES `perfiles` (`IdPerfil`);

--
-- Filtros para la tabla `usuario_perfiles`
--
ALTER TABLE `usuario_perfiles`
  ADD CONSTRAINT `usuario_perfiles_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `usuario_perfiles_ibfk_2` FOREIGN KEY (`IdPerfil`) REFERENCES `perfiles` (`IdPerfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
