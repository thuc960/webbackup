-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for webbackup
DROP DATABASE IF EXISTS `webbackup`;
CREATE DATABASE IF NOT EXISTS `webbackup` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `webbackup`;
 
-- Dumping structure for table webbackup.wbk_schedule
DROP TABLE IF EXISTS `wbk_schedule`;
CREATE TABLE IF NOT EXISTS `wbk_schedule` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_type` int(255) NOT NULL,
  `id_server_src` int(255) NOT NULL,
  `id_server_des` int(255) NOT NULL,
  `repeat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_begin` timestamp NOT NULL,
  `time_end` timestamp NOT NULL,
  `keep` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table webbackup.wbk_server
DROP TABLE IF EXISTS `wbk_server`;
CREATE TABLE IF NOT EXISTS `wbk_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `describe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table webbackup.wbk_table
DROP TABLE IF EXISTS `wbk_table`;
CREATE TABLE IF NOT EXISTS `wbk_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `server_src` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_des` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repeat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keep` int(11) NOT NULL,
  `time_schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_begin` timestamp NOT NULL,
  `time_end` timestamp NOT NULL,
  `time_total` int(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table webbackup.wbk_type
DROP TABLE IF EXISTS `wbk_type`;
CREATE TABLE IF NOT EXISTS `wbk_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
