-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 28 mai 2018 à 14:20
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `ID` int(11) NOT NULL,
  `frequency` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `dateTime` varchar(30) NOT NULL,
  `value` int(50) NOT NULL,
  `id_sensor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `effector`
--

CREATE TABLE `effector` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `serial` int(40) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_effectorType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `effector`
--

INSERT INTO `effector` (`ID`, `name`, `action`, `state`, `serial`, `id_room`, `id_effectorType`) VALUES
(1, 'Volets chambre YM', 'ON', 'OFF', 236756, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `effector_type`
--

CREATE TABLE `effector_type` (
  `ID` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `effector_type`
--

INSERT INTO `effector_type` (`ID`, `type`) VALUES
(4, 'ventilateur'),
(5, 'volets');

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE `forum_message` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_forumDiscussion` int(10) NOT NULL,
  `dateTime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forum_message`
--

INSERT INTO `forum_message` (`ID`, `text`, `id_user`, `id_forumDiscussion`, `dateTime`) VALUES
(1, 'Bonjour à tous,\r\n\r\nJe rencontre actuellement des soucis lors de l\'ajout d\'un capteur dans mon appartement.\r\nJe possède un abonnement PACK 1 maison, et je souhaiterai y ajouter un capteur de mouvement dans mon entrée.\r\nEst-ce que quelqu\'un a rencontré le même problème que moi ?\r\n\r\nMerci par avance pour votre aide,\r\n\r\nAmélie', 1, 1, '2018-05-03-12h00');

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE `forum_topic` (
  `ID` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dateTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forum_topic`
--

INSERT INTO `forum_topic` (`ID`, `topic`, `id_user`, `dateTime`) VALUES
(1, 'Ajout d\'un capteur à mon abonnement', 1, '2018-05-03-12h00');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_message` int(10) NOT NULL,
  `text` text NOT NULL,
  `dateTime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID`, `id_user`, `id_message`, `text`, `dateTime`) VALUES
(1, 1, 1, 'Bonjour, \r\n\r\nJe rencontre actuellement un problème de connexion à l\'un de mes capteurs : il est indiqué qu\'il est hors tension.\r\nPourrions-nous convenir d\'un rendez-vous afin de le réparer/remplacer ?\r\n\r\nMerci par avance,\r\n\r\nAmélie ', '2018-05-03-12h00');

-- --------------------------------------------------------

--
-- Structure de la table `residence`
--

CREATE TABLE `residence` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surface` int(10) NOT NULL,
  `nbPeople` int(10) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `addressNumber` int(10) NOT NULL,
  `addressStreet` varchar(255) NOT NULL,
  `addressZipCode` int(255) NOT NULL,
  `addressCity` varchar(255) NOT NULL,
  `addressCountry` varchar(255) NOT NULL,
  `id_owner` int(255) NOT NULL,
  `id_tenant` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `residence`
--

INSERT INTO `residence` (`ID`, `name`, `surface`, `nbPeople`, `secret`, `addressNumber`, `addressStreet`, `addressZipCode`, `addressCity`, `addressCountry`, `id_owner`, `id_tenant`) VALUES
(1, 'Ma maison', 150, 6, 'monmdp', 10, 'Vanves', 92130, 'Issy-Les-Moulineaux', 'France', 1, 1),
(2, 'test', 2, 2, 'sdiecuzec', 2, 'azdoi', 4568, 'uhzd', 'uhzbd', 5, NULL),
(3, 'iuze', 4, 6, 'test', 45, 'y', 456, 'fc', 'france', 11, NULL),
(4, 'iuze', 4, 6, 'test', 45, 'y', 456, 'fc', 'france', 11, NULL),
(5, 'iuze', 4, 6, 'test', 45, 'y', 456, 'fc', 'france', 11, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_residency` int(10) NOT NULL,
  `id_roomCategory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`ID`, `name`, `id_residency`, `id_roomCategory`) VALUES
(1, 'Chambre de YM', 1, 1),
(2, 'Salle de bain d\'Antoine', 1, 2),
(3, 'Test', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `room_category`
--

CREATE TABLE `room_category` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room_category`
--

INSERT INTO `room_category` (`ID`, `name`) VALUES
(1, 'Chambre'),
(2, 'Salle de bain'),
(3, 'Salon'),
(4, 'Salle à manger'),
(5, 'Cuisine'),
(6, 'Autres pièces');

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

CREATE TABLE `sensor` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(10) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `serial` int(30) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_sensorType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensor`
--

INSERT INTO `sensor` (`ID`, `name`, `state`, `value`, `serial`, `id_room`, `id_sensorType`) VALUES
(1, 'Capteur lumière chambre YM', 'IN', '100', 27936138, 1, 1),
(2, 'Capteur température salle de bain Antoine', 'IN', NULL, 26153616, 2, 2),
(3, 'Température', 'OK', '20', 6527292, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sensor_type`
--

