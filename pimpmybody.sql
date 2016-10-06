-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 06 Octobre 2016 à 15:15
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `pimpmybody`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `iduser` int(3) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `prenom` varchar(55) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `datedenaissance` date NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nom`, `prenom`, `sexe`, `datedenaissance`, `adresse`, `cp`, `ville`, `email`, `mdp`, `telephone`) VALUES
(1, 'Jerome', 'Jouany', 'M', '0000-00-00', '20 avenue ambroise rendu', '75012', 'Paris', 'jerome.jouany@hotmail.com', 'akha', '0625004875'),
(2, 'Amaskane', 'Elias', 'M', '0000-00-00', '30 rue de saint ouen ', '93270', 'Saint ouen', 'amaskane.elias@gmail.com', 'tahsurtah', '0645193545'),
(3, 'Bridet', 'Vivi', 'F', '0000-00-00', '12 rue de meaux', '75019', 'Paris', 'vivi@gmail.com', 'belek', '0625008421'),
(4, 'De niro', 'Jimmy', 'M', '0000-00-00', '19 rue des bandit ', '95019', 'Sicile', 'Deniro@hotmail.fr', 'thug', '0753195437'),
(5, 'Spri', 'Gnahore', 'M', '0000-00-00', '20 rue de fougere', '75020', 'Paris', 'Sprinoir@gmail.com', 'newschool', '0745861574'),
(6, 'azer', 'azert', 'o', '0000-00-00', 'é"\'( gyhgufrf', '09855', 'dfghjk', 'dfghjk@dfghjk.fr', '571dd21d12d1695239814e2ddbf6ac4b', '0987654321');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `iduser` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;