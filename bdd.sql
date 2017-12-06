SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `todo_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `Offres`
--

CREATE TABLE `Offres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Offres`
--

INSERT INTO `Offres` (`id`, `name`, `price`) VALUES
(1, 'Offre découverte 1 mois', 8.9),
(2, 'Offre projet 6 mois', 24.9),
(3, 'Offre premium 1 an', 39.9);

-- --------------------------------------------------------

--
-- Structure de la table `Tache`
--

CREATE TABLE `Tache` (
  `tacheid` int(11) NOT NULL,
  `labeltache` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `lvltache` varchar(10) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `tacheuserid` int(11) NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Tache`
--

INSERT INTO `Tache` (`tacheid`, `labeltache`, `description`, `lvltache`, `categoryId`, `tacheuserid`, `delete_at`) VALUES
(42, 'Maison', 'Kojbdzkjgbzejg', '1', 1, 1, '2017-11-14 15:26:02'),
(43, 'Pro', 'zegezgze', '2', 5, 1, '2017-11-13 13:15:19'),
(44, 'Google', 'zegezgze', '2', 8, 1, NULL),
(45, 'Google', 'zegzegze', '3', 8, 1, '2017-11-14 15:37:01'),
(46, 'Sport', 'Alexis duu', '3', 3, 1, '2017-11-13 13:15:16'),
(47, 'Sport', 'zegezgez', '1', 3, 1, '2017-11-13 13:15:18'),
(48, 'Pro', 'ezgezgez', '1', 5, 1, '2017-11-13 13:15:20'),
(49, 'Perso', 'ezgezgze', '3', 6, 0, '2017-11-13 13:15:20'),
(50, 'test  category', 'test tache test', '1', 19, 1, NULL),
(51, 'alexis', 'alexis', '3', 20, 1, '2017-11-14 15:25:59'),
(52, 'Maison', 'zelktgozekginze', '3', 1, 1, '2017-12-06 09:30:14'),
(54, 'Maison', 'Faire le ménage et la cuisine', '2', 22, 6, NULL),
(55, 'Travail', 'Faire les plannings', '3', 23, 6, NULL),
(56, 'Maison', 'Promener le chien', '3', 22, 6, '2017-11-14 14:51:59'),
(57, 'Perso', 'Jjflq,glezg', '1', 6, 1, '2017-11-14 15:26:02'),
(58, 'Maison', 'Faire le ménage', '1', 24, 7, NULL),
(59, 'Maison', 'Laver les serviettes', '3', 25, 9, NULL),
(60, 'Maison', 'Faire à manger et la vaisselle', '2', 25, 9, '2017-11-19 12:05:05');

-- --------------------------------------------------------

--
-- Structure de la table `taskcategory`
--

CREATE TABLE `taskcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `categoryuserid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taskcategory`
--

INSERT INTO `taskcategory` (`id`, `name`, `categoryuserid`) VALUES
(1, 'Maison', 1),
(3, 'Sport', 1),
(4, 'Travail', 1),
(5, 'Pro', 1),
(6, 'Perso', 1),
(7, 'Formation', 1),
(8, 'Google', 1),
(16, 'uguyg', 0),
(17, 'Floflo', 0),
(18, '', 0),
(19, 'test  category', 1),
(20, 'alexis', 1),
(21, 'String', 1),
(22, 'Maison', 6),
(23, 'Travail', 6),
(24, 'Maison', 7),
(25, 'Maison', 9);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `userid` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `delete_ac` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`userid`, `login`, `password`, `nom`, `prenom`, `delete_ac`) VALUES
(1, 'user1@user.fr', 'user2', '', '', NULL),
(4, 'baptiste.salvii@gmail.com', 'baptslv', 'Salvi', 'Baptiste', NULL),
(6, 'ali.bomaye@gmail.com', 'alithebest', 'Bomaye', 'Ali', NULL),
(7, 'lucas.trouduc@trouduc.fr', 'trouduc', 'Trouduc', 'Lucas', NULL),
(8, 'florian.lol@lolo.com', 'lolo', 'Lolo', 'Florian', NULL),
(9, 'cam.pro@hotmail.fr', 'camproo', 'Profilet', 'Camille', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Offres`
--
ALTER TABLE `Offres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tache`
--
ALTER TABLE `Tache`
  ADD PRIMARY KEY (`tacheid`);

--
-- Index pour la table `taskcategory`
--
ALTER TABLE `taskcategory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Offres`
--
ALTER TABLE `Offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Tache`
--
ALTER TABLE `Tache`
  MODIFY `tacheid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `taskcategory`
--
ALTER TABLE `taskcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;