-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mussacafec
-- ------------------------------------------------------
-- Server version	8.1.0

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

--
-- Table structure for table `feria`
--

DROP TABLE IF EXISTS `feria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_institucion` int NOT NULL,
  `numero_de_participantes` int NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proyecto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_institucion` (`id_institucion`),
  CONSTRAINT `feria_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feria`
--

LOCK TABLES `feria` WRITE;
/*!40000 ALTER TABLE `feria` DISABLE KEYS */;
/*!40000 ALTER TABLE `feria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `institucion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponente`
--

DROP TABLE IF EXISTS `ponente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ponente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_Institucion` int NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eje_tematico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_de_participantes` int NOT NULL,
  `proyecto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_Institucion` (`id_Institucion`),
  CONSTRAINT `ponente_ibfk_1` FOREIGN KEY (`id_Institucion`) REFERENCES `institucion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponente`
--

LOCK TABLES `ponente` WRITE;
/*!40000 ALTER TABLE `ponente` DISABLE KEYS */;
/*!40000 ALTER TABLE `ponente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poster`
--

DROP TABLE IF EXISTS `poster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poster` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_institucion` int NOT NULL,
  `numero_de_participantes` int NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyecto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_institucion` (`id_institucion`),
  CONSTRAINT `poster_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poster`
--

LOCK TABLES `poster` WRITE;
/*!40000 ALTER TABLE `poster` DISABLE KEYS */;
/*!40000 ALTER TABLE `poster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `robotica`
--

DROP TABLE IF EXISTS `robotica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `robotica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_institucion` int NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_de_participantes` int NOT NULL,
  `nombre_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_institucion` (`id_institucion`),
  CONSTRAINT `robotica_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `robotica`
--

LOCK TABLES `robotica` WRITE;
/*!40000 ALTER TABLE `robotica` DISABLE KEYS */;
/*!40000 ALTER TABLE `robotica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mussacafec'
--

--
-- Dumping routines for database 'mussacafec'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-16 12:58:54
