-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 103.145.51.250    Database: ecoconstructdb
-- ------------------------------------------------------
-- Server version	5.5.5-10.5.20-MariaDB

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
-- Table structure for table `buyer_details`
--

DROP TABLE IF EXISTS `buyer_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buyer_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `zipcode` varchar(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `broadcast` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('1','0') DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyer_details`
--

LOCK TABLES `buyer_details` WRITE;
/*!40000 ALTER TABLE `buyer_details` DISABLE KEYS */;
INSERT INTO `buyer_details` VALUES (11,89,'Smith','Smith Associates','canada','mumbai','Green Park','99908',NULL,'0','1','2022-10-19 12:12:37','2022-10-19 12:12:37'),(12,90,'test','test','canada','delhi','hgsxa jhjsudxsi','110090',NULL,'0','1','2022-10-20 05:14:01','2022-10-20 05:14:01'),(13,97,'Tony','tony company','india',NULL,'green road delhi','458796',NULL,'0','1','2022-11-09 21:33:54','2023-06-08 16:07:37'),(14,109,'Ayush','IQ Canada','canada','delhi','Ayush','11001112',NULL,'0','1','2023-01-27 23:58:49','2023-01-27 23:59:58'),(15,111,'Anu','Anu','canada','delhi','Anu','0',NULL,'0','1','2023-06-02 17:20:31','2023-06-02 17:55:54'),(16,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:12:21','2023-06-12 17:06:19'),(17,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:15:24','2023-06-12 17:06:19'),(18,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:15:33','2023-06-12 17:06:19'),(19,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:15:40','2023-06-12 17:06:19'),(20,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:39:47','2023-06-12 17:06:19'),(21,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:44:54','2023-06-12 17:06:19'),(22,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:45:46','2023-06-12 17:06:19'),(23,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-09 20:45:57','2023-06-12 17:06:19'),(24,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:03:08','2023-06-09 21:23:09'),(25,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:03:21','2023-06-09 21:23:09'),(26,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:03:35','2023-06-09 21:23:09'),(27,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:04:09','2023-06-09 21:23:09'),(28,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:22:54','2023-06-09 21:23:09'),(29,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:23:01','2023-06-09 21:23:09'),(30,131,'cenag guha','cenag sdhfsd ltd','usa','British Columbia','green road delhi','758965',NULL,'0','1','2023-06-09 21:23:09','2023-06-09 21:23:09'),(31,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 11:24:08','2023-06-12 17:42:30'),(32,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 11:24:23','2023-06-12 17:42:30'),(33,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 11:24:31','2023-06-12 17:42:30'),(34,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 11:25:21','2023-06-12 17:42:30'),(35,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 11:25:59','2023-06-12 17:42:30'),(36,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 11:26:51','2023-06-12 17:42:30'),(37,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 16:15:23','2023-06-12 17:42:30'),(38,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 16:16:20','2023-06-12 17:42:30'),(39,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 16:16:34','2023-06-12 17:42:30'),(40,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-12 16:43:36','2023-06-12 17:06:19'),(41,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-12 16:56:00','2023-06-12 17:06:19'),(42,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-12 17:04:02','2023-06-12 17:06:19'),(43,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-12 17:04:44','2023-06-12 17:06:19'),(44,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-12 17:05:21','2023-06-12 17:06:19'),(45,129,'Prabhat Ranjan','bmis info tech','india','Quebec','6d road jaipur rajyastan india','0',NULL,'0','1','2023-06-12 17:06:19','2023-06-12 17:06:19'),(46,132,'Sonia S','Sonai Construction','canada','Saskatchewan','Regina street',NULL,NULL,'0','1','2023-06-12 17:42:30','2023-06-12 17:42:30'),(47,134,'Robson','ABC','canada','Saskatchewan','21 street Canada USA','789653',NULL,'0','1','2023-07-03 11:52:15','2023-07-20 13:05:03'),(48,134,'Robson','ABC','canada','Saskatchewan','21 street Canada USA','789653',NULL,'0','1','2023-07-03 11:52:25','2023-07-20 13:05:03'),(49,134,'Robson','ABC','canada','Saskatchewan','21 street Canada USA','789653',NULL,'0','1','2023-07-03 11:52:32','2023-07-20 13:05:03'),(50,134,'Robson','ABC','canada','Saskatchewan','21 street Canada USA','789653',NULL,'0','1','2023-07-03 11:52:55','2023-07-20 13:05:03'),(51,134,'Robson','ABC','canada','Saskatchewan','21 street Canada USA','789653',NULL,'0','1','2023-07-03 11:53:02','2023-07-20 13:05:03'),(52,130,'Rob','Rob Construction','canada','Quebec','21 street road quebec','0',NULL,'0','1','2023-07-10 22:19:53','2023-07-10 22:23:09'),(53,130,'Rob','Rob Construction','canada','Quebec','21 street road quebec','0',NULL,'0','1','2023-07-10 22:20:45','2023-07-10 22:23:09'),(54,140,'Rosel','Rosel Construction','canada','Prince Edward Island','PEI road','111111',NULL,'0','1','2023-07-11 11:34:59','2023-07-11 11:35:58'),(55,140,'Rosel','Rosel Construction','canada','Prince Edward Island','PEI road','111111',NULL,'0','1','2023-07-11 11:35:58','2023-07-11 11:35:58'),(56,139,'tom','tom company','canada','Alberta','xyz canada','LOH-654',NULL,'0','1','2023-07-11 12:12:07','2023-07-11 12:47:36'),(57,142,'Susi','Susi ltd','canada','Ontario','Park street','123qwe',NULL,'0','1','2023-07-11 16:38:55','2023-07-11 16:38:55');
/*!40000 ALTER TABLE `buyer_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1=active,0=inactive',
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (78,93,91,'Hello Jacob','','1','1','2022-10-18 16:26:15','2022-10-18 16:36:33'),(79,97,98,'Hello','','1','1','2022-11-10 11:45:32','2022-11-10 17:03:56'),(80,98,97,'Hi, how is everything ?','','1','1','2022-11-10 11:46:55','2022-11-10 16:56:18'),(81,97,98,'Yes everything is alright, what about you ?','','1','1','2022-11-10 16:56:17','2022-11-10 17:03:56'),(82,98,97,'I am great as well, thanks !','','1','0','2022-11-10 17:03:56','2022-11-10 17:03:56'),(83,109,108,'Hello Kashif, Nice to meet you','','1','1','2023-01-27 23:54:44','2023-01-27 23:55:25'),(84,111,88,'hello john','','1','0','2023-06-02 17:18:53','2023-06-02 17:18:53'),(85,111,88,'how are you','','1','0','2023-06-02 18:01:15','2023-06-02 18:01:15'),(86,134,110,'Hello Max','','1','1','2023-07-01 00:36:57','2023-07-11 13:43:56'),(87,110,134,'hello Robson','','1','1','2023-07-01 00:41:48','2023-07-20 13:04:20'),(88,134,135,'Hello John, how are u','','1','1','2023-07-10 13:15:46','2023-07-10 13:26:40'),(89,134,135,'hi pls reply','','1','1','2023-07-10 13:19:59','2023-07-10 13:26:40'),(90,134,135,'I want to purchase','','1','1','2023-07-10 13:21:02','2023-07-10 13:26:40'),(91,135,134,'hi,sure','','1','1','2023-07-10 13:25:21','2023-07-20 13:04:18'),(92,134,135,'can you share quotes of cement','','1','1','2023-07-10 13:26:29','2023-07-10 13:26:40'),(93,134,110,'hi','','1','1','2023-07-10 20:09:54','2023-07-11 13:43:56'),(94,134,110,'how r you?','','1','1','2023-07-10 20:10:22','2023-07-11 13:43:56'),(95,110,134,'hi','','1','1','2023-07-10 20:33:24','2023-07-20 13:04:20'),(96,140,88,'hello john','','1','0','2023-07-11 11:38:50','2023-07-11 11:38:50'),(97,140,138,'hello rebaca','','1','1','2023-07-11 11:48:11','2023-07-11 11:49:10'),(98,138,140,'hi','','1','0','2023-07-11 11:49:10','2023-07-11 11:49:10'),(99,139,110,'hi','','1','1','2023-07-11 12:54:56','2023-07-11 13:44:04'),(100,110,139,'hello','','1','1','2023-07-11 12:55:42','2023-07-11 13:36:58'),(101,139,110,'good','','1','1','2023-07-11 12:57:29','2023-07-11 13:44:04'),(102,142,141,'hello sonia','','1','1','2023-07-11 16:36:50','2023-07-11 16:37:16'),(103,141,142,'hi susi','','1','1','2023-07-11 16:37:16','2023-07-11 16:41:50');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2016_06_01_000001_create_oauth_auth_codes_table',2),(6,'2016_06_01_000002_create_oauth_access_tokens_table',2),(7,'2016_06_01_000003_create_oauth_refresh_tokens_table',3),(8,'2016_06_01_000004_create_oauth_clients_table',4),(9,'2016_06_01_000005_create_oauth_personal_access_clients_table',5),(10,'2022_09_22_124552_add_number_to_users',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `is_read` enum('0','1') NOT NULL DEFAULT '0' COMMENT '1=read,0=unread',
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=active,0=inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (49,90,88,'You have received a RFQ from test for Bricks','0','1','2022-10-21 09:36:10','2022-10-21 09:36:10'),(50,90,88,'You have received a RFQ from test for Cement','0','1','2022-10-21 09:37:13','2022-10-21 09:37:13'),(51,97,98,'You have received a RFQ from Boxinal for Graphite','0','1','2022-11-09 21:34:04','2022-11-09 21:34:04'),(52,98,97,'You have recieved reply of your RFQ from Boxinall.','0','1','2022-11-09 21:35:08','2022-11-09 21:35:08'),(53,97,98,'You have received a RFQ from Boxinal for Graphite','0','1','2022-11-10 17:01:50','2022-11-10 17:01:50'),(54,98,97,'You have recieved reply of your RFQ from Boxinall.','0','1','2022-11-10 17:03:29','2022-11-10 17:03:29'),(55,109,108,'You have received a RFQ from IQ Canada for Solution Grade Gypsum','0','1','2023-01-28 00:00:27','2023-01-28 00:00:27'),(56,111,88,'You have received a RFQ from Anu Design for Cement','0','1','2023-06-02 17:33:00','2023-06-02 17:33:00'),(57,111,88,'You have received a RFQ from Anu Design for Bricks','0','1','2023-06-02 17:33:00','2023-06-02 17:33:00'),(58,98,111,'You have recieved reply of your RFQ from Boxinall.','0','1','2023-06-02 18:21:54','2023-06-02 18:21:54'),(59,132,94,'You have received a RFQ from Sonai Construction for Gypsum','0','1','2023-06-12 11:27:48','2023-06-12 11:27:48'),(60,132,94,'You have received a RFQ from Sonai Construction for Bricks','0','1','2023-06-12 11:27:48','2023-06-12 11:27:48'),(61,132,88,'You have received a RFQ from Sonai Construction for Cement','0','1','2023-06-12 16:19:51','2023-06-12 16:19:51'),(62,115,132,'You have recieved reply of your RFQ from lucky company.','0','1','2023-06-12 16:21:38','2023-06-12 16:21:38'),(63,115,132,'You have recieved reply of your RFQ from lucky company.','0','1','2023-06-12 16:24:02','2023-06-12 16:24:02'),(64,129,88,'You have received a RFQ from bmis info tech for Cement','0','1','2023-06-12 17:13:11','2023-06-12 17:13:11'),(65,115,129,'You have recieved reply of your RFQ from lucky company.','0','1','2023-06-12 17:38:56','2023-06-12 17:38:56'),(66,98,129,'You have recieved reply of your RFQ from Boxinall.','0','1','2023-06-13 11:17:43','2023-06-13 11:17:43'),(67,98,133,'You have recieved reply of your RFQ from Boxinall.','0','1','2023-06-13 11:47:49','2023-06-13 11:47:49'),(68,98,133,'You have recieved reply of your RFQ from Boxinall.','0','1','2023-06-13 11:52:07','2023-06-13 11:52:07'),(69,98,133,'You have recieved reply of your RFQ from Boxinall.','0','1','2023-06-13 11:52:16','2023-06-13 11:52:16'),(70,132,94,'You have received a RFQ from Sonai Construction for Coal','0','1','2023-06-13 12:42:32','2023-06-13 12:42:32'),(71,132,98,'You have received a RFQ from Sonai Construction for Graphite','0','1','2023-06-13 14:43:03','2023-06-13 14:43:03'),(72,132,98,'You have received a RFQ from Sonai Construction for Cement','0','1','2023-06-13 14:43:03','2023-06-13 14:43:03'),(73,132,108,'You have received a RFQ from Sonai Construction for Solution Grade Gypsum','0','1','2023-06-13 14:44:56','2023-06-13 14:44:56'),(74,132,108,'You have received a RFQ from Sonai Construction for Coal','0','1','2023-06-13 14:44:56','2023-06-13 14:44:56'),(75,110,132,'You have recieved reply of your RFQ from Max Group.','0','1','2023-06-30 23:46:04','2023-06-30 23:46:04'),(76,110,133,'You have recieved reply of your RFQ from Max Group.','0','1','2023-06-30 23:46:17','2023-06-30 23:46:17'),(77,110,132,'You have recieved reply of your RFQ from Max Group.','0','1','2023-06-30 23:46:28','2023-06-30 23:46:28'),(78,110,134,'You have recieved reply of your RFQ from Max Group.','0','1','2023-07-01 00:43:19','2023-07-01 00:43:19'),(79,134,88,'You have received a RFQ from ABC for Metals','0','1','2023-07-03 12:30:15','2023-07-03 12:30:15'),(80,134,88,'You have received a RFQ from ABC for Cement','0','1','2023-07-03 12:31:37','2023-07-03 12:31:37'),(81,134,88,'You have received a RFQ from ABC for Bricks','0','1','2023-07-03 12:31:37','2023-07-03 12:31:37'),(82,134,94,'You have received a RFQ from ABC for Coal','0','1','2023-07-03 14:25:05','2023-07-03 14:25:05'),(83,134,94,'You have received a RFQ from ABC for Gypsum','0','1','2023-07-10 13:34:37','2023-07-10 13:34:37'),(84,135,134,'You have recieved reply of your RFQ from Constructionhousejohn.','0','1','2023-07-10 13:35:39','2023-07-10 13:35:39'),(85,135,134,'You have recieved reply of your RFQ from Constructionhousejohn.','0','1','2023-07-10 13:36:32','2023-07-10 13:36:32'),(86,134,98,'You have received a RFQ from ABC for Graphite','0','1','2023-07-10 18:05:51','2023-07-10 18:05:51'),(87,140,94,'You have received a RFQ from Rosel Construction for Gypsum','0','1','2023-07-11 11:37:30','2023-07-11 11:37:30'),(88,140,94,'You have received a RFQ from Rosel Construction for Roof','0','1','2023-07-11 11:37:30','2023-07-11 11:37:30'),(89,139,110,'You have received a RFQ from tom company for Gypsum Powder','0','1','2023-07-11 14:42:24','2023-07-11 14:42:24'),(90,110,139,'You have recieved reply of your RFQ from Max Group.','0','1','2023-07-11 14:43:19','2023-07-11 14:43:19'),(91,141,140,'You have recieved reply of your RFQ from Sonia construction.','0','1','2023-07-11 16:25:13','2023-07-11 16:25:13'),(92,142,141,'You have received a RFQ from Susi ltd for Marble powder','0','1','2023-07-11 16:39:50','2023-07-11 16:39:50'),(93,141,142,'You have recieved reply of your RFQ from Sonia construction.','0','1','2023-07-11 16:41:32','2023-07-11 16:41:32'),(94,141,134,'You have recieved reply of your RFQ from Sonia construction.','0','1','2023-07-20 12:57:42','2023-07-20 12:57:42'),(95,134,138,'You have received a RFQ from ABC for Wood','0','1','2023-07-20 13:05:06','2023-07-20 13:05:06');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `modal_number` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `sources` varchar(255) DEFAULT NULL,
  `condtion_of_material` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `offer` varchar(255) DEFAULT NULL,
  `pick_up_facility` varchar(255) DEFAULT NULL,
  `hours_of_operations` varchar(255) DEFAULT NULL,
  `availabilite_date` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `providing_transport` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `negotiable` enum('0','1') DEFAULT '0',
  `bid` enum('0','1') DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (37,88,'Metals','Caterpillar Dozers','Cat C15','2EK','200','KG','16661761101273551845.png','Industrial','Old','5','0','Free','20','2022-10-20','2000','Yes','2000','1','1',NULL,'2022-10-19 16:11:50','2022-10-19 16:11:50'),(38,88,'Bricks','Caterpillar Dozers','Cat C16','2EB','299','KG','16661772851344545009.png','Industrial','Old','5','0','Free','10','2022-10-21','3000','Yes','2000','1',NULL,NULL,'2022-10-19 16:31:25','2022-10-19 16:31:25'),(39,88,'Cement','Caterpillar Dozers','Cat C19','2EC','20','Tons','16661773961993014843.png','External','New','5','0','Free','20','2022-10-22','100','Yes','10','1',NULL,NULL,'2022-10-19 16:33:16','2022-10-19 16:33:16'),(40,94,'Gypsum','Gypsum Pvt Ltd','G13-B','13','100','KG','16661794442123774120.jpg','Industrial','Old','10','10','Free','100','2022-10-25','1000','Yes','100','1','1',NULL,'2022-10-19 17:07:24','2022-10-19 17:07:24'),(41,94,'Coal','Hem Care Corp','C-9L8','24','500','KG','16661811181083923550.jpg','Industrial','Old','10','10','Free','100','2022-10-20','500','No',NULL,'1',NULL,'1','2022-10-19 17:35:18','2022-10-19 17:35:18'),(43,98,'Graphite','Hem Care Corp','G13-B','13','100','KG','1668079452975393005.jpg','Industrial','Old','10','10','Free','100','2022-11-14','700','No',NULL,'1','1',NULL,'2022-11-10 16:54:12','2022-11-10 16:54:12'),(44,108,'Solution Grade Gypsum','Solution Grade','G5421','175866','190','KG','16748435691897105557.jpeg','Industrial','New','19','17','Free','12','2023-01-30','199','Yes','23','1',NULL,NULL,'2023-01-27 23:49:29','2023-01-27 23:49:29'),(45,98,'Cement','BOB Tiles','004','U00119','100','KG','16866351591874352817.jpg','Industrial','New','10','NA','Free','9','2023-06-30','500','Yes','100','1','1',NULL,'2023-06-13 11:15:59','2023-06-13 11:15:59'),(46,110,'Gypsum Powder','Maxx','GPMAX','009','200','KG','1688127041527039240.jpg','Industrial','New','10','19','Free','12','2023-07-03','199','No','12','1','1',NULL,'2023-06-30 17:40:41','2023-06-30 17:40:41'),(47,135,'ABC','ABC','ABc123','1111111','4','Tons','16889747141973526446.jpg','Industrial','Old','10','NA','Free','12','2023-07-31','100','Yes','50','1','1',NULL,'2023-07-10 13:08:34','2023-07-10 13:08:34'),(48,110,'cement','acc','sdfsf','12545wwsd','100','Tons','1688997539405863351.jpg','Industrial','Old','3','5','Free','6','2023-07-04','500','Yes','50','1','1',NULL,'2023-07-10 19:28:59','2023-07-10 19:28:59'),(49,110,'cement','acc','sdfsf','12545wwsd','100','KG','1688997648949154968.jpg','Industrial','New','9','8','Paid','6','2023-06-27','500','No','50','1','1',NULL,'2023-07-10 19:30:48','2023-07-10 19:30:48'),(50,110,'cement','acc','sdfsf','12545wwsd','100','KG','1688997871597717487.jpg','External','Old','5','8','Free','6','2023-07-05','500','Yes','50','1',NULL,'1','2023-07-10 19:34:31','2023-07-10 19:34:31'),(51,138,'Roof Tiles','R Tiles','r002','213','200`','KG','','External','New','12','9','Free','5','2023-07-10','23','Yes','50','1','1',NULL,'2023-07-10 22:40:48','2023-07-10 22:40:48'),(52,138,'Roof Tiles','R Tiles','r003','213','200`','KG','','External','New','12','9','Free','5','2023-07-11','23','Yes','50','1',NULL,NULL,'2023-07-10 22:44:20','2023-07-10 22:44:20'),(53,138,'Wood','R wood','009','987','90','Tons','','Industrial','Old','67','na','Free','6','2023-07-23','100','Yes','50','1',NULL,NULL,'2023-07-10 22:46:24','2023-07-10 22:46:24'),(54,138,'Tile','RT','879','765','100','Tons','','Industrial','Old','1','1','Free','3','2023-07-13','50','Yes','40','1',NULL,NULL,'2023-07-11 11:51:52','2023-07-11 11:51:52'),(55,110,'cement','acc','sdfsf','12545wwsd','100','KG','1689064774203412469.jpg','External','New','1213','5','Free','6','2023-07-04','500','No','50','1',NULL,'1','2023-07-11 14:09:34','2023-07-11 14:09:34'),(56,110,'cement','acc','sdfsf','12545wwsd','100','KG','1689066348183233430.jpg','Industrial','Old','5','5','Free','6','2023-07-21','500','Yes','50','1','1','1','2023-07-11 14:35:48','2023-07-11 14:35:48'),(57,141,'Tile','Stiles','876','vg78','100','KG','16890730251769137556.jpg','Industrial','Old','6','9','Free','8','2023-07-29','50','Yes','50','1','1',NULL,'2023-07-11 16:27:05','2023-07-11 16:27:05'),(58,141,'Roof tile','tile','678yu','876tg','200','KG','16890733261392376914.avif','External','New','7','6','Free','8','2023-07-28','60','Yes','40','1','1',NULL,'2023-07-11 16:32:06','2023-07-11 16:32:06'),(59,141,'Marble powder','mp','98uy','hhh','700','Tons','16890735442086643937.jpg','Industrial','New','8','2','Paid','6','2023-07-29','50','No','na','1','1',NULL,'2023-07-11 16:35:44','2023-07-11 16:35:44'),(60,138,'Wood','sw2','2222','2222','200','Tons','1689838207935051063.jpg','Industrial','Old','2','2','Free','4','2023-07-31','100','Yes','20','1','1',NULL,'2023-07-20 13:00:07','2023-07-20 13:00:07'),(61,141,'Wood','5555','hj777','hhj78','60','Tons','16898383021784512438.jpg','Industrial','Old','1','1','Free','8','2023-07-26','222','Yes','22','1','1',NULL,'2023-07-20 13:01:42','2023-07-20 13:01:42');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_bids`
--

DROP TABLE IF EXISTS `product_bids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_bids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `bid_amount` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=active,0=inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_bids`
--

LOCK TABLES `product_bids` WRITE;
/*!40000 ALTER TABLE `product_bids` DISABLE KEYS */;
INSERT INTO `product_bids` VALUES (6,41,94,89,'1000','1','2022-10-19 12:06:15','2022-10-19 17:36:18');
/*!40000 ALTER TABLE `product_bids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rfqs`
--

DROP TABLE IF EXISTS `rfqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rfqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `condition_of_materials` varchar(255) DEFAULT NULL,
  `quantity` varchar(25) DEFAULT NULL,
  `shipping_reference` varchar(255) DEFAULT NULL,
  `pickup_faculty` varchar(255) DEFAULT NULL,
  `additional_details` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `broadcast` enum('0','1') DEFAULT '0',
  `bid_status` enum('0','1') DEFAULT NULL COMMENT '1=approved,0=rejected',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rfqs`
--

LOCK TABLES `rfqs` WRITE;
/*!40000 ALTER TABLE `rfqs` DISABLE KEYS */;
INSERT INTO `rfqs` VALUES (58,90,'Bricks','New','20','Express','free','kbhgfdxfcghjokpl[;]\'','1',NULL,NULL,'2022-10-21 09:36:10','2022-10-21 09:36:10'),(59,90,'Cement','New','20','Express','free','hgjhbkjnlkm;l\',;','1',NULL,NULL,'2022-10-21 09:37:13','2022-10-21 09:37:13'),(61,97,'Graphite','Old','100','Express','free','I want to raise an RFQ','1',NULL,'1','2022-11-10 17:01:50','2022-11-10 17:03:29'),(62,109,'Solution Grade Gypsum','all','9','Express','free','I Have a logistics partner, thank you','1',NULL,NULL,'2023-01-28 00:00:27','2023-01-28 00:00:27'),(63,111,'Cement','New','100','Express','free','NA','1','1',NULL,'2023-06-02 17:33:00','2023-06-02 17:33:00'),(64,111,'Bricks','volvo','100','Express','free','NA','1','1','1','2023-06-02 17:33:00','2023-06-02 18:21:54'),(65,132,'Gypsum','all','100','Express','free','Old and new both avaliable','1',NULL,NULL,'2023-06-12 11:27:48','2023-06-12 11:27:48'),(66,132,'Bricks','volvo','500','Express','free','Old and new both avaliable','1',NULL,'1','2023-06-12 11:27:48','2023-06-12 16:24:02'),(67,132,'Cement','Old','12','Express','free','Old and new','1',NULL,'1','2023-06-12 16:19:51','2023-06-12 16:21:38'),(68,129,'Cement','New','100',NULL,NULL,NULL,'1',NULL,'1','2023-06-12 17:13:11','2023-06-13 11:17:43'),(69,133,'Cement','New','100','Express','free','RFQ for urgent need','1',NULL,'1','2023-06-13 11:30:04','2023-06-13 11:52:07'),(70,133,'Graphite','New','100','Express','free','RFQ for urgent need','1',NULL,'1','2023-06-13 11:31:19','2023-06-13 11:52:16'),(71,133,'Graphite','New','100','Express','free','RFQ for urgent need','1',NULL,'1','2023-06-13 11:39:02','2023-06-13 11:47:49'),(72,133,'Bricks','Old','100','Express','free','RFQ for urgent need','1',NULL,NULL,'2023-06-13 12:05:24','2023-06-13 12:05:24'),(73,132,'Coal','New','122','Normal','free','coal','1',NULL,NULL,'2023-06-13 12:42:32','2023-06-13 12:42:32'),(74,133,'Metals','New','100','Express','free','RFQ for urgent need','1',NULL,NULL,'2023-06-13 12:43:45','2023-06-13 12:43:45'),(75,133,'Gypsum','New','100','Express','free','RFQ for urgent need','1',NULL,'1','2023-06-13 14:39:40','2023-06-30 23:46:17'),(76,133,'Solution Grade Gypsum','New','100','Express','free','RFQ for urgent need','1',NULL,NULL,'2023-06-13 14:41:24','2023-06-13 14:41:24'),(77,132,'Graphite','New','299','Express','free','rfq','1',NULL,'1','2023-06-13 14:43:03','2023-06-30 23:46:04'),(78,132,'Cement','saab','12','Express','free','rfq','1',NULL,NULL,'2023-06-13 14:43:03','2023-06-13 14:43:03'),(79,133,'Coal','New','100','Express','free','rfq','1',NULL,NULL,'2023-06-13 14:44:33','2023-06-13 14:44:33'),(80,132,'Solution Grade Gypsum','New','12','Express','free','rfq','1',NULL,'1','2023-06-13 14:44:56','2023-06-30 23:46:28'),(81,132,'Coal','saab','13','Express','free','rfq','1',NULL,NULL,'2023-06-13 14:44:56','2023-06-13 14:44:56'),(82,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1','1','1','2023-06-30 23:57:03','2023-07-01 00:43:19'),(83,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1',NULL,NULL,'2023-06-30 23:57:30','2023-06-30 23:57:30'),(84,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1',NULL,NULL,'2023-06-30 23:57:55','2023-06-30 23:57:55'),(85,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1',NULL,NULL,'2023-06-30 23:58:33','2023-06-30 23:58:33'),(86,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1',NULL,NULL,'2023-06-30 23:58:39','2023-06-30 23:58:39'),(87,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1',NULL,NULL,'2023-06-30 23:59:22','2023-06-30 23:59:22'),(88,134,'Gypsum Powder','all','10','Express','free','I can buy more bulk ,if condition is good.','1',NULL,NULL,'2023-07-01 00:25:22','2023-07-01 00:25:22'),(89,134,'Metals','Old',NULL,NULL,NULL,NULL,'1',NULL,'1','2023-07-03 12:30:15','2023-07-20 12:57:42'),(90,134,'Cement','New','100','Normal','paid','yes','1','1',NULL,'2023-07-03 12:31:37','2023-07-03 12:31:37'),(91,134,'Bricks','saab','100','Normal','paid','yes','1','1',NULL,'2023-07-03 12:31:37','2023-07-03 12:31:37'),(92,134,'Coal','New','100','Express','free','yes','1',NULL,'1','2023-07-03 14:25:05','2023-07-10 13:36:32'),(93,134,'Gypsum','Old',NULL,NULL,NULL,NULL,'1',NULL,'1','2023-07-10 13:34:37','2023-07-10 13:35:39'),(94,134,'Graphite','Old',NULL,NULL,NULL,NULL,'1',NULL,NULL,'2023-07-10 18:05:51','2023-07-10 18:05:51'),(95,140,'Gypsum','New','11','Express','free','NA','1',NULL,NULL,'2023-07-11 11:37:30','2023-07-11 11:37:30'),(96,140,'Roof','volvo','21','Express','free','NA','1',NULL,'1','2023-07-11 11:37:30','2023-07-11 16:25:13'),(97,139,'Gypsum Powder','New','1','Normal','free','yes','1',NULL,'1','2023-07-11 14:42:24','2023-07-11 14:43:19'),(98,142,'Marble powder','all','12','Express','paid','Fast response','1',NULL,'1','2023-07-11 16:39:50','2023-07-11 16:41:32'),(99,134,'Wood','all','1000','Express','free',NULL,'1',NULL,NULL,'2023-07-20 13:05:06','2023-07-20 13:05:06');
/*!40000 ALTER TABLE `rfqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_details`
--

DROP TABLE IF EXISTS `seller_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seller_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=active,0=inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_details`
--

LOCK TABLES `seller_details` WRITE;
/*!40000 ALTER TABLE `seller_details` DISABLE KEYS */;
INSERT INTO `seller_details` VALUES (34,88,'blue ledder construction','202210181501.pdf','1','2022-10-18 15:01:39','2022-10-18 15:05:39'),(35,91,'Jacob Construction','202210181602.jpg','1','2022-10-18 16:02:56','2022-10-18 16:37:20'),(36,94,'Builders Pvt Ltd','202210191208.jpg','1','2022-10-19 12:08:07','2022-10-19 12:08:07'),(37,98,'Boxinall','202211092111.jpg','1','2022-11-09 21:11:15','2023-06-07 21:16:17'),(38,99,'Boxinall','202211101646.pdf','1','2022-11-10 16:46:21','2022-11-10 16:46:21'),(39,104,'WaysAhead','202211291324.jpeg','1','2022-11-29 13:24:31','2022-11-29 13:24:31'),(40,106,'WaysAhead','202301271835.jpg','1','2023-01-27 18:35:51','2023-01-27 18:35:51'),(41,108,'IQ Canada','202301272338.pdf','1','2023-01-27 23:38:13','2023-01-27 23:38:13'),(42,110,'Max Group','202306021459.jpg','1','2023-06-02 14:59:34','2023-06-30 23:44:51'),(43,112,'bmis info tech','202306072005.jpg','1','2023-06-07 20:05:49','2023-06-07 20:05:49'),(44,115,'lucky company','202306081614.jpg','1','2023-06-08 16:14:44','2023-06-08 16:14:44'),(45,125,'Jack and company','202306091853.jpg','1','2023-06-09 18:53:13','2023-06-09 18:53:13'),(46,135,'Constructionhousejohn','202307101259.jpg','1','2023-07-10 12:59:35','2023-07-10 12:59:35'),(47,137,'abc','202307101839.jpg','1','2023-07-10 18:39:46','2023-07-10 18:39:46'),(48,138,'Rebacca Company','202307102231.jpg','1','2023-07-10 22:31:01','2023-07-10 22:31:01'),(49,141,'Sonia construction','202307111621.jpg','1','2023-07-11 16:21:58','2023-07-11 16:21:58');
/*!40000 ALTER TABLE `seller_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_plans`
--

DROP TABLE IF EXISTS `subscription_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `success_fee` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `plan_validity` varchar(255) DEFAULT NULL,
  `valid_for` enum('buyer','seller','both') NOT NULL DEFAULT 'both',
  `features` longtext DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_plans`
--

LOCK TABLES `subscription_plans` WRITE;
/*!40000 ALTER TABLE `subscription_plans` DISABLE KEYS */;
INSERT INTO `subscription_plans` VALUES (1,'PRO','.12%','25.99','1 month','both','All Basic Membership Features,Alerts,Ratings and Reviews','1','2022-10-08 06:08:59','2022-10-08 06:08:59'),(2,'Basic','.10%','15.99','1 month','both','All Basic Membership Features,Alerts,','1','2022-10-12 13:28:58','2022-10-12 13:28:58');
/*!40000 ALTER TABLE `subscription_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_details`
--

DROP TABLE IF EXISTS `transaction_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `card_type` enum('visa','master','master1') NOT NULL,
  `card_number` varchar(16) DEFAULT NULL,
  `card_valid_month` int(11) DEFAULT NULL,
  `card_valid_year` int(11) DEFAULT NULL,
  `card_cvv` int(11) DEFAULT NULL,
  `card_holder_name` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `paid` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_details`
--

LOCK TABLES `transaction_details` WRITE;
/*!40000 ALTER TABLE `transaction_details` DISABLE KEYS */;
INSERT INTO `transaction_details` VALUES (30,88,1,'visa','1231231231231231',9,2025,123,'john Cena',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-18 15:03:15','2022-10-18 15:03:15'),(31,90,1,'visa','1231231231231321',9,2025,123,'Chris Depp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-18 15:18:34','2022-10-18 15:18:34'),(32,89,1,'visa','4401923439391399',8,2023,800,'Chris',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-18 15:18:55','2022-10-18 15:18:55'),(33,91,2,'visa','1234567890111111',12,2024,123,'Jacob',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-18 16:08:28','2022-10-18 16:08:28'),(34,93,1,'visa','1234566666666666',9,2025,222,'Alexa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-18 16:20:44','2022-10-18 16:20:44'),(35,94,1,'visa','0192910000908999',8,2023,800,'Cruze',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-19 12:09:25','2022-10-19 12:09:25'),(36,95,2,'visa','7834437434743478',12,2022,321,'ecfcf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-19 15:27:38','2022-10-19 15:27:38'),(37,95,1,'visa','9898767868687897',12,2022,123,'Testmode',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-10-19 15:28:27','2022-10-19 15:28:27'),(38,97,1,'visa','0192910000908999',8,2023,889,'Troy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-11-09 21:22:01','2022-11-09 21:22:01'),(39,98,1,'visa','0192910000908999',12,2023,889,'Troy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2022-11-09 21:25:07','2022-11-09 21:25:07'),(40,105,1,'visa','4559980099009999',12,2023,900,'Sam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-01-27 18:39:59','2023-01-27 18:39:59'),(41,106,1,'visa','5647564792746583',2,2024,400,'Ayush',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-01-27 18:57:15','2023-01-27 18:57:15'),(42,108,1,'visa','5664378795667332',9,2025,556,'Kashif Mateen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-01-27 23:45:47','2023-01-27 23:45:47'),(43,109,2,'visa','4644378947899332',9,2024,302,'AYUSH',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-01-27 23:53:03','2023-01-27 23:53:03'),(44,111,1,'visa','9999999999999999',9,2024,122,'ruchita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-02 16:21:56','2023-06-02 16:21:56'),(45,112,2,'visa','1234567899876541',9,2023,333,'Prabhat Ranjan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-08 12:06:48','2023-06-08 12:06:48'),(46,125,1,'visa','9999999999999999',12,2024,777,'jack',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-09 18:55:13','2023-06-09 18:55:13'),(47,129,2,'visa','1234567893216547',10,2024,326,'Vikash',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-09 19:42:48','2023-06-09 19:42:48'),(48,130,2,'visa','8888888888888888',9,2024,777,'rob',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-09 19:52:49','2023-06-09 19:52:49'),(49,131,2,'visa','2356478987954632',9,2023,123,'cenag',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-09 21:02:32','2023-06-09 21:02:32'),(50,132,1,'visa','4111111111111111',9,2024,222,'sonai',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-12 11:21:08','2023-06-12 11:21:08'),(51,115,2,'visa','4111111111111111',9,2024,0,'sonia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-12 16:21:13','2023-06-12 16:21:13'),(52,133,2,'master','1111111111111111',12,2026,123,'ABC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-13 11:23:08','2023-06-13 11:23:08'),(53,110,1,'visa','4111111111111111',9,2024,456,'max',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-30 17:34:27','2023-06-30 17:34:27'),(54,134,2,'visa','4111111111111111',9,2024,333,'robson',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-06-30 23:51:47','2023-06-30 23:51:47'),(55,135,1,'visa','3333333333333333',12,2025,123,'John',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-10 13:06:27','2023-07-10 13:06:27'),(56,135,1,'visa','3333333333333333',12,2025,123,'John',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-10 13:06:27','2023-07-10 13:06:27'),(57,138,2,'visa','4111111111111111',9,2029,123,'rebacca',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-10 22:36:58','2023-07-10 22:36:58'),(58,140,1,'visa','4111111111111111',9,2024,222,'rosel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-11 11:32:21','2023-07-11 11:32:21'),(59,139,2,'visa','1234567891234567',11,2025,123,'prabhat',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-11 12:10:38','2023-07-11 12:10:38'),(60,141,1,'visa','4111111111111111',9,2024,333,'sonia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-11 16:23:52','2023-07-11 16:23:52'),(61,142,2,'visa','4111111111111111',9,2027,333,'susi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2023-07-11 16:28:44','2023-07-11 16:28:44');
/*!40000 ALTER TABLE `transaction_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `role` enum('admin','buyer','seller') NOT NULL DEFAULT 'buyer',
  `approved` enum('0','1') DEFAULT NULL COMMENT '1 = approved, 0 = rejected',
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=active,0=Inactive',
  `member_ship_id` varchar(255) DEFAULT NULL,
  `paid` enum('paid','unpaid','expire') NOT NULL DEFAULT 'unpaid',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$10$4JO0geaYbCYVryPXZz6cKeY6BFH.rjbzR3s4wDtnM.7ACVFoswpya','12312123',1234,'admin','0','1',NULL,'unpaid','tJ6F8uSZKozPBuPuRFKBuGtu6Wv1LrqFIPxxYSRy3GAVPQrSXJjWHFL5QymV','2022-09-22 17:22:49','2022-10-06 15:12:44'),(88,'john Cena','johncena_123@gmail.com',NULL,NULL,'9810773499',1234,'seller','1','1','30','paid',NULL,'2022-10-18 15:01:39','2022-10-18 15:05:39'),(89,'Chris','chris@boxinallsoftech.com',NULL,NULL,'000000009',1234,'buyer',NULL,'1','32','paid',NULL,'2022-10-18 15:17:33','2022-10-18 15:18:55'),(90,'Chris Depp','Chrisdepp_123@gmail.com',NULL,NULL,'9878767655',1234,'buyer',NULL,'1','31','paid',NULL,'2022-10-18 15:17:49','2022-10-18 15:18:34'),(91,'Jacob','jacob@gmail.com',NULL,NULL,'1231231231',1234,'seller','1','1','33','paid',NULL,'2022-10-18 16:02:56','2022-10-18 16:37:20'),(92,'Alex','alex@gmail.com',NULL,NULL,'9810772400',1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2022-10-18 16:17:00','2022-10-18 16:17:00'),(93,'Alexa','alexa@gmail.com',NULL,NULL,'9810773400',1234,'buyer',NULL,'1','34','paid',NULL,'2022-10-18 16:19:37','2022-10-18 16:34:15'),(94,'Cruze','cruze@boxinallsoftech.com',NULL,NULL,'0000000008',1234,'seller','1','1','35','paid',NULL,'2022-10-19 12:08:07','2022-10-19 12:09:25'),(95,'Test mode','mode12@gmail.com',NULL,NULL,'7897897897',1234,'buyer',NULL,'1','37','paid',NULL,'2022-10-19 15:19:48','2022-10-19 15:28:27'),(96,'Alberto','alberto@boxinallsoftech.com',NULL,NULL,'000000007',1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2022-10-21 13:11:41','2022-10-21 13:11:41'),(97,'Tony','To@gmail.com',NULL,NULL,'9009999099',1234,'buyer',NULL,'1','38','paid',NULL,'2022-11-09 14:55:37','2023-06-08 10:37:37'),(98,'Troy','tr@boxinallsoftech.com',NULL,NULL,'80000800',1234,'seller','1','1','39','paid',NULL,'2022-11-09 15:41:15','2023-06-07 15:46:17'),(99,'Cody','cody@boxinallsoftech.com',NULL,NULL,'9870903026',1234,'seller','1','1',NULL,'unpaid',NULL,'2022-11-10 11:16:21','2022-11-10 11:17:03'),(100,'Sapna Gupta','analytics@waysahead.net',NULL,NULL,'0920 591 2412',1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2022-11-29 07:26:38','2022-11-29 07:26:38'),(101,'Amit Burman','connect@waysaheadglobal.com',NULL,NULL,'9818125803',1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2022-11-29 07:28:37','2022-11-29 07:28:37'),(103,'Varsha Verma','sendmailtoversha@gmail.com',NULL,NULL,'0958 248 5372',1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2022-11-29 07:37:58','2022-11-29 07:37:58'),(104,'Amit Sharma','sapna.gupta03g@gmail.com',NULL,NULL,'9876543219',1234,'seller','1','1',NULL,'unpaid',NULL,'2022-11-29 07:54:31','2023-06-08 06:00:43'),(105,'Ayush','ayushb2009@gmail.com',NULL,NULL,'8527169001',1234,'buyer',NULL,'1','40','paid',NULL,'2023-01-27 10:46:30','2023-01-27 13:09:59'),(106,'Ayush','info@waysaheadglobal.com',NULL,NULL,'7836966547',1234,'seller','1','1','41','paid',NULL,'2023-01-27 13:05:51','2023-01-27 13:27:15'),(108,'Kashif','kashifmateen@hotmail.com',NULL,NULL,'566564438',1234,'seller','1','1','42','paid',NULL,'2023-01-27 18:08:13','2023-01-27 18:15:47'),(109,'Ayush','rajiv@iqcanada.ca',NULL,NULL,'7011356707',1234,'buyer',NULL,'1','43','paid',NULL,'2023-01-27 18:22:03','2023-01-27 18:23:03'),(110,'Max Grey','max@gmail.com',NULL,NULL,'9810999999',1234,'seller','1','1','53','paid',NULL,'2023-06-02 09:29:34','2023-06-30 18:14:51'),(111,'Anu','anu@gmail.com',NULL,NULL,'9999999999',1234,'buyer',NULL,'1','44','paid',NULL,'2023-06-02 10:47:56','2023-06-02 12:24:46'),(112,'Prabhat Ranjan','ranjan.prabhat793@gmail.com',NULL,NULL,'9123369359',1234,'seller','1','1','45','paid',NULL,'2023-06-07 14:35:49','2023-06-08 06:36:48'),(115,'lucky','lucky@gmail.com',NULL,NULL,'9810773469',1234,'seller','1','1','51','paid',NULL,'2023-06-08 10:44:44','2023-06-12 10:51:13'),(116,'Prabhat','pr2abhat@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-08 11:52:29','2023-06-08 11:52:29'),(118,'Prabhat','muna@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-08 12:07:17','2023-06-08 12:07:17'),(119,'sun','pr23abhat@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-08 12:12:14','2023-06-08 12:12:14'),(120,'sunder','sunder@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 12:04:07','2023-06-09 12:04:07'),(121,'lucy','lucy@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 12:29:15','2023-06-09 12:29:15'),(122,'Ama','ama@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 12:31:22','2023-06-09 12:31:22'),(123,'rose','rose@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 12:33:40','2023-06-09 12:33:40'),(124,'chad','chad@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 13:20:49','2023-06-09 13:20:49'),(125,'jack','jack@gmail.com',NULL,NULL,'7777777777',1234,'seller','1','1','46','paid',NULL,'2023-06-09 13:23:13','2023-06-09 13:25:13'),(126,'samcuran','samcuran@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 13:39:14','2023-06-09 13:39:14'),(127,'Prabhat','tuna@gmail.com',NULL,NULL,NULL,1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-06-09 13:44:23','2023-06-09 13:44:23'),(129,'Prabhat Ranjan','tuna33@gmail.com',NULL,NULL,'912336935999',1234,'buyer',NULL,'1','47','paid',NULL,'2023-06-09 13:48:30','2023-06-12 11:36:19'),(130,'Rob','rob@gmail.com',NULL,NULL,'1111111111',1234,'buyer',NULL,'1','48','paid',NULL,'2023-06-09 14:22:07','2023-07-10 16:50:45'),(131,'cenag guha','cenag@gmail.com',NULL,NULL,'9958748796',1234,'buyer',NULL,'1','49','paid',NULL,'2023-06-09 15:31:25','2023-06-09 15:53:09'),(132,'Sonia S','sonia@gmail.com',NULL,NULL,'6666666666',1234,'buyer',NULL,'1','50','paid',NULL,'2023-06-12 05:49:20','2023-06-12 12:12:30'),(133,'Varsha','uiuxvarsha37@gmail.com',NULL,NULL,'9988776655',1234,'buyer',NULL,'1','52','paid',NULL,'2023-06-13 05:51:29','2023-06-13 05:53:08'),(134,'Robson','robson@gmail.com',NULL,NULL,'5555555555',1234,'buyer',NULL,'1','54','paid',NULL,'2023-06-30 18:20:41','2023-07-03 06:23:02'),(135,'John Smith','john@gmail.com',NULL,NULL,'8888888888',1234,'seller','1','1','56','paid',NULL,'2023-07-10 07:29:35','2023-07-10 07:36:27'),(136,'varsha','yecomo2719@iturchia.com',NULL,NULL,'9582485372',1234,'buyer',NULL,'1',NULL,'unpaid',NULL,'2023-07-10 13:01:53','2023-07-10 13:01:53'),(137,'varsha','colano4175@mahmul.com',NULL,NULL,'8877665544',1234,'seller','1','1',NULL,'unpaid',NULL,'2023-07-10 13:09:46','2023-07-10 17:21:08'),(138,'Rebacca','rebacca@gmail.com',NULL,NULL,'8888888889',1234,'seller','1','1','57','paid',NULL,'2023-07-10 17:01:01','2023-07-10 17:06:58'),(139,'tom','tom@gmail.com',NULL,NULL,'4569871236',1234,'buyer',NULL,'1','59','paid',NULL,'2023-07-11 05:58:27','2023-07-11 06:42:07'),(140,'Rosel','rosel@gmail.com',NULL,NULL,'9876543211',1234,'buyer',NULL,'1','58','paid',NULL,'2023-07-11 06:01:05','2023-07-11 06:05:58'),(141,'Sonia','soni@gmail.com',NULL,NULL,'4444444446',1234,'seller','1','1','60','paid',NULL,'2023-07-11 10:51:58','2023-07-20 07:23:18'),(142,'Susi','susi@gmail.com',NULL,NULL,'6666666664',1234,'buyer',NULL,'1','61','paid',NULL,'2023-07-11 10:58:09','2023-07-11 10:58:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
INSERT INTO `wishlists` VALUES (18,93,33,'1','2022-10-18 10:51:02','2022-10-18 10:51:02'),(21,90,37,'1','2022-10-20 04:59:26','2022-10-20 04:59:26'),(22,89,40,'1','2022-10-21 07:35:09','2022-10-21 07:35:09'),(25,109,44,'1','2023-01-28 00:04:32','2023-01-28 00:04:32'),(26,109,37,'1','2023-01-28 00:04:36','2023-01-28 00:04:36'),(27,111,37,'1','2023-06-02 17:19:13','2023-06-02 17:19:13'),(28,111,39,'1','2023-06-02 17:19:20','2023-06-02 17:19:20'),(29,111,40,'1','2023-06-02 18:01:55','2023-06-02 18:01:55'),(30,133,37,'1','2023-06-13 11:39:41','2023-06-13 11:39:41'),(31,140,37,'1','2023-07-11 11:39:36','2023-07-11 11:39:36'),(32,142,38,'1','2023-07-11 16:42:23','2023-07-11 16:42:23'),(33,142,51,'1','2023-07-11 16:48:06','2023-07-11 16:48:06');
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-13 12:03:18
