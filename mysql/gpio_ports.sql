-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Janvier 2017 à 10:02
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spa_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `gpio_ports`
--

CREATE TABLE `gpio_ports` (
  `id` int(2) NOT NULL,
  `pin` int(2) DEFAULT NULL,
  `gpio` int(2) DEFAULT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `cablage` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gpio_ports`
--

INSERT INTO `gpio_ports` (`id`, `pin`, `gpio`, `fonction`, `cablage`) VALUES
(1, 1, NULL, '3.3V', NULL),
(2, 2, NULL, '5v', NULL),
(3, 3, 8, 'SDA0', NULL),
(4, 4, NULL, NULL, NULL),
(5, 5, 9, 'SCL0', NULL),
(6, 6, NULL, '0v', NULL),
(7, 7, 7, 'GPIO7', 'pompe1'),
(8, 8, 15, 'TxD', NULL),
(9, 9, NULL, 'DNC', NULL),
(10, 10, 16, 'RxD', NULL),
(11, 11, 0, 'GPIO0', NULL),
(12, 12, 1, 'GPIO1', NULL),
(13, 13, 2, 'GPIO2', NULL),
(14, 14, NULL, 'DNC', NULL),
(15, 15, 3, 'GPIO3', NULL),
(16, 16, 4, 'GPIO4', NULL),
(17, 17, NULL, 'DNC', NULL),
(18, 18, 5, 'GPIO5', NULL),
(19, 19, 12, 'MOSI', NULL),
(20, 20, NULL, 'DNC', NULL),
(21, 21, 13, 'MSO', NULL),
(22, 22, 6, 'GPIO6', NULL),
(23, 23, 14, 'SCLK', NULL),
(24, 24, 10, 'CE0', NULL),
(25, 25, NULL, 'DNC', NULL),
(26, 26, 11, 'CE1', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `gpio_ports`
--
ALTER TABLE `gpio_ports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `gpio_ports`
--
ALTER TABLE `gpio_ports`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
