-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: animal_shelter
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adoptii`
--

DROP TABLE IF EXISTS `adoptii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adoptii` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_adoptie` date NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tip_adoptie` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pet` (`id_pet`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `adoptii_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`),
  CONSTRAINT `adoptii_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoptii`
--

LOCK TABLES `adoptii` WRITE;
/*!40000 ALTER TABLE `adoptii` DISABLE KEYS */;
/*!40000 ALTER TABLE `adoptii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adoptii_distanta`
--

DROP TABLE IF EXISTS `adoptii_distanta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adoptii_distanta` (
  `id` int(11) NOT NULL,
  `perioada` varchar(50) NOT NULL,
  `id_adoptie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adoptie` (`id_adoptie`),
  CONSTRAINT `adoptii_distanta_ibfk_1` FOREIGN KEY (`id_adoptie`) REFERENCES `adoptii` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoptii_distanta`
--

LOCK TABLES `adoptii_distanta` WRITE;
/*!40000 ALTER TABLE `adoptii_distanta` DISABLE KEYS */;
/*!40000 ALTER TABLE `adoptii_distanta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie_utilizator`
--

DROP TABLE IF EXISTS `categorie_utilizator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie_utilizator` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `redirect` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie_utilizator`
--

LOCK TABLES `categorie_utilizator` WRITE;
/*!40000 ALTER TABLE `categorie_utilizator` DISABLE KEYS */;
INSERT INTO `categorie_utilizator` VALUES (0,'vizitator','index.html'),(1,'user','index.html'),(2,'admin','admin_dashboard.html');
/*!40000 ALTER TABLE `categorie_utilizator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donatii_online`
--

DROP TABLE IF EXISTS `donatii_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donatii_online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `suma` decimal(10,2) NOT NULL,
  `data_donatie` date NOT NULL,
  `recurenta` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `donatii_online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donatii_online`
--

LOCK TABLES `donatii_online` WRITE;
/*!40000 ALTER TABLE `donatii_online` DISABLE KEYS */;
/*!40000 ALTER TABLE `donatii_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drepturi`
--

DROP TABLE IF EXISTS `drepturi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drepturi` (
  `id` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `categorie_utilizator` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pagina` (`id_pagina`),
  KEY `categorie_utilizator` (`categorie_utilizator`),
  CONSTRAINT `drepturi_ibfk_1` FOREIGN KEY (`id_pagina`) REFERENCES `pagini` (`id`),
  CONSTRAINT `drepturi_ibfk_2` FOREIGN KEY (`categorie_utilizator`) REFERENCES `categorie_utilizator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drepturi`
--

LOCK TABLES `drepturi` WRITE;
/*!40000 ALTER TABLE `drepturi` DISABLE KEYS */;
/*!40000 ALTER TABLE `drepturi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pet` (`id_pet`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`),
  CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formular`
--

DROP TABLE IF EXISTS `formular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formular` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_completare` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formular`
--

LOCK TABLES `formular` WRITE;
/*!40000 ALTER TABLE `formular` DISABLE KEYS */;
/*!40000 ALTER TABLE `formular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagini`
--

DROP TABLE IF EXISTS `pagini`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pagini` (
  `id` int(11) NOT NULL,
  `nume_pagina` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `categorie_utilizator` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_utilizator` (`categorie_utilizator`),
  CONSTRAINT `pagini_ibfk_1` FOREIGN KEY (`categorie_utilizator`) REFERENCES `categorie_utilizator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagini`
--

LOCK TABLES `pagini` WRITE;
/*!40000 ALTER TABLE `pagini` DISABLE KEYS */;
INSERT INTO `pagini` VALUES (1,'Home','index.html',0),(2,'Home','index.html',1),(3,'Dashboard','admin_dashboard.html',2),(4,'Adopta','adopta.html',1),(5,'Adopta','adopta.html',0),(6,'Doneaza online','doneaza_online.html',0),(7,'Doneaza online','doneaza_online.html',1),(8,'Formularul 230','redirect.html',1),(9,'Formularul 230','redirect.html',0),(10,'Contacteaza adapostul','contact.html',0),(11,'Contacteaza adapostul','contact.html',1),(12,'Log in','log_in.php',0),(13,'Log in','log_in.php',1),(14,'Log in','log_in.php',2),(15,'Gestiune animale','admin_pets.php',2),(16,'Gestiune animale','admin_actionPet.php',2),(17,'Gestiune adoptii fizice','admin_actionAdoptiiFizice.html',2),(18,'Gestiune adoptii fizice','admin_adoptiiFizice.php',2),(19,'Gestiune utilizatori','admin_usersCustomers.html',2),(20,'Gestiune utilizatori','admin_actionUser.html',2),(21,'Gestiune donatii','admin_donatiiOnline.html',2),(22,'Gestiune donatii','admin_actionDonatiiOnline.html',2);
/*!40000 ALTER TABLE `pagini` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pet`
--

DROP TABLE IF EXISTS `pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `specie` varchar(50) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `varsta` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `talie` varchar(20) NOT NULL,
  `temperament` varchar(50) NOT NULL,
  `data_intrare` date NOT NULL,
  `descriere` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `poza` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pet`
--

LOCK TABLES `pet` WRITE;
/*!40000 ALTER TABLE `pet` DISABLE KEYS */;
/*!40000 ALTER TABLE `pet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsori`
--

DROP TABLE IF EXISTS `sponsori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sponsori` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `poza` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsori`
--

LOCK TABLES `sponsori` WRITE;
/*!40000 ALTER TABLE `sponsori` DISABLE KEYS */;
/*!40000 ALTER TABLE `sponsori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsorizari`
--

DROP TABLE IF EXISTS `sponsorizari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sponsorizari` (
  `id` int(11) NOT NULL,
  `id_sponsor` int(11) NOT NULL,
  `id_factura` varchar(50) DEFAULT NULL,
  `suma` decimal(10,0) NOT NULL,
  `data_sponsorizare` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sponsor` (`id_sponsor`),
  CONSTRAINT `sponsorizari_ibfk_1` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsori` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsorizari`
--

LOCK TABLES `sponsorizari` WRITE;
/*!40000 ALTER TABLE `sponsorizari` DISABLE KEYS */;
/*!40000 ALTER TABLE `sponsorizari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `data_inscriere` date DEFAULT NULL,
  `poza` varchar(255) DEFAULT NULL,
  `categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`),
  CONSTRAINT `categorie` FOREIGN KEY (`categorie`) REFERENCES `categorie_utilizator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'animal_shelter'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-04 16:44:25
