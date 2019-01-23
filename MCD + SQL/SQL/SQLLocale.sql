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
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categorie` (
  `Id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `commandes` (
  `Id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `Date_commande` date NOT NULL,
  `Validation_commande` tinyint(1) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_commande`),
  KEY `Commandes_Visisteurs_Copie_FK` (`Id_visiteur`),
  CONSTRAINT `Commandes_Visisteurs_Copie_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaires_evenements`
--

DROP TABLE IF EXISTS `commentaires_evenements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `commentaires_evenements` (
  `Id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Contenu_commentaire` varchar(1000) NOT NULL,
  `Date_commentaire` date NOT NULL,
  `Id_manifestation` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_commentaire`),
  UNIQUE KEY `Id_commentaire_UNIQUE` (`Id_commentaire`),
  KEY `Commentaires_evenements_Manifestations_FK` (`Id_manifestation`),
  KEY `Commentaires_evenements_Visisteurs_Copie0_FK` (`Id_visiteur`),
  CONSTRAINT `Commentaires_evenements_Manifestations_FK` FOREIGN KEY (`Id_manifestation`) REFERENCES `manifestations` (`Id_manifestation`),
  CONSTRAINT `Commentaires_evenements_Visisteurs_Copie0_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires_evenements`
--

LOCK TABLES `commentaires_evenements` WRITE;
/*!40000 ALTER TABLE `commentaires_evenements` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires_evenements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaires_photos`
--

DROP TABLE IF EXISTS `commentaires_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `commentaires_photos` (
  `Id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Contenu_commentaire` varchar(1000) NOT NULL,
  `Date_commentaire` date NOT NULL,
  `Id_photo` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_commentaire`),
  UNIQUE KEY `Id_commentaire_UNIQUE` (`Id_commentaire`),
  KEY `Commentaires_photos_Photos_FK` (`Id_photo`),
  KEY `Commentaires_photos_Visisteurs_Copie0_FK` (`Id_visiteur`),
  CONSTRAINT `Commentaires_photos_Photos_FK` FOREIGN KEY (`Id_photo`) REFERENCES `photos` (`Id_photo`),
  CONSTRAINT `Commentaires_photos_Visisteurs_Copie0_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires_photos`
--

LOCK TABLES `commentaires_photos` WRITE;
/*!40000 ALTER TABLE `commentaires_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires_photos` ENABLE KEYS */;
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
  `Quantite` int(11) NOT NULL,
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
-- Table structure for table `etudiants_inscrits`
--

DROP TABLE IF EXISTS `etudiants_inscrits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `etudiants_inscrits` (
  `id_visiteur` int(11) NOT NULL,
  `id_manifestation` int(11) NOT NULL,
  PRIMARY KEY (`id_visiteur`,`id_manifestation`),
  KEY `id_manifestation_FK_idx` (`id_manifestation`),
  CONSTRAINT `id_manifestation_FK` FOREIGN KEY (`id_manifestation`) REFERENCES `manifestations` (`Id_manifestation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_visiteur_FK` FOREIGN KEY (`id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiants_inscrits`
--

LOCK TABLES `etudiants_inscrits` WRITE;
/*!40000 ALTER TABLE `etudiants_inscrits` DISABLE KEYS */;
/*!40000 ALTER TABLE `etudiants_inscrits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idees`
--

DROP TABLE IF EXISTS `idees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `idees` (
  `Id_idee` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_idee` varchar(50) NOT NULL,
  `Date_idee` date NOT NULL,
  `Nbr_votes` int(11) NOT NULL,
  `Contenu_idee` varchar(1000) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_idee`),
  UNIQUE KEY `Id_idee_UNIQUE` (`Id_idee`),
  KEY `Idees_Visisteurs_Copie_FK` (`Id_visiteur`),
  CONSTRAINT `Idees_Visisteurs_Copie_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
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
-- Table structure for table `likes_evenements`
--

DROP TABLE IF EXISTS `likes_evenements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `likes_evenements` (
  `Id_manifestation` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_manifestation`,`Id_visiteur`),
  KEY `Likes_evenements_Visisteurs_Copie0_FK` (`Id_visiteur`),
  CONSTRAINT `Likes_evenements_Manifestations_FK` FOREIGN KEY (`Id_manifestation`) REFERENCES `manifestations` (`Id_manifestation`),
  CONSTRAINT `Likes_evenements_Visisteurs_Copie0_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes_evenements`
--

LOCK TABLES `likes_evenements` WRITE;
/*!40000 ALTER TABLE `likes_evenements` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes_evenements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes_photos`
--

DROP TABLE IF EXISTS `likes_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `likes_photos` (
  `Id_photo` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_photo`,`Id_visiteur`),
  KEY `Likes_photos_Visisteurs_Copie0_FK` (`Id_visiteur`),
  CONSTRAINT `Likes_photos_Photos_FK` FOREIGN KEY (`Id_photo`) REFERENCES `photos` (`Id_photo`),
  CONSTRAINT `Likes_photos_Visisteurs_Copie0_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes_photos`
