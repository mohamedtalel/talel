-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 avr. 2019 à 21:23
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ahedprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartefidelite`
--

CREATE TABLE `cartefidelite` (
  `num` int(11) NOT NULL,
  `identifiant` int(11) DEFAULT NULL,
  `pts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cartefidelite`
--

INSERT INTO `cartefidelite` (`num`, `identifiant`, `pts`) VALUES
(18, 12, NULL),
(19, 52, NULL),
(20, 21, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(30) NOT NULL,
  `nom_categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'smart phone'),
(2, 'ordinateur'),
(3, 'jeux video'),
(4, 'accessoire');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `fidelite` varchar(255) DEFAULT 'NON'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`identifiant`, `nom`, `prenom`, `sexe`, `age`, `email`, `mdp`, `adresse`, `fidelite`) VALUES
(33, 'klmk', 'aaaaaaaaaaa', 'male', 21, '', '', '123456789', 'lmlmlm'),
(34, 'amine', 'mbarki', 'male', 21, 'amine.mbarki@esprit.tn', 'amine111111', 'cedria', ''),
(39, 'aaa', 'bbb', 'male', 54, 'aaa.cbbb@gmail.com', 'aaaaaaaa', 'kef', 'o'),
(40, 'aaa', 'bbb', 'male', 54, 'aaa.cbbb@gmail.com', '123456789', 'kef', 'o'),
(43, 'dklaz', 'bbb', 'male', 0, 'nkl@sdsd.com', 'aaaaaaaaa', '', 'o'),
(44, 'aaa', 'bbb', 'male', 0, 'aaa.cbbb@gmail.com', 'aaaaaaaaa', 'cedria', 'o'),
(54, 'aaaaaaaa', 'aaaaaaaaa', 'male', 25, 'zied.zied@esprit.tn', 'aaaaaaaaaa', 'aasasa', 'o'),
(55, 'mouhamed', 'ahed', 'male', 24, 'mouhamed.ahed@esprit.tn', 'aaaaa', 'qsdfujjjjjjjjjjjjjj', ''),
(56, 'talel', 'dhawi', 'femele', 888, 'mouhamed.ahed@esprit.tn', '123', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(57, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '123', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(58, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(59, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(60, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(61, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(62, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(63, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim'),
(64, 'aefqAFzqrgzegf', 'rrrs', 'male', 888, 'ahedmouhhhamed@gmail.com', '', 'qsdfujjjjjjjjjjjjjj', 'bhim');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID_commande` int(11) NOT NULL,
  `Montant` double NOT NULL,
  `Paiement` varchar(100) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `ID_produit` int(11) NOT NULL,
  `Quantity` double NOT NULL,
  `Date` varchar(3000) NOT NULL,
  `ID_Client` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID_commande`, `Montant`, `Paiement`, `Status`, `ID_produit`, `Quantity`, `Date`, `ID_Client`) VALUES
(5569, 3, 'valider', 'En cours', 2, 4, '0000-00-00 00:00:00', 'bl1e1l9lamie0q1o2uj2k2gvve'),
(5570, 3, 'valider', 'Annulee', 2, 3, '0000-00-00 00:00:00', 'bl1e1l9lamie0q1o2uj2k2gvve'),
(5571, 3, 'valider', 'En cours', 2, 3, '20/04/2019 Ã  05:35:24', 'bl1e1l9lamie0q1o2uj2k2gvve'),
(5572, 5, 'valider', 'En cours', 2, 3, '20/04/2019 Ã  18:27:21', 'bl1e1l9lamie0q1o2uj2k2gvve'),
(5573, 231, 'valider', 'En cours', 3, 77, '23/04/2019 Ã  11:37:40', 'bl1e1l9lamie0q1o2uj2k2gvve');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `idforum` int(11) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `idCleint` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`idforum`, `sujet`, `message`, `idCleint`, `date`) VALUES
(2, 'llll', 'mEFNqdmvnQDMVJBDmvjnDVMKJ qdvj qDMVJqdv', '124jscMJQDV4Qdv', '21/21/2019');

-- --------------------------------------------------------

--
-- Structure de la table `forum_answer`
--

CREATE TABLE `forum_answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(0, 2, 'Aziz', 'aziz.belhadjyahia@esprit.tn', 'moplkl', '01/04/19 00:05:02'),
(0, 3, 'Aziz', 'aziz.belhadjyahia@esprit.tn', 'popopopo', '01/04/19 00:05:24'),
(0, 4, 'gadour', 'gadour@gmail.com', 'mpmppppmpmpmm mplk', '01/04/19 00:16:26'),
(0, 5, 'Aziz', 'aziz.belhadjyahia@esprit.tn', 'a ce moment rien ', '01/04/19 00:24:53'),
(0, 6, 'gadour', 'aziz.belhadjyahia@esprit.tn', 'azeaze', '01/04/19 13:38:26'),
(0, 7, 'Sarra', 'Sarra12@gmail.com', 'azeazer', '01/04/19 13:49:27'),
(0, 8, '', '', '', '01/04/19 14:17:13'),
(0, 9, 'Sarra', 'gadour@gmail.com', 'azeaze', '01/04/19 14:19:40'),
(0, 10, 'gadour', 'gadour@gmail.com', 'azeazeaze', '01/04/19 14:19:49'),
(0, 11, 'Sarra', 'Sarra12@gmail.com', 'azeazeaze', '01/04/19 14:20:09'),
(0, 12, 'Aziz', 'aziz.belhadjyahia@esprit.tn', 'la raison que les telephones samsung sont vraiment tres efficace est parceque le fabriquent de cette compagnie est le meilleuir au monde et il fait son tout possible pour affecter toutes les nouvelles fonctionnalitÃ©s dans ce telephone ', '01/04/19 14:21:23'),
(0, 13, 'Aziz', 'aziz.belhadjyahia@esprit.tn', 'azerr', '01/04/19 15:33:00'),
(0, 14, 'gadour', 'Sarra12@gmail.com', 'azee', '01/04/19 15:33:15'),
(0, 15, 'gadour', 'Sarra12@gmail.com', 'azeazeazeazeazeaze', '01/04/19 15:33:39'),
(0, 16, 'gadour', 'aziz.belhadjyahia@esprit.tn', 'azeaze', '01/04/19 15:35:45'),
(0, 17, 'gadour', 'aziz.belhadjyahia@esprit.tn', 'azeaze', '01/04/19 15:37:35'),
(0, 18, 'gadour', 'aziz.belhadjyahia@esprit.tn', 'azeaze', '01/04/19 15:38:08'),
(0, 19, 'Aziz', 'gadour@gmail.com', 'azertyuiop', '01/04/19 15:55:33'),
(0, 20, '', '', '', '01/04/19 15:56:10'),
(0, 21, '', '', '', '01/04/19 15:56:12'),
(0, 22, '', '', '', '01/04/19 15:56:16'),
(0, 23, 'gadour', 'aziz.belhadjyahia@esprit.tn', 'azeazeazeazeazeazeazea ', '01/04/19 15:57:02'),
(2, 2, 'gadour', 'gadour@gmail.com', 'heeey', '01/04/19 16:40:49'),
(14, 2, 'omek ', 'omek ', 'omek ', '04/04/19 15:37:37'),
(14, 3, 'Azizl', 'azaz', 'azaz', '04/04/19 15:47:22'),
(15, 2, '', '', '', '14/04/19 13:40:27'),
(15, 3, '', '', '', '14/04/19 14:06:31'),
(1, 2, 'Azizl', 'Sarra12@gmail.com', 'oui je suis totalement daccord', '15/04/19 20:16:53'),
(1, 3, 'Azizl', 'Sarra12@gmail.com', 'oui je suis totalement daccord', '15/04/19 20:17:42'),
(1, 4, 'gadour', 'gadour@gmail.com', 'ascxdse', '15/04/19 20:35:06'),
(1, 5, 'Sarra', 'Sarra12@gmail.com', 'yuiopo', '15/04/19 20:35:43'),
(1, 6, 'zied', 'ziedbhy@gmail.com', 'azeaze', '15/04/19 20:38:14'),
(4, 2, 'gadour', 'gadour@gmail.com', 'lalala', '19/04/19 12:45:14'),
(4, 3, 'zied', 'ziedbhy@gmail.com', 'vasy', '19/04/19 12:46:17'),
(13, 1, 'Aziz', 'aziz.belhadjyahia@esprit.tn', 'gugjg', '20/04/19 17:36:05');

-- --------------------------------------------------------

--
-- Structure de la table `forum_question`
--

CREATE TABLE `forum_question` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  `datecreation` datetime(6) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `view`, `reply`, `datecreation`, `categories`) VALUES
(1, 'Samsung ', 'le samsung est solide ', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 22, 6, '0000-00-00 00:00:00.000000', 'SmartPhones'),
(4, 'Samsung ', 'samsung est la meilleur marque de telephone', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 47, 3, '0000-00-00 00:00:00.000000', 'SmartPhones'),
(5, 'Samsung ', 'azeaze', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 0, 0, '0000-00-00 00:00:00.000000', 'Composantes'),
(6, 'Asus incompatible avec mes peripheriques', 'AZEAZEAZE', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 0, 0, '0000-00-00 00:00:00.000000', 'SmartPhones'),
(7, 'Asus incompatible avec mes peripheriques', 'AZEAZEAZE', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 0, 0, '0000-00-00 00:00:00.000000', 'SmartPhones'),
(8, 'Asus incompatible avec mes peripheriques', 'AZEAZEAZE', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 0, 0, '0000-00-00 00:00:00.000000', 'SmartPhones'),
(9, 'Asus incompatible avec mes peripheriques', 'AZEAZEAZE', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 0, 0, '0000-00-00 00:00:00.000000', 'SmartPhones'),
(10, 'tunisie', 'azeaze', 'dadi', 'azeaze@ag.aze', 2, 0, '0000-00-00 00:00:00.000000', 'Reclamations'),
(11, '', '', '', '', 0, 0, '0000-00-00 00:00:00.000000', ''),
(12, 'Samsung ', 'azeazeazeaze', 'Aziz', 'aziz.belhadjyahia@esprit.tn', 6, 1, '0000-00-00 00:00:00.000000', 'SmartPhones');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_produit`, `name`, `price`) VALUES
(1, 4, 'pc', 55),
(2, 9, 'phone', 888),
(3, 8, 'tablette ', 77),
(4, 13, 'montre', 888);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `image`, `pname`, `price`) VALUES
(1, 'product2.jpg', 'pc', 55),
(2, 'product3.jpg', 'phone', 888),
(3, 'product4.jpg', 'tablette ', 77),
(4, 'product1.jpg', 'montre', 888);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `reference` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `nom` text NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `prix` double NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `categorie`, `nom`, `couleur`, `image`, `prix`, `stock`, `description`) VALUES
(3, 'pc', 'galaxy s6', 'bleu ciel', 'uphone 8.jpg', 2000, 3, ''),
(4, 'smart phone', 'galaxy s8+', 'noir', 's8+.jpg', 1200, 3, ''),
(5, 'ordinateur', 'omen by hp', 'rouge', 'product7.jpg', 2399, 2, ''),
(6, 'ordinateur', 'omen ', 'noir', 'ach1.PNG', 2599, 2, 'parfait');

-- --------------------------------------------------------

--
-- Structure de la table `rec`
--

CREATE TABLE `rec` (
  `IdClient` int(11) NOT NULL,
  `DateAjout` int(11) NOT NULL,
  `type` datetime NOT NULL,
  `Sujet` varchar(100) NOT NULL,
  `Etat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rec`
--

INSERT INTO `rec` (`IdClient`, `DateAjout`, `type`, `Sujet`, `Etat`) VALUES
(2, 2, '2019-04-09 00:00:00', 'wwww', 'www'),
(55, 4, '0000-00-00 00:00:00', 'qzrgzrqgzqrg', 'non traitee'),
(88, 4, '0000-00-00 00:00:00', 'rgzrgrg', 'non traitee');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `IdReclamation` int(11) NOT NULL,
  `IdClient` int(11) NOT NULL,
  `DateAjout` varchar(3999) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Sujet` varchar(20) NOT NULL,
  `Etat` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`IdReclamation`, `IdClient`, `DateAjout`, `type`, `Sujet`, `Etat`) VALUES
(1000013, 87873, '25/04/2018 ÃƒÂ  23:56:12', 'produits manquant', 'KFE', 'non traitee'),
(1000015, 34567, '2018-05-01', 'plainte service', 'KJG', 'traitee'),
(1000016, 23456, '2018-05-01', 'produits manquant', 'KUKHJKRE', 'traitee'),
(1000017, 57, '04/04/2019 Ã  04:52:37', 'demande facture', 'ahed', '');

-- --------------------------------------------------------

--
-- Structure de la table `requeteass`
--

CREATE TABLE `requeteass` (
  `idReq` int(11) NOT NULL,
  `IdProduit` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `numtel` int(11) NOT NULL,
  `typeC` varchar(11) NOT NULL,
  `DateCrea` date NOT NULL,
  `datefin` date NOT NULL,
  `Objet` varchar(4999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `requeteass`
--

INSERT INTO `requeteass` (`idReq`, `IdProduit`, `Email`, `numtel`, `typeC`, `DateCrea`, `datefin`, `Objet`) VALUES
(123247, 4556, 'hedi@gmail.com', 34567889, 'maintenance', '2018-05-17', '2018-05-25', 'J'),
(123231, 1111, 'souha@esprit.tn', 54483350, 'else', '2018-04-19', '2018-04-25', 'reparation'),
(123246, 1111, 'hjk@esprit.tn', 78348767, 'maintenance', '2018-04-11', '2018-04-27', 'RGTHT'),
(123245, 2222, 'karim@esprit.tn', 49853089, 'maintenance', '2018-04-17', '2018-04-27', 'reparationn'),
(123244, 3333, 'haithem@esprit.tn', 23456889, 'maintenance', '2018-04-26', '2018-04-28', 'restauration'),
(123240, 2222, 'hedi@gmail.com', 87945969, 'maintenance', '2018-04-25', '2018-04-28', 'Assistance'),
(123241, 1111, 'balkiss@esprit.tn', 29229089, 'maintenance', '2018-04-26', '2018-04-27', 'entretien sur un produit'),
(123248, 1000, 'mouhamed.ahed@esprit', 0, 'reparation', '2019-04-11', '2019-04-11', 'hhhh ahed'),
(123249, 523, 'mouhamed.ahed@85', 0, 'tout compri', '2019-12-31', '2019-04-11', 'gde');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123', '2016-04-12 20:57:17', 'Admin'),
(2, 'Amina', 'amina@esprit.tn', 'bbb', '2016-04-12 21:21:42', 'Client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cartefidelite`
--
ALTER TABLE `cartefidelite`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_commande`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`idforum`);

--
-- Index pour la table `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD KEY `a_id` (`a_id`);

--
-- Index pour la table `forum_question`
--
ALTER TABLE `forum_question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`IdClient`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`IdReclamation`);

--
-- Index pour la table `requeteass`
--
ALTER TABLE `requeteass`
  ADD PRIMARY KEY (`idReq`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cartefidelite`
--
ALTER TABLE `cartefidelite`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5574;

--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `idforum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `forum_question`
--
ALTER TABLE `forum_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `rec`
--
ALTER TABLE `rec`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `IdReclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000023;

--
-- AUTO_INCREMENT pour la table `requeteass`
--
ALTER TABLE `requeteass`
  MODIFY `idReq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123250;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
