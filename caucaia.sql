-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: caucaiaonline
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.19.04.1

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
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) unsigned DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=358 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'default','App\\Page model has been created',1,'App\\Page',1,'App\\User','[]','2019-07-25 21:01:17','2019-07-25 21:01:17'),(2,'default','App\\Page model has been deleted',1,'App\\Page',1,'App\\User','[]','2019-07-25 21:01:28','2019-07-25 21:01:28'),(3,'default','App\\Permission model has been created',1,'App\\Permission',1,'App\\User','[]','2019-07-25 21:04:45','2019-07-25 21:04:45'),(4,'default','App\\Role model has been created',1,'App\\Role',1,'App\\User','[]','2019-07-25 21:05:10','2019-07-25 21:05:10'),(5,'default','App\\Role model has been created',2,'App\\Role',1,'App\\User','[]','2019-07-25 21:23:55','2019-07-25 21:23:55'),(6,'default','App\\Role model has been deleted',2,'App\\Role',1,'App\\User','[]','2019-07-25 21:24:33','2019-07-25 21:24:33'),(7,'default','App\\Role model has been created',3,'App\\Role',1,'App\\User','[]','2019-07-26 02:39:55','2019-07-26 02:39:55'),(8,'default','App\\teste model has been created',1,'App\\teste',1,'App\\User','[]','2019-07-26 02:45:02','2019-07-26 02:45:02'),(9,'default','App\\teste model has been deleted',1,'App\\teste',1,'App\\User','[]','2019-07-26 02:45:15','2019-07-26 02:45:15'),(10,'default','App\\Role model has been created',4,'App\\Role',1,'App\\User','[]','2019-07-26 21:46:02','2019-07-26 21:46:02'),(11,'default','App\\Permission model has been created',2,'App\\Permission',1,'App\\User','[]','2019-07-26 21:46:41','2019-07-26 21:46:41'),(12,'default','App\\Role model has been deleted',1,'App\\Role',1,'App\\User','[]','2019-07-26 21:53:30','2019-07-26 21:53:30'),(13,'default','App\\Role model has been updated',4,'App\\Role',1,'App\\User','[]','2019-07-26 21:56:41','2019-07-26 21:56:41'),(14,'default','App\\Role model has been updated',3,'App\\Role',1,'App\\User','[]','2019-07-26 22:05:43','2019-07-26 22:05:43'),(15,'default','App\\NewsCategory model has been created',1,'App\\NewsCategory',1,'App\\User','[]','2019-07-29 20:27:14','2019-07-29 20:27:14'),(16,'default','App\\News model has been created',1,'App\\News',1,'App\\User','[]','2019-07-29 20:43:46','2019-07-29 20:43:46'),(17,'default','App\\News model has been deleted',1,'App\\News',1,'App\\User','[]','2019-07-29 20:44:21','2019-07-29 20:44:21'),(18,'default','App\\News model has been created',2,'App\\News',1,'App\\User','[]','2019-07-29 20:49:39','2019-07-29 20:49:39'),(19,'default','App\\News model has been created',3,'App\\News',1,'App\\User','[]','2019-07-29 21:11:29','2019-07-29 21:11:29'),(20,'default','App\\News model has been updated',3,'App\\News',NULL,NULL,'[]','2019-07-30 01:11:07','2019-07-30 01:11:07'),(21,'default','App\\News model has been updated',3,'App\\News',1,'App\\User','[]','2019-07-30 15:40:21','2019-07-30 15:40:21'),(22,'default','App\\News model has been created',4,'App\\News',1,'App\\User','[]','2019-07-30 15:44:26','2019-07-30 15:44:26'),(23,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 16:04:19','2019-07-30 16:04:19'),(24,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 16:05:15','2019-07-30 16:05:15'),(25,'default','App\\News model has been deleted',2,'App\\News',1,'App\\User','[]','2019-07-30 16:09:04','2019-07-30 16:09:04'),(26,'default','App\\News model has been deleted',3,'App\\News',1,'App\\User','[]','2019-07-30 16:09:07','2019-07-30 16:09:07'),(27,'default','App\\NewsCategory model has been created',2,'App\\NewsCategory',1,'App\\User','[]','2019-07-30 16:21:32','2019-07-30 16:21:32'),(28,'default','App\\NewsCategory model has been updated',2,'App\\NewsCategory',1,'App\\User','[]','2019-07-30 16:21:37','2019-07-30 16:21:37'),(29,'default','App\\ReclamaCategory model has been created',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 16:56:45','2019-07-30 16:56:45'),(30,'default','App\\ReclamaCategory model has been created',2,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 16:59:53','2019-07-30 16:59:53'),(31,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:00:09','2019-07-30 17:00:09'),(32,'default','App\\ReclamaCategory model has been created',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:00:57','2019-07-30 17:00:57'),(33,'default','App\\ReclamaCategory model has been created',4,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:01:49','2019-07-30 17:01:49'),(34,'default','App\\ReclamaCategory model has been updated',4,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:05:52','2019-07-30 17:05:52'),(35,'default','App\\ReclamaSubCategory model has been created',1,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:23:01','2019-07-30 17:23:01'),(36,'default','App\\ReclamaSubCategory model has been created',2,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:28:21','2019-07-30 17:28:21'),(37,'default','App\\ReclamaSubCategory model has been updated',2,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:29:00','2019-07-30 17:29:00'),(38,'default','App\\ReclamaSubCategory model has been deleted',1,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:33:36','2019-07-30 17:33:36'),(39,'default','App\\ReclamaSubCategory model has been deleted',2,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:33:39','2019-07-30 17:33:39'),(40,'default','App\\ReclamaSubCategory model has been created',3,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:33:52','2019-07-30 17:33:52'),(41,'default','App\\ReclamaSubCategory model has been created',4,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:34:03','2019-07-30 17:34:03'),(42,'default','App\\Reclamacao model has been created',1,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 18:32:11','2019-07-30 18:32:11'),(43,'default','App\\Reclamacao model has been updated',1,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 18:35:27','2019-07-30 18:35:27'),(44,'default','App\\Reclamacao model has been updated',1,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 18:38:28','2019-07-30 18:38:28'),(45,'default','App\\Reclamacao model has been created',2,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 20:00:28','2019-07-30 20:00:28'),(46,'default','App\\News model has been created',5,'App\\News',1,'App\\User','[]','2019-07-30 21:49:04','2019-07-30 21:49:04'),(47,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 21:49:32','2019-07-30 21:49:32'),(48,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 22:12:55','2019-07-30 22:12:55'),(49,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:20:51','2019-07-31 03:20:51'),(50,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:23:29','2019-07-31 03:23:29'),(51,'default','App\\ReclamaCategory model has been updated',2,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:23:50','2019-07-31 03:23:50'),(52,'default','App\\ReclamaCategory model has been deleted',4,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:23:59','2019-07-31 03:23:59'),(53,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:29:37','2019-07-31 03:29:37'),(54,'default','App\\ReclamaCategory model has been updated',2,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:29:47','2019-07-31 03:29:47'),(55,'default','App\\Reclamacao model has been created',3,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:34:34','2019-07-31 14:34:34'),(56,'default','App\\Reclamacao model has been created',4,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:41:58','2019-07-31 14:41:58'),(57,'default','App\\Reclamacao model has been created',5,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:28','2019-07-31 14:42:28'),(58,'default','App\\Reclamacao model has been created',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:56','2019-07-31 14:42:56'),(59,'default','App\\Reclamacao model has been updated',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:56','2019-07-31 14:42:56'),(60,'default','App\\Reclamacao model has been updated',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:57','2019-07-31 14:42:57'),(61,'default','App\\Reclamacao model has been updated',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:57','2019-07-31 14:42:57'),(62,'default','App\\Reclamacao model has been deleted',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:43','2019-07-31 14:44:43'),(63,'default','App\\Reclamacao model has been deleted',5,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:46','2019-07-31 14:44:46'),(64,'default','App\\Reclamacao model has been deleted',4,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:48','2019-07-31 14:44:48'),(65,'default','App\\Reclamacao model has been deleted',3,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:51','2019-07-31 14:44:51'),(66,'default','App\\Reclamacao model has been deleted',2,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:54','2019-07-31 14:44:54'),(67,'default','App\\Reclamacao model has been created',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(68,'default','App\\Reclamacao model has been updated',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(69,'default','App\\Reclamacao model has been updated',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(70,'default','App\\Reclamacao model has been updated',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(71,'default','App\\Reclamacao model has been deleted',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:47:38','2019-07-31 14:47:38'),(72,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 15:32:03','2019-07-31 15:32:03'),(73,'default','App\\Reclamacao model has been created',8,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:32:03','2019-07-31 15:32:03'),(74,'default','App\\Reclamacao model has been updated',8,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:32:03','2019-07-31 15:32:03'),(75,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 15:42:31','2019-07-31 15:42:31'),(76,'default','App\\Reclamacao model has been created',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:42:31','2019-07-31 15:42:31'),(77,'default','App\\Reclamacao model has been updated',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:42:32','2019-07-31 15:42:32'),(78,'default','App\\Reclamacao model has been updated',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 17:57:30','2019-07-31 17:57:30'),(79,'default','App\\Reclamacao model has been updated',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 17:57:39','2019-07-31 17:57:39'),(80,'default','App\\ReclamaSubCategory model has been created',5,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-01 03:39:35','2019-08-01 03:39:35'),(81,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-01 03:40:28','2019-08-01 03:40:28'),(82,'default','App\\Reclamacao model has been created',10,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 03:40:28','2019-08-01 03:40:28'),(83,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-01 04:02:58','2019-08-01 04:02:58'),(84,'default','App\\Reclamacao model has been created',11,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 04:02:58','2019-08-01 04:02:58'),(85,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-01 04:44:15','2019-08-01 04:44:15'),(86,'default','App\\Reclamacao model has been created',12,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 04:44:15','2019-08-01 04:44:15'),(87,'default','App\\Reclamacao model has been updated',12,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 04:48:54','2019-08-01 04:48:54'),(88,'default','App\\Reclamacao model has been deleted',11,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:14','2019-08-01 05:05:14'),(89,'default','App\\Reclamacao model has been deleted',10,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:18','2019-08-01 05:05:18'),(90,'default','App\\Reclamacao model has been deleted',9,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:21','2019-08-01 05:05:21'),(91,'default','App\\Reclamacao model has been deleted',8,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:24','2019-08-01 05:05:24'),(92,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 19:13:48','2019-08-01 19:13:48'),(93,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 19:28:52','2019-08-01 19:28:52'),(94,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 19:36:27','2019-08-01 19:36:27'),(95,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 20:39:27','2019-08-01 20:39:27'),(96,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-08-01 20:39:35','2019-08-01 20:39:35'),(97,'default','App\\News model has been created',6,'App\\News',1,'App\\User','[]','2019-08-01 20:44:24','2019-08-01 20:44:24'),(98,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-01 20:44:40','2019-08-01 20:44:40'),(99,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 20:45:43','2019-08-01 20:45:43'),(100,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-01 20:50:33','2019-08-01 20:50:33'),(101,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-01 20:50:44','2019-08-01 20:50:44'),(102,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 01:57:21','2019-08-02 01:57:21'),(103,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 02:09:43','2019-08-02 02:09:43'),(104,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 02:11:13','2019-08-02 02:11:13'),(105,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-08-02 02:11:23','2019-08-02 02:11:23'),(106,'default','App\\ReclamaCategory model has been created',5,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-02 02:20:05','2019-08-02 02:20:05'),(107,'default','App\\ReclamaSubCategory model has been created',6,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-02 02:27:41','2019-08-02 02:27:41'),(108,'default','App\\ReclamaCategory model has been updated',5,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-02 02:28:55','2019-08-02 02:28:55'),(109,'default','App\\Reclamacao model has been created',13,'App\\Reclamacao',1,'App\\User','[]','2019-08-02 02:28:55','2019-08-02 02:28:55'),(110,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 02:47:52','2019-08-02 02:47:52'),(111,'default','App\\ClassificadoCategory model has been created',1,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:11:37','2019-08-02 14:11:37'),(112,'default','App\\ClassificadoCategory model has been created',2,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:12:18','2019-08-02 14:12:18'),(113,'default','App\\ClassificadoCategory model has been created',3,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:12:28','2019-08-02 14:12:28'),(114,'default','App\\ClassificadoCategory model has been created',4,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:28:23','2019-08-02 14:28:23'),(115,'default','App\\ClassificadoCategory model has been created',5,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:28:46','2019-08-02 14:28:46'),(116,'default','App\\ClassificadoCategory model has been created',6,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:28:54','2019-08-02 14:28:54'),(117,'default','App\\ClassificadoCategory model has been created',7,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:37:44','2019-08-02 14:37:44'),(118,'default','App\\ClassificadoCategory model has been created',8,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 19:55:58','2019-08-02 19:55:58'),(119,'default','App\\ClassificadoCategory model has been created',9,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 19:56:12','2019-08-02 19:56:12'),(120,'default','App\\ClassificadoCategory model has been created',10,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:06:38','2019-08-02 20:06:38'),(121,'default','App\\ClassificadoCategory model has been created',11,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:06:49','2019-08-02 20:06:49'),(122,'default','App\\ClassificadoCategory model has been updated',1,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:16:33','2019-08-02 20:16:33'),(123,'default','App\\ClassificadoCategory model has been updated',1,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:18:33','2019-08-02 20:18:33'),(124,'default','App\\ClassificadoItem model has been created',1,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:03:19','2019-08-03 03:03:19'),(125,'default','App\\ClassificadoItem model has been created',2,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:07:07','2019-08-03 03:07:07'),(126,'default','App\\ClassificadoItem model has been created',3,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:11:41','2019-08-03 03:11:41'),(127,'default','App\\ClassificadoItem model has been created',4,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:11:50','2019-08-03 03:11:50'),(128,'default','App\\ClassificadoItem model has been created',5,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:12:02','2019-08-03 03:12:02'),(129,'default','App\\ClassificadoItem model has been created',6,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:12:32','2019-08-03 03:12:32'),(130,'default','App\\ClassificadoItem model has been created',7,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:15:38','2019-08-03 03:15:38'),(131,'default','App\\ClassificadoItem model has been created',8,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:19:18','2019-08-03 03:19:18'),(132,'default','App\\ClassificadoItem model has been created',9,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:20:03','2019-08-03 03:20:03'),(133,'default','App\\ClassificadoItem model has been created',10,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:49:47','2019-08-03 03:49:47'),(134,'default','App\\ClassificadoItem model has been created',11,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:59:35','2019-08-03 03:59:35'),(135,'default','App\\ReclamaAnswer model has been created',1,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 05:47:16','2019-08-03 05:47:16'),(136,'default','App\\ReclamaAnswer model has been deleted',1,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 05:47:23','2019-08-03 05:47:23'),(137,'default','App\\Role model has been created',5,'App\\Role',1,'App\\User','[]','2019-08-03 05:50:57','2019-08-03 05:50:57'),(138,'default','App\\ReclamaAnswer model has been created',2,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:26:45','2019-08-03 18:26:45'),(139,'default','App\\ReclamaAnswer model has been created',3,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:26:52','2019-08-03 18:26:52'),(140,'default','App\\ReclamaAnswer model has been created',4,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:29:10','2019-08-03 18:29:10'),(141,'default','App\\ReclamaAnswer model has been created',5,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:33:16','2019-08-03 18:33:16'),(142,'default','App\\ReclamaAnswer model has been created',6,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:33:34','2019-08-03 18:33:34'),(143,'default','App\\ReclamaAnswer model has been created',7,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:34:00','2019-08-03 18:34:00'),(144,'default','App\\ReclamaAnswer model has been created',8,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:34:35','2019-08-03 18:34:35'),(145,'default','App\\Reclamacao model has been updated',NULL,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 18:34:35','2019-08-03 18:34:35'),(146,'default','App\\ReclamaAnswer model has been created',9,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:35:52','2019-08-03 18:35:52'),(147,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 18:35:52','2019-08-03 18:35:52'),(148,'default','App\\ReclamaAnswer model has been created',10,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:56:23','2019-08-03 18:56:23'),(149,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 18:56:23','2019-08-03 18:56:23'),(150,'default','App\\ReclamaAnswer model has been created',11,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 18:59:41','2019-08-03 18:59:41'),(151,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 18:59:41','2019-08-03 18:59:41'),(152,'default','App\\ReclamaAnswer model has been created',12,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 19:01:56','2019-08-03 19:01:56'),(153,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 19:01:56','2019-08-03 19:01:56'),(154,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-03 19:13:17','2019-08-03 19:13:17'),(155,'default','App\\Reclamacao model has been created',14,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 19:13:17','2019-08-03 19:13:17'),(156,'default','App\\ReclamaAnswer model has been created',13,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 19:14:29','2019-08-03 19:14:29'),(157,'default','App\\Reclamacao model has been updated',14,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 19:14:29','2019-08-03 19:14:29'),(158,'default','App\\ReclamaAnswer model has been created',14,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 19:47:22','2019-08-03 19:47:22'),(159,'default','App\\ReclamaAnswer model has been created',15,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 19:50:13','2019-08-03 19:50:13'),(160,'default','App\\Reclamacao model has been updated',14,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 19:50:13','2019-08-03 19:50:13'),(161,'default','App\\ReclamaAnswer model has been created',16,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 19:52:41','2019-08-03 19:52:41'),(162,'default','App\\ReclamaAnswer model has been created',17,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 19:55:25','2019-08-03 19:55:25'),(163,'default','App\\Reclamacao model has been updated',14,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 19:55:25','2019-08-03 19:55:25'),(164,'default','App\\ReclamaAnswer model has been created',18,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 19:56:29','2019-08-03 19:56:29'),(165,'default','App\\Reclamacao model has been updated',14,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 19:56:29','2019-08-03 19:56:29'),(166,'default','App\\ReclamaAnswer model has been created',19,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:00:54','2019-08-03 20:00:54'),(167,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:00:54','2019-08-03 20:00:54'),(168,'default','App\\ReclamaAnswer model has been created',20,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:01:40','2019-08-03 20:01:40'),(169,'default','App\\ReclamaAnswer model has been created',21,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:05:21','2019-08-03 20:05:21'),(170,'default','App\\ReclamaAnswer model has been created',22,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:14:37','2019-08-03 20:14:37'),(171,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:14:37','2019-08-03 20:14:37'),(172,'default','App\\ReclamaAnswer model has been created',23,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:17:01','2019-08-03 20:17:01'),(173,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 20:17:01','2019-08-03 20:17:01'),(174,'default','App\\ReclamaAnswer model has been created',24,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:19:20','2019-08-03 20:19:20'),(175,'default','App\\ReclamaAnswer model has been created',25,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:21:51','2019-08-03 20:21:51'),(176,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:21:51','2019-08-03 20:21:51'),(177,'default','App\\ReclamaAnswer model has been created',26,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:23:41','2019-08-03 20:23:41'),(178,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:23:41','2019-08-03 20:23:41'),(179,'default','App\\ReclamaAnswer model has been created',27,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:23:51','2019-08-03 20:23:51'),(180,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 20:23:51','2019-08-03 20:23:51'),(181,'default','App\\ReclamaAnswer model has been created',28,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:24:09','2019-08-03 20:24:09'),(182,'default','App\\ReclamaAnswer model has been created',29,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:26:59','2019-08-03 20:26:59'),(183,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:26:59','2019-08-03 20:26:59'),(184,'default','App\\ReclamaAnswer model has been created',30,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:27:13','2019-08-03 20:27:13'),(185,'default','App\\ReclamaAnswer model has been created',31,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:27:35','2019-08-03 20:27:35'),(186,'default','App\\ReclamaAnswer model has been created',32,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:28:52','2019-08-03 20:28:52'),(187,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:28:52','2019-08-03 20:28:52'),(188,'default','App\\ReclamaAnswer model has been created',33,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:29:02','2019-08-03 20:29:02'),(189,'default','App\\ReclamaAnswer model has been created',34,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:30:09','2019-08-03 20:30:09'),(190,'default','App\\ReclamaAnswer model has been created',35,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:32:36','2019-08-03 20:32:36'),(191,'default','App\\Reclamacao model has been updated',13,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 20:32:36','2019-08-03 20:32:36'),(192,'default','App\\ReclamaAnswer model has been created',36,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-03 20:34:27','2019-08-03 20:34:27'),(193,'default','App\\Reclamacao model has been updated',14,'App\\Reclamacao',3,'App\\User','[]','2019-08-03 20:34:28','2019-08-03 20:34:28'),(194,'default','App\\ReclamaAnswer model has been created',37,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 20:35:08','2019-08-03 20:35:08'),(195,'default','App\\Reclamacao model has been updated',14,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 20:35:08','2019-08-03 20:35:08'),(196,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-03 20:59:27','2019-08-03 20:59:27'),(197,'default','App\\Reclamacao model has been created',15,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 20:59:27','2019-08-03 20:59:27'),(198,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-03 21:00:38','2019-08-03 21:00:38'),(199,'default','App\\Reclamacao model has been created',16,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 21:00:38','2019-08-03 21:00:38'),(200,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-03 21:02:26','2019-08-03 21:02:26'),(201,'default','App\\Reclamacao model has been created',17,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 21:02:26','2019-08-03 21:02:26'),(202,'default','App\\ReclamaCategory model has been updated',5,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-03 21:10:29','2019-08-03 21:10:29'),(203,'default','App\\Reclamacao model has been created',18,'App\\Reclamacao',1,'App\\User','[]','2019-08-03 21:10:29','2019-08-03 21:10:29'),(204,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',4,'App\\User','[]','2019-08-04 00:11:26','2019-08-04 00:11:26'),(205,'default','App\\Reclamacao model has been created',19,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 00:11:26','2019-08-04 00:11:26'),(206,'default','App\\Reclamacao model has been updated',19,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 00:11:26','2019-08-04 00:11:26'),(207,'default','App\\ReclamaCategory model has been updated',5,'App\\ReclamaCategory',4,'App\\User','[]','2019-08-04 01:23:25','2019-08-04 01:23:25'),(208,'default','App\\Reclamacao model has been created',20,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:23:25','2019-08-04 01:23:25'),(209,'default','App\\Reclamacao model has been updated',20,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:23:26','2019-08-04 01:23:26'),(210,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',4,'App\\User','[]','2019-08-04 01:33:25','2019-08-04 01:33:25'),(211,'default','App\\Reclamacao model has been created',21,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:33:25','2019-08-04 01:33:25'),(212,'default','App\\Reclamacao model has been updated',21,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:33:25','2019-08-04 01:33:25'),(213,'default','App\\Reclamacao model has been updated',21,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:33:25','2019-08-04 01:33:25'),(214,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',4,'App\\User','[]','2019-08-04 01:34:39','2019-08-04 01:34:39'),(215,'default','App\\Reclamacao model has been created',22,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:34:40','2019-08-04 01:34:40'),(216,'default','App\\Reclamacao model has been updated',22,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:34:40','2019-08-04 01:34:40'),(217,'default','App\\Reclamacao model has been updated',22,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:34:40','2019-08-04 01:34:40'),(218,'default','App\\ReclamaCategory model has been updated',5,'App\\ReclamaCategory',4,'App\\User','[]','2019-08-04 01:35:45','2019-08-04 01:35:45'),(219,'default','App\\Reclamacao model has been created',23,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:35:45','2019-08-04 01:35:45'),(220,'default','App\\Reclamacao model has been updated',23,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 01:35:45','2019-08-04 01:35:45'),(221,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',4,'App\\User','[]','2019-08-04 02:23:12','2019-08-04 02:23:12'),(222,'default','App\\Reclamacao model has been created',24,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 02:23:12','2019-08-04 02:23:12'),(223,'default','App\\Reclamacao model has been updated',24,'App\\Reclamacao',4,'App\\User','[]','2019-08-04 02:23:12','2019-08-04 02:23:12'),(224,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-04 19:27:38','2019-08-04 19:27:38'),(225,'default','App\\Reclamacao model has been created',25,'App\\Reclamacao',1,'App\\User','[]','2019-08-04 19:27:38','2019-08-04 19:27:38'),(226,'default','App\\Reclamacao model has been updated',25,'App\\Reclamacao',1,'App\\User','[]','2019-08-04 19:27:38','2019-08-04 19:27:38'),(227,'default','App\\ReclamaAnswer model has been created',1,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-04 22:29:36','2019-08-04 22:29:36'),(228,'default','App\\Reclamacao model has been updated',24,'App\\Reclamacao',3,'App\\User','[]','2019-08-04 22:29:36','2019-08-04 22:29:36'),(229,'default','App\\ReclamaAnswer model has been created',2,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-04 23:05:54','2019-08-04 23:05:54'),(230,'default','App\\Reclamacao model has been updated',25,'App\\Reclamacao',3,'App\\User','[]','2019-08-04 23:05:55','2019-08-04 23:05:55'),(231,'default','App\\ReclamaAnswer model has been created',3,'App\\ReclamaAnswer',4,'App\\User','[]','2019-08-05 14:59:56','2019-08-05 14:59:56'),(232,'default','App\\Reclamacao model has been updated',24,'App\\Reclamacao',4,'App\\User','[]','2019-08-05 14:59:56','2019-08-05 14:59:56'),(233,'default','App\\ReclamaAnswer model has been created',4,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-05 19:03:34','2019-08-05 19:03:34'),(234,'default','App\\ReclamaAnswer model has been created',5,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-05 19:04:04','2019-08-05 19:04:04'),(235,'default','App\\Reclamacao model has been updated',25,'App\\Reclamacao',1,'App\\User','[]','2019-08-05 19:04:04','2019-08-05 19:04:04'),(236,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-05 21:18:02','2019-08-05 21:18:02'),(237,'default','App\\ReclamaCategory model has been updated',5,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-05 21:19:46','2019-08-05 21:19:46'),(238,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-05 21:50:48','2019-08-05 21:50:48'),(239,'default','App\\Reclamacao model has been created',26,'App\\Reclamacao',1,'App\\User','[]','2019-08-05 21:50:48','2019-08-05 21:50:48'),(240,'default','App\\News model has been created',7,'App\\News',1,'App\\User','[]','2019-08-06 18:58:28','2019-08-06 18:58:28'),(241,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-06 19:45:13','2019-08-06 19:45:13'),(242,'default','App\\Reclamacao model has been created',27,'App\\Reclamacao',1,'App\\User','[]','2019-08-06 19:45:14','2019-08-06 19:45:14'),(243,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-06 19:48:40','2019-08-06 19:48:40'),(244,'default','App\\Reclamacao model has been created',28,'App\\Reclamacao',1,'App\\User','[]','2019-08-06 19:48:40','2019-08-06 19:48:40'),(245,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 02:45:27','2019-08-07 02:45:27'),(246,'default','App\\Reclamacao model has been created',29,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 02:45:27','2019-08-07 02:45:27'),(247,'default','App\\Reclamacao model has been updated',29,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 02:45:27','2019-08-07 02:45:27'),(248,'default','App\\ReclamaAnswer model has been created',6,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-07 03:42:02','2019-08-07 03:42:02'),(249,'default','App\\Reclamacao model has been updated',29,'App\\Reclamacao',3,'App\\User','[]','2019-08-07 03:42:02','2019-08-07 03:42:02'),(250,'default','App\\ReclamaAnswer model has been created',7,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-07 03:42:29','2019-08-07 03:42:29'),(251,'default','App\\ReclamaAnswer model has been created',8,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-07 03:43:28','2019-08-07 03:43:28'),(252,'default','App\\ReclamaAnswer model has been created',9,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-07 03:43:56','2019-08-07 03:43:56'),(253,'default','App\\ReclamaAnswer model has been created',10,'App\\ReclamaAnswer',3,'App\\User','[]','2019-08-07 03:44:22','2019-08-07 03:44:22'),(254,'default','App\\ReclamaAnswer model has been created',11,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-07 03:45:10','2019-08-07 03:45:10'),(255,'default','App\\Reclamacao model has been updated',29,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 03:45:10','2019-08-07 03:45:10'),(256,'default','App\\ReclamaCategory model has been created',6,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:40:37','2019-08-07 19:40:37'),(257,'default','App\\ReclamaCategory model has been created',7,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:43:47','2019-08-07 19:43:47'),(258,'default','App\\ReclamaCategory model has been created',8,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:48:12','2019-08-07 19:48:12'),(259,'default','App\\ReclamaCategory model has been created',9,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:48:39','2019-08-07 19:48:39'),(260,'default','App\\ReclamaSubCategory model has been created',7,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 19:49:05','2019-08-07 19:49:05'),(261,'default','App\\ReclamaCategory model has been updated',7,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:49:43','2019-08-07 19:49:43'),(262,'default','App\\Reclamacao model has been created',30,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 19:49:43','2019-08-07 19:49:43'),(263,'default','App\\ReclamaCategory model has been created',10,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:53:04','2019-08-07 19:53:04'),(264,'default','App\\ReclamaCategory model has been created',11,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:54:11','2019-08-07 19:54:11'),(265,'default','App\\ReclamaCategory model has been created',12,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:54:34','2019-08-07 19:54:34'),(266,'default','App\\ReclamaCategory model has been created',13,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:54:51','2019-08-07 19:54:51'),(267,'default','App\\ReclamaCategory model has been created',14,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:55:12','2019-08-07 19:55:12'),(268,'default','App\\ReclamaCategory model has been created',15,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:55:37','2019-08-07 19:55:37'),(269,'default','App\\ReclamaCategory model has been created',16,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:55:53','2019-08-07 19:55:53'),(270,'default','App\\ReclamaCategory model has been created',17,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 19:56:20','2019-08-07 19:56:20'),(271,'default','App\\ReclamaSubCategory model has been created',8,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 19:59:09','2019-08-07 19:59:09'),(272,'default','App\\ReclamaSubCategory model has been created',9,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 19:59:22','2019-08-07 19:59:22'),(273,'default','App\\ReclamaSubCategory model has been created',10,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 19:59:31','2019-08-07 19:59:31'),(274,'default','App\\ReclamaSubCategory model has been created',11,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 19:59:42','2019-08-07 19:59:42'),(275,'default','App\\ReclamaSubCategory model has been created',12,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 19:59:50','2019-08-07 19:59:50'),(276,'default','App\\ReclamaSubCategory model has been created',13,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:00:59','2019-08-07 20:00:59'),(277,'default','App\\ReclamaSubCategory model has been created',14,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:01:45','2019-08-07 20:01:45'),(278,'default','App\\ReclamaSubCategory model has been created',15,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:02:05','2019-08-07 20:02:05'),(279,'default','App\\ReclamaSubCategory model has been created',16,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:02:19','2019-08-07 20:02:19'),(280,'default','App\\ReclamaSubCategory model has been created',17,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:02:30','2019-08-07 20:02:30'),(281,'default','App\\ReclamaSubCategory model has been created',18,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:02:46','2019-08-07 20:02:46'),(282,'default','App\\ReclamaSubCategory model has been created',19,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:03:03','2019-08-07 20:03:03'),(283,'default','App\\ReclamaSubCategory model has been created',20,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:03:29','2019-08-07 20:03:29'),(284,'default','App\\ReclamaSubCategory model has been created',21,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:03:51','2019-08-07 20:03:51'),(285,'default','App\\ReclamaSubCategory model has been created',22,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:04:04','2019-08-07 20:04:04'),(286,'default','App\\ReclamaSubCategory model has been created',23,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:04:13','2019-08-07 20:04:13'),(287,'default','App\\ReclamaSubCategory model has been created',24,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:04:29','2019-08-07 20:04:29'),(288,'default','App\\ReclamaSubCategory model has been created',25,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:04:41','2019-08-07 20:04:41'),(289,'default','App\\ReclamaSubCategory model has been created',26,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:04:56','2019-08-07 20:04:56'),(290,'default','App\\ReclamaSubCategory model has been created',27,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:05:27','2019-08-07 20:05:27'),(291,'default','App\\ReclamaSubCategory model has been created',28,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:05:48','2019-08-07 20:05:48'),(292,'default','App\\ReclamaSubCategory model has been created',29,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:06:00','2019-08-07 20:06:00'),(293,'default','App\\ReclamaSubCategory model has been created',30,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:06:09','2019-08-07 20:06:09'),(294,'default','App\\ReclamaSubCategory model has been created',31,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:06:17','2019-08-07 20:06:17'),(295,'default','App\\ReclamaSubCategory model has been created',32,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:06:34','2019-08-07 20:06:34'),(296,'default','App\\ReclamaSubCategory model has been created',33,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:06:46','2019-08-07 20:06:46'),(297,'default','App\\ReclamaSubCategory model has been created',34,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:06:58','2019-08-07 20:06:58'),(298,'default','App\\ReclamaSubCategory model has been created',35,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:07:15','2019-08-07 20:07:15'),(299,'default','App\\ReclamaSubCategory model has been created',36,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:07:27','2019-08-07 20:07:27'),(300,'default','App\\ReclamaSubCategory model has been created',37,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:07:39','2019-08-07 20:07:39'),(301,'default','App\\ReclamaSubCategory model has been created',38,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:07:53','2019-08-07 20:07:53'),(302,'default','App\\ReclamaSubCategory model has been created',39,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:08:07','2019-08-07 20:08:07'),(303,'default','App\\ReclamaSubCategory model has been created',40,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:08:22','2019-08-07 20:08:22'),(304,'default','App\\ReclamaSubCategory model has been created',41,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:08:32','2019-08-07 20:08:32'),(305,'default','App\\ReclamaSubCategory model has been created',42,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:08:43','2019-08-07 20:08:43'),(306,'default','App\\ReclamaSubCategory model has been created',43,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:08:59','2019-08-07 20:08:59'),(307,'default','App\\ReclamaSubCategory model has been created',44,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:09:11','2019-08-07 20:09:11'),(308,'default','App\\ReclamaSubCategory model has been created',45,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:09:26','2019-08-07 20:09:26'),(309,'default','App\\ReclamaSubCategory model has been created',46,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:09:46','2019-08-07 20:09:46'),(310,'default','App\\ReclamaSubCategory model has been created',47,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:10:51','2019-08-07 20:10:51'),(311,'default','App\\ReclamaSubCategory model has been created',48,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:11:05','2019-08-07 20:11:05'),(312,'default','App\\ReclamaSubCategory model has been created',49,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:11:14','2019-08-07 20:11:14'),(313,'default','App\\ReclamaSubCategory model has been created',50,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:11:22','2019-08-07 20:11:22'),(314,'default','App\\ReclamaSubCategory model has been created',51,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:11:50','2019-08-07 20:11:50'),(315,'default','App\\ReclamaSubCategory model has been created',52,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:12:05','2019-08-07 20:12:05'),(316,'default','App\\ReclamaSubCategory model has been created',53,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:12:37','2019-08-07 20:12:37'),(317,'default','App\\ReclamaSubCategory model has been created',54,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:12:59','2019-08-07 20:12:59'),(318,'default','App\\ReclamaSubCategory model has been created',55,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:13:14','2019-08-07 20:13:14'),(319,'default','App\\ReclamaSubCategory model has been created',56,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:13:28','2019-08-07 20:13:28'),(320,'default','App\\ReclamaSubCategory model has been created',57,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:16:11','2019-08-07 20:16:11'),(321,'default','App\\ReclamaSubCategory model has been created',58,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:16:52','2019-08-07 20:16:52'),(322,'default','App\\ReclamaSubCategory model has been created',59,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:17:06','2019-08-07 20:17:06'),(323,'default','App\\ReclamaSubCategory model has been created',60,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:17:40','2019-08-07 20:17:40'),(324,'default','App\\ReclamaSubCategory model has been created',61,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:18:01','2019-08-07 20:18:01'),(325,'default','App\\ReclamaSubCategory model has been created',62,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:21:45','2019-08-07 20:21:45'),(326,'default','App\\ReclamaSubCategory model has been created',63,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:22:08','2019-08-07 20:22:08'),(327,'default','App\\ReclamaSubCategory model has been created',64,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:22:20','2019-08-07 20:22:20'),(328,'default','App\\ReclamaSubCategory model has been created',65,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:22:33','2019-08-07 20:22:33'),(329,'default','App\\ReclamaSubCategory model has been created',66,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:22:51','2019-08-07 20:22:51'),(330,'default','App\\ReclamaSubCategory model has been created',67,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:23:04','2019-08-07 20:23:04'),(331,'default','App\\ReclamaSubCategory model has been created',68,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:23:19','2019-08-07 20:23:19'),(332,'default','App\\ReclamaSubCategory model has been created',69,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:23:34','2019-08-07 20:23:34'),(333,'default','App\\ReclamaSubCategory model has been created',70,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:24:49','2019-08-07 20:24:49'),(334,'default','App\\ReclamaSubCategory model has been created',71,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:24:59','2019-08-07 20:24:59'),(335,'default','App\\ReclamaSubCategory model has been created',72,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:25:16','2019-08-07 20:25:16'),(336,'default','App\\ReclamaSubCategory model has been created',73,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:25:30','2019-08-07 20:25:30'),(337,'default','App\\ReclamaSubCategory model has been created',74,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:25:42','2019-08-07 20:25:42'),(338,'default','App\\ReclamaSubCategory model has been created',75,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:25:52','2019-08-07 20:25:52'),(339,'default','App\\ReclamaSubCategory model has been created',76,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:26:03','2019-08-07 20:26:03'),(340,'default','App\\ReclamaSubCategory model has been created',77,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-07 20:26:16','2019-08-07 20:26:16'),(341,'default','App\\ReclamaCategory model has been updated',10,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 23:00:09','2019-08-07 23:00:09'),(342,'default','App\\Reclamacao model has been created',31,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:00:09','2019-08-07 23:00:09'),(343,'default','App\\Reclamacao model has been updated',31,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:00:09','2019-08-07 23:00:09'),(344,'default','App\\Reclamacao model has been deleted',31,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:01:09','2019-08-07 23:01:09'),(345,'default','App\\ReclamaCategory model has been updated',10,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 23:02:33','2019-08-07 23:02:33'),(346,'default','App\\Reclamacao model has been created',32,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:02:33','2019-08-07 23:02:33'),(347,'default','App\\Reclamacao model has been updated',32,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:02:33','2019-08-07 23:02:33'),(348,'default','App\\Reclamacao model has been deleted',32,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:05:49','2019-08-07 23:05:49'),(349,'default','App\\ReclamaCategory model has been updated',10,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-07 23:06:18','2019-08-07 23:06:18'),(350,'default','App\\Reclamacao model has been created',33,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:06:18','2019-08-07 23:06:18'),(351,'default','App\\Reclamacao model has been updated',33,'App\\Reclamacao',1,'App\\User','[]','2019-08-07 23:06:19','2019-08-07 23:06:19'),(352,'default','App\\NewsCategory model has been created',3,'App\\NewsCategory',1,'App\\User','[]','2019-08-07 23:20:00','2019-08-07 23:20:00'),(353,'default','App\\News model has been created',8,'App\\News',1,'App\\User','[]','2019-08-07 23:21:36','2019-08-07 23:21:36'),(354,'default','App\\NewsCategory model has been created',4,'App\\NewsCategory',1,'App\\User','[]','2019-08-07 23:28:54','2019-08-07 23:28:54'),(355,'default','App\\News model has been created',9,'App\\News',1,'App\\User','[]','2019-08-07 23:30:00','2019-08-07 23:30:00'),(356,'default','App\\News model has been updated',9,'App\\News',1,'App\\User','[]','2019-08-07 23:30:23','2019-08-07 23:30:23'),(357,'default','App\\News model has been updated',9,'App\\News',1,'App\\User','[]','2019-08-07 23:59:51','2019-08-07 23:59:51');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificado_categories`
--

DROP TABLE IF EXISTS `classificado_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificado_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `published` tinyint(4) DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificado_categories`
--

LOCK TABLES `classificado_categories` WRITE;
/*!40000 ALTER TABLE `classificado_categories` DISABLE KEYS */;
INSERT INTO `classificado_categories` VALUES (1,'2019-08-02 14:11:37','2019-08-02 20:18:33','Automóveis',0,1,'/uploads/images/classificados/categorias/automoveis_1564766313.png',NULL),(2,'2019-08-02 14:12:18','2019-08-02 14:12:18','Carros',1,1,NULL,NULL),(3,'2019-08-02 14:12:28','2019-08-02 14:12:28','Motos',1,1,NULL,NULL),(4,'2019-08-02 14:28:23','2019-08-02 14:28:23','Imóveis',0,1,NULL,NULL),(5,'2019-08-02 14:28:45','2019-08-02 14:28:45','Apartamento',4,1,NULL,NULL),(6,'2019-08-02 14:28:54','2019-08-02 14:28:54','Casas',4,1,NULL,NULL),(7,'2019-08-02 14:37:44','2019-08-02 14:37:44','Kitnet',4,1,NULL,NULL),(8,'2019-08-02 19:55:57','2019-08-02 19:55:57','Eletrônicos',0,1,'dist/img/avatar3.jpg',NULL),(9,'2019-08-02 19:56:12','2019-08-02 19:56:12','Computadores',8,1,NULL,NULL),(10,'2019-08-02 20:06:38','2019-08-02 20:06:38','Animais',0,1,NULL,NULL),(11,'2019-08-02 20:06:49','2019-08-02 20:06:49','Petshop',10,1,NULL,NULL);
/*!40000 ALTER TABLE `classificado_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificado_items`
--

DROP TABLE IF EXISTS `classificado_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificado_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preco` double(8,2) DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visualizacoes` tinyint(4) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_01` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_02` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_03` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_04` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_05` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_06` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificado_items`
--

LOCK TABLES `classificado_items` WRITE;
/*!40000 ALTER TABLE `classificado_items` DISABLE KEYS */;
INSERT INTO `classificado_items` VALUES (3,'2019-08-03 03:11:41','2019-08-03 03:11:41',NULL,2,'Tr4 Vermelho',NULL,'teste',NULL,NULL,30000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/tmp/phpRnGzY4',NULL,NULL,NULL,NULL,NULL,NULL),(4,'2019-08-03 03:11:50','2019-08-03 03:11:50',NULL,2,'Tr4 Vermelho',NULL,'teste',NULL,NULL,30000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/tmp/phpox6n7w',NULL,NULL,NULL,NULL,NULL,NULL),(5,'2019-08-03 03:12:02','2019-08-03 03:12:02',NULL,2,'Tr4 Vermelho',NULL,'teste',NULL,NULL,30000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/tmp/phpJVlFPy',NULL,NULL,NULL,NULL,NULL,NULL),(6,'2019-08-03 03:12:32','2019-08-03 03:12:32',NULL,2,'Tr4 Vermelho',NULL,'teste',NULL,NULL,30000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/tmp/php6gq0iV',NULL,NULL,NULL,NULL,NULL,NULL),(7,'2019-08-03 03:15:38','2019-08-03 03:15:38',NULL,3,'Titan pop 100',NULL,'tese',NULL,NULL,15000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/tmp/phpwSC5ju',NULL,NULL,NULL,NULL,NULL,NULL),(8,'2019-08-03 03:19:18','2019-08-03 03:19:18',NULL,3,'Titan pop 100',NULL,'tese',NULL,NULL,15000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/uploads/images/classificados/anuncios/anuncio_id_titan-pop-100_1564791558.png',NULL,NULL,NULL,NULL,NULL,NULL),(9,'2019-08-03 03:20:03','2019-08-03 03:20:03',NULL,3,'Titan pop 100',NULL,'tese',NULL,NULL,15000.00,2,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/uploads/images/classificados/anuncios/anuncio_id_titan-pop-100_1564791603.png',NULL,NULL,NULL,NULL,NULL,NULL),(10,'2019-08-03 03:49:47','2019-08-03 03:49:47',NULL,3,'teste',NULL,'teste',NULL,NULL,1500.00,1,'Rua Rúbia Sampaio','1260',NULL,'60011060',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/tmp/phpwjzb5H',NULL,NULL,NULL,NULL,NULL,NULL),(11,'2019-08-03 03:59:35','2019-08-03 03:59:35',NULL,2,'Pegeout 207',NULL,'Cor cinza',NULL,NULL,15000.00,1,'Rua 307','100','(Cj Nova Metrópole)','61656522',NULL,NULL,'teste',NULL,NULL,NULL,NULL,NULL,'/tmp/phplkoHYZ',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `classificado_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipaddress_apoios_map`
--

DROP TABLE IF EXISTS `ipaddress_apoios_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipaddress_apoios_map` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `reclamacao_id` int(8) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipaddress_apoios_map`
--

