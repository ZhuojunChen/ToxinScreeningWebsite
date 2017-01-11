# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: toxin_screening
# Generation Time: 2016-02-22 22:14:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table plate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plate`;

CREATE TABLE `plate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chemical` varchar(75) NOT NULL DEFAULT '',
  `run` int(1) NOT NULL,
  `worm_type` varchar(5) NOT NULL DEFAULT '',
  `day` int(2) NOT NULL,
  `date` date NOT NULL,
  `pharynx` varchar(48) DEFAULT NULL,
  `phototaxis` longtext,
  `thermotaxis` longtext,
  `IOL` longtext,
  `curvature` varchar(48) DEFAULT NULL,
  `eyes` varchar(48) DEFAULT NULL,
  `behavior` varchar(1) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `plateID` bigint(12) unsigned zerofill NOT NULL DEFAULT '000000000001',
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `concA` decimal(12,4) DEFAULT NULL,
  `concB` decimal(12,4) DEFAULT NULL,
  `concC` decimal(12,4) DEFAULT NULL,
  `concD` decimal(12,4) DEFAULT NULL,
  `concE` decimal(12,4) DEFAULT NULL,
  `concF` decimal(12,4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
