-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 05 oct. 2020 à 08:25
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
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `pseudo`, `mdp`, `statut`) VALUES
(3, 'arca', 'test', 0),
(4, 'ggg', 'hhhhh', 1),
(5, 'Mathieu', 'Arcadia@SSX999', 0);

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `text_promo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promotions`
--

INSERT INTO `promotions` (`id_promo`, `text_promo`) VALUES
(17, 'Promotion sur nos liquide lave glace été à seulement 4,50€\r\n'),
(18, ',jieJFIJIZRJGIOGGJIJHGRhgrhg'),
(19, 'Porte ouverte le 15 Aout 2020, venez voir nos nombreux véhicule');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promo_vente`
--

INSERT INTO `promo_vente` (`id_promoVente`, `texte_promoVente`, `image_promoVente`) VALUES
(2, 'Promotion sur nos divers produit d\'injection, profitez-en dès maintenant      ', 'produit3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_services` int(11) NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(255) NOT NULL,
  `texte1_service` varchar(255) NOT NULL,
  `texte2_service` varchar(255) NOT NULL,
  `image_service` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_services`, `nom_service`, `texte1_service`, `texte2_service`, `image_service`) VALUES
(1, 'Travaux carrosserie', 'rkgkrqogjqreoigj r qoegjerqg jrieqj greq req gùjreqùgj erùq rq ùgjrieq gjiqeù rqi gjriq jgirqù gjrieq ùjgriq r jgriq jemrio 258855          58558585858', 'rjqo gjrioeqj gierjgiemq gierqgr ipqjgirqe gjire mhgrqm igrheq gheqh geqhg reqrieqjhgeiqmgeqgherqm ei hgmqe hieqm ', 'produit3.jpg'),
(2, 'vidange', 'sggsge \'gq egqgeqgeag gergegrqgqrgdg gqgdfqgdgq rgqegqgerg reqggfdg qgqdg gqgerqgeqgd gq gq ', 'sggsge \'gq egqgeqgeag gergegrqgqrgdg gqgdfqgdgq rgqegqgerg reqggfdg qgqdg gqgerqgeqgd gq gq', 'garage2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `statut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vehicule_id_voiture` int(11) NOT NULL,
  PRIMARY KEY (`id_statut`,`vehicule_id_voiture`),
  KEY `fk_statut_vehicule_idx` (`vehicule_id_voiture`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_compte`
--

DROP TABLE IF EXISTS `type_compte`;
CREATE TABLE IF NOT EXISTS `type_compte` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `nom_compte` varchar(45) DEFAULT NULL,
  `administrateur_id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_compte`,`administrateur_id_admin`),
  KEY `fk_type_compte_administrateur1_idx` (`administrateur_id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`id_voiture`),
  KEY `statut` (`statut`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_voiture`, `nom_voiture`, `caracteristique_voiture`, `descriptif_voiture`, `prix_voiture`, `image_voiture`, `statut`) VALUES
(10, 'test', 'qgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdg  55555252', 'qgdgeqgreqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdgqgdgqdgdg', '150.00', 'rdqgrqgeqrg.jpg', 0),
(11, 'fcgvhj', 'cgvjgggggggggggggggggggggggggggggggggg', 'cgvjhgggggggggggggggggggggggggggggggggggggggggggggggggggg', '125.00', '', 0),
(12, 'duguet', 'bonjour coucou bonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucou coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucou', 'bonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucoubonjour coucoubonjour coucoubonjour coucoubonjour coucoucoucou', '56.00', 'warframe-coeur-de-deimos-vignette-breakflip.png', 0),
(13, 'Audi', 'Audi TT 3500 ch bonne conduit ggGZRG GGGRGEQG QRGQEGRQG GGQG\r\nQGERG\r\ngsrtdshrhsthrhsrhrsh\r\nhrsrhshgdhdghrshfdshsh\r\nshtsrhrtshrhsrnrhs 3500hs hhsr\r\nhrhrshhr', 'frhgtshrthrsh gqhhtrzhthh zhrhrhhzh\' ( h\'(z h(\'zhrshrthhzzh\r\nhzrtthhhhhhhhhhhhhhhhhhsrhthrhthrthrshtrhhrjrtsr\r\nhrtrhtrshtshrhrhtshrth thshtrshsrthsrh trhs rthrshtshtrsh tshtshshrt GQRSRQGQRGEG gdgdrg rdgdqrgrdgrgq qggqrdrdgrg rdgrgrqgrdqgrhdrhd rdgdrgqgqdrg dqrggdqrgdrqgrdg rdqgdqgdrgqhtd dqgdgqrdgqdgqrgrd qrdgdrqgqdrg.\r\nhrtrhtrshtshrhrhtshrth thshtrshsrthsrh trhs rthrshtshtrsh tshtshshrt', '5800.00', 'voiture.jpg', 0),
(14, 'lanbo', 'fesFEZFZfeFZGERQGFDGDG\r\nQGDFQGDFGFDHDFHQDFHHFDQHQGGRQGERGE\r\nEQGDQBFDQGFDQGFDHDFQDFQREQ\r\nGQDGEQRG\r\nQRGQDGDSGRGEQGQ', 'RGQEGSRGRQGF QGFDQBDFGQREQGREGQGQ GRQGFQGQRGGFDQG DFGFQGER GRQGFQD GQDGQ\r\nQGRQEGRE QGERGFDQGQGRE GERQ GREQGF DGD FGQ\r\nQGRQGQHB DHDFREG REGRQDGDQER BER GREQGREQH REQBQEGERREQBREB QEBERBERB', '15000.00', 'la-owl-d-aspark-voiture-electrique-plus-rapide.jpg', 0),
(17, 'Audi', 'test', 'test', '2500.00', 'la-owl-d-aspark-voiture-electrique-plus-rapide.jpg', 0),
(19, 'Audi', 'sfsrgrdg ', 'rgw g bonjour', '3500.00', 'la-owl-d-aspark-voiture-electrique-plus-rapide.jpg', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vente_produit`
--

INSERT INTO `vente_produit` (`id_produit`, `titre_produit`, `texte_produit`, `prix_produit`, `image_produit`) VALUES
(6, 'Essuie glace', 'Essuie glace toute marques confondue', '852.00', 'produit1.jpg'),
(7, 'Lave-glace été', 'Lave-Glace été 5l, Laissez-vous tenter test', '4.50', 'produit2.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `statut`
--
ALTER TABLE `statut`
  ADD CONSTRAINT `fk_statut_vehicule` FOREIGN KEY (`vehicule_id_voiture`) REFERENCES `vehicule` (`id_voiture`);

--
-- Contraintes pour la table `type_compte`
--
ALTER TABLE `type_compte`
  ADD CONSTRAINT `fk_type_compte_administrateur1` FOREIGN KEY (`administrateur_id_admin`) REFERENCES `administrateur` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
