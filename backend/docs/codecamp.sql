-- --------------------------------------------------------
-- Host:                         localhost
-- Server versie:                5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van codecamp-c2 wordt geschreven
CREATE DATABASE IF NOT EXISTS `codecamp-c2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `codecamp-c2`;

-- Structuur van  tabel codecamp-c2.books wordt geschreven
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp-c2.books: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `title`, `author`, `description`, `pages`, `price`, `image_url`) VALUES
	(8, 'De vlinder', 'Rups', '', 1, 1, 'https://code-camp-c2.test/public/books/7bb287ae-3193-4a85-bf64-4ab5bce5410a.jpeg'),
	(15, 'Steen', 'Henk', 'Het vervolg van het vervolg', 1, 1, 'https://code-camp-c2.test/public/books/7bb287ae-3193-4a85-bf64-4ab5bce5410a.jpeg'),
	(16, 'Steen', 'Henk', 'Het vervolg van het vervolg', 1, 1, 'https://code-camp-c2.test/public/books/7bb287ae-3193-4a85-bf64-4ab5bce5410a.jpeg'),
	(17, 'Doos', 'Doos', 'Doos', 1, 1, 'https://code-camp-c2.test/public/books/7bb287ae-3193-4a85-bf64-4ab5bce5410a.jpeg');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Structuur van  tabel codecamp-c2.lyrics wordt geschreven
CREATE TABLE IF NOT EXISTS `lyrics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `text` longtext NOT NULL,
  `author` varchar(50) NOT NULL,
  `background_color` varchar(50) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `mp3_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp-c2.lyrics: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `lyrics` DISABLE KEYS */;
/*!40000 ALTER TABLE `lyrics` ENABLE KEYS */;

-- Structuur van  tabel codecamp-c2.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp-c2.users: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Structuur van  tabel codecamp-c2.user_book_likes wordt geschreven
CREATE TABLE IF NOT EXISTS `user_book_likes` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp-c2.user_book_likes: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `user_book_likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_book_likes` ENABLE KEYS */;

-- Structuur van  tabel codecamp-c2.user_lyrics_likes wordt geschreven
CREATE TABLE IF NOT EXISTS `user_lyrics_likes` (
  `user_id` int(11) NOT NULL,
  `lyrics_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp-c2.user_lyrics_likes: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `user_lyrics_likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_lyrics_likes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
