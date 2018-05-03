-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 03 mai 2018 à 10:09
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

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
(1, 'Volets chambre YM', 'IN', 'OFF', 236756, 1, 5);

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
  `name` varchar(30) NOT NULL,
  `surface` int(10) NOT NULL,
  `nbPeople` int(10) NOT NULL,
  `secret` varchar(30) NOT NULL,
  `addressNumber` int(10) NOT NULL,
  `addressStreet` varchar(20) NOT NULL,
  `addressZipCode` int(10) NOT NULL,
  `addressCity` varchar(20) NOT NULL,
  `addressCountry` varchar(20) NOT NULL,
  `id_owner` int(10) NOT NULL,
  `id_tenant` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `residence`
--

INSERT INTO `residence` (`ID`, `name`, `surface`, `nbPeople`, `secret`, `addressNumber`, `addressStreet`, `addressZipCode`, `addressCity`, `addressCountry`, `id_owner`, `id_tenant`) VALUES
(1, 'Ma maison', 150, 6, 'monmdp', 10, 'Vanves', 92130, 'Issy-Les-Moulineaux', 'France', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surface` int(20) NOT NULL,
  `id_residency` int(10) NOT NULL,
  `id_roomCategory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`ID`, `name`, `surface`, `id_residency`, `id_roomCategory`) VALUES
(1, 'Chambre de YM', 15, 1, 1),
(2, 'Salle de bain d\'Antoine', 5, 1, 2);

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
(5, 'WC'),
(6, 'Cuisine'),
(7, 'Salle de jeux');

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

CREATE TABLE `sensor` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(10) NOT NULL,
  `serial` int(30) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_sensorType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensor`
--

INSERT INTO `sensor` (`ID`, `name`, `state`, `serial`, `id_room`, `id_sensorType`) VALUES
(1, 'Capteur lumière chambre YM', 'IN', 27936138, 1, 1),
(2, 'Capteur température salle de bain Antoine', 'IN', 26153616, 2, 2);

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
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `addressNumber` int(4) NOT NULL,
  `addressStreet` varchar(30) NOT NULL,
  `addressZipCode` int(10) NOT NULL,
  `addressCity` varchar(30) NOT NULL,
  `addressCountry` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `id_subscription` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `mail`, `password`, `phoneNumber`, `addressNumber`, `addressStreet`, `addressZipCode`, `addressCity`, `addressCountry`, `type`, `id_subscription`) VALUES
(1, 'Amélie', 'Piriou', 'amepiriou@gmail.com', 'apirioumdp', 608334474, 112, 'Chaptal', 92300, 'Levallois-Perret', 'France', 'client', 1);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
