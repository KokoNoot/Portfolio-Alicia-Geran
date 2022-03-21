-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 18 mars 2022 à 02:31
-- Version du serveur :  10.3.34-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `alicia_geran_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `short_biography` varchar(255) NOT NULL,
  `long_biography` varchar(255) NOT NULL,
  `experiences_title` varchar(255) NOT NULL,
  `projects_title` varchar(255) NOT NULL,
  `cv_file` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `twitter`, `instagram`, `linkedin`, `short_biography`, `long_biography`, `experiences_title`, `projects_title`, `cv_file`, `created_at`, `updated_at`) VALUES
(1, 'aliciageran', 'Alicia', 'Geran', 'aliciageran@gmail.com', '636dcfac51f01566879ff05a842b0ba15b19b2dd0fd8c10234f7bb698375289b', '0606060606', 'https://twitter.com/aliciageran', 'https://www.instagram.com/aliciageran', 'https://www.linkedin.com/in/aliciageran', 'Bonjour, je suis Alicia Geran,\r\nÉtudiante en deuxième année de DUT Multimédia et Métiers de l\'Internet\r\nà Sarcelles.', 'Je suis née et ai grandi à Sarcelles. J\'ai effectué un DUT MMI dans le but de devenir graphiste. J\'aime beaucoup laisser libre cours à mon imagination et ma créativité afin de fournir un travail qui me ressemble.', 'Les défis ne me font pas peur', '', 'cv.pdf', 1645618413, 1647570630);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `date`, `description`, `created_at`, `updated_at`, `author_id`) VALUES
(1, 'Animation After Effects Motion Design', 'Décembre 2021', 'Création d\'une courte animation d\'introduction professionnelle sur After Effects\r\n\r\nCréation d\'un moodboard retraçant toutes mes inspirations\r\n\r\nCréation d\'un monogramme\r\n\r\nCréation d\'une animation sur After Effects avec des effets', 1645620819, 1645620819, 1);

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `author_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`email`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
