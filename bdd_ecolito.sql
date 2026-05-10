CREATE DATABASE IF NOT EXISTS `dbb2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbb2`;
-- MySQL dump 10.13  Distrib 8.0.45, for Win64 (x86_64)
--
-- Host: mysql-2d18551f-web-ac93.e.aivencloud.com    Database: dbb2
-- ------------------------------------------------------
-- Server version	8.0.45

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
-- SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

-- SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '0f64fdf7-2bc5-11f1-a8dd-ae8d3b1e5091:1-85,
-- 21d17180-2ce3-11f1-be8a-cefec572a497:1-85,
-- 48029db0-4707-11f1-a138-5a6cac6f1452:1-30';

--
-- Table structure for table `achats`
--

DROP TABLE IF EXISTS `achats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `achats` (
  `id` int NOT NULL AUTO_INCREMENT,
  `smartphone` int NOT NULL,
  `tablette` int NOT NULL,
  `cosmetique` int NOT NULL,
  `achat_en_livraison` int NOT NULL,
  `electromenager` int NOT NULL,
  `veste` int NOT NULL,
  `manteau` int NOT NULL,
  `jean` int NOT NULL,
  `chaussures` int NOT NULL,
  `livre` int NOT NULL,
  `journal` int NOT NULL,
  `velo_mecanique` int NOT NULL,
  `velo_electrique` int NOT NULL,
  `television` int NOT NULL,
  `tshirt` int NOT NULL,
  `pantalon` int NOT NULL,
  `pull` int NOT NULL,
  `date` date NOT NULL,
  `iduser` int NOT NULL,
  `infos` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achats`
--

