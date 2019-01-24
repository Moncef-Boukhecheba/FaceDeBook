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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Divers'),(2,'Informatique'),(3,'Electronique'),(4,'Pulls'),(5,'Pantalons');
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
  KEY `Id_commande` (`Id_commande`),
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
  KEY `Id_commentaire` (`Id_commentaire`),
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
  KEY `Id_commentaire` (`Id_commentaire`),
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
  KEY `Id_produit` (`Id_produit`),
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
  `Date_idee` date NOT NULL,
  `Nbr_votes` int(11) unsigned NOT NULL DEFAULT '0',
  `Contenu_idee` varchar(1000) NOT NULL,
  `Id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`Id_idee`),
  UNIQUE KEY `Id_idee_UNIQUE` (`Id_idee`),
  KEY `Idees_Visisteurs_Copie_FK` (`Id_visiteur`),
  KEY `Id_idee` (`Id_idee`),
  CONSTRAINT `Idees_Visisteurs_Copie_FK` FOREIGN KEY (`Id_visiteur`) REFERENCES `visiteurs_copie` (`Id_visiteur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idees`
--

LOCK TABLES `idees` WRITE;
/*!40000 ALTER TABLE `idees` DISABLE KEYS */;
INSERT INTO `idees` VALUES (1,'2019-01-24',0,'Ce serait cool de faire un gros tournoi fifa, je joue pas à fifa mais je vais vous louer ma PS4 pour l\'occasion',1),(2,'2019-01-24',0,'L\'équipe, déjà je peux statistiquement pas être loup mais hadik ça a pas de rapport avec notre situation actuelle des choses, wella si, lmohim ana 7abit necreyi jeu chkoun m3aya ?',2),(3,'2019-01-24',0,'Hey les jeunes ça vous dirait qu\'on fasse un mega blind test ? Berk les animes c\'est mort et Reyhan il fait l\'arbitre (psk sinon il va shazamer) ',4),(4,'2019-01-24',0,'POOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO',3);
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
  `Titre_manifestation` varchar(100) NOT NULL,
  `Contenu_manifestation` varchar(5000) NOT NULL,
  `Date_manifestation` date NOT NULL,
  `Image_manifestation` varchar(255) NOT NULL,
  `Active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `Nbr_Likes` int(11) unsigned NOT NULL DEFAULT '0',
  `Nbr_Commentaires` int(11) unsigned NOT NULL DEFAULT '0',
  `Payante` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `Reccurrente` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_manifestation`),
  KEY `Id_v_FK_idx` (`Id_Validateur`),
  KEY `Id_p_FK_idx` (`Id_Proposeur`),
  KEY `Id_manifestation` (`Id_manifestation`),
  CONSTRAINT `Id_p_FK` FOREIGN KEY (`Id_Proposeur`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Id_v_FK` FOREIGN KEY (`Id_Validateur`) REFERENCES `visiteurs_copie` (`Id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifestations`
--

LOCK TABLES `manifestations` WRITE;
/*!40000 ALTER TABLE `manifestations` DISABLE KEYS */;
INSERT INTO `manifestations` VALUES (1,4,4,'Lan game au CESI EXIA','Rendez-vous le samedi 9 février 2019 de 13h00 à 20h00 sur le campus CESI d\'Alger pour participer à une LAN GAME organisée par le BDE (Bureau des Étudiants) du campus.\r\n\r\nAU PROGRAMME : \r\n\r\nTournoi de Counter-Strike : Global Offensive\r\nTournoi de League of Legends\r\nTournoi de Rocket League\r\nTournoi de Hearthstone\r\nTournoi de Naruto Storm\r\nTournoi de Street Fighter\r\nTournoi de Mortal Kombat\r\n\r\nTout ça en 2h et demi dans la vie associative.','2019-01-24','langame.jpg',0,0,0,0,0),(2,2,2,'La Cybersécurité au quotidien dans les entreprises','CESI Ecole d’ingénieurs vous invite à cette conférence gratuite animée par Sebastien VIOU et Florent FELS, le mardi 15 janvier 2019 à 18h.\r\nLa Cybersécurité est aujourd’hui un enjeu majeur pour les entreprises: aussi bien pour les grands groupes souvent sujets à des attaques, que pour les PME/ETI qui auraient des difficultés à se remettre de telles agressions.\r\n\r\nLes menaces sont nombreuses : déni de service, mails malveillants, piratages et fuites de données, détournement d’usages de serveurs, manipulation de crypto-monnaie… Le département cybersécurité joue donc un rôle crucial et critique dans l’entreprises en protégeant son patrimoine et sa capacité commerciale. Et pour garantir l’intégrité des systèmes IT et des données, il doit être en mesure d’anticiper les menaces et de réagir rapidement face aux attaques.\r\n\r\nRiches de leurs expérience chez SFR et EDF, Sebastien VIOU et Florent FELS – Gestionnaire du Système d’information vous présenteront:\r\n\r\nLa Cybersécurité au quotidien dans les entreprises\r\n\r\n1. Comprendre la Cybersécurité\r\n2. Se protéger et protéger ses clients\r\n3. Les métiers de la Cybersécurité\r\n\r\nUn apéritif clôturera cet événement aux alentours de 19h30.','2019-01-24','cybersecurite.jpg',1,0,0,1,0),(3,3,3,'SAVE THE DATE !','La promotion Manager des Systèmes d’Information de CESI Nanterre organise une conférence le jeudi 24 janvier.\r\n\r\nLes sujets porteront sur : – l’Intelligence Artificielle, – le RGPD, – l’impact de l’IT sur nos vies.\r\n\r\nInscrivez-vous : https://lnkd.in/gjh7rSR\r\n\r\nNous vous attendons nombreux !','2019-01-28','ia.jpg',1,0,0,0,0),(4,1,1,'Conférence : L’Entreprise 2.0 : Les objets connectés\r\n','les élèves de 5° années de l’École d’Ingénieurs CESI, spécialité informatique, organisent une conférence sur les objets connectés dans les systèmes d’informations.\r\n\r\nCelle-ci aura lieu lieu salle 2, au CESI d’Orléans, le 29 novembre à 16H.\r\n\r\nUn buffet sera servi à l’issue de l’événement.\r\n\r\nLe lien d’inscription est le suivant : https://docs.google.com/forms/d/e/1FAIpQLSch34YaudvuGpifrU70-RsLnS9p-JY3NiLf5r_IVjr8vFvvDg/viewform\r\n\r\nOn vous attend nombreux !','2019-01-30','acar.jpg',1,0,0,0,1);
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
  KEY `Id_photo` (`Id_photo`),
  KEY `Id_manifestation` (`Id_manifestation`),
  KEY `Id_visiteur` (`Id_visiteur`),
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
  KEY `Id_produit` (`Id_produit`),
  CONSTRAINT `Produits_Categorie_FK` FOREIGN KEY (`Id_categorie`) REFERENCES `categorie` (`Id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (3,'Mug (I <3 EXIA)','Un magnifique Mug qui ira avec tout ce que vous portez, autant dire qu\'il fait largement.. le café ! HA !',35,'mug.jpg',1),(4,'Laptop I7 6700k GTX 1060 GAMER EDITION','Ce laptop est un assez bon laptop, parfait pour jouer au démineur.',1500,'laptop.jpg',2),(5,'Pull CESI EXIA','Un magnifique pull rouge qui ira bien avec tout ce qui est bleu, noir, et rouge.',45,'pull_cesi.jpg',4),(6,'Pantalon CESI EXIA','Ce pantalon est un des rares vetements qui vont avec le pull que vous avez sans doute acheté auprès de nous.',800,'pantalon_cesi.jpg',5);
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signalements_comm_e`
--

DROP TABLE IF EXISTS `signalements_comm_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `signalements_comm_e` (
  `Id_notif` int(11) NOT NULL,
  `Id_commentaire` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`,`Id_commentaire`),
  KEY `Id_commentaire_FK_idx` (`Id_commentaire`),
  CONSTRAINT `Id_commentaire_FK` FOREIGN KEY (`Id_commentaire`) REFERENCES `commentaires_evenements` (`Id_commentaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Id_notification_FK` FOREIGN KEY (`Id_notif`) REFERENCES `notifications` (`Id_notif`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signalements_comm_e`
--

LOCK TABLES `signalements_comm_e` WRITE;
/*!40000 ALTER TABLE `signalements_comm_e` DISABLE KEYS */;
/*!40000 ALTER TABLE `signalements_comm_e` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signalements_comm_p`
--

DROP TABLE IF EXISTS `signalements_comm_p`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `signalements_comm_p` (
  `Id_notif` int(11) NOT NULL,
  `Id_commentaire` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`,`Id_commentaire`),
  KEY `Id_commentaire_idx` (`Id_commentaire`),
  CONSTRAINT `Id_commentaire` FOREIGN KEY (`Id_commentaire`) REFERENCES `commentaires_photos` (`Id_commentaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Id_notif_FK` FOREIGN KEY (`Id_notif`) REFERENCES `notifications` (`Id_notif`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signalements_comm_p`
--

LOCK TABLES `signalements_comm_p` WRITE;
/*!40000 ALTER TABLE `signalements_comm_p` DISABLE KEYS */;
/*!40000 ALTER TABLE `signalements_comm_p` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signalements_manifestation`
--

DROP TABLE IF EXISTS `signalements_manifestation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `signalements_manifestation` (
  `Id_notif` int(11) NOT NULL,
  `Id_manifestation` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`,`Id_manifestation`),
  KEY `fkf_idx` (`Id_manifestation`),
  KEY `fkn_idx` (`Id_notif`),
  CONSTRAINT `fkf` FOREIGN KEY (`Id_manifestation`) REFERENCES `manifestations` (`Id_manifestation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkn` FOREIGN KEY (`Id_notif`) REFERENCES `notifications` (`Id_notif`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signalements_manifestation`
--

LOCK TABLES `signalements_manifestation` WRITE;
/*!40000 ALTER TABLE `signalements_manifestation` DISABLE KEYS */;
/*!40000 ALTER TABLE `signalements_manifestation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signalements_photos`
--

DROP TABLE IF EXISTS `signalements_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `signalements_photos` (
  `Id_notif` int(11) NOT NULL,
  `Id_photo` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`,`Id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signalements_photos`
--

LOCK TABLES `signalements_photos` WRITE;
/*!40000 ALTER TABLE `signalements_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `signalements_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validation_idee`
--

DROP TABLE IF EXISTS `validation_idee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `validation_idee` (
  `Id_notif` int(11) NOT NULL,
  `Id_manifestation` int(11) NOT NULL,
  PRIMARY KEY (`Id_notif`,`Id_manifestation`),
  KEY `Fkfm_idx` (`Id_manifestation`),
  KEY `Fkfn_idx` (`Id_notif`),
  CONSTRAINT `Fkfm` FOREIGN KEY (`Id_manifestation`) REFERENCES `manifestations` (`Id_manifestation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Fkfn` FOREIGN KEY (`Id_notif`) REFERENCES `notifications` (`Id_notif`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validation_idee`
--

LOCK TABLES `validation_idee` WRITE;
/*!40000 ALTER TABLE `validation_idee` DISABLE KEYS */;
/*!40000 ALTER TABLE `validation_idee` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteurs_copie`
--

LOCK TABLES `visiteurs_copie` WRITE;
/*!40000 ALTER TABLE `visiteurs_copie` DISABLE KEYS */;
INSERT INTO `visiteurs_copie` VALUES (1,'Boukhecheba','Moncef','moncefbkb@gmail.com','Moncef6',3,'moncef.jpg'),(2,'Chellouf','Reyhan','Johndoe69@gmail.com','Reyhan6',3,'reyhan.jpg'),(3,'Ouldslimane','Lamine','laminepoo@gmail.com','Lamine6',3,'lamine.jpg'),(4,'Meftahi','Samy','maclesamy@gmail.com','Samy6',3,'samy.jpg');
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

-- Dump completed on 2019-01-24 22:33:52
