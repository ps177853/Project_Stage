-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 dec 2021 om 16:59
-- Serverversie: 5.7.26
-- PHP-versie: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ixat`
--
CREATE DATABASE IF NOT EXISTS `ixat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ixat`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

DROP TABLE IF EXISTS `auto`;
CREATE TABLE IF NOT EXISTS `auto` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `merk` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `kenteken` varchar(20) NOT NULL,
  `aantal_passagiers` int(5) NOT NULL,
  `laadruimte` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`id`, `merk`, `type`, `kenteken`, `aantal_passagiers`, `laadruimte`) VALUES
(1, 'Renault', 'zas', 'asdadsa', 5, 6),
(2, 'Niels', 'Niels', 'Niels', 5, 5),
(3, 'peugeot', 'cabrio', 'adsad', 4, 5),
(4, 'peugeot', 'cabrio', 'adsad', 4, 5),
(5, 'Jhonny', 'Jhonny', 'Jhonny', 9, 7),
(6, 'Jhonny', 'Jhonny', 'Jhonny', 2, 2),
(7, 'asd', 'asd', 'aldskm', 2, 2),
(8, 'ch', 'ch', 'ch', 3, 3),
(9, 'ch', 'ch', 'ch', 3, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chauffeur`
--

DROP TABLE IF EXISTS `chauffeur`;
CREATE TABLE IF NOT EXISTS `chauffeur` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `auto_id` varchar(50) NOT NULL,
  `schadevrije_jaren` int(5) NOT NULL,
  `latitude` decimal(20,0) NOT NULL,
  `longitude` decimal(20,0) NOT NULL,
  `vrij` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `auto_id`, `schadevrije_jaren`, `latitude`, `longitude`, `vrij`) VALUES
(1, '1', 1, '1', '1', 1),
(2, '1', 4, '1', '1', 1),
(3, '', 5, '1', '1', 1),
(4, '3', 5, '1', '1', 1),
(5, '', 6, '1', '1', 1),
(6, '', 2, '1', '1', 1),
(7, '6', 3, '1', '1', 1),
(8, '', 3, '1', '1', 1),
(9, '8', 3, '1', '1', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chauffeur_aanvraag`
--

DROP TABLE IF EXISTS `chauffeur_aanvraag`;
CREATE TABLE IF NOT EXISTS `chauffeur_aanvraag` (
  `gebruikersnaam` varchar(50) NOT NULL,
  `auto_id` varchar(50) NOT NULL,
  PRIMARY KEY (`gebruikersnaam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chauffeur_rijbewijs`
--

DROP TABLE IF EXISTS `chauffeur_rijbewijs`;
CREATE TABLE IF NOT EXISTS `chauffeur_rijbewijs` (
  `gebruikersnaam` varchar(50) NOT NULL,
  `rijbewijs_id` int(10) NOT NULL,
  PRIMARY KEY (`gebruikersnaam`,`rijbewijs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

DROP TABLE IF EXISTS `klant`;
CREATE TABLE IF NOT EXISTS `klant` (
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `mobiel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `chauffeur_id` int(5) NOT NULL,
  PRIMARY KEY (`gebruikersnaam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`gebruikersnaam`, `wachtwoord`, `naam`, `mobiel`, `email`, `chauffeur_id`) VALUES
('pooh', 'pooh', 'pooh', '065', 'stijnhoeks2015@gmail.com', 1),
('Niels', 'Niels', 'Niels', '01293103', 'niesl@gmail.com', 0),
('StijnHoeks', 'StijnHoeks', 'Stijn Hoeks', '0637457771', 'Stijnhoeks2015@gmail.com', 1),
('Jhon', 'Pieter', 'Peter', '067389991', 'Peter@gmail.com', 1),
('ch', 'ch', 'ch', '1231321', 'ch@gmail.com', 1),
('sd', 'sd', 'sd', '234', 'sd@gmail.com', 1),
('Ericgb', 'Ericww', 'Ericnaam', '0637', 'eric@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rijbewijs`
--

DROP TABLE IF EXISTS `rijbewijs`;
CREATE TABLE IF NOT EXISTS `rijbewijs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rijbewijs`
--

INSERT INTO `rijbewijs` (`id`, `naam`) VALUES
(1, 'asd'),
(2, 'A'),
(3, 'A'),
(4, 'A'),
(5, 'A'),
(6, 'A'),
(7, 'A'),
(8, 'A'),
(9, 'A');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taxi_aanvraag`
--

DROP TABLE IF EXISTS `taxi_aanvraag`;
CREATE TABLE IF NOT EXISTS `taxi_aanvraag` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(50) NOT NULL,
  `datum_tijd` datetime NOT NULL,
  `minimale_laadruimte` int(5) NOT NULL,
  `passagiers` int(5) NOT NULL DEFAULT '1',
  `latitude` decimal(20,0) NOT NULL,
  `longitude` decimal(20,0) NOT NULL,
  `chauffer_id` int(5) NOT NULL,
  `goedgekeurd` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `taxi_aanvraag`
--

INSERT INTO `taxi_aanvraag` (`id`, `gebruikersnaam`, `datum_tijd`, `minimale_laadruimte`, `passagiers`, `latitude`, `longitude`, `chauffer_id`, `goedgekeurd`) VALUES
(1, 'Stijn', '2001-04-12 00:00:00', 1, 1, '1', '1', 1, 2),
(2, 'Stijn', '2020-06-25 15:14:00', 2, 2, '1', '1', 1, 2),
(3, 'Stijn', '2023-09-27 14:19:00', 3, 1, '1', '1', 1, 1),
(4, 'pooh', '2032-11-25 21:19:00', 6, 5, '1', '1', 1, 1),
(5, 'pooh', '2020-09-25 17:54:00', 3, 3, '1', '1', 1, 2),
(6, 'pooh', '2022-06-25 15:10:00', 4, 5, '1', '1', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
