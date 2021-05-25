-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 jan. 2021 à 10:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitech`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `num_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse_mail` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `taille` decimal(10,0) DEFAULT NULL,
  `poid` decimal(10,0) DEFAULT NULL,
  `sexe` enum('Homme','Femme') DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `num_carte` varchar(255) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`num_client`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`num_client`, `nom`, `prenom`, `adresse_mail`, `ville`, `date_de_naissance`, `taille`, `poid`, `sexe`, `mot_de_passe`, `num_carte`, `statut`) VALUES
(1, 'Tom', 'Tom', 'To@hotmail.fr', 'To', '1999-05-02', '180', '78', 'Homme', '$2y$12$5jdEbrIZ/WwfPmQzM4uWSuN2OBwBBFIEoDwzeCVeL4KSPA1sfqVtq', NULL, 'Strong'),
(2, 'Dimitri', 'Bilal', 'a@hotmail.fr', 'Vlf', '1998-02-20', '176', '60', 'Homme', '$2y$12$21PiZ1WpdziKRE4LdGQ9q.ijLLylYvPkW0cuXfNs8Y1eQsjlYbpc2', NULL, 'Strong'),
(28, 'Bryant', 'Alex', 'b@hotmail.fr', 'Bou', '1997-08-05', '170', '69', 'Homme', '$2y$12$sIvgfWRw8Xv1JMHdJhSBuu78trwNR/rKRj4y9mDyAuFO77ECn1z9S', NULL, 'Rupture'),
(29, 'Cala', 'Celia', 'c@hotmail.fr', 'Villejuif', '1993-02-01', '163', '60', 'Femme', '$2y$12$9jmKvc5w9HNGgA2XVBtfHORnKcKO5B18pnywiGtNtQWpLL2EPr2OO', NULL, 'Strong'),
(31, 'Corentin', 'Jaia', 'corentin@hotmail.fr', 'Villejuif', '2000-08-05', '170', '60', 'Femme', '$2y$12$K0B7KWEH02xf1F1R7R.6ou7GFD5BPIpf/sG460r9mzACBrXJDOtUa', NULL, NULL),
(32, 'joly', 'tom', 'tom.joly@free.fr', 'wissous', '2001-03-22', '178', '82', 'Homme', '$2y$12$VAh27gwGupBCi9GYwM/.N.WOgs8yNlVLxEHWekvypIBns/xKF55je', NULL, '1');

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

DROP TABLE IF EXISTS `appartient`;
CREATE TABLE IF NOT EXISTS `appartient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` int(11) DEFAULT NULL,
  `groupe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eleve_idx` (`client`),
  KEY `groupe_idx` (`groupe`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`id`, `client`, `groupe`) VALUES
(1, 32, 1);

-- --------------------------------------------------------

--
-- Structure de la table `chat_et_service`
--

DROP TABLE IF EXISTS `chat_et_service`;
CREATE TABLE IF NOT EXISTS `chat_et_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `contenu` varchar(255) COLLATE utf8_bin NOT NULL,
  `creat_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `from_id` (`from_id`),
  KEY `to_id` (`to_id`)
) ENGINE=MyISAM AUTO_INCREMENT=326 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chat_et_service`
--

INSERT INTO `chat_et_service` (`id`, `from_id`, `to_id`, `contenu`, `creat_at`) VALUES
(325, 2, 29, 'salut celia', NULL),
(324, 31, 2, 'Salut', NULL),
(323, 2, 31, 'Salut', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `num_coach` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `sexe` enum('Homme','Femme') DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`num_coach`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`num_coach`, `nom`, `prenom`, `sexe`, `mot_de_passe`) VALUES
(1, 'no_coach', 'no_coach', NULL, '*BDB341FD6752CBB3EFAB7384CA04FCD64F58AE0B'),
(2, 'Joly', 'Tom', 'Homme', '*63D85DCA15EAFFC58C908FD2FAE50CCBC60C4EA2'),
(3, 'Chocq', 'Tomas', 'Homme', '*3B34EE3F5F625E46468D670040D0BA178AB355AE'),
(4, 'Mla', 'Bini', 'Homme', '*BDB341FD6752CBB3EFAB7384CA04FCD64F58AE0B');

-- --------------------------------------------------------

--
-- Structure de la table `entrainement_maison`
--

