-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2017 a las 17:18:16
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `net`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_bodega`
--

CREATE TABLE `net_bodega` (
  `cod_bode` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nom_bode` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `cost_bode` decimal(10,2) NOT NULL,
  `cant_bode` int(11) DEFAULT NULL,
  `max_bode` int(11) DEFAULT NULL,
  `min_bode` int(11) DEFAULT NULL,
  `preci_bode` decimal(10,2) DEFAULT NULL,
  `vent1_bode` decimal(10,2) DEFAULT NULL,
  `vent2_bode` decimal(10,2) DEFAULT NULL,
  `vent3_bode` decimal(10,2) DEFAULT NULL,
  `imag_bode` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cate_bode` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_bodega`
--

INSERT INTO `net_bodega` (`cod_bode`, `nom_bode`, `cost_bode`, `cant_bode`, `max_bode`, `min_bode`, `preci_bode`, `vent1_bode`, `vent2_bode`, `vent3_bode`, `imag_bode`, `cate_bode`) VALUES
('BG-00013', 'Conectores Rj45', '0.16', 1000, 1100, 100, '0.45', '0.40', '0.35', '0.30', 'IMG-0015.png', 'TP-00006'),
('BG-00014', 'Jack Rj45 Cat 5e', '0.26', 1000, 1100, 100, '0.45', '0.40', '0.35', '0.30', 'IMG-0016.png', 'TP-00006'),
('BG-00015', 'cable Utp cat 5', '0.10', 300, 1000, 10, '0.60', '0.55', '0.50', '0.45', 'IMG-0017.png', 'TP-00007'),
('BG-00016', 'Rack de Pared', '450.00', 10, 11, 1, '450.00', '450.00', '450.00', '450.00', 'IMG-0018.png', 'TP-00008'),
('BG-00017', 'Rack de piso', '1200.00', 10, 11, 1, '1200.00', '1200.00', '1200.00', '1200.00', 'IMG-0019.png', 'TP-00008'),
('BG-00018', 'Ponchadora Rj45', '30.00', 12, 13, 1, '30.00', '30.00', '30.00', '30.00', 'IMG-0020.png', 'TP-00012'),
('BG-00019', 'Peladora de Cable', '10.00', 12, 13, 1, '10.00', '10.00', '10.00', '10.00', 'IMG-0021.png', 'TP-00012'),
('BG-00020', 'comprobador', '25.00', 12, 13, 1, '25.00', '25.00', '25.00', '25.00', 'IMG-0022.png', 'TP-00012'),
('BG-00021', 'Patch cord', '0.25', 1000, 1100, 12, '0.35', '0.34', '0.33', '0.30', 'IMG-0023.png', 'TP-00007');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_capsula`
--

CREATE TABLE `net_capsula` (
  `cod_capsu` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `serv_capsu` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_capsula`
--

INSERT INTO `net_capsula` (`cod_capsu`, `serv_capsu`) VALUES
('CP-00014', 'TP-00007'),
('CP-00015', 'TP-00008');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_categoria`
--

CREATE TABLE `net_categoria` (
  `cod_cate` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nom_cate` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `det_cate` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_categoria`
--

INSERT INTO `net_categoria` (`cod_cate`, `nom_cate`, `det_cate`) VALUES
('TP-000010', 'Botas / Cauchos', 'para rj45'),
('TP-00004', 'Router', '-'),
('TP-00005', 'Modem', '-'),
('TP-00006', 'Conectores', '-'),
('TP-00007', 'Cable UTP', 'cat 5 y 6'),
('TP-00008', 'Rack', 'de pared y piso'),
('TP-00009', 'Canaleta', 'de 3 ,4 ,5'),
('TP-00011', 'Patch cord', 'pequeos y largos'),
('TP-00012', 'Herramientas', 'Herramientas de uso para los tecnicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_cliente`
--

