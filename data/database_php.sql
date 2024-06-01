-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for database_php
CREATE DATABASE IF NOT EXISTS `database_php` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `database_php`;

-- Dumping structure for table database_php.navicella
CREATE TABLE IF NOT EXISTS `navicella` (
  `nome` char(50) DEFAULT NULL,
  `codice` int(11) NOT NULL AUTO_INCREMENT,
  `username_utente` char(50) DEFAULT NULL,
  PRIMARY KEY (`codice`),
  KEY `username_utente` (`username_utente`),
  CONSTRAINT `FK1_navicella_utente` FOREIGN KEY (`username_utente`) REFERENCES `utente` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php.navicella: ~1 rows (approximately)
REPLACE INTO `navicella` (`nome`, `codice`, `username_utente`) VALUES
	('Supernova', 1, 'gaiafedeli');

-- Dumping structure for table database_php.utente
CREATE TABLE IF NOT EXISTS `utente` (
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `username` char(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `comune` char(50) DEFAULT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php.utente: ~1 rows (approximately)
REPLACE INTO `utente` (`nome`, `cognome`, `username`, `email`, `telefono`, `comune`, `indirizzo`, `password`) VALUES
	('Gaia', 'Fedeli', 'gaiafedeli', 'gaiafedeli2@gmail.com', NULL, 'Caponago', NULL, '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
