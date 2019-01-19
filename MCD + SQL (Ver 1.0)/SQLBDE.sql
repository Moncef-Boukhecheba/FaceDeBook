-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: bde_alger
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
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `commandes` (
  `Id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `Date_commande` date DEFAULT NULL,
  `Validation_commande` tinyint(1) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  `Prix_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_commande`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
INSERT INTO `commandes` VALUES (1,'2018-01-08',0,2,NULL),(2,'2018-01-08',0,2,NULL);
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `commentaires` (
  `Id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Contenu_commentaire` varchar(1000) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  `Id_photo` int(11) NOT NULL,
  PRIMARY KEY (`Id_commentaire`),
  KEY `Commentaires_Photos_FK` (`Id_photo`),
  CONSTRAINT `Commentaires_Photos_FK` FOREIGN KEY (`Id_photo`) REFERENCES `photos` (`Id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires`
--

LOCK TABLES `commentaires` WRITE;
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concerner`
--

DROP TABLE IF EXISTS `concerner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `concerner` (
  `Id_produit` int(11) NOT NULL,
  `Id_commande` int(11) NOT NULL,
  PRIMARY KEY (`Id_produit`,`Id_commande`),
  KEY `Concerner_Commandes0_FK` (`Id_commande`),
  CONSTRAINT `Concerner_Commandes0_FK` FOREIGN KEY (`Id_commande`) REFERENCES `commandes` (`Id_commande`),
  CONSTRAINT `Concerner_Produits_FK` FOREIGN KEY (`Id_produit`) REFERENCES `produits` (`Id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concerner`
--

LOCK TABLES `concerner` WRITE;
/*!40000 ALTER TABLE `concerner` DISABLE KEYS */;
/*!40000 ALTER TABLE `concerner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idees`
--

DROP TABLE IF EXISTS `idees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `idees` (
  `Id_idee` int(11) NOT NULL AUTO_INCREMENT,
  `Date_idee` date NOT NULL,
  `Nbr_votes` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_idee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idees`
--

LOCK TABLES `idees` WRITE;
/*!40000 ALTER TABLE `idees` DISABLE KEYS */;
/*!40000 ALTER TABLE `idees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `likes` (
  `Id_like` int(11) NOT NULL AUTO_INCREMENT,
  `Id_visiteur` int(11) NOT NULL,
  `Id_photo` int(11) NOT NULL,
  PRIMARY KEY (`Id_like`),
  KEY `Likes_Photos_FK` (`Id_photo`),
  CONSTRAINT `Likes_Photos_FK` FOREIGN KEY (`Id_photo`) REFERENCES `photos` (`Id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manifestations`
--

DROP TABLE IF EXISTS `manifestations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `manifestations` (
  `Id_manifestation` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Validateur` int(11) NOT NULL,
  `Id_Proposeur` int(11) NOT NULL,
  `Contenu_manifestation` varchar(5000) NOT NULL,
  `Date_manifestation` date NOT NULL,
  `Image_manifestation` varchar(255) NOT NULL,
  `Type_manifestation` varchar(25) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_manifestation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifestations`
--

LOCK TABLES `manifestations` WRITE;
/*!40000 ALTER TABLE `manifestations` DISABLE KEYS */;
/*!40000 ALTER TABLE `manifestations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nofifications`
--

DROP TABLE IF EXISTS `nofifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `nofifications` (
  `Id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `Contenu_notif` varchar(1000) NOT NULL,
  `Type_notif` varchar(25) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nofifications`
--

LOCK TABLES `nofifications` WRITE;
/*!40000 ALTER TABLE `nofifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `nofifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `photos` (
  `Id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `Chemin_photo` varchar(255) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `produits` (
  `Id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_produit` varchar(100) NOT NULL,
  `Description_produit` varchar(1000) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Image_produit` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'PC GAMER','C\'est un PC GAMER qui permet de jouer à tous les jeux du moments comme fortnite ou call of dutie, je repete, C\'est un PC GAMER qui permet de jouer à tous les jeux du moments comme fortnite ou call of dutie !!',15000,'Electronique','/Pc_gamer.jpg'),(2,'Coupe-haies très très aigisé','Un coupe haie très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très aigisé',15000,'Jardinage','/coupehaies.jpg'),(3,'Coupe-humain très très aigisé','Un coupe humain très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très très aigisé',15000,'Jardinage','/coupehmuain.jpg');
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `votes` (
  `Id_vote` int(11) NOT NULL AUTO_INCREMENT,
  `Id_visiteur` int(11) NOT NULL,
  `Id_idee` int(11) NOT NULL,
  PRIMARY KEY (`Id_vote`),
  KEY `Votes_Idees_FK` (`Id_idee`),
  CONSTRAINT `Votes_Idees_FK` FOREIGN KEY (`Id_idee`) REFERENCES `idees` (`Id_idee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votes`
--

LOCK TABLES `votes` WRITE;
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-19 16:49:52
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
INSERT INTO `visiteurs` VALUES (1,'Giovana','Giorno','jojo@jojo.jojo','ILVAMOURIR',1,0),(2,'S','P','P','Moncef',1,0);
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

-- Dump completed on 2019-01-19 16:49:52
