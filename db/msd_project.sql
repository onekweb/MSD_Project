-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 29 maj 2012 kl 12:15
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
  `songs_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumpning av Data i tabell `albums`
--

INSERT INTO `albums` (`id`, `album`, `artists_id`, `songs_id`) VALUES
(1, 'Ben', 1, 1),
(2, 'Ben', 1, 2),
(3, 'Ben', 1, 3),
(4, 'Dangerous', 1, 4),
(5, 'Dangerous', 1, 5),
(6, 'Dangerous', 1, 6),
(7, 'Invincible', 1, 7),
(8, 'Invincible', 1, 8),
(9, 'Invincible', 1, 9),
(10, 'Anthology', 1, 10),
(11, 'Anthology', 1, 11),
(12, 'Anthology', 1, 12),
(13, 'Love', 2, 13),
(14, 'Love', 2, 14),
(15, 'Love', 2, 15),
(16, 'Rebirth', 2, 16),
(17, 'Rebirth', 2, 17),
(18, 'Rebirth', 2, 18),
(19, 'Brave', 2, 19),
(20, 'Brave', 2, 20),
(21, 'Brave', 2, 21),
(22, 'Como', 2, 22),
(23, 'Como', 2, 23),
(24, 'Como', 2, 24),
(25, 'Respira', 3, 25),
(26, 'Respira', 3, 26),
(27, 'Respira', 3, 27),
(28, 'Bajo la influencia', 3, 28),
(29, 'Bajo la influencia', 3, 29),
(30, 'Bajo la influencia', 3, 30);

-- --------------------------------------------------------

--
-- Tabellstruktur `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `genres_id` int(11) NOT NULL,
  `albums_id` int(11) NOT NULL,
  `songs_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumpning av Data i tabell `artists`
--

INSERT INTO `artists` (`id`, `name`, `genres_id`, `albums_id`, `songs_id`) VALUES
(1, 'Michael', 1, 1, 1),
(2, 'Michael', 1, 1, 2),
(3, 'Michael', 1, 1, 3),
(4, 'Michael', 1, 2, 4),
(5, 'Michael', 1, 2, 5),
(6, 'Michael', 1, 2, 6),
(7, 'Michael', 1, 3, 7),
(8, 'Michael', 1, 3, 8),
(9, 'Michael', 1, 3, 9),
(10, 'Michael', 1, 4, 10),
(11, 'Michael', 1, 4, 11),
(12, 'Michael', 1, 4, 12),
(13, 'Jennifer', 2, 5, 13),
(14, 'Jennifer', 2, 5, 14),
(15, 'Jennifer', 2, 5, 15),
(16, 'Jennifer', 2, 6, 16),
(17, 'Jennifer', 2, 6, 17),
(18, 'Jennifer', 2, 6, 18),
(19, 'Jennifer', 2, 7, 19),
(20, 'Jennifer', 2, 7, 20),
(21, 'Jennifer', 2, 7, 21),
(22, 'Jennifer', 2, 8, 22),
(23, 'Jennifer', 2, 8, 23),
(24, 'Jennifer', 2, 8, 24),
(25, 'Clovis', 3, 9, 25),
(26, 'Clovis', 3, 9, 26),
(27, 'Clovis', 3, 9, 27),
(28, 'Clovis', 3, 10, 28),
(29, 'Clovis', 3, 10, 29),
(30, 'Clovis', 3, 10, 30);

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
  `genre` varchar(50) NOT NULL,
  `artists_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `genres`
--

