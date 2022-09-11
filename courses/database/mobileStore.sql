-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.10-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table mobile_store.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `disable` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.admins: ~4 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `mobile`, `email`, `password`, `name`, `disable`) VALUES
	(1, '0532294508', 'gouda@sair.sa', NULL, NULL, 0),
	(3, '0532294509', 'gouda@sair.sz', NULL, NULL, 0),
	(4, '05433232', NULL, NULL, NULL, 0),
	(5, '09948343', NULL, NULL, NULL, 0),
	(6, '096545455', NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table mobile_store.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.brands: ~14 rows (approximately)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`id`, `name`, `description`, `image`, `active`) VALUES
	(1, 'Apple', 'Apple Description 333', 'xyz 444', 1),
	(2, 'Apple2', 'Description 333 Apple', 'xyz 444', 1),
	(4, 'a', 'a desc', NULL, 1),
	(5, 'b', 'b desc', NULL, 1),
	(6, 'c', 'gouda', NULL, 1),
	(7, 'c', 'Ahmed', NULL, 1),
	(8, 'c', 'Emad', NULL, 1),
	(9, 'c', 'c desc', NULL, 1),
	(10, 'c', 'c desc', NULL, 1),
	(11, 'c', 'c desc', NULL, 1),
	(12, 'c', 'c desc', NULL, 1),
	(13, 'c', 'c desc', NULL, 1),
	(14, 'c', 'c desc', NULL, 1),
	(15, 'c', 'c desc', NULL, 1);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping structure for table mobile_store.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `token` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `disable` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.clients: ~3 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `mobile`, `email`, `password`, `name`, `address`, `token`, `active`, `disable`) VALUES
	(1, '05322294508', 'goudaelalfy@gmail.com', NULL, NULL, NULL, NULL, 1, 0),
	(2, '020333233', NULL, NULL, NULL, NULL, NULL, 1, 0),
	(3, '0112334555', 'ahmed@google.com', NULL, NULL, NULL, NULL, 0, 0);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table mobile_store.models
CREATE TABLE IF NOT EXISTS `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(20,2) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `FK_models_brands` (`brand_id`),
  CONSTRAINT `FK_models_brands` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.models: ~0 rows (approximately)
/*!40000 ALTER TABLE `models` DISABLE KEYS */;
INSERT INTO `models` (`id`, `name`, `description`, `price`, `brand_id`) VALUES
	(1, 'i phone 7', NULL, 1200.00, 1),
	(2, 'i phone 8', NULL, 1300.00, 1),
	(3, 'i phone 10', NULL, 1500.00, 1),
	(4, 'i phone 11', NULL, 2000.00, 1),
	(5, 'sumsung galaxy 9', NULL, 800.00, 4),
	(6, 'sumsung galaxy 10', NULL, 1000.00, 4),
	(7, 'sumsung galaxy 11', NULL, 1400.00, 4);
/*!40000 ALTER TABLE `models` ENABLE KEYS */;

-- Dumping structure for table mobile_store.model_images
CREATE TABLE IF NOT EXISTS `model_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`image`) USING BTREE,
  KEY `FK_image models_models` (`model_id`) USING BTREE,
  CONSTRAINT `FK_image models_models` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.model_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_images` ENABLE KEYS */;

-- Dumping structure for table mobile_store.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` int(11) NOT NULL DEFAULT 0,
  `the_date` date DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_orders_clients` (`client_id`),
  CONSTRAINT `FK_orders_clients` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table mobile_store.order_models
CREATE TABLE IF NOT EXISTS `order_models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `price` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__order` (`order_id`),
  KEY `FK_order_models_models` (`model_id`),
  CONSTRAINT `FK__order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `FK_order_models_models` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobile_store.order_models: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_models` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_models` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;