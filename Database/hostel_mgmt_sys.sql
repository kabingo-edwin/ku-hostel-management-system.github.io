-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: hostel_management_system2
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book` (
  `idbook` int NOT NULL AUTO_INCREMENT,
  `checkin_date` datetime NOT NULL,
  `checkout_date` datetime NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`idbook`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `idemployee` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `pf_no` int NOT NULL,
  `department` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `designation` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`idemployee`),
  UNIQUE KEY `pf_no_UNIQUE` (`pf_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `idstudent` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `id_no` int NOT NULL,
  `reg_no` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `tel_no` int NOT NULL,
  `institution` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `gaurdian` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `phone_no` int NOT NULL,
  `residency` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `disability` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`idstudent`),
  UNIQUE KEY `id_no_UNIQUE` (`id_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_reg`
--

DROP TABLE IF EXISTS `student_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_reg` (
  `idstudent_reg` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`idstudent_reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_reg`
--

LOCK TABLES `student_reg` WRITE;
/*!40000 ALTER TABLE `student_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_reg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-30 13:25:07