--

LOCK TABLES `likes_photos` WRITE;
/*!40000 ALTER TABLE `likes_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes_photos` ENABLE KEYS */;
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
  `Active` tinyint(1) NOT NULL DEFAULT '0',
  `Nbr_Likes` int(11) unsigned NOT NULL DEFAULT '0',
  `Nbr_Commentaires` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_manifestation`),
  KEY `Id_v_FK_idx` (`Id_Validateur`),
  KEY `Id_p_FK_idx` (`Id_Proposeur`),
  CONSTRAINT `Id_p_FK` FOREIGN KEY (`Id_Proposeur`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Id_v_FK` FOREIGN KEY (`Id_Validateur`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `notifications` (
  `Id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `Id_notificateur` int(11) NOT NULL,
  `Id_notifie` int(11) NOT NULL,
  `Type_notif` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`),
  KEY `Id_notificateur_FK_idx` (`Id_notificateur`),
  KEY `Id_notifie_FK_idx` (`Id_notifie`),
  CONSTRAINT `Id_notificateur_FK` FOREIGN KEY (`Id_notificateur`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Id_notifie_FK` FOREIGN KEY (`Id_notifie`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
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
  `Nbr_likes` int(11) NOT NULL,
  `Nbr_commentaires` int(11) NOT NULL,
  `Id_manifestation` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_photo`),
  UNIQUE KEY `Id_photo_UNIQUE` (`Id_photo`),
  KEY `Photos_Manifestations_FK` (`Id_manifestation`),
  KEY `Photos_Visisteurs_Copie0_FK` (`Id_visiteur`),
  CONSTRAINT `Photos_Manifestations_FK` FOREIGN KEY (`Id_manifestation`) REFERENCES `manifestations` (`Id_manifestation`),
  CONSTRAINT `Photos_Visisteurs_Copie0_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
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
  `Image_produit` varchar(50) NOT NULL,
  `Id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`Id_produit`),
  UNIQUE KEY `Id_produit_UNIQUE` (`Id_produit`),
  KEY `Produits_Categorie_FK` (`Id_categorie`),
  CONSTRAINT `Produits_Categorie_FK` FOREIGN KEY (`Id_categorie`) REFERENCES `categorie` (`Id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiteurs_copie`
--

DROP TABLE IF EXISTS `visiteurs_copie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `visiteurs_copie` (
  `Id_visiteur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Access` int(11) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_visiteur`),
  UNIQUE KEY `Id_visiteur_UNIQUE` (`Id_visiteur`),
  KEY `INDEX` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteurs_copie`
--

LOCK TABLES `visiteurs_copie` WRITE;
/*!40000 ALTER TABLE `visiteurs_copie` DISABLE KEYS */;
/*!40000 ALTER TABLE `visiteurs_copie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `voter` (
  `Id_idee` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_idee`,`Id_visiteur`),
  KEY `Voter_Visisteurs_Copie0_FK` (`Id_visiteur`),
  CONSTRAINT `Voter_Idees_FK` FOREIGN KEY (`Id_idee`) REFERENCES `idees` (`Id_idee`),
  CONSTRAINT `Voter_Visisteurs_Copie0_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voter`
--

LOCK TABLES `voter` WRITE;
/*!40000 ALTER TABLE `voter` DISABLE KEYS */;
/*!40000 ALTER TABLE `voter` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-23 18:44:30
