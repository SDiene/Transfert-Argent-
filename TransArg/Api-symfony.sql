-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 27 Juillet 2019 à 13:24
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Api-symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `numerocompte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id`, `numerocompte`) VALUES
(1, 2520),
(2, 1258469);

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `montant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190724093120', '2019-07-24 09:34:09'),
('20190724095713', '2019-07-24 09:57:32'),
('20190724100924', '2019-07-24 10:09:51'),
('20190727091935', '2019-07-27 10:39:59'),
('20190727125712', '2019-07-27 12:57:37'),
('20190727130246', '2019-07-27 13:02:55'),
('20190727130446', '2019-07-27 13:04:56'),
('20190727130724', '2019-07-27 13:07:40'),
('20190727131330', '2019-07-27 13:13:37'),
('20190727131732', '2019-07-27 13:17:43'),
('20190727132001', '2019-07-27 13:20:07'),
('20190727132255', '2019-07-27 13:23:06');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `nomentreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ninea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `compte_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `depot_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `datetransaction` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `transaction`
--

INSERT INTO `transaction` (`id`, `datetransaction`) VALUES
(1, '2010-07-03'),
(2, '2012-08-05'),
(3, '2011-09-01'),
(4, '2014-11-06'),
(5, '2014-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `nom`, `prenom`, `transaction_id`) VALUES
(1, 'diene@', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=6,p=1$BlgaXKpn98/CsTusNa63Dg$r1d0WPw1VQz33B/IgIgVKPghzapwajDk/DaiU43XWsU', 'fall', 'moussa', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_32FFA373F2C56620` (`compte_id`),
  ADD KEY `IDX_32FFA373A76ED395` (`user_id`),
  ADD KEY `IDX_32FFA3738510D4DE` (`depot_id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD KEY `IDX_8D93D6492FC0CB0F` (`transaction_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `depot`
--
ALTER TABLE `depot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD CONSTRAINT `FK_32FFA3738510D4DE` FOREIGN KEY (`depot_id`) REFERENCES `depot` (`id`),
  ADD CONSTRAINT `FK_32FFA373A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_32FFA373F2C56620` FOREIGN KEY (`compte_id`) REFERENCES `compte` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6492FC0CB0F` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
