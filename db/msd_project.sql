-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 07 jun 2012 kl 10:22
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
-- Tabellstruktur `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(50) NOT NULL,
  `artists_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
  `artist` varchar(50) NOT NULL,
  `genres_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `artists`
--

INSERT INTO `artists` (`id`, `artist`, `genres_id`) VALUES
(1, 'michael jackson', 1),
(2, 'jennifer lopez', 1),
(3, 'clovis', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `contains_songs_playlists`
--

CREATE TABLE IF NOT EXISTS `contains_songs_playlists` (
  `playlists_id` int(11) NOT NULL,
  `songs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `contains_songs_playlists`
--

INSERT INTO `contains_songs_playlists` (`playlists_id`, `songs_id`) VALUES
(1, 0),
(5, 0),
(4, 0);

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
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumpning av Data i tabell `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `users_id`) VALUES
(1, 'sylvains playlist', 1),
(2, 'Hello', 1),
(3, 'mamamia', 1),
(4, 'good by', 1),
(5, 'onekanda', 3),
(6, 'joel', 3),
(7, 'yooo', 3),
(8, 'daniel', 2),
(9, 'daniel2012', 2),
(10, 'kyh2012', 2),
(11, 'mario', 3),
(12, 'Jesus', 4),
(13, 'DRC', 4),
(14, 'Cool2012', 4);

-- --------------------------------------------------------

--
-- Tabellstruktur `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song` varchar(50) NOT NULL,
  `albums_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumpning av Data i tabell `songs`
--

INSERT INTO `songs` (`id`, `song`, `albums_id`) VALUES
(1, 'People Make the World Go ''Round', 1),
(2, 'My Girl', 1),
(3, 'In Our Small Way', 1),
(4, 'Remember the Time', 2),
(5, 'She Drives Me Wild', 2),
(6, 'Who Is It', 2),
(7, 'Cry', 3),
(8, 'Privacy', 3),
(9, 'Butterflies', 3),
(10, 'Got to Be There', 4),
(11, 'Maria', 4),
(12, 'Love Is Here and Now You''re Gone', 4),
(13, 'what is love', 5),
(14, 'one love', 5),
(15, 'take care', 5),
(16, 'get right lyrics', 6),
(17, 'step into my world', 6),
(18, 'still around  lyrics', 6),
(19, 'do it well', 7),
(20, 'be mine', 7),
(21, 'forever', 7),
(22, 'sola', 8),
(23, 'como ama una mujer', 8),
(24, 'amarte es todo', 8),
(25, 'Mundo', 9),
(26, 'Invincibles', 9),
(27, 'Metamorfosis', 9),
(28, 'La base', 10),
(29, 'La sombra', 10),
(30, 'Rescate', 10),
(32, 'Leaving you', 0),
(33, 'Self -defense', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'sylvain', '123'),
(2, 'daniel', '123'),
(3, 'mario', '123'),
(4, 'Jessica', '123'),
(5, 'Jenny', '123');

-- --------------------------------------------------------

--
-- Tabellstruktur `users_playlists`
--

CREATE TABLE IF NOT EXISTS `users_playlists` (
  `users_id` int(11) NOT NULL,
  `playlists_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