LOCK TABLES `achats` WRITE;
/*!40000 ALTER TABLE `achats` DISABLE KEYS */;
INSERT INTO `achats` VALUES (1,0,1,0,8,0,0,0,0,0,0,0,0,0,0,0,8,0,'2026-04-01',14,NULL),(2,1,1,10,1,2,0,0,1,1,2,0,0,0,0,2,0,1,'2026-04-02',18,NULL),(3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2026-04-02',14,'j\'ai acheté un pull en livraion (seconde main) sur vinted'),(4,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2026-04-16',14,NULL),(5,0,3,0,8,0,0,0,0,0,0,0,0,0,0,0,0,0,'2026-05-03',14,'je me suis fais livré 8 assietes');
/*!40000 ALTER TABLE `achats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conso_aliments`
--

DROP TABLE IF EXISTS `conso_aliments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conso_aliments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `poulet` double NOT NULL,
  `boeuf` double NOT NULL,
  `fromage` double NOT NULL,
  `pates` double NOT NULL,
  `riz` double NOT NULL,
  `oeufs` double NOT NULL,
  `pommedeterre` double NOT NULL,
  `salade` double NOT NULL,
  `tomate` double NOT NULL,
  `oignons` double NOT NULL,
  `pomme` double NOT NULL,
  `poire` double NOT NULL,
  `orange` double NOT NULL,
  `raisin` double NOT NULL,
  `cafe` double NOT NULL,
  `lait` double NOT NULL,
  `date` date NOT NULL,
  `id_user` int NOT NULL,
  `infos` longtext COLLATE utf8mb4_unicode_ci,
  `poisson` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conso_aliments`
--

LOCK TABLES `conso_aliments` WRITE;
/*!40000 ALTER TABLE `conso_aliments` DISABLE KEYS */;
INSERT INTO `conso_aliments` VALUES (1,0,10,5,1,0,0,0,0,0,0,3,0,0,0,0,0,'2026-04-01',14,NULL,0),(2,0.8,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2026-04-02',14,NULL,0),(4,0,0,0.3,0.2,0.3,2,1,0.6,0,0,4.1,0,0,0,0,0,'2026-04-02',14,'consommation hebdomadaire',0.5);
/*!40000 ALTER TABLE `conso_aliments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conso_perso`
--

DROP TABLE IF EXISTS `conso_perso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conso_perso` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `informations` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conso_perso`
--

LOCK TABLES `conso_perso` WRITE;
/*!40000 ALTER TABLE `conso_perso` DISABLE KEYS */;
INSERT INTO `conso_perso` VALUES (1,'2026-03-31','ok',1),(2,'2026-03-31','mppppppppppppppppppppppppppppppppppmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm',1),(3,'2026-03-31','Le 19 mai j\'ai pris l\'avion de pekin a montpellier.',1),(4,'2026-04-01','j\'ai une peugot 308 et j\'ai fait 13km en voiture le 1er juin 2018',14),(5,'2026-04-02','J\'utilise 1 fois le week-end ma voiture mais pour faire les courses (Joinville -Bry), sinon tout le reste du temps je prends les transports en commun (le vélo pour aller de Joinville à Créteil, le bus de Joinville à Champigny, le RER pour aller à mon travail de Joinville à Ivry)',18);
/*!40000 ALTER TABLE `conso_perso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20250122155247','2026-03-30 01:16:41',525),('DoctrineMigrations\\Version20260311103937','2026-03-30 01:16:42',205),('DoctrineMigrations\\Version20260311161858','2026-03-30 01:16:42',102),('DoctrineMigrations\\Version20260311162138','2026-03-30 01:16:43',103),('DoctrineMigrations\\Version20260311162710','2026-03-30 01:16:43',102),('DoctrineMigrations\\Version20260316105239','2026-03-30 01:16:43',102),('DoctrineMigrations\\Version20260316111032','2026-03-30 01:16:44',102),('DoctrineMigrations\\Version20260316112941','2026-03-30 01:16:44',103),('DoctrineMigrations\\Version20260316123540','2026-03-30 01:16:44',103),('DoctrineMigrations\\Version20260316130618','2026-03-30 01:16:45',247),('DoctrineMigrations\\Version20260322103449','2026-03-30 01:16:45',102),('DoctrineMigrations\\Version20260328195915','2026-03-30 01:16:45',135),('DoctrineMigrations\\Version20260328203627','2026-03-30 01:16:46',149),('DoctrineMigrations\\Version20260328204131','2026-03-30 01:16:46',102),('DoctrineMigrations\\Version20260329075248','2026-03-30 01:16:46',214),('DoctrineMigrations\\Version20260329174430','2026-03-30 01:16:47',2),('DoctrineMigrations\\Version20260329202511','2026-03-31 13:26:43',143),('DoctrineMigrations\\Version20260329212338','2026-03-30 01:16:47',2),('DoctrineMigrations\\Version20260329213103','2026-03-31 13:26:44',2),('DoctrineMigrations\\Version20260329230803','2026-04-02 19:35:13',79),('DoctrineMigrations\\Version20260329231613','2026-04-02 19:36:15',97),('DoctrineMigrations\\Version20260330090145','2026-03-31 13:29:20',87),('DoctrineMigrations\\Version20260330092609','2026-03-31 13:29:20',2),('DoctrineMigrations\\Version20260331112601','2026-03-31 13:29:21',307),('DoctrineMigrations\\Version20260331112850','2026-03-31 13:54:30',113),('DoctrineMigrations\\Version20260331115350','2026-03-31 14:01:09',83),('DoctrineMigrations\\Version20260331115542','2026-03-31 14:01:10',2),('DoctrineMigrations\\Version20260331120041','2026-03-31 14:01:10',308),('DoctrineMigrations\\Version20260402173017','2026-04-02 19:36:16',527),('DoctrineMigrations\\Version20260402192950','2026-04-02 21:30:19',766),('DoctrineMigrations\\Version20260402194244','2026-04-02 21:43:08',392);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reset_password_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`),
  CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reset_password_request`
--

LOCK TABLES `reset_password_request` WRITE;
/*!40000 ALTER TABLE `reset_password_request` DISABLE KEYS */;
INSERT INTO `reset_password_request` VALUES (14,22,'GpvvS1MiBJN7EH35qk7n','HeVOAW3zw4b8BFOxVe8AkY2RqagToSXkrRtC/DE5dWA=','2026-05-04 00:46:10','2026-05-04 01:46:09'),(15,23,'pVe1TLpoYHNlSclYcLRN','fRtGDf1aq1b2cuG3zNOZFmc1KXnQDqMlQdIyGPEv+sg=','2026-05-04 00:50:57','2026-05-04 01:50:57');
/*!40000 ALTER TABLE `reset_password_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trajets`
--

DROP TABLE IF EXISTS `trajets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trajets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voiture` double NOT NULL,
  `train` double NOT NULL,
  `bus` double NOT NULL,
  `avion` double NOT NULL,
  `velo_mecanique` double NOT NULL,
  `velo_electrique` double NOT NULL,
  `voiture_electrique` double NOT NULL,
  `moto` double NOT NULL,
  `bateau` double NOT NULL,
  `metro` double NOT NULL,
  `date` date NOT NULL,
  `tramway` double NOT NULL,
  `rer` double NOT NULL,
  `id_user` int NOT NULL,
  `infos` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trajets`
--

LOCK TABLES `trajets` WRITE;
/*!40000 ALTER TABLE `trajets` DISABLE KEYS */;
INSERT INTO `trajets` VALUES (1,0,0,0.3,0,0,0,0,10,0,0,'2026-02-18',0,10,14,NULL),(2,15,0,0,0,0,0,0,0,0,10,'2026-04-01',0,0,14,NULL),(3,0,0,100,0,0,0,0,0,0,0,'2026-04-02',0,0,15,NULL),(4,10,0,2,0,0,0,0,0,0,4,'2026-04-02',0,6,18,NULL),(5,10,0,0,100,0,0,0,0,0,0,'2026-04-03',0,0,14,'le trajet en voiture saisi est quotidien (lundi au vendredi) et le trajet en avion etait ponctuel');
/*!40000 ALTER TABLE `trajets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Dahb','Ayoub','ayda@gmail.com','[\"ROLE_USER\"]','$2y$13$./KZB.94kgm2mI7nf1FWk.ilDk71ZmrtZpbqRmv8vWtbAixcnBrHu'),(2,'Harrada','Amin','ay@gmail.com','[\"ROLE_USER\"]','$2y$13$Dt7uUty0c5jxsqfBddKCC.qm32Jaodnp7RU2Te87Br40pD81awQgy'),(8,'rr','rr','r@gmail.com','[\"ROLE_USER\"]','$2y$13$.8vZhtLoqx3XT.qVkP2/QuInPh39WSFE8t6MEVqZUsgkaAUyHml8W'),(10,'Mahmoud','Mehmet','azerty@gmail.com','[\"ROLE_USER\"]','$2y$13$3QQEwShvuynpVROB2GBjsuvw6T964rqWoQ.k52W5r8pju/t99mYGu'),(12,'ay','ae','123@gmail.com','[\"ROLE_USER\"]','$2y$13$nKpsWSHNVNioz55/vfEPfeZ6gxlKFF38lmpNzk9bUyvGFS2otiJuW'),(13,'ug','iutgv','uo@oo.com','[\"ROLE_USER\"]','$2y$13$AREXigr1XXLDKkOST/FJKupTq8RscfLSJDD6zjDdkG0Ra9j97voBS'),(14,'a','a','a@gmail.com','[\"ROLE_USER\"]','$2y$13$EbwAjxT2bGBiIolw4q3FsufctqBKbHauGsObPAH00Qk0dL9C5LoH6'),(15,'av','av','av@gmail.com','[\"ROLE_USER\"]','$2y$13$BMxxY256ysaRby48N97cLeGyXOthRqJ4m5rgaYzR/zd6WxwnhQya2'),(18,'BARADA','FIFI','fifibarada@yahoo.com','[\"ROLE_USER\"]','$2y$13$CEL.jusiKRTdXJlDQzhamu6bDgetBSeF5OSRcGucDOUReL5UCb3Ny'),(19,'yy','yy','ydahb65@gmail.com','[\"ROLE_USER\"]','$2y$13$XdFoF75yvFP2GlQTfaTQZuCV33wvGhL12irauuYOqCbRuQdXB6iSy'),(20,'A','A','ma@gmail.com','[\"ROLE_USER\"]','$2y$13$xo.VIMey7LiKQ/BihIlUV..hDYKarVQ7HYoOnVdTMdMfPYv2b/at6'),(21,'Amin','Bensaid','aydahb60@gmail.com','[\"ROLE_USER\"]','$2y$13$19EwDNkRbEYken.mdCJnRuGkq5ZxjU440.r8/16PWQZGo1ugm2.yi'),(22,'harrada','amin','amin.hrrd12@gmail.com','[\"ROLE_USER\"]','$2y$13$cB.TKTidnIjGDXweBKu0B.ujomphambHXr6k4jt6U3brx4AxuCPWu'),(23,'harrada','amin','amin.harrada2@gmail.com','[\"ROLE_USER\"]','$2y$13$GSZ7JhlyBTx1FTntOjwXQudVZ1FaJ7dyHjIC6KWpmRf0HI5WJmJnC'),(24,'avv','avv','avv@gmail.com','[\"ROLE_USER\"]','$2y$13$YzuMXHZAoWPs2PIPxPsBFe1DlT78/.e.AmRO7lgnc2agl706XARGa'),(25,'zbt','ztb','bt@gmail.com','[\"ROLE_USER\"]','$2y$13$ATkcfX/RAKM.R4G34/ycfeZaB0OacwJOg5yCovNX3KJBfrFgYuXO2');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dbb2'
--
-- SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-10 16:27:00
