-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database database_php
CREATE DATABASE IF NOT EXISTS `database_php` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `database_php`;

-- Dump della struttura di tabella database_php.navicella
CREATE TABLE IF NOT EXISTS `navicella` (
  `nome_navicella` char(50) DEFAULT NULL,
  `cod_navicella` char(50) NOT NULL,
  `username_utente` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_navicella`),
  KEY `username_utente` (`username_utente`),
  CONSTRAINT `FK1_username_utente` FOREIGN KEY (`username_utente`) REFERENCES `utenti` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database_php.navicella: ~40 rows (circa)
REPLACE INTO `navicella` (`nome_navicella`, `cod_navicella`, `username_utente`) VALUES
	('SS Vulture', '12469785', NULL),
	('Ripper', '12576354', NULL),
	('P-8 Albatross', '16479855', NULL),
	('Huntress', '19528943', NULL),
	('STS Alice', '19785957', NULL),
	('USS Exploration', '23456877', NULL),
	('BS Invincible', '25489673', NULL),
	('SC Fighter', '31245875', NULL),
	('Violet Panama', '32556256', NULL),
	('Stellar Flare', '34798512', NULL),
	('The Kobayashi', '35489568', NULL),
	('CS Carnage V', '45231845', NULL),
	('BS Vespira', '46798524', NULL),
	('LWSS The Jellyfish', '51873642', NULL),
	('Divine Intervention', '54687129', NULL),
	('Duke Elba', '56232658', NULL),
	('Pursuer', '56723841', NULL),
	('Elizabeth', '63457528', NULL),
	('Akimbo Maze', '64758238', NULL),
	('Fuchsia Midway', '65485128', NULL),
	('HWSS Spectrum', '65496512', NULL),
	('Galactic Core', '65783918', NULL),
	('BC Zion', '66245879', NULL),
	('Hummingbird', '71395256', NULL),
	('SC Cataphract', '74569167', NULL),
	('STS Deinonychus', '75395146', NULL),
	('Dark Phoenix', '76458311', NULL),
	('Lime Victory', '78545985', NULL),
	('K-26 Matador', '78987653', NULL),
	('STS Analyzer', '81346795', NULL),
	('BS Empress', '85214653', NULL),
	('Ravana Mark IV', '85445689', NULL),
	('Battlecruiser Elena', '85631599', NULL),
	('HMS Atlas', '86455732', NULL),
	('Halcyon Invincible 3', '86475365', NULL),
	('D2 Stalwart II', '87129621', NULL),
	('Harmony', '96458731', NULL),
	('Banger Kryptoria', '96476535', NULL),
	('STS Athens IV', '96522542', NULL),
	('BS Independence', '98563265', NULL);

-- Dump della struttura di tabella database_php.pianeta
CREATE TABLE IF NOT EXISTS `pianeta` (
  `nome_pianeta` char(50) DEFAULT NULL,
  `cod_pianeta` char(50) NOT NULL,
  `diametro` int(14) DEFAULT NULL,
  PRIMARY KEY (`cod_pianeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database_php.pianeta: ~0 rows (circa)

-- Dump della struttura di tabella database_php.utenti
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

-- Dump dei dati della tabella database_php.utenti: ~4 rows (circa)
REPLACE INTO `utenti` (`username`, `nome_utente`, `cognome`, `password`, `email`, `telefono`, `comune`, `indirizzo`) VALUES
	('asd', 'asd', 'asd', 'asd', 'asd@gmail.com', 1234567891, 'Aicurzio', 'Via croce, 1'),
	('gaiafedeli', 'Gaia', 'Fedeli', '123', 'gaia.fedeli@liceobanfi.eu', 2147483647, 'Caponago', 'Via Tua Madre, 18'),
	('marti', 'Martina', 'Villa', 'aaaaaaaaaa', 'martina.villa@liceobanfi.eu', 2147483647, 'Agrate', 'Via Biagio, 72'),
	('martina', 'Martina', 'Villa', 'aaaa', 'martina.villa@liceobanfi.eu', 2147483647, 'Agrate', 'Via Biagio, 72');

-- Dump della struttura di tabella database_php.viaggia
CREATE TABLE IF NOT EXISTS `viaggia` (
  `cod_navicella` char(50) NOT NULL,
  `cod_pianeta` char(50) NOT NULL,
  PRIMARY KEY (`cod_navicella`,`cod_pianeta`) USING BTREE,
  KEY `FK2_cod_pianeta` (`cod_pianeta`),
  CONSTRAINT `FK1_cod_navicella` FOREIGN KEY (`cod_navicella`) REFERENCES `navicella` (`cod_navicella`),
  CONSTRAINT `FK2_cod_pianeta` FOREIGN KEY (`cod_pianeta`) REFERENCES `pianeta` (`cod_pianeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database_php.viaggia: ~0 rows (circa)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
