-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 07 Juin 2019 à 07:49
-- Version du serveur :  10.1.37-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `booksite`
--
CREATE DATABASE IF NOT EXISTS `booksite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `booksite`;

-- --------------------------------------------------------

--
-- Structure de la table `catégorie`
--

CREATE TABLE `catégorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `catégorie`
--

INSERT INTO `catégorie` (`id`, `nom`) VALUES
(1, 'Roman'),
(2, 'Théâtre');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `Image` blob NOT NULL,
  `catégorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `titre`, `auteur`, `prix`, `Image`, `catégorie`) VALUES
(47, 'Les fourmis', 'Bernard Werber', 13, 0x4c657320666f75726d69732e6a7067, ''),
(50, 'Les particules elementaires', 'Michel Houellebeck', 25, 0x4c657320706172746963756c657320656c656d656e7461697265732e6a7067, ''),
(51, 'Candide', 'Voltaire', 2, 0x43616e646964652e6a7067, ''),
(52, 'Carmen', 'Mérimée', 9, 0x4361726d656e2e6a7067, ''),
(53, 'La distinction', 'Pierre Bourdieu', 11, 0x4c612064697374696e6374696f6e2e6a7067, ''),
(54, 'La nuit des temps', 'Barjavel', 14, 0x4c61206e756974206465732074656d70732e6a7067, ''),
(55, 'La première gorgée de bière', 'Philippe Delerm', 13, 0x4c61207072656d69c3a8726520676f7267c3a965206465206269c3a872652e6a7067, ''),
(57, 'Les misérables', 'Victor Hugo', 13, 0x4c6573206d6973c3a97261626c65732e6a7067, ''),
(58, 'Les origines du totalitarisme', 'Hanna Arendt', 16, 0x4c6573206f726967696e657320647520746f74616c6974617269736d652e6a7067, ''),
(59, 'Tartuffe', 'Molière', 2, 0x54617274756666652e6a7067, ''),
(60, 'Tartuffe', 'Molière', 2, 0x54617274756666652e6a7067, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
