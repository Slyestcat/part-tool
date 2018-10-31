-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: samsung
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `SMG920`
--

DROP TABLE IF EXISTS `SMG920`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG920` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG925`
--

DROP TABLE IF EXISTS `SMG925`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG925` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG928`
--

DROP TABLE IF EXISTS `SMG928`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG928` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG930`
--

DROP TABLE IF EXISTS `SMG930`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG930` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG935`
--

DROP TABLE IF EXISTS `SMG935`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG935` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG950`
--

DROP TABLE IF EXISTS `SMG950`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG950` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG955`
--

DROP TABLE IF EXISTS `SMG955`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG955` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(32) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG960`
--

DROP TABLE IF EXISTS `SMG960`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG960` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(32) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMG965`
--

DROP TABLE IF EXISTS `SMG965`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMG965` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(32) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMN920`
--

DROP TABLE IF EXISTS `SMN920`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMN920` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(2) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMN950`
--

DROP TABLE IF EXISTS `SMN950`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMN950` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(32) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SMN960`
--

DROP TABLE IF EXISTS `SMN960`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMN960` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partNum` varchar(32) NOT NULL,
  `partType` varchar(32) NOT NULL,
  `partQuantity` int(16) NOT NULL,
  `partColor` varchar(32) DEFAULT NULL,
  `partBuyer` varchar(32) DEFAULT NULL,
  `partBin` int(16) NOT NULL,
  `note` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-31  7:56:07
