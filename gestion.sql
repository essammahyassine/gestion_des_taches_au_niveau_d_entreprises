-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Mai 2022 à 16:04
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `gestiontache`
--

CREATE TABLE `gestiontache` (
  `id` int(11) NOT NULL,
  `departement` text NOT NULL,
  `nomprenom` text NOT NULL,
  `tache` text NOT NULL,
  `datedebut` text NOT NULL,
  `datefin` text NOT NULL,
  `description` text NOT NULL,
  `etat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gestiontache`
--

INSERT INTO `gestiontache` (`id`, `departement`, `nomprenom`, `tache`, `datedebut`, `datefin`, `description`, `etat`) VALUES
(1, 'd', 'd', 'd', 'd', 'd', 'd', 'Non effectuer'),
(2, 'Département Production', 'François Nicolas Niox', '1', '2017-10-05T01:11', '2017-10-05T11:01', 'aaaaaaaaaaaaaaaaa', 'Non effectuer'),
(3, 'Département IT', 'Yassine Es Sammah', 'test', '', '', '', 'Realisé');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nom` text NOT NULL,
  `roll` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nom`, `roll`) VALUES
(1, 'essammahyassine@gmail.com', '123456', 'Yassine Es Sammah', 'User'),
(2, 'admin@admin.admin', '123456', 'Admin', 'Admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `gestiontache`
--
ALTER TABLE `gestiontache`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `gestiontache`
--
ALTER TABLE `gestiontache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
