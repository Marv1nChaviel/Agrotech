-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2023 a las 08:03:36
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
-- Base de datos: `agropecuaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campo_potreros`
--

CREATE TABLE `campo_potreros` (
  `ID_potrero` int(11) NOT NULL,
  `Nro_potrero` int(11) NOT NULL,
  `Siembra` varchar(20) DEFAULT NULL,
  `Trabajadores_ID_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `ID_clasificacion` int(11) NOT NULL,
  `Clasificacion_animal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`ID_clasificacion`, `Clasificacion_animal`) VALUES
(1, 'Adulto'),
(2, 'Novillo'),
(3, 'Mauto/Mauta'),
(4, 'Becerro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `ID_egresos` int(11) NOT NULL,
  `Sueldo_trabajadores` varchar(45) NOT NULL,
  `Salud_Animal` varchar(45) NOT NULL,
  `Mantenimiento_potreros` varchar(45) NOT NULL,
  `Mantenimiento_mecanico` varchar(45) NOT NULL,
  `Gastos_generales` varchar(45) NOT NULL,
  `Gastos_instalaciones` varchar(45) NOT NULL,
  `Inventario_rebaño_ID_animal` int(11) NOT NULL,
  `Trabajadores_ID_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ex_trabajadores`
--

CREATE TABLE `ex_trabajadores` (
  `ID_trabajador` int(11) NOT NULL,
  `Fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_hacienda`
--

CREATE TABLE `info_hacienda` (
  `RifOci` int(11) NOT NULL,
  `Nombre_propietario` varchar(45) NOT NULL,
  `Nombre_hacienda` varchar(45) NOT NULL,
  `Cantidad_hectareas` varchar(45) NOT NULL,
  `Cantidad_animales (Bovinos,bufalinos)` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `info_hacienda`
--

INSERT INTO `info_hacienda` (`RifOci`, `Nombre_propietario`, `Nombre_hacienda`, `Cantidad_hectareas`, `Cantidad_animales (Bovinos,bufalinos)`) VALUES
(27033366, 'Cesar Sanchez', 'Mi granja', '12', '260');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `ID_ingresos` int(11) NOT NULL,
  `Venta_leche` varchar(45) NOT NULL,
  `Venta_carne` varchar(45) NOT NULL,
  `Venta_animal` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `Inventario_rebaño_ID_animal` int(11) NOT NULL,
  `Produccion_ID_produccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalaciones`
--

CREATE TABLE `instalaciones` (
  `ID_instalaciones` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Funcion` varchar(45) NOT NULL,
  `Trabajadores_ID_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_general`
--

CREATE TABLE `inventario_general` (
  `ID_inventario` int(11) NOT NULL,
  `Nombre_item` varchar(45) NOT NULL,
  `Info_item` varchar(60) DEFAULT NULL,
  `Stock` int(11) NOT NULL,
  `Trabajadores_ID_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `inventario_general`
--

INSERT INTO `inventario_general` (`ID_inventario`, `Nombre_item`, `Info_item`, `Stock`, `Trabajadores_ID_trabajador`) VALUES
(1, 'Saco de Alimento', 'Alimento para gallinas ponedoras 30kg', 30, 1),
(3, 'Saco de Alimento', 'Alimento para gallinas', 30, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_rebaño`
--

CREATE TABLE `inventario_rebaño` (
  `ID_animal` int(11) NOT NULL,
  `Nro_animal` int(11) DEFAULT NULL,
  `Color` varchar(20) NOT NULL,
  `Partos` int(5) DEFAULT NULL,
  `Peso` varchar(20) DEFAULT NULL,
  `ID_raza` int(11) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `ID_clasificacion` int(11) NOT NULL,
  `Lote_ID_lote` int(11) NOT NULL,
  `Tipo_rebaño_ID_tipo_rebaño` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `inventario_rebaño`
--

INSERT INTO `inventario_rebaño` (`ID_animal`, `Nro_animal`, `Color`, `Partos`, `Peso`, `ID_raza`, `Sexo`, `ID_clasificacion`, `Lote_ID_lote`, `Tipo_rebaño_ID_tipo_rebaño`) VALUES
(1, 1, 'Cafe', 2, '563', 3, 'H', 1, 1, 5),
(11, 2, 'Marron', 1, '685', 1, 'H', 1, 2, 5),
(12, 3, 'Blanco', 0, '643', 5, 'M', 1, 2, 5),
(18, 4, 'Manchado', 0, '135', 2, 'M', 4, 4, 5),
(19, 5, 'Blanco', 2, '421', 4, 'H', 1, 1, 5),
(20, 6, 'negro', 0, '65', 3, 'H', 4, 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itinerario`
--

CREATE TABLE `itinerario` (
  `ID_itinerario` int(11) NOT NULL,
  `Dia_hora` date NOT NULL,
  `icono` int(1) NOT NULL COMMENT '1 es verde , 2 es amarillo y 3 es rojo',
  `Nota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `itinerario`
--

INSERT INTO `itinerario` (`ID_itinerario`, `Dia_hora`, `icono`, `Nota`) VALUES
(1, '2023-04-02', 1, 'Hola amigos'),
(2, '2023-04-01', 2, 'Hola amigosffffffff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID_login` int(11) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Ingreso` date NOT NULL,
  `RifOci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID_login`, `Contraseña`, `Ingreso`, `RifOci`) VALUES
(27033366, '12345678', '2023-02-23', 27033366);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `ID_lote` int(11) NOT NULL,
  `Nombre_lote` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`ID_lote`, `Nombre_lote`) VALUES
(1, 'Ordeño'),
(2, 'Escotero'),
(3, 'Crías'),
(4, 'Engorde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinaria`
--

CREATE TABLE `maquinaria` (
  `ID_maquinaria` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Modelo` varchar(45) NOT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Año` year(4) DEFAULT NULL,
  `Extras` varchar(80) DEFAULT NULL,
  `Horas_uso` varchar(20) NOT NULL,
  `Trabajadores_ID_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `maquinaria`
--

INSERT INTO `maquinaria` (`ID_maquinaria`, `Marca`, `Modelo`, `Color`, `Año`, `Extras`, `Horas_uso`, `Trabajadores_ID_trabajador`) VALUES
(1, 'Ford', 'E-354', 'Amarillo', 2004, 'Nada', '2500', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `ID_produccion` int(11) NOT NULL,
  `Produccion_leche` varchar(45) NOT NULL,
  `Produccion_carne` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `Inventario_rebaño_ID_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`ID_produccion`, `Produccion_leche`, `Produccion_carne`, `Fecha`, `Inventario_rebaño_ID_animal`) VALUES
(1, '45 litros', '', '2023-03-15', 1),
(2, '', '260 kg', '2023-03-03', 1),
(3, '30 litros', '', '2023-03-03', 12),
(4, '', '260 kg', '2023-03-03', 1),
(5, '41 litros', '', '2023-03-15', 1),
(6, '45 litros', '', '2023-03-15', 1),
(7, '', '260 kg', '2023-03-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `ID_raza` int(11) NOT NULL,
  `Nombre_raza` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`ID_raza`, `Nombre_raza`) VALUES
(1, 'Carora'),
(2, 'Mosaico Perijanero'),
(3, 'Pardo Suizo'),
(4, 'Holstein'),
(5, 'Jersey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rebaño`
--

CREATE TABLE `tipo_rebaño` (
  `ID_tipo_rebaño` int(11) NOT NULL,
  `Nombre_tipo_rebaño` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipo_rebaño`
--

INSERT INTO `tipo_rebaño` (`ID_tipo_rebaño`, `Nombre_tipo_rebaño`) VALUES
(1, 'Equino'),
(2, 'Bufalino'),
(5, 'Bovino'),
(6, 'Caprino'),
(7, 'Avicola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `ID_trabajador` int(11) NOT NULL,
  `Ci` int(12) DEFAULT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Fecha_entrada` date NOT NULL,
  `Salida_permiso` date DEFAULT NULL,
  `Sueldo_trabajadores` varchar(45) NOT NULL,
  `Cargo` varchar(45) NOT NULL,
  `Telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`ID_trabajador`, `Ci`, `Nombre`, `Fecha_entrada`, `Salida_permiso`, `Sueldo_trabajadores`, `Cargo`, `Telefono`) VALUES
(1, 11035366, 'Carlos Jose', '2020-01-14', '2023-02-01', '40', 'Encargado', '0412-9565485'),
(2, 12033364, 'Diego Gonzalez', '2023-02-07', '2023-02-22', '45', 'Obrero', '0412-5462538');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campo_potreros`
--
ALTER TABLE `campo_potreros`
  ADD PRIMARY KEY (`ID_potrero`),
  ADD KEY `fk_Campo_potreros_Trabajadores1_idx` (`Trabajadores_ID_trabajador`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`ID_clasificacion`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`ID_egresos`),
  ADD KEY `fk_Egresos_Inventario_rebaño1_idx` (`Inventario_rebaño_ID_animal`),
  ADD KEY `fk_Egresos_Trabajadores1_idx` (`Trabajadores_ID_trabajador`);

--
-- Indices de la tabla `ex_trabajadores`
--
ALTER TABLE `ex_trabajadores`
  ADD KEY `ID_trabajador_idx` (`ID_trabajador`);

--
-- Indices de la tabla `info_hacienda`
--
ALTER TABLE `info_hacienda`
  ADD PRIMARY KEY (`RifOci`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`ID_ingresos`),
  ADD KEY `fk_Ingresos_Inventario_rebaño1_idx` (`Inventario_rebaño_ID_animal`),
  ADD KEY `fk_Ingresos_Produccion1_idx` (`Produccion_ID_produccion`);

--
-- Indices de la tabla `instalaciones`
--
ALTER TABLE `instalaciones`
  ADD PRIMARY KEY (`ID_instalaciones`),
  ADD KEY `fk_Instalaciones_Trabajadores1_idx` (`Trabajadores_ID_trabajador`);

--
-- Indices de la tabla `inventario_general`
--
ALTER TABLE `inventario_general`
  ADD PRIMARY KEY (`ID_inventario`),
  ADD KEY `fk_Inventario_general_Trabajadores1_idx` (`Trabajadores_ID_trabajador`);

--
-- Indices de la tabla `inventario_rebaño`
--
ALTER TABLE `inventario_rebaño`
  ADD PRIMARY KEY (`ID_animal`),
  ADD KEY `Clasificacion` (`ID_clasificacion`),
  ADD KEY `ID_raza_idx` (`ID_raza`),
  ADD KEY `fk_Inventario_rebaño_Lote1_idx` (`Lote_ID_lote`),
  ADD KEY `fk_Inventario_rebaño_Tipo_rebaño1_idx` (`Tipo_rebaño_ID_tipo_rebaño`);

--
-- Indices de la tabla `itinerario`
--
ALTER TABLE `itinerario`
  ADD PRIMARY KEY (`ID_itinerario`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_login`),
  ADD KEY `Rif_ci_idx` (`RifOci`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`ID_lote`);

--
-- Indices de la tabla `maquinaria`
--
ALTER TABLE `maquinaria`
  ADD PRIMARY KEY (`ID_maquinaria`),
  ADD KEY `fk_Maquinaria_Trabajadores1_idx` (`Trabajadores_ID_trabajador`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`ID_produccion`),
  ADD KEY `fk_Produccion_Inventario_rebaño1_idx` (`Inventario_rebaño_ID_animal`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`ID_raza`);

--
-- Indices de la tabla `tipo_rebaño`
--
ALTER TABLE `tipo_rebaño`
  ADD PRIMARY KEY (`ID_tipo_rebaño`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`ID_trabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campo_potreros`
--
ALTER TABLE `campo_potreros`
  MODIFY `ID_potrero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `ID_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `ID_egresos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instalaciones`
--
ALTER TABLE `instalaciones`
  MODIFY `ID_instalaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario_general`
--
ALTER TABLE `inventario_general`
  MODIFY `ID_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventario_rebaño`
--
ALTER TABLE `inventario_rebaño`
  MODIFY `ID_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `itinerario`
--
ALTER TABLE `itinerario`
  MODIFY `ID_itinerario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27033367;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `ID_lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `maquinaria`
--
ALTER TABLE `maquinaria`
  MODIFY `ID_maquinaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `ID_produccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `ID_raza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_rebaño`
--
ALTER TABLE `tipo_rebaño`
  MODIFY `ID_tipo_rebaño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `ID_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campo_potreros`
--
ALTER TABLE `campo_potreros`
  ADD CONSTRAINT `fk_Campo_potreros_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_trabajador`) REFERENCES `trabajadores` (`ID_trabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD CONSTRAINT `fk_Egresos_Inventario_rebaño1` FOREIGN KEY (`Inventario_rebaño_ID_animal`) REFERENCES `inventario_rebaño` (`ID_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Egresos_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_trabajador`) REFERENCES `trabajadores` (`ID_trabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ex_trabajadores`
--
ALTER TABLE `ex_trabajadores`
  ADD CONSTRAINT `ID_trabajador` FOREIGN KEY (`ID_trabajador`) REFERENCES `trabajadores` (`ID_trabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `fk_Ingresos_Inventario_rebaño1` FOREIGN KEY (`Inventario_rebaño_ID_animal`) REFERENCES `inventario_rebaño` (`ID_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ingresos_Produccion1` FOREIGN KEY (`Produccion_ID_produccion`) REFERENCES `produccion` (`ID_produccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instalaciones`
--
ALTER TABLE `instalaciones`
  ADD CONSTRAINT `fk_Instalaciones_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_trabajador`) REFERENCES `trabajadores` (`ID_trabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inventario_general`
--
ALTER TABLE `inventario_general`
  ADD CONSTRAINT `fk_Inventario_general_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_trabajador`) REFERENCES `trabajadores` (`ID_trabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inventario_rebaño`
--
ALTER TABLE `inventario_rebaño`
  ADD CONSTRAINT `ID_clasificasion` FOREIGN KEY (`ID_clasificacion`) REFERENCES `clasificacion` (`ID_clasificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ID_raza` FOREIGN KEY (`ID_raza`) REFERENCES `raza` (`ID_raza`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inventario_rebaño_Lote1` FOREIGN KEY (`Lote_ID_lote`) REFERENCES `lote` (`ID_lote`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inventario_rebaño_Tipo_rebaño1` FOREIGN KEY (`Tipo_rebaño_ID_tipo_rebaño`) REFERENCES `tipo_rebaño` (`ID_tipo_rebaño`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `Rif_ci` FOREIGN KEY (`RifOci`) REFERENCES `info_hacienda` (`RifOci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `maquinaria`
--
ALTER TABLE `maquinaria`
  ADD CONSTRAINT `fk_Maquinaria_Trabajadores1` FOREIGN KEY (`Trabajadores_ID_trabajador`) REFERENCES `trabajadores` (`ID_trabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `fk_Produccion_Inventario_rebaño1` FOREIGN KEY (`Inventario_rebaño_ID_animal`) REFERENCES `inventario_rebaño` (`ID_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
