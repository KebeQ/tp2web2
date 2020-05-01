-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 avr. 2020 à 17:45
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp2_lucaslm_hubertd`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `province` varchar(40) NOT NULL,
  `codePostal` char(7) NOT NULL,
  `login` varchar(20) NOT NULL,
  `motPasse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `statut` varchar(50) NOT NULL,
  `typePaiement` varchar(50) NOT NULL,
  `noClient` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `client_commande_ind` (`noClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `items_commande`
--

DROP TABLE IF EXISTS `items_commande`;
CREATE TABLE IF NOT EXISTS `items_commande` (
  `noCommande` int(11) NOT NULL,
  `noProduit` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`noCommande`,`noProduit`),
  KEY `items_commande_ind` (`noCommande`),
  KEY `items_produit_ind` (`noProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `prix` decimal(7,2) NOT NULL,
  `qte` int(11) NOT NULL,
  `dateParution` date NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`no`, `nom`, `description`, `prix`, `qte`, `dateParution`, `image`) VALUES
(1, 'Garfield Kart : Furious Racing', 'Garfield, the famous lasagna-loving cat is back to take on Jon, Odie and company in a no-holds-barred racing game!', '39.99', 6, '2019-11-07', ''),
(2, 'Mordhau', 'MORDHAU est un slasher multijoueur à la première et troisième personne basée au Moyen-age.', '39.99', 5, '2019-04-29', ''),
(3, 'Call of Duty 4: Modern Warfare', 'Call of Duty 4: Modern Warfare est un jeu vidéo de tir à la première personne développé par Infinity Ward et édité par Activision sur Windows, Mac OS, PlayStation 3, Xbox 360, ainsi qu\'une version pour console portable Nintendo DS en novembre 2007. Il est porté sur Wii par Treyarch en novembre 2009, sous-titré Édition Réflexes.', '21.99', 7, '2007-10-06', ''),
(4, 'Halo: Reach', 'Halo: Reach est un jeu vidéo de tir à la première personne (FPS) développé par Bungie et édité par Microsoft. Officiellement dévoilé lors de la conférence Microsoft de l\'E3 2009, le jeu est sorti en septembre 2010 au niveau mondial exclusivement sur Xbox 360.', '10.99', 9, '2010-08-14', ''),
(5, 'Red Dead Redemption 2', 'Amérique, 1899. L\'ère de l\'ouest sauvage touche à sa fin.', '79.99', 10, '2019-12-05', ''),
(6, 'Minecraft', 'Minecraft est un jeu vidéo de type « bac à sable » (construction complètement libre) développé par le Suédois Markus Persson, alias Notch, puis par le studio de développement Mojang. Il s\'agit d\'un univers composé de voxels et généré aléatoirement, qui intègre un système d\'artisanat axé sur l\'exploitation puis la transformation de ressources naturelles (minéralogiques, fossiles, animales et végétales).', '29.99', 8, '2011-10-18', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`noClient`) REFERENCES `clients` (`no`);

--
-- Contraintes pour la table `items_commande`
--
ALTER TABLE `items_commande`
  ADD CONSTRAINT `items_commande_ibfk_1` FOREIGN KEY (`noCommande`) REFERENCES `commandes` (`no`),
  ADD CONSTRAINT `items_commande_ibfk_2` FOREIGN KEY (`noProduit`) REFERENCES `produits` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
