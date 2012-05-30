-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 30 maj 2012 kl 15:42
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
  `album` varchar(50) NOT NULL,
  `artists_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumpning av Data i tabell `albums`
--

INSERT INTO `albums` (`id`, `album`, `artists_id`) VALUES
(1, 'Ben', 1),
(2, 'Dangerous', 1),
(3, 'Invincible', 1),
(4, 'Anthology', 1),
(5, 'Love', 2),
(6, 'Rebirth', 2),
(7, 'Brave', 2),
(8, 'Como', 2),
(9, 'Respira', 3),
(10, 'Bajo la influencia', 3);

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
(1, 'michael jackson', 1),
(2, 'jennifer lopez', 1),
(3, 'clovis', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `contains_albums_songs`
--

CREATE TABLE IF NOT EXISTS `contains_albums_songs` (
  `albums_id` int(11) NOT NULL,
  `songs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `contains_albums_songs`
--

INSERT INTO `contains_albums_songs` (`albums_id`, `songs_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 19),
(7, 20),
(7, 21),
(8, 22),
(8, 23),
(8, 24),
(9, 25),
(9, 26),
(9, 27),
(10, 28),
(10, 29),
(10, 30);

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
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Pop'),
(2, 'Gospel'),
(3, 'Rock');

-- --------------------------------------------------------

--
-- Tabellstruktur `playlists`
--

CREATE TABLE IF NOT EXISTS `playlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `playlists`
--

INSERT INTO `playlists` (`id`, `name`) VALUES
(1, 'daniel'),
(2, 'sylvain');

-- --------------------------------------------------------

--
-- Tabellstruktur `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumpning av Data i tabell `songs`
--

INSERT INTO `songs` (`id`, `song`) VALUES
(1, 'People Make the World Go ''Round'),
(2, 'My Girl'),
(3, 'In Our Small Way'),
(4, 'Remember the Time'),
(5, '	She Drives Me Wild'),
(6, 'Who Is It'),
(7, 'Cry'),
(8, 'Privacy'),
(9, 'Butterflies'),
(10, 'Got to Be There'),
(11, 'Maria'),
(12, 'Love Is Here and Now You''re Gone'),
(13, 'what is love'),
(14, 'one love'),
(15, 'take care'),
(16, 'get right lyrics'),
(17, 'step into my world'),
(18, 'still around  lyrics'),
(19, 'do it well'),
(20, 'be mine'),
(21, 'forever'),
(22, 'sola'),
(23, 'como ama una mujer'),
(24, 'amarte es todo'),
(25, 'Mundo'),
(26, 'Invincibles'),
(27, 'Metamorfosis'),
(28, 'La base'),
(29, 'La sombra'),
(30, 'Rescate'),
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
