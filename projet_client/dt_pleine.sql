-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 26, 2021 at 07:28 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Amine`
--

-- --------------------------------------------------------

--
-- Table structure for table `Commande`
--

CREATE TABLE `Commande` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prix` int(10) NOT NULL,
  `quantite_total` int(20) NOT NULL,
  `adresse_expedition` varchar(255) NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` bigint(20) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Produits`
--

CREATE TABLE `Produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prix` int(10) NOT NULL,
  `quantite` int(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Produits`
--

INSERT INTO `Produits` (`id`, `Nom`, `Prix`, `quantite`, `image`) VALUES
(1, 'Gant Moovision', 100, 70, '../images/gant.png'),
(2, 'Chargeur gant ', 9, 20, '../images/charger.png'),
(3, 'Housse de protection gant', 20, 95, '../images/housse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `localite` varchar(255) NOT NULL,
  `salaire` varchar(255) NOT NULL,
  `certification_handicap` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('0','1','2') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `username`, `prenom`, `nom`, `mail`, `mot_de_passe`, `telephone`, `adresse`, `localite`, `salaire`, `certification_handicap`, `role`) VALUES
(1, 'Moni299', 'Adrien', 'Moni', 'test@gmail.fr', '$2y$12$r1yh4BKE8/L3iAlbNkUM.O6uzI7mFjqcNpFyKT6tQl9.xBU7NT6ia', '065187636', '20 rue parmentier Neuilly Sur Seine', 'Neuilly Sur Seine', '1', 0, '2'),
(2, 'sesso4343', 'Sam', 'Sesso', 'Ben@gm.com', 'Azeert22', '062838724', '14 avenue victor hugo Paris', 'Paris', '0', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Commande`
--
ALTER TABLE `Commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commande`
--
ALTER TABLE `Commande`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Commande`
--
ALTER TABLE `Commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateurs` (`id`);
