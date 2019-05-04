-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 04 mai 2019 à 17:00
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `id_utilisateur` int(11) NOT NULL,
  `id_paiement` int(11) DEFAULT NULL,
  `id_livraison` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_livraison` (`id_livraison`),
  KEY `id_paiement` (`id_paiement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_utilisateur`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`, `image`, `description`) VALUES
(1, 'Livres', '/img/categorie/livres.jpg', 'Achète des supers livres !'),
(2, 'Musique', '/img/categorie/musique.jpg', 'Le poussin piou'),
(3, 'Vêtements', '/img/categorie/vetements.jpg', 'Thrift shopping'),
(4, 'Sports et Loisir', '/img/categorie/sports.jpg', 'spo-quoi ?');

-- --------------------------------------------------------

--
-- Structure de la table `code_promo`
--

DROP TABLE IF EXISTS `code_promo`;
CREATE TABLE IF NOT EXISTS `code_promo` (
  `id_code_promo` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL,
  `promo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_code_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `flash`
--

DROP TABLE IF EXISTS `flash`;
CREATE TABLE IF NOT EXISTS `flash` (
  `id_item` int(11) NOT NULL,
  `promo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `img_fond`
--

DROP TABLE IF EXISTS `img_fond`;
CREATE TABLE IF NOT EXISTS `img_fond` (
  `id_img_fond` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_img_fond`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `photos` varchar(50) DEFAULT NULL,
  `description` text,
  `video` varchar(50) DEFAULT NULL,
  `pu` int(11) DEFAULT '0',
  `variations` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `id_categorie` int(11) DEFAULT NULL,
  `id_vendeur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_categorie` (`id_categorie`),
  KEY `id_vendeur` (`id_vendeur`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `nom`, `photos`, `description`, `video`, `pu`, `variations`, `stock`, `id_categorie`, `id_vendeur`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Martine et son pote unijambiste', '/img/categorie/livres/1.jpg', 'Super livre, je recommande', NULL, 3, NULL, 1, 1, 2),
(3, 'Martine deale du Maroilles', '/img/categorie/livres/2.jpg', 'Pour les fans de gastronomie française.', NULL, 5, NULL, 3, 1, 2),
(4, 'Martine a loupé la pride', '/img/categorie/livres/3.jpg', 'Quelle tristesse :\'(', NULL, 1, NULL, 0, 1, 2),
(5, 'Martine au mariage de Carla Bruni', '/img/categorie/livres/4.jpg', 'C\'est petit', NULL, 0, NULL, 0, 1, 2),
(6, 'Martine travaille plus pour gagner plus', '/img/categorie/livres/5.jpg', 'A tomber de rire !', NULL, 10, NULL, 3, 1, 2),
(7, 'Martine aime le Beaujolais', '/img/categorie/livres/6.jpg', 'Quelle bonne vivante cette martine', NULL, 0, NULL, 4, 1, 2),
(8, 'Martine va conclure avec Jean-Claude Dus', '/img/categorie/livres/7.jpg', 'Quand te reverais-jeeeuh payys merveilleuuuuux', NULL, 5, NULL, 1, 1, 2),
(9, 'Martine et la réforme des rythmes scolaires', '/img/categorie/livres/8.jpg', 'Roule Martine, roule !', NULL, 2, NULL, 3, 1, 2),
(10, 'Martine a loupé son test ADN', '/img/categorie/livres/9.jpg', 'Dure réalité pour titine', NULL, 5, NULL, 2, 1, 2),
(11, 'Martine et le gogo danceur surprise', '/img/categorie/livres/10.jpg', 'La chanceuse', NULL, 4, NULL, 3, 1, 2),
(13, 'Martine chef de gang', '/img/categorie/livres/11.jpg', 'Ca tourne mal', NULL, 1, NULL, 3, 1, 2),
(14, 'Martine a un sixième sens', '/img/categorie/livres/12.jpg', 'Elle voit des gens, qui sont mooooorts :o :o :o', NULL, 3, NULL, 3, 1, 2),
(15, 'L\'internationale - Eugène Pottier', '/img/categorie/musique/1.jpg', 'L\'internationale, sera le genre humain', 'https://www.youtube.com/watch?v=kEZhCB8KdWw', 2, NULL, 0, 2, 2),
(16, 'Roi - Bilal Hassani', '/img/categorie/musique/2.jpg', 'Destination eurovision <3', 'https://www.youtube.com/watch?v=Z4X4ygjcUd4', 0, NULL, 0, 2, 2),
(17, 'Vogue - Madonna', '/img/categorie/musique/3.jpg', 'Come on, vooogue', 'https://www.youtube.com/watch?v=GuJQSAiODqI', 0, NULL, 0, 2, 2),
(18, 'Thank U, Next', '/img/categorie/musique/4.jpg', 'Next.', 'https://www.youtube.com/watch?v=gl1aHhXnN1k', 0, NULL, 0, 2, 2),
(19, 'Sissy that walk - Ru Paul', '/img/categorie/musique/5.jpg', 'Fly, fly, fly, fly Uh ooooh, uh uh-ooooh', 'https://www.youtube.com/watch?v=M4d20Tyzlv0', 0, NULL, 0, 2, 2),
(20, 'Brazil - Declan McKenna', '/img/categorie/musique/6.jpg', 'I\'M IN BRAZIL', 'https://www.youtube.com/watch?v=QHgh77iE6qc', 0, NULL, 0, 2, 2),
(21, 'Grave - Eddy de Pretto', '/img/categorie/musique/7.jpg', 'Ce n\'est vraiment pas grave', 'https://www.youtube.com/watch?v=kX30U0FmTuo', 0, NULL, 0, 2, 2),
(22, 'Born this way - Lady Gaga', '/img/categorie/musique/8.jpg', 'I\'M BEAUTIFUL IN MY WAY \'CAUSE GOD MAKES NO MISTAKES', 'https://www.youtube.com/watch?v=wV1FrqwZyKw', 0, NULL, 0, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse_1` varchar(50) DEFAULT NULL,
  `adresse_2` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `cp` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `id_acheteur` int(50) DEFAULT NULL,
  PRIMARY KEY (`id_livraison`),
  KEY `id_acheteur` (`id_acheteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_cb` int(11) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `cle` varchar(3) DEFAULT NULL,
  `id_acheteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_paiement`),
  KEY `id_acheteur` (`id_acheteur`),
  KEY `id_type_cb` (`id_type_cb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id_item` int(11) NOT NULL,
  `promo` varchar(50) DEFAULT NULL,
  `id_type_promo` int(11) NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_type_promo` (`id_type_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`id_item`, `promo`, `id_type_promo`) VALUES
(1, '30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_cb`
--

DROP TABLE IF EXISTS `type_cb`;
CREATE TABLE IF NOT EXISTS `type_cb` (
  `id_type_cb` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_type_cb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_promo`
--

DROP TABLE IF EXISTS `type_promo`;
CREATE TABLE IF NOT EXISTS `type_promo` (
  `id_type_promo` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`id_type_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_promo`
--

INSERT INTO `type_promo` (`id_type_promo`, `nom`, `date_debut`, `date_fin`) VALUES
(1, 'Noel', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prénom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prénom`, `mail`, `mdp`) VALUES
(1, 'Farault', 'Paul', 'paul.farault@gmail.com', 'coucou'),
(2, 'Bourgeois', 'Valentin', 'vb@gmail.com', 'haha');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `id_img_fond` int(11) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_img_fond` (`id_img_fond`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id_utilisateur`, `pseudo`, `id_img_fond`, `photo`) VALUES
(2, 'val', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `id_vente` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) DEFAULT NULL,
  `id_acheteur` int(11) DEFAULT NULL,
  `id_livraison` int(11) DEFAULT NULL,
  `id_paiement` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT '1',
  `date_paiement` date DEFAULT NULL,
  `date_expedition` date DEFAULT NULL,
  PRIMARY KEY (`id_vente`),
  KEY `id_acheteur` (`id_acheteur`),
  KEY `id_item` (`id_item`),
  KEY `id_livraison` (`id_livraison`),
  KEY `id_paiement` (`id_paiement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acheteur`
--
ALTER TABLE `acheteur`
  ADD CONSTRAINT `acheteur_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `acheteur_ibfk_2` FOREIGN KEY (`id_livraison`) REFERENCES `livraison` (`id_livraison`),
  ADD CONSTRAINT `acheteur_ibfk_3` FOREIGN KEY (`id_paiement`) REFERENCES `paiement` (`id_paiement`);

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `flash`
--
ALTER TABLE `flash`
  ADD CONSTRAINT `flash_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`);

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`id_vendeur`) REFERENCES `vendeur` (`id_utilisateur`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livraison_ibfk_1` FOREIGN KEY (`id_acheteur`) REFERENCES `acheteur` (`id_utilisateur`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id_acheteur`) REFERENCES `acheteur` (`id_utilisateur`),
  ADD CONSTRAINT `paiement_ibfk_2` FOREIGN KEY (`id_type_cb`) REFERENCES `type_cb` (`id_type_cb`);

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`id_type_promo`) REFERENCES `type_promo` (`id_type_promo`),
  ADD CONSTRAINT `promo_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`);

--
-- Contraintes pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD CONSTRAINT `vendeur_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `vendeur_ibfk_2` FOREIGN KEY (`id_img_fond`) REFERENCES `img_fond` (`id_img_fond`);

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`id_acheteur`) REFERENCES `acheteur` (`id_utilisateur`),
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`),
  ADD CONSTRAINT `vente_ibfk_3` FOREIGN KEY (`id_livraison`) REFERENCES `livraison` (`id_livraison`),
  ADD CONSTRAINT `vente_ibfk_4` FOREIGN KEY (`id_paiement`) REFERENCES `paiement` (`id_paiement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