CREATE TABLE `sensor_type` (
  `ID` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensor_type`
--

INSERT INTO `sensor_type` (`ID`, `type`) VALUES
(1, 'Lumière'),
(2, 'Température'),
(3, 'Mouvement');

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

CREATE TABLE `subscription` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `subscription`
--

INSERT INTO `subscription` (`ID`, `name`, `price`) VALUES
(1, 'Pack 1 maison', 100);

-- --------------------------------------------------------

--
-- Structure de la table `subscription_user`
--

CREATE TABLE `subscription_user` (
  `ID` int(11) NOT NULL,
  `id_subscription` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `beginningDate` varchar(30) NOT NULL,
  `endingDate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `subscription_user`
--

INSERT INTO `subscription_user` (`ID`, `id_subscription`, `id_user`, `beginningDate`, `endingDate`) VALUES
(1, 1, 1, '2018-05-03', '2019-05-03');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `addressNumber` int(4) NOT NULL,
  `addressStreet` varchar(100) NOT NULL,
  `addressZipCode` int(10) NOT NULL,
  `addressCity` varchar(100) NOT NULL,
  `addressCountry` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id_subscription` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `mail`, `password`, `phoneNumber`, `addressNumber`, `addressStreet`, `addressZipCode`, `addressCity`, `addressCountry`, `type`, `id_subscription`) VALUES
(1, 'Amélie', 'Piriou', 'amepiriou@gmail.com', 'pass', '608334474', 112, 'Chaptal', 92300, 'Levallois-Perret', 'France', 'client', 1),
(2, 'Antoine', 'Perry', 'test@mail.com', 'pass', '', 0, '', 0, '', '', '', NULL),
(3, 'azd', 'ad', 'antoine.ap.57@gmail.com', 'azd', '', 0, '', 0, '', '', '', NULL),
(4, 'azd', 'ad', 'antoine.ap.57@gmail.com', 'azd', '', 0, '', 0, '', '', '', NULL),
(5, 'azd', 'azd', 'azd@test', 'azd', '', 0, '', 0, '', '', '', NULL),
(6, 'as', 'as', 'antoine.ap.57@gmail.com', 'as', '674181395', 2, '20, rue des couvents', 0, 'Mon', 'france', '', NULL),
(7, 'as', 'as', 'antoine.ap.57@gmail.com', 'as', '674181395', 0, '20, rue des couvents', 0, 'Mon', 'france', 'user', NULL),
(8, 'as', 'as', 'antoine.ap.57@gmail.com', '$2y$10$/hyDI4mM6TVQPY.sRRz34eD', '674181395', 2, '20, rue des couvents', 57950, 'Mon', 'france', 'user', NULL),
(9, 'as', 'as', 'antoine.ap.57@gmail.com', '$2y$10$SYoKTix0jXxKg/7Iyn2XiOH189.TSjM4pjagpe5zEg3pv0tTkqdCe', '674181395', 2, '20, rue des couvents', 57950, 'Mon', 'france', 'user', NULL),
(10, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$pnPkmlY1DJPRUJGeQoP4gevZP76BwqUji9guVDV11rKt5yobIoDzW', '674181395', 20, 'rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user', NULL),
(11, 'Yves-Marie', 'PAUL', 'yvesdu29@gmail.com', '$2y$10$m07Iis93r6NiGVCO1IPbG.U6IggDVvKV8rNSS3MBZslDOsn/9NyfW', '123456789', 15, 'boulevard', 0, 'Paris', 'france', 'user', NULL),
(12, 'Yacine', 'Nabti', 'yac@mail.com', '$2y$10$Z3Q8ZB1KfcwEO6mYKUC6WurpuE6QKRpBpgPXoyk7EjkoxSfDCExne', '123456789', 19, 'Rue du blabla ', 57950, 'Metz', 'france', 'user', NULL),
(13, 'test', 'test', 'antoine.ap.57@gmail.com', '$2y$10$ujIB4iSl7yDOxpA4tWTH2uIZDK6VZaTPNdWHt7ElSuowEo6qjS7FO', '674181395', 10, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user', NULL),
(14, 'Sylviana', 'Mialisao', 'sylv@mail.com', '$2y$10$B4qJCm8Lgn.X0z5OrXevuu1AVQsOXIDXnfRHLZcnf51tH37zHWKzi', '123456789', 20, 'rue', 57000, 'Metz', 'france', 'user', NULL),
(15, 'admin', 'admin', 'admin@admin.com', '$2y$10$qqxRYgYrJKixrXbxwCGmAeJTdkls.dnNo.EzDzPPvA36p.OUTuq8C', '123456789', 0, 'nop', 0, 'nop', 'france', 'admin', NULL),
(16, 'admin', 'admin', 'admin@admin.com', '$2y$10$CGYe7d3hXEMU0nHA4vJ9h.JaoxavZm3KXQ3Es/ltJoRHHGInryRcm', '123456789', 0, 'nop', 0, 'nop', 'france', 'admin', NULL),
(17, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$JEY/oEpp6LL/4.Deg1oDTuRcr7Egr.WDxdgGbyuVM.JVFx5y8NaAa', '674181395', 5, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user', NULL),
(18, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$9xNhJTRvIOCgPneeOxcGAuGbUNT.7aLUKp63L4ZJWw1C4crA.Jrb6', '674181395', 5, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user', NULL),
(19, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$/F4szpAjhzVbBagtdFd1Duy9jqIYlSBtKDajzQ/MWwkvjLvmeEPA2', '674181395', 5, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user', NULL),
(20, 'Fanny', 'Streiff', 'fanny@gmail.com', '$2y$10$EumVtBZsvybf2tjjZri1ZOOas3ToRVFctWGTz7DQ6DFC7TymAhBU2', '123456789', 20, 'Rue de Vanves', 75000, 'Paris', 'france', 'user', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `effector`
--
ALTER TABLE `effector`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `effector_type`
--
ALTER TABLE `effector_type`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `forum_message`
--
ALTER TABLE `forum_message`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `sensor_type`
--
ALTER TABLE `sensor_type`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `subscription_user`
--
ALTER TABLE `subscription_user`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `action`
--
ALTER TABLE `action`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `effector`
--
ALTER TABLE `effector`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `effector_type`
--
ALTER TABLE `effector_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `forum_message`
--
ALTER TABLE `forum_message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `residence`
--
ALTER TABLE `residence`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sensor_type`
--
ALTER TABLE `sensor_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `subscription_user`
--
ALTER TABLE `subscription_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
