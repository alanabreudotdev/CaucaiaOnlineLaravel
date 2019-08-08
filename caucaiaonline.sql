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
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'default','App\\Page model has been created',1,'App\\Page',1,'App\\User','[]','2019-07-25 21:01:17','2019-07-25 21:01:17'),(2,'default','App\\Page model has been deleted',1,'App\\Page',1,'App\\User','[]','2019-07-25 21:01:28','2019-07-25 21:01:28'),(3,'default','App\\Permission model has been created',1,'App\\Permission',1,'App\\User','[]','2019-07-25 21:04:45','2019-07-25 21:04:45'),(4,'default','App\\Role model has been created',1,'App\\Role',1,'App\\User','[]','2019-07-25 21:05:10','2019-07-25 21:05:10'),(5,'default','App\\Role model has been created',2,'App\\Role',1,'App\\User','[]','2019-07-25 21:23:55','2019-07-25 21:23:55'),(6,'default','App\\Role model has been deleted',2,'App\\Role',1,'App\\User','[]','2019-07-25 21:24:33','2019-07-25 21:24:33'),(7,'default','App\\Role model has been created',3,'App\\Role',1,'App\\User','[]','2019-07-26 02:39:55','2019-07-26 02:39:55'),(8,'default','App\\teste model has been created',1,'App\\teste',1,'App\\User','[]','2019-07-26 02:45:02','2019-07-26 02:45:02'),(9,'default','App\\teste model has been deleted',1,'App\\teste',1,'App\\User','[]','2019-07-26 02:45:15','2019-07-26 02:45:15'),(10,'default','App\\Role model has been created',4,'App\\Role',1,'App\\User','[]','2019-07-26 21:46:02','2019-07-26 21:46:02'),(11,'default','App\\Permission model has been created',2,'App\\Permission',1,'App\\User','[]','2019-07-26 21:46:41','2019-07-26 21:46:41'),(12,'default','App\\Role model has been deleted',1,'App\\Role',1,'App\\User','[]','2019-07-26 21:53:30','2019-07-26 21:53:30'),(13,'default','App\\Role model has been updated',4,'App\\Role',1,'App\\User','[]','2019-07-26 21:56:41','2019-07-26 21:56:41'),(14,'default','App\\Role model has been updated',3,'App\\Role',1,'App\\User','[]','2019-07-26 22:05:43','2019-07-26 22:05:43'),(15,'default','App\\NewsCategory model has been created',1,'App\\NewsCategory',1,'App\\User','[]','2019-07-29 20:27:14','2019-07-29 20:27:14'),(16,'default','App\\News model has been created',1,'App\\News',1,'App\\User','[]','2019-07-29 20:43:46','2019-07-29 20:43:46'),(17,'default','App\\News model has been deleted',1,'App\\News',1,'App\\User','[]','2019-07-29 20:44:21','2019-07-29 20:44:21'),(18,'default','App\\News model has been created',2,'App\\News',1,'App\\User','[]','2019-07-29 20:49:39','2019-07-29 20:49:39'),(19,'default','App\\News model has been created',3,'App\\News',1,'App\\User','[]','2019-07-29 21:11:29','2019-07-29 21:11:29'),(20,'default','App\\News model has been updated',3,'App\\News',NULL,NULL,'[]','2019-07-30 01:11:07','2019-07-30 01:11:07'),(21,'default','App\\News model has been updated',3,'App\\News',1,'App\\User','[]','2019-07-30 15:40:21','2019-07-30 15:40:21'),(22,'default','App\\News model has been created',4,'App\\News',1,'App\\User','[]','2019-07-30 15:44:26','2019-07-30 15:44:26'),(23,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 16:04:19','2019-07-30 16:04:19'),(24,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 16:05:15','2019-07-30 16:05:15'),(25,'default','App\\News model has been deleted',2,'App\\News',1,'App\\User','[]','2019-07-30 16:09:04','2019-07-30 16:09:04'),(26,'default','App\\News model has been deleted',3,'App\\News',1,'App\\User','[]','2019-07-30 16:09:07','2019-07-30 16:09:07'),(27,'default','App\\NewsCategory model has been created',2,'App\\NewsCategory',1,'App\\User','[]','2019-07-30 16:21:32','2019-07-30 16:21:32'),(28,'default','App\\NewsCategory model has been updated',2,'App\\NewsCategory',1,'App\\User','[]','2019-07-30 16:21:37','2019-07-30 16:21:37'),(29,'default','App\\ReclamaCategory model has been created',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 16:56:45','2019-07-30 16:56:45'),(30,'default','App\\ReclamaCategory model has been created',2,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 16:59:53','2019-07-30 16:59:53'),(31,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:00:09','2019-07-30 17:00:09'),(32,'default','App\\ReclamaCategory model has been created',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:00:57','2019-07-30 17:00:57'),(33,'default','App\\ReclamaCategory model has been created',4,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:01:49','2019-07-30 17:01:49'),(34,'default','App\\ReclamaCategory model has been updated',4,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-30 17:05:52','2019-07-30 17:05:52'),(35,'default','App\\ReclamaSubCategory model has been created',1,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:23:01','2019-07-30 17:23:01'),(36,'default','App\\ReclamaSubCategory model has been created',2,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:28:21','2019-07-30 17:28:21'),(37,'default','App\\ReclamaSubCategory model has been updated',2,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:29:00','2019-07-30 17:29:00'),(38,'default','App\\ReclamaSubCategory model has been deleted',1,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:33:36','2019-07-30 17:33:36'),(39,'default','App\\ReclamaSubCategory model has been deleted',2,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:33:39','2019-07-30 17:33:39'),(40,'default','App\\ReclamaSubCategory model has been created',3,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:33:52','2019-07-30 17:33:52'),(41,'default','App\\ReclamaSubCategory model has been created',4,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-07-30 17:34:03','2019-07-30 17:34:03'),(42,'default','App\\Reclamacao model has been created',1,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 18:32:11','2019-07-30 18:32:11'),(43,'default','App\\Reclamacao model has been updated',1,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 18:35:27','2019-07-30 18:35:27'),(44,'default','App\\Reclamacao model has been updated',1,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 18:38:28','2019-07-30 18:38:28'),(45,'default','App\\Reclamacao model has been created',2,'App\\Reclamacao',1,'App\\User','[]','2019-07-30 20:00:28','2019-07-30 20:00:28'),(46,'default','App\\News model has been created',5,'App\\News',1,'App\\User','[]','2019-07-30 21:49:04','2019-07-30 21:49:04'),(47,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 21:49:32','2019-07-30 21:49:32'),(48,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-07-30 22:12:55','2019-07-30 22:12:55'),(49,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:20:51','2019-07-31 03:20:51'),(50,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:23:29','2019-07-31 03:23:29'),(51,'default','App\\ReclamaCategory model has been updated',2,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:23:50','2019-07-31 03:23:50'),(52,'default','App\\ReclamaCategory model has been deleted',4,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:23:59','2019-07-31 03:23:59'),(53,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:29:37','2019-07-31 03:29:37'),(54,'default','App\\ReclamaCategory model has been updated',2,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 03:29:47','2019-07-31 03:29:47'),(55,'default','App\\Reclamacao model has been created',3,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:34:34','2019-07-31 14:34:34'),(56,'default','App\\Reclamacao model has been created',4,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:41:58','2019-07-31 14:41:58'),(57,'default','App\\Reclamacao model has been created',5,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:28','2019-07-31 14:42:28'),(58,'default','App\\Reclamacao model has been created',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:56','2019-07-31 14:42:56'),(59,'default','App\\Reclamacao model has been updated',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:56','2019-07-31 14:42:56'),(60,'default','App\\Reclamacao model has been updated',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:57','2019-07-31 14:42:57'),(61,'default','App\\Reclamacao model has been updated',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:42:57','2019-07-31 14:42:57'),(62,'default','App\\Reclamacao model has been deleted',6,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:43','2019-07-31 14:44:43'),(63,'default','App\\Reclamacao model has been deleted',5,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:46','2019-07-31 14:44:46'),(64,'default','App\\Reclamacao model has been deleted',4,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:48','2019-07-31 14:44:48'),(65,'default','App\\Reclamacao model has been deleted',3,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:51','2019-07-31 14:44:51'),(66,'default','App\\Reclamacao model has been deleted',2,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:44:54','2019-07-31 14:44:54'),(67,'default','App\\Reclamacao model has been created',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(68,'default','App\\Reclamacao model has been updated',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(69,'default','App\\Reclamacao model has been updated',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(70,'default','App\\Reclamacao model has been updated',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:45:56','2019-07-31 14:45:56'),(71,'default','App\\Reclamacao model has been deleted',7,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 14:47:38','2019-07-31 14:47:38'),(72,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 15:32:03','2019-07-31 15:32:03'),(73,'default','App\\Reclamacao model has been created',8,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:32:03','2019-07-31 15:32:03'),(74,'default','App\\Reclamacao model has been updated',8,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:32:03','2019-07-31 15:32:03'),(75,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-07-31 15:42:31','2019-07-31 15:42:31'),(76,'default','App\\Reclamacao model has been created',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:42:31','2019-07-31 15:42:31'),(77,'default','App\\Reclamacao model has been updated',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 15:42:32','2019-07-31 15:42:32'),(78,'default','App\\Reclamacao model has been updated',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 17:57:30','2019-07-31 17:57:30'),(79,'default','App\\Reclamacao model has been updated',9,'App\\Reclamacao',1,'App\\User','[]','2019-07-31 17:57:39','2019-07-31 17:57:39'),(80,'default','App\\ReclamaSubCategory model has been created',5,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-01 03:39:35','2019-08-01 03:39:35'),(81,'default','App\\ReclamaCategory model has been updated',3,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-01 03:40:28','2019-08-01 03:40:28'),(82,'default','App\\Reclamacao model has been created',10,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 03:40:28','2019-08-01 03:40:28'),(83,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-01 04:02:58','2019-08-01 04:02:58'),(84,'default','App\\Reclamacao model has been created',11,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 04:02:58','2019-08-01 04:02:58'),(85,'default','App\\ReclamaCategory model has been updated',1,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-01 04:44:15','2019-08-01 04:44:15'),(86,'default','App\\Reclamacao model has been created',12,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 04:44:15','2019-08-01 04:44:15'),(87,'default','App\\Reclamacao model has been updated',12,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 04:48:54','2019-08-01 04:48:54'),(88,'default','App\\Reclamacao model has been deleted',11,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:14','2019-08-01 05:05:14'),(89,'default','App\\Reclamacao model has been deleted',10,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:18','2019-08-01 05:05:18'),(90,'default','App\\Reclamacao model has been deleted',9,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:21','2019-08-01 05:05:21'),(91,'default','App\\Reclamacao model has been deleted',8,'App\\Reclamacao',1,'App\\User','[]','2019-08-01 05:05:24','2019-08-01 05:05:24'),(92,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 19:13:48','2019-08-01 19:13:48'),(93,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 19:28:52','2019-08-01 19:28:52'),(94,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 19:36:27','2019-08-01 19:36:27'),(95,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 20:39:27','2019-08-01 20:39:27'),(96,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-08-01 20:39:35','2019-08-01 20:39:35'),(97,'default','App\\News model has been created',6,'App\\News',1,'App\\User','[]','2019-08-01 20:44:24','2019-08-01 20:44:24'),(98,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-01 20:44:40','2019-08-01 20:44:40'),(99,'default','App\\News model has been updated',5,'App\\News',1,'App\\User','[]','2019-08-01 20:45:43','2019-08-01 20:45:43'),(100,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-01 20:50:33','2019-08-01 20:50:33'),(101,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-01 20:50:44','2019-08-01 20:50:44'),(102,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 01:57:21','2019-08-02 01:57:21'),(103,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 02:09:43','2019-08-02 02:09:43'),(104,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 02:11:13','2019-08-02 02:11:13'),(105,'default','App\\News model has been updated',4,'App\\News',1,'App\\User','[]','2019-08-02 02:11:23','2019-08-02 02:11:23'),(106,'default','App\\ReclamaCategory model has been created',5,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-02 02:20:05','2019-08-02 02:20:05'),(107,'default','App\\ReclamaSubCategory model has been created',6,'App\\ReclamaSubCategory',1,'App\\User','[]','2019-08-02 02:27:41','2019-08-02 02:27:41'),(108,'default','App\\ReclamaCategory model has been updated',5,'App\\ReclamaCategory',1,'App\\User','[]','2019-08-02 02:28:55','2019-08-02 02:28:55'),(109,'default','App\\Reclamacao model has been created',13,'App\\Reclamacao',1,'App\\User','[]','2019-08-02 02:28:55','2019-08-02 02:28:55'),(110,'default','App\\News model has been updated',6,'App\\News',1,'App\\User','[]','2019-08-02 02:47:52','2019-08-02 02:47:52'),(111,'default','App\\ClassificadoCategory model has been created',1,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:11:37','2019-08-02 14:11:37'),(112,'default','App\\ClassificadoCategory model has been created',2,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:12:18','2019-08-02 14:12:18'),(113,'default','App\\ClassificadoCategory model has been created',3,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:12:28','2019-08-02 14:12:28'),(114,'default','App\\ClassificadoCategory model has been created',4,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:28:23','2019-08-02 14:28:23'),(115,'default','App\\ClassificadoCategory model has been created',5,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:28:46','2019-08-02 14:28:46'),(116,'default','App\\ClassificadoCategory model has been created',6,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:28:54','2019-08-02 14:28:54'),(117,'default','App\\ClassificadoCategory model has been created',7,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 14:37:44','2019-08-02 14:37:44'),(118,'default','App\\ClassificadoCategory model has been created',8,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 19:55:58','2019-08-02 19:55:58'),(119,'default','App\\ClassificadoCategory model has been created',9,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 19:56:12','2019-08-02 19:56:12'),(120,'default','App\\ClassificadoCategory model has been created',10,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:06:38','2019-08-02 20:06:38'),(121,'default','App\\ClassificadoCategory model has been created',11,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:06:49','2019-08-02 20:06:49'),(122,'default','App\\ClassificadoCategory model has been updated',1,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:16:33','2019-08-02 20:16:33'),(123,'default','App\\ClassificadoCategory model has been updated',1,'App\\ClassificadoCategory',1,'App\\User','[]','2019-08-02 20:18:33','2019-08-02 20:18:33'),(124,'default','App\\ClassificadoItem model has been created',1,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:03:19','2019-08-03 03:03:19'),(125,'default','App\\ClassificadoItem model has been created',2,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:07:07','2019-08-03 03:07:07'),(126,'default','App\\ClassificadoItem model has been created',3,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:11:41','2019-08-03 03:11:41'),(127,'default','App\\ClassificadoItem model has been created',4,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:11:50','2019-08-03 03:11:50'),(128,'default','App\\ClassificadoItem model has been created',5,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:12:02','2019-08-03 03:12:02'),(129,'default','App\\ClassificadoItem model has been created',6,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:12:32','2019-08-03 03:12:32'),(130,'default','App\\ClassificadoItem model has been created',7,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:15:38','2019-08-03 03:15:38'),(131,'default','App\\ClassificadoItem model has been created',8,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:19:18','2019-08-03 03:19:18'),(132,'default','App\\ClassificadoItem model has been created',9,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:20:03','2019-08-03 03:20:03'),(133,'default','App\\ClassificadoItem model has been created',10,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:49:47','2019-08-03 03:49:47'),(134,'default','App\\ClassificadoItem model has been created',11,'App\\ClassificadoItem',1,'App\\User','[]','2019-08-03 03:59:35','2019-08-03 03:59:35'),(135,'default','App\\ReclamaAnswer model has been created',1,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 05:47:16','2019-08-03 05:47:16'),(136,'default','App\\ReclamaAnswer model has been deleted',1,'App\\ReclamaAnswer',1,'App\\User','[]','2019-08-03 05:47:23','2019-08-03 05:47:23'),(137,'default','App\\Role model has been created',5,'App\\Role',1,'App\\User','[]','2019-08-03 05:50:57','2019-08-03 05:50:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_193651_create_roles_permissions_tables',2),(4,'2018_08_01_183154_create_pages_table',2),(5,'2018_08_04_122319_create_settings_table',2),(6,'2019_07_25_174437_create_activity_log_table',2),(7,'2019_07_25_234413_create_testes_table',3),(8,'2019_07_26_145335_adds_api_token_to_users_table',4),(9,'2019_07_29_172359_create_news_categories_table',5),(10,'2019_07_29_173644_create_news_table',6),(11,'2019_07_30_134226_create_reclama_categories_table',7),(12,'2019_07_30_134355_create_reclama_sub_categories_table',8),(13,'2019_07_30_150922_create_reclamacaos_table',9),(14,'2019_08_02_104659_create_classificado_categories_table',10),(15,'2019_08_02_105945_create_classificado_items_table',11),(16,'2019_08_03_024215_create_reclama_answers_table',12);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'2019-07-29 20:43:46','2019-07-29 20:44:20','2019-07-29 20:44:20','teste','teste','<p>teste</p>','/tmp/phpWRZQQz','teste',1,NULL,NULL,0),(2,'2019-07-29 20:49:39','2019-07-30 16:09:04','2019-07-30 16:09:04','Diretrizes para prevenção das DCNTs são debatidas','diretrizes-para-prevencao-das-dcnts-sao-debatidas','<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\"><span style=\"font-size: 12pt;\"><span style=\"font-family: \'Times New Roman\',\'serif\';\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">A Prefeitura de Caucaia, em parceria com o Governo do Estado, se prepara para implantar o programa de vigil&acirc;ncia dos fatores de risco e prote&ccedil;&atilde;o para Doen&ccedil;as Cr&ocirc;nicas N&atilde;o Transmiss&iacute;veis (DCNTs) para a popula&ccedil;&atilde;o de 30 a 69 anos. </span></span></span></p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\"><span style=\"font-size: 12pt;\"><span style=\"font-family: \'Times New Roman\',\'serif\';\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">T&eacute;cnicos da Secretaria Municipal de Sa&uacute;de (SMS) e da Secretaria Estadual de sa&uacute;de (Sesa) se reuniram nesta segunda-feira (29/7), na sede da SMS localizada no Centro, onde debateram diretrizes para iniciar o programa que visa prevenir as DCNTs, al&eacute;m de alcan&ccedil;ar p&uacute;blico-alvo estimado em mais de 147 mil pessoas no munic&iacute;pio.</span></span></span></p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\"><span style=\"font-size: 12pt;\"><span style=\"font-family: \'Times New Roman\',\'serif\';\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">&ldquo;Estamos muito satisfeitos com a escolha de Caucaia para ser prova de conceito e de laborat&oacute;rio. &Eacute; uma demonstra&ccedil;&atilde;o inequ&iacute;voca de que o munic&iacute;pio est&aacute; se organizando na gest&atilde;o da sa&uacute;de sintonizada com os princ&iacute;pios norteadores do SUS que o Estado preconiza&rdquo;, declarou o secret&aacute;rio municipal de sa&uacute;de, Moacir Soares.</span></span></span></p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\"><span style=\"font-size: 12pt;\"><span style=\"font-family: \'Times New Roman\',\'serif\';\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">Conforme o setor de Vigil&acirc;ncia em Sa&uacute;de da SMS, Caucaia registra cerca de 2.000 mil &oacute;bitos por ano em decorr&ecirc;ncia diversos tipos de doen&ccedil;as e acidentes no geral. Desse indicativo, em m&eacute;dia, 800 &oacute;bitos s&atilde;o diagnosticados pelas DCNTs de pessoas do grupo entre 30 a 69 anos (saud&aacute;veis ou n&atilde;o), que equivale ao percentual de 53% de doen&ccedil;as cr&ocirc;nicas registradas no munic&iacute;pio.&nbsp;</span></span></span></p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\"><span style=\"font-size: 12pt;\"><span style=\"font-family: \'Times New Roman\',\'serif\';\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">Para mudar esse quadro, uma for&ccedil;a-tarefa ser&aacute; realizada com os profissionais de sa&uacute;de de ambas as secretarias e envolvendo, especialmente, gestores da Aten&ccedil;&atilde;o Prim&aacute;ria em Sa&uacute;de (APS) e os Agentes Comunit&aacute;rios de Sa&uacute;de (ACSs). &ldquo;O intuito &eacute; que recebamos da SMS um checklist preenchido com informa&ccedil;&otilde;es sobre sua infraestrutura. Com isso, vamos avaliar quais as necessidades para iniciar a primeira etapa do programa que contar&aacute; com uma forma&ccedil;&atilde;o dos ACSs, prevista para setembro deste ano&rdquo;, informou a articuladora da Coordenadoria de Vigil&acirc;ncia da Sesa, Susyane Barcelos.&nbsp;</span></span></span></p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\"><span style=\"font-size: 12pt;\"><span style=\"font-family: \'Times New Roman\',\'serif\';\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">Com a capacita&ccedil;&atilde;o, os 460 ACSs de Caucaia far&atilde;o a captura domiciliar, atrav&eacute;s do mapeamento territorial, com o objetivo de identificar e mapear o perfil do p&uacute;blico-alvo do programa. A meta &eacute; preencher 12.000 fichas/m&ecirc;s durante um ano do projeto. Com o repasse de arquivos, a Sesa emitir&aacute; para a SMS relat&oacute;rio trimestral das informa&ccedil;&otilde;es coletadas.&nbsp;</span></span></span></p>\r\n<p><span style=\"font-size: 11.0pt;\"><span style=\"font-family: \'Verdana\',\'sans-serif\';\">As principais DCNTs s&atilde;o: cardiovasculares, respirat&oacute;rias cr&ocirc;nicas, diabetes mellitus e neoplasias. Elas possuem quatro fatores de risco em comum e que s&atilde;o modific&aacute;veis, dentre eles: tabagismo, atividade f&iacute;sica insuficiente, alimenta&ccedil;&atilde;o n&atilde;o saud&aacute;vel, uso nocivo do &aacute;lcool.</span></span></p>',NULL,'caucaia',1,NULL,NULL,0),(3,'2019-07-29 21:11:29','2019-07-30 16:09:07','2019-07-30 16:09:07','Prefeitura começa a pagar salário de julho dos servidores municipais','prefeitura-comeca-a-pagar-salario-de-julho-dos-servidores-municipais','<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: justify;\">A Prefeitura de Caucaia, por interm&eacute;dio das secretarias municipais de Finan&ccedil;as, Planejamento e Or&ccedil;amento (Sefin) e de Administra&ccedil;&atilde;o e Recursos Humanos (Sead), come&ccedil;a nesta ter&ccedil;a-feira (30/7) a efetuar o pagamento salarial do funcionalismo p&uacute;blico do munic&iacute;pio referente ao m&ecirc;s de julho.</p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: start;\"><span style=\"background-color: #ffffff; font-family: Verdana,sans-serif;\">Por lei, a gest&atilde;o p&uacute;blica tem at&eacute; o quinto dia &uacute;til do m&ecirc;s subsequente para realizar o pagamento. No entanto,</span>&nbsp;a expectativa &eacute; de que todos os colaboradores da gest&atilde;o tenham os sal&aacute;rios depositados at&eacute; esta quarta-feira (31/7).&nbsp;</p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: start;\">Dessa forma, a gest&atilde;o cumpre novamente o compromisso assumido com os servidores de depositar os proventos dentro do m&ecirc;s corrente.</p>\r\n<p style=\"margin-left: 0cm; margin-right: 0cm; text-align: start;\">Al&eacute;m de pagar todos os sal&aacute;rios sem atraso desde o come&ccedil;o da atual administra&ccedil;&atilde;o, a Prefeitura concedeu in&uacute;meros benef&iacute;cios e reajustes a diversas categorias.</p>',NULL,'teste',1,NULL,NULL,0),(4,'2019-07-30 15:44:26','2019-08-02 02:11:23',NULL,'Praia do Cumbuco recebe dois mutirões de limpeza no fim de semana','praia-do-cumbuco-recebe-dois-mutiroes-de-limpeza-no-fim-de-semanabe-dois-mutiroes-de-limpeza-no-fim-de-semana','<p>Principal ponto tur&iacute;stico de Caucaia, a praia do Cumbuco recebe neste fim de semana dois mutir&otilde;es de limpeza. Ambos acontecer&atilde;o no s&aacute;bado (27/7), mas em trechos diferentes da orla e promovidos por entidades distintas.</p>\r\n<p>Um deles ser&aacute; feito pelos organizadores da Winds For Future, uma grande competi&ccedil;&atilde;o de kitesurfe que acontecer&aacute; em setembro deste ano e tem na programa&ccedil;&atilde;o uma s&eacute;rie de interven&ccedil;&otilde;es socioambientais pr&eacute;vias ao evento. Os trabalhos de amanh&atilde; se concentrar&atilde;o na barraca Kitecabana.</p>\r\n<p>J&aacute; a outra frente de limpeza ser&aacute; do Instituto do Meio Ambiente de Caucaia (Imac). A ideia &eacute; envolver a comunidade litor&acirc;nea na limpeza do espa&ccedil;o. As equipes atuar&atilde;o da barraca Kitecabana at&eacute; o Acqua Beach, no sentido oposto ao que ser&aacute; tomado pelos volunt&aacute;rios da Winds For Future.</p>\r\n<p>Os dois mutir&otilde;es come&ccedil;ar&atilde;o &agrave;s 8 horas. A expectativa &eacute; de que os trabalhos durem toda a manh&atilde;. As duas frentes ter&atilde;o apoio da Coordenadoria do Lixo, &oacute;rg&atilde;o vinculado &agrave; Secretaria Municipal de Patrim&ocirc;nio, Servi&ccedil;os P&uacute;blicos e Transporte (SPSPTrans).</p>','/uploads/images/news/praia-do-cumbuco-recebe-dois-mutiroes-de-limpeza-no-fim-de-semanabe-dois-mutiroes-de-limpeza-no-fim-de-semana_1564512572.jpg','caucaia, praia, cumbuco, limpeza',0,NULL,1,0),(5,'2019-07-30 21:49:03','2019-08-01 20:45:43',NULL,'Aulas voltam nesta quarta (31); 70 toneladas de merenda já foram distribuídas','aulas-voltam-nesta-quarta-31-70-toneladas-de-merenda-ja-foram-distribuidas','<p>Os alunos da rede municipal de ensino de Caucaia iniciar&atilde;o nesta quarta-feira (31/7) o segundo semestre letivo. A Secretaria Municipal de Educa&ccedil;&atilde;o, Ci&ecirc;ncia e Tecnologia (SME) est&aacute; finalizando a entrega de 70 toneladas dos mais diversos tipos de g&ecirc;neros aliment&iacute;cios para todo o m&ecirc;s de agosto. Todas as 189 unidades escolares da rede municipal estar&atilde;o abastecidas com produtos&nbsp; como cereais, carne, frango, frutas, verduras e legumes, garantindo um card&aacute;pio variado e saud&aacute;vel para os seus mais de 55 mil alunos.</p>\r\n<p>O card&aacute;pio foi definido por nutricionistas da secretaria, considerando os diferentes p&uacute;blicos atendidos pela rede. A escolha dos card&aacute;pios visa garantir a seguran&ccedil;a alimentar e nutricional dos alunos, respeitando as diferen&ccedil;as entre as faixas et&aacute;rias e condi&ccedil;&otilde;es de sa&uacute;de dos estudantes que necessitem de aten&ccedil;&atilde;o espec&iacute;fica e daqueles que se encontram em vulnerabilidade social.</p>\r\n<p>A Prefeitura de Caucaia tamb&eacute;m trabalha no sentido de valorizar a agricultura familiar com o Programa de Aquisi&ccedil;&atilde;o de Alimentos (PAA) e o Programa Nacional de Alimenta&ccedil;&atilde;o Escolar (PNAE), de forma a garantir uma alimenta&ccedil;&atilde;o equilibrada e saud&aacute;vel, e apoiar o desenvolvimento sustent&aacute;vel de Caucaia, dando prioridade aos alimentos produzidos pelos empreendedores familiares rurais.</p>\r\n<p>&ldquo;Estamos trabalhando para oferecer cada vez mais uma merenda de qualidade, pois entendemos que o aluno bem alimentado tem mais chances de aprender e desenvolver suas capacidades, obtendo uma melhor qualidade de vida e rendimento escolar&rdquo;, afirma a Secret&aacute;ria de Educa&ccedil;&atilde;o, professora Camila Bezerra.</p>','/uploads/images/news/aulas-voltam-nesta-quarta-31-70-toneladas-de-merenda-ja-foram-distribuidas_1564512543.jpg','caucaia, educação caucaia, prefeitura caucaia, merenda caucaia',1,1,1,1),(6,'2019-08-01 20:44:24','2019-08-02 02:47:52',NULL,'Garrote-Tabubinha recebe pavimentação; obra será concluída até sábado (3)','garrote-tabubinha-recebe-pavimentacao-obra-sera-concluida-ate-sabado-3','<p>A Prefeitura de Caucaia, atrav&eacute;s da Secretaria Municipal de Infraestrutura (Seinfra), est&aacute; executando uma importante obra na regi&atilde;o do Garrote. At&eacute; este s&aacute;bado (3/8), a pasta conclui a pavimenta&ccedil;&atilde;o asf&aacute;ltica que d&aacute; acesso &agrave; comunidade da Tabubinha.</p>\r\n<p>Est&atilde;o sendo executados servi&ccedil;os em dois quil&ocirc;metros da via, no trecho correspondente &agrave;s ruas S&atilde;o Jo&atilde;o Del Rei e Nossa Senhora do Perp&eacute;tuo Socorro, que ligam a comunidade &agrave; CE-085.</p>\r\n<p>&ldquo;N&oacute;s primeiro executamos a prepara&ccedil;&atilde;o dessas duas ruas para depois elas receberem a pavimenta&ccedil;&atilde;o asf&aacute;ltica&rdquo;, explica o titular da Seinfra, secret&aacute;rio Eudes Costa.</p>\r\n<p>Todo o cal&ccedil;amento das vias &ndash; a base para o asfalto ser aplicado - foi recuperado. Depois foi realizada a limpeza da &aacute;rea e a constru&ccedil;&atilde;o da sarjeta de concreto, para a &aacute;gua da chuva ter por onde escorrer.</p>\r\n<p>&ldquo;Para n&oacute;s, todas as &aacute;reas do munic&iacute;pio t&ecirc;m relev&acirc;ncia. Na vis&atilde;o de uma cidade para todos, estamos executando obras em v&aacute;rias localidades&rdquo;, acrescenta Eudes Costa.</p>\r\n<p>A obra est&aacute; sendo executada com recursos da Caixa Econ&ocirc;mica Federal. S&atilde;o mais de R$ 15 milh&otilde;es destinados &agrave; melhoria de 120 vias de 19 bairros de Caucaia.</p>','/uploads/images/news/garrote-tabubinha-recebe-pavimentacao-obra-sera-concluida-ate-sabado-3_1564681464.jpg',NULL,1,1,1,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_categories`
--

LOCK TABLES `news_categories` WRITE;
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` VALUES (1,'2019-07-29 20:27:14','2019-07-29 20:27:14',NULL,'Policial',1),(2,'2019-07-30 16:21:32','2019-07-30 16:21:37',NULL,'Utilidade Pública',1);
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
  `reclama_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `reclamante_id` int(11) DEFAULT NULL,
  `concluida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_answers`
--

LOCK TABLES `reclama_answers` WRITE;
/*!40000 ALTER TABLE `reclama_answers` DISABLE KEYS */;
INSERT INTO `reclama_answers` VALUES (1,'2019-08-03 05:47:16','2019-08-03 05:47:23','2019-08-03 05:47:23',1,'teste','1',1,1,'1');
/*!40000 ALTER TABLE `reclama_answers` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_categories`
--

LOCK TABLES `reclama_categories` WRITE;
/*!40000 ALTER TABLE `reclama_categories` DISABLE KEYS */;
INSERT INTO `reclama_categories` VALUES (1,'terrain','2019-07-30 16:56:45','2019-08-01 04:44:15',NULL,'Estradas',1,4),(2,'room_service','2019-07-30 16:59:53','2019-07-31 03:29:47',NULL,'Serviços',1,17),(3,'school','2019-07-30 17:00:56','2019-08-01 03:40:28',NULL,'Educação',1,21),(4,'teste','2019-07-30 17:01:49','2019-07-31 03:23:59','2019-07-31 03:23:59','teste',1,NULL),(5,'local_hospital','2019-08-02 02:20:04','2019-08-02 02:28:55',NULL,'Saúde',1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclama_sub_categories`
--

LOCK TABLES `reclama_sub_categories` WRITE;
/*!40000 ALTER TABLE `reclama_sub_categories` DISABLE KEYS */;
INSERT INTO `reclama_sub_categories` VALUES (3,NULL,'2019-07-30 17:33:52','2019-07-30 17:33:52','Buracos na rua de terra',1,1),(4,NULL,'2019-07-30 17:34:03','2019-07-30 17:34:03','Buracos no asfalto',1,1),(5,NULL,'2019-08-01 03:39:34','2019-08-01 03:39:34','Merenda Escolar',3,1),(6,NULL,'2019-08-02 02:27:41','2019-08-02 02:27:41','Falta de Medicamento',5,1);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclamacaos`
--

LOCK TABLES `reclamacaos` WRITE;
/*!40000 ALTER TABLE `reclamacaos` DISABLE KEYS */;
INSERT INTO `reclamacaos` VALUES (8,'2019-07-31 15:32:03','2019-08-01 05:05:23','2019-08-01 05:05:23',1,3,1,'teste',NULL,'teste','/uploads/images/reclamacao/8_foto01_1564576323.png',NULL,NULL,'Av. da Integração',NULL,NULL,'(85) 98615-2512',NULL,NULL,NULL,0,1),(9,'2019-07-31 15:42:31','2019-08-01 05:05:21','2019-08-01 05:05:21',1,3,1,'Cheio de Buracos',NULL,'<p>Avenida impossivel de passar</p>','/uploads/images/reclamacao/9_foto01_1564576951.png','/uploads/images/reclamacao/9_foto01_1564576951.png','/uploads/images/reclamacao/9_foto01_1564576951.png','Av. da Integração',NULL,NULL,'(85) 98615-2512',NULL,NULL,1,0,1),(10,'2019-08-01 03:40:28','2019-08-01 05:05:18','2019-08-01 05:05:18',3,5,1,'Falta merenda para as crianças',NULL,'inadmissivel faltar a merenda para nossas crianças.',NULL,NULL,NULL,'Rua jatoba',NULL,NULL,'(85) 98615-2512',NULL,NULL,NULL,0,1),(11,'2019-08-01 04:02:58','2019-08-01 05:05:14','2019-08-01 05:05:14',1,3,1,'Não recebimento do meu pedido de isenção de IPVA por motivo de doença e deficiencia',NULL,'Dia 05 de junho de 2019, fui a Secretaria da Fazenda do Ceará portando os documentos necessários para solicitar a dispensa de pagamento do IPVA por motivo de doenças e deficiências. De acordo com as informações que tem na internet algumas doenças dão direito a essa isenção ( https://www.jornalcontabil.com.br/quais-as-doencas-que-dao-isencao-de-ipva/ ) porem ao chegar la fui informado pela responsável do local que HIV não dava esse direito porem no site que informa as relação das doenças inclui essa.\r\nGostaria de saber o porque dessa negação de isenção da minha solicitação. E se o estado do Ceará tem uma lei especifica sobre esse assunto diferente do restante do país?',NULL,NULL,NULL,'Av. da Integração',NULL,NULL,'(85) 98615-2512',NULL,NULL,NULL,0,1),(12,'2019-08-01 04:44:15','2019-08-01 04:48:54',NULL,1,3,1,'teste de slug','teste-de-slug','<p>teste</p>',NULL,NULL,NULL,'Av. da Integração',NULL,NULL,'(85) 98615-2512',NULL,NULL,1,0,1),(13,'2019-08-02 02:28:55','2019-08-02 02:28:55',NULL,5,6,1,'Absurdo falta medicamento essencial','absurdo-falta-medicamento-essencial','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis nulla eu fringilla fermentum. Vivamus luctus bibendum tortor in eleifend. Ut non lectus mauris. Integer iaculis quis ligula vel euismod. Sed et leo sit amet enim viverra ultricies eget quis orci. Vestibulum semper convallis faucibus. Donec non sapien lectus. Pellentesque eu justo molestie, posuere enim interdum, dictum purus. Cras at ex eu sapien consectetur luctus.\r\n\r\nProin quis lectus nec leo ornare ultricies ut at nisl. Praesent malesuada eget ante non pellentesque. Suspendisse sollicitudin nec urna ac iaculis. Sed ultricies cursus sem non vehicula. Donec mattis a risus quis luctus. Etiam dictum nibh dui, nec congue diam ultrices et. Nulla dictum est rutrum porta ultrices. Vestibulum convallis augue id molestie maximus. Aliquam tristique lacus lacus, ut rutrum justo varius sed. Aliquam erat volutpat.\r\n\r\nCras ex mauris, luctus sed sodales volutpat, pellentesque in odio. Suspendisse efficitur tempor eros id pretium. Suspendisse a nibh sagittis, egestas nibh et, efficitur mi. Aliquam congue congue nibh, sed condimentum purus commodo vitae. Vestibulum vitae dapibus est. Vivamus porta eros quis posuere consequat. Praesent mollis sagittis faucibus. Quisque hendrerit finibus dui sit amet ullamcorper. Suspendisse potenti. Etiam et volutpat tellus. Maecenas sed sollicitudin urna. Phasellus eget varius est. Ut ullamcorper, felis non fringilla tristique, arcu tortor congue libero, eget pulvinar massa nulla non justo.\r\n\r\nMauris eu urna vitae tortor porttitor mattis. Ut malesuada facilisis vestibulum. Suspendisse sed consequat massa, sed rutrum nibh. Nam aliquet, sapien ut rhoncus venenatis, odio mauris pharetra urna, eget posuere nibh massa at dui. Cras vestibulum nisi in viverra hendrerit. Duis nec sapien fringilla, eleifend lorem et, pellentesque tortor. Quisque mollis, sapien at dapibus pharetra, tortor tortor ultricies mi, at semper lectus elit vitae neque. Nulla fermentum sagittis pretium. Vivamus quis condimentum arcu. Nullam mattis nulla sem, at interdum tellus lobortis a. Pellentesque sem felis, rutrum ut dolor non, finibus mollis nisl. Fusce eu magna aliquet, laoreet elit tristique, dapibus nisi. Nunc faucibus metus in felis laoreet, non rhoncus metus lobortis. Nullam magna lacus, finibus ac dictum a, rhoncus vitae velit. Quisque ut accumsan est.\r\n\r\nPhasellus nunc lacus, efficitur sit amet lorem eu, placerat posuere velit. Praesent viverra turpis a pharetra pellentesque. Sed id lorem quis velit ullamcorper faucibus vel vitae orci. Phasellus euismod interdum magna, vel eleifend risus commodo eu. Proin mollis odio in aliquet pretium. Cras condimentum nec mauris sed euismod. Cras scelerisque efficitur tortor, vitae pretium lectus dapibus eget. Nullam eu egestas urna. Aliquam scelerisque commodo elit, ut pulvinar tortor luctus consequat. Aliquam quis sodales justo, a ornare odio. Aenean turpis leo, placerat a ornare id, sagittis in diam. Pellentesque congue sapien augue, ac pellentesque metus semper ac.\r\n\r\nDonec id ultrices eros. Praesent pharetra tortor nec scelerisque dapibus. Nulla volutpat massa hendrerit varius pellentesque. Maecenas rutrum cursus neque at consequat. Proin libero neque, aliquam id est non, cursus vehicula lectus. Ut vel rutrum neque, sed volutpat enim. Pellentesque et tortor vel nisl imperdiet interdum. Sed tincidunt finibus augue et porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce vestibulum, enim consectetur accumsan faucibus, nisl elit pulvinar arcu, in eleifend sem orci ut ipsum. Proin in quam vitae enim fringilla imperdiet sed in nulla. Sed nec purus sed dolor sodales accumsan sit amet a felis.\r\n\r\nAliquam ac congue neque, et posuere magna. Phasellus ut arcu gravida, ultrices urna ut, tincidunt odio. Praesent sagittis ex egestas tempus lobortis. Integer tempus viverra lorem, a mattis arcu tempor sit amet. Phasellus mattis ornare ligula nec fringilla. Vivamus a quam mauris. Vestibulum vehicula velit vel venenatis suscipit. Vivamus vitae facilisis metus. Vestibulum rutrum mattis nulla. Duis metus justo, elementum at felis blandit, ullamcorper tempor tortor. Donec nibh dui, facilisis ut massa eget, ultricies facilisis felis.\r\n\r\nNulla porta hendrerit gravida. Maecenas sed egestas erat. Donec suscipit tristique odio eget placerat. Proin sollicitudin tempor urna ut fringilla. In interdum hendrerit nisi, vitae eleifend libero finibus at. Curabitur malesuada, magna eu fringilla aliquet, orci lacus dictum nisi, in finibus est quam nec neque. Curabitur pellentesque malesuada pretium.\r\n\r\nEtiam elementum purus nec leo laoreet, sit amet pulvinar orci bibendum. Donec at lacus a elit molestie bibendum. Duis vitae tortor et sapien consequat rhoncus ac et neque. In facilisis tincidunt imperdiet. Vivamus ullamcorper lacinia nunc vel consequat. Etiam ac dolor suscipit, vestibulum urna vitae, ultricies mauris. In placerat leo nisi, ac egestas augue blandit vitae. Ut in vestibulum erat. Maecenas enim est, pulvinar nec augue porta, facilisis sollicitudin magna. In convallis, nibh id tempus molestie, orci quam commodo risus, a varius nulla erat sed dui.\r\n\r\nPellentesque a neque ornare, convallis ipsum eu, viverra ligula. Integer purus ipsum, laoreet sed arcu quis, efficitur lobortis nunc. Mauris sit amet risus porta, mattis est sed, bibendum nisl. Fusce congue gravida arcu id convallis. In in molestie mauris, in semper urna. Fusce consectetur, tortor a cursus tempor, diam dolor viverra nisl, eu tristique ipsum ante quis nunc. Vestibulum nec tristique sapien, ac efficitur justo. Aenean vel nibh fermentum, accumsan sem vitae, pharetra nulla. Aenean diam mauris, interdum et rutrum id, commodo at erat. Duis porttitor sem nec odio volutpat, porttitor molestie ex efficitur. Pellentesque maximus dictum est non suscipit. Sed viverra dolor quis vestibulum viverra. Sed eget lectus mattis, convallis ex quis, tempus felis. Vestibulum eros purus, dignissim id ornare eget, semper et nisi.',NULL,NULL,NULL,'Rua jatoba',NULL,NULL,'(85) 98615-2512',NULL,NULL,NULL,0,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (3,'Titulo','Caucaia Online'),(4,'footer-text','Caucaia Online - O Guia de Caucaia 2019'),(5,'logo-url','logo.png'),(6,'site_url','https://reclame.caucaia.online');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'alan','abreu','920.509.303-30','98002305519','/uploads/images/alan_1564586805.jpg','1990-03-06','IRxzaMA5ULJbQRQOtnGhvGRoF6GJdj7a0eSbuXVfGPYGySfDQx5A1JtC7yoh','aas2512@gmail.com',NULL,'$2y$10$d8aC9Ni5S6TZywk2YyJPgeaffgoUZ69aeXUAJi3o2QqLhEaY3/8LG','93uoKVHW4MKDMwCbbdIFcsjcq5basayPzsIsCOLurm0yAXzUBMwrsdrUVVL4','2019-07-25 20:47:21','2019-08-01 16:54:15',1),(2,'Alan',NULL,NULL,NULL,NULL,NULL,NULL,'alan__abreu@hotmail.com',NULL,'$2y$10$drDpnrNk49ICWdIsVi6cLu90Ki7QfQVBBL4UQddi3zGg28DtYe.Ny',NULL,'2019-07-25 21:05:56','2019-07-26 22:06:55',0),(3,'Luis','Carlos',NULL,NULL,NULL,NULL,NULL,'luis@carlos.com',NULL,'$2y$10$US6y4WyEsU8O23KtZK75RO1GNB/okDghNLcPUkPD6vf7sreVipnta',NULL,'2019-08-01 05:08:14','2019-08-03 05:52:11',0);
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

-- Dump completed on 2019-08-03  0:30:51
