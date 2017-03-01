-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2017 at 03:06 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clic-guide-montreal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(20) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Formations'),
(2, 'Beauté'),
(5, 'Construction et décoration'),
(6, 'Artistes'),
(7, 'Restaurants');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(20) NOT NULL,
  `categorie-id` int(11) NOT NULL,
  `users-id` int(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `courriel` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `info01` varchar(150) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `codepostal` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `categorie-id`, `users-id`, `photo`, `logo`, `courriel`, `titre`, `info01`, `quartier`, `adresse`, `codepostal`, `telephone`) VALUES
(1, 0, 0, 'artistes-photo-01.jpg', 'artistes-logo-p-02.png', 'chantal@gmail.com', 'Chantal Mathieu photographe', 'J''offre mes services : à la réalisation de vidéo corporatives, télévisuelles et évenementielles etc, la réalisation et d''événements (mariage...)', 'Rosemont', '6207 Avenue de Lorimier Montréal, Qc ', 'H2G 2P5', '514.303.8156'),
(2, 0, 0, '', '', 'ad-media@gmail.com ', 'AD Media estudio', '', '', '', '', ''),
(3, 0, 0, '', '', 'angel@gmail.com', 'Angel Montiel', '', '', '', '', ''),
(4, 0, 0, '', '', 'arturo@gmail.co ', 'Arturo De Grandmont', '', '', '', '', ''),
(5, 0, 0, '', '', 'benjamin@gmail.com', 'Benjamin Delisle', '', '', '', '', ''),
(6, 0, 0, '', '', 'bricoles@gmail.com ', 'Art et Bricoles', '', '', '', '', ''),
(7, 0, 0, '', '', 'cristal@gmail.com ', 'Cristal Et Billes', '', '', '', '', ''),
(8, 0, 0, '', '', 'pops-art@gmail.com', 'Pops Art', '', '', '', '', ''),
(9, 0, 0, '', '', 'lesanges@gmail.com', 'Les Anges d''Annabelle', '', '', '', '', ''),
(10, 0, 0, '', '', 'ceramique@gmail.com', 'Céramique Les Deux Ailes', '', '', '', '', ''),
(11, 0, 0, '', '', 'kyo@gmail.com ', 'Kyo Bar Japonais', '', '', '', '', ''),
(12, 0, 0, '', '', 'pamika@gmail.com ', 'Pamika Brasserie Thai', '', '', '', '', ''),
(13, 0, 0, '', '', 'jatoba@gmail.com', 'Jatoba', '', '', '', '', ''),
(14, 0, 0, '', '', 'kazu@gmail.com ', 'Kazu', '', '', '', '', ''),
(15, 0, 0, '', '', 'pho@gmail.com ', 'Pho Bang New York', '', '', '', '', ''),
(16, 0, 0, '', '', 'bis@gmail.com ', 'Bis', '', '', '', '', ''),
(17, 0, 0, '', '', 'modavie@gmail.com', 'Modavie', '', '', '', '', ''),
(18, 0, 0, '', '', 'focolaio@gmail.com', 'Focolaio', '', '', '', '', ''),
(19, 0, 0, '', '', 'salumi@gmail.com ', 'Salumi Vino', '', '', '', '', ''),
(20, 0, 0, '', '', 'pizzeria@gmail.com', 'Pizzeria Bros', '', '', '', '', ''),
(21, 0, 0, '', '', 'lola@gmail.com ', 'Cafe Lola Rosa', '', '', '', '', ''),
(22, 0, 0, '', '', 'tacos@gmail.com', 'La Capital Tacos', '', '', '', '', ''),
(23, 0, 0, '', '', 'ceviches@gmail.com ', 'Ceviches', '', '', '', '', ''),
(24, 0, 0, '', '', 'mexico@gmail.com ', 'El Sabor de Mexico', '', '', '', '', ''),
(25, 0, 0, '', '', 'tres-Amigos@gmail.com ', 'Tres Amigos', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`) VALUES
(1, 'Chantal Mathieu photographe', 'chantal@gmail.com', 'chantal123'),
(2, 'AD Media estudio', 'ad-media@gmail.com', 'ad-media'),
(3, 'Angel Montiel', 'angel@gmail.com', 'angel'),
(4, 'Arturo De Grandmont', 'arturo@gmail.com', 'arturo123'),
(5, 'Benjamin Delisle', 'benjamin@gmail.com', 'benjamin123'),
(9, 'Art et Bricoles', 'bricoles@gmail.com', 'bricoles123'),
(10, 'Cristal Et Billes', 'cristal@gmail.com', 'cristal123'),
(11, 'Pops Art', 'pops-art@gmail.com', 'pops-art123'),
(12, 'Les Anges d''Annabelle', 'lesanges@gmail.com', 'lesanges123'),
(13, 'Céramique Les Deux Ailes', 'ceramique@gmail.com', 'ceramique123'),
(14, 'Kyo Bar Japonais', 'kyo@gmail.com', 'kyo'),
(15, 'Pamika Brasserie Thai', 'pamika@gmail.com', 'pamika123'),
(16, 'Jatoba', 'jatoba@gmail.com', 'jatoba123'),
(17, 'Kazu', 'kazu@gmail.com', 'kazu123'),
(18, 'Pho Bang New York', 'pho@gmail.com', 'pho123'),
(19, 'Bis', 'bis@gmail.com', 'bis123'),
(20, 'Modavie', 'modavie@gmail.com', 'modavie123'),
(21, 'Focolaio', 'focolaio@gmail.com', 'focolaio123'),
(22, 'Salumi Vino', 'salumi@gmail.com', 'salumi123'),
(23, 'Pizzeria Bros', 'pizzeria@gmail.com', 'pizzeria123'),
(24, 'Cafe Lola Rosa', 'lola@gmail.com', 'lola123'),
(25, 'La Capital Tacos', 'tacos@gmail.com', 'tacos123'),
(26, 'Ceviches', 'ceviches@gmail.com', 'ceviches123'),
(27, 'El Sabor de Mexico', 'mexicogmail.com', 'mexico123'),
(28, 'Tres Amigos', 'tres-Amigos@gmail.com', 'tres-Amigos123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
