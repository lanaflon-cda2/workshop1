-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 06 Octobre 2016 à 15:17
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `pimpmybody`
--

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idservice` int(3) NOT NULL DEFAULT '0',
  `idprof` int(3) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `prix` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`idservice`, `idprof`, `libelle`, `prix`) VALUES
(1, 1, 'Coloration', '30'),
(2, 1, 'Coupe régulière', '20'),
(3, 1, 'Coupe occasionnelle', '27'),
(4, 2, 'Nails arts', '29'),
(5, 5, 'taille de barbe', '12'),
(6, 4, 'maquillage flash jour', '25'),
(7, 4, 'maquillage flash nuit', '30'),
(8, 3, 'pose de vernis semi-permanente', '32'),
(9, 5, 'taille de moustache', '10');
--
-- Index pour les tables exportées
--

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idservice`),
  ADD KEY `idprof` (`idprof`);
