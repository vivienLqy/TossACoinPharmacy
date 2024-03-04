-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 fév. 2024 à 10:54
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clamerde`
--

-- --------------------------------------------------------

--
-- Structure de la table `categori_name`
--

DROP TABLE IF EXISTS `categori_name`;
CREATE TABLE IF NOT EXISTS `categori_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categori_name`
--

INSERT INTO `categori_name` (`id`, `name`) VALUES
(1, 'Relique'),
(2, 'Objet rare');

-- --------------------------------------------------------

--
-- Structure de la table `doctor_name`
--

DROP TABLE IF EXISTS `doctor_name`;
CREATE TABLE IF NOT EXISTS `doctor_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `doctor_name`
--

INSERT INTO `doctor_name` (`id`, `name`) VALUES
(1, 'Geralt De Rive'),
(2, 'Ciri Fiona Elen Riannon'),
(3, 'Triss Merigold'),
(4, 'Yennefer de Vengerberg');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`) VALUES
(1, 'Eau-de-vie naine'),
(2, 'Fruit de berbéris'),
(3, 'Essence d\'eau'),
(4, 'Nerprun'),
(5, 'Mutagène d\'algoule'),
(6, 'Moelle d\'algoule'),
(7, 'Pétales de myrte blanc'),
(8, 'Cœur de golem'),
(9, 'Vigne curative'),
(10, 'Fruit de balisse'),
(11, 'Mutagène d\'élémentaire de terre'),
(12, 'Longrube'),
(13, 'Fibre d\'han'),
(14, 'Mutagène de doppler'),
(15, 'Chélidoine'),
(16, 'Cerveau de noyeur'),
(17, 'Pissenlit'),
(18, 'Essence lumineuse'),
(19, 'Chèvrefeuille'),
(20, 'Embryon d\'endriague'),
(21, 'Cortinaire'),
(22, 'Vitriocybe'),
(23, 'Sang de goule'),
(24, 'Aconit'),
(25, 'Essence noire');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_potion`
--

DROP TABLE IF EXISTS `ingredient_potion`;
CREATE TABLE IF NOT EXISTS `ingredient_potion` (
  `potionID` int NOT NULL,
  `ingredientID` int NOT NULL,
  KEY `potionID` (`potionID`),
  KEY `ingredientID` (`ingredientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ingredient_potion`
--

INSERT INTO `ingredient_potion` (`potionID`, `ingredientID`) VALUES
(1, 2),
(1, 1),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 9),
(3, 10),
(3, 11),
(4, 12),
(4, 13),
(4, 14),
(5, 1),
(5, 15),
(5, 16),
(6, 1),
(6, 17),
(6, 18),
(7, 1),
(7, 19),
(8, 1),
(8, 20),
(8, 21),
(9, 1),
(9, 7),
(9, 8),
(10, 1),
(10, 22),
(10, 23),
(11, 1),
(11, 19),
(11, 4),
(12, 1),
(12, 16),
(12, 3),
(13, 1),
(13, 5),
(13, 12),
(14, 1),
(14, 24),
(14, 25);

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pathImg` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `potionId` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `potionId` (`potionId`),
  KEY `potionId_2` (`potionId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `pathImg`, `potionId`) VALUES
(1, '/assets/img/medicament/Chat.jpg', 1),
(2, '/assets/img/medicament/Décoction-d\'algoule.jpg', 2),
(3, '/assets/img/medicament/Décoction-d\'élémentaire.jpg', 3),
(4, '/assets/img/medicament/Décoction-de-Doppler.jpg', 4),
(5, '/assets/img/medicament/Hirondelle.jpg', 5),
(6, '/assets/img/medicament/Loriot-doré.jpg', 6),
(7, '/assets/img/medicament/miel-blanc.jpg', 7),
(8, '/assets/img/medicament/tonnerre.jpg', 8),
(9, '/assets/img/medicament/Blizzard.jpg', 9),
(10, '/assets/img/medicament/sang-noir.jpg', 10),
(11, '/assets/img/medicament/Philtre-de-petri.jpg', 11),
(12, '/assets/img/medicament/Orque.jpg', 12),
(13, '/assets/img/medicament/Forêt-de-Maribor.jpg', 13),
(14, '/assets/img/medicament/Pleine-lune.jpg', 14);

