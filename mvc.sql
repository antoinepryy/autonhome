-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 31 mai 2018 à 09:12
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
  `dateTime` datetime NOT NULL,
  `value` int(50) NOT NULL,
  `id_sensor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `data`
--

INSERT INTO `data` (`ID`, `dateTime`, `value`, `id_sensor`) VALUES
(1, '2018-05-30 07:00:00', 2, 2),
(2, '2018-05-22 00:00:00', 3, 2),
(3, '2018-03-06 00:21:00', 7, 1),
(4, '2018-04-10 02:16:29', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `effector`
--

CREATE TABLE `effector` (
  `ID` int(11) NOT NULL,
  `cardNumber` int(255) DEFAULT NULL,
  `objectNumber` int(255) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_effectorType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `effector`
--

INSERT INTO `effector` (`ID`, `cardNumber`, `objectNumber`, `name`, `action`, `state`, `id_room`, `id_effectorType`) VALUES
(1, NULL, NULL, 'Volets chambre YM', 'IN', 'OFF', 4, 5);

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
-- Structure de la table `forum_discussion`
--

CREATE TABLE `forum_discussion` (
  `ID` int(11) NOT NULL,
  `topic` text NOT NULL,
  `text` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum_discussion`
--

INSERT INTO `forum_discussion` (`ID`, `topic`, `text`, `id_user`, `dateTime`) VALUES
(14, 'Capteur de température mal configuré', 'Bonjour, mon capteur de température indique la température en degrés °F, comment le configurer en °C ?\r\nMerci par avance', 11, '2018-05-24 10:13:39'),
(15, 'Ventilateur en panne', 'Bonjour, mon ventilateur semble être en panne après avoir été activé toute cette nuit, suite à un pic de chaleur. Peut-être a-t-il été en marche trop longtemps?\r\nMerci par avance', 11, '2018-05-24 10:15:14'),
(16, 'Volets bloqués', 'Bonjour, mes volets sont bloqués en position fermée. Une idée pour les monter ?\r\nMerci par avance', 23, '2018-05-24 10:17:38'),
(19, 'Alarme ne sonne plus', 'Bonjour, mon alarme ne sonne qu\'une fois sur deux lorsque mon chien passe devant le capteur... Peut-être ai-je un problème de capteur de mouvement ? Merci par avance', 11, '2018-05-24 11:24:01'),
(20, 'salut', 'esrtdfyuihojkp', 11, '2018-05-26 19:47:35'),
(21, 'Je suis un admin', 'Salut c\'est moi\r\n', 23, '2018-05-28 14:47:26'),
(22, 'Je suis un autre admin', 'Salut salut\r\n', 15, '2018-05-28 14:48:06'),
(23, 'qwsxdcfvgbhnj,kl;m:!ù', 'wxdcfvyuniop^m$\r\n', 15, '2018-05-28 15:11:00');

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE `forum_message` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_discussion` int(10) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forum_message`
--

INSERT INTO `forum_message` (`ID`, `text`, `id_user`, `id_discussion`, `dateTime`) VALUES
(1, 'Je rencontre le même problème que vous ! Help', 12, 1, '0000-00-00 00:00:00'),
(13, 'qzsedrctvybuni,o;m', 11, 1, '2018-05-25 16:48:41'),
(14, 'serdtfyguijop^:!ù', 11, 1, '2018-05-26 19:48:39');

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
(4, 'Chambre de Canard', 3, 1);

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
  `cardNumber` int(255) DEFAULT NULL,
  `objectNumber` int(255) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(10) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_sensorType` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sensor`
--

