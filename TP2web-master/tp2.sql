SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tp2`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `statut` varchar(50) NOT NULL,
  `typePaiement` varchar(50) NOT NULL,
  `noClient` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  INDEX client_commande_ind (noClient),
  FOREIGN KEY (noClient) REFERENCES clients(no)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `prix` decimal(7,2) NOT NULL,
  `qte` int(11) NOT NULL,
  `dateParution` date NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `items_commande`
--

CREATE TABLE IF NOT EXISTS `items_commande` (
  `noCommande` int(11) NOT NULL,
  `noProduit` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`noCommande`,`noProduit`),
  INDEX items_commande_ind (noCommande),
  FOREIGN KEY (noCommande) REFERENCES commandes(no),
  INDEX items_produit_ind (noProduit),
  FOREIGN KEY (noProduit) REFERENCES produits(no)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
