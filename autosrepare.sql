-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 13 août 2020 à 11:24
-- Version du serveur :  8.0.18
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
-- Base de données :  `autosrepare`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `pseudo`, `mdp`) VALUES
(1, 'arca', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `text_promo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_promo`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promotions`
--

INSERT INTO `promotions` (`id_promo`, `text_promo`) VALUES
(1, 'Promotion sur nos liquide lave glace été à seulement 4,50€'),
(16, ',jieJFIJIZRJGIOGGJIJHGRhgrhg'),
(2, 'Porte ouverte le 15 Aout 2020, venez voir nos nombreux véhicule');

-- --------------------------------------------------------

--
-- Structure de la table `promo_vente`
--

DROP TABLE IF EXISTS `promo_vente`;
CREATE TABLE IF NOT EXISTS `promo_vente` (
  `id_promoVente` int(11) NOT NULL AUTO_INCREMENT,
  `texte_promoVente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_promoVente` varchar(500) NOT NULL,
  PRIMARY KEY (`id_promoVente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promo_vente`
--

INSERT INTO `promo_vente` (`id_promoVente`, `texte_promoVente`, `image_promoVente`) VALUES
(1, 'Promotion sur nos divers produit d\'injection, profitez-en dès maintenant', 'produit3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id_voiture` int(11) NOT NULL AUTO_INCREMENT,
  `nom_voiture` varchar(255) NOT NULL,
  `caracteristique_voiture` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descriptif_voiture` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix_voiture` decimal(10,2) NOT NULL,
  `image_voiture` varchar(500) NOT NULL,
  PRIMARY KEY (`id_voiture`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_voiture`, `nom_voiture`, `caracteristique_voiture`, `descriptif_voiture`, `prix_voiture`, `image_voiture`) VALUES
(1, 'peugeot2', 'grsgrgqgtqtdqhhsrqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdg', 'rqgregreqgergqegqgqgdgqdgdgdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdg', '45.00', 'tdsgtrgg.jpg'),
(2, 'test', 'qgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdg', 'qgdgeqgreqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdg', '52.00', 'rdqgrqgeqrg.jpg'),
(5, 'fcgvhj', 'cgvj', 'cgvjh', '125.00', ''),
(6, 'duguet', 'qsd', 'qsd', '56.00', 'warframe-coeur-de-deimos-vignette-breakflip.png');

-- --------------------------------------------------------

--
-- Structure de la table `vente_produit`
--

DROP TABLE IF EXISTS `vente_produit`;
CREATE TABLE IF NOT EXISTS `vente_produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `titre_produit` varchar(255) NOT NULL,
  `texte_produit` varchar(255) NOT NULL,
  `prix_produit` decimal(5,2) NOT NULL,
  `image_produit` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vente_produit`
--

INSERT INTO `vente_produit` (`id_produit`, `titre_produit`, `texte_produit`, `prix_produit`, `image_produit`) VALUES
(4, 'Essuie glace', 'Essuie glace toute marques confondue', '35.00', 'produit1.jpg'),
(5, 'Lave-glace été', 'Lave-Glace été 5l, Laissez-vous tenter test', '4.50', 'produit2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
