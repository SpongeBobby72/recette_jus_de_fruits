-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 13 avr. 2021 à 15:09
-- Version du serveur :  10.3.25-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Juice-recipe`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'fruit'),
(2, 'legume'),
(3, 'epice');

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `nom`, `image`, `categorie_id`) VALUES
(1, 'abricots', 'abricots.png', 1),
(2, 'ananas', 'ananas.png', 1),
(3, 'canelle', 'canelle.png', 3),
(4, 'carottes', 'carottes.png', 2),
(7, 'cerise', 'cerise.png', 1),
(8, 'citron', 'citron.png', 1),
(9, 'citrons verts', 'citrons-verts.png', 1),
(10, 'concombre', 'concombre.png', 2),
(11, 'fraise', 'fraise.png', 1),
(12, 'fraises', 'fraises.png', 1),
(13, 'gingembre', 'gingembre.png', 3),
(14, 'kiwis', 'kiwis.png', 1),
(15, 'oranges', 'oranges.png', 1),
(16, 'pamplemousse', 'pamplemousse.png', 1),
(17, 'peches', 'peches.png', 1),
(18, 'pomme', 'pomme.png', 1),
(19, 'pommes', 'pommes.png', 1),
(20, 'tomate', 'tomate.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `droit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `identifiant`, `password`, `droit_id`) VALUES
(1, 'user', '12DEA96FEC20593566AB75692C9949596833ADC9', 1),
(2, 'admin', 'D033E22AE348AEB5660FC2140AEC35850C4DA997', 2);

-- --------------------------------------------------------

--
-- Structure de la table `nomRecette`
--

CREATE TABLE `nomRecette` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nomRecette`
--

INSERT INTO `nomRecette` (`id`, `nom`, `img`) VALUES
(6, 'Jus 1', 'jus-1.png'),
(7, 'Jus 2', 'jus-2.png'),
(8, 'Recette 8', 'jus-3.png'),
(9, 'Recette 2', 'jus-4.png'),
(10, 'Recette 3', 'jus-1.png'),
(12, 'Marga', '1618318279_286_margaritafrozen.jpg'),
(13, 'Bibim', '1618319314_jus-2.png');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `recette_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `portion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`recette_id`, `ingredient_id`, `portion`) VALUES
(6, 11, 3),
(6, 17, 1),
(6, 8, 2),
(7, 1, 2),
(7, 16, 2),
(7, 20, 1),
(9, 17, 3),
(9, 16, 1),
(10, 17, 1),
(10, 8, 1),
(10, 2, 1),
(10, 14, 1),
(8, 4, 3),
(11, 1, 2),
(11, 2, 1),
(11, 3, 2),
(12, 1, 2),
(12, 2, 2),
(12, 7, 1),
(13, 19, 2),
(13, 20, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nomRecette`
--
ALTER TABLE `nomRecette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `nomRecette`
--
ALTER TABLE `nomRecette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
