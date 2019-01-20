-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: bde_nationale
-- ------------------------------------------------------
-- Server version	5.7.23-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `centres`
--

DROP TABLE IF EXISTS `centres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `centres` (
  `Id_centre` int(11) NOT NULL AUTO_INCREMENT,
  `Ville_centre` varchar(25) NOT NULL,
  `Telephone_centre` varchar(25) NOT NULL,
  `Email_centre` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_centre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centres`
--

LOCK TABLES `centres` WRITE;
/*!40000 ALTER TABLE `centres` DISABLE KEYS */;
INSERT INTO `centres` VALUES (1,'Alger','055555555','algerie@viacesi.fr');
/*!40000 ALTER TABLE `centres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `visiteurs` (
  `Id_visiteur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Id_centre` int(11) NOT NULL,
  `Access` int(11) NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_visiteur`),
  KEY `Visiteurs_CENTRES_FK` (`Id_centre`),
  CONSTRAINT `Visiteurs_CENTRES_FK` FOREIGN KEY (`Id_centre`) REFERENCES `centres` (`Id_centre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteurs`
--

LOCK TABLES `visiteurs` WRITE;
/*!40000 ALTER TABLE `visiteurs` DISABLE KEYS */;
INSERT INTO `visiteurs` VALUES (1,'Giovana','Giorno','jojo@jojo.jojo','ILVAMOURIR',1,0,NULL),(2,'S','P','P','Moncef',1,0,NULL);
/*!40000 ALTER TABLE `visiteurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-20 19:25:15
