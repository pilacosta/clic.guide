-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2017 at 05:41 PM
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
  `infoSmall` varchar(1024) NOT NULL,
  `infoLar` varchar(1024) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `codepostal` varchar(20) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `categorie-id`, `users-id`, `photo`, `logo`, `courriel`, `titre`, `infoSmall`, `infoLar`, `quartier`, `adresse`, `codepostal`, `Ville`, `telephone`) VALUES
(1, 0, 0, 'artistes-photo-06.jpg', 'artistes-logo-p-09.png', 'chantal@gmail.com', 'Chantal Mathieu photographe', 'Photographe haut de gamme à prix abordable, spécialisé dans les mariages depuis plusieurs années. Je pourrais qualifier mon style d''un mélange de photos journalistiques ', 'Photographe haut de gamme à prix abordable, spécialisé dans les mariages depuis plusieurs années. Je pourrais qualifier mon style d''un mélange de photos journalistiques et classiques dépendant de la situation, du moment et de vos préférences. Je vous invite à visiter mes sites afin que vous puissiez vous faire une idée de mon travail. Forfaits Comprenant : - Forfaits : Préparation, Cérémonie, Réception... - Photos fournies sur Clé USB ou autre support de votre choix, - Toutes les photos ...', 'Rosemont', '6207 Avenue de Lorimier Montréal, Qc ', 'H2G 2P5', 'Montreal, Québec', '514-303- 8156'),
(2, 0, 0, 'artistes-photo-07.jpg', '', 'ad-media@gmail.com ', 'AD Media estudio', 'La photographie de mariage Save your moments of your wedding day with my high quality and professional photos with a reasonable price. At the same day of your wedding day you can come ', 'La photographie de mariage Save your moments of your wedding day with my high quality and professional photos with a reasonable price. At the same day of your wedding day you can come to my studio to shoot some portrait photos and you don''t need to pay for these photos. They include in my packages. I have several packages and photo samples. Visit my website: "www.photomahnaz.com", or "facebook.com/photomahnaz" or "instagram.com/photomahnaz" to know more about the details. Enregistrez vos ...', 'Anjou', '5396, Jean-Talon Est.', 'H1S 1L5', 'Montreal, Québec', '514-814- 3283'),
(3, 0, 0, 'artistes-photo-08.jpg', '', 'angel@gmail.com', 'Angel Montiel', 'Enregistrez vos moments de votre journée de mariage avec mes photos des haute qualités et des photos professionnelles avec un prix raisonnable. Le même jour, le jour de votre mariage', 'Enregistrez vos moments de votre journée de mariage avec mes photos des haute qualités et des photos professionnelles avec un prix raisonnable. Le même jour, le jour de votre mariage, vous pouvez venir à mon studio pour tirer quelques photos de portrait et vous ne pas besoin de payer pour ces photos. Ils comprennent dans mes paquets. J''ai plusieurs paquets et des échantillons de photos. Visitez mon site: "www.photomahnaz.com", ou "facebook.com/photomahnaz" ou ...', 'Lachine', '1174 Rue Bélanger Est', 'H2s 1h4', 'Montreal, Québec', '514-564- 8344'),
(4, 0, 0, 'artistes-photo-09.jpg', '', 'arturo@gmail.co ', 'Arturo De Grandmont', 'Transfer VHS, VHS-C, SVHS, SVHS-C, MiniDV, Hi8, Digital 8, 8mm film, Super 8 film Sur DVD et/ou USB. Transfer Cassette Audio sur CD. Standard PAL, SECAM, NTSC Nous utilisons ', 'Transfer VHS, VHS-C, SVHS, SVHS-C, MiniDV, Hi8, Digital 8, 8mm film, Super 8 film Sur DVD et/ou USB. Transfer Cassette Audio sur CD. Standard PAL, SECAM, NTSC Nous utilisons des équipements professionnels pour faire le transfert. Meilleur prix et la qualité est garantie. Prix plus bas pour plus de 5 cassettes. Appelez 514-812-8260 ou 514-660-8260 pour plus d''informations et de prix. Le montage vidéo et la correction des couleurs et de l''ajout de musique est aussi disponible. Nous imprimons ...', 'Outremont', '5958 rue mazarin', 'H4E 2X2', 'Montreal, Québec', '514-472-9967'),
(5, 0, 0, 'artistes-photo-10.jpg', '', 'benjamin@gmail.com', 'Benjamin Delisle', 'Beautiful nature photos for Tableaus Choisissez vos photos préférées de nature de mon instagram pour avoir la taille originale ', 'Beautiful nature photos for Tableaus Choisissez vos photos préférées de nature de mon instagram pour avoir la taille originale par l''email pour un prix raisonnable. "Instagram.com/photomahnaz" Choose your preferred nature photos from my instagram to have the original size by email for a reasonable price. “instagram.com/photomahnaz”', 'Saint-Laurent', '7354 St Hubert St', 'H2G 1H5', 'Montreal, Québec', '514-830- 8203'),
(6, 0, 0, 'artistes-art-04.jpg', 'artistes-logo-a-11.png', 'bricoles@gmail.com ', 'Art et Bricoles', 'Le Art et Bricoles Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Ville-Marie', '442, rue Moffat, Verdun', 'H4H 1Y5', 'Montreal, Québec', '514-573-9000'),
(7, 0, 0, 'artistes-art-02.jpg', '', 'cristal@gmail.com ', 'Cristal Et Billes', 'Le Cristal Et Billes Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'LaSalle', '3286, boul Saint-Martin O', 'H7T 1A1', 'Laval, Québec', '514-345-7865'),
(8, 0, 0, 'artistes-art-03.jpg', '', 'pops-art@gmail.com', 'Pops Art', 'Pops Art Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Ville-Marie', '291 rue Beaudoin', 'H4C 2Y3', 'Montreal, Québec', '514-598-0976'),
(9, 0, 0, 'artistes-art-01.jpg', '', 'lesanges@gmail.com', 'Les Anges d''Annabelle', 'Le Les Anges d''Annabelle est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Côte-des-Neiges', '600 rue Marguerite-d''Youville', 'H3C 1W7', 'Montreal, Québec', '514-987-4325'),
(10, 0, 0, 'artistes-art-05.jpg', '', 'ceramique@gmail.com', 'Céramique Les Deux Ailes', 'Céramique Les Deux Ailes Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Outremont', '263, av de Montréal-Est', 'H1B 5H1', 'Montreal, Québec', '514-987-1934'),
(11, 0, 0, 'restaurant-asiatique-01.jpg', '', 'kyo@gmail.com ', 'Kyo Bar Japonais', 'Le Kyo Bar Japonais Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Pierrefonds', '711, Cote de la Place d''Armes', 'H2Y 2X6', 'Montreal, Québec', '514-282-2711'),
(12, 0, 0, 'restaurant-asiatique-02.jpg', '', 'pamika@gmail.com ', 'Pamika Brasserie Thai', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Rosemont', '901 Rue Sherbrooke Est', 'H2L 1L3', 'Montreal, Québec', '514-508-9444'),
(13, 0, 0, 'restaurant-asiatique-03.jpg', 'restaurant-a-logo-05.png', 'wok-star@gmail.com', 'Wok-Star', 'Le  Wok-StarLorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Saint-Laurent', '424 Avenue Duluth Est', 'H3B 3C8', 'Montreal, Québec', '514-587-8106'),
(14, 0, 0, 'restaurant-asiatique-04.jpg', '', 'kazu@gmail.com ', 'Kazu', 'Kazu Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Ville-Marie', '1184 Place Phillips', 'H3B 3C8', 'Montreal, Québec', '514-871-1184'),
(15, 0, 0, 'restaurant-asiatique-05.jpg', 'restaurant-a-logo-06.jpg', 'tong-yuen@gmail.com ', 'Tong-Yuen', 'Tong-Yuen Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Villeray', '1001 Saint-Laurent Blvd', 'H2Z 1J4', 'Montreal, Québec', '514-954-2032'),
(16, 0, 0, 'restaurant-italien-02.jpg', '', 'bis@gmail.com ', 'Bis', 'Bis Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Saint-Léonard', '1 St Paul W', 'H2Y 1Y6', 'Montreal, Québec', '514-287-9582'),
(17, 0, 0, 'restaurant-italien-03.jpg', '', 'modavie@gmail.com', 'Modavie', 'Modavie Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Rosemont', '1223 Square-Phillips', 'H3B 3E9', 'Montreal, Québec', '514-879-1045'),
(18, 0, 0, 'restaurant-italien-04.jpg', '', 'focolaio@gmail.com', 'Focolaio', 'Le Focolaio  Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Ahuntsic', '358 rue Notre Dame E', 'H2Y 1C7', 'Montreal, Québec', '514-759-0505'),
(19, 0, 0, 'restaurant-italien-05.jpg', '', 'salumi@gmail.com ', 'Salumi Vino', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Hochelaga', '1434 Crescent Street', 'H3G 2B6', 'Montreal, Québec', '514-288-2231'),
(20, 0, 0, 'restaurant-italien-01.jpg', '', 'pizzeria@gmail.com', 'Pizzeria Bros', 'Salumi Vino Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Outremont', '257 Prince', 'H3C 2N4', 'Montreal, Québec', '514-316-4666'),
(21, 0, 0, 'restaurant-mex-01.jpg', '', 'lola@gmail.com ', 'Cafe Lola Rosa', 'Cafe Lola Rosa Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Ville-Marie', '545 Milton', 'H2X 1W5', 'Montreal, Québec', '514-287-9337‬'),
(22, 0, 0, 'restaurant-mex-02.jpg', '', 'tacos@gmail.com', 'La Capital Tacos', 'Le La Capital Tacos Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Rosemont', '1096 Saint-Laurent ', 'H2Z 1J5', 'Montreal, Québec', '514-873-5255‬'),
(23, 0, 0, 'restaurant-mex-03.jpg', '', 'ceviches@gmail.com ', 'Ceviches', 'Ceviches Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Hochelaga', '152 Napoleon', 'H2W 1K8', 'Montreal, Québec', '514-419-6391‬'),
(24, 0, 0, 'restaurant-mex-04.jpg', 'restaurant-mx-logo-04.jpeg', 'sombreros@gmail.com ', 'El Sabor de Mexico', 'El Sabor de Mexico Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Verdun', '5013 Rue Wellinto', 'H4G 1Y1', 'Montreal, Québec', '514-362-8888‬'),
(25, 0, 0, 'restaurant-mex-05.jpg', '', 'tres-Amigos@gmail.com ', 'Tres Amigos', 'Les Tres Amigos Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard…', '', 'Rosemont', '1657 W | Ste-Catherine Street', 'H3H 1L9', 'Montreal, Québec', '514-939-3329‬');

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
(16, 'Wok-Star', 'wok-star@gmail.com', 'wok-star123'),
(17, 'Kazu', 'kazu@gmail.com', 'kazu123'),
(18, 'Tong Yuen', 'tong-yuen@gmail.com', 'tong-yuen123'),
(19, 'Bis', 'bis@gmail.com', 'bis123'),
(20, 'Modavie', 'modavie@gmail.com', 'modavie123'),
(21, 'Focolaio', 'focolaio@gmail.com', 'focolaio123'),
(22, 'Salumi Vino', 'salumi@gmail.com', 'salumi123'),
(23, 'Pizzeria Bros', 'pizzeria@gmail.com', 'pizzeria123'),
(24, 'Cafe Lola Rosa', 'lola@gmail.com', 'lola123'),
(25, 'La Capital Tacos', 'tacos@gmail.com', 'tacos123'),
(26, 'Ceviches', 'ceviches@gmail.com', 'ceviches123'),
(27, 'El Sabor de Mexico', 'sombreros@gmail.com', 'sombreros123'),
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
