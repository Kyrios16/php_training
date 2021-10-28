-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: tutorial08
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `resetpwdcodes`
--

DROP TABLE IF EXISTS `resetpwdcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resetpwdcodes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resetpwdcodes`
--

LOCK TABLES `resetpwdcodes` WRITE;
/*!40000 ALTER TABLE `resetpwdcodes` DISABLE KEYS */;
/*!40000 ALTER TABLE `resetpwdcodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `salary` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kaung',' kaung@gmail.com','Web Developer','9400034678','Mayangone Tsp, Yangon','300000','a93af014bbe3da388c5eae156b3b0bc8','2021-10-22 15:06:03','2021-10-22 15:06:03'),(2,'Alex',' alex@gmail.com','Web Developer','9422034678','Hlaing Tsp, Yangon','300000','e60baf6132a741f6026deb34988edf29','2021-10-22 15:07:27','2021-10-22 15:07:27'),(3,'Bob',' bob@gmail.com','Web Designer','9758767445','Innsein Tsp, Yangon','350000','2f771d79f5929f2231b07ea48008a554','2021-10-22 15:07:59','2021-10-22 15:07:59'),(5,'Hinata',' hinata@gmail.com','Web Designer','9472313432','Konohagakure, Japan','350000','f96855a89ee8266dd6221a0ab44a677c','2021-10-22 15:09:45','2021-10-22 15:09:45'),(6,'Itachi Uchiha',' itachi@gmail.com','Web Developer','9746328391','Konohagakue, Japan','300000','d32a87c919cd2cddfb39b36acbed5f7f','2021-10-22 15:10:50','2021-10-22 15:10:50'),(7,'Paul',' paul@gmail.com','Leader','9757463984','Kamaryut Tsp, Yangon','1300000','613065bca9decad2c39b0be621ac99af','2021-10-22 15:11:54','2021-10-22 15:11:54'),(8,'Jenni',' jenni@gmail.com','Leader','9469325315','Hlaing Tsp, Yangon','1300000','b568f3087f0bf38681c7a2755ce2d2ea','2021-10-22 15:12:48','2021-10-22 15:12:48'),(9,'Sarephine',' sarephine@gmail.com','Manager','9758767449','Botahtaung Tsp, Yangon','1500000','2df60486c722ea21c913d4795de6b6ea','2021-10-22 15:13:53','2021-10-22 15:13:53'),(10,'admin',' admin@gmail.com','CEO','9746328390','Bahan Tsp, Yangon','3000000','21232f297a57a5a743894a0e4a801fc3','2021-10-22 15:14:34','2021-10-22 15:14:34'),(15,'Kaung Khant','kaungkhantnaing168@gmail.com','Web Developer','9469325319','Mandalay','300000','6e53852643bd3d8042fa3467d89ae2da','2021-10-23 21:32:15','2021-10-23 21:47:19'),(16,'khant',' uchihakaungkhant16@gmail.com','Web Designer','9758769445','Yangon','350000','7fd8877351e35215e2c4c116e1e8758a','2021-10-23 21:53:13','2021-10-23 21:53:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-23 22:04:34
