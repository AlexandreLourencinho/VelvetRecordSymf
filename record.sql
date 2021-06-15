-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.5.9-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour record
CREATE DATABASE IF NOT EXISTS `record` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `record`;

-- Listage de la structure de la table record. artist
CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Listage des données de la table record.artist : ~10 rows (environ)
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_url`) VALUES
	(1, 'Neil Young', NULL),
	(2, 'YES', NULL),
	(3, 'Rolling Stones', NULL),
	(4, 'Queens of the Stone Age', NULL),
	(5, 'Serge Gainsbourg', NULL),
	(6, 'AC/DC', NULL),
	(7, 'Marillion', NULL),
	(8, 'Bob Dylan', NULL),
	(9, 'Fleshtones', NULL),
	(10, 'The Clash', NULL);
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;

-- Listage de la structure de la table record. disc
CREATE TABLE IF NOT EXISTS `disc` (
  `disc_id` int(11) NOT NULL AUTO_INCREMENT,
  `disc_title` varchar(255) DEFAULT NULL,
  `disc_year` int(11) DEFAULT NULL,
  `disc_picture` varchar(255) DEFAULT NULL,
  `disc_label` varchar(255) DEFAULT NULL,
  `disc_genre` varchar(255) DEFAULT NULL,
  `disc_price` decimal(6,2) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`disc_id`),
  KEY `artist_id` (`artist_id`),
  CONSTRAINT `disc_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- Listage des données de la table record.disc : ~24 rows (environ)
/*!40000 ALTER TABLE `disc` DISABLE KEYS */;
INSERT INTO `disc` (`disc_id`, `disc_title`, `disc_year`, `disc_picture`, `disc_label`, `disc_genre`, `disc_price`, `artist_id`) VALUES
	(2, 'Songs for the Deaf/>>', 2002, 'flat750x075fpad750x1000f8f8f8u6-60c0d2da3908e.jpeg', 'Interscope Records', 'Rock/Stoner', 12.99, 2),
	(4, 'Initials BB', 1968, 'Initials BB.jpeg', 'Philips', ' Chanson, Pop Rock', 12.99, 5),
	(7, 'Highway To Hell', 1979, 'Highway To Hell.jpeg', 'Atlantic', 'Hard Rock', 15.00, 6),
	(8, 'Drama', 1980, 'Drama.jpeg', 'Atlantic', 'Prog', 15.00, 2),
	(9, 'Year of the Horse', 1997, 'Year of the Horse.jpeg', 'Reprise Records', 'Country Rock, Classic Rock', 7.50, 1),
	(10, 'Ragged Glory', 1990, 'Ragged Glory.jpeg', 'Reprise Records', 'Country Rock, Grunge', 11.00, 1),
	(11, 'Rust Never Sleeps', 1979, 'Rust Never Sleeps.jpeg', 'Reprise Records', 'Classic Rock, Arena Rock', 15.00, 1),
	(12, 'Exile on main street', 1972, 'Exile on main street.jpeg', 'Rolling Stones Records', 'Blues Rock, Classic Rock', 33.00, 1),
	(13, 'London Calling', 1971, 'London Calling.jpeg', 'CBS', 'Punk, New Wave', 33.00, 10),
	(14, 'Beggars Banquet', 1968, 'Beggars Banquet.jpeg', 'Rolling Stones Records', 'Blues Rock, Classic Rock', 33.00, 1),
	(15, 'Laboratory of sound', 1995, 'Laboratory of sound.jpeg', 'Rebel Rec.', 'Rock', 33.00, 9),
	(59, 'testsympfony2', 1998, 'flat750x075fpad750x1000f8f8f8u6-60c0b16e5ae50.jpeg', 'testsympfony2', 'testsympfony2', 22.00, 10),
	(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(64, NULL, 1990, NULL, NULL, NULL, NULL, NULL),
	(65, NULL, 1, NULL, NULL, NULL, NULL, NULL),
	(66, NULL, 1, NULL, NULL, NULL, NULL, NULL),
	(67, NULL, 1, NULL, NULL, NULL, NULL, NULL),
	(68, '/><', NULL, NULL, NULL, NULL, NULL, NULL),
	(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(70, NULL, 12345, NULL, NULL, NULL, NULL, NULL),
	(71, NULL, 1234, NULL, NULL, NULL, NULL, NULL),
	(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `disc` ENABLE KEYS */;

-- Listage de la structure de la table record. droits
CREATE TABLE IF NOT EXISTS `droits` (
  `droits_id` int(11) NOT NULL AUTO_INCREMENT,
  `niveau_droit` int(11) NOT NULL,
  `label_droit` varchar(100) NOT NULL,
  PRIMARY KEY (`droits_id`),
  UNIQUE KEY `droits_niveau_droit_uindex` (`niveau_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Listage des données de la table record.droits : ~2 rows (environ)
/*!40000 ALTER TABLE `droits` DISABLE KEYS */;
INSERT INTO `droits` (`droits_id`, `niveau_droit`, `label_droit`) VALUES
	(1, 1, 'droits admin'),
	(2, 2, 'tamer');
/*!40000 ALTER TABLE `droits` ENABLE KEYS */;

-- Listage de la structure de la table record. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(50) NOT NULL,
  `mdp_utilisateur` varchar(80) NOT NULL,
  `mail_utilisateur` varchar(50) NOT NULL,
  `token_recup` int(11) DEFAULT NULL,
  `droits_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`utilisateur_id`),
  UNIQUE KEY `utilisateurs_mail_utilisateur_uindex` (`mail_utilisateur`),
  UNIQUE KEY `utilisateurs_nom_utilisateur_uindex` (`nom_utilisateur`),
  UNIQUE KEY `utilisateurs_token_recup_uindex` (`token_recup`),
  KEY `droits_id` (`droits_id`),
  CONSTRAINT `droits_id` FOREIGN KEY (`droits_id`) REFERENCES `droits` (`droits_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table record.utilisateurs : ~2 rows (environ)
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` (`utilisateur_id`, `nom_utilisateur`, `mdp_utilisateur`, `mail_utilisateur`, `token_recup`, `droits_id`) VALUES
	(2, 'admin', '$2y$10$HVxD3wunD0JL7k5fEbHnG.NuZhX96GEyqbrLK1JP0FSAo48EAQjVq', 'alexandre.lourencinho@gmail.com', NULL, NULL),
	(3, 'test', '$2y$10$6iYj7IIXqpQDsT2wC4u6/O6k27UdwY94lOlMN1288AWE4NNSrrsHi', 'aert@sfr.fr', NULL, NULL);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
