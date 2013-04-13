-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 14 Avril 2013 à 00:10
-- Version du serveur: 5.5.25
-- Version de PHP: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cakephp`
--

-- --------------------------------------------------------

--
-- Structure de la table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Contenu de la table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 152),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'add', 5, 6),
(5, 2, NULL, NULL, 'edit', 7, 8),
(6, 2, NULL, NULL, 'view', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(9, 8, NULL, NULL, 'display', 15, 16),
(10, 1, NULL, NULL, 'Posts', 18, 31),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 10, NULL, NULL, 'initDB', 29, 30),
(17, 1, NULL, NULL, 'Users', 32, 59),
(18, 17, NULL, NULL, 'index', 33, 34),
(19, 17, NULL, NULL, 'view', 35, 36),
(20, 17, NULL, NULL, 'add', 37, 38),
(21, 17, NULL, NULL, 'edit', 39, 40),
(22, 17, NULL, NULL, 'delete', 41, 42),
(23, 17, NULL, NULL, 'login', 43, 44),
(24, 17, NULL, NULL, 'logout', 45, 46),
(26, 1, NULL, NULL, 'AclExtras', 60, 61),
(27, 1, NULL, NULL, 'DebugKit', 62, 69),
(28, 27, NULL, NULL, 'ToolbarAccess', 63, 68),
(29, 28, NULL, NULL, 'history_state', 64, 65),
(30, 28, NULL, NULL, 'sql_explain', 66, 67),
(32, 1, NULL, NULL, 'Acl', 70, 125),
(33, 32, NULL, NULL, 'Acl', 71, 76),
(34, 33, NULL, NULL, 'index', 72, 73),
(35, 33, NULL, NULL, 'admin_index', 74, 75),
(36, 32, NULL, NULL, 'Acos', 77, 88),
(37, 36, NULL, NULL, 'admin_index', 78, 79),
(38, 36, NULL, NULL, 'admin_empty_acos', 80, 81),
(39, 36, NULL, NULL, 'admin_build_acl', 82, 83),
(40, 36, NULL, NULL, 'admin_prune_acos', 84, 85),
(41, 36, NULL, NULL, 'admin_synchronize', 86, 87),
(42, 32, NULL, NULL, 'Aros', 89, 124),
(43, 42, NULL, NULL, 'admin_index', 90, 91),
(44, 42, NULL, NULL, 'admin_check', 92, 93),
(45, 42, NULL, NULL, 'admin_users', 94, 95),
(46, 42, NULL, NULL, 'admin_update_user_role', 96, 97),
(47, 42, NULL, NULL, 'admin_ajax_role_permissions', 98, 99),
(48, 42, NULL, NULL, 'admin_role_permissions', 100, 101),
(49, 42, NULL, NULL, 'admin_user_permissions', 102, 103),
(50, 42, NULL, NULL, 'admin_empty_permissions', 104, 105),
(51, 42, NULL, NULL, 'admin_clear_user_specific_permissions', 106, 107),
(52, 42, NULL, NULL, 'admin_grant_all_controllers', 108, 109),
(53, 42, NULL, NULL, 'admin_deny_all_controllers', 110, 111),
(54, 42, NULL, NULL, 'admin_get_role_controller_permission', 112, 113),
(55, 42, NULL, NULL, 'admin_grant_role_permission', 114, 115),
(56, 42, NULL, NULL, 'admin_deny_role_permission', 116, 117),
(57, 42, NULL, NULL, 'admin_get_user_controller_permission', 118, 119),
(58, 42, NULL, NULL, 'admin_grant_user_permission', 120, 121),
(59, 42, NULL, NULL, 'admin_deny_user_permission', 122, 123),
(60, 1, NULL, NULL, 'Categories', 126, 137),
(61, 60, NULL, NULL, 'index', 127, 128),
(62, 60, NULL, NULL, 'add', 129, 130),
(63, 60, NULL, NULL, 'edit', 131, 132),
(64, 60, NULL, NULL, 'view', 133, 134),
(65, 60, NULL, NULL, 'delete', 135, 136),
(66, 17, NULL, NULL, 'profil', 47, 48),
(67, 17, NULL, NULL, 'password', 49, 50),
(68, 17, NULL, NULL, 'register_1', 51, 52),
(69, 17, NULL, NULL, 'register_2', 53, 54),
(70, 17, NULL, NULL, 'register_3', 55, 56),
(71, 17, NULL, NULL, 'confirm', 57, 58),
(72, 1, NULL, NULL, 'Spots', 138, 151),
(73, 72, NULL, NULL, 'index', 139, 140),
(74, 72, NULL, NULL, 'add', 141, 142),
(75, 72, NULL, NULL, 'edit', 143, 144),
(76, 72, NULL, NULL, 'view', 145, 146),
(77, 72, NULL, NULL, 'delete', 147, 148),
(78, 72, NULL, NULL, 'find', 149, 150);

-- --------------------------------------------------------

--
-- Structure de la table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Contenu de la table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, NULL, 'Group', 2, NULL, 7, 8),
(3, NULL, 'Group', 3, NULL, 9, 126),
(4, 1, 'User', 4, NULL, 2, 3),
(5, 3, 'User', 5, NULL, 10, 11),
(8, NULL, 'User', 8, NULL, 127, 128),
(9, NULL, 'User', 9, NULL, 129, 130),
(10, 3, 'User', 10, NULL, 12, 13),
(11, 3, 'User', 11, NULL, 14, 15),
(12, 3, 'User', 12, NULL, 16, 17),
(14, 3, 'User', 15, NULL, 18, 19),
(15, 3, 'User', 16, NULL, 20, 21),
(16, 3, 'User', 17, NULL, 22, 23),
(17, 3, 'User', 18, NULL, 24, 25),
(18, 3, 'User', 19, NULL, 26, 27),
(19, 3, 'User', 20, NULL, 28, 29),
(20, 3, 'User', 21, NULL, 30, 31),
(21, 3, 'User', 22, NULL, 32, 33),
(23, 3, 'User', 25, NULL, 34, 35),
(24, 3, 'User', 26, NULL, 36, 37),
(25, 3, 'User', 27, NULL, 38, 39),
(26, 3, 'User', 28, NULL, 40, 41),
(27, 3, 'User', 29, NULL, 42, 43),
(29, 3, 'User', 31, NULL, 108, 109),
(30, 3, 'User', 32, NULL, 112, 113),
(32, NULL, 'User', 41, NULL, 131, 132),
(33, 3, 'User', 51, NULL, 44, 45),
(34, 3, 'User', 52, NULL, 46, 47),
(35, 3, 'User', 53, NULL, 48, 49),
(36, 3, 'User', 54, NULL, 50, 51),
(37, 3, 'User', 55, NULL, 52, 53),
(38, 3, 'User', 56, NULL, 54, 55),
(39, 3, 'User', 57, NULL, 56, 57),
(40, 3, 'User', 58, NULL, 58, 59),
(41, 3, 'User', 59, NULL, 60, 61),
(42, 3, 'User', 60, NULL, 62, 63),
(43, 3, 'User', 61, NULL, 64, 65),
(44, 3, 'User', 62, NULL, 66, 67),
(45, 3, 'User', 63, NULL, 68, 69),
(46, 3, 'User', 64, NULL, 70, 71),
(47, 3, 'User', 65, NULL, 72, 73),
(48, 3, 'User', 66, NULL, 74, 75),
(49, 3, 'User', 67, NULL, 76, 77),
(50, 3, 'User', 68, NULL, 78, 79),
(51, 3, 'User', 69, NULL, 80, 81),
(52, 3, 'User', 70, NULL, 82, 83),
(53, 3, 'User', 71, NULL, 84, 85),
(54, NULL, 'User', 72, NULL, 133, 134),
(55, 3, 'User', 75, NULL, 86, 87),
(56, NULL, 'User', 76, NULL, 135, 136),
(57, NULL, 'User', 77, NULL, 137, 138),
(58, 3, 'User', 78, NULL, 88, 89),
(59, 3, 'User', 79, NULL, 90, 91),
(60, 3, 'User', 80, NULL, 92, 93),
(61, NULL, 'User', 81, NULL, 139, 140),
(62, NULL, 'User', 83, NULL, 141, 142),
(63, NULL, 'User', 84, NULL, 143, 144),
(64, NULL, 'User', 85, NULL, 145, 146),
(65, 3, 'User', 5, NULL, 94, 95),
(66, 1, 'User', 1, 'justclara', 4, 5),
(67, 3, 'User', 7, NULL, 96, 97),
(73, 3, 'User', 13, NULL, 98, 99),
(83, 3, 'User', 23, NULL, 100, 101),
(86, 3, 'User', 26, NULL, 102, 103),
(90, 3, 'User', 30, NULL, 104, 105),
(91, 3, 'User', 31, NULL, 106, 107),
(92, 3, 'User', 32, NULL, 110, 111),
(93, 3, 'User', 33, NULL, 114, 115),
(94, 3, 'User', 34, NULL, 116, 117),
(95, 3, 'User', 35, NULL, 118, 119),
(96, 3, 'User', 36, NULL, 120, 121),
(97, 3, 'User', 37, NULL, 122, 123),
(98, 3, 'User', 38, NULL, 124, 125),
(99, NULL, 'Group', 4, NULL, 147, 148),
(100, NULL, 'Group', 5, NULL, 149, 150);

-- --------------------------------------------------------

--
-- Structure de la table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 1, 10, '1', '1', '1', '1'),
(3, 1, 17, '1', '1', '1', '1'),
(4, 1, 2, '1', '1', '1', '1'),
(5, 1, 8, '1', '1', '1', '1'),
(6, 2, 1, '-1', '-1', '-1', '-1'),
(7, 2, 10, '1', '1', '1', '1'),
(8, 2, 17, '1', '1', '1', '1'),
(9, 2, 2, '1', '1', '1', '1'),
(10, 2, 8, '1', '1', '1', '1'),
(11, 3, 1, '-1', '-1', '-1', '-1'),
(12, 3, 23, '1', '1', '1', '1'),
(14, 3, 18, '1', '1', '1', '1'),
(15, 3, 19, '1', '1', '1', '1'),
(16, 3, 12, '1', '1', '1', '1'),
(17, 3, 11, '1', '1', '1', '1'),
(18, 2, 16, '-1', '-1', '-1', '-1'),
(20, 2, 15, '-1', '-1', '-1', '-1'),
(22, 3, 9, '1', '1', '1', '1'),
(23, 2, 5, '-1', '-1', '-1', '-1'),
(24, 2, 7, '-1', '-1', '-1', '-1'),
(25, 2, 4, '-1', '-1', '-1', '-1'),
(26, 2, 3, '-1', '-1', '-1', '-1'),
(27, 2, 6, '-1', '-1', '-1', '-1'),
(28, 3, 24, '1', '1', '1', '1'),
(30, 2, 20, '-1', '-1', '-1', '-1'),
(31, 3, 21, '1', '1', '1', '1'),
(32, 99, 62, '1', '1', '1', '1'),
(33, 99, 65, '1', '1', '1', '1'),
(34, 99, 63, '1', '1', '1', '1'),
(35, 99, 61, '1', '1', '1', '1'),
(36, 99, 64, '1', '1', '1', '1'),
(37, 99, 9, '1', '1', '1', '1'),
(38, 99, 13, '1', '1', '1', '1'),
(39, 99, 15, '1', '1', '1', '1'),
(40, 99, 14, '1', '1', '1', '1'),
(41, 99, 11, '1', '1', '1', '1'),
(42, 99, 12, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image_id`, `created`, `modifed`) VALUES
(1, 'Dévellopement', 0, '2013-04-12 14:12:11', '0000-00-00 00:00:00'),
(2, 'Création-Web', 0, '2013-04-12 14:14:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=239 ;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Afrique du Sud'),
(3, 'Albanie'),
(4, 'Algerie'),
(5, 'Allemagne'),
(6, 'Andorre'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctique'),
(10, 'Antigua-et-Barbuda'),
(11, 'Antilles neerlandaises'),
(12, 'Arabie saoudite'),
(13, 'Argentine'),
(14, 'Armenie'),
(15, 'Aruba'),
(16, 'Australie'),
(17, 'Autriche'),
(18, 'Azerbaidjan'),
(19, 'Benin'),
(20, 'Bahamas'),
(21, 'Bahrein'),
(22, 'Bangladesh'),
(23, 'Barbade'),
(24, 'Belau'),
(25, 'Belgique'),
(26, 'Belize'),
(27, 'Bermudes'),
(28, 'Bhoutan'),
(29, 'Bielorussie'),
(30, 'Birmanie'),
(31, 'Bolivie'),
(32, 'Bosnie-Herzegovine'),
(33, 'Botswana'),
(34, 'Bresil'),
(35, 'Brunei'),
(36, 'Bulgarie'),
(37, 'Burkina Faso'),
(38, 'Burundi'),
(39, 'Cote d''Ivoire'),
(40, 'Cambodge'),
(41, 'Cameroun'),
(42, 'Canada'),
(43, 'Cap-Vert'),
(44, 'Chili'),
(45, 'Chine'),
(46, 'Chypre'),
(47, 'Colombie'),
(48, 'Comores'),
(49, 'Congo'),
(50, 'Coree du Nord'),
(51, 'Coree du Sud'),
(52, 'Costa Rica'),
(53, 'Croatie'),
(54, 'Cuba'),
(55, 'Danemark'),
(56, 'Djibouti'),
(57, 'Dominique'),
(58, 'Egypte'),
(59, 'Emirats arabes unis'),
(60, 'Equateur'),
(61, 'Erythree'),
(62, 'Espagne'),
(63, 'Estonie'),
(64, 'Etats-Unis'),
(65, 'Ethiopie'),
(66, 'Finlande'),
(67, 'France'),
(68, 'Georgie'),
(69, 'Gabon'),
(70, 'Gambie'),
(71, 'Ghana'),
(72, 'Gibraltar'),
(73, 'Grece'),
(74, 'Grenade'),
(75, 'Groenland'),
(76, 'Guadeloupe'),
(77, 'Guam'),
(78, 'Guatemala'),
(79, 'Guinee'),
(80, 'Guinee equatoriale'),
(81, 'Guinee-Bissao'),
(82, 'Guyana'),
(83, 'Guyane francaise'),
(84, 'Haiti'),
(85, 'Honduras'),
(86, 'Hong Kong'),
(87, 'Hongrie'),
(88, 'Ile Bouvet'),
(89, 'Ile Christmas'),
(90, 'Ile Norfolk'),
(91, 'Iles Cayman'),
(92, 'Iles Cook'),
(93, 'Iles Feroe'),
(94, 'Iles Falkland'),
(95, 'Iles Fidji'),
(96, 'Iles Georgie du Sud et Sandwich du Sud'),
(97, 'Iles Heard et McDonald'),
(98, 'Iles Marshall'),
(99, 'Iles Pitcairn'),
(100, 'Iles Salomon'),
(101, 'Iles Svalbard et Jan Mayen'),
(102, 'Iles Turks-et-Caicos'),
(103, 'Iles Vierges americaines'),
(104, 'Iles Vierges britanniques'),
(105, 'Iles des Cocos (Keeling)'),
(106, 'Iles mineures eloignees des Etats-Unis'),
(107, 'Inde'),
(108, 'Indonesie'),
(109, 'Iran'),
(110, 'Iraq'),
(111, 'Irlande'),
(112, 'Islande'),
(113, 'Israel'),
(114, 'Italie'),
(115, 'Jamaique'),
(116, 'Japon'),
(117, 'Jordanie'),
(118, 'Kazakhstan'),
(119, 'Kenya'),
(120, 'Kirghizistan'),
(121, 'Kiribati'),
(122, 'Koweit'),
(123, 'Laos'),
(124, 'Lesotho'),
(125, 'Lettonie'),
(126, 'Liban'),
(127, 'Liberia'),
(128, 'Libye'),
(129, 'Liechtenstein'),
(130, 'Lituanie'),
(131, 'Luxembourg'),
(132, 'Macao'),
(133, 'Madagascar'),
(134, 'Malaisie'),
(135, 'Malawi'),
(136, 'Maldives'),
(137, 'Mali'),
(138, 'Malte'),
(139, 'Mariannes du Nord'),
(140, 'Maroc'),
(141, 'Martinique'),
(142, 'Maurice'),
(143, 'Mauritanie'),
(144, 'Mayotte'),
(145, 'Mexique'),
(146, 'Micronesie'),
(147, 'Moldavie'),
(148, 'Monaco'),
(149, 'Mongolie'),
(150, 'Montserrat'),
(151, 'Mozambique'),
(152, 'Nepal'),
(153, 'Namibie'),
(154, 'Nauru'),
(155, 'Nicaragua'),
(156, 'Niger'),
(157, 'Nigeria'),
(158, 'Nioue'),
(159, 'Norvege'),
(160, 'Nouvelle-Caledonie'),
(161, 'Nouvelle-Zelande'),
(162, 'Oman'),
(163, 'Ouganda'),
(164, 'Ouzbekistan'),
(165, 'Perou'),
(166, 'Pakistan'),
(167, 'Panama'),
(168, 'Papouasie-Nouvelle-Guinee'),
(169, 'Paraguay'),
(170, 'Pays-Bas'),
(171, 'Philippines'),
(172, 'Pologne'),
(173, 'Polynesie francaise'),
(174, 'Porto Rico'),
(175, 'Portugal'),
(176, 'Qatar'),
(177, 'Republique centrafricaine'),
(178, 'Republique democratique du Congo'),
(179, 'Republique dominicaine'),
(180, 'Republique tcheque'),
(181, 'Reunion'),
(182, 'Roumanie'),
(183, 'Royaume-Uni'),
(184, 'Russie'),
(185, 'Rwanda'),
(186, 'Senegal'),
(187, 'Sahara occidental'),
(188, 'Saint-Christophe-et-Nieves'),
(189, 'Saint-Marin'),
(190, 'Saint-Pierre-et-Miquelon'),
(191, 'Saint-Siege '),
(192, 'Saint-Vincent-et-les-Grenadines'),
(193, 'Sainte-Helene'),
(194, 'Sainte-Lucie'),
(195, 'Salvador'),
(196, 'Samoa'),
(197, 'Samoa americaines'),
(198, 'Sao Tome-et-Principe'),
(199, 'Seychelles'),
(200, 'Sierra Leone'),
(201, 'Singapour'),
(202, 'Slovenie'),
(203, 'Slovaquie'),
(204, 'Somalie'),
(205, 'Soudan'),
(206, 'Sri Lanka'),
(207, 'Suede'),
(208, 'Suisse'),
(209, 'Suriname'),
(210, 'Swaziland'),
(211, 'Syrie'),
(212, 'Taiwan'),
(213, 'Tadjikistan'),
(214, 'Tanzanie'),
(215, 'Tchad'),
(216, 'Terres australes francaises'),
(217, 'Territoire britannique de l''Ocean Indien'),
(218, 'Thailande'),
(219, 'Timor Oriental'),
(220, 'Togo'),
(221, 'Tokelaou'),
(222, 'Tonga'),
(223, 'Trinite-et-Tobago'),
(224, 'Tunisie'),
(225, 'Turkmenistan'),
(226, 'Turquie'),
(227, 'Tuvalu'),
(228, 'Ukraine'),
(229, 'Uruguay'),
(230, 'Vanuatu'),
(231, 'Venezuela'),
(232, 'Viet Nam'),
(233, 'Wallis-et-Futuna'),
(234, 'Yemen'),
(235, 'Yougoslavie'),
(236, 'Zambie'),
(237, 'Zimbabwe'),
(238, 'ex-Republique yougoslave de Macedoine');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`) VALUES
(1, 'Administareurs', '2013-04-11 18:10:03'),
(2, 'Modérateurs', '2013-04-11 18:13:46'),
(3, 'Riders', '2013-04-11 18:13:52'),
(4, 'Shops', '2013-04-13 21:42:58'),
(5, 'Associations', '2013-04-14 00:02:31');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image_id`, `user_id`, `category_id`, `created`, `modifed`) VALUES
(1, 'The title', 'the-title', 'This is the post body.', 0, 0, 0, '2013-04-11 17:00:37', '0000-00-00 00:00:00'),
(2, 'test article', 'test-article', 'test', 0, 0, 0, '2013-04-12 13:56:32', '0000-00-00 00:00:00'),
(3, 'encore un autre article test', 'encore-un-autre-article-test', '<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur! <cite>justclara</cite></blockquote>\r\n\r\n<div style="page-break-after: always;"><span style="display:none">&nbsp;</span></div>\r\n\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</strong></p>\r\n\r\n<p><u><em><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</strong></em></u></p>\r\n\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</h3>\r\n\r\n<p><span style="font-family:lucida sans unicode,lucida grande,sans-serif"><span style="font-size:12px"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</strong></span></span></p>\r\n\r\n<div>&nbsp;</div>\r\n', 0, 0, 1, '2013-04-12 13:57:24', '0000-00-00 00:00:00'),
(4, 'Blog post', 'blog-post', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, obcaecati, voluptate, nihil animi optio laboriosam porro nam perspiciatis voluptas aperiam consequuntur excepturi aliquam magni voluptatem sunt tenetur iste minima consequatur!</p>\r\n', 0, 0, 1, '2013-04-12 13:58:41', '0000-00-00 00:00:00'),
(5, 'Test D''article', 'test-d-article', '<p>Test D&#39;article</p>\r\n\r\n<p><img alt="" src="/files/images/400_F_33032145_JOwJfBGJaQjSjfy0XPu1yhOlW6zxDsCN.jpg" style="height:100px; width:100px" /></p>\r\n', 0, 0, 2, '2013-04-12 14:00:58', '0000-00-00 00:00:00'),
(6, 'test ck', 'test-ck', '<p>Test de code via CKEditor.</p>\r\n\r\n<pre class="brush:xml;">\r\n&lt;div class=&quot;posts index&quot;&gt;\r\n	&lt;h1&gt;Editer l&#39;Article&lt;/h1&gt;\r\n	&lt;?php echo $this-&gt;Form-&gt;create(&#39;Post&#39;); ?&gt;\r\n		&lt;?php echo $this-&gt;Form-&gt;input(&#39;title&#39;,array(&#39;label&#39;=&gt;&#39;Titre&#39;));?&gt;\r\n		&lt;?php //echo $this-&gt;Form-&gt;input(&#39;slug&#39;,array(&#39;label&#39;=&gt;&#39;URL simplifi&eacute;&#39;));?&gt;\r\n		&lt;?php echo $this-&gt;Form-&gt;input(&#39;category_id&#39;,array(&#39;label&#39;=&gt;&#39;Cat&eacute;gorie&#39;));?&gt;\r\n		&lt;?php //echo $this-&gt;Form-&gt;input(&#39;content&#39;,array(&#39;label&#39;=&gt;&#39;Contenu&#39;,&#39;type&#39;=&gt;&#39;textarea&#39;));?&gt;\r\n		&lt;?php echo $this-&gt;Form-&gt;input(&#39;Post.content&#39;, array(&#39;label&#39;=&gt;false, &#39;cols&#39;=&gt;&#39;1&#39;, &#39;rows&#39;=&gt;&#39;1&#39;));?&gt;\r\n		&lt;?php echo $this-&gt;Ck-&gt;load(&#39;Post.content&#39;);?&gt;\r\n	&lt;?php echo $this-&gt;Form-&gt;end(&#39;Editer&#39;); ?&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;actions&quot;&gt;\r\n	&lt;ul&gt;\r\n		&lt;li&gt;&lt;?php echo $this-&gt;Html-&gt;link(&quot;Lister les Articles&quot;,array(&#39;action&#39;=&gt;&#39;index&#39;,&#39;controller&#39;=&gt;&#39;posts&#39;) ) ; ?&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;?php echo $this-&gt;Html-&gt;link(&quot;Ajouter un Article&quot;,array(&#39;action&#39;=&gt;&#39;add&#39;,&#39;controller&#39;=&gt;&#39;posts&#39;) ) ; ?&gt;&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n&lt;/div&gt;</pre>\r\n\r\n<p>Code en Javascript:</p>\r\n\r\n<pre class="brush:jscript;">\r\n$(document).ready(function() {\r\nSyntaxHighlighter.config.bloggerMode = true;\r\nSyntaxHighlighter.config.tagName = &quot;pre&quot;;\r\nSyntaxHighlighter.config.strings.expandSource = &quot;+ expand source&quot;;\r\nSyntaxHighlighter.config.strings.copyToClipboard = &quot;copy&quot;;\r\nSyntaxHighlighter.config.strings.copyToClipboardConfirmation = &quot;The code is in your clipboard now&quot;;\r\nSyntaxHighlighter.config.stripBrs = false;\r\nSyntaxHighlighter.config.strings.print = &quot;print&quot;;\r\nSyntaxHighlighter.defaults[&#39;toolbar&#39;] = true;\r\nSyntaxHighlighter.all();\r\n});\r\n</pre>\r\n\r\n<p>Voil&agrave; le r&eacute;sultat</p>\r\n', 0, 0, 1, '2013-04-13 15:28:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `sexes`
--

CREATE TABLE `sexes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `sexes`
--

INSERT INTO `sexes` (`id`, `name`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Transgenre');

-- --------------------------------------------------------

--
-- Structure de la table `spots`
--

CREATE TABLE `spots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `likes` bigint(20) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `added` datetime NOT NULL,
  `country_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `sexe_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `activation_key` varchar(255) NOT NULL,
  `activate` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `firstname`, `lastname`, `birthday`, `sexe_id`, `city`, `country_id`, `facebook`, `twitter`, `google`, `email`, `ip`, `activation_key`, `activate`, `description`, `created`) VALUES
(1, 1, 'justclara', 'd256e770df3e8def374d2e987a82095600ea0b9d', 'clara', 'holderbaum', '0000-00-00', 0, '0', 0, '', '', '', '', '', '1', 0, '', '2013-04-11 20:05:15'),
(5, 2, 'Modérateur', 'd256e770df3e8def374d2e987a82095600ea0b9d', 'Modérateur', 'Modérateur', '0000-00-00', 0, '0', 0, '', '', '', '', '', '1', 0, '', '2013-04-11 20:08:21'),
(26, 3, 'Membres', 'd256e770df3e8def374d2e987a82095600ea0b9d', 'Membres', 'Membres', '0000-00-00', 0, '0', 0, '', '', '', '', '', '1', 0, '', '2013-04-12 23:12:53'),
(38, 3, 'test', 'ed9fe66c0a6f9e21691e98cfaf2f3ec73f2242a8', 'test', 'test', '1993-11-30', 1, 'test', 67, 'test', 'test', 'test', 'justclara@me.com', '127.0.0.1', 'b49636c73b8c0e482a7d97c7b6fc4a2c9a233204', 0, 'test', '2013-04-13 00:06:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
