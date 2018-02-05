-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 05 fév. 2018 à 15:25
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gwood`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `idAdresse` int(11) NOT NULL,
  `cpAdresse` int(11) NOT NULL,
  `villeAdresse` varchar(25) NOT NULL,
  `detailAdresse` varchar(25) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `idAvis` int(11) NOT NULL,
  `noteAvis` int(11) NOT NULL,
  `textAvis` varchar(25) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idInstr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `idInstr` int(11) NOT NULL,
  `typeInstr` varchar(25) NOT NULL,
  `refInstr` varchar(25) NOT NULL,
  `caractInstr` varchar(25) NOT NULL,
  `prixInstr` decimal(15,3) NOT NULL,
  `descInstr` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`idInstr`, `typeInstr`, `refInstr`, `caractInstr`, `prixInstr`, `descInstr`) VALUES
(1, 'Accoustique', 'A01', 'Cordes en nylon', '195.000', 'Remplir description '),
(5, 'Electrique', 'E02', 'Cordes en acier', '225.000', 'Remplir description '),
(6, 'Electrique', 'E01', 'Cordes en acier', '210.000', 'Remplir description '),
(7, 'Accoustique', 'A02', 'Cordes en nylon', '180.000', 'Remplir description '),
(8, 'Basse', 'B01', '4 cordes en acier', '250.000', 'Remplir description '),
(9, 'Basse', 'B02', '4 cordes en acier', '240.000', 'Remplir description ');

-- --------------------------------------------------------

--
-- Structure de la table `instrument_perso`
--

CREATE TABLE `instrument_perso` (
  `idPers` int(11) NOT NULL,
  `couleurCorps` varchar(25) NOT NULL,
  `imgPers` varchar(25) NOT NULL,
  `couleurCorde` varchar(25) NOT NULL,
  `matCorde` varchar(25) NOT NULL,
  `couleurRosace` varchar(25) NOT NULL,
  `motifRosace` varchar(25) NOT NULL,
  `couleurBouton` varchar(25) NOT NULL,
  `couleurManche` varchar(25) NOT NULL,
  `couleurMeca` varchar(25) NOT NULL,
  `numSerie` int(11) NOT NULL,
  `idInstr` int(11) NOT NULL,
  `idPanier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `idPanier` int(11) NOT NULL,
  `idInstr` varchar(25) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nomUser` varchar(25) NOT NULL,
  `prenomUser` varchar(25) NOT NULL,
  `pseudoUser` varchar(25) NOT NULL,
  `mailUser` varchar(25) NOT NULL,
  `mdpUser` varchar(25) NOT NULL,
  `dateUser` varchar(25) NOT NULL,
  `avatarUser` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`idAdresse`),
  ADD KEY `FK_Adresse_idUser` (`idUser`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `FK_Avis_idUser` (`idUser`),
  ADD KEY `FK_Avis_idInstr` (`idInstr`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`idInstr`);

--
-- Index pour la table `instrument_perso`
--
ALTER TABLE `instrument_perso`
  ADD PRIMARY KEY (`idPers`),
  ADD KEY `FK_Instrument_perso_idInstr` (`idInstr`),
  ADD KEY `FK_Instrument_perso_idPanier` (`idPanier`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`idPanier`),
  ADD KEY `idInstr` (`idInstr`),
  ADD KEY `FK_Panier_idUser` (`idUser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `idAdresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `idInstr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `instrument_perso`
--
ALTER TABLE `instrument_perso`
  MODIFY `idPers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `idPanier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `FK_Adresse_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_Avis_idInstr` FOREIGN KEY (`idInstr`) REFERENCES `instrument` (`idInstr`),
  ADD CONSTRAINT `FK_Avis_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `instrument_perso`
--
ALTER TABLE `instrument_perso`
  ADD CONSTRAINT `FK_Instrument_perso_idInstr` FOREIGN KEY (`idInstr`) REFERENCES `instrument` (`idInstr`),
  ADD CONSTRAINT `FK_Instrument_perso_idPanier` FOREIGN KEY (`idPanier`) REFERENCES `panier` (`idPanier`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_Panier_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
