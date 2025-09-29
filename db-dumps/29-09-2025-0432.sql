-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Sep 29, 2025 at 02:32 AM
-- Server version: 12.0.2-MariaDB-ubu2404
-- PHP Version: 8.2.29

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
(4, 'Stopwatch', 'stopwatch.webp', 'Deze site heeft een simpele stopwatch die kan starten en stoppen, er is ook een slider voor de textsize en een afbeelding. Het werkt allemaal met js.', 'https://38210.hosts2.ma-cloud.nl/m3-skill/stopwatch/index.html'),
(5, 'Museum Online', 'museumonline.webp', 'Dit is een website waar we aan hebben gewerkt in een groep om te oefenen om samen een website te maken. Er wordt vooral gebruik gemaakt van standaard HTML, CSS en een beetje JS.', 'https://38210.hosts2.ma-cloud.nl/m2-bo-museumonline/index.html'),
(6, 'API-tests', 'api-tests.webp', 'Hier heb ik voor het eerst een api gebruikt om data op te halen en in de site te laten zien. Ik maak hier gebruik van de tvmaze api om info op te halen over tv shows.', 'https://38210.hosts2.ma-cloud.nl/m3-skill/api-tests/index.html'),
(7, 'Charts', 'charts.webp', 'Op deze site maak ik gebruik van chart.js om heel makkelijk mooie grafieken te maken met relatief weinig JS code.', 'https://38210.hosts2.ma-cloud.nl/m3-skill/charts/index.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
