-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Sep 28, 2025 at 01:15 PM
-- Server version: 11.7.2-MariaDB-ubu2404
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `description`, `link`) VALUES
(2, 'Pokemon', 'pokemon.webp', 'Dit is een website waar er van pokeapi een random pokemon wordt opgehaald, als je op de catch knop drukt heb je een kans om de pokemon te vangen en aan de storage toe te voegen.', 'https://38210.hosts2.ma-cloud.nl/m3-skill/pokemon/index.html'),
(3, 'Filter', 'filter.webp', 'Ik heb hier een filter gemaakt die werkt met de dataset categories in html en js', 'https://38210.hosts2.ma-cloud.nl/m4-skill/filter/index.html'),
(4, 'Stopwatch', 'stopwatch.webp', 'Deze site heeft een simpele stopwatch die kan starten en stoppen, er is ook een slider voor de textsize en een afbeelding. Het werkt allemaal met js.', 'https://38210.hosts2.ma-cloud.nl/m3-skill/stopwatch/index.html');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `description`) VALUES
(1, 'Dit is item 1'),
(2, 'Dit is het tweede item'),
(3, 'dit is prepared'),
(4, 'dit is prepared'),
(5, 'dit is prepared'),
(6, 'dit is prepared'),
(7, 'dit is prepared'),
(8, 'dit is prepared'),
(9, 'dit is prepared'),
(10, 'dit is prepared');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
