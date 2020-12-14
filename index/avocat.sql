-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 nov. 2020 à 00:48
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `avocat`
--

-- --------------------------------------------------------

--
-- Structure de la table `avocatrapide`
--

CREATE TABLE `avocatrapide` (
  `id` int(11) NOT NULL,
  `preocupation` varchar(50) NOT NULL,
  `lois` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avocatrapide`
--

INSERT INTO `avocatrapide` (`id`, `preocupation`, `lois`) VALUES
(1, 'mariage', 'zertyuiopwxcvbn,;:\r\nxcvbn,;:\r\nwxcvbn\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consectetur consequuntur dolores\r\n    ducimus eligendi eveniet expedita facere incidunt natus quam quibusdam quidem, repellat sed sunt tempore voluptatem?\r\n    Eligendi, ipsa!'),
(2, 'divorce ', 'sdjk\r\nwxcvbn,;\r\nsdfghjk\r\nAperiam autem beatae consequuntur cum dicta eligendi eum ex fugiat laboriosam molestiae neque numquam quaerat\r\n    quidem similique sint, sunt, vitae voluptatem! Assumenda earum est eveniet exercitationem facilis iusto recusandae\r\n    voluptas?'),
(3, 'mariage legale', 'ertyuio\r\nsdfghjk\r\nsdfghjk\r\nCupiditate in minus quas quis ut? Commodi consequatur magnam nam quidem sapiente sequi sit veritatis voluptatem!\r\n    Dolore earum inventore nemo quaerat sequi? Doloremque earum ipsam ipsum, quidem ratione sapiente vero!'),
(4, 'mariage coutumier', 'zertyuiop\r\nsdfghjkl\r\ndfghj\r\nA amet aperiam, aspernatur assumenda culpa dolores doloribus eaque esse harum, itaque labore magnam magni minus\r\n    molestias obcaecati optio pariatur, sapiente similique vero voluptates? Ad consectetur illum labore nobis quia.'),
(5, 'separation de bien', 'ertyuio\r\ndfgfgj\r\nzertyuio\r\nsdfk\r\nAutem consequuntur cupiditate debitis dolore dolorem est, et eveniet exercitationem fugit hic in ipsam labore\r\n    obcaecati omnis, optio praesentium quae quibusdam recusandae reiciendis rem repudiandae sed sequi ut. Ex, expedita!'),
(6, 'divorce demarches', 'zertyuio\r\nsdfghjkl\r\nzertyui\r\nAliquam, architecto aspernatur at cum delectus distinctio doloremque doloribus earum exercitationem facilis fugiat\r\n    ipsa ipsam labore maiores molestias nulla odio porro praesentium reprehenderit repudiandae rerum sunt temporibus\r\n    tenetur, totam ut.'),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, 'titre foncier', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consectetur consequuntur dolores\r\n    ducimus eligendi eveniet expedita facere incidunt natus quam quibusdam quidem, repellat sed sunt tempore voluptatem?\r\n    Eligendi, ipsa!\r\n</div>'),
(12, 'titre foncier', 'Nouve enregistrement Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consectetur consequuntur dolores\r\n    ducimus eligendi eveniet expedita facere incidunt natus quam quibusdam quidem, repellat sed sunt tempore voluptatem?\r\n    Eligendi, ipsa!\r\n</div>');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_ar` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `raison` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type_rdv` varchar(20) NOT NULL,
  `email_avocat_rdv` varchar(30) NOT NULL,
  `code_rdv` varchar(30) NOT NULL,
  `pres_code` varchar(30) NOT NULL,
  `specialite` text NOT NULL,
  `date_rdv` date DEFAULT NULL,
  `statut` varchar(2) NOT NULL,
  `fonction` varchar(10) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_ar`, `nom`, `tel`, `email`, `raison`, `description`, `type_rdv`, `email_avocat_rdv`, `code_rdv`, `pres_code`, `specialite`, `date_rdv`, `statut`, `fonction`, `pays`, `ville`) VALUES
