-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van codecamp wordt geschreven
CREATE DATABASE IF NOT EXISTS `codecamp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `codecamp`;

-- Structuur van  tabel codecamp.books wordt geschreven
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.books: ~0 rows (ongeveer)
DELETE FROM `books`;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Structuur van  tabel codecamp.lyrics wordt geschreven
CREATE TABLE IF NOT EXISTS `lyrics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `text` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.lyrics: ~0 rows (ongeveer)
DELETE FROM `lyrics`;
/*!40000 ALTER TABLE `lyrics` DISABLE KEYS */;
/*!40000 ALTER TABLE `lyrics` ENABLE KEYS */;

-- Structuur van  tabel codecamp.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.users: ~0 rows (ongeveer)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Structuur van  tabel codecamp.user_book_likes wordt geschreven
CREATE TABLE IF NOT EXISTS `user_book_likes` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.user_book_likes: ~0 rows (ongeveer)
DELETE FROM `user_book_likes`;
/*!40000 ALTER TABLE `user_book_likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_book_likes` ENABLE KEYS */;

-- Structuur van  tabel codecamp.user_lyrics_likes wordt geschreven
CREATE TABLE IF NOT EXISTS `user_lyrics_likes` (
  `user_id` int(11) NOT NULL,
  `lyrics_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.user_lyrics_likes: ~0 rows (ongeveer)
DELETE FROM `user_lyrics_likes`;
/*!40000 ALTER TABLE `user_lyrics_likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_lyrics_likes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
