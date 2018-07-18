-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 02:50 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL,
  `movie` varchar(20) NOT NULL DEFAULT 'movie'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`name`, `image`, `title`, `description`, `id`, `movie`) VALUES
('star wars 1', 'star wars 1', 'star wars 1', 'how are\r\nasczdfz\r\nzfzdxzdf\r\nzxfzdfzdf\r\nzdczff\r\nzdfef', 1, 'movie'),
('star wars 2', 'star wars 2', 'star wars 2', 'hello', 2, 'movie'),
('star wars 3', 'star wars 3', 'star wars 3', '', 7, 'movie'),
('star wars 4', 'star wars 4', 'star wars 4', '', 9, 'movie'),
('Star Wars The Last Jedi', 'Star Wars The Last Jedi', 'Star Wars The Last Jedi', '', 10, 'movie'),
('star wars 5', 'star wars 5', 'star wars 5', '', 12, 'movie');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `videos` varchar(500) NOT NULL DEFAULT 'videos',
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `name` varchar(200) NOT NULL,
  `image` varchar(23) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL,
  `youtube` varchar(20) NOT NULL DEFAULT 'youtube'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`name`, `image`, `title`, `description`, `id`, `youtube`) VALUES
('https://youtube.com/embed/l25AL0BdD6w', '4', 'sugarland', '', 4, 'youtube'),
('https://www.youtube.com/embed/op4B9sNGi0k', '1', 'magenta riddim', '', 7, 'youtube'),
('https://www.youtube.com/embed/uMArzRFRgvw', '5', 'boom shankar', '', 8, 'youtube'),
('https://www.youtube.com/embed/YykjpeuMNEk', '4', 'coldplay', '', 9, 'youtube'),
('https://www.youtube.com/embed/pj6k-EFxqAI', '15', 'capital letters', 'capita;l', 18, 'youtube'),
('https://www6.fmovies.se/film/incredibles-2.5kj1m', '15', 'qwerty', '1234567', 19, 'youtube');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
