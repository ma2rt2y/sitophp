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
  `prezzo` int(11) DEFAULT NULL,
  `img` char(50) DEFAULT NULL,
  `cod_pianeta` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_navicella`),
  KEY `username_utente` (`username_utente`),
  KEY `cod_pianeta` (`cod_pianeta`),
  CONSTRAINT `FK1_username_utente` FOREIGN KEY (`username_utente`) REFERENCES `utenti` (`username`),
  CONSTRAINT `FK2_cod_pianeta` FOREIGN KEY (`cod_pianeta`) REFERENCES `pianeta` (`cod_pianeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database_php.navicella: ~40 rows (circa)
REPLACE INTO `navicella` (`nome_navicella`, `cod_navicella`, `username_utente`, `prezzo`, `img`, `cod_pianeta`) VALUES
	('SS Vulture', '12469785', NULL, 12300000, 'SS Vulture.png', 5),
	('Ripper', '12576354', NULL, 9930000, 'Ripper.png', 4),
	('P-8 Albatross', '16479855', NULL, 1300000, 'P-8 Albatross.png', 1),
	('Huntress', '19528943', NULL, 1200000, 'Huntress.png', 8),
	('STS Alice', '19785957', NULL, 2300000, 'STS Alice.png', 6),
	('USS Exploration', '23456877', NULL, 8930000, 'USS Exploration.png', 3),
	('BS Invincible', '25489673', NULL, 7830000, 'BS Invincible.png', 7),
	('SC Fighter', '31245875', NULL, 6960000, 'SC Fighter.png', 2),
	('Violet Panama', '32556256', NULL, 3830000, 'Violet Panama.png', 5),
	('Stellar Flare', '34798512', NULL, 4570000, 'Stellar Flare.png', 4),
	('The Kobayashi', '35489568', NULL, 84300000, 'The Kobayashi.png', 1),
	('CS Carnage V', '45231845', NULL, 56000700, 'CS Carnage V.png', 8),
	('BS Vespira', '46798524', NULL, 49000000, 'BS Vespira.png', 6),
	('LWSS The Jellyfish', '51873642', NULL, 20000000, 'LWSS The Jellyfish.png', 3),
	('Divine Intervention', '54687129', NULL, 40000000, 'Divine Intervention.png', 7),
	('Duke Elba', '56232658', NULL, 70000000, 'Duke Elba.png', 2),
	('Pursuer', '56723841', NULL, 999999, 'Pursuer.png', 6),
	('Elizabeth', '63457528', NULL, 54300000, 'Elizabeth.jpg', 1),
	('Akimbo Maze', '64758238', NULL, 2430400, 'Akimbo Maze.jpg', 8),
	('Fuchsia Midway', '65485128', NULL, 56470000, 'Fuchsia Midway.jpg', 5),
	('HWSS Spectrum', '65496512', NULL, 19700000, 'HWSS Spectrum.jpg', 4),
	('Galactic Core', '65783918', NULL, 32800000, 'Galactic Core.jpg', 8),
	('BC Zion', '66245879', NULL, 3726000, 'BC Zion.png', 3),
	('Hummingbird', '71395256', NULL, 34272900, 'Hummingbird.png', 2),
	('SC Cataphract', '74569167', NULL, 8363500, 'SC Cataphract.png', 2),
	('STS Deinonychus', '75395146', NULL, 26243900, 'STS Deinonychus.png', 3),
	('Dark Phoenix', '76458311', NULL, 32835000, 'Dark Phoenix.png', 5),
	('Lime Victory', '78545985', NULL, 8264800, 'Lime Victory.png', 4),
	('K-26 Matador', '78987653', NULL, 26284500, 'K-26 Matador.png', 1),
	('STS Analyzer', '81346795', NULL, 5532900, 'STS Analyzer.jpg', 3),
	('BS Empress', '85214653', NULL, 73538400, 'BS Empress.jpg', 6),
	('Ravana Mark IV', '85445689', NULL, 72544380, 'Ravana Mark IV.jpg', 7),
	('Battlecruiser Elena', '85631599', NULL, 7543200, 'Battlecruiser Elena.jpg', 7),
	('HMS Atlas', '86455732', NULL, 85320000, 'HMS Atlas.jpg', 8),
	('Halcyon Invincible 3', '86475365', NULL, 6243000, 'Halcyon Invincible 3.jpg', 1),
	('D2 Stalwart II', '87129621', NULL, 8424000, 'D2 Stalwart II.jpg', 2),
	('Harmony', '96458731', NULL, 93547000, 'Harmony.jpg', 5),
	('Banger Kryptoria', '96476535', NULL, 64332200, 'Banger Kryptoria.jpg', 8),
	('STS Athens IV', '96522542', NULL, 76452300, 'STS Athens IV.jpg', 6),
	('BS Independence', '98563265', NULL, 34606900, 'BS Independence.jpg', 4);

-- Dump della struttura di tabella database_php.pianeta
CREATE TABLE IF NOT EXISTS `pianeta` (
  `nome_pianeta` char(50) DEFAULT NULL,
  `cod_pianeta` int(11) NOT NULL AUTO_INCREMENT,
  `diametro` int(14) DEFAULT NULL,
  PRIMARY KEY (`cod_pianeta`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database_php.pianeta: ~8 rows (circa)
REPLACE INTO `pianeta` (`nome_pianeta`, `cod_pianeta`, `diametro`) VALUES
	('Mercurio', 1, 4879),
	('Venere', 2, 12104),
	('Terra', 3, 12742),
	('Marte', 4, 6779),
	('Giove', 5, 139820),
	('Saturno', 6, 116460),
	('Urano', 7, 50724),
	('Nettuno', 8, 49244);

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

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
