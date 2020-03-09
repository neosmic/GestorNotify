# Host: localhost  (Version 5.7.17-log)
# Date: 2020-03-09 12:09:11
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "notas"
#

DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `nota_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_spanish_ci DEFAULT 'Nueva Nota',
  `contenido` longtext COLLATE utf8_spanish_ci,
  `categoria` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaCreacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaEliminacion` datetime DEFAULT NULL,
  `usuario_ID` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`nota_id`),
  KEY `titulo` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "notas"
#

INSERT INTO `notas` VALUES (1,'Nueva Nota','Esta es la nota de prueba','Principal','2020-03-08 16:36:40','2020-03-09 14:01:32',NULL),(2,'Segunda Nota','Esta es la nota de reemplazo','Principal','2020-03-08 16:37:25',NULL,NULL);
