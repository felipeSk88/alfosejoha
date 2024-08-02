-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2024 a las 23:53:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgdrrhhbd`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `areasdefuncionarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `areasdefuncionarios` (
`UsuNombre` varchar(20)
,`UsuApellido` varchar(20)
,`AreNombre` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `areasysusevaluaciones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `areasysusevaluaciones` (
`AreNombre` varchar(30)
,`EvaNombre` varchar(20)
,`EvaDescripcion` varchar(40)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblarea`
--

CREATE TABLE `tblarea` (
  `AreCodigo` int(12) NOT NULL,
  `AreNombre` varchar(30) NOT NULL DEFAULT '',
  `AreDescripcion` varchar(30) NOT NULL DEFAULT '',
  `AreLider` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblarea`
--

INSERT INTO `tblarea` (`AreCodigo`, `AreNombre`, `AreDescripcion`, `AreLider`) VALUES
(1, 'Sistemas IT', 'Area de it de la organización', 1),
(2, 'Publicidad', 'Area de pautas', 102),
(3, 'Recursos humanos', 'Area de talento humano.', 104),
(5, 'Marketing Digital', 'Área que realiza proyectos en ', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblausencias`
--

CREATE TABLE `tblausencias` (
  `AusCodigo` int(12) NOT NULL,
  `AusFechaInicio` date DEFAULT NULL,
  `AusFechaRegreso` date DEFAULT NULL,
  `AusFechaSolicitud` date DEFAULT NULL,
  `AusEstado` varchar(20) NOT NULL DEFAULT '',
  `AusFechaInterr` date NOT NULL,
  `AusForUsuCed` int(12) DEFAULT NULL,
  `AusDiasSolici` int(2) NOT NULL,
  `AusDocumen` varchar(50) NOT NULL,
  `AusForTipAus` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblausencias`
--

INSERT INTO `tblausencias` (`AusCodigo`, `AusFechaInicio`, `AusFechaRegreso`, `AusFechaSolicitud`, `AusEstado`, `AusFechaInterr`, `AusForUsuCed`, `AusDiasSolici`, `AusDocumen`, `AusForTipAus`) VALUES
(2, '2022-09-12', '2022-09-16', '2022-09-10', 'Aprobado', '2022-09-16', 103, 4, 'subido', 1),
(3, '2022-09-14', '2022-09-27', '2022-09-13', 'Aprobado', '2022-09-27', 103, 9, 'subido', 1),
(5, '2022-09-19', '2022-09-23', '2022-09-16', 'Solicitado', '2022-09-23', 103, 4, 'subido', 1),
(6, '2022-09-19', '2022-09-20', '2022-09-16', 'Aprobado', '2022-09-20', 103, 1, 'subido', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcontratos`
--

CREATE TABLE `tblcontratos` (
  `ContId` int(3) NOT NULL,
  `ContTipo` varchar(40) NOT NULL,
  `ContDescripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblcontratos`
--

INSERT INTO `tblcontratos` (`ContId`, `ContTipo`, `ContDescripcion`) VALUES
(1, 'INDEFINIDO', 'INDEFINIDO'),
(2, 'TERMINIO FIJO', 'TERMINO FIJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldocumento`
--

CREATE TABLE `tbldocumento` (
  `DocCodigo` int(12) NOT NULL,
  `DocTipo` varchar(20) NOT NULL,
  `DocDescripcion` varchar(40) NOT NULL,
  `DocAdjunto` varchar(50) DEFAULT NULL,
  `DocForUsuario` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbldocumento`
--

INSERT INTO `tbldocumento` (`DocCodigo`, `DocTipo`, `DocDescripcion`, `DocAdjunto`, `DocForUsuario`) VALUES
(8, 'PRUENA', 'PRUENA', 'Documentos/1/PRUEBA DE CARGA DOCUMENTO.pdf', 1),
(9, 'Prueba', 'descripcion', 'Documentos/104/PRUEBA DE CARGA DOCUMENTO.pdf', 104);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblevaluaciones`
--

CREATE TABLE `tblevaluaciones` (
  `EvaCodigo` int(12) NOT NULL,
  `EvaNombre` varchar(20) NOT NULL DEFAULT '',
  `EvaDescripcion` varchar(40) NOT NULL DEFAULT '',
  `EvaForArea` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblevaluaciones`
--

INSERT INTO `tblevaluaciones` (`EvaCodigo`, `EvaNombre`, `EvaDescripcion`, `EvaForArea`) VALUES
(14, 'Segunda', 'Descripcion', 2),
(15, 'Rendimiento ventas', 'Evalua el cumplimiento de las metas     ', 2),
(16, 'jhjhuj', 'vbvghvhj', 2),
(17, 'Rendimiento operativ', 'Realización de todas las operaciones men', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblexperiencia`
--

CREATE TABLE `tblexperiencia` (
  `ExpId` int(12) NOT NULL,
  `ExpEmpresaEntida` varchar(50) NOT NULL DEFAULT '',
  `ExpFechaIncio` date NOT NULL,
  `ExpFechaSalida` date NOT NULL,
  `ExpCargoDes` varchar(50) NOT NULL DEFAULT '',
  `ExpDocumentoCer` varchar(50) NOT NULL DEFAULT '',
  `ExpForUsuario` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfirmas`
--

CREATE TABLE `tblfirmas` (
  `firmaCod` int(3) NOT NULL,
  `firmaUrl` varchar(60) NOT NULL,
  `firmaUsuDocu` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfuncionescar`
--

CREATE TABLE `tblfuncionescar` (
  `FunId` int(12) NOT NULL,
  `FunTitulo` varchar(25) NOT NULL DEFAULT '',
  `FunDescripcion` varchar(60) NOT NULL DEFAULT '',
  `FunForUsuDocumen` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblfuncionescar`
--

INSERT INTO `tblfuncionescar` (`FunId`, `FunTitulo`, `FunDescripcion`, `FunForUsuDocumen`) VALUES
(1, 'Coordinar', 'Realizar el seguimiento de los ', 102),
(2, 'Coordinar', 'Seguimiento colaboradores', 102),
(5, 'Otra funcion', 'Por ejemplo tiene varias funciones', 102),
(6, 'Adminsitración área', 'Gestiona y coordina con todos sus colaboradores campañas de ', 11),
(7, 'Control área', 'Gestiona los recursos suministrados para generar campañas de', 11),
(8, 'Informes', 'Realiza el balance de rendimiento del área de Markentin para', 11),
(9, 'Suple funciones', 'Realiza funciones que le sean asignadas como tareas básicas ', 12),
(10, 'Agendamiento', 'Realiza el agendamiento y calendario de los funcionarios, ge', 12),
(11, 'Asistente', 'Colabora con las tareas básicas y recordatorios de pendiente', 12),
(12, 'Gestion de archivo', 'Ayuda con la documentación organizada ya sea digital o físic', 12),
(13, 'Piezas', 'Diseña piezas para marketing', 13),
(14, 'Coordinadora de proveedor', 'Realiza la coordinación y previa negociación con los proveed', 13),
(15, 'Campañas', 'Realiza investigación y da ideas de campañas nuevas o cambio', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhisevaluacionesr`
--

CREATE TABLE `tblhisevaluacionesr` (
  `EvRCodigo` int(12) NOT NULL,
  `EvRFecha` date DEFAULT NULL,
  `EvRForUsuario` int(12) DEFAULT NULL,
  `EvRForEvaluacion` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblhisevaluacionesr`
--

INSERT INTO `tblhisevaluacionesr` (`EvRCodigo`, `EvRFecha`, `EvRForUsuario`, `EvRForEvaluacion`) VALUES
(73, '2022-09-12', 303, 15),
(74, '2022-09-12', 203, 15),
(75, '2022-09-12', 103, 15),
(76, '2022-09-12', 303, 14),
(77, '2022-09-12', 203, 14),
(78, '2022-09-17', 203, 16),
(73, '2022-09-12', 303, 15),
(74, '2022-09-12', 203, 15),
(75, '2022-09-12', 103, 15),
(76, '2022-09-12', 303, 14),
(77, '2022-09-12', 203, 14),
(78, '2022-09-17', 203, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhorarios`
--

CREATE TABLE `tblhorarios` (
  `horarIdPK` int(3) NOT NULL,
  `horarios` varchar(50) NOT NULL DEFAULT '',
  `horariDescripcion` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblhorarios`
--

INSERT INTO `tblhorarios` (`horarIdPK`, `horarios`, `horariDescripcion`) VALUES
(1, 'DIURNO', 'Jornada normal '),
(2, 'NOCTURNO', 'Jornada nocturna ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfiles`
--

CREATE TABLE `tblperfiles` (
  `PerCodigo` int(12) NOT NULL,
  `PerTipo` varchar(15) NOT NULL DEFAULT '',
  `PerDescripcion` varchar(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblperfiles`
--

INSERT INTO `tblperfiles` (`PerCodigo`, `PerTipo`, `PerDescripcion`) VALUES
(1, 'Administrador', 'Perfil que cuenta con todos los permisos'),
(2, 'Jefe Dir Area', 'Perfil que se le otorga a responsables d'),
(3, 'Empleado', 'Perfil bajo en el sistema y que tiene fu'),
(4, 'RRHH', 'Perfil asociado a los empleados RRHH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpreguntaseva`
--

CREATE TABLE `tblpreguntaseva` (
  `CriCodigo` int(12) NOT NULL,
  `CriPregunta` varchar(50) NOT NULL DEFAULT '',
  `CriValorPreg` int(3) NOT NULL,
  `CriForeEvaluacion` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblpreguntaseva`
--

INSERT INTO `tblpreguntaseva` (`CriCodigo`, `CriPregunta`, `CriValorPreg`, `CriForeEvaluacion`) VALUES
(7, 'Primera', 20, 14),
(8, 'Segunda', 80, 14),
(9, '¿Cumplio con la meta mes?', 5, 15),
(10, '¿Sobrepaso la meta mes?', 30, 15),
(11, '¿Llego a tiempo al menos 28 días?', 50, 15),
(12, '¿Porto el uniforme correctamente?', 15, 15),
(13, '{kpopipolopk', 34, 16),
(14, 'uyvhgvhg', 12, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultadoeva`
--

CREATE TABLE `tblresultadoeva` (
  `ResCodigo` int(12) NOT NULL,
  `ResRespuesta` varchar(4) NOT NULL,
  `ResNota` int(3) NOT NULL,
  `ResForPregun` int(12) DEFAULT NULL,
  `ResForEvrHis` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblresultadoeva`
--

INSERT INTO `tblresultadoeva` (`ResCodigo`, `ResRespuesta`, `ResNota`, `ResForPregun`, `ResForEvrHis`) VALUES
(23, 'Si', 5, 9, 73),
(24, 'No', 0, 10, 73),
(25, 'Si', 50, 11, 73),
(26, 'Si', 15, 12, 73),
(27, 'Si', 5, 9, 74),
(28, 'Si', 30, 10, 74),
(29, 'Si', 50, 11, 74),
(30, 'No', 0, 12, 74),
(31, 'No', 0, 9, 75),
(32, 'Si', 30, 10, 75),
(33, 'Si', 50, 11, 75),
(34, 'Si', 15, 12, 75),
(35, 'Si', 20, 7, 76),
(36, 'Si', 80, 8, 76),
(37, 'Si', 20, 7, 77),
(38, 'No', 0, 8, 77),
(39, 'Si', 34, 13, 78),
(40, 'Si', 12, 14, 78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltiposausen`
--

CREATE TABLE `tbltiposausen` (
  `TipID` int(3) NOT NULL,
  `TipTipo` varchar(50) NOT NULL DEFAULT '',
  `TipDescripcion` varchar(50) NOT NULL DEFAULT '',
  `TipVigencia` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbltiposausen`
--

INSERT INTO `tbltiposausen` (`TipID`, `TipTipo`, `TipDescripcion`, `TipVigencia`) VALUES
(1, 'Vacaciones', 'Vacaciones legales del funcionario', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `UsuCedula` int(12) NOT NULL,
  `UsuNombre` varchar(20) DEFAULT NULL,
  `UsuApellido` varchar(20) DEFAULT NULL,
  `UsuCargo` varchar(20) DEFAULT NULL,
  `UsuGenero` char(1) DEFAULT NULL,
  `UsuEps` varchar(20) DEFAULT NULL,
  `UsuTelefono` varchar(20) DEFAULT NULL,
  `UsuBarrio` varchar(20) DEFAULT NULL,
  `UsuDireccion` varchar(20) DEFAULT NULL,
  `UsuFechaNaci` date DEFAULT NULL,
  `UsuFechaExpCc` date DEFAULT NULL,
  `UsuCorreo` varchar(20) DEFAULT NULL,
  `UsuTIpoSangre` char(3) DEFAULT NULL,
  `UsuContrasenaSis` varchar(25) DEFAULT NULL,
  `UsuFechaContrato` date DEFAULT NULL,
  `UsuNoHijos` int(3) NOT NULL,
  `UsuForaPerfil` int(12) DEFAULT NULL,
  `UsuForaArea` int(12) DEFAULT NULL,
  `UsuDiasAcuVacaci` int(3) NOT NULL,
  `UsuFotoPerfil` varchar(200) NOT NULL,
  `UsuSalario` int(10) NOT NULL,
  `UsuHorario` int(3) DEFAULT NULL,
  `UsuTipoContra` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`UsuCedula`, `UsuNombre`, `UsuApellido`, `UsuCargo`, `UsuGenero`, `UsuEps`, `UsuTelefono`, `UsuBarrio`, `UsuDireccion`, `UsuFechaNaci`, `UsuFechaExpCc`, `UsuCorreo`, `UsuTIpoSangre`, `UsuContrasenaSis`, `UsuFechaContrato`, `UsuNoHijos`, `UsuForaPerfil`, `UsuForaArea`, `UsuDiasAcuVacaci`, `UsuFotoPerfil`, `UsuSalario`, `UsuHorario`, `UsuTipoContra`) VALUES
(1, 'Administrador', 'Root', 'Administrador sistem', 'F', '', '311111', '', 'Calle pruebas No pru', '2000-01-01', '2000-01-31', 'usario@dominio.com', '1', '1', '2000-01-01', 0, 1, 1, 1, 'Imagenes/sdkjf.jpg', 0, 1, 2),
(2, '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, 0, 2, 2, 0, '', 0, NULL, NULL),
(11, 'Maria', 'Pilar', 'Dir. Marketing', 'F', 'Famisanar', '12222222', 'Viva bien', 'Calle 21 No. 23 - 34', '1990-01-24', '0000-00-00', 'maria@maria.com', 'O+', '11', '2023-01-01', 0, 2, 5, 0, 'Imagenes/images.jpeg', 2300000, NULL, NULL),
(12, 'Manuel', 'Sal', 'Asistente Markenting', 'M', 'Famisanar', '21222222', 'General', 'Calle 04 No. 29- 39', '1999-11-22', '2017-12-01', 'manuel@sismer.com', 'O+', '12', '2023-01-02', 1, 3, 5, 0, '', 1300000, NULL, NULL),
(13, 'Samira', 'Penagos', 'Analista Marketing', 'F', 'Salud total', '3939999', 'Vives', 'Carrera 29 No. 39b -', '2000-06-20', '0000-00-00', 'Samira@gmail.com', 'B+', '13', '2023-01-02', 0, 3, 5, 0, '', 1800000, NULL, NULL),
(20, 'Pedro', 'Valenmano', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20', NULL, 0, 4, 3, 0, '', 0, NULL, NULL),
(102, 'Jefe de ', 'Pruebas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102', NULL, 0, 2, 2, 0, '', 0, NULL, NULL),
(103, 'Empleado', 'de pruebas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '103', NULL, 0, 3, 2, 18, 'Imagenes/sdkjf.jpg', 0, NULL, NULL),
(104, 'Empleado de RRHH', 'Pruebas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '104', NULL, 0, 4, 3, 0, 'Imagenes/skdljfe.jpg', 0, NULL, NULL),
(203, 'Empleado 2 De', 'Pruebas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '203', NULL, 0, 3, 2, 0, '', 0, NULL, NULL),
(303, 'Emepleado 3 de', 'Pruebas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '303', NULL, 0, 3, 2, 0, '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura para la vista `areasdefuncionarios`
--
DROP TABLE IF EXISTS `areasdefuncionarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `areasdefuncionarios`  AS SELECT `usu`.`UsuNombre` AS `UsuNombre`, `usu`.`UsuApellido` AS `UsuApellido`, `ar`.`AreNombre` AS `AreNombre` FROM (`tblusuario` `usu` join `tblarea` `ar` on(`ar`.`AreCodigo` = `usu`.`UsuForaArea`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `areasysusevaluaciones`
--
DROP TABLE IF EXISTS `areasysusevaluaciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `areasysusevaluaciones`  AS SELECT `ar`.`AreNombre` AS `AreNombre`, `eva`.`EvaNombre` AS `EvaNombre`, `eva`.`EvaDescripcion` AS `EvaDescripcion` FROM (`tblevaluaciones` `eva` join `tblarea` `ar` on(`ar`.`AreCodigo` = `eva`.`EvaForArea`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblarea`
--
ALTER TABLE `tblarea`
  ADD PRIMARY KEY (`AreCodigo`);

--
-- Indices de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD PRIMARY KEY (`AusCodigo`),
  ADD KEY `FK2 UsuCedulaF` (`AusForUsuCed`),
  ADD KEY `FK2 AusTipo2` (`AusForTipAus`);

--
-- Indices de la tabla `tblcontratos`
--
ALTER TABLE `tblcontratos`
  ADD PRIMARY KEY (`ContId`);

--
-- Indices de la tabla `tbldocumento`
--
ALTER TABLE `tbldocumento`
  ADD PRIMARY KEY (`DocCodigo`),
  ADD KEY `FK1 UsuCedula` (`DocForUsuario`);

--
-- Indices de la tabla `tblevaluaciones`
--
ALTER TABLE `tblevaluaciones`
  ADD PRIMARY KEY (`EvaCodigo`),
  ADD UNIQUE KEY `EvaCodigo` (`EvaCodigo`),
  ADD UNIQUE KEY `EvaCodigo_2` (`EvaCodigo`),
  ADD KEY `FK2 AreCodigo` (`EvaForArea`);

--
-- Indices de la tabla `tblexperiencia`
--
ALTER TABLE `tblexperiencia`
  ADD PRIMARY KEY (`ExpId`),
  ADD KEY `FK1 expforus` (`ExpForUsuario`);

--
-- Indices de la tabla `tblfirmas`
--
ALTER TABLE `tblfirmas`
  ADD PRIMARY KEY (`firmaCod`),
  ADD KEY `FK1 firmaDocu` (`firmaUsuDocu`);

--
-- Indices de la tabla `tblfuncionescar`
--
ALTER TABLE `tblfuncionescar`
  ADD PRIMARY KEY (`FunId`),
  ADD KEY `FK1 forUsuFuncio` (`FunForUsuDocumen`);

--
-- Indices de la tabla `tblhisevaluacionesr`
--
ALTER TABLE `tblhisevaluacionesr`
  ADD KEY `EvRForUsuario` (`EvRCodigo`),
  ADD KEY `FK1 EvRUsuario` (`EvRForUsuario`),
  ADD KEY `FK2  EvForeEvaluacion` (`EvRForEvaluacion`);

--
-- Indices de la tabla `tblhorarios`
--
ALTER TABLE `tblhorarios`
  ADD PRIMARY KEY (`horarIdPK`);

--
-- Indices de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  ADD PRIMARY KEY (`PerCodigo`);

--
-- Indices de la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  ADD PRIMARY KEY (`CriCodigo`),
  ADD KEY `FK1 EvaCreaFor` (`CriForeEvaluacion`);

--
-- Indices de la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
  ADD PRIMARY KEY (`ResCodigo`),
  ADD KEY `FK2 CriCod` (`ResForPregun`),
  ADD KEY `FK2 EvrHistor` (`ResForEvrHis`);

--
-- Indices de la tabla `tbltiposausen`
--
ALTER TABLE `tbltiposausen`
  ADD PRIMARY KEY (`TipID`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`UsuCedula`),
  ADD KEY `FK PerCodigo` (`UsuForaPerfil`),
  ADD KEY `FK1 AreCodigo` (`UsuForaArea`),
  ADD KEY `FK2 HoraId` (`UsuHorario`),
  ADD KEY `FK3 ContratoId` (`UsuTipoContra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblarea`
--
ALTER TABLE `tblarea`
  MODIFY `AreCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  MODIFY `AusCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblcontratos`
--
ALTER TABLE `tblcontratos`
  MODIFY `ContId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbldocumento`
--
ALTER TABLE `tbldocumento`
  MODIFY `DocCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tblevaluaciones`
--
ALTER TABLE `tblevaluaciones`
  MODIFY `EvaCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tblexperiencia`
--
ALTER TABLE `tblexperiencia`
  MODIFY `ExpId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblfirmas`
--
ALTER TABLE `tblfirmas`
  MODIFY `firmaCod` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblfuncionescar`
--
ALTER TABLE `tblfuncionescar`
  MODIFY `FunId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblhisevaluacionesr`
--
ALTER TABLE `tblhisevaluacionesr`
  MODIFY `EvRCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `tblhorarios`
--
ALTER TABLE `tblhorarios`
  MODIFY `horarIdPK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  MODIFY `CriCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
  MODIFY `ResCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `tbltiposausen`
--
ALTER TABLE `tbltiposausen`
  MODIFY `TipID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD CONSTRAINT `FK1 UsuCedaus` FOREIGN KEY (`AusForUsuCed`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2 AusTipo2` FOREIGN KEY (`AusForTipAus`) REFERENCES `tbltiposausen` (`TipID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbldocumento`
--
ALTER TABLE `tbldocumento`
  ADD CONSTRAINT `FK1 UsuCedula` FOREIGN KEY (`DocForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblevaluaciones`
--
ALTER TABLE `tblevaluaciones`
  ADD CONSTRAINT `FK1 area` FOREIGN KEY (`EvaForArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblexperiencia`
--
ALTER TABLE `tblexperiencia`
  ADD CONSTRAINT `FK1 expforus` FOREIGN KEY (`ExpForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblfirmas`
--
ALTER TABLE `tblfirmas`
  ADD CONSTRAINT `FK1 firmaDocu` FOREIGN KEY (`firmaUsuDocu`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblfuncionescar`
--
ALTER TABLE `tblfuncionescar`
  ADD CONSTRAINT `FK1 forUsuFuncio` FOREIGN KEY (`FunForUsuDocumen`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblhisevaluacionesr`
--
ALTER TABLE `tblhisevaluacionesr`
  ADD CONSTRAINT `FK1 EvRUsuario` FOREIGN KEY (`EvRForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2  EvForeEvaluacion` FOREIGN KEY (`EvRForEvaluacion`) REFERENCES `tblevaluaciones` (`EvaCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  ADD CONSTRAINT `FK1 EvaCreaFor` FOREIGN KEY (`CriForeEvaluacion`) REFERENCES `tblevaluaciones` (`EvaCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
  ADD CONSTRAINT `FK2 CriCod` FOREIGN KEY (`ResForPregun`) REFERENCES `tblpreguntaseva` (`CriCodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2 ResHis` FOREIGN KEY (`ResForEvrHis`) REFERENCES `tblhisevaluacionesr` (`EvRCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `FK PerCodigo` FOREIGN KEY (`UsuForaPerfil`) REFERENCES `tblperfiles` (`PerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2 HoraId` FOREIGN KEY (`UsuHorario`) REFERENCES `tblhorarios` (`horarIdPK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK3 ContratoId` FOREIGN KEY (`UsuTipoContra`) REFERENCES `tblcontratos` (`ContId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK4 area` FOREIGN KEY (`UsuForaArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