CREATE TABLE `net_cliente` (
  `ced_cli` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `nom_cli` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ape_cli` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emi_cli` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_cli` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cel_cli` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_cli` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass_cli` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_cliente`
--

INSERT INTO `net_cliente` (`ced_cli`, `nom_cli`, `ape_cli`, `emi_cli`, `tel_cli`, `cel_cli`, `dir_cli`, `pass_cli`) VALUES
('1718760901', 'Alejandro', 'Rivas', 'jarlalejor@gmail.com', '0927398724', '7675326452', 'Union Civica', '0472b31141ad5bafcb7d8c461fd3f063995612f5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_det_caps`
--

CREATE TABLE `net_det_caps` (
  `id_capsu` int(11) NOT NULL,
  `cod_capsu` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_bod` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_det_caps`
--

INSERT INTO `net_det_caps` (`id_capsu`, `cod_capsu`, `cod_bod`) VALUES
(48, 'CP-00015', 'BG-00014'),
(49, 'CP-00015', 'BG-00021'),
(50, 'CP-00015', 'BG-00020'),
(51, 'CP-00014', 'BG-00013'),
(52, 'CP-00014', 'BG-00019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_det_pedi`
--

CREATE TABLE `net_det_pedi` (
  `id_ped` int(11) NOT NULL,
  `cod_ped` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cant_ped` int(11) DEFAULT NULL,
  `bod_ped` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pre_ped` decimal(10,2) DEFAULT NULL,
  `tot_ped` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_det_pedi`
--

INSERT INTO `net_det_pedi` (`id_ped`, `cod_ped`, `cant_ped`, `bod_ped`, `pre_ped`, `tot_ped`) VALUES
(21, 'PE-00004', 2, 'BG-00013', '0.40', '0.80'),
(22, 'PE-00005', 0, 'BG-00013', '0.40', '0.00'),
(23, 'PE-00007', 2, 'BG-00014', '0.40', '0.80'),
(24, 'PE-00007', 3, 'BG-00021', '0.34', '1.02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_params`
--

CREATE TABLE `net_params` (
  `id_param` int(11) NOT NULL,
  `iva_param` int(11) NOT NULL,
  `fact_param` int(11) NOT NULL,
  `cadu_param` int(11) NOT NULL,
  `cont_tipo` int(11) NOT NULL,
  `cont_categ` int(11) NOT NULL,
  `cont_bode` int(11) NOT NULL,
  `cont_servi` int(11) NOT NULL,
  `cont_capsula` int(11) NOT NULL,
  `cont_provedor` int(11) NOT NULL,
  `cont_image` int(11) NOT NULL,
  `cont_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_params`
--

INSERT INTO `net_params` (`id_param`, `iva_param`, `fact_param`, `cadu_param`, `cont_tipo`, `cont_categ`, `cont_bode`, `cont_servi`, `cont_capsula`, `cont_provedor`, `cont_image`, `cont_pedido`) VALUES
(1, 14, 30, 5, 12, 15, 21, 11, 15, 6, 23, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_pedido`
--

CREATE TABLE `net_pedido` (
  `cod_ped` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `serv_ped` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clie_ped` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tecn_ped` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_ped` date DEFAULT NULL,
  `fevis_ped` date DEFAULT NULL,
  `hovis_ped` time DEFAULT NULL,
  `esta_ped` int(11) NOT NULL,
  `es_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_pedido`
--

INSERT INTO `net_pedido` (`cod_ped`, `serv_ped`, `clie_ped`, `tecn_ped`, `fech_ped`, `fevis_ped`, `hovis_ped`, `esta_ped`, `es_factura`) VALUES
('PE-00004', 'TP-00007', '1718760901', '1234567890', '2017-03-31', '2017-03-31', '14:40:00', 3, 1),
('PE-00005', 'TP-00007', '1718760901', '1234567890', '2017-04-10', '2017-04-10', '13:37:00', 3, 0),
('PE-00007', 'TP-00008', '1718760901', '1234567890', '2017-01-25', '2017-01-25', '19:34:00', 3, 0),
('PE-00008', 'TP-00008', '1718760901', NULL, '2017-04-18', '2017-04-18', '02:03:00', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_proveedor`
--

CREATE TABLE `net_proveedor` (
  `cod_prove` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nom_prove` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emi_prove` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_prove` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cel_prove` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_prove` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nom_contac` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emi_contac` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_contac` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cel_contac` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_proveedor`
--

INSERT INTO `net_proveedor` (`cod_prove`, `nom_prove`, `emi_prove`, `tel_prove`, `cel_prove`, `dir_prove`, `nom_contac`, `emi_contac`, `tel_contac`, `cel_contac`) VALUES
('PR-00004', 'Nestle', 'nestle@gmail.com', '8978987768', '776567567', 'Santo Domingo', 'joel', 'joel@gmail.com', '875757', '3242342343'),
('PR-00005', 'awesome', 'qwg@er.com', '34862346', '76352476', 'qqwe', 'awesome', 'qwg@er.com', '34862346', '76352476');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_tipo`
--

CREATE TABLE `net_tipo` (
  `cod_tip` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nom_tip` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `det_tip` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_tipo`
--

INSERT INTO `net_tipo` (`cod_tip`, `nom_tip`, `det_tip`) VALUES
('TP-00007', 'Ensamblaje, Mantenimiento y Reparacion de Computadoras', 'Ensamblaje de Computadoras de Escritorio, Mantenimiento preventivo o correctivo y Reparacion de Hardware y Software.'),
('TP-00008', 'Redes y Cableado', 'Analisis, Diseño e implementacion de redes y Cableado estructurado.'),
('TP-00009', 'Telecomunicaciones', 'Estudio de factibilidad e implementación de enlaces Microondas Punto a Punto y Multipunto'),
('TP-00011', 'Servidores', 'Asesoria e Implementacion de Servidores de Control de Ancho de Banda, Balanceo, Firewall, entre otros.'),
('TP-00012', 'Video Vigilancia', 'Asesoria e Instalacion de Sistemas de Camaras de Seguridad con Acceso Remoto.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_trabajo`
--

CREATE TABLE `net_trabajo` (
  `id_trab` int(11) NOT NULL,
  `cod_trab` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tec_trab` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_usuario`
--

CREATE TABLE `net_usuario` (
  `ced_usu` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `nom_usu` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ape_usu` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emi_usu` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_usu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cel_usu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_usu` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass_usu` varchar(140) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `net_usuario`
--

INSERT INTO `net_usuario` (`ced_usu`, `nom_usu`, `ape_usu`, `emi_usu`, `tel_usu`, `cel_usu`, `dir_usu`, `pass_usu`) VALUES
('1234567890', 'admin', 'admin', 'admin@admin.com', '1234567890', '1234567890', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
('1302064942', 'Joel', 'Rivas', 'jarl.alejandro@gmail.com', '3887462222', '6777777777', 'alkshiudwer', 'cb44e1e1866061e0cbd1c8069e3dc794ba4dc12a'),
('1718760901', 'Alejandro', 'Rivas', 'jarlalejor@gmail.com', '0937497239', '8236846823', 'ewwerwerwq', '0472b31141ad5bafcb7d8c461fd3f063995612f5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_detalle`
--

CREATE TABLE `trabajo_detalle` (
  `cod_id` int(11) NOT NULL,
  `cod_trab` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_empl` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_bodega`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_bodega` (
`cod_bode` varchar(11)
,`nom_bode` varchar(140)
,`cost_bode` decimal(10,2)
,`cant_bode` int(11)
,`max_bode` int(11)
,`min_bode` int(11)
,`preci_bode` decimal(10,2)
,`vent1_bode` decimal(10,2)
,`vent2_bode` decimal(10,2)
,`vent3_bode` decimal(10,2)
,`imag_bode` varchar(140)
,`cod_cate` varchar(11)
,`nom_cate` varchar(140)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_capsula`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_capsula` (
`cod_capsu` varchar(11)
,`serv_capsu` varchar(140)
,`cod_tip` varchar(11)
,`nom_tip` varchar(140)
,`det_tip` varchar(140)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_capsu_det`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_capsu_det` (
`id_capsu` int(11)
,`cod_capsu` varchar(11)
,`cod_bod` varchar(11)
,`cod_bode` varchar(11)
,`nom_bode` varchar(140)
,`cod_cate` varchar(11)
,`nom_cate` varchar(140)
,`cant_bode` int(11)
,`vent1_bode` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_det_pedido`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_det_pedido` (
`id_ped` int(11)
,`cod_ped` varchar(11)
,`cant_ped` int(11)
,`bod_ped` varchar(11)
,`pre_ped` decimal(10,2)
,`tot_ped` decimal(10,2)
,`nom_bode` varchar(140)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_pedidos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_pedidos` (
`cod_ped` varchar(11)
,`fech_ped` date
,`fevis_ped` date
,`hovis_ped` time
,`esta_ped` int(11)
,`ced_cli` varchar(13)
,`ced_usu` varchar(13)
,`cliente` varchar(281)
,`tecnico` varchar(281)
,`cod_tip` varchar(11)
,`nom_tip` varchar(140)
,`det_tip` varchar(140)
,`es_factura` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_ped_cliente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_ped_cliente` (
`cod_ped` varchar(11)
,`serv_ped` varchar(11)
,`tecn_ped` varchar(13)
,`fech_ped` date
,`fevis_ped` date
,`hovis_ped` time
,`esta_ped` int(11)
,`es_factura` int(11)
,`ced_cli` varchar(13)
,`cliente` varchar(281)
,`nom_tip` varchar(140)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_trabajo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_trabajo` (
`tec_trab` varchar(13)
,`cod_ped` varchar(11)
,`serv_ped` varchar(11)
,`clie_ped` varchar(13)
,`tecn_ped` varchar(13)
,`fech_ped` date
,`fevis_ped` date
,`hovis_ped` time
,`esta_ped` int(11)
,`es_factura` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_trabajores`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_trabajores` (
`id_empl` varchar(13)
,`cod_trab` varchar(11)
,`cod_id` int(11)
,`empleado` varchar(281)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_bodega`
--
DROP TABLE IF EXISTS `vista_bodega`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_bodega`  AS  select `net_bodega`.`cod_bode` AS `cod_bode`,`net_bodega`.`nom_bode` AS `nom_bode`,`net_bodega`.`cost_bode` AS `cost_bode`,`net_bodega`.`cant_bode` AS `cant_bode`,`net_bodega`.`max_bode` AS `max_bode`,`net_bodega`.`min_bode` AS `min_bode`,`net_bodega`.`preci_bode` AS `preci_bode`,`net_bodega`.`vent1_bode` AS `vent1_bode`,`net_bodega`.`vent2_bode` AS `vent2_bode`,`net_bodega`.`vent3_bode` AS `vent3_bode`,`net_bodega`.`imag_bode` AS `imag_bode`,`net_categoria`.`cod_cate` AS `cod_cate`,`net_categoria`.`nom_cate` AS `nom_cate` from (`net_bodega` join `net_categoria` on((`net_bodega`.`cate_bode` = `net_categoria`.`cod_cate`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_capsula`
--
DROP TABLE IF EXISTS `vista_capsula`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_capsula`  AS  select `net_capsula`.`cod_capsu` AS `cod_capsu`,`net_capsula`.`serv_capsu` AS `serv_capsu`,`net_tipo`.`cod_tip` AS `cod_tip`,`net_tipo`.`nom_tip` AS `nom_tip`,`net_tipo`.`det_tip` AS `det_tip` from (`net_capsula` join `net_tipo` on((`net_capsula`.`serv_capsu` = `net_tipo`.`cod_tip`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_capsu_det`
--
DROP TABLE IF EXISTS `vista_capsu_det`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_capsu_det`  AS  select `net_det_caps`.`id_capsu` AS `id_capsu`,`net_det_caps`.`cod_capsu` AS `cod_capsu`,`net_det_caps`.`cod_bod` AS `cod_bod`,`vista_bodega`.`cod_bode` AS `cod_bode`,`vista_bodega`.`nom_bode` AS `nom_bode`,`vista_bodega`.`cod_cate` AS `cod_cate`,`vista_bodega`.`nom_cate` AS `nom_cate`,`vista_bodega`.`cant_bode` AS `cant_bode`,`vista_bodega`.`vent1_bode` AS `vent1_bode` from (`net_det_caps` join `vista_bodega` on((`net_det_caps`.`cod_bod` = `vista_bodega`.`cod_bode`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_det_pedido`
--
DROP TABLE IF EXISTS `vista_det_pedido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_det_pedido`  AS  select `net_det_pedi`.`id_ped` AS `id_ped`,`net_det_pedi`.`cod_ped` AS `cod_ped`,`net_det_pedi`.`cant_ped` AS `cant_ped`,`net_det_pedi`.`bod_ped` AS `bod_ped`,`net_det_pedi`.`pre_ped` AS `pre_ped`,`net_det_pedi`.`tot_ped` AS `tot_ped`,`net_bodega`.`nom_bode` AS `nom_bode` from (`net_det_pedi` join `net_bodega` on((`net_det_pedi`.`bod_ped` = `net_bodega`.`cod_bode`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_pedidos`
--
DROP TABLE IF EXISTS `vista_pedidos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_pedidos`  AS  select `net_pedido`.`cod_ped` AS `cod_ped`,`net_pedido`.`fech_ped` AS `fech_ped`,`net_pedido`.`fevis_ped` AS `fevis_ped`,`net_pedido`.`hovis_ped` AS `hovis_ped`,`net_pedido`.`esta_ped` AS `esta_ped`,`net_cliente`.`ced_cli` AS `ced_cli`,`net_usuario`.`ced_usu` AS `ced_usu`,concat(`net_cliente`.`nom_cli`,' ',`net_cliente`.`ape_cli`) AS `cliente`,concat(`net_usuario`.`nom_usu`,' ',`net_usuario`.`ape_usu`) AS `tecnico`,`net_tipo`.`cod_tip` AS `cod_tip`,`net_tipo`.`nom_tip` AS `nom_tip`,`net_tipo`.`det_tip` AS `det_tip`,`net_pedido`.`es_factura` AS `es_factura` from (((`net_pedido` join `net_cliente` on((`net_pedido`.`clie_ped` = `net_cliente`.`ced_cli`))) join `net_usuario` on((`net_pedido`.`tecn_ped` = `net_usuario`.`ced_usu`))) join `net_tipo` on((`net_pedido`.`serv_ped` = `net_tipo`.`cod_tip`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_ped_cliente`
--
DROP TABLE IF EXISTS `vista_ped_cliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_ped_cliente`  AS  select `net_pedido`.`cod_ped` AS `cod_ped`,`net_pedido`.`serv_ped` AS `serv_ped`,`net_pedido`.`tecn_ped` AS `tecn_ped`,`net_pedido`.`fech_ped` AS `fech_ped`,`net_pedido`.`fevis_ped` AS `fevis_ped`,`net_pedido`.`hovis_ped` AS `hovis_ped`,`net_pedido`.`esta_ped` AS `esta_ped`,`net_pedido`.`es_factura` AS `es_factura`,`net_cliente`.`ced_cli` AS `ced_cli`,concat(`net_cliente`.`nom_cli`,' ',`net_cliente`.`ape_cli`) AS `cliente`,`net_tipo`.`nom_tip` AS `nom_tip` from ((`net_pedido` join `net_cliente` on((`net_pedido`.`clie_ped` = `net_cliente`.`ced_cli`))) join `net_tipo` on((`net_pedido`.`serv_ped` = `net_tipo`.`cod_tip`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_trabajo`
--
DROP TABLE IF EXISTS `vista_trabajo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_trabajo`  AS  select `net_trabajo`.`tec_trab` AS `tec_trab`,`net_pedido`.`cod_ped` AS `cod_ped`,`net_pedido`.`serv_ped` AS `serv_ped`,`net_pedido`.`clie_ped` AS `clie_ped`,`net_pedido`.`tecn_ped` AS `tecn_ped`,`net_pedido`.`fech_ped` AS `fech_ped`,`net_pedido`.`fevis_ped` AS `fevis_ped`,`net_pedido`.`hovis_ped` AS `hovis_ped`,`net_pedido`.`esta_ped` AS `esta_ped`,`net_pedido`.`es_factura` AS `es_factura` from (`net_trabajo` join `net_pedido` on((`net_trabajo`.`cod_trab` = `net_pedido`.`cod_ped`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_trabajores`
--
DROP TABLE IF EXISTS `vista_trabajores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_trabajores`  AS  select `trabajo_detalle`.`id_empl` AS `id_empl`,`trabajo_detalle`.`cod_trab` AS `cod_trab`,`trabajo_detalle`.`cod_id` AS `cod_id`,concat(`net_usuario`.`nom_usu`,' ',`net_usuario`.`ape_usu`) AS `empleado` from (`net_usuario` join `trabajo_detalle` on((`net_usuario`.`ced_usu` = `trabajo_detalle`.`id_empl`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `net_bodega`
--
ALTER TABLE `net_bodega`
  ADD PRIMARY KEY (`cod_bode`);

--
-- Indices de la tabla `net_capsula`
--
ALTER TABLE `net_capsula`
  ADD PRIMARY KEY (`cod_capsu`);

--
-- Indices de la tabla `net_categoria`
--
ALTER TABLE `net_categoria`
  ADD PRIMARY KEY (`cod_cate`);

--
-- Indices de la tabla `net_cliente`
--
ALTER TABLE `net_cliente`
  ADD PRIMARY KEY (`ced_cli`);

--
-- Indices de la tabla `net_det_caps`
--
ALTER TABLE `net_det_caps`
  ADD PRIMARY KEY (`id_capsu`);

--
-- Indices de la tabla `net_det_pedi`
--
ALTER TABLE `net_det_pedi`
  ADD PRIMARY KEY (`id_ped`);

--
-- Indices de la tabla `net_params`
--
ALTER TABLE `net_params`
  ADD PRIMARY KEY (`id_param`);

--
-- Indices de la tabla `net_pedido`
--
ALTER TABLE `net_pedido`
  ADD PRIMARY KEY (`cod_ped`);

--
-- Indices de la tabla `net_proveedor`
--
ALTER TABLE `net_proveedor`
  ADD PRIMARY KEY (`cod_prove`);

--
-- Indices de la tabla `net_tipo`
--
ALTER TABLE `net_tipo`
  ADD PRIMARY KEY (`cod_tip`);

--
-- Indices de la tabla `net_trabajo`
--
ALTER TABLE `net_trabajo`
  ADD PRIMARY KEY (`id_trab`);

--
-- Indices de la tabla `net_usuario`
--
ALTER TABLE `net_usuario`
  ADD PRIMARY KEY (`ced_usu`);

--
-- Indices de la tabla `trabajo_detalle`
--
ALTER TABLE `trabajo_detalle`
  ADD PRIMARY KEY (`cod_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `net_det_caps`
--
ALTER TABLE `net_det_caps`
  MODIFY `id_capsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `net_det_pedi`
--
ALTER TABLE `net_det_pedi`
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `net_params`
--
ALTER TABLE `net_params`
  MODIFY `id_param` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `net_trabajo`
--
ALTER TABLE `net_trabajo`
  MODIFY `id_trab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `trabajo_detalle`
--
ALTER TABLE `trabajo_detalle`
  MODIFY `cod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
