-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 23 maj 2012 kl 12:20
-- Serverversion: 5.5.16
-- PHP-version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `msd_project`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `access_users_playlists`
--

CREATE TABLE IF NOT EXISTS `access_users_playlists` (
  `users_id` int(11) NOT NULL,
  `playlists_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumpning av Data i tabell `albums`
--

INSERT INTO `albums` (`id`, `name`, `artist_id`) VALUES
(1, 'Ben', 1),
(2, 'Dangerous', 1),
(3, 'Invincible', 1),
(4, 'Anthology', 1),
(5, 'Love', 2),
(6, 'Rebirth', 2),
(7, 'Brave', 2),
(8, 'Como', 2),
(9, 'Respira', 3),
(10, 'Bajo la influencia', 3),
(11, 'Time we spent together', 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `genres_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `artists`
--

INSERT INTO `artists` (`id`, `name`, `genres_id`) VALUES
(1, 'Michael', 1),
(2, 'Jennifer', 2),
(3, 'Clovis', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `contains_albums_songs`
--

CREATE TABLE IF NOT EXISTS `contains_albums_songs` (
  `albums_id` int(11) NOT NULL,
  `songs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `contains_songs_playlists`
--

CREATE TABLE IF NOT EXISTS `contains_songs_playlists` (
  `playlists_id` int(11) NOT NULL,
  `songs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Pop'),
(2, 'Gospel'),
(3, 'Apala');

-- --------------------------------------------------------

--
-- Tabellstruktur `playlists`
--

CREATE TABLE IF NOT EXISTS `playlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumpning av Data i tabell `songs`
--

INSERT INTO `songs` (`id`, `name`) VALUES
(1, 'People Make the World Go ''Round'),
(2, 'My Girl'),
(3, 'In Our Small Way'),
(4, 'Remember the Time'),
(6, '	She Drives Me Wild'),
(7, 'Who Is It'),
(8, 'Cry'),
(9, 'Privacy'),
(10, 'Butterflies'),
(11, 'Got to Be There'),
(12, 'Maria'),
(13, 'Love Is Here and Now You''re Gone'),
(14, 'what is love'),
(15, 'one love'),
(16, 'take care'),
(17, 'get right lyrics'),
(18, 'step into my world'),
(19, 'still around  lyrics'),
(20, 'do it well'),
(21, 'be mine'),
(22, 'forever'),
(23, 'sola'),
(24, 'como ama una mujer'),
(25, 'amarte es todo'),
(26, 'Mundo'),
(27, 'Invincibles'),
(28, 'Metamorfosis'),
(29, 'La base'),
(30, 'La sombra'),
(31, 'Rescate'),
(32, 'Leaving you'),
(33, 'Self -defense');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