DROP TABLE IF EXISTS `entrainement_maison`;
CREATE TABLE IF NOT EXISTS `entrainement_maison` (
  `id_entrainement` int(11) NOT NULL DEFAULT '1',
  `type_session` varchar(100) DEFAULT NULL,
  `categories` enum('full_body','abdos','dos','jambes','bras','pecs','epaules') DEFAULT NULL,
  `num_coach` enum('1','2','3','4') DEFAULT NULL,
  PRIMARY KEY (`id_entrainement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrainement_maison`
--

INSERT INTO `entrainement_maison` (`id_entrainement`, `type_session`, `categories`, `num_coach`) VALUES
(1, 'https://www.youtube-nocookie.com/embed/zJMadH1Ne9A', 'full_body', '2'),
(2, 'https://www.youtube.com/embed/3eQa7C6D4XU', 'abdos', '4'),
(3, 'https://www.youtube.com/embed/g5deUgjsphY', 'dos', '4'),
(4, 'https://www.youtube.com/embed/dPb3v-Vy70Y', 'jambes', '2'),
(5, 'https://www.youtube.com/embed/97RT7J7ikpw', 'bras', '3'),
(6, 'https://www.youtube.com/embed/0mafDVIG1fc', 'pecs', '3'),
(7, 'https://www.youtube.com/embed/PvtERCGqVIw', 'epaules', '3'),
(8, 'rien', NULL, '1');

-- --------------------------------------------------------

--
-- Structure de la table `entrainer`
--

DROP TABLE IF EXISTS `entrainer`;
CREATE TABLE IF NOT EXISTS `entrainer` (
  `numero_carte` char(255) NOT NULL,
  `creneau_dispo` char(20) DEFAULT NULL,
  `reservation` char(20) DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `Adherent_num_client` int(11) NOT NULL,
  `Coach_num_coach` int(11) NOT NULL,
  `Entrainement_maison_id_entrainement` int(11) NOT NULL,
  PRIMARY KEY (`numero_carte`),
  KEY `fk_Réservation_entrainement_Adhérent_idx` (`Adherent_num_client`),
  KEY `fk_Réservation_entrainement_Coach1_idx` (`Coach_num_coach`),
  KEY `fk_Entrainer_Entrainement_maison1_idx` (`Entrainement_maison_id_entrainement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrainer`
--

INSERT INTO `entrainer` (`numero_carte`, `creneau_dispo`, `reservation`, `heure`, `Adherent_num_client`, `Coach_num_coach`, `Entrainement_maison_id_entrainement`) VALUES
('1', NULL, NULL, NULL, 2, 3, 8),
('2', NULL, NULL, NULL, 29, 1, 8),
('3', NULL, NULL, NULL, 28, 1, 8),
('4', NULL, NULL, NULL, 1, 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`) VALUES
(1, 'zumba'),
(2, 'yoga');

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

DROP TABLE IF EXISTS `inscrire`;
CREATE TABLE IF NOT EXISTS `inscrire` (
  `inscrire` int(11) NOT NULL,
  `Type_abonnement_code_abonnement` int(11) NOT NULL,
  `Adherent_num_client` int(11) NOT NULL,
  PRIMARY KEY (`inscrire`),
  KEY `fk_Inscrire_Type_abonnement1_idx` (`Type_abonnement_code_abonnement`),
  KEY `fk_Inscrire_Adhérent1_idx` (`Adherent_num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `progres`
--

DROP TABLE IF EXISTS `progres`;
CREATE TABLE IF NOT EXISTS `progres` (
  `Adherent_num_client` int(11) NOT NULL,
  `taille` decimal(10,0) DEFAULT NULL,
  `poid` decimal(10,0) DEFAULT NULL,
  `objectif` enum('maigrir','prendre_du_poids') DEFAULT NULL,
  PRIMARY KEY (`Adherent_num_client`),
  KEY `fk_Progres_Adhérent1_idx` (`Adherent_num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `progres`
--

INSERT INTO `progres` (`Adherent_num_client`, `taille`, `poid`, `objectif`) VALUES
(1, '180', '78', 'maigrir'),
(2, '176', '60', 'maigrir'),
(28, '170', '69', 'prendre_du_poids'),
(29, '163', '60', 'prendre_du_poids'),
(31, '170', '60', NULL),
(32, '178', '82', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_abonnement`
--

DROP TABLE IF EXISTS `type_abonnement`;
CREATE TABLE IF NOT EXISTS `type_abonnement` (
  `code_abonnement` int(11) NOT NULL,
  `description_abonnement` varchar(45) DEFAULT NULL,
  `tarif` decimal(10,0) DEFAULT NULL,
  `duree` decimal(10,0) DEFAULT NULL,
  `Inviter_num_code` varchar(255) NOT NULL,
  PRIMARY KEY (`code_abonnement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entrainer`
--
ALTER TABLE `entrainer`
  ADD CONSTRAINT `fk_Entrainer_Entrainement_maison1` FOREIGN KEY (`Entrainement_maison_id_entrainement`) REFERENCES `entrainement_maison` (`id_entrainement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Réservation_entrainement_Adhérent` FOREIGN KEY (`Adherent_num_client`) REFERENCES `adherent` (`num_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Réservation_entrainement_Coach1` FOREIGN KEY (`Coach_num_coach`) REFERENCES `coach` (`num_coach`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `fk_Inscrire_Adhérent1` FOREIGN KEY (`Adherent_num_client`) REFERENCES `adherent` (`num_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inscrire_Type_abonnement1` FOREIGN KEY (`Type_abonnement_code_abonnement`) REFERENCES `type_abonnement` (`code_abonnement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `progres`
--
ALTER TABLE `progres`
  ADD CONSTRAINT `fk_Progres_Adhérent1` FOREIGN KEY (`Adherent_num_client`) REFERENCES `adherent` (`num_client`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
