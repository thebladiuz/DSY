-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: mysql
-- ------------------------------------------------------
-- Server version	8.0.31-google

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `starlighthotel`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `starlighthotel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `starlighthotel`;

--
-- Table structure for table `admin_cred`
--

DROP TABLE IF EXISTS `admin_cred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_cred` (
  `sr_no` int NOT NULL,
  `admin_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_pass` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_cred`
--

LOCK TABLES `admin_cred` WRITE;
/*!40000 ALTER TABLE `admin_cred` DISABLE KEYS */;
INSERT INTO `admin_cred` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin_cred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking_details` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `room_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `total_pay` int NOT NULL,
  `room_no` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phonenum` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sr_no`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_details`
--

LOCK TABLES `booking_details` WRITE;
/*!40000 ALTER TABLE `booking_details` DISABLE KEYS */;
INSERT INTO `booking_details` VALUES (1,1,'Minh',42411,127233,NULL,'abc','123','stejkhhwfkawf'),(7,2,'Minh',42411,84822,NULL,'abc','123','stejkhhwfkawf'),(8,3,'Minh',42411,212055,'B2001','Minh Le Vu','0904681103','hanoi'),(9,4,'Sample Room 1',1244,7464,NULL,'Minh Le Vu','0904681103','hanoi'),(10,5,'Sample Room 1',1244,6220,NULL,'abc','123','stejkhhwfkawf'),(11,5,'Minh',42411,466521,'34A','ngoclh567','0345643674','hanoi'),(12,6,'Minh',42411,466521,NULL,'ngoclh567','0345643674','hanoi'),(13,7,'Sample Room 1',1244,12440,'12A','ngoclh567','0345643674','hanoi'),(14,8,'Sample Room 1',1244,16172,NULL,'ngoclh567','0345643674','hanoi'),(15,9,'Sample Room 1',1244,2488,NULL,'ngoclh567','0345643674','hanoi'),(16,10,'Sample Room 1',1244,2488,NULL,'ngoclh567','0345643674','hanoi'),(17,11,'Minh',42411,84822,NULL,'ngoclh567','0345643674','hanoi');
/*!40000 ALTER TABLE `booking_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_order`
--

DROP TABLE IF EXISTS `booking_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking_order` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `room_id` int NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `arrival` int NOT NULL DEFAULT '0',
  `refund` int DEFAULT NULL,
  `booking_status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `order_id` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `trans_id` int DEFAULT NULL,
  `trans_amt` int NOT NULL,
  `trans_status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `trans_resp_msg` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rate_review` int DEFAULT NULL,
  `datentime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`),
  KEY `user_id` (`user_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_order`
--

LOCK TABLES `booking_order` WRITE;
/*!40000 ALTER TABLE `booking_order` DISABLE KEYS */;
INSERT INTO `booking_order` VALUES (1,3,21,'2023-12-08','2023-12-11',0,NULL,'booked','ORD_38718981',141414,42411,'TXN_SUCCESS',NULL,NULL,'2023-11-18 17:40:00'),(2,3,21,'2023-12-29','2023-12-31',0,0,'canceled','ORD_34450558',251057,42411,'TXN_FAILED',NULL,NULL,'2023-11-18 17:41:00'),(3,2,21,'2023-12-01','2023-12-06',1,NULL,'booked','ORD_28377504',221412,42411,'TXN_SUCCESS',NULL,1,'2023-11-18 17:42:54'),(4,2,20,'2023-12-07','2023-12-13',0,1,'canceled','ORD_25981788',256141,1244,'TXN_FAILED',NULL,NULL,'2023-11-18 17:45:10'),(5,3,20,'2023-12-01','2023-12-06',1,NULL,'booked','ORD_3434920',NULL,0,'pending',NULL,NULL,'2023-11-18 18:26:36'),(6,0,21,'2023-11-20','2023-12-01',0,NULL,'booked','ORD_05814520',4567,6535,'TXN_SUCCESS',NULL,0,'2023-11-19 09:53:13'),(7,0,21,'2023-11-20','2023-12-01',0,1,'canceled','ORD_01224183',NULL,0,'TXN_SUCCESS',NULL,NULL,'2023-11-19 11:49:02'),(8,0,20,'2023-12-04','2023-12-14',1,NULL,'booked','ORD_05934946',NULL,0,'TXN_SUCCESS',NULL,1,'2023-12-02 23:26:46'),(9,0,20,'2023-12-14','2023-12-27',0,NULL,'booked','ORD_04742783',NULL,0,'TXN_SUCCESS',NULL,NULL,'2023-12-02 23:34:20'),(10,0,20,'2023-12-06','2023-12-08',0,1,'canceled','ORD_09766895',NULL,123,'TXN_FAILED',NULL,NULL,'2023-12-02 23:34:41'),(11,0,20,'2023-12-03','2023-12-05',0,NULL,'payment failed','ORD_02840571',NULL,4500,'TXN_FAILED',NULL,NULL,'2023-12-02 23:42:43'),(12,0,21,'2023-12-04','2023-12-06',0,NULL,'booked','ORD_06372065',NULL,0,'TXN_SUCCESS',NULL,NULL,'2023-12-03 11:07:08');
/*!40000 ALTER TABLE `booking_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carousel` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `image` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carousel`
--

LOCK TABLES `carousel` WRITE;
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
INSERT INTO `carousel` VALUES (1,'IMG_1.png'),(2,'IMG_2.png'),(3,'IMG_3.png'),(4,'IMG_4.png'),(5,'IMG_5.png'),(6,'IMG_6.png');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_details`
--

DROP TABLE IF EXISTS `contact_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_details` (
  `sr_no` int NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gmap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pn1` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pn2` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `fb` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `insta` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tw` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `iframe` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_details`
--

LOCK TABLES `contact_details` WRITE;
/*!40000 ALTER TABLE `contact_details` DISABLE KEYS */;
INSERT INTO `contact_details` VALUES (1,'Km 9 Đ. Nguyễn Trãi, P, Nam Từ Liêm, Hà Nội','https://maps.app.goo.gl/zPG8pCvi8u1m9cd89','+8404681103','+917778889','ask.hotel@gmail.com','facebook.com','instagram.com','twitter.com','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7450.186318798353!2d105.79123422618102!3d20.98890247269994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adb29ed54487:0xbe22035eae87b5d7!2sHanoi University!5e0!3m2!1sen!2s!4v1695222440690!5m2!1sen!2s');
/*!40000 ALTER TABLE `contact_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facilities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilities`
--

LOCK TABLES `facilities` WRITE;
/*!40000 ALTER TABLE `facilities` DISABLE KEYS */;
INSERT INTO `facilities` VALUES (1,'IMG_43553.svg','Wifi','WiFi, short for Wireless Fidelity, is a ubiquitous and essential hotel service offered to guests as part of their overall experience'),(2,'IMG_96423.svg','Room Heater','Room Heater allows guests to adjust the temperature in their rooms to their liking, ensuring a cozy and warm atmosphere.'),(3,'IMG_41622.svg','Television','Televisions in hotel rooms provide entertainment and information to guests. They offer a diverse selection of channels, including news, sports, movies, and more. '),(4,'IMG_47816.svg','Spa','A spa is a luxurious and rejuvenating oasis within a hotel where guests can indulge in a range of therapeutic treatments and relaxation experiences. '),(5,'IMG_49949.svg','Air Conditioning','Air Conditioning allows guests to control the rooms temperature, ensuring a cool and comfortable environment, even during the hottest months of the year.'),(6,'IMG_27079.svg','Geyser','A geyser, or water heater, is an essential appliance in hotels, especially in regions with cold climates. It ensures that guests have access to hot water for bathing and other needs.');
/*!40000 ALTER TABLE `facilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (1,'Balcony'),(2,'Kitchen'),(3,'Bathroom'),(4,'Bedroom'),(9,'Living Room');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating_review`
--

DROP TABLE IF EXISTS `rating_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating_review` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `booking_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `review` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `seen` int DEFAULT '0',
  `datentime` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating_review`
--

LOCK TABLES `rating_review` WRITE;
/*!40000 ALTER TABLE `rating_review` DISABLE KEYS */;
INSERT INTO `rating_review` VALUES (1,3,21,2,5,'This is the best hotel',0,'2023-11-18 18:04:58');
/*!40000 ALTER TABLE `rating_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_facilities`
--

DROP TABLE IF EXISTS `room_facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_facilities` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `facilities_id` int NOT NULL,
  PRIMARY KEY (`sr_no`),
  KEY `room id` (`room_id`),
  KEY `facilities` (`facilities_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_facilities`
--

LOCK TABLES `room_facilities` WRITE;
/*!40000 ALTER TABLE `room_facilities` DISABLE KEYS */;
INSERT INTO `room_facilities` VALUES (100,20,1),(101,20,2),(102,20,3),(103,20,6),(104,21,3),(105,21,5),(106,21,6);
/*!40000 ALTER TABLE `room_facilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_features`
--

DROP TABLE IF EXISTS `room_features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_features` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `features_id` int NOT NULL,
  PRIMARY KEY (`sr_no`),
  KEY `rm id` (`room_id`),
  KEY `features` (`features_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_features`
--

LOCK TABLES `room_features` WRITE;
/*!40000 ALTER TABLE `room_features` DISABLE KEYS */;
INSERT INTO `room_features` VALUES (64,20,1),(65,20,3),(66,20,4),(67,21,1),(68,21,3),(69,21,9);
/*!40000 ALTER TABLE `room_features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_images`
--

DROP TABLE IF EXISTS `room_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_images` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `thumb` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`sr_no`),
  KEY `room_images_ibdk_1` (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_images`
--

LOCK TABLES `room_images` WRITE;
/*!40000 ALTER TABLE `room_images` DISABLE KEYS */;
INSERT INTO `room_images` VALUES (10,21,'IMG_79030.png',1),(11,21,'IMG_77364.png',0),(12,20,'IMG_67485.png',1);
/*!40000 ALTER TABLE `room_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `area` int NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `adult` int NOT NULL,
  `children` int NOT NULL,
  `description` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `removed` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (20,'Singles Room',30,30,2,2,1,'This room is for 2 adults or 1 adult and 1 children',1,0),(21,'Doubles Room',80,63,5,3,2,'This can be used to housed 3 adults or 2 adults and 2 children',1,0);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `sr_no` int NOT NULL,
  `site_title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `site_about` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Starlight Hotel','This is the Hotel Booking System!!!!',0);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_details`
--

DROP TABLE IF EXISTS `team_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_details` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `picture` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_details`
--

LOCK TABLES `team_details` WRITE;
/*!40000 ALTER TABLE `team_details` DISABLE KEYS */;
INSERT INTO `team_details` VALUES (18,'James','IMG_17352.jpg');
/*!40000 ALTER TABLE `team_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_cred`
--

DROP TABLE IF EXISTS `user_cred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_cred` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `phonenum` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pincode` int NOT NULL,
  `dob` date NOT NULL,
  `profile` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `datentime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_cred`
--

LOCK TABLES `user_cred` WRITE;
/*!40000 ALTER TABLE `user_cred` DISABLE KEYS */;
INSERT INTO `user_cred` VALUES (1,'Pham Thi Thu Ha','phamha21@gmail.com','Hanoi University','0141411511',100000,'2003-10-03','IMG_2145.jpg','123456789',1,'2023-11-18 17:27:17'),(2,'Minh Le Vu','2101040003@s.hanu.edu.vn','hanoi','0904681103',100000,'2003-11-22','IMG_18639.jpg','$2y$10$s0W6Z0O5I0hlCcsh5PoOPeiZ8.MEdM7RZNI1o7UNbHTBW/BAf8gnG',1,'2023-10-24 10:24:40'),(3,'abc','abc@gmail.com','stejkhhwfkawf','123',141414,'1141-12-04','IMG_27371.jpeg','$2y$10$Hy60rvxZxAmqEdGlTBFw..7X5enk.j8upxuU9YThRiE98GwiRPwia',1,'2023-10-24 10:27:01');
/*!40000 ALTER TABLE `user_cred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_queries`
--

DROP TABLE IF EXISTS `user_queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_queries` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `datentime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seen` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_queries`
--

LOCK TABLES `user_queries` WRITE;
/*!40000 ALTER TABLE `user_queries` DISABLE KEYS */;
INSERT INTO `user_queries` VALUES (3,'Pham Thi Thu Ha','phamha21@gmail.com','Suggestions for improvement','I think you should add videos and reviews of rooms and facilities','2023-10-04 15:14:43',0),(4,'Le Vu Minh','smgames2099@gmail.com','Test Message','This is a test message','2023-10-04 15:15:03',0);
/*!40000 ALTER TABLE `user_queries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-04  0:34:49
