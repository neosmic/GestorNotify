# Host: localhost  (Version 5.7.17-log)
# Date: 2020-03-09 12:09:23
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_ugn` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish_ci DEFAULT '11',
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT '11',
  PRIMARY KEY (`id_ugn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1000,'leo','6ad3a9478f1c41621cc342d325bc73ed825e0c69'),(2000,'javier','24a9038b8a8a4fba82234bde1a82f4539267f3ce');
