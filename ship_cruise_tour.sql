-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 15 jan. 2023 à 12:25
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ship cruise tour`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `label`) VALUES
(1, 'solo room'),
(2, 'room for 2 personnes '),
(3, 'family room'),
(4, 'Suite');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fullName` varchar(40) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `fullName`, `firstName`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'abderrahmane elhamel', 'abderrahmane', 'abderrahmane@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'client'),
(3, 'abdo el', 'abdo', 'abdo@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'client'),
(10, 'Aziz', 'Harkati', 'aziz@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `massage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `massage`) VALUES
(1, 'abderrahmane', '066676637', 'abderrahmane@gmail.com', 'test', 'good job');

-- --------------------------------------------------------

--
-- Structure de la table `cruises`
--

CREATE TABLE `cruises` (
  `id-cruise` int(100) NOT NULL,
  `ship` int(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `num-of-nights` int(100) NOT NULL,
  `port-of-departure` int(100) NOT NULL,
  `cruise-itinerary` varchar(500) NOT NULL,
  `date-of-departure` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cruises`
--

INSERT INTO `cruises` (`id-cruise`, `ship`, `price`, `img`, `num-of-nights`, `port-of-departure`, `cruise-itinerary`, `date-of-departure`) VALUES
(1, 1, 300, 'uploads/cruise1.jpg', 4, 1, 'tanger-gibraltar-palma', '2023-01-15'),
(2, 2, 150, 'uploads/ship3.jpg', 6, 4, 'Piraeus-Venice-tanger', '2022-12-30'),
(3, 3, 250, 'uploads/ship6.jpg', 4, 2, 'NewYork-tanger-Venice', '2023-01-14'),
(4, 4, 300, 'uploads/ship8.jpg', 7, 4, 'Piraeus-tanger-newYork', '2023-01-11');

-- --------------------------------------------------------

--
-- Structure de la table `itinarary`
--

CREATE TABLE `itinarary` (
  `id` int(11) NOT NULL,
  `cruise` int(100) NOT NULL,
  `port` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `itinarary`
--

INSERT INTO `itinarary` (`id`, `cruise`, `port`) VALUES
(1, 2, 4),
(2, 2, 3),
(3, 2, 1),
(4, 3, 2),
(5, 3, 1),
(6, 4, 4),
(7, 4, 1),
(8, 4, 2),
(9, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `port`
--

CREATE TABLE `port` (
  `id` int(11) NOT NULL,
  `port` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `port`
--

INSERT INTO `port` (`id`, `port`, `country`) VALUES
(1, 'tanger', 'morocco'),
(2, 'newYork', 'USA'),
(3, 'Venice', 'italy'),
(4, 'Piraeus', 'greece');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `costumer` int(100) NOT NULL,
  `cruise` int(11) NOT NULL,
  `reservation-date` date NOT NULL,
  `reservation-price` int(11) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `costumer`, `cruise`, `reservation-date`, `reservation-price`, `room`) VALUES
(14, 2, 1, '2022-12-30', 300, 1),
(17, 2, 3, '2022-12-30', 450, 3),
(19, 10, 1, '2022-12-30', 400, 2),
(21, 3, 4, '2022-12-30', 500, 3),
(22, 3, 3, '2022-12-30', 550, 4),
(23, 3, 2, '2022-12-30', 250, 2),
(24, 2, 4, '2023-01-02', 500, 3),
(25, 3, 3, '2023-01-04', 350, 2),
(26, 2, 1, '2023-01-13', 400, 2);

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `ship` int(100) NOT NULL,
  `room-type` int(100) NOT NULL,
  `price` int(11) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`id`, `ship`, `room-type`, `price`, `capacity`) VALUES
(1, 1, 1, 200, 1),
(2, 2, 3, 450, 6),
(3, 4, 1, 300, 1),
(4, 2, 2, 300, 2),
(5, 4, 3, 500, 6),
(7, 3, 1, 200, 1),
(8, 2, 2, 250, 2),
(9, 2, 3, 350, 6),
(10, 1, 3, 500, 6),
(11, 1, 3, 500, 6),
(12, 1, 3, 500, 6),
(13, 1, 1, 300, 1),
(14, 1, 2, 400, 2),
(15, 1, 2, 400, 2),
(16, 1, 1, 300, 1),
(17, 3, 3, 450, 6),
(18, 1, 1, 300, 1),
(19, 1, 1, 300, 1),
(20, 1, 1, 300, 1),
(21, 1, 1, 300, 1),
(22, 1, 1, 300, 1),
(23, 1, 1, 300, 1),
(24, 1, 1, 300, 1),
(25, 1, 1, 300, 1),
(26, 3, 3, 450, 6),
(27, 1, 1, 300, 1),
(28, 1, 2, 400, 2),
(29, 1, 2, 400, 2),
(30, 4, 3, 500, 6),
(31, 3, 4, 550, 2),
(32, 2, 2, 250, 2),
(33, 4, 3, 500, 6),
(34, 3, 2, 350, 2),
(35, 1, 2, 400, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ship`
--

CREATE TABLE `ship` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `num-of-rooms` int(11) NOT NULL,
  `num-of-places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ship`
--

INSERT INTO `ship` (`id`, `name`, `num-of-rooms`, `num-of-places`) VALUES
(1, 'titanic', 5, 5),
(2, 'Wonder of the Sea', 5, 2),
(3, 'White Mansion', 10, 10),
(4, 'grand Sailor', 15, 12);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cruises`
--
ALTER TABLE `cruises`
  ADD PRIMARY KEY (`id-cruise`),
  ADD KEY `ship` (`ship`),
  ADD KEY `port` (`port-of-departure`);

--
-- Index pour la table `itinarary`
--
ALTER TABLE `itinarary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cruise` (`cruise`),
  ADD KEY `port` (`port`);

--
-- Index pour la table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custumer` (`costumer`),
  ADD KEY `cruise` (`cruise`),
  ADD KEY `room` (`room`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room-type` (`room-type`),
  ADD KEY `ship` (`ship`);

--
-- Index pour la table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cruises`
--
ALTER TABLE `cruises`
  MODIFY `id-cruise` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `itinarary`
--
ALTER TABLE `itinarary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cruises`
--
ALTER TABLE `cruises`
  ADD CONSTRAINT `port` FOREIGN KEY (`port-of-departure`) REFERENCES `port` (`id`),
  ADD CONSTRAINT `ship` FOREIGN KEY (`ship`) REFERENCES `ship` (`id`);

--
-- Contraintes pour la table `itinarary`
--
ALTER TABLE `itinarary`
  ADD CONSTRAINT `itinarary_ibfk_1` FOREIGN KEY (`cruise`) REFERENCES `cruises` (`id-cruise`),
  ADD CONSTRAINT `itinarary_ibfk_2` FOREIGN KEY (`port`) REFERENCES `port` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `cruise` FOREIGN KEY (`cruise`) REFERENCES `cruises` (`id-cruise`),
  ADD CONSTRAINT `custumer` FOREIGN KEY (`costumer`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `room` FOREIGN KEY (`room`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `room type` FOREIGN KEY (`room-type`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`ship`) REFERENCES `ship` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
