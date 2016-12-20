# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.26)
# Database: ph-betting
# Generation Time: 2016-12-20 04:13:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fr_id` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `maxRepDate` date DEFAULT NULL,
  `maxRepTime` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table markets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `markets`;

CREATE TABLE `markets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `fr_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT '',
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `betTillDate` date DEFAULT NULL,
  `betTillTime` time DEFAULT NULL,
  `lastUpdateDate` date DEFAULT NULL,
  `lastUpdateTime` time DEFAULT NULL,
  `placeAvailable` char(1) DEFAULT NULL,
  `forcastAvailable` char(1) DEFAULT NULL,
  `tricastAvailable` char(1) DEFAULT NULL,
  `eachwayAvailable` char(1) DEFAULT NULL,
  `cashoutAvailable` char(1) DEFAULT NULL,
  `startingPriceAvailable` char(1) DEFAULT NULL,
  `livePriceAvailable` char(1) DEFAULT NULL,
  `guarenteedPriceAvailable` char(1) DEFAULT NULL,
  `firstPriceAvailable` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table participants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `participants`;

CREATE TABLE `participants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `market_id` int(11) DEFAULT NULL,
  `fr_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `odds` varchar(100) DEFAULT NULL,
  `oddsDecimal` decimal(10,0) DEFAULT NULL,
  `lastUpdateDate` date DEFAULT NULL,
  `lastUpdateTime` time DEFAULT NULL,
  `handicap` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `fr_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `lastUpdateDate` date DEFAULT NULL,
  `lastUpdateTime` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
