-- MySQL dump 10.16  Distrib 10.1.10-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: kenyafashionawardsdb
-- ------------------------------------------------------
-- Server version	10.1.10-MariaDB

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
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicants`
--

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;
INSERT INTO `applicants` VALUES (9,'Clark Kent','Smallville Superhero Limited','johngachihi3@gmail.com','+254 111 111111','2019-04-28 06:09:00','2019-04-28 06:09:00',NULL),(10,'Oliver Queen','Starling City Industries','johngachihi3@gmail.com','+254 723 444888','2019-04-28 15:10:20','2019-04-28 15:10:20',NULL),(11,'Bruce Wayne','Wayne Enterprises','johngachihi3@gmail.com','+254 723 456 789','2019-04-28 15:13:07','2019-04-28 15:13:07',NULL),(12,'Hal Jordan','Green Lantern Corp','johngachihi3@gmail.com','+254 722 345 567','2019-04-28 15:17:12','2019-04-28 15:17:12',NULL),(13,'Diana Prince','Themyscira Limited','johngachihi3@gmail.com','+254 722 345 567','2019-04-28 15:21:25','2019-04-28 15:21:25',NULL),(14,'Author Joseph Curry','Atlantis Area','johngachihi3@gmail.com','+254 722 345 567','2019-04-28 15:26:24','2019-04-28 15:26:24',NULL),(15,'Oliver Queen','Starling City Company','johngachihi3@gmail.com','+254 722 345 567','2019-04-28 15:32:05','2019-04-28 15:32:05',NULL);
/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `applicant_id` bigint(20) NOT NULL,
  `award_category_id` int(11) NOT NULL,
  `decision` enum('approved','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (9,11,22,'rejected','2019-04-28 15:13:07','2019-05-04 16:41:55'),(10,12,23,'rejected','2019-04-28 15:17:12','2019-05-04 17:05:38'),(11,13,24,'rejected','2019-04-28 15:21:25','2019-05-04 17:07:32'),(12,14,23,'approved','2019-04-28 15:26:24','2019-05-05 06:29:25'),(13,15,23,NULL,'2019-04-28 15:32:05','2019-05-04 16:38:48');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `award_categories`
--

DROP TABLE IF EXISTS `award_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `award_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Category_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `richCategory_Requirements` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `award_categories`
--

LOCK TABLES `award_categories` WRITE;
/*!40000 ALTER TABLE `award_categories` DISABLE KEYS */;
INSERT INTO `award_categories` VALUES (1,'Fashion Designer Men’s/Women’s',NULL,'2019-04-28 15:03:06','PHA+PGk+PHN0cm9uZz5UaGlzIGlzIGl0ITwvc3Ryb25nPjwvaT4gJm5ic3A7PC9wPjx1bD48bGk+SW5kaXZpZHVhbCB3aG8gc3BlY2lhbGl6ZXMgaW4gY3JlYXRpbmcgcmVhZHktdG8td2Vhci90YWlsb3IvY3VzdG9tL3VyYmFuIGdhcm1lbnRzIGZvciBtZW4gYW5kL29yIHdvbWVuLiBSZWFkeS10by13ZWFyIGNsb3RoaW5nIGlzIGRlZmluZWQgYXMgY2xvdGhpbmcgbWFya2V0ZWQgaW4gYSBmaW5pc2hlZCBjb25kaXRpb24sIG1hZGUgaW4gc3RhbmRhcmQgc2l6ZXMuPC9saT48bGk+SW5kaXZpZHVhbCB3aG8gbWFrZXMgY3VzdG9tLWRlc2lnbmVkIGdhcm1lbnRzIG1hZGUgdG8gdGhlIGNsaWVudOKAmXMgbWVhc3VyZTsgPHN0cm9uZz5lc3BlY2lhbGx5IHN1aXRzPC9zdHJvbmc+LCA8c3Ryb25nPnRyb3VzZXJzPC9zdHJvbmc+IGFuZDxzdHJvbmc+IGphY2tldHMuPC9zdHJvbmc+PC9saT48bGk+SW5kaXZpZHVhbCB3aG8gc3BlY2lhbGl6ZXMgaW4gdGhlIGNyZWF0aW9uIG9mIHdvbWVu4oCZcyBvciBtZW7igJlzIHVyYmFuIHdlYXIuJm5ic3A7IFVyYmFuIGNsb3RoaW5nIGlzIGNvbnNpZGVyZWQgY2FzdWFsIGNsb3RoaW5nIHRoYXQgY2F0ZXJzIHRvIHRoZSB5b3V0aCBhbmQgaXMgaW5zcGlyZWQgYnkgdGhlIDxpPjxzdHJvbmc+aGlwLWhvcDwvc3Ryb25nPjwvaT4gY3VsdHVyZTwvbGk+PC91bD4='),(2,'Fashion Photographer (Up-coming/Established)',NULL,'2019-04-28 15:04:27','PHA+TXVzdCBzcGVjaWFsaXplIGluIHRoZSBnZW5yZSBvZiA8c3Ryb25nPmZhc2hpb248L3N0cm9uZz4sIDxzdHJvbmc+Y29tbWVyY2lhbCA8L3N0cm9uZz5vciByZWxhdGVkIHBob3RvZ3JhcGh5PC9wPg=='),(18,'Accessorizes/Jewelry Designer (Up-coming/Established)','2019-04-19 11:40:26','2019-04-19 11:40:26','PHA+PHN0cm9uZz5JbmRpdmlkdWFsPC9zdHJvbmc+LCA8c3Ryb25nPmJvdXRpcXVlIDwvc3Ryb25nPm9yIDxzdHJvbmc+Z3JvdXAgPC9zdHJvbmc+d2hvIGRlc2lnbnMgYW5kIGNyZWF0ZXMgYWNjZXNzb3JpZXMgZm9yIG1lbiBvciB3b21lbiwgZm9yIHVzZSBpbiA8c3Ryb25nPnBob3RvZ3JhcGh5PC9zdHJvbmc+LCA8c3Ryb25nPnJ1bndheSBwcmVzZW50YXRpb25zPC9zdHJvbmc+IGFuZC9vciA8c3Ryb25nPmZvciBzYWxlIHRvIHRoZSBnZW5lcmFsIHB1YmxpYzwvc3Ryb25nPjwvcD4='),(22,'Clothing Stylist (Up-coming/Established)','2019-04-28 15:05:21','2019-04-28 15:05:21','PHA+SW5kaXZpZHVhbCB3aG8gY29vcmRpbmF0ZXMgdGhlIHN0eWxpbmcgb2Ygd29tZW7igJlzIGFuZC9vciBtZW7igJlzIGNsb3RoaW5nIGFuZCBhY2Nlc3NvcmllcyB1c2VkIGluIHBob3RvZ3JhcGh5IGFuZC9vciBydW53YXkgcHJlc2VudGF0aW9ucy4gJm5ic3A7PGk+VGhpcyBjYXRlZ29yeSBkb2VzIG5vdCBpbmNsdWRlIGNsb3RoaW5nIGRlc2lnbiBhbmQvb3Igc2V3aW5nLjwvaT48L3A+'),(23,'Male Model','2019-04-28 15:16:41','2019-04-28 15:16:41','PHA+SW5kaXZpZHVhbCBtYWxlIHdpdGg6Jm5ic3A7PC9wPjx1bD48bGk+YWR2YW5jZWQgcnVud2F5IGFuZC9vciBwcmludCBleHBlcmllbmNlIGFuZCBwcmVzZW5jZS48L2xpPjxsaT5Qb3NzZXNzIHRoZSBza2lsbHMgYW5kIHRoZSBsb29rIHRvIG1ha2UgaXQgdG8gdGhlIHRvcCBtYXJrZXRzIGFuZCBtYWpvciBydW53YXkgc2hvd3MvIHByaW50IGFkcy48L2xpPjwvdWw+'),(24,'Female Runway Model','2019-04-28 15:21:11','2019-04-28 15:21:11','PHA+SW5kaXZpZHVhbCBmZW1hbGUgd2l0aCBhZHZhbmNlZCBydW53YXkgZXhwZXJpZW5jZSBhbmQgcHJlc2VuY2UsIHBvc3Nlc3MgdGhlIHNraWxscyBhbmQgdGhlIGxvb2sgdG8gbWFrZSBpdCB0byB0aGUgdG9wIG1hcmtldHMgYW5kIG1ham9yIHJ1bndheSBzaG93cy4gPHN0cm9uZz5NdXN0IGJlIGJldHdlZW4gNeKAmTcgYW5kIDbigJkwPC9zdHJvbmc+LjwvcD4='),(25,'Fashion Model','2019-04-29 03:53:07','2019-04-29 03:53:07','PHVsPjxsaT5zYWRmZGY8L2xpPjxsaT5kc2ZzYTwvbGk+PC91bD4=');
/*!40000 ALTER TABLE `award_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogger_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'2014_10_12_000000_create_users_table',1),(5,'2014_10_12_100000_create_password_resets_table',1),(6,'2019_04_11_053005_create__award_categories_table',2),(9,'2019_04_13_090146_add_role_to_users_table',3),(12,'2019_04_17_171105_add_rich_category_requirements_to__award_categories_table',4),(14,'2019_04_19_150906_drop_plaintext_category_requirements_column_from_award_categories',5),(15,'2019_04_27_180719_create_applicants_table',6),(16,'2019_04_27_181226_create_applications_table',7),(18,'2019_04_28_085430_add_bio_to_applicants_table',8),(21,'2019_05_05_142314_create_votes_table',9);
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
  `role` enum('normal_user','admin','blog_admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Peter Kelly','peter@test.com',NULL,'$2y$10$4oBgn4baammAK05sX2jLgOSU5dfGIpmg8/Z8gdxpwpwq1oueqd/Vu',NULL,'2019-04-13 06:13:40','2019-04-13 06:13:40','normal_user'),(2,'Hassan Lami','hassan@lami.com',NULL,'$2y$10$4VMNcVYJXIYTRSI1afA7/uN.0HfWuTNWCz.bsRM79YvyrVN6cP6pG',NULL,'2019-04-13 06:15:08','2019-04-13 06:15:08','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `votes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `award_category_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votes`
--

LOCK TABLES `votes` WRITE;
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
INSERT INTO `votes` VALUES (1,1,9,'2019-05-05 11:53:30','2019-05-05 11:53:30'),(2,1,9,'2019-05-05 11:54:04','2019-05-05 11:54:04');
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-05 17:58:41
