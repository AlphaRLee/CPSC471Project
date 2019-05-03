-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cpsc471_project
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secretary_ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Accounting','Calgary','101101002','101101003'),(2,'Sales','Calgary','202202002','202202003'),(3,'Marketing','Calgary','303303002','303303003'),(4,'Human Resource','Calgary','404404002','404404003'),(5,'Engineering','Calgary','505505002','505505003'),(6,'Research and Development','Calgary','606606002','606606003'),(7,'Information Technology','Calgary','707707002','707707003'),(8,'Management','Calgary','808808002','808808003'),(9,'Finance','Calgary','909909002','909909003');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department_expense_code`
--

DROP TABLE IF EXISTS `department_expense_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department_expense_code` (
  `department_id` bigint(20) NOT NULL,
  `expense_code_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_expense_code`
--

LOCK TABLES `department_expense_code` WRITE;
/*!40000 ALTER TABLE `department_expense_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `department_expense_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('101101001','John','Smith','1970-01-01','male','24 Sussex Drive','a1a1a1','Calgary','Alberta','Canada',1),('101101002','Jane','Doe','1970-01-01','female','24 Sussex Drive','b2b2b2','Calgary','Alberta','Canada',1),('101101003','Jack','Jones','1970-01-01','male','24 Sussex Drive','c3c3c3','Calgary','Alberta','Canada',1),('202202002','Austen','Kuhic','1970-01-01','male','3425 Walker Ramp Suite 053','a1a1a1','Calgary','Alberta','Canada',2),('202202003','Andreane','Durgan','1970-01-01','male','617 Zemlak Crescent','a1a1a1','Calgary','Alberta','Canada',2),('303303002','Charlie','Schumm','1970-01-01','male','7809 Sigrid Route','a1a1a1','Calgary','Alberta','Canada',3),('303303003','Lucious','Metz','1970-01-01','male','94582 Mariane Stravenue Apt. 875','a1a1a1','Calgary','Alberta','Canada',3),('404404002','Jovani','Beahan','1970-01-01','male','87198 Emmerich Ports Suite 227','a1a1a1','Calgary','Alberta','Canada',4),('404404003','Remington','Schinner','1970-01-01','male','90989 Upton Orchard','a1a1a1','Calgary','Alberta','Canada',4),('505505002','Alia','Dare','1970-01-01','male','97139 Sunny Parkways','a1a1a1','Calgary','Alberta','Canada',5),('505505003','Eve','Wisozk','1970-01-01','male','7655 Orie Pine Apt. 727','a1a1a1','Calgary','Alberta','Canada',5),('606606002','Icie','Rohan','1970-01-01','male','7367 Mayert Stream Apt. 053','a1a1a1','Calgary','Alberta','Canada',6),('606606003','Marlee','Hackett','1970-01-01','male','375 Gaetano Mount Apt. 360','a1a1a1','Calgary','Alberta','Canada',6),('707707002','Laurence','Ritchie','1970-01-01','male','2023 Stiedemann Grove Suite 258','a1a1a1','Calgary','Alberta','Canada',7),('707707003','Janessa','Crona','1970-01-01','male','223 Breana Well Suite 542','a1a1a1','Calgary','Alberta','Canada',7),('808808002','Leon','Gutkowski','1970-01-01','male','56368 Judy Trafficway Apt. 648','a1a1a1','Calgary','Alberta','Canada',8),('808808003','Fleta','Armstrong','1970-01-01','male','164 Mayert Islands','a1a1a1','Calgary','Alberta','Canada',8),('909909001','Frank','Eves','1970-01-01','male','485 Lolita Gateway','a1a1a1','Calgary','Alberta','Canada',9),('909909002','Ezequiel','Jacobson','1970-01-01','male','544 Araceli Gateway','a1a1a1','Calgary','Alberta','Canada',9),('909909003','Zaria','Connelly','1970-01-01','male','1435 Laron Creek Suite 538','a1a1a1','Calgary','Alberta','Canada',9);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_phone`
--

DROP TABLE IF EXISTS `employee_phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_phone` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_phone`
--

LOCK TABLES `employee_phone` WRITE;
/*!40000 ALTER TABLE `employee_phone` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_phone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double(8,2) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_id` bigint(20) NOT NULL,
  `secretary_ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense`
--

LOCK TABLES `expense` WRITE;
/*!40000 ALTER TABLE `expense` DISABLE KEYS */;
INSERT INTO `expense` VALUES (1,NULL,'http://cdn.arn.com.au/media/8341540/subway-receipt.jpg?width=339px&height=522px','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','101101001',1,NULL,NULL,NULL),(2,NULL,'https://s3-media3.fl.yelpcdn.com/bphoto/sMazOH7A9Vf10FBeHKVDFg/ls.jpg','processed','2019-04-15 01:52:48','2019-04-15 01:52:48','101101003',1,NULL,NULL,NULL),(3,NULL,'https://myjourneywithdepression.com/t/2018/12/all-receipts-photo-a-payment-receipt-includes-the-information-collected-during-the-transaction-the-subtotal-as-well-as-any-applicable-tips-tadiscounts.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','909909001',5,NULL,NULL,NULL),(4,NULL,'https://media-cdn.tripadvisor.com/media/photo-s/0d/c7/de/dc/the-receipt.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','606606003',9,NULL,NULL,NULL),(5,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXPD1RaF1wzTx85eCQPsNjalPhZYG0bzFWT-muMLxJ7EoPzGwr','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','404404002',4,NULL,NULL,NULL),(6,NULL,'https://s3-media3.fl.yelpcdn.com/bphoto/EkRa7Fhu8ZgwBVcLqMkq4A/o.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','303303002',5,NULL,NULL,NULL),(7,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXPD1RaF1wzTx85eCQPsNjalPhZYG0bzFWT-muMLxJ7EoPzGwr','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','707707003',10,NULL,NULL,NULL),(8,NULL,'http://4.bp.blogspot.com/-PjDG1C17gZU/T6EuocgcdPI/AAAAAAAAEUo/iFON3DJxAiI/s1600/DSC01715.JPG','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','606606002',7,NULL,NULL,NULL),(9,NULL,'https://media-cdn.tripadvisor.com/media/photo-s/06/f1/27/bd/bill-full-price-no-discount.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','404404002',8,NULL,NULL,NULL),(10,NULL,'http://d2lkv2j4m042s95gkf28dijm.wpengine.netdna-cdn.com/wp-content/uploads/2013/01/IMG_1623.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','101101002',3,NULL,NULL,NULL),(11,NULL,'https://media-cdn.tripadvisor.com/media/photo-s/0d/c7/de/dc/the-receipt.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','202202002',5,NULL,NULL,NULL),(12,NULL,'https://media-cdn.tripadvisor.com/media/photo-s/0d/c7/de/dc/the-receipt.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','202202002',5,NULL,NULL,NULL),(13,NULL,'https://myjourneywithdepression.com/t/2018/12/all-receipts-photo-a-payment-receipt-includes-the-information-collected-during-the-transaction-the-subtotal-as-well-as-any-applicable-tips-tadiscounts.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','505505002',6,NULL,NULL,NULL),(14,NULL,'https://myjourneywithdepression.com/t/2018/12/all-receipts-photo-a-payment-receipt-includes-the-information-collected-during-the-transaction-the-subtotal-as-well-as-any-applicable-tips-tadiscounts.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','606606002',10,NULL,NULL,NULL),(15,NULL,'https://media-cdn.tripadvisor.com/media/photo-s/0d/c7/de/dc/the-receipt.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','808808002',2,NULL,NULL,NULL),(16,NULL,'https://s3-media3.fl.yelpcdn.com/bphoto/EkRa7Fhu8ZgwBVcLqMkq4A/o.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','707707003',3,NULL,NULL,NULL),(17,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXPD1RaF1wzTx85eCQPsNjalPhZYG0bzFWT-muMLxJ7EoPzGwr','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','202202003',2,NULL,NULL,NULL),(18,NULL,'http://project-swatch.com/wp-content/uploads/2014/01/target-receipt.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','606606003',5,NULL,NULL,NULL),(19,NULL,'https://myjourneywithdepression.com/t/2018/12/all-receipts-photo-a-payment-receipt-includes-the-information-collected-during-the-transaction-the-subtotal-as-well-as-any-applicable-tips-tadiscounts.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','303303003',9,NULL,NULL,NULL),(20,NULL,'https://media-cdn.tripadvisor.com/media/photo-s/06/f1/27/bd/bill-full-price-no-discount.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','303303002',3,NULL,NULL,NULL),(21,NULL,'https://myjourneywithdepression.com/t/2018/12/all-receipts-photo-a-payment-receipt-includes-the-information-collected-during-the-transaction-the-subtotal-as-well-as-any-applicable-tips-tadiscounts.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','303303003',5,NULL,NULL,NULL),(22,NULL,'https://s3-media3.fl.yelpcdn.com/bphoto/EkRa7Fhu8ZgwBVcLqMkq4A/o.jpg','submitted','2019-04-15 01:52:48','2019-04-15 01:52:48','606606003',4,NULL,NULL,NULL);
/*!40000 ALTER TABLE `expense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_code`
--

DROP TABLE IF EXISTS `expense_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_code` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_code`
--

LOCK TABLES `expense_code` WRITE;
/*!40000 ALTER TABLE `expense_code` DISABLE KEYS */;
INSERT INTO `expense_code` VALUES (1,'Food and Beverage'),(2,'Gifts'),(3,'Local Travel'),(4,'Non-local Travel'),(5,'Lodging'),(6,'Vehicle and Gas Usage'),(7,'Supplies'),(8,'Equipment'),(9,'Maintenance'),(10,'Miscellanious');
/*!40000 ALTER TABLE `expense_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financial_expert`
--

DROP TABLE IF EXISTS `financial_expert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financial_expert` (
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_expert`
--

LOCK TABLES `financial_expert` WRITE;
/*!40000 ALTER TABLE `financial_expert` DISABLE KEYS */;
INSERT INTO `financial_expert` VALUES ('909909001','909z'),('909909002','909z'),('909909003','909z');
/*!40000 ALTER TABLE `financial_expert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manager` (
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` VALUES ('101101003','101c'),('202202003','202c'),('303303003','303c'),('404404003','404c'),('505505003','505c'),('606606003','606c'),('707707003','707c'),('808808003','808c'),('909909003','909c');
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_04_01_140957_create_secretary_table',1),(4,'2019_04_01_141342_create_manager_table',1),(5,'2019_04_01_141415_create_financial_expert_table',1),(6,'2019_04_01_141532_create_department_table',1),(7,'2019_04_01_141628_create_expense_code_table',1),(8,'2019_04_04_081252_create_employee_table',1),(9,'2019_04_04_123732_create_expense_table',1),(10,'2019_04_04_142701_create_report_table',1),(11,'2019_04_04_142855_create_employee_phone_table',1),(12,'2019_04_04_150332_create_department_expense_code_table',1),(13,'2019_04_11_205908_correct_description_name_on_expense_code',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `manager_ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `financial_expert_ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `report_financial_expert_ssn_foreign` (`financial_expert_ssn`),
  CONSTRAINT `report_financial_expert_ssn_foreign` FOREIGN KEY (`financial_expert_ssn`) REFERENCES `financial_expert` (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secretary`
--

DROP TABLE IF EXISTS `secretary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secretary` (
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secretary`
--

LOCK TABLES `secretary` WRITE;
/*!40000 ALTER TABLE `secretary` DISABLE KEYS */;
INSERT INTO `secretary` VALUES ('101101002','101b'),('202202002','202b'),('303303002','303b'),('404404002','404b'),('505505002','505b'),('606606002','606b'),('707707002','707b'),('808808002','808b'),('909909002','909b');
/*!40000 ALTER TABLE `secretary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_ssn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'john.smith@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:47','2019-04-15 01:52:47','101101001'),(2,'jane.doe@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:47','2019-04-15 01:52:47','101101002'),(3,'jack.jones@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','101101003'),(4,'austen.kuhic@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','202202002'),(5,'andreane.durgan@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','202202003'),(6,'charlie.schumm@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','303303002'),(7,'lucious.metz@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','303303003'),(8,'jovani.beahan@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','404404002'),(9,'remington.schinner@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','404404003'),(10,'alia.dare@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','505505002'),(11,'eve.wisozk@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','505505003'),(12,'icie.rohan@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','606606002'),(13,'marlee.hackett@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','606606003'),(14,'laurence.ritchie@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','707707002'),(15,'janessa.crona@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','707707003'),(16,'leon.gutkowski@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','808808002'),(17,'fleta.armstrong@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','808808003'),(18,'frank.eves@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','909909001'),(19,'ezequiel.jacobson@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','909909002'),(20,'zaria.connelly@test.com',NULL,'$2y$10$Lzt4uB1kjHFTw0GrfZmoBOpsnAluJ9Kt.oDnYJ76tE1BJOcJ71QfC',NULL,'2019-04-15 01:52:48','2019-04-15 01:52:48','909909003');
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

-- Dump completed on 2019-04-14 14:00:15
