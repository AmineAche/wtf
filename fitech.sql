-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 25 mai 2021 à 11:59
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`num_client`, `nom`, `prenom`, `adresse_mail`, `ville`, `date_de_naissance`, `taille`, `poid`, `sexe`, `mot_de_passe`, `num_carte`, `statut`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Homme', NULL, NULL, NULL),
(2, 'Dimitri', 'Bilal', 'a@hotmail.fr', 'Vlf', '1998-02-20', '176', '80', 'Homme', '$2y$12$21PiZ1WpdziKRE4LdGQ9q.ijLLylYvPkW0cuXfNs8Y1eQsjlYbpc2', NULL, 'Strong'),
(28, 'Bryant', 'Alex', 'b@hotmail.fr', 'Bou', '1997-08-05', '170', '69', 'Homme', '$2y$12$sIvgfWRw8Xv1JMHdJhSBuu78trwNR/rKRj4y9mDyAuFO77ECn1z9S', NULL, 'Rupture'),
(29, 'Cala', 'Celia', 'c@hotmail.fr', 'Villejuif', '1993-02-01', '163', '60', 'Femme', '$2y$12$9jmKvc5w9HNGgA2XVBtfHORnKcKO5B18pnywiGtNtQWpLL2EPr2OO', NULL, 'Strong'),
(31, 'Corentin', 'Jaia', 'corentin@hotmail.fr', 'Villejuif', '2000-08-05', '170', '60', 'Femme', '$2y$12$K0B7KWEH02xf1F1R7R.6ou7GFD5BPIpf/sG460r9mzACBrXJDOtUa', NULL, NULL),
(32, 'Didier', 'Drogba', 'd@hotmail.fr', 'San Antonio', '1990-04-08', '193', '80', 'Homme', '$2y$12$RvVWRSfGU9iNhcp5Bo29re5BUISb.gXdYMcuHnGJWDj2dOFwLBlJi', NULL, '2'),
(33, 'Portis', 'Bobby', 'portis@hotmail.fr', 'Nevada', '1994-02-10', '193', '70', 'Femme', '$2y$12$G608t7exMgIR1RMZGhrlhOa5yMMxF.nlAUp2e8d85wN5gd5W0rg/u', NULL, '3'),
(35, 'Bob', 'Bob', 'bob@hotmail.fr', 'Vlf', '2000-06-20', '180', '73', 'Homme', '$2y$12$41NWkKE4EAOeG0WEAb9qve3Vo8Bvj9cJrMaCIRfMb6bwTRoA/.5gy', NULL, NULL),
(36, 'joly', 'tom', 'tom.joly@free.fr', 'wissous', '2001-03-22', '178', '82', 'Homme', '$2y$12$bHy8NOxY9mp9FpBHSrvoeOhnu1mMtBLwshStAFzuo2v4OTsH.nM5O', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

DROP TABLE IF EXISTS `appartient`;
CREATE TABLE IF NOT EXISTS `appartient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` int(11) DEFAULT NULL,
  `groupe` int(11) DEFAULT NULL,
  `coach` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eleve_idx` (`client`),
  KEY `groupe_idx` (`groupe`),
  KEY `coach` (`coach`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`id`, `client`, `groupe`, `coach`) VALUES
(1, 2, 1, NULL),
(2, 36, 1, NULL),
(3, NULL, 1, 2),
(4, 29, 1, NULL);

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
  KEY `from` (`from_id`,`to_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=349 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chat_et_service`
--

INSERT INTO `chat_et_service` (`id`, `from_id`, `to_id`, `contenu`, `creat_at`) VALUES
(344, 2, 4, 'slt', NULL),
(345, 2, 4, 'ça va', NULL),
(346, 2, 2, 'salut', NULL),
(347, 2, 33, 'Yo', NULL),
(348, 33, 2, 'Yo', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `num_coach` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse_mail` varchar(45) DEFAULT NULL,
  `sexe` enum('Homme','Femme') DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `presence` enum('oui','non') DEFAULT NULL,
  `note` decimal(10,1) DEFAULT NULL,
  PRIMARY KEY (`num_coach`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`num_coach`, `nom`, `prenom`, `adresse_mail`, `sexe`, `mot_de_passe`, `presence`, `note`) VALUES
(1, 'no_coach', 'no_coach', NULL, NULL, '*BDB341FD6752CBB3EFAB7384CA04FCD64F58AE0B', NULL, NULL),
(2, 'Joly', 'Tom', 'Joly@hotmail.fr', 'Homme', '$2y$12$OFbglqsuOSkpPktZs1Ky2On.2dggOiSu8uH39nZp5eKeELq5sBTPa', 'oui', '5.0'),
(3, 'Chocq', 'Tomas', 'Chocq@hotmail.fr', 'Homme', '$2y$12$4NBklcnKdODkn0a1KEPhRuKv4DZsSRr01rog3AzOPiP3SJ4.2EKNu', 'non', NULL),
(4, 'Mla', 'Bini', 'Mla@hotmail.fr', 'Homme', '$2y$12$7kiJWvMK32qoascKabSl1OLjC7dj7vMU2HQdEJpPXLRNntUxAAhky', 'non', NULL);

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
  `numero_carte` int(255) NOT NULL AUTO_INCREMENT,
  `Adherent_num_client` int(11) NOT NULL,
  `Coach_num_coach` int(11) NOT NULL,
  `Entrainement_maison_id_entrainement` int(11) NOT NULL,
  PRIMARY KEY (`numero_carte`),
  KEY `fk_Réservation_entrainement_Adhérent_idx` (`Adherent_num_client`),
  KEY `fk_Réservation_entrainement_Coach1_idx` (`Coach_num_coach`),
  KEY `fk_Entrainer_Entrainement_maison1_idx` (`Entrainement_maison_id_entrainement`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrainer`
--

INSERT INTO `entrainer` (`numero_carte`, `Adherent_num_client`, `Coach_num_coach`, `Entrainement_maison_id_entrainement`) VALUES
(1, 2, 2, 8),
(2, 29, 1, 8),
(3, 28, 1, 8),
(4, 1, 1, 8),
(5, 35, 1, 8),
(6, 36, 2, 8);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`) VALUES
(1, 'zumba');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reserver` datetime NOT NULL,
  `num_client` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `num_client` (`num_client`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`id`, `reserver`, `num_client`) VALUES
(2, '2021-01-20 14:00:00', 2),
(3, '2021-01-20 17:00:00', 2),
(4, '2021-01-20 15:00:00', 2),
(5, '2021-01-20 16:00:00', 2),
(6, '2021-01-20 17:00:00', 35),
(7, '2021-01-22 12:00:00', 36);

-- --------------------------------------------------------

--
-- Structure de la table `horaire_coach`
--

DROP TABLE IF EXISTS `horaire_coach`;
CREATE TABLE IF NOT EXISTS `horaire_coach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reserver` datetime NOT NULL,
  `coach` int(11) NOT NULL,
  `num_client` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `coach` (`coach`),
  KEY `num_client` (`num_client`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `horaire_coach`
--

INSERT INTO `horaire_coach` (`id`, `reserver`, `coach`, `num_client`) VALUES
(1, '2021-01-23 13:00:00', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

DROP TABLE IF EXISTS `inscrire`;
CREATE TABLE IF NOT EXISTS `inscrire` (
  `inscrire` int(11) NOT NULL AUTO_INCREMENT,
  `Type_abonnement_code_abonnement` int(11) NOT NULL,
  `Adherent_num_client` int(11) NOT NULL,
  PRIMARY KEY (`inscrire`),
  KEY `fk_Inscrire_Type_abonnement1_idx` (`Type_abonnement_code_abonnement`),
  KEY `fk_Inscrire_Adhérent1_idx` (`Adherent_num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie_coach`
--

DROP TABLE IF EXISTS `messagerie_coach`;
CREATE TABLE IF NOT EXISTS `messagerie_coach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `from_id` (`from_id`),
  KEY `to_id` (`to_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messagerie_coach`
--

INSERT INTO `messagerie_coach` (`id`, `from_id`, `to_id`, `contenu`, `create_at`) VALUES
(1, 2, 4, 'Yo', NULL),
(2, 4, 2, 'Salut', NULL),
(3, 2, 3, 'salut tomas', '2021-01-22 15:08:44');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie_coach_adherent`
--

DROP TABLE IF EXISTS `messagerie_coach_adherent`;
CREATE TABLE IF NOT EXISTS `messagerie_coach_adherent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `coach` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `from_id` (`from_id`),
  KEY `to_id` (`to_id`),
  KEY `coach` (`coach`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messagerie_coach_adherent`
--

INSERT INTO `messagerie_coach_adherent` (`id`, `from_id`, `to_id`, `contenu`, `create_at`, `coach`) VALUES
(1, NULL, 2, 'yo', NULL, 2),
(2, 2, NULL, 'yo', NULL, 2),
(3, NULL, 2, 'Salut Dimitri', NULL, 2),
(4, 2, NULL, NULL, NULL, 2),
(5, 2, NULL, NULL, NULL, 2),
(6, 2, NULL, NULL, NULL, 2),
(7, NULL, 2, 'yo', NULL, 2),
(8, 2, NULL, NULL, NULL, 2),
(9, 36, NULL, NULL, NULL, 2),
(10, 36, NULL, NULL, NULL, 2),
(11, 36, NULL, NULL, NULL, 2),
(12, 36, NULL, NULL, NULL, 2),
(13, 36, NULL, NULL, NULL, 2),
(14, 36, NULL, NULL, NULL, 2),
(15, 36, NULL, NULL, NULL, 2),
(16, 36, NULL, NULL, NULL, 2),
(17, 36, NULL, 'oooooo', NULL, 2),
(18, 36, NULL, 'oooooo', NULL, 2),
(19, 36, NULL, 'oooooo', NULL, 2),
(20, 36, NULL, 'salut', NULL, 2),
(21, 36, NULL, 'salut', NULL, 2),
(22, 36, NULL, 'saluut coach', NULL, 2),
(23, NULL, 36, 'salut', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `message_groupe`
--

DROP TABLE IF EXISTS `message_groupe`;
CREATE TABLE IF NOT EXISTS `message_groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) DEFAULT NULL,
  `groupe` int(11) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `creat_at` datetime DEFAULT NULL,
  `coach` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `groupe` (`groupe`),
  KEY `from_id` (`from_id`),
  KEY `coach` (`coach`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message_groupe`
--

INSERT INTO `message_groupe` (`id`, `from_id`, `groupe`, `contenu`, `creat_at`, `coach`) VALUES
(1, 36, 1, 'salut pute', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `adherent_num_client` int(11) NOT NULL,
  `coach_num_coach` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_note`),
  KEY `adherent_num_client` (`adherent_num_client`),
  KEY `coach_num_coach` (`coach_num_coach`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `adherent_num_client`, `coach_num_coach`, `note`) VALUES
(26, 28, 2, 5),
(33, 2, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `preference`
--

DROP TABLE IF EXISTS `preference`;
CREATE TABLE IF NOT EXISTS `preference` (
  `id_preference` int(11) NOT NULL AUTO_INCREMENT,
  `entrainement_maison` int(11) DEFAULT NULL,
  `num_client` int(11) DEFAULT NULL,
  `pref` int(11) NOT NULL,
  PRIMARY KEY (`id_preference`),
  KEY `entrainement_maison` (`entrainement_maison`),
  KEY `num_client` (`num_client`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `preference`
--

INSERT INTO `preference` (`id_preference`, `entrainement_maison`, `num_client`, `pref`) VALUES
(20, 1, 2, 2),
(21, 2, 2, 2),
(22, 4, 2, 1),
(23, 5, 2, 1),
(24, 6, 2, 3),
(25, 3, 2, 0),
(26, 7, 2, 0),
(34, 1, 35, 6),
(35, 2, 35, 2),
(36, 3, 35, 2),
(37, 4, 35, 1),
(38, 5, 35, 1),
(39, 6, 35, 1),
(40, 7, 35, 17);

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
  `evolution` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Adherent_num_client`),
  KEY `fk_Progres_Adhérent1_idx` (`Adherent_num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `progres`
--

INSERT INTO `progres` (`Adherent_num_client`, `taille`, `poid`, `objectif`, `evolution`) VALUES
(1, '180', '78', 'maigrir', NULL),
(2, '176', '80', 'maigrir', 'negative'),
(28, '170', '69', 'prendre_du_poids', NULL),
(29, '163', '60', 'prendre_du_poids', NULL),
(31, '170', '60', NULL, NULL),
(32, '193', '80', NULL, NULL),
(33, '193', '70', NULL, NULL),
(35, '180', '73', NULL, NULL),
(36, '178', '82', NULL, NULL);

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
-- Contraintes pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD CONSTRAINT `horaire_ibfk_1` FOREIGN KEY (`num_client`) REFERENCES `adherent` (`num_client`);

--
-- Contraintes pour la table `horaire_coach`
--
ALTER TABLE `horaire_coach`
  ADD CONSTRAINT `horaire_coach_ibfk_1` FOREIGN KEY (`coach`) REFERENCES `coach` (`num_coach`),
  ADD CONSTRAINT `horaire_coach_ibfk_2` FOREIGN KEY (`num_client`) REFERENCES `adherent` (`num_client`);

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `fk_Inscrire_Adhérent1` FOREIGN KEY (`Adherent_num_client`) REFERENCES `adherent` (`num_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inscrire_Type_abonnement1` FOREIGN KEY (`Type_abonnement_code_abonnement`) REFERENCES `type_abonnement` (`code_abonnement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `messagerie_coach`
--
ALTER TABLE `messagerie_coach`
  ADD CONSTRAINT `messagerie_coach_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `coach` (`num_coach`),
  ADD CONSTRAINT `messagerie_coach_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `coach` (`num_coach`);

--
-- Contraintes pour la table `messagerie_coach_adherent`
--
ALTER TABLE `messagerie_coach_adherent`
  ADD CONSTRAINT `messagerie_coach_adherent_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `adherent` (`num_client`),
  ADD CONSTRAINT `messagerie_coach_adherent_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `adherent` (`num_client`);

--
-- Contraintes pour la table `message_groupe`
--
ALTER TABLE `message_groupe`
  ADD CONSTRAINT `message_groupe_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `adherent` (`num_client`),
  ADD CONSTRAINT `message_groupe_ibfk_2` FOREIGN KEY (`coach`) REFERENCES `coach` (`num_coach`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`adherent_num_client`) REFERENCES `adherent` (`num_client`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`coach_num_coach`) REFERENCES `coach` (`num_coach`);

--
-- Contraintes pour la table `preference`
--
ALTER TABLE `preference`
  ADD CONSTRAINT `preference_ibfk_1` FOREIGN KEY (`entrainement_maison`) REFERENCES `entrainement_maison` (`id_entrainement`),
  ADD CONSTRAINT `preference_ibfk_2` FOREIGN KEY (`num_client`) REFERENCES `adherent` (`num_client`);

--
-- Contraintes pour la table `progres`
--
ALTER TABLE `progres`
  ADD CONSTRAINT `fk_Progres_Adhérent1` FOREIGN KEY (`Adherent_num_client`) REFERENCES `adherent` (`num_client`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
