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
  `nome_navicella` char(50) DEFAULT NULL,
  `cod_navicella` char(50) NOT NULL,
  `username_utente` char(50) DEFAULT NULL,
  `prezzo` int(11) DEFAULT NULL,
  `img` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_navicella`),
  KEY `username_utente` (`username_utente`),
  CONSTRAINT `FK1_username_utente` FOREIGN KEY (`username_utente`) REFERENCES `utenti` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php.navicella: ~40 rows (approximately)
REPLACE INTO `navicella` (`nome_navicella`, `cod_navicella`, `username_utente`, `prezzo`, `img`) VALUES
	('SS Vulture', '12469785', NULL, 12300000, NULL),
	('Ripper', '12576354', NULL, 9930000, NULL),
	('P-8 Albatross', '16479855', NULL, 1300000, NULL),
	('Huntress', '19528943', NULL, 1200000, NULL),
	('STS Alice', '19785957', NULL, 2300000, NULL),
	('USS Exploration', '23456877', NULL, 8930000, NULL),
	('BS Invincible', '25489673', NULL, 7830000, NULL),
	('SC Fighter', '31245875', NULL, 6960000, NULL),
	('Violet Panama', '32556256', NULL, 3830000, NULL),
	('Stellar Flare', '34798512', NULL, 4570000, NULL),
	('The Kobayashi', '35489568', NULL, 84300000, NULL),
	('CS Carnage V', '45231845', NULL, 56000700, NULL),
	('BS Vespira', '46798524', NULL, 49000000, NULL),
	('LWSS The Jellyfish', '51873642', NULL, 20000000, NULL),
	('Divine Intervention', '54687129', NULL, 40000000, NULL),
	('Duke Elba', '56232658', NULL, 70000000, NULL),
	('Pursuer', '56723841', NULL, 999999, NULL),
	('Elizabeth', '63457528', NULL, 54300000, NULL),
	('Akimbo Maze', '64758238', NULL, 2430400, NULL),
	('Fuchsia Midway', '65485128', NULL, 56470000, NULL),
	('HWSS Spectrum', '65496512', NULL, 19700000, NULL),
	('Galactic Core', '65783918', NULL, 32800000, NULL),
	('BC Zion', '66245879', NULL, 3726000, NULL),
	('Hummingbird', '71395256', NULL, 34272900, NULL),
	('SC Cataphract', '74569167', NULL, 8363500, NULL),
	('STS Deinonychus', '75395146', NULL, 26243900, NULL),
	('Dark Phoenix', '76458311', NULL, 32835000, NULL),
	('Lime Victory', '78545985', NULL, 8264800, NULL),
	('K-26 Matador', '78987653', NULL, 26284500, NULL),
	('STS Analyzer', '81346795', NULL, 5532900, NULL),
	('BS Empress', '85214653', NULL, 73538400, NULL),
	('Ravana Mark IV', '85445689', NULL, 72544380, NULL),
	('Battlecruiser Elena', '85631599', NULL, 7543200, NULL),
	('HMS Atlas', '86455732', NULL, 85320000, NULL),
	('Halcyon Invincible 3', '86475365', NULL, 6243000, NULL),
	('D2 Stalwart II', '87129621', NULL, 8424000, NULL),
	('Harmony', '96458731', NULL, 93547000, NULL),
	('Banger Kryptoria', '96476535', NULL, 64332200, NULL),
	('STS Athens IV', '96522542', NULL, 76452300, NULL),
	('BS Independence', '98563265', NULL, 34606900, NULL);

-- Dumping structure for table database_php.pianeta
CREATE TABLE IF NOT EXISTS `pianeta` (
  `nome_pianeta` char(50) DEFAULT NULL,
  `cod_pianeta` char(50) NOT NULL,
  `diametro` int(14) DEFAULT NULL,
  `cod_navicella` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_pianeta`),
  KEY `cod_navicella` (`cod_navicella`),
  CONSTRAINT `FK1_cod_navicella` FOREIGN KEY (`cod_navicella`) REFERENCES `navicella` (`cod_navicella`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php.pianeta: ~0 rows (approximately)

-- Dumping structure for table database_php.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` char(50) NOT NULL,
  `nome_utente` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `password` char(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `telefono` int(14) DEFAULT NULL,
  `comune` char(50) DEFAULT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table database_php.utenti: ~4 rows (approximately)
REPLACE INTO `utenti` (`username`, `nome_utente`, `cognome`, `password`, `email`, `telefono`, `comune`, `indirizzo`) VALUES
	('asd', 'asd', 'asd', 'asd', 'asd@gmail.com', 1234567891, 'Aicurzio', 'Via croce, 1'),
	('gaiafedeli', 'Gaia', 'Fedeli', '123', 'gaia.fedeli@liceobanfi.eu', 2147483647, 'Caponago', 'Via Tua Madre, 18'),
	('marti', 'Martina', 'Villa', 'aaaaaaaaaa', 'martina.villa@liceobanfi.eu', 2147483647, 'Agrate', 'Via Biagio, 72'),
	('martina', 'Martina', 'Villa', 'aaaa', 'martina.villa@liceobanfi.eu', 2147483647, 'Agrate', 'Via Biagio, 72');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