INSERT INTO `genres` (`id`, `genre`, `artists_id`) VALUES
(1, 'Pop', 1),
(2, 'Gospel', 2),
(3, 'Rock', 3);

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
  `song` varchar(50) NOT NULL,
  `artists_id` int(11) NOT NULL,
  `albums_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumpning av Data i tabell `songs`
--

INSERT INTO `songs` (`id`, `song`, `artists_id`, `albums_id`) VALUES
(1, 'People Make the World Go ''Round', 1, 1),
(2, 'My Girl', 1, 1),
(3, 'In Our Small Way', 1, 1),
(4, 'Remember the Time', 1, 2),
(5, '	She Drives Me Wild', 1, 2),
(6, 'Who Is It', 1, 2),
(7, 'Cry', 1, 3),
(8, 'Privacy', 1, 3),
(9, 'Butterflies', 1, 3),
(10, 'Got to Be There', 1, 4),
(11, 'Maria', 1, 4),
(12, 'Love Is Here and Now You''re Gone', 1, 4),
(13, 'what is love', 2, 5),
(14, 'one love', 2, 5),
(15, 'take care', 2, 5),
(16, 'get right lyrics', 2, 6),
(17, 'step into my world', 2, 6),
(18, 'still around  lyrics', 2, 6),
(19, 'do it well', 2, 7),
(20, 'be mine', 2, 7),
(21, 'forever', 2, 7),
(22, 'sola', 2, 8),
(23, 'como ama una mujer', 2, 8),
(24, 'amarte es todo', 2, 8),
(25, 'Mundo', 2, 9),
(26, 'Invincibles', 3, 9),
(27, 'Metamorfosis', 3, 9),
(28, 'La base', 3, 10),
(29, 'La sombra', 3, 10),
(30, 'Rescate', 3, 10),
(32, 'Leaving you', 0, 0),
(33, 'Self -defense', 0, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `songs_albums`
--

CREATE TABLE IF NOT EXISTS `songs_albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song` int(11) NOT NULL,
  `album` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumpning av Data i tabell `songs_albums`
--

INSERT INTO `songs_albums` (`id`, `song`, `album`) VALUES
(1, 1, 'Ben'),
(2, 2, 'Ben'),
(3, 3, 'Ben'),
(4, 4, 'Dangerous'),
(5, 5, 'Dangerous'),
(6, 6, 'Dangerous'),
(7, 7, 'Invincible'),
(8, 8, 'Invincible'),
(9, 9, 'Invincible'),
(10, 10, 'Anthology'),
(11, 11, 'Anthology'),
(12, 12, 'Anthology'),
(13, 13, 'Love'),
(14, 14, 'Love'),
(15, 15, 'Love'),
(16, 16, 'Rebirth'),
(17, 17, 'Rebirth'),
(18, 18, 'Rebirth'),
(19, 19, 'Brave'),
(20, 20, 'Brave'),
(21, 21, 'Brave'),
(22, 22, 'Como'),
(23, 23, 'Como'),
(24, 24, 'Como'),
(25, 25, 'Respira'),
(26, 26, 'Respira'),
(27, 27, 'Bajo la influencia'),
(28, 28, 'Bajo la influencia'),
(29, 29, 'Bajo la influencia'),
(30, 30, 'Bajo la influencia');

-- --------------------------------------------------------

--
-- Tabellstruktur `songs_artists`
--

CREATE TABLE IF NOT EXISTS `songs_artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song` varchar(50) NOT NULL,
  `artist_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumpning av Data i tabell `songs_artists`
--

INSERT INTO `songs_artists` (`id`, `song`, `artist_name`) VALUES
(1, '1', 'Michael'),
(2, '2', 'Michael'),
(3, '3', 'Michael'),
(4, '4', 'Michael'),
(5, '5', 'Michael'),
(6, '6', 'Michael'),
(7, '7', 'Michael'),
(8, '8', 'Michael'),
(9, '9', 'Michael'),
(10, '10', 'Michael'),
(11, '11', 'Michael'),
(12, '12', 'Michael'),
(13, '13', 'Jennifer'),
(14, '14', 'Jennifer'),
(15, '15', 'Jennifer'),
(16, '16', 'Jennifer'),
(17, '17', 'Jennifer'),
(18, '18', 'Jennifer'),
(19, '19', 'Jennifer'),
(20, '20', 'Jennifer'),
(21, '21', 'Jennifer'),
(22, '22', 'Jennifer'),
(23, '23', 'Jennifer'),
(24, '24', 'Jennifer'),
(25, '25', 'Clovis'),
(26, '26', 'Clovis'),
(27, '27', 'Clovis'),
(28, '28', 'Clovis'),
(29, '29', 'Clovis'),
(30, '30', 'Clovis');

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