(1, 'kira', '53136858', 'kira@gmail.com', 'titre foncier', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consectetur consequuntur dolores\r\n    ducimus eligendi eveniet expedita facere incidunt natus quam quibusdam quidem, repellat sed sunt tempore voluptatem?\r\n    Eligendi, ipsa!', 'en ligne (10.000Fr)', 'morelle@gmail.com', 'AR_45480', '', '', '2020-11-11', 'P', 'users', 'Ghana', ''),
(2, 'mark Lewis', '35667788', 'mark@gmail.com', 'divorce', 'Aperiam autem beatae consequuntur cum dicta eligendi eum ex fugiat laboriosam molestiae neque numquam quaerat\r\n    quidem similique sint, sunt, vitae voluptatem! Assumenda earum est eveniet exercitationem facilis iusto recusandae\r\n    voluptas?', 'en ligne (10.000Fr)', 'morelle@gmail.com', 'AR_50378', '', '', '2020-11-11', 'P', 'users', 'Ivory Coast', 'bonoa'),
(3, 'morelle', '', 'morelle@gmail.com', '', '', '', '', 'avocat@2932', '', 'divorce,titre foncier,loyer', NULL, '', 'avocat', 'Ivory Coast', 'abidjan'),
(4, 'soro ', '', 'soro@gmail.com', '', '', '', '', 'avocat@4045', '', 'divorce,loyer', NULL, '', 'avocat', 'Ivory Coast', 'daloa'),
(5, 'ines', '34053194', 'kira@gmail.com', 'un conseil sur le choix  de regime de mariage', 'Aliquam, architecto aspernatur at cum delectus distinctio doloremque doloribus earum exercitationem facilis fugiat\r\n    ipsa ipsam labore maiores molestias nulla odio porro praesentium reprehenderit repudiandae rerum sunt temporibus\r\n    tenetur, totam ut.', 'presentiel (50.000)', 'igwe@gmail.com', '', 'ines-AR_6415', '', '2020-11-11', 'P', 'users', 'Ghana', 'kumassi'),
(6, 'ada', '', 'ada@gmail.com', '', '', '', '', 'avocat@8099', '', 'sante,marriage', NULL, '', 'avocat', 'Ghana', 'accra'),
(7, 'igwe', '', 'igwe@gmail.com', '', '', '', '', 'avocat@3748', '', 'divorce,titre foncier,loyer', NULL, '', 'avocat', 'Ghana', 'kumassi'),
(8, 'gloria', '3487654', 'gloria@gmail.com', 'conseil', 'sdfghjklmù', 'en ligne (10.000Fr)', 'morelle@gmail.com', 'AR_85711', '', '', '2020-11-11', 'P', 'users', 'Benin', 'accra');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `message`, `date`) VALUES
(1, 'mireille@gmail.com', 'davila@gmail.com', 'salut mimi', '2020-10-23 22:26:33'),
(2, 'davila@gmail.com', 'mireille@gmail.com', 'ouai on dit quoi ?', '2020-10-23 22:27:04'),
(3, 'momo@momo', 'assatou@gmail.com', 'salut', '2020-10-24 09:50:04'),
(4, 'amed@amed', 'momo@momo', 'chui laa monsieur l\'avocat', '2020-10-24 10:04:13'),
(5, 'momo@momo', 'amed@amed', 'comment allez vous', '2020-10-24 10:04:53'),
(6, 'amed@amed', 'momo@momo', 'bonjour morelle, tla?', '2020-10-24 14:31:55'),
(7, 'ariane@gmail.com', 'dfghjkl@cvn', 'dre', '2020-10-24 22:48:58'),
(8, 'ariane@gmail.com', 'dfghjkl@cvn', 'salut andre', '2020-10-24 22:49:09'),
(9, 'dfghjkl@cvn', 'ariane@gmail.com', 'oui comment tu vas un bay hai', '2020-10-24 22:49:30'),
(10, 'eve@eve', 'eli@eli', 'bonjour', '2020-10-25 22:21:26'),
(11, 'eli@eli', 'eve@eve', 'comment allez vous?', '2020-10-25 22:21:51'),
(12, 'valerie@gmail.com', 'ami@ami', 'Bonjour mademoiselle comment allez vous', '2020-10-26 16:31:11'),
(13, 'valerie@gmail.com', 'ami@ami', 'Bonjour monsieur ami', '2020-10-26 16:32:49'),
(14, 'ami@ami', 'sahra@gmail.com', 'bonjour ami', '2020-10-26 16:36:11'),
(15, 'sahra@gmail.com', 'ami@ami', 'bonjour cc comment tu vas', '2020-10-26 16:36:32'),
(16, 'ami@ami', 'samuel', 'bonjour samuel', '2020-10-26 16:54:27'),
(17, 'samuel@gmail.com', 'ami@ami', 'cc', '2020-10-26 16:57:54'),
(18, 'samuel@gmail.com', 'ami@ami', 'bonjour, monsieur vous recevez mon message?', '2020-10-26 17:29:24'),
(19, 'samuel@gmail.com', 'ami@ami', 'Monsieur samuel', '2020-10-26 17:29:42'),
(20, 'samuel@gmail.com', 'ami@ami', 'plutot mon sieur ami desolé', '2020-10-26 17:30:06'),
(21, 'ami@ami', 'samuel@gmail.com', 'oui oui je te recoit samuel, explique moi mueux ta preocupation', '2020-10-26 17:31:49'),
(22, 'ami@ami', 'sahra@gmail.com', 'connecte toi dans deux je suis un peu occupé', '2020-10-26 17:33:13'),
(23, 'samuel@gmail.com', 'ami@ami', 'c\'est a proppos de mon divorce', '2020-10-26 17:33:52'),
(24, 'elodie@gmail.com', 'ami@ami', 'Bonjour monsieur ami, c\'est elodie', '2020-10-26 17:38:15'),
(25, 'ami@ami', 'samuel@gmail.com', 'ok , je t\'ecoute', '2020-10-26 17:38:33'),
(26, 'eve@eve', 'eli@eli', 'je vai bien et toi,', '2020-10-26 17:41:51'),
(27, 'eve@eve', 'eli@eli', 'JE suis de retour monsieur', '2020-10-26 17:46:24'),
(28, 'eli@eli', 'eve@gmail.com', 'gros probleme', '2020-10-26 18:21:18'),
(29, '4', '2', 'Bonjour', '2020-10-27 19:50:03'),
(30, '4', '14', 'le proleme est regler maitenant, youpi', '2020-10-27 19:50:37'),
(31, '14', '4', 'superbe', '2020-10-27 19:52:59'),
(32, '2', '4', 'bonjour monsieur amani', '2020-10-27 21:13:32'),
(33, '3', '11', 'BONJOUR', '2020-10-27 21:22:07'),
(34, '15', '4', 'salut c\'est samuel', '2020-10-27 21:24:05'),
(35, '3', '13', 'bonjour valerie', '2020-10-28 17:01:24'),
(36, '13', '3', 'onjour comment allez vous', '2020-10-28 17:02:19'),
(37, '4', '16', 'salut elodie', '2020-10-28 17:06:35'),
(38, '16', '4', 'bonjour monsieur, comment allez vous', '2020-10-28 17:09:20'),
(39, '4', '16', 'rien de grave c\'etait quoi le soucis?', '2020-10-28 17:09:54'),
(40, '19', '21', 'bonjour moise', '2020-10-29 03:49:48'),
(41, '21', '19', 'bonjour madame morelle, comment allez vous', '2020-10-29 03:53:20'),
(42, '19', '21', 'je vais tres ien merci', '2020-10-29 03:53:48'),
(43, '19', '20', 'mark etes vous connecté?', '2020-10-29 03:54:32'),
(44, '19', '21', 'Votre probleme etait lequel?', '2020-10-29 03:55:41'),
(45, '20', '19', 'oui oui je suis la', '2020-10-29 03:57:46'),
(46, '26', '3', 'bonsoir monsieur eli', '2020-11-04 23:22:00'),
(47, '24', '25', 'bonsoir syntia', '2020-11-05 19:11:57'),
(48, '25', '24', 'bonsoir madame', '2020-11-05 19:38:21'),
(49, '19', '51', 'bonjour rachelle', '2020-11-08 16:56:16'),
(50, '51', '19', 'bonjour madame morelle, comment allez vous?', '2020-11-08 17:01:41'),
(51, '19', '51', 'Je vais tres bien, j\'ai besoin de votre aide', '2020-11-08 17:02:40'),
(52, '2', '3', 'bonjour monsieur', '2020-11-11 15:59:39'),
(53, '3', '2', 'bbonjour comment allez vous', '2020-11-11 15:59:54'),
(54, '2', '3', 'je vais tres bien', '2020-11-11 16:00:08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avocatrapide`
--
ALTER TABLE `avocatrapide`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_ar`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avocatrapide`
--
ALTER TABLE `avocatrapide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_ar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