INSERT INTO `sensor` (`ID`, `cardNumber`, `objectNumber`, `name`, `state`, `id_room`, `id_sensorType`) VALUES
(1, 1000, 50, 'Capteur lumière chambre YM', 'IN', 1, 1),
(2, 500, 25, 'Capteur température salle de bain Antoine', 'IN', 4, 2);

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
(1, 'Pack 1 maison', 100),
(2, 'Pack 2 maison', 150);

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
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `mail`, `password`, `phoneNumber`, `addressNumber`, `addressStreet`, `addressZipCode`, `addressCity`, `addressCountry`, `type`) VALUES
(1, 'Amélie', 'Piriou', 'amepiriou@gmail.com', 'pass', '608334474', 112, 'Chaptal', 92300, 'Levallois-Perret', 'France', 'client'),
(2, 'Antoine', 'Perry', 'test@mail.com', 'pass', '', 0, '', 0, '', '', ''),
(3, 'azd', 'ad', 'antoine.ap.57@gmail.com', 'azd', '', 0, '', 0, '', '', ''),
(4, 'azd', 'ad', 'antoine.ap.57@gmail.com', 'azd', '', 0, '', 0, '', '', ''),
(5, 'azd', 'azd', 'azd@test', 'azd', '', 0, '', 0, '', '', ''),
(6, 'as', 'as', 'antoine.ap.57@gmail.com', 'as', '674181395', 2, '20, rue des couvents', 0, 'Mon', 'france', ''),
(7, 'as', 'as', 'antoine.ap.57@gmail.com', 'as', '674181395', 0, '20, rue des couvents', 0, 'Mon', 'france', 'user'),
(8, 'as', 'as', 'antoine.ap.57@gmail.com', '$2y$10$/hyDI4mM6TVQPY.sRRz34eD', '674181395', 2, '20, rue des couvents', 57950, 'Mon', 'france', 'user'),
(9, 'as', 'as', 'antoine.ap.57@gmail.com', '$2y$10$SYoKTix0jXxKg/7Iyn2XiOH189.TSjM4pjagpe5zEg3pv0tTkqdCe', '674181395', 2, '20, rue des couvents', 57950, 'Mon', 'france', 'user'),
(10, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$pnPkmlY1DJPRUJGeQoP4gevZP76BwqUji9guVDV11rKt5yobIoDzW', '674181395', 20, 'rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user'),
(11, 'Yves-Marie', 'PAUL', 'yvesdu29@gmail.com', '$2y$10$m07Iis93r6NiGVCO1IPbG.U6IggDVvKV8rNSS3MBZslDOsn/9NyfW', '123456789', 15, 'boulevard', 0, 'Paris', 'france', 'user'),
(12, 'Yacine', 'Nabti', 'yac@mail.com', '$2y$10$Z3Q8ZB1KfcwEO6mYKUC6WurpuE6QKRpBpgPXoyk7EjkoxSfDCExne', '123456789', 19, 'Rue du blabla ', 57950, 'Metz', 'france', 'user'),
(13, 'test', 'test', 'antoine.ap.57@gmail.com', '$2y$10$ujIB4iSl7yDOxpA4tWTH2uIZDK6VZaTPNdWHt7ElSuowEo6qjS7FO', '674181395', 10, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user'),
(14, 'Sylviana', 'Mialisao', 'sylv@mail.com', '$2y$10$B4qJCm8Lgn.X0z5OrXevuu1AVQsOXIDXnfRHLZcnf51tH37zHWKzi', '123456789', 20, 'rue', 57000, 'Metz', 'france', 'user'),
(15, 'admin', 'admin', 'admin@admin.com', '$2y$10$qqxRYgYrJKixrXbxwCGmAeJTdkls.dnNo.EzDzPPvA36p.OUTuq8C', '123456789', 0, 'nop', 0, 'nop', 'france', 'admin'),
(16, 'admin', 'admin', 'admin@admin.com', '$2y$10$CGYe7d3hXEMU0nHA4vJ9h.JaoxavZm3KXQ3Es/ltJoRHHGInryRcm', '123456789', 0, 'nop', 0, 'nop', 'france', 'admin'),
(17, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$JEY/oEpp6LL/4.Deg1oDTuRcr7Egr.WDxdgGbyuVM.JVFx5y8NaAa', '674181395', 5, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user'),
(18, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$9xNhJTRvIOCgPneeOxcGAuGbUNT.7aLUKp63L4ZJWw1C4crA.Jrb6', '674181395', 5, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user'),
(19, 'Antoine', 'Perry', 'antoine.ap.57@gmail.com', '$2y$10$/F4szpAjhzVbBagtdFd1Duy9jqIYlSBtKDajzQ/MWwkvjLvmeEPA2', '674181395', 5, '20, rue des couvents', 57950, 'Montigny-Lès-Metz', 'france', 'user'),
(20, 'Fanny', 'Streiff', 'fanny@gmail.com', '$2y$10$EumVtBZsvybf2tjjZri1ZOOas3ToRVFctWGTz7DQ6DFC7TymAhBU2', '123456789', 20, 'Rue de Vanves', 75000, 'Paris', 'france', 'user'),
(21, 'Yacine', 'Nabti', 'yasco@gmail.com', '$2y$10$9sS6.AiKxwb7yyoAexV2DO7F2VJNy8d5mQaQ0KtWkQMEMD.WOqTqi', '0708334474', 10, 'rue de vanves', 92170, 'issy', 'france', 'user'),
(23, 'Yves-Marie', 'Paul', 'yvespasteque@fruitz.com', '$2y$10$utAmBAld0EoFCsorjPdlVOouYaH3Zn388ob73qGWuC7PDyqPcdNAu', '0789654332', 10, 'rue de Vanves', 92130, 'Issy', 'france', 'admin');

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
-- Index pour la table `forum_discussion`
--
ALTER TABLE `forum_discussion`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `forum_message`
--
ALTER TABLE `forum_message`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT pour la table `forum_discussion`
--
ALTER TABLE `forum_discussion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `forum_message`
--
ALTER TABLE `forum_message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `subscription_user`
--
ALTER TABLE `subscription_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
