-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: mai 15, 2019 la 11:00 AM
-- Versiune server: 5.7.24
-- Versiune PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `clinica`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_romanian_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `descriere` varchar(200) COLLATE utf8_romanian_ci NOT NULL,
  `specializare` varchar(20) COLLATE utf8_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `img`, `descriere`, `specializare`) VALUES
(1, 'Dr. Lloyd Wilson', 'doc-1.jpg', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'Neurologist'),
(2, 'Dr. Rachel Parker', 'doc-2.jpg', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'Ophthalmologist'),
(3, 'Dr. Ian Smith', 'doc-3.jpg', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'Dentist'),
(4, 'Dr. Alicia Henderson', 'doc-4.jpg', 'I am an ambitious workaholic, but apart from that, pretty simple person.', 'Pediatrician');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_romanian_ci NOT NULL,
  `link` varchar(30) COLLATE utf8_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`) VALUES
(1, 'Home', 'index'),
(2, 'About', 'about'),
(3, 'Doctor', 'doctor'),
(4, 'Departaments', 'departaments'),
(5, 'Contact', 'contact'),
(6, 'news', 'news');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_romanian_ci NOT NULL,
  `message` text COLLATE utf8_romanian_ci NOT NULL,
  `subject` text COLLATE utf8_romanian_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `message`
--

INSERT INTO `message` (`id`, `email`, `message`, `subject`, `name`) VALUES
(1, 'asdasd', 'asdad', 'asdasd', ''),
(2, 'A@YAHOO.COM', 'asdasdasdas', 'asdasdasd', 'asdas'),
(3, 'A@YAHOO.COM', 'asdasdasdas', 'asdasdasd', 'asdas'),
(4, 'adsadas@dasda.com', 'aweaweaw', 'awsdewe', 'asdasdasd');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizator`
--

DROP TABLE IF EXISTS `utilizator`;
CREATE TABLE IF NOT EXISTS `utilizator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(20) COLLATE utf8_romanian_ci NOT NULL,
  `prenume` varchar(20) COLLATE utf8_romanian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_romanian_ci NOT NULL,
  `parola` varchar(50) COLLATE utf8_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `utilizator`
--

INSERT INTO `utilizator` (`id`, `nume`, `prenume`, `email`, `parola`) VALUES
(1, 'test', 'test', 'test@yahoo.com', 'test'),
(2, 'asdasd', 'asdasd', 'aweaweaw@gmail.com', 'aerawe'),
(3, 'dawe', '3we4q', 'e3qeq3e4q@gh.com', '12323'),
(4, 'asdase', 'aweawe', 'weae3a2w@asdaw.com', 'qawe'),
(5, 'asdasd', 'asdasd', 'asdweawe@gmail.com', 'abc'),
(6, 'asdas', 'asdas', 'A@YAHOO.COM', '1122c4ca4238a0b923820dcc509a6f75849b@&^%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