-- --------------------------------------------------------

--
-- Structure de la table `potion`
--

DROP TABLE IF EXISTS `potion`;
CREATE TABLE IF NOT EXISTS `potion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rating` float NOT NULL,
  `duration` int NOT NULL,
  `toxic` int NOT NULL,
  `utilisation` int NOT NULL,
  `price` int NOT NULL,
  `categoriID` int NOT NULL,
  `doctorID` int NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoriID` (`categoriID`,`doctorID`),
  KEY `doctorID` (`doctorID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `potion`
--

INSERT INTO `potion` (`id`, `title`, `rating`, `duration`, `toxic`, `utilisation`, `price`, `categoriID`, `doctorID`, `comment`) VALUES
(1, 'Cat', 9.5, 60, 15, 3, 120, 2, 1, 'Permet de voir dans le noir le plus total.'),
(2, 'Décoction d\'Algoule', 8.7, 1800, 70, 1, 156, 1, 2, 'Augmente le gain de points d\'adrénaline jusqu\'à la première attaque réussie de l\'adversaire.'),
(3, 'Décoction d\'Élémentaire', 8.9, 1800, 70, 1, 178, 1, 3, 'Augmente l\'intensité des signes.'),
(4, 'Décoction de Doppler', 9.8, 1800, 70, 1, 1366, 1, 1, 'Augmente la résistance du sorceleur aux effets critiques réduisant la vitalité pendant le combat. Le niveau de résistance augmente avec la durée d\'application de l\'effet critique.'),
(5, 'Hirondelle', 7.5, 20, 20, 3, 189, 2, 3, 'Accélère le regain de vitalité. Le regain de vitalité s\'interrompt pendant 2 secondes si vous subissez des dégâts.'),
(6, 'Loriot doré', 8.3, 60, 20, 3, 1400, 2, 2, 'Immunise contre les poisons et neutralise leurs effets.'),
(7, 'Miel blanc', 9, 0, 0, 3, 160, 2, 1, 'Réduit l\'intoxication à zéro et annule les effets des autres potions.'),
(8, 'Tonnerre', 7.8, 30, 25, 3, 1866, 2, 4, 'Augmente la puissance d\'attaque.'),
(9, 'Blizzard', 9.2, 15, 25, 2, 100, 2, 4, 'Lorsque vous terrasser un ennemi le temps ralenti'),
(10, 'Sang noir', 8.6, 30, 15, 3, 100, 2, 3, 'Le sang du sorceleur inflige des dégâts aux vampires et nécrophages qui le blessent.'),
(11, 'Philtre de Petri', 9.3, 30, 25, 3, 180, 2, 2, 'Augmente les dégâts critiques infligés par les attaques dans le dos'),
(12, 'Orque', 8.1, 180, 20, 3, 365, 1, 1, 'Augmente le gain de points d\'adrénaline.'),
(13, 'Forêt de Maribor', 9.7, 30, 20, 3, 854, 2, 3, 'Augmente le gain de points d\'adrénaline. Permet de retenir son souffle 50% plus longtemps sous l\'eau et améliore la vision pendant la plongée.'),
(14, 'Pleine lune', 8.9, 30, 25, 3, 1740, 2, 4, 'Augmente la vitalité maximum.');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ingredient_potion`
--
ALTER TABLE `ingredient_potion`
  ADD CONSTRAINT `ingredient_potion_ibfk_1` FOREIGN KEY (`potionID`) REFERENCES `potion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingredient_potion_ibfk_2` FOREIGN KEY (`ingredientID`) REFERENCES `ingredient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`potionId`) REFERENCES `potion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `potion`
--
ALTER TABLE `potion`
  ADD CONSTRAINT `potion_ibfk_1` FOREIGN KEY (`categoriID`) REFERENCES `categori_name` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `potion_ibfk_2` FOREIGN KEY (`doctorID`) REFERENCES `doctor_name` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
