-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 juin 2024 à 15:52
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(50) NOT NULL,
  `cin` varchar(50) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `cin`, `nom`, `prenom`, `email`, `password`) VALUES
(3, 'bh22', 'ABDO', 'ff', 'abdlatifelhamaoui@gmail.com', '33'),
(5, 'BH649401', 'nazha', 'FARADI', 'abdlatifelhamaoui@gmail.com', '12345'),
(10, 'BH525', 'el madani', 'saad', 'saidelmadani@gmain.com', '12122'),
(13, 'BK99', 'NADOUR', 'MANAL', 'abdlatifelhamaoui@gmail.com', 'EDZZA'),
(14, 'KL99', 'MOHAMED', 'fekkarRRR', 'abdlatifelhamaoui@gmail.com', '4524'),
(15, 'BNL77', 'KENZA', 'MARFOR', 'abdlatifelhamaoui@gmail.com', '46643');

-- --------------------------------------------------------

--
-- Structure de la table `travel`
--

CREATE TABLE `travel` (
  `idtrajet` int(50) NOT NULL,
  `nomtrajet` varchar(50) NOT NULL,
  `pointdepart` varchar(50) NOT NULL,
  `pointarrive` varchar(50) NOT NULL,
  `prix` int(50) NOT NULL,
  `disponible` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `travel`
--

INSERT INTO `travel` (`idtrajet`, `nomtrajet`, `pointdepart`, `pointarrive`, `prix`, `disponible`) VALUES
(1, 'voyage1', 'marakech', 'tanger', 200, 'yes'),
(2, 'voyage1', 'marakech', 'tanger', 200, 'yes'),
(3, 'voyage1', 'marakech', 'tanger', 200, 'yes'),
(4, 'voyage1', 'marakech', 'tanger', 200, 'yes'),
(5, 'voyage2', 'taza', 'casablanca', 100, 'no'),
(7, 'voyage4', 'FRANCE', 'SPAIN', 63536, 'yes'),
(8, 'voyage5', 'agadir', 'sebatta', 111, 'no'),
(10, 'voyage7', 'nadour', 'elhousaima', 199, 'no');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`);

--
-- Index pour la table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`idtrajet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `travel`
--
ALTER TABLE `travel`
  MODIFY `idtrajet` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
