-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2021 at 08:37 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Amine`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Commande`
--

CREATE TABLE `Commande` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Prix` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Type_réglement` varchar(255) NOT NULL,
  `Adresse_expédition` varchar(255) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL,
  `id_produit` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Panier`
--

CREATE TABLE `Panier` (
  `id_commande` bigint(20) UNSIGNED NOT NULL,
  `id_produit` bigint(20) UNSIGNED NOT NULL,
  `Quantité` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Produits`
--

CREATE TABLE `Produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prix` int(10) NOT NULL,
  `Quantité` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `certification_handicap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `username`, `prenom`, `nom`, `mail`, `mot_de_passe`, `telephone`, `adresse`, `localite`, `salaire`, `certification_handicap`) VALUES
(2, 'cc', 'cc', 'cc', 'ac@hotmail.fr', '$2y$12$YVtvL6Msiiy3DA9HNLOIUeiMUuiavJDVwxVutSuxcpq76QVeFmmKC', '0798877889', 'cc', 'cc', 'cc', 'cc'),
(3, 'User', 'emma', 'quiqiuq', 'blablabla@outlook.fr', '$2y$12$fMQzVMtWtnS4IBBTYTcobuHYVWfVgZ22tWQKiraBNywVL2uf2g6Iy', '09090909', 'ic', 'c', 'c', 'c'),
(4, 'vv', 'vv', 'vv', 'vv@hotmail.fr', '$2y$12$D4wDi8YAOdbSdEIJzyKknu4MdT9a21ZAuFxe.z6mWvIHF1ikkXQzu', '0909090', 'vv', 'vv', 'vv', 'vv'),
(5, 'Emma', 'Emmaaa', 'Quiqui', 'bl@outlook.fr', '$2y$12$A71Cz.luQSwUcg317hXo7uScrFvno0ji.fEyjjMqJhTAzgbgZ3hnC', '09090900', 'jsaisplus', 'dtc', '1000', 'oui'),
(6, 'Amine', 'Amine', 'truc', 'amine@truc.fr', '$2y$12$RPKpybLFAklbym6fSwRsTuryXNq69TuU5Fvs0a6zLz/DFS9JPhRcG', '000000', 'gg', 'gg', 'gg', 'gg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Mail` (`Mail`);

--
-- Indexes for table `Commande`
--
ALTER TABLE `Commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Indexes for table `Panier`
--
ALTER TABLE `Panier`
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_produit` (`id_produit`);

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
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Commande`
--
ALTER TABLE `Commande`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Commande`
--
ALTER TABLE `Commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateurs` (`id`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `Produits` (`id`);

--
-- Constraints for table `Panier`
--
ALTER TABLE `Panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `Commande` (`id`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `Produits` (`id`);
