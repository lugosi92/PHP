-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS aplicacion;
USE aplicacion;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `categoria`
CREATE TABLE `categoria` (
  `codCat` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`codCat`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `restaurante`
CREATE TABLE `restaurante` (
  `codRes` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(90) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `cp` int(11) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  PRIMARY KEY (`codRes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `productos`
CREATE TABLE `productos` (
  `codProd` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(90) NOT NULL,
  `peso` double NOT NULL,
  `stock` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`codProd`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`codCat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `pedidos`
CREATE TABLE `pedidos` (
  `codPed` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `enviado` int(11) NOT NULL,
  `codRes` int(11) NOT NULL,
  PRIMARY KEY (`codPed`),
  KEY `restaurante` (`codRes`),
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`codRes`) REFERENCES `restaurante` (`codRes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `pedidosproducto`
CREATE TABLE `pedidosproducto` (
  `codPedProd` int(11) NOT NULL AUTO_INCREMENT,
  `pedido` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  PRIMARY KEY (`codPedProd`),
  UNIQUE KEY `pedido_producto` (`pedido`,`producto`),
  KEY `producto` (`producto`),
  CONSTRAINT `pedidosproducto_ibfk_1` FOREIGN KEY (`pedido`) REFERENCES `pedidos` (`codPed`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pedidosproducto_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `productos` (`codProd`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Finalizando la transacción
COMMIT;
