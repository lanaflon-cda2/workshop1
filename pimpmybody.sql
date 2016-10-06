-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 06 Octobre 2016 à 15:50
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `pimpmybody`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ida` int(3) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ida`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'Admin', 'Admin', 'admin@pimpminute.com', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `asprof`
--

CREATE TABLE `asprof` (
  `idprof` int(3) NOT NULL,
  `iduser` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `idcarte` int(3) NOT NULL,
  `iduser` int(3) DEFAULT NULL,
  `numcarte` varchar(16) NOT NULL,
  `dateval` varchar(4) NOT NULL,
  `cripto` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcom` int(3) NOT NULL,
  `idp` int(3) DEFAULT NULL,
  `idc` int(3) DEFAULT NULL,
  `idservice` int(3) DEFAULT NULL,
  `datecom` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notation`
--

CREATE TABLE `notation` (
  `idnote` int(3) NOT NULL,
  `idprofnote` int(3) NOT NULL,
  `iduser` int(3) NOT NULL,
  `note` float(2,1) NOT NULL,
  `commentaire` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profession`
--

CREATE TABLE `profession` (
  `idprof` int(3) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profession`
--

INSERT INTO `profession` (`idprof`, `libelle`) VALUES
(1, 'Coiffeur'),
(2, 'Manucure'),
(3, 'Pedicure'),
(4, 'Maquilleur'),
(5, 'Barbier'),
(6, 'Esthetique');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `idrec` int(3) NOT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `reclamation` longtext,
  `iduser` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rib`
--

CREATE TABLE `rib` (
  `idrib` int(3) NOT NULL,
  `rib` varchar(27) DEFAULT NULL,
  `banque` varchar(100) DEFAULT NULL,
  `iduser` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ida`);

--
-- Index pour la table `asprof`
--
ALTER TABLE `asprof`
  ADD KEY `idprof` (`idprof`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`idcarte`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcom`),
  ADD KEY `idp` (`idp`),
  ADD KEY `idc` (`idc`);

--
-- Index pour la table `notation`
--
ALTER TABLE `notation`
  ADD PRIMARY KEY (`idnote`),
  ADD KEY `idprofnote` (`idprofnote`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`idprof`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`idrec`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `rib`
--
ALTER TABLE `rib`
  ADD PRIMARY KEY (`idrib`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idservice`),
  ADD KEY `idprof` (`idprof`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ida` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `idcarte` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcom` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `notation`
--
ALTER TABLE `notation`
  MODIFY `idnote` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profession`
--
ALTER TABLE `profession`
  MODIFY `idprof` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `idrec` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rib`
--
ALTER TABLE `rib`
  MODIFY `idrib` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `iduser` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `asprof`
--
ALTER TABLE `asprof`
  ADD CONSTRAINT `asprof_ibfk_1` FOREIGN KEY (`idprof`) REFERENCES `profession` (`idprof`),
  ADD CONSTRAINT `asprof_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`iduser`);

--
-- Contraintes pour la table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `carte_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`iduser`);
