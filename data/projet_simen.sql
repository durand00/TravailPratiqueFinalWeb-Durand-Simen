-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 22 mai 2021 à 05:34
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_simen`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(19, 'valeur par defaut', 'valeur par defaut', 'valeur par defaut', '$2y$10$FGaynsrGc9SJmQxDIQwO7OaIW79b9DtHgTO09pyyOvZIaAiIEa31i'),
(32, 'googli', 'goll', 'cyriux@gmail.com', '$2y$10$.WSXcR5M9lPnEWoWdsBfU.rOh4YQD125DI/XXLSCq8uhAKDp61Swi'),
(43, '', '', 'cyti@gmail.com', '$2y$10$xVvueWLNSYGm/YLTzTIYkeTSvX00WcuQ0MWheeC8kwpMlgkH5pumm'),
(44, 'hhgfgjjf', 'jdhdgggf', 'hfhfhf@gmail.com', '$2y$10$0o8Ab5KbdxO.ZIBemjaR8.Dluggxmb0GiKFL6GyLgGTXKKzEUTz76'),
(45, 'ggghhh', 'ffdddddffghh', 'fgfcgg@gmail.com', '$2y$10$wwuARqNEU8FRGf4orffWSelWYek4H49Eh/zr4GEIWaFCRZprcVRkG'),
(46, 'ddddddd', 'dddddddddd', 'ddddddd@gmail.com', '$2y$10$GCHvrLMGtpea630K9938hO1dnW9Xj2VACgoVHkUVP8iwXmSpC3xTe'),
(47, 'jojo', 'JOJO', 'jojo@gmail.com', '$2y$10$v24tmEuaqwYhdPTkRN9OZOG4AhRjXcN6OlCrgh3OaPmgx.K8mWdjO'),
(48, 'jojo', 'jojo', 'Jores@gmail.com', '$2y$10$r/xl009AA3xpDiTQYzC86..xDgPxO5yKi7YSaFkEJrCHT5S.RfSKa'),
(54, 'jojo', 'JOJO', 'jojrito@gmail.com', '$2y$10$5xTtzA0USOtSfbKlv38h6.FBISPtqOwglefZhQNp/hsjVvZ.gXwK6'),
(55, 'simen', 'simen', 'durantsimen@gmail.com', '$2y$10$ZjIV/E/KlxJQA.9nGgQ99O5Mn6KtvMvdYdmNhFt7Np5CexvnkRG5.'),
(56, 'durand', 'simen', 'durantsimen6@gmail.com', '$2y$10$4S/afHCHukEcGUnLuDjuh.HkGWwuNSaHfEix6sHsf6cqEZ6WfCqOy'),
(57, 'moi', 'moi', 'moi@gmail.com', '$2y$10$T2iekYAaYCXXFX56vmWhUeKYe.GxG9gxBvB5K0iU7lLEByydJ3p2G'),
(58, 'sdfds', 'sdfsd', 'sdsdf@sffd.com', '$2y$10$TgqiuXejDu8ukC/h8E3OKe/eHjemgpkN03i9RbPf6/MjCRpmgYtfO'),
(59, 'adasdas', 'asda', 'moi@gmai.com', '$2y$10$EFhL4i4NvzPXo9A2AKck1uZ3xneyW0ayzbPc4kVP6bgc3mmy7ZWtm'),
(60, 'jkhad', 'jkhjhk', 'moi1@gmail.com', '$2y$10$qHPR02DpnAGny/onUeb.S.Z5KUDynWDQgvbUiSWUM6pb3XhGuOBTy'),
(61, 'ddad', 'asda', 'durant@gmail.com', '$2y$10$0hAX3BaQuxSteTUC3iwnW.0KavVkaLfnHtAzMvDB6o2kLCFxx2Hbq');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `lieu_visite` varchar(200) NOT NULL,
  `numero_civique` int(200) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `date_arrive` datetime NOT NULL,
  `date_depart` datetime NOT NULL,
  `pathologie` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`id`, `email`, `lieu_visite`, `numero_civique`, `rue`, `ville`, `province`, `date_arrive`, `date_depart`, `pathologie`) VALUES
(4, 'default', 'default', 15, 'default', '', 'default', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 'email', 'alberta', 125, 'cornier', '', 'province', '2021-05-12 15:21:56', '2021-05-12 15:21:56', NULL),
(6, 'email', 'alberta', 125, 'cornier', '', 'province', '2021-05-12 15:21:56', '2021-05-12 15:21:56', NULL),
(7, 'email', 'alberta', 125, 'cornier', '', 'province', '2021-05-12 15:21:56', '2021-05-12 15:21:56', NULL),
(8, 'email', 'alberta', 125, 'cornier', '', 'province', '2021-05-12 15:21:56', '2021-05-12 15:21:56', NULL),
(9, 'email', 'alberta', 125, 'cornier', '', 'province', '2021-05-12 15:21:56', '2021-05-12 15:21:56', NULL),
(10, 'email', 'alberta', 125, 'cornier', '', 'province', '2021-05-12 15:21:56', '2021-05-12 15:21:56', NULL),
(11, 'durantsimen@gmail.com', 'rouyn', 123, 'boulevard', 'rouyn', 'Quebec', '2019-09-12 10:00:00', '2019-09-13 12:00:00', NULL),
(12, 'moi@gmail.com', 'klj', 123, 'kljj', 'jikh', 'Quebec', '2012-09-12 10:00:00', '2012-09-12 12:00:00', NULL),
(13, 'moi@gmail.com', 'jlkjsa', 123, 'kljlk', 'kjkldja', 'Quebec', '2029-09-13 10:00:00', '2029-09-13 12:00:00', NULL),
(14, 'durant@gmail.com', 'dsfd', 123, 'sfsf', 'dfsf', 'Quebec', '2019-09-10 10:00:00', '2019-09-11 12:00:00', NULL),
(15, 'durant@gmail.com', 'das', 123, 'sada', 'asda', 'Quebec', '2019-09-10 12:00:00', '2019-10-10 09:00:00', NULL),
(16, 'durantsimen@gmail.com', 'rouyn', 123, 'ouimet', 'rouyn', 'Nouvelle Colombie', '2019-09-11 10:00:00', '2019-09-12 12:00:00', NULL),
(17, '', 'rouyn', 123, 'rouyn', 'rouyn', 'Quebec', '2019-09-17 10:00:00', '2019-09-16 12:00:00', NULL),
(18, '', 'rouyn', 123, 'rouyn', 'rouyn', 'Quebec', '2019-09-10 12:30:00', '2019-09-14 11:25:00', NULL),
(19, 'moi@gmail.com', 'rsfd', 123, 'dfsf', 'sdfsd', 'Quebec', '2021-09-17 01:00:00', '2021-09-19 02:30:00', NULL),
(20, 'moi@gmail.com', 'rsdfs', 123, 'sdfds', 'sdfsd', 'Quebec', '2019-09-10 12:00:00', '2019-09-10 13:00:00', 'pathologie'),
(21, 'moi@gmail.com', 'dfsfd', 123, 'sdfds', 'sdfsd', 'Quebec', '2019-09-10 13:00:00', '2019-09-10 10:00:00', ''),
(22, 'moi@gmail.com', 'sddas', 123, 'sada', 'asda', 'Quebec', '2019-09-10 10:00:00', '2019-10-11 12:00:00', ''),
(23, 'moi@gmail.com', 'ads', 123, 'asd', 'sada', 'Quebec', '2019-09-10 10:00:00', '2019-09-11 09:00:00', ''),
(24, 'moi@gmail.com', 'sdfasf', 123, 'sdfs', 'sfsd', 'Quebec', '2021-09-17 10:00:00', '2021-09-18 11:00:00', ''),
(25, 'moi@gmail.com', 'fsdfd', 123, 'sfd', 'dsfsd', 'Quebec', '2019-03-15 10:00:00', '2019-03-17 12:00:00', ''),
(26, 'moi@gmail.com', '', 123, 'dsfsd', 'dfsdfds', 'Quebec', '2019-09-10 10:00:00', '2019-09-11 12:00:00', ''),
(27, 'moi@gmail.com', 'asdas', 123, 'asda', 'sadas', 'Quebec', '2019-09-13 10:00:00', '2019-09-13 12:00:00', ''),
(28, 'moi@gmail.com', 'adsdas', 123, 'dasd', 'asdad', 'Quebec', '2019-09-12 10:00:00', '2019-09-12 12:00:00', ''),
(29, 'moi@gmail.com', 'ghfhg', 123, 'fgdfgd', 'hgfhfhg', 'Quebec', '2019-09-11 10:00:00', '2019-09-12 11:00:00', ''),
(30, 'moi@gmail.com', 'sdfsd', 123, 'sdfsdf', 'dssdsd', 'Quebec', '2019-09-11 10:00:00', '2019-09-12 08:00:00', ''),
(31, 'moi@gmail.com', 'fdsdf', 123, 'ssdf', 'fgdf', 'Quebec', '2019-09-11 10:00:00', '2019-09-12 11:00:00', ''),
(32, 'moi@gmail.com', 'sdfds', 123, 'sdfsd', 'sdfd', 'Quebec', '2019-09-11 10:00:00', '2019-09-12 11:00:00', ''),
(33, 'moi@gmail.com', 'jhkh', 123, 'ksjdk', 'kjhds', 'Quebec', '2019-09-11 10:00:00', '2019-08-11 11:00:00', ''),
(34, 'moi@gmail.com', 'sdasd', 123, 'dsdsa', 'dsad', 'Quebec', '2019-09-12 10:00:00', '2019-09-11 11:00:00', ''),
(35, 'durantsimen@gmail.com', 'adsads', 123, 'adsa', 'asdas', 'Quebec', '2019-09-12 12:00:00', '2019-09-11 11:00:00', ''),
(36, 'durantsimen@gmail.com', 'sad', 123, 'asdsa', 'ads', 'Quebec', '2019-09-11 11:00:00', '2019-09-12 10:00:00', ''),
(37, 'durantsimen@gmail.com', 'klsdj', 123, 'kljsdlj', 'kljlsdj', 'Quebec', '2019-09-11 10:00:00', '2019-09-12 11:00:00', ''),
(38, 'moi@gmail.com', 'asds', 123, 'sdfsd', 'dsfd', 'Quebec', '2019-09-18 10:00:00', '2019-09-12 11:00:00', ''),
(39, 'moi@gmail.com', 'adasd', 123, 'kljklj', 'jkh', 'Quebec', '2019-09-18 11:00:00', '2019-09-19 10:00:00', ''),
(40, 'moi@gmail.com', 'adsa', 123, 'dfd/', 'dasd', 'Quebec', '2019-09-10 11:00:00', '2019-09-11 10:00:00', ''),
(41, 'durant@gmail.com', 'sdds', 123, 'asdas', 'ads', 'Quebec', '2010-09-10 10:00:00', '2019-09-12 10:00:00', NULL),
(42, 'durant@gmail.com', 'dsf', 123, 'dsf', 'dsf', 'Quebec', '2019-09-10 11:00:00', '2019-09-22 12:00:00', ''),
(43, 'durant@gmail.com', 'sdsfds', 123, 'fsd', 'dsfd', 'Quebec', '2019-09-10 22:00:00', '2019-09-20 10:00:00', ''),
(44, 'durant@gmail.com', 'dfdfs/', 123, 'sdfs', 'fsdfd', 'Quebec', '2019-09-20 10:00:00', '2019-09-21 11:00:00', ''),
(45, 'durant@gmail.com', 'sdf', 123, 'fsd', 'dfsd', 'Quebec', '2019-09-10 19:00:00', '2019-09-12 10:00:00', ''),
(46, 'durant@gmail.com', 'SDFSD', 123, 'KJSKLJ', 'KSDJL', 'Quebec', '2019-09-10 10:00:00', '2019-09-10 19:00:00', ''),
(47, 'durant@gmail.com', 'HKJHJKS', 123, 'KLJKLL', 'KHKLJH', 'Quebec', '2019-09-10 11:00:00', '2019-09-22 10:00:00', ''),
(48, 'durant@gmail.com', 'SDFDS', 123, 'SDF', 'DFS', 'Quebec', '2019-09-10 11:00:00', '2019-09-11 11:00:00', ''),
(49, 'durant@gmail.com', 'ADDSA', 123, 'FSDDF', 'DSFDS', 'Quebec', '2019-09-10 11:00:00', '2019-09-11 11:00:00', ''),
(50, 'durant@gmail.com', 'dsadsa', 123, 'sdfsd', 'sdfsd', 'Quebec', '2019-09-10 10:00:00', '2019-09-11 11:00:00', ''),
(51, 'durant@gmail.com', 'ASD', 123, 'SDSA', 'SAD', 'Quebec', '2019-09-10 11:00:00', '2019-09-11 10:00:00', ''),
(52, 'durant@gmail.com', 'uhjkh', 123, 'jhkj', 'jkh', 'Quebec', '2019-09-11 11:00:00', '2019-09-10 10:00:00', ''),
(53, 'durant@gmail.com', 'dads', 123, 'dds', 'sdda', 'Quebec', '2019-09-10 11:00:00', '2019-09-11 11:00:00', 'pathologie'),
(54, 'durant@gmail.com', 'sdfsd', 123, 'dsf', 'sfd', 'Quebec', '2019-09-10 11:00:00', '2019-09-12 12:00:00', 'oui'),
(55, 'durant@gmail.com', 'sdfsd', 123, 'dsdf', 'sdfd', 'Quebec', '2019-09-11 11:00:00', '2019-09-12 10:00:00', 'oui'),
(56, 'durant@gmail.com', 'sasd', 123, 'asadas', 'dsdasa', 'Quebec', '2019-09-11 11:00:00', '2019-09-12 12:00:00', 'non'),
(57, 'durant@gmail.com', 'sfsd', 23, 'sdfs', 'sdfsd', 'Quebec', '2019-09-10 11:00:00', '2019-09-12 12:00:00', 'oui'),
(58, 'durant@gmail.com', 'sdf', 234, 'sdfs', 'fsfd', 'Quebec', '2019-09-10 10:00:00', '2019-09-10 10:00:00', 'non'),
(59, 'durant@gmail.com', 'sdfsd', 345, 'sdfd', 'sdffds', 'Quebec', '2019-09-10 11:00:00', '2019-09-10 10:00:00', 'oui'),
(60, 'durant@gmail.com', 'dsfd', 125, 'sdfs', 'dsffds', 'Quebec', '2019-09-10 11:00:00', '2019-09-10 10:00:00', 'oui'),
(61, 'durant@gmail.com', 'khjkh', 123, 'kljklj', 'klhklj', 'Quebec', '2019-09-10 11:00:00', '2019-09-10 12:00:00', 'oui'),
(62, 'durant@gmail.com', 'sdfds', 346, 'dfs', 'dsdf', 'Quebec', '2019-09-10 10:00:00', '2019-09-10 11:00:00', 'oui'),
(63, 'durant@gmail.com', 'jkh', 87, 'jkhk', 'jkhjkh', 'Quebec', '2019-09-10 11:00:00', '2019-09-10 12:00:00', 'non'),
(64, 'durant@gmail.com', 'sdasd', 123, 'asda', 'adsa', 'Quebec', '2019-09-11 11:00:00', '2019-09-12 09:00:00', 'non'),
(65, 'durant@gmail.com', 'sdfd', 123, 'klj', 'sfd', 'Quebec', '2019-09-15 10:00:00', '2019-09-16 11:00:00', 'oui'),
(66, 'moi@gmail.com', 'asd', 123, 'asd', 'asd', 'Quebec', '2019-09-10 11:00:00', '2019-09-11 12:00:00', 'oui'),
(67, 'moi@gmail.com', 'dasd', 123, 'dassd', 'asdsa', 'Quebec', '2019-09-18 10:00:00', '2019-09-10 11:00:00', 'oui'),
(68, 'moi@gmail.com', 'rouyn', 123, 'rouyn', 'rouyn', 'Nouvelle Colombie', '2019-09-10 11:00:00', '2019-09-11 10:00:00', 'non'),
(69, 'moi@gmail.com', 'sdsa', 123, 'kjlkjk', ';lk;', 'Quebec', '2019-09-10 10:00:00', '2019-09-11 11:00:00', 'oui'),
(70, 'moi@gmail.com', 'asdad', 123, 'sdf', 'sdfs', 'Ontarion', '2091-09-11 10:00:00', '2091-09-12 22:00:00', 'non');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