LOCK TABLES `ipaddress_apoios_map` WRITE;
/*!40000 ALTER TABLE `ipaddress_apoios_map` DISABLE KEYS */;
INSERT INTO `ipaddress_apoios_map` VALUES (32,30,'192.168.10.11','2019-08-07 20:29:07','2019-08-07 20:29:07'),(41,30,'192.168.10.12','2019-08-07 22:38:57','2019-08-07 22:38:57'),(42,30,'192.168.10.16','2019-08-07 22:55:39','2019-08-07 22:55:39'),(46,30,'127.0.0.1','2019-08-07 23:17:43','2019-08-07 23:17:43'),(47,33,'127.0.0.1','2019-08-07 23:54:30','2019-08-07 23:54:30'),(48,33,'192.168.10.12','2019-08-08 00:08:52','2019-08-08 00:08:52');
/*!40000 ALTER TABLE `ipaddress_apoios_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_193651_create_roles_permissions_tables',2),(4,'2018_08_01_183154_create_pages_table',2),(5,'2018_08_04_122319_create_settings_table',2),(6,'2019_07_25_174437_create_activity_log_table',2),(7,'2019_07_25_234413_create_testes_table',3),(8,'2019_07_26_145335_adds_api_token_to_users_table',4),(9,'2019_07_29_172359_create_news_categories_table',5),(10,'2019_07_29_173644_create_news_table',6),(11,'2019_07_30_134226_create_reclama_categories_table',7),(12,'2019_07_30_134355_create_reclama_sub_categories_table',8),(13,'2019_07_30_150922_create_reclamacaos_table',9),(14,'2019_08_02_104659_create_classificado_categories_table',10),(15,'2019_08_02_105945_create_classificado_items_table',11),(16,'2019_08_03_024215_create_reclama_answers_table',12),(17,'2019_08_05_125800_create_reclama_apoios_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (8,'2019-08-07 23:21:36','2019-08-07 23:21:36',NULL,'Espaço garantirá melhores condições de trabalho para vendedores ambulantes de Caucaia','espaco-garantira-melhores-condicoes-de-trabalho-para-vendedores-ambulantes-de-caucaia','<p>A mensagem do Poder Executivo que cria um espa&ccedil;o destinado aos vendedores ambulantes de Caucaia (Camel&oacute;dromo) dever&aacute; ser votada em &uacute;ltima discuss&atilde;o na C&acirc;mara Municipal nesta quinta-feira (08). Na sess&atilde;o legislativa realizada na &uacute;ltima ter&ccedil;a (6), o projeto obteve aprova&ccedil;&atilde;o daquela Casa.&nbsp;</p>\r\n<p>O espa&ccedil;o tem capacidade para receber cerca de 750 comerciantes e est&aacute; localizado no Centro do munic&iacute;pio. &ldquo;Estamos buscando cada vez mais formas de dar aos comerciantes caucaienses melhores condi&ccedil;&otilde;es de trabalho, garantindo um lugar seguro tanto para os vendedores como para os consumidores&rdquo;, justifica o prefeito Naumi Amorim.&nbsp;</p>\r\n<p>Durante a primeira leitura na C&acirc;mara, foi proposta uma emenda que indica que 80% dos interessados a trabalhar no &ldquo;Camel&oacute;dromo&rdquo; sejam moradores de Caucaia. Para isso, devem apresentar comprovante de endere&ccedil;o de pelo menos seis meses de resid&ecirc;ncia no munic&iacute;pio.</p>\r\n<p>A cria&ccedil;&atilde;o do &ldquo;Camel&oacute;dromo&rdquo; atende &agrave; necessidade de adequar o Centro de Caucaia para um local mais seguro para o p&uacute;blico. &ldquo;Com esse novo espa&ccedil;o vamos organizar o entorno do nosso Centro, garantindo mais cal&ccedil;adas livres para os pedestres, ou seja, garantindo mais seguran&ccedil;a&rdquo;, pontua o titular da Secretaria Municipal de Patrim&ocirc;nio, Servi&ccedil;os P&uacute;blicos e Transporte (SPSPTrans), Assis Medeiros.</p>\r\n<p>&nbsp;</p>\r\n<p>Fonte: Prefeitura Municipal de Caucaia</p>','/uploads/images/news/espaco-garantira-melhores-condicoes-de-trabalho-para-vendedores-ambulantes-de-caucaia_1565209296.jpg','camelodromo, caucaia, comercio',1,1,3,0),(9,'2019-08-07 23:30:00','2019-08-07 23:59:51',NULL,'Naumi Amorim participa da abertura da XIX Feira Cultural e do XVIII Jogos Indígenas','naumi-amorim-participa-da-abertura-da-xix-feira-cultural-e-do-xviii-jogos-indigenas','<p>Na manh&atilde; desta quarta-feira (07/8) o prefeito Naumi Amorim participou da cerim&ocirc;nia de abertura da XIX Feira Cultural e do XVIII Jogos Ind&iacute;genas, realizados &agrave;s margens da Lagoa dos Tapebas, no Terreiro Sagrado do Pau Branco, no bairro Capuan.</p>\r\n<p>Naumi ressaltou a import&acirc;ncia do apoio aos eventos culturais ind&iacute;genas e da parceria com estas comunidades. &ldquo;Toda vez que venho aqui me sinto em casa. O momento &eacute; &iacute;mpar porque a hist&oacute;ria fica viva e a cultura revive. Hoje &eacute; diferente, a gest&atilde;o municipal se envolve, dialoga e ajuda as comunidades&rdquo;, disse.</p>\r\n<p>Para o titular da Secretaria Municipal de Cultura e Turismo, Paulo Guerra, a festa &eacute; uma tradi&ccedil;&atilde;o da na&ccedil;&atilde;o Tapeba e deve ser mantida. &ldquo;&Eacute; importante fazermos esta festa, sem descaracterizar, sem perder o respeito da hist&oacute;ria, para que todos conhe&ccedil;am a cultura e tradi&ccedil;&atilde;o dos &iacute;ndios de Caucaia. Desta forma, tornamos nossa cultura ind&iacute;gena cada vez mais forte e vibrante&rdquo;, ressaltou.</p>\r\n<p>Weibe Tapeba, lideran&ccedil;a ind&iacute;gena e vereador, acredita que a atividade da feira e dos jogos faz parte do calend&aacute;rio pol&iacute;tico do povo caucaiense. &ldquo;Este evento n&atilde;o tem s&oacute; o vi&eacute;s econ&ocirc;mico, mas para demarcados mais o espa&ccedil;o da nossa exist&ecirc;ncia e resist&ecirc;ncia no nosso munic&iacute;pio&rdquo;, disse.&nbsp;</p>\r\n<p>O cacique da aldeia Tapeba, Francisco Alves Teixeira (Alberto), lembra que o momento da confraterniza&ccedil;&atilde;o &eacute; bom porque o povo reconhece os &iacute;ndios no Cear&aacute;. &ldquo;&Eacute; importante manter a cultura e celebrar os nossos costumes em nossa terra. Temos possibilidade de mostrar nossas tradi&ccedil;&otilde;es para todos, e conservar nossas tradi&ccedil;&otilde;es&rdquo;, afirmou.&nbsp;</p>\r\n<p>Na programa&ccedil;&atilde;o das competi&ccedil;&otilde;es, est&atilde;o as modalidades esportivas como arco e flecha, duathlon, arremesso de lan&ccedil;a, cabo de for&ccedil;a, resist&ecirc;ncia de f&ocirc;lego e corrida com tora.</p>\r\n<p>H&aacute; tamb&eacute;m a realiza&ccedil;&atilde;o de oficinas de artesanato, apresenta&ccedil;&otilde;es culturais, palestras, degusta&ccedil;&atilde;o da culin&aacute;ria tradicional, desfile de vestimentas e rituais sagrados. O evento &eacute; gratuito e aberto ao p&uacute;blico.</p>\r\n<p>Os dois eventos seguem at&eacute; a pr&oacute;xima sexta-feira (09/8). A iniciativa conta com apoio institucional da Prefeitura de Caucaia por meio da Secretaria Municipal de Esporte e Juventude (Sejuv).</p>\r\n<p>&nbsp;</p>\r\n<p>Fonte: Prefeitura Municipal de Caucaia</p>','/uploads/images/news/naumi-amorim-participa-da-abertura-da-xix-feira-cultural-e-do-xviii-jogos-indigenas_1565209800.jpg','Naumi, caucaia, prefeito, cultura',1,1,4,1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_categories`
--

DROP TABLE IF EXISTS `news_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_categories`
--

LOCK TABLES `news_categories` WRITE;
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` VALUES (3,'2019-08-07 23:20:00','2019-08-07 23:20:00',NULL,'Comércio',1),(4,'2019-08-07 23:28:54','2019-08-07 23:28:54',NULL,'Cultura',1);
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'2019-07-25 21:01:17','2019-07-25 21:01:28','2019-07-25 21:01:28','Teste','teste');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,3),(2,3),(1,4),(2,4);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Paginas','paginas-create','2019-07-25 21:04:45','2019-07-25 21:04:45'),(2,'admin','admin-acess','2019-07-26 21:46:41','2019-07-26 21:46:41');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclama_answers`
--

DROP TABLE IF EXISTS `reclama_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclama_answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `texto_comentario` text COLLATE utf8mb4_unicode_ci,
  `tipo` int(5) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `reclamacao_id` int(50) DEFAULT NULL,
  `concluida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_answers`
--

LOCK TABLES `reclama_answers` WRITE;
/*!40000 ALTER TABLE `reclama_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `reclama_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclama_apoios`
--

DROP TABLE IF EXISTS `reclama_apoios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclama_apoios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reclamacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_apoios`
--

LOCK TABLES `reclama_apoios` WRITE;
/*!40000 ALTER TABLE `reclama_apoios` DISABLE KEYS */;
/*!40000 ALTER TABLE `reclama_apoios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclama_categories`
--

DROP TABLE IF EXISTS `reclama_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclama_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `total_reclamacoes` int(11) DEFAULT NULL,
  `icon_image_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_categories`
--

LOCK TABLES `reclama_categories` WRITE;
/*!40000 ALTER TABLE `reclama_categories` DISABLE KEYS */;
INSERT INTO `reclama_categories` VALUES (7,'/uploads/reclamacao/icons/agua-e-esgotoiconcat.png','2019-08-07 19:43:47','2019-08-07 19:49:43',NULL,'Água e Esgoto',1,1,'/uploads/reclamacao/icons/agua-e-esgoto-markermap.png'),(8,'/uploads/reclamacao/icons/estabelecimento-irregulariconcat.png','2019-08-07 19:48:12','2019-08-07 19:48:12',NULL,'Estabelecimento Irregular',1,NULL,'/uploads/reclamacao/icons/estabelecimento-irregular-markermap.png'),(9,'/uploads/reclamacao/icons/iluminacao-e-energiaiconcat.png','2019-08-07 19:48:39','2019-08-07 19:48:39',NULL,'Iluminação e Energia',1,NULL,'/uploads/reclamacao/icons/iluminacao-e-energia-markermap.png'),(10,'/uploads/reclamacao/icons/limpeza-e-conservacaoiconcat.png','2019-08-07 19:53:04','2019-08-07 23:06:18',NULL,'Limpeza e Conservação',1,3,'/uploads/reclamacao/icons/limpeza-e-conservacao-markermap.png'),(11,'/uploads/reclamacao/icons/meio-ambienteiconcat.png','2019-08-07 19:54:11','2019-08-07 19:54:11',NULL,'Meio Ambiente',1,NULL,'/uploads/reclamacao/icons/meio-ambiente-markermap.png'),(12,'/uploads/reclamacao/icons/pedestres-e-ciclistasiconcat.png','2019-08-07 19:54:33','2019-08-07 19:54:33',NULL,'Pedestres e Ciclistas',1,NULL,'/uploads/reclamacao/icons/pedestres-e-ciclistas-markermap.png'),(13,'/uploads/reclamacao/icons/saudeiconcat.png','2019-08-07 19:54:51','2019-08-07 19:54:51',NULL,'Saúde',1,NULL,'/uploads/reclamacao/icons/saude-markermap.png'),(14,'/uploads/reclamacao/icons/segurancaiconcat.png','2019-08-07 19:55:12','2019-08-07 19:55:12',NULL,'Segurança',1,NULL,'/uploads/reclamacao/icons/seguranca-markermap.png'),(15,'/uploads/reclamacao/icons/transporte-publicoiconcat.png','2019-08-07 19:55:36','2019-08-07 19:55:36',NULL,'Transporte Público',1,NULL,'/uploads/reclamacao/icons/transporte-publico-markermap.png'),(16,'/uploads/reclamacao/icons/urbanismoiconcat.png','2019-08-07 19:55:53','2019-08-07 19:55:53',NULL,'Urbanismo',1,NULL,'/uploads/reclamacao/icons/urbanismo-markermap.png'),(17,'/uploads/reclamacao/icons/vias-de-transitoiconcat.png','2019-08-07 19:56:20','2019-08-07 19:56:20',NULL,'Vias de Transito',1,NULL,'/uploads/reclamacao/icons/vias-de-transito-markermap.png');
/*!40000 ALTER TABLE `reclama_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclama_sub_categories`
--

DROP TABLE IF EXISTS `reclama_sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclama_sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reclama_category_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_sub_categories`
--

LOCK TABLES `reclama_sub_categories` WRITE;
/*!40000 ALTER TABLE `reclama_sub_categories` DISABLE KEYS */;
INSERT INTO `reclama_sub_categories` VALUES (7,NULL,'2019-08-07 19:49:05','2019-08-07 19:49:05','Bueiro entupido',7,1),(8,NULL,'2019-08-07 19:59:09','2019-08-07 19:59:09','Bueiro sem tampa',7,1),(9,NULL,'2019-08-07 19:59:21','2019-08-07 19:59:21','Esgoto a céu aberto',7,1),(10,NULL,'2019-08-07 19:59:31','2019-08-07 19:59:31','Falta de água',7,1),(11,NULL,'2019-08-07 19:59:42','2019-08-07 19:59:42','Ponto de alagamento',7,1),(12,NULL,'2019-08-07 19:59:50','2019-08-07 19:59:50','Vazamento de água',7,1),(13,NULL,'2019-08-07 20:00:59','2019-08-07 20:00:59','Emissão de fumaça preta',8,1),(14,NULL,'2019-08-07 20:01:45','2019-08-07 20:01:45','Estabelecimento com acessibilidade irregular',8,1),(15,NULL,'2019-08-07 20:02:05','2019-08-07 20:02:05','Estabelecimento com condição sanitária irregular',8,1),(16,NULL,'2019-08-07 20:02:19','2019-08-07 20:02:19','Estabelecimento sem alvará',8,1),(17,NULL,'2019-08-07 20:02:30','2019-08-07 20:02:30','Estabelecimento sem nota fiscal',8,1),(18,NULL,'2019-08-07 20:02:46','2019-08-07 20:02:46','Estabelecimento sem saída de emergência',8,1),(19,NULL,'2019-08-07 20:03:03','2019-08-07 20:03:03','Ocupação irregular de área pública',8,1),(20,NULL,'2019-08-07 20:03:29','2019-08-07 20:03:29','Ponto recorrente de poluição sonora',8,1),(21,NULL,'2019-08-07 20:03:51','2019-08-07 20:03:51','Preço abusivo do combustível',8,1),(22,NULL,'2019-08-07 20:04:04','2019-08-07 20:04:04','Falta de energia',9,1),(23,NULL,'2019-08-07 20:04:13','2019-08-07 20:04:13','Fiação irregular',9,1),(24,NULL,'2019-08-07 20:04:29','2019-08-07 20:04:29','Iluminação pública irregular',9,1),(25,NULL,'2019-08-07 20:04:41','2019-08-07 20:04:41','Lâmpada acesa de dia',9,1),(26,NULL,'2019-08-07 20:04:56','2019-08-07 20:04:56','Lâmpada apagada à noite',9,1),(27,NULL,'2019-08-07 20:05:27','2019-08-07 20:05:27','Descarte irregular de lixo',10,1),(28,NULL,'2019-08-07 20:05:48','2019-08-07 20:05:48','Entulho na calçada/via pública',10,1),(29,NULL,'2019-08-07 20:06:00','2019-08-07 20:06:00','Lixeira quebrada',10,1),(30,NULL,'2019-08-07 20:06:09','2019-08-07 20:06:09','Mato alto',10,1),(31,NULL,'2019-08-07 20:06:17','2019-08-07 20:06:17','Praia suja',10,1),(32,NULL,'2019-08-07 20:06:34','2019-08-07 20:06:34','Área com risco de deslizamento',11,1),(33,NULL,'2019-08-07 20:06:46','2019-08-07 20:06:46','Aterro sanitário irregular',11,1),(34,NULL,'2019-08-07 20:06:57','2019-08-07 20:06:57','Caça predatória',11,1),(35,NULL,'2019-08-07 20:07:14','2019-08-07 20:07:14','Desmatamento irregular',11,1),(36,NULL,'2019-08-07 20:07:26','2019-08-07 20:07:26','Maus tratos a animais',11,1),(37,NULL,'2019-08-07 20:07:39','2019-08-07 20:07:39','Poda de árvore',11,1),(38,NULL,'2019-08-07 20:07:53','2019-08-07 20:07:53','Ponto de queimada irregular recorrente',11,1),(39,NULL,'2019-08-07 20:08:07','2019-08-07 20:08:07','Retirada de árvore',11,1),(40,NULL,'2019-08-07 20:08:22','2019-08-07 20:08:22','Bicicletário danificado',12,1),(41,NULL,'2019-08-07 20:08:32','2019-08-07 20:08:32','Calçada inexistente',12,1),(42,NULL,'2019-08-07 20:08:43','2019-08-07 20:08:43','Calçada irregular',12,1),(43,NULL,'2019-08-07 20:08:59','2019-08-07 20:08:59','Ciclovia/ciclofaixa mal sinalizada ou apagada',12,1),(44,NULL,'2019-08-07 20:09:10','2019-08-07 20:09:10','Faixa de pedestre apagada',12,1),(45,NULL,'2019-08-07 20:09:26','2019-08-07 20:09:26','Ponto de travessia irregular',12,1),(46,NULL,'2019-08-07 20:09:46','2019-08-07 20:09:46','Rampa de acessibilidade irregular ou inexistente',12,1),(47,NULL,'2019-08-07 20:10:51','2019-08-07 20:10:51','Falta medicamento',13,1),(48,NULL,'2019-08-07 20:11:04','2019-08-07 20:11:04','Mal atendimento',13,1),(49,NULL,'2019-08-07 20:11:14','2019-08-07 20:11:14','Demora na consulta',13,1),(50,NULL,'2019-08-07 20:11:21','2019-08-07 20:11:21','Falta de médicos',13,1),(51,NULL,'2019-08-07 20:11:50','2019-08-07 20:11:50','Foco de mosquito da dengue/zika',13,1),(52,NULL,'2019-08-07 20:12:05','2019-08-07 20:12:05','Infestação de animais perigosos',13,1),(53,NULL,'2019-08-07 20:12:37','2019-08-07 20:12:37','Prédio com problemas',13,1),(54,NULL,'2019-08-07 20:12:59','2019-08-07 20:12:59','Ponto de assalto/roubo',14,1),(55,NULL,'2019-08-07 20:13:14','2019-08-07 20:13:14','Ponto de exploração sexual de menores',14,1),(56,NULL,'2019-08-07 20:13:28','2019-08-07 20:13:28','Ponto de tráfego de drogas',14,1),(57,NULL,'2019-08-07 20:16:11','2019-08-07 20:16:11','Vandalismo',14,1),(58,NULL,'2019-08-07 20:16:52','2019-08-07 20:16:52','Estação de ônibus/trem/metrô danificada',15,1),(59,NULL,'2019-08-07 20:17:06','2019-08-07 20:17:06','Má conduta de motorista ou cobrador',15,1),(60,NULL,'2019-08-07 20:17:40','2019-08-07 20:17:40','Metrô/trem danificado',15,1),(61,NULL,'2019-08-07 20:18:01','2019-08-07 20:18:01','Ônibus fora do horário/rota',15,1),(62,NULL,'2019-08-07 20:21:45','2019-08-07 20:21:45','Ônibus/trem/metrô danificado',15,1),(63,NULL,'2019-08-07 20:22:08','2019-08-07 20:22:08','Ônibus/trem/metrô superlotado',15,1),(64,NULL,'2019-08-07 20:22:20','2019-08-07 20:22:20','Ponto de ônibus danificado',15,1),(65,NULL,'2019-08-07 20:22:33','2019-08-07 20:22:33','Ponto de transporte clandestino',15,1),(66,NULL,'2019-08-07 20:22:51','2019-08-07 20:22:51','Equipamento público danificado',16,1),(67,NULL,'2019-08-07 20:23:03','2019-08-07 20:23:03','Imóvel ou terreno abandonado',16,1),(68,NULL,'2019-08-07 20:23:19','2019-08-07 20:23:19','Patrimônio histórico em risco',16,1),(69,NULL,'2019-08-07 20:23:33','2019-08-07 20:23:33','Publicidade irregular em via pública',16,1),(70,NULL,'2019-08-07 20:24:49','2019-08-07 20:24:49','Bloqueio na via',17,1),(71,NULL,'2019-08-07 20:24:59','2019-08-07 20:24:59','Buracos na via',17,1),(72,NULL,'2019-08-07 20:25:16','2019-08-07 20:25:16','Placa de sinalização quebrada/inexistente',17,1),(73,NULL,'2019-08-07 20:25:30','2019-08-07 20:25:30','Ponto de infração de trânsito recorrente',17,1),(74,NULL,'2019-08-07 20:25:42','2019-08-07 20:25:42','Ponto recorrente de animais na via',17,1),(75,NULL,'2019-08-07 20:25:52','2019-08-07 20:25:52','Semáforo quebrado',17,1),(76,NULL,'2019-08-07 20:26:03','2019-08-07 20:26:03','Veículo abandonado',17,1),(77,NULL,'2019-08-07 20:26:16','2019-08-07 20:26:16','Via de terra com desnível',17,1);
/*!40000 ALTER TABLE `reclama_sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclamacaos`
--

DROP TABLE IF EXISTS `reclamacaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclamacaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `reclama_category_id` int(11) DEFAULT NULL,
  `reclama_sub_category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_reclamacao` longtext COLLATE utf8mb4_unicode_ci,
  `foto_url_01` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_url_02` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_url_03` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_video` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `resolvido` tinyint(1) DEFAULT NULL,
  `respondida` tinyint(1) DEFAULT '0',
  `latitude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apoio` int(50) DEFAULT NULL,
  `views` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclamacaos`
--

LOCK TABLES `reclamacaos` WRITE;
/*!40000 ALTER TABLE `reclamacaos` DISABLE KEYS */;
INSERT INTO `reclamacaos` VALUES (30,'2019-08-07 19:49:43','2019-08-07 23:17:43',NULL,7,7,1,'bueiro','bueiro','teste',NULL,NULL,NULL,'R. Trezentos e Quarenta e Cinco - Nova Metrópole, Caucaia - CE, Brasil',NULL,NULL,'(85) 98615-2123',NULL,NULL,1,NULL,0,'-3.7722164','-38.655064100000004',4,NULL),(31,'2019-08-07 23:00:09','2019-08-07 23:01:09','2019-08-07 23:01:09',10,27,1,'Animais soltos rasgam os sacos de lixos. Recomenda-se a utilização de recipientes para colocação do lixo que facilite inclusive a coleta e proporcione a coleta seletiva.','animais-soltos-rasgam-os-sacos-de-lixos-recomenda-se-a-utilizacao-de-recipientes-para-colocacao-do-lixo-que-facilite-inclusive-a-coleta-e-proporcione-a-coleta-seletiva','Descarte irregular de lixo','/uploads/images/reclamacao/31_foto01_1565208009.jpg',NULL,NULL,'R. Nova Vida - Arianópoles, Caucaia - CE, Brasil',NULL,NULL,'(85) 98615-2512',NULL,NULL,1,NULL,0,'-3.7663565','-38.65204929999999',NULL,NULL),(32,'2019-08-07 23:02:33','2019-08-07 23:05:49','2019-08-07 23:05:49',10,27,1,'Animais soltos rasgam os sacos de lixos. Recomenda-se a utilização de recipientes para colocação do lixo que facilite inclusive a coleta e proporcione a coleta seletiva.','animais-soltos-rasgam-os-sacos-de-lixos-recomenda-se-a-utilizacao-de-recipientes-para-colocacao-do-lixo-que-facilite-inclusive-a-coleta-e-proporcione-a-coleta-seletiva','Animais soltos rasgam os sacos de lixos. Recomenda-se a utilização de recipientes para colocação do lixo que facilite inclusive a coleta e proporcione a coleta seletiva.','/uploads/images/reclamacao/32_foto01_1565208153.jpg',NULL,NULL,'R. Nova Vida - Arianópoles, Caucaia - CE, Brasil',NULL,NULL,'(85) 98615-2512',NULL,NULL,1,NULL,0,'-3.7663565','-38.65204929999999',NULL,NULL),(33,'2019-08-07 23:06:18','2019-08-08 00:08:52',NULL,10,27,1,'Animais soltos rasgam os sacos de lixos. Recomenda-se a utilização de recipientes para colocação do lixo que facilite inclusive a coleta e proporcione a coleta seletiva.','animais-soltos-rasgam-os-sacos-de-lixos-recomenda-se-a-utilizacao-de-recipientes-para-colocacao-do-lixo-que-facilite-inclusive-a-coleta-e-proporcione-a-coleta-seletiva','Animais soltos rasgam os sacos de lixos. Recomenda-se a utilização de recipientes para colocação do lixo que facilite inclusive a coleta e proporcione a coleta seletiva.','/uploads/images/reclamacao/33_foto01_1565208379.jpg',NULL,NULL,'R. Nova Vida - Arianópoles, Caucaia - CE, Brasil',NULL,NULL,'(85) 98615-2512',NULL,NULL,1,NULL,0,'-3.7663565','-38.65204929999999',2,NULL);
/*!40000 ALTER TABLE `reclamacaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (4,1),(3,2),(5,3);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (3,'Super','super','2019-07-26 02:39:55','2019-07-26 22:05:43'),(4,'admin','admin','2019-07-26 21:46:02','2019-07-26 21:56:41'),(5,'gerenciador','gerenciador','2019-08-03 05:50:57','2019-08-03 05:50:57');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (3,'Titulo','Caucaia Online'),(4,'footer-text','Caucaia Online - O Guia de Caucaia 2019'),(5,'logo-url','logo.png'),(6,'site_url','https://reclame.caucaia.online'),(7,'nome_orgao_servico','Prefeitura de Caucaia');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testes`
--

DROP TABLE IF EXISTS `testes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testes`
--

LOCK TABLES `testes` WRITE;
/*!40000 ALTER TABLE `testes` DISABLE KEYS */;
INSERT INTO `testes` VALUES (1,'2019-07-26 02:45:02','2019-07-26 02:45:15','2019-07-26 02:45:15','teste','testet');
/*!40000 ALTER TABLE `testes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reclamacao_privacidade` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'alan','abreu','920.509.303-30','98002305519','/uploads/images/alan_1565188918.jpeg','1990-03-06','IRxzaMA5ULJbQRQOtnGhvGRoF6GJdj7a0eSbuXVfGPYGySfDQx5A1JtC7yoh','aas2512@gmail.com',NULL,'$2y$10$d8aC9Ni5S6TZywk2YyJPgeaffgoUZ69aeXUAJi3o2QqLhEaY3/8LG','4oMlEDQG2owbdNaMJJJqVGodmKChHtIWl5xzSMnezD9zFCQs4SMFlID6TMW8','2019-07-25 20:47:21','2019-08-07 17:41:58',0),(2,'Alan',NULL,NULL,NULL,NULL,NULL,NULL,'alan__abreu@hotmail.com',NULL,'$2y$10$drDpnrNk49ICWdIsVi6cLu90Ki7QfQVBBL4UQddi3zGg28DtYe.Ny',NULL,'2019-07-25 21:05:56','2019-07-26 22:06:55',0),(3,'Luis','Carlos',NULL,NULL,NULL,NULL,NULL,'luis@carlos.com',NULL,'$2y$10$US6y4WyEsU8O23KtZK75RO1GNB/okDghNLcPUkPD6vf7sreVipnta',NULL,'2019-08-01 05:08:14','2019-08-03 05:52:11',0),(4,'lorran','lima','920.509.303-30',NULL,NULL,NULL,NULL,'lorran@lima.com',NULL,'$2y$10$dECX3tLUHaw.Gw7Hlz0cyeHj0G6YOdSvyLAtk5g2cMXVGkN7Fh6Qq',NULL,'2019-08-03 21:24:08','2019-08-04 03:12:23',1);
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

-- Dump completed on 2019-08-07 18:20:22
