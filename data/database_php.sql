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


-- Dumping database structure for database_php1
CREATE DATABASE IF NOT EXISTS `database_php1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `database_php1`;

-- Dumping structure for table database_php1.navicella
CREATE TABLE IF NOT EXISTS `navicella` (
  `nome_navicella` char(50) DEFAULT NULL,
  `cod_navicella` char(50) NOT NULL,
  `username_utente` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_navicella`),
  KEY `username_utente` (`username_utente`),
  CONSTRAINT `FK1_username_utente` FOREIGN KEY (`username_utente`) REFERENCES `utenti` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php1.navicella: ~0 rows (approximately)

-- Dumping structure for table database_php1.pianeta
CREATE TABLE IF NOT EXISTS `pianeta` (
  `nome_pianeta` char(50) DEFAULT NULL,
  `cod_pianeta` char(50) NOT NULL,
  `diametro` int(14) DEFAULT NULL,
  PRIMARY KEY (`cod_pianeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php1.pianeta: ~0 rows (approximately)

-- Dumping structure for table database_php1.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` char(50) NOT NULL,
  `nome_utente` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `password` char(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `comune` char(50) DEFAULT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php1.utenti: ~2 rows (approximately)
REPLACE INTO `utenti` (`username`, `nome_utente`, `cognome`, `password`, `email`, `telefono`, `comune`, `indirizzo`) VALUES
	('marti', 'Martina', 'Villa', 'aaaaaaaaaa', 'martina.villa@liceobanfi.eu', 2147483647, 'Agrate', 'Via Biagio, 72'),
	('martina', 'Martina', 'Villa', 'aaaa', 'martina.villa@liceobanfi.eu', 2147483647, 'Agrate', 'Via Biagio, 72');

-- Dumping structure for table database_php1.viaggia
CREATE TABLE IF NOT EXISTS `viaggia` (
  `cod_navicella` char(50) NOT NULL,
  `cod_pianeta` char(50) NOT NULL,
  PRIMARY KEY (`cod_navicella`,`cod_pianeta`) USING BTREE,
  KEY `FK2_cod_pianeta` (`cod_pianeta`),
  CONSTRAINT `FK1_cod_navicella` FOREIGN KEY (`cod_navicella`) REFERENCES `navicella` (`cod_navicella`),
  CONSTRAINT `FK2_cod_pianeta` FOREIGN KEY (`cod_pianeta`) REFERENCES `pianeta` (`cod_pianeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php1.viaggia: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
