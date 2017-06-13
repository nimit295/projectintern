# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: yii2training
# Generation Time: 2015-10-06 02:06:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table music
# ------------------------------------------------------------

DROP TABLE IF EXISTS `music`;

CREATE TABLE `music` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT 'ชื่อ',
  `authoor` varchar(150) DEFAULT NULL COMMENT 'ผู้แต่ง',
  `price` float DEFAULT NULL COMMENT 'ราคา',
  `date` int(11) DEFAULT NULL COMMENT 'วันที่',
  `producer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `music` WRITE;
/*!40000 ALTER TABLE `music` DISABLE KEYS */;

INSERT INTO `music` (`id`, `name`, `authoor`, `price`, `date`, `producer`)
VALUES
	(1,'','ggff',NULL,NULL,NULL),
	(2,'','',NULL,NULL,''),
	(3,'','',NULL,NULL,''),
	(4,'','',NULL,NULL,''),
	(5,'','',NULL,NULL,''),
	(6,'','',NULL,NULL,''),
	(7,'','',NULL,NULL,''),
	(8,'','',NULL,NULL,''),
	(9,'','',NULL,NULL,''),
	(10,'','',NULL,NULL,''),
	(11,'','',NULL,NULL,''),
	(12,'','',NULL,NULL,''),
	(13,'','',NULL,NULL,''),
	(14,'','',NULL,NULL,''),
	(15,'','',NULL,NULL,''),
	(16,'','',NULL,NULL,'');

/*!40000 ALTER TABLE `music` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
