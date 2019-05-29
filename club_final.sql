-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: club
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `club_board_members`
--

DROP TABLE IF EXISTS `club_board_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `club_board_members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `club_board_members_club_id_foreign` (`club_id`),
  CONSTRAINT `club_board_members_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club_board_members`
--

LOCK TABLES `club_board_members` WRITE;
/*!40000 ALTER TABLE `club_board_members` DISABLE KEYS */;
INSERT INTO `club_board_members` VALUES (3,'Alexander Thalhammer','111-111111','test@gmail.com','Sorgenthalgasse 7/1/6','Wien','1210','��sterreich','president',135,'2019-05-10 16:00:00','2019-05-10 16:00:00'),(4,'Mario Popovits','111-111122','test2@gmail.com','Sorgenthalgasse 7/1/6','Wien','1210','��sterreich','manager',135,'2019-05-10 16:00:00','2019-05-12 04:22:55'),(5,'Andreas Freiberger','111-111111','te@gmail.com','Frauenberg 24','Stegersbach\r\n','7551','AUT','president',136,'2019-05-10 16:00:00','2019-05-10 16:00:00'),(6,'Christian Schittl','111-1111','te2@gmail.com','Frauenberg 24','Stegersbach','7551','AUT','manager',136,'2019-05-10 16:00:00','2019-05-10 16:00:00'),(7,'Markus Dreier','0699/12478483','ttt@gmail.com','Sdtiroler Gasse','St. Andrrdern','3423','Denmark','president',137,'2019-05-10 16:00:00','2019-05-12 04:36:55'),(8,'Laurin Rauter','0699/12478483','ttt2@gmail.com','Sdtiroler Gasse','St. Andrdern','3423','Denmark','manager',137,'2019-05-10 16:00:00','2019-05-12 04:37:04'),(9,'Gschiel Manuel','222-4444','tt@gmail.com','Unterdombach 40','Buch','8274','AUT','president',138,'2019-05-10 16:00:00','2019-05-12 00:16:55'),(10,'Jochinger Dominik','222-3333','tt2@gmail.com','Unterdombach 40','Buch','8274','AUT','manager',138,'2019-05-10 16:00:00','2019-05-12 00:16:45'),(11,'Meyer Mario','0664/88345136','mm@gmail.com','Hopsagasse 5','Wien','1200','��sterreich','president',139,'2019-05-10 16:00:00','2019-05-10 16:00:00'),(12,'Victor Kargl','0664/88345136','mm2@gmail.com','Hopsagasse 5','Wien','1200','��sterreich','manager',139,'2019-05-10 16:00:00','2019-05-10 16:00:00');
/*!40000 ALTER TABLE `club_board_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clubs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteurl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs`
--

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` VALUES (135,'HC Mad Dogs Wiener Neustadt','HC Mad Dogs Wiener Neustadt','Karl Palkagasse 4/2/9','2700','Wiener Neustadt','office@maddogs.at','��sterreich\r\n','http://www.maddogs.at\r\n','562387458','2019-05-10 16:00:00','0000-00-00 00:00:00'),(136,'IHV Raptors Eisenstadt','IHV Raptors Eisenstadt','Parkstra','7000','Eisenstadt,','raptors.eisenstadt@gmx.at','Austria','http://www.ferrumlegio.hu/','153772523','2019-05-10 16:00:00','2019-05-12 04:36:40'),(137,'THC Torpedo Donaustadt','THC Torpedo Donaustadt','Sorgenthalgasse 7/1/6','1210','Wien','alexander.thalhammer@aon.at','AUT','http://www.thctorpedo.at','986990604','2019-05-10 16:00:00','2019-05-12 00:17:25'),(138,'TSV HC Hartberg\r\n','TSV HC Hartberg','Unterdombach 40','8274','Buch\r\n','hchartberg@aon.at\r\n','AUT\r\n','http://www.hchartberg.at\r\n','31654249\r\n','2019-05-10 16:00:00','2019-05-10 16:00:00'),(139,'Vienna 95ers WAT XX \r\n','Vienna 95ers WAT XX \r\n','Hopsagasse 5\r\n','1200','Wien','patrick.gindl@gmx.at','AUT\r\n','http://www.95ers.at\r\n','12324453\r\n','2019-05-10 16:00:00','2019-05-10 16:00:00');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `excel_files`
--

DROP TABLE IF EXISTS `excel_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `excel_files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `excel_files`
--

LOCK TABLES `excel_files` WRITE;
/*!40000 ALTER TABLE `excel_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `excel_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_05_11_191529_create_clubs_table',2),(4,'2019_05_12_054003_create_club_board_members_table',3),(5,'2019_05_12_084956_create_excel_files_table',4),(7,'2019_05_12_095012_change_users_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','test@test.com',NULL,'$2y$10$mfx4OG7UccgBEotS/g1WhuwlIZuv35Nd5MD3ljpDi0P/PRWawomAe',NULL,'2019-05-10 19:04:26','2019-05-12 02:28:16','club_admin',135),(2,'admin','admin@club.com',NULL,'$2y$10$RrGBA4LYvrknPV8F0wTbZ.DebHnX4K6pbGlbnqimv9zbTOR5dS0Wm',NULL,'2019-05-12 01:57:36','2019-05-12 01:57:36','admin',NULL),(3,'jack','jack@club.com',NULL,'$2y$10$GEIdhcG7D.E3l87U9eMC/OLwRkQvnww0qsFbGb.cPmPzpkTMgchHa',NULL,'2019-05-12 02:12:13','2019-05-12 02:12:13','user',NULL);
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

-- Dump completed on 2019-05-12 20:39:21
