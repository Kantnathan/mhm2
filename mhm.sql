-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Mai 2018 à 16:41
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mhm`
--

-- --------------------------------------------------------

--
-- Structure de la table `addons`
--

CREATE TABLE IF NOT EXISTS `addons` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lang` int(11) NOT NULL DEFAULT '1',
  `prix` int(11) NOT NULL,
  `frequence` varchar(44) NOT NULL,
  `type` varchar(33) NOT NULL,
  `statut` int(2) NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `addons`
--

INSERT INTO `addons` (`id`, `nom`, `description`, `lang`, `prix`, `frequence`, `type`, `statut`, `date_modif`) VALUES
(2, 'Installation Wordpress', 'nous installons votre cms wordpress après activation de votre compte', 1, 5000, 'Trimestrielle', 'optionnel', 0, '2018-05-21 04:38:07'),
(3, 'Adresse ip', 'installation d''une ipo dédiée', 1, 6000, 'Mensuelle', 'optionnel', 1, '2018-05-20 22:42:44');

-- --------------------------------------------------------

--
-- Structure de la table `addons_dist`
--

CREATE TABLE IF NOT EXISTS `addons_dist` (
`id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `addon_type`
--

CREATE TABLE IF NOT EXISTS `addon_type` (
`id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `addon_type`
--

INSERT INTO `addon_type` (`id`, `type`) VALUES
(1, 'inclus'),
(2, 'optionnel');

-- --------------------------------------------------------

--
-- Structure de la table `api_domaines`
--

CREATE TABLE IF NOT EXISTS `api_domaines` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `apikey1` varchar(255) DEFAULT NULL,
  `apikey2` varchar(255) DEFAULT NULL,
  `apikey3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `api_domaines`
--

INSERT INTO `api_domaines` (`id`, `name`, `url`, `apikey1`, `apikey2`, `apikey3`) VALUES
(1, 'netearthone', 'netearthone.net', 'key1', 'key2', 'key3'),
(2, 'francedns', 'francedns.com', 'key1', 'key2', 'key3'),
(3, 'mtn', 'mtn.cm', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(12) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `lien` varchar(100) NOT NULL,
  `type` varchar(17) NOT NULL,
  `extrait` text NOT NULL,
  `contenu` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `statut` int(2) NOT NULL,
  `date_modif` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `categorie`, `lien`, `type`, `extrait`, `contenu`, `keywords`, `created_at`, `statut`, `date_modif`) VALUES
(3, 'Les inséparable', 'Categorie Article', 'http://localhost/afoup/blog/ajout_article', 'blog', '<p>Saisissez le contenu iciSaisissez le contenu iciSaisissez le contenu iciSaisissez le contenu ici</p>\r\n', '<p>Saisissez le contenu iciSaisissez le contenu iciSaisissez le contenu iciSaisissez le contenu ici</p>\r\n', '', '2018-05-01 02:13:19', 0, '0000-00-00 00:00:00'),
(4, 'Comment héberger mon site web', 'Informatique', 'http://localhost/mboahost/blog/Article_view', 'article', '<p><strong><img alt="yessss" src="https://www.google.cm/imgres?imgurl=https%3A%2F%2Fi.eurosport.com%2F2014%2F06%2F15%2F1258522-27162007-2560-1440.jpg%3Fw%3D1050&amp;imgrefurl=https%3A%2F%2Fwww.eurosport.fr%2Ffootball%2Fcameroun-eto-o-annonce-sa-retraite-internationale_sto4376521%2Fstory.shtml&amp;docid=4FSCWBsfOWlBeM&amp;tbnid=tUfhT44JxMEfwM%3A&amp;vet=10ahUKEwiwofLBpuPaAhUBr6QKHRD4B0cQMwgzKAEwAQ..i&amp;w=1050&amp;h=590&amp;bih=669&amp;biw=1280&amp;q=Eto%27o&amp;ved=0ahUKEwiwofLBpuPaAhUBr6QKHRD4B0cQMwgzKAEwAQ&amp;iact=mrc&amp;uact=8" style="float:left" />&nbsp;Bonsoir &agrave; tous et &agrave; toutes aujourdui nous verons comment h&eacute;berger son site web sur mboahost</strong></p>\r\n', '<p><strong><img alt="yessss" src="https://www.google.cm/imgres?imgurl=https%3A%2F%2Fi.eurosport.com%2F2014%2F06%2F15%2F1258522-27162007-2560-1440.jpg%3Fw%3D1050&amp;imgrefurl=https%3A%2F%2Fwww.eurosport.fr%2Ffootball%2Fcameroun-eto-o-annonce-sa-retraite-internationale_sto4376521%2Fstory.shtml&amp;docid=4FSCWBsfOWlBeM&amp;tbnid=tUfhT44JxMEfwM%3A&amp;vet=10ahUKEwiwofLBpuPaAhUBr6QKHRD4B0cQMwgzKAEwAQ..i&amp;w=1050&amp;h=590&amp;bih=669&amp;biw=1280&amp;q=Eto%27o&amp;ved=0ahUKEwiwofLBpuPaAhUBr6QKHRD4B0cQMwgzKAEwAQ&amp;iact=mrc&amp;uact=8" style="float:left" />&nbsp;Bonsoir &agrave; tous et &agrave; toutes aujourdui nous verons comment h&eacute;berger son site web sur mboahost</strong></p>\r\n', '', '2018-05-01 02:55:07', 1, '2018-05-12 00:48:57');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `statut` int(2) NOT NULL,
  `date_modif` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `description`, `created_at`, `statut`, `date_modif`) VALUES
(1, 'yes', 'ooooooooooooooooggggggggg', '2018-04-25 21:34:51', 1, '2018-05-14 01:24:49'),
(3, 'Innovation', 'Toutes les innovations dans le secteur agro-industriel seront présenté ici', '2018-04-25 21:50:41', 0, '2018-05-12 00:53:03'),
(4, 'Innovation', 'Toutes les innovations dans le secteur agro-industriel seront présenté ici', '2018-04-25 21:51:36', 0, '0000-00-00 00:00:00'),
(5, 'Agropastoral', 'Tous sur l''agropastoral', '2018-04-25 21:52:13', 0, '0000-00-00 00:00:00'),
(7, 'Informatique', 'InformatiqueInformatique', '2018-05-01 01:34:37', 0, '0000-00-00 00:00:00'),
(8, 'Informatique', 'InformatiqueInformatique', '2018-05-01 01:36:53', 0, '0000-00-00 00:00:00'),
(9, 'oups', 'oooooooooooooooooooooooooooooooooooo', '2018-05-01 02:47:36', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('0qn04rs077s9qcsodm36bvl09fupvrvn', '::1', '', 1526900327, '__ci_last_regenerate|i:1526900081;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('0sfsgi0u405ms8bta0435kl04jv8aii0', '::1', '', 1526868682, '__ci_last_regenerate|i:1526868681;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('137q27ce2r6jkiv8oi84i38j3h8q4160', '::1', '', 1526899004, '__ci_last_regenerate|i:1526899004;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('1463d5gf5oa9dvhbcm529hvv0balleaq', '::1', '', 1526990264, '__ci_last_regenerate|i:1526990263;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('16dv7viqgcl41537qqfvl02vs4rj9f3p', '::1', '', 1526853782, '__ci_last_regenerate|i:1526853749;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:13:"deleteMessage";s:3:"old";}'),
('1remd0laqoc59sje5lloravsfteptola', '::1', '', 1526898672, '__ci_last_regenerate|i:1526898671;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('28v2c8qsqn4ulcas8oouaqg7mi48j94j', '::1', '', 1526898009, '__ci_last_regenerate|i:1526898008;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('2a4iiksfgnh5cgeror02f4nj8mlnd4qq', '::1', '', 1527038100, '__ci_last_regenerate|i:1527038035;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527027381";last_check|i:1527038088;'),
('2p628oli7bumrs8o1ks2lj8aq54k47q7', '::1', '', 1527257456, '__ci_last_regenerate|i:1527257440;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"new";}'),
('2qjf5lr9ocbklo9stluc3ckvvkfbmddr', '::1', '', 1527256336, '__ci_last_regenerate|i:1527256336;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('41dhcklheh5tsv5hld99jk2f2v59hmjj', '::1', '', 1526992382, '__ci_last_regenerate|i:1526992381;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('4o0l0vgddu7vl5k21suq7i0psl9mivq9', '::1', '', 1527259105, '__ci_last_regenerate|i:1527259105;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('58nlr15c8b3p8l9k8ls8vlat7u7vp9q2', '::1', '', 1526867336, '__ci_last_regenerate|i:1526867336;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('5lktpi9ei62gtgltrj63gtg318ekmpc9', '::1', '', 1526873165, '__ci_last_regenerate|i:1526873165;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('6ptnsihrd9bp1eeg7uj5itshq5umnt7a', '::1', '', 1526994449, '__ci_last_regenerate|i:1526994448;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('6qa9g4bal115a56qage02g4phvu7m9d6', '::1', '', 1526852577, '__ci_last_regenerate|i:1526852326;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"new";}'),
('7e21001umk5rcovc4tnev3cjdcefg1vi', '::1', '', 1527080573, '__ci_last_regenerate|i:1527080572;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527038088";last_check|i:1527077997;'),
('7gh7f4irgvhor652rvdl2iq3jtleueh3', '::1', '', 1526871272, '__ci_last_regenerate|i:1526871272;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('7j1uc49rbngod73sc5bmhik4d09g3qtp', '::1', '', 1526871968, '__ci_last_regenerate|i:1526871968;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('81h9vfkf9q6ht2hgfncjurr6asehi6o1', '::1', '', 1527258777, '__ci_last_regenerate|i:1527258776;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('84h9e36dk7hd26aata5v73jqnnfnre04', '::1', '', 1526901055, '__ci_last_regenerate|i:1526901055;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('88ktm5pn1kbm113vj4t0nc71homlm6s9', '::1', '', 1526873681, '__ci_last_regenerate|i:1526873680;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('8c0rvosp0lvc7d026cjcmcckc2hag2t8', '::1', '', 1526857322, '__ci_last_regenerate|i:1526857321;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('8eq9kurl46o248oovuicfavlk7plej5j', '::1', '', 1527256705, '__ci_last_regenerate|i:1527256705;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('8jrlonr5mafct4nr8lajea9ko3f1pgu2', '::1', '', 1526851885, '__ci_last_regenerate|i:1526851647;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"old";}'),
('8lgp5pg1s2i8lof4apsdqrh6an1koh04', '::1', '', 1526867647, '__ci_last_regenerate|i:1526867647;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('9ldjmpt1r3g1e76q8smlbgqmot6sidmi', '::1', '', 1526899833, '__ci_last_regenerate|i:1526899619;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('9nffo5feauhilc5a2bejm7il5mqg5cs6', '::1', '', 1526868379, '__ci_last_regenerate|i:1526868379;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('a1kij3l4p7gihhij2cajrf843okqhtl2', '::1', '', 1527254466, '__ci_last_regenerate|i:1527254465;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('alg1rq4dq4pplvq6glnk82jsh24le2pu', '::1', '', 1526854432, '__ci_last_regenerate|i:1526854153;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;ticketMessage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:13:"ticketMessage";s:3:"new";}'),
('aql5ibcuunh34bi9i3069m2v5muvtk47', '::1', '', 1526874034, '__ci_last_regenerate|i:1526874034;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('b63be1hgk87i3gnt3tj75k5ciqlt8aed', '::1', '', 1526874502, '__ci_last_regenerate|i:1526874501;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('b6dbbvl5blh6iqn54dcftp9931kuj6g8', '::1', '', 1526872295, '__ci_last_regenerate|i:1526872295;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('bhse1m8q1gptt28cbld7d28j2u8u0qpk', '::1', '', 1526993040, '__ci_last_regenerate|i:1526993040;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('con5vssenf9kqflj4lank5caq3msnbp7', '::1', '', 1526857897, '__ci_last_regenerate|i:1526857896;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('crb84mm8q5v9036sootg5drmee8cfoj3', '::1', '', 1526859924, '__ci_last_regenerate|i:1526859683;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;success-message|s:26:"Compte créé avec succès";__ci_vars|a:1:{s:15:"success-message";s:3:"old";}'),
('d93f5ddtb97fdh5uq1i9umb3f2phe4ht', '::1', '', 1526997678, '__ci_last_regenerate|i:1526997678;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('d9af4tgj94c018dt7apcgmp11ukrgn3b', '::1', '', 1526894952, '__ci_last_regenerate|i:1526894683;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('de9eo63r8j91c1h67fkvjsc3l5nrn1d2', '::1', '', 1527017568, '__ci_last_regenerate|i:1527017529;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526990086";last_check|i:1527013814;csrfkey|s:8:"pLVPF9R8";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"08Piu2e7S4qHTDURVyYw";'),
('e3k0t5kvq21buocmsujul34itatna40e', '::1', '', 1526998332, '__ci_last_regenerate|i:1526998332;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('edhcauqv30urpror8k7ucfun5h4s0dsl', '::1', '', 1526874034, '__ci_last_regenerate|i:1526874034;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('eprlcuurm81o7eseso5rc891lhgfp6mr', '::1', '', 1526870368, '__ci_last_regenerate|i:1526870367;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('f14q7us34vc0t7j23k7n6ean1tpq3vh3', '::1', '', 1527078045, '__ci_last_regenerate|i:1527077936;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527038088";last_check|i:1527077997;'),
('f7l67r8eto7bm1rvosht0dgmfgsfag1s', '::1', '', 1527255233, '__ci_last_regenerate|i:1527255232;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('f8r774sj6ncc5anto8io99rre5kbkc3f', '::1', '', 1527027385, '__ci_last_regenerate|i:1527027189;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527013814";last_check|i:1527027381;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('g59ttr7se56ns140so4cv6u9p9c8jm0e', '::1', '', 1527078920, '__ci_last_regenerate|i:1527078917;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527038088";last_check|i:1527077997;'),
('gm23fa93eias4lq27k2ioseidkrge640', '::1', '', 1526866765, '__ci_last_regenerate|i:1526866764;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('gp312foin7ff6l4ru2kbqpv2fd0p8cm5', '::1', '', 1526990089, '__ci_last_regenerate|i:1526989883;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('har87srh00qmslo1nuec2rqhbmpcr6pk', '::1', '', 1526852635, '__ci_last_regenerate|i:1526852635;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"old";}'),
('i8if7uqbcam4714sligkbn3cbt29j4ug', '::1', '', 1526902030, '__ci_last_regenerate|i:1526901894;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;success-message|s:26:"Compte créé avec succès";__ci_vars|a:1:{s:15:"success-message";s:3:"old";}'),
('ig4sao8aeqcni15ftt10kg0lrro6d1dp', '::1', '', 1526992714, '__ci_last_regenerate|i:1526992714;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('io27lg59sfoq75pigagp829qgjavpdto', '::1', '', 1526861146, '__ci_last_regenerate|i:1526861145;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('ituhh7hl74gn8tar9imvjau0fppl4mi9', '::1', '', 1526992229, '__ci_last_regenerate|i:1526992005;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('iu34rls6h86rl30lf3qrglp5kkmn3kfc', '::1', '', 1526858591, '__ci_last_regenerate|i:1526858591;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('ivkjbfhln9sf9snqlprejagopb749tm6', '::1', '', 1526994072, '__ci_last_regenerate|i:1526994072;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('jb4e85k7c17q696ql1ien3cb4o7lkiqk', '::1', '', 1526998680, '__ci_last_regenerate|i:1526998680;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('k5tlrifkgu4g4e2i19l6ru2g9qhral3h', '::1', '', 1526856492, '__ci_last_regenerate|i:1526856490;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('l3hs2d44kkkv90fnglveuv65sfo46e1q', '::1', '', 1526896978, '__ci_last_regenerate|i:1526896976;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('l42cco22ktl51hgfr55v7sff7vj109vo', '::1', '', 1526997984, '__ci_last_regenerate|i:1526997983;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('l85olu580i1apfudi3c5o8sm5bqe4vb7', '::1', '', 1527257116, '__ci_last_regenerate|i:1527257116;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('lkosbosc3ogtsbf8ni8pn45qgkpsg3ui', '::1', '', 1527255988, '__ci_last_regenerate|i:1527255988;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('n0pimk9hk383fbjplaotqiu646n673o8', '::1', '', 1526858290, '__ci_last_regenerate|i:1526858290;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('oc6eoe4dovr73sbn1stiiahiphaurn4i', '::1', '', 1526860246, '__ci_last_regenerate|i:1526860245;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('oino0801nb84v1arhftlen5eiggnt4v8', '::1', '', 1526991155, '__ci_last_regenerate|i:1526991154;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('oo711bfod04d35tnrh562qeqdrsghsl6', '::1', '', 1527016020, '__ci_last_regenerate|i:1527015926;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526990086";last_check|i:1527013814;'),
('pm2e5u8bh6o72fv4057qh2jhc5d7mg10', '::1', '', 1527038508, '__ci_last_regenerate|i:1527038507;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527027381";last_check|i:1527038088;'),
('q37for2v9pm61d5d4onjf2ed54jblm2u', '::1', '', 1527013833, '__ci_last_regenerate|i:1527013756;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526990086";last_check|i:1527013814;'),
('q6kela8dnr7g5itletmc7l47th3bplf0', '::1', '', 1526863125, '__ci_last_regenerate|i:1526863122;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('qftr58f62b3l13lqpkdob1s6h02u9g7f', '::1', '', 1526875154, '__ci_last_regenerate|i:1526875154;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('qlubrjgv05tmo6haprr3de34kui3f5ml', '::1', '', 1526851328, '__ci_last_regenerate|i:1526851315;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"new";}'),
('qt6mm8ra0pnsl4kk6ug2fla7npdelm30', '::1', '', 1526874847, '__ci_last_regenerate|i:1526874847;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('sf4qjdatq2s2fm151ohk7hiklucv8816', '::1', '', 1526852060, '__ci_last_regenerate|i:1526852005;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"new";}'),
('sjmurnta7kgl0f4v21t9jtosga3ailj1', '::1', '', 1526872767, '__ci_last_regenerate|i:1526872767;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('sjtnk0rqkk9402700tfbmkr9odki4vsn', '::1', '', 1526901521, '__ci_last_regenerate|i:1526901521;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('stsied16sjgokd6ha8qudonno2ko4vpm', '::1', '', 1526994892, '__ci_last_regenerate|i:1526994892;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('t1m3c58sh1a4rgflmfrjk7qbfhn4qq9u', '::1', '', 1526993447, '__ci_last_regenerate|i:1526993445;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('tnggnp1vi5fjd8fajsavoq05lf7hb488', '::1', '', 1526870932, '__ci_last_regenerate|i:1526870932;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;'),
('u3537j26ahdvia6i9vli96fg5ocp0gc8', '::1', '', 1526991666, '__ci_last_regenerate|i:1526991664;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;'),
('u8hd0tp3bgs3kr84f5hied5mcplpitii', '::1', '', 1527254041, '__ci_last_regenerate|i:1527253884;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('u8ku5drpjthhm5as7tu6j174kfdsa5r2', '::1', '', 1527258060, '__ci_last_regenerate|i:1527258025;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('uhmnt6rkij0ts2si18gqfquefn52q2ea', '::1', '', 1527255643, '__ci_last_regenerate|i:1527255643;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1527077997";last_check|i:1527253946;'),
('unn7s93p2th48bp83c4cj2rhs4vr0p4e', '::1', '', 1526853476, '__ci_last_regenerate|i:1526853194;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;deleteMessaage|s:37:"Suppression éffectuée avec succès.";__ci_vars|a:1:{s:14:"deleteMessaage";s:3:"new";}'),
('vhl18m00c28ap9ouv4ar3nqmfjpj41k0', '::1', '', 1526994060, '__ci_last_regenerate|i:1526993767;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526894948";last_check|i:1526990086;success-message|s:26:"Compte créé avec succès";__ci_vars|a:1:{s:15:"success-message";s:3:"old";}'),
('vj2d0s0lkqh67psv5id3pl4vg41bg22c', '::1', '', 1526896229, '__ci_last_regenerate|i:1526896228;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526894948;'),
('vr0rkui4ipje6f1qrnj0b72veeob5021', '::1', '', 1526854714, '__ci_last_regenerate|i:1526854658;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526845581";last_check|i:1526845581;');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
`id` int(10) NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `date_modif` datetime DEFAULT NULL,
  `statut` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `frequences`
--

CREATE TABLE IF NOT EXISTS `frequences` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `frequences`
--

INSERT INTO `frequences` (`id`, `name`) VALUES
(1, 'Paiement unique'),
(2, 'Mensuelle'),
(3, 'Trimestrielle'),
(4, 'Semestrielle'),
(5, 'Annuelle');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'superadmin', 'super adminsuper admin');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `languages`
--

INSERT INTO `languages` (`id`, `code`, `name`) VALUES
(1, 'fr', 'french'),
(2, 'en', 'anglais');

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
`id` int(12) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `url` varchar(120) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `ordre` int(4) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `statut` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menus`
--

INSERT INTO `menus` (`id`, `nom`, `url`, `titre`, `description`, `keywords`, `ordre`, `parent_id`, `statut`, `created_at`, `date_modif`) VALUES
(2, 'Accueil', 'welcome/index', 'Accueil', '<p>P&eacute;tite description&nbsp;welcome/index</p>\r\n', '', 1, 1, 1, '2018-05-11 16:33:56', '2018-05-12 00:14:17'),
(5, 'mince', 'welcome/index', 'oufff', '<p>P&eacute;tite descriptionkeywordskeywordskeywords</p>\r\n', '', 12, 8, 0, '2018-05-11 17:36:14', '2018-05-12 01:21:39'),
(7, 'A propos', 'welcome/apropos', 'A propos', '<p>P&eacute;tite description</p>\r\n', 'la page d''aproposep', 6, 5, 1, '2018-05-12 02:25:18', '2018-05-12 01:27:49'),
(8, 'A propos', 'welcome/apropos', 'A propos', '<p>P&eacute;tite description</p>\r\n', 'la page d''aproposep', 6, 5, 0, '2018-05-12 02:26:35', '0000-00-00 00:00:00'),
(9, 'A propos', 'welcome/apropos', 'A propos', '<p>P&eacute;tite description</p>\r\n', 'la page d''aproposep', 6, 5, 0, '2018-05-12 02:27:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(12) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `id_ticket`, `id_user`, `message`, `created_at`) VALUES
(1, 8, 1, '<p>Saisissez le message ici</p>\r\n', '2018-05-07 08:11:09'),
(2, 9, 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:50:44'),
(3, 10, 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:52:15'),
(4, 11, 1, 'Probleme avec le webmail Probleme avec le webmail', '2018-05-15 11:35:49');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` smallint(5) unsigned NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `contenu`, `date_ajout`, `date_modif`) VALUES
(1, '$auteur', '$titre', '$contenu', '2018-03-09 15:18:56', '2018-03-09 15:18:56'),
(2, 'Arthur', 'Un super titre', 'Un super contenu', '2018-03-09 15:21:06', '2018-03-09 15:21:06'),
(3, 'Arthur', 'Un super titre', 'Un super contenu', '2018-03-09 15:21:32', '2018-03-09 15:21:32'),
(4, 'Arthur', 'Un super titre', 'Un super contenu', '2018-03-09 15:21:53', '2018-03-09 15:21:53'),
(5, 'Arthur', 'Un super titre', 'Un super contenu', '2018-03-09 15:33:38', '2018-03-09 15:33:38'),
(6, 'Arthur', 'Un super titre', 'Un super contenu', '2018-03-09 15:35:23', '2018-03-09 15:35:23');

-- --------------------------------------------------------

--
-- Structure de la table `produits_domaines`
--

CREATE TABLE IF NOT EXISTS `produits_domaines` (
`id` int(11) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_renouv` int(11) NOT NULL,
  `prix_xfer` int(11) NOT NULL,
  `frequence` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `conditions` varchar(255) DEFAULT NULL,
  `api` varchar(255) NOT NULL,
  `lang` int(11) NOT NULL DEFAULT '1',
  `categories_produit` int(11) NOT NULL DEFAULT '1',
  `statut` int(2) NOT NULL,
  `date_modif` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_domaines`
--

INSERT INTO `produits_domaines` (`id`, `extension`, `prix`, `prix_renouv`, `prix_xfer`, `frequence`, `description`, `conditions`, `api`, `lang`, `categories_produit`, `statut`, `date_modif`) VALUES
(9, '.com', 7500, 7500, 7500, 'Annuelle', 'Idéale pour des activités commerciales', NULL, '', 1, 1, 0, '0000-00-00 00:00:00'),
(10, '.cm', 16000, 16000, 16000, 'Paiement unique', '                    Extension spécifique pour la France                  ', NULL, '', 1, 1, 1, '2018-05-12 01:00:49'),
(13, '.org', 9000, 9000, 9000, 'Paiement unique', '                                        Extension spécifique pour le Cameroun                                    ', NULL, '', 1, 1, 0, NULL),
(14, '.biz', 5500, 7500, 7000, 'Annuelle', 'pour le business', NULL, '', 1, 1, 1, '2018-05-25 15:38:41');

-- --------------------------------------------------------

--
-- Structure de la table `produits_hebergements`
--

CREATE TABLE IF NOT EXISTS `produits_hebergements` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `disque` varchar(255) NOT NULL,
  `site_web` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `frequence` int(11) NOT NULL,
  `adresses_email` varchar(255) NOT NULL,
  `bande_passante` varchar(255) NOT NULL,
  `sous_domaines` varchar(255) NOT NULL,
  `bases_donnees` varchar(255) NOT NULL,
  `stockage_email` varchar(255) NOT NULL,
  `pieces_jointes` varchar(255) NOT NULL,
  `comptes_ftp` varchar(255) NOT NULL,
  `lang` int(11) NOT NULL DEFAULT '1',
  `categories_produit` int(11) NOT NULL DEFAULT '2',
  `statut` int(2) NOT NULL,
  `date_modif` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_hebergements`
--

INSERT INTO `produits_hebergements` (`id`, `nom`, `disque`, `site_web`, `prix`, `frequence`, `adresses_email`, `bande_passante`, `sous_domaines`, `bases_donnees`, `stockage_email`, `pieces_jointes`, `comptes_ftp`, `lang`, `categories_produit`, `statut`, `date_modif`) VALUES
(1, 'Classique pro', '100', '11', 12000, 3, '121', 'Illimité', '12', '', '12MO', '12MO', '12', 1, 2, 0, '2018-05-12 01:07:17'),
(3, 'Starter', '10', '1', 8500, 2, '10', 'Illimité', '6', '11', '122 MO', '12MO', '3', 1, 2, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `produits_vps`
--

CREATE TABLE IF NOT EXISTS `produits_vps` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `processeur` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `disque` varchar(255) NOT NULL,
  `bande` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `frequence` int(11) NOT NULL,
  `visiteurs_simult` int(11) NOT NULL,
  `cores` varchar(255) NOT NULL,
  `systeme_exploit` varchar(255) NOT NULL,
  `use_case` varchar(255) NOT NULL,
  `lang` int(11) NOT NULL DEFAULT '1',
  `categories_produit` int(11) NOT NULL DEFAULT '3',
  `statut` int(2) NOT NULL,
  `date_modif` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_vps`
--

INSERT INTO `produits_vps` (`id`, `nom`, `processeur`, `ram`, `disque`, `bande`, `prix`, `frequence`, `visiteurs_simult`, `cores`, `systeme_exploit`, `use_case`, `lang`, `categories_produit`, `statut`, `date_modif`) VALUES
(1, 'LIN1', 'Intel XEON ou AMD Radeon', '2 Go', '25 Go', '1 To', 8500, 2, 75, '1', 'linux', 'Site internet simple avec moins d''une centaine de visiteurs simultanes', 1, 3, 0, 2147483647),
(2, 'Starter', '6GHZ', '2GO', '1 Tera', '12T', 22000, 2, 23, '2', 'CentOS 7', 'site vittrine', 1, 3, 1, 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `systemes_exp`
--

CREATE TABLE IF NOT EXISTS `systemes_exp` (
`id` int(11) NOT NULL,
  `os` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `statut` int(2) NOT NULL,
  `date_modif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `systemes_exp`
--

INSERT INTO `systemes_exp` (`id`, `os`, `name`, `statut`, `date_modif`) VALUES
(2, 'windows', 'WINDOWS 2012 R2', 0, '2018-05-12 01:16:29'),
(3, 'Linux', 'Linux 3232', 1, '2018-05-12 01:22:27');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE IF NOT EXISTS `temoignages` (
`id` int(11) NOT NULL,
  `motif` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `service` varchar(30) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `motif`, `id_user`, `service`, `contenu`, `created_at`, `date_modif`, `statut`) VALUES
(1, 'Félicitation', 1, 'Service client', '<p>Je confirme seulement votre service il est vraiemnt de qualit&eacute;</p>\r\n', '2018-05-04 17:01:27', '2018-05-14 02:06:47', 0),
(3, 'Déception', 1, 'Disponibilité', '<p>Saisissez le temoignage ici</p>\r\n', '2018-05-12 01:30:20', '2018-05-15 10:31:04', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
`id` int(11) NOT NULL,
  `objet` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ticket`
--

INSERT INTO `ticket` (`id`, `objet`, `id_user`, `contenu`, `created_at`, `date_modif`, `statut`) VALUES
(1, 'Félicitation', 1, 'Je confirme seulement votre service il est vraiemnt de qualit&eacute;', '2018-05-04 17:01:27', '0000-00-00 00:00:00', 1),
(3, 'Probleme avec le cpanel', 1, 'Bonjour monsieur svp j&#39;ai des soucis la avec mon cpanel', '2018-05-07 07:57:36', '0000-00-00 00:00:00', 0),
(4, 'Probleme avec le cpanel', 1, 'Bonjour monsieur svp j&#39;ai des soucis la avec mon cpanel', '2018-05-07 08:00:31', '0000-00-00 00:00:00', 0),
(5, 'Probleme avec le cpanel', 1, 'Bonjour monsieur svp j&#39;ai des soucis la avec mon cpanel', '2018-05-07 08:00:50', '0000-00-00 00:00:00', 0),
(6, 'Probleme avec le cpanel', 1, 'Saisissez le message ici', '2018-05-07 08:05:47', '0000-00-00 00:00:00', 0),
(7, 'Probleme avec le cpanel', 1, 'Saisissez le message ici', '2018-05-07 08:10:14', '0000-00-00 00:00:00', 0),
(8, 'Probleme avec le cpanel', 1, 'Saisissez le message ici', '2018-05-07 08:11:09', '2018-05-12 00:35:08', 1),
(10, 'On s''enfou', 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:52:15', '0000-00-00 00:00:00', 0),
(11, 'Probleme avec le webmail', 1, 'Probleme avec le webmail Probleme avec le webmail', '2018-05-15 11:35:49', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(60) NOT NULL,
  `postcode` varchar(60) NOT NULL,
  `statut` int(2) NOT NULL,
  `code` varchar(6) NOT NULL,
  `code_parent` varchar(7) DEFAULT NULL,
  `solde` int(12) DEFAULT NULL,
  `address` varchar(88) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `city`, `country`, `postcode`, `statut`, `code`, `code_parent`, `solde`, `address`, `state`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'itMl577y2UH05GH9PJKxy.', 1268889823, 1527253946, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', 0, 'MHiLK', NULL, NULL, '', ''),
(2, '::1', 'eleguealamaherve@gmail.com', '$2y$08$S7AsIXm53wr.RwGMPbMEkOisNPeQNawrHQR.XJ/cCmM32ezX4Rh7y', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, 'qr839WnRAJZI.bdzKj.wne', 1520942685, 1520946470, 1, 'Herve', 'Elegue', 'Agrisoft', '655923687', 'Yaounde', 'CM', '237', 0, '', NULL, NULL, 'Mvog-Mbi', 'EST'),
(3, '', NULL, 'le codeur!!!!!', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, 1, 'Mboahost', 'tous', 'Agrisoft', '655923687', '', 'CM', '', 0, '', NULL, NULL, '', ''),
(4, '::1', 'hervecodeur@gmail.com', '$2y$08$aa9/tyGdpo0KHLs2koGlVuPIg2TZSM2cl8ztTC.rgObwHJnYVc2L.', NULL, 'hervecodeur@gmail.com', NULL, NULL, NULL, NULL, 1525135036, 1525856957, 1, 'Herve', 'Elegue', NULL, '+237 655923687', 'Yaounde', 'CM', '237', 0, '', NULL, NULL, 'Mvog-Mbi', 'CEN'),
(5, '::1', 'herve@gmail.com', '$2y$08$mBGy0Dw6yaNqYpykHrbH/OjLPFVyqOLmQMdpjvMdC3JaSigbA1aaG', NULL, 'herve@gmail.com', NULL, NULL, NULL, NULL, 1525865057, NULL, 1, 'Victorine', 'Bofia', NULL, '+237 655923683', 'Yaounde', 'CM', '237', 0, '', NULL, NULL, 'Mvog-Mbi', 'LIT'),
(6, '::1', 'simone@gmail.com', '$2y$08$HkOcoKWRiv9jUZwfXzZHaOzGwTpiSo.jYZQ8T/NmZNE56P2/4G95a', NULL, 'simone@gmail.com', NULL, NULL, NULL, NULL, 1526859922, NULL, 1, 'Simone', 'Ndeme', NULL, '+237 22202502', 'Yde', 'CM', '237', 0, 'MHyMN', NULL, NULL, 'bafoussam', 'SOU'),
(7, '::1', 'tuayo77@gmail.com', '$2y$08$MQwApxksKkXZkItCUMTyFuWd9BOVCFTzuGmH03jDeY9G8lrylhQl.', NULL, 'tuayo77@gmail.com', NULL, NULL, NULL, NULL, 1526899698, NULL, 1, 'Tuayo', 'Borel', NULL, '+237 6565665', 'Yaounde', 'CM', '237', 0, 'MHSrh', '0', NULL, 'cradat', 'CEN'),
(8, '::1', 'herecodeur@gmail.com', '$2y$08$1DmuRmZfeAf9DvZOIhgk1.yicJQ5aDEHGCy.qfVCVdnsR1vy/h6qC', NULL, 'herecodeur@gmail.com', NULL, NULL, NULL, NULL, 1526900253, NULL, 1, 'Herve', 'Elegue', NULL, '+237 121211111', 'Yaounde', 'CM', '237', 0, 'MHHtW', NULL, NULL, 'Mvog-Mbi', 'CEN'),
(9, '::1', 'yessss@gmail.com', '$2y$08$456LRs6kNQXZiX5aUixHF.DUskRMqdzE0.mB/rJS32tJcCPwX6tJm', NULL, 'yessss@gmail.com', NULL, NULL, NULL, NULL, 1526902027, NULL, 1, 'yesso', 'yesss', NULL, '+237 1212111', 'Yaounde', 'CM', '237', 0, 'MHpW4', 'MHiLK', NULL, 'Mvog-Mbi', 'SUD'),
(10, '::1', 'tuayoborel77@gmail.com', '$2y$08$lm2CudoyUtg150PwZikJruH2b5mHK50cMaoEyCTqMjDqCg8bs8m5K', NULL, 'tuayoborel77@gmail.com', NULL, NULL, NULL, NULL, 1526992176, NULL, 1, 'borel', 'tuayo', NULL, '+237 699081656', 'Yaounde', 'CM', '9993', 0, 'MHdbw', 'MHiLK', NULL, 'Mvog-Mbi', 'EST'),
(11, '::1', 'simonne@gmail.com', '$2y$08$.R7PubVsgutoN18w9Q6xzehtNVzDzJ4DKW.LkvFkKosGpgNlbGXfS', NULL, 'simonne@gmail.com', NULL, NULL, NULL, NULL, 1526994057, NULL, 1, 'Simone', 'Ndeme', NULL, '+237 23233', 'Yde', 'CM', '237', 0, 'MH3pl', 'MHiLK', NULL, 'bafoussam', ''),
(12, '::1', 'hervee@gmail.com', '$2y$08$ceH80ovoO13LrhY3GWwnluIknV59xHGNUq53jCOc79XqiRymsadHG', NULL, 'hervee@gmail.com', NULL, NULL, NULL, NULL, 1527015999, NULL, 1, 'Victorine', 'Bofia', NULL, '+237 232322', 'Yaounde', 'CM', '237', 0, 'MHYwa', 'MHiLK', NULL, 'Mvog-Mbi', 'ADA');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(8, 2, 2),
(7, 3, 1),
(9, 4, 2),
(10, 5, 2),
(11, 6, 2),
(12, 7, 2),
(13, 8, 2),
(14, 9, 2),
(15, 10, 2),
(16, 11, 2),
(17, 12, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `addons`
--
ALTER TABLE `addons`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `addons_dist`
--
ALTER TABLE `addons_dist`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `addon_type`
--
ALTER TABLE `addon_type`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `api_domaines`
--
ALTER TABLE `api_domaines`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `last_activity_idx` (`timestamp`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits_domaines`
--
ALTER TABLE `produits_domaines`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits_hebergements`
--
ALTER TABLE `produits_hebergements`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits_vps`
--
ALTER TABLE `produits_vps`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `systemes_exp`
--
ALTER TABLE `systemes_exp`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `addons`
--
ALTER TABLE `addons`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `addons_dist`
--
ALTER TABLE `addons_dist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `addon_type`
--
ALTER TABLE `addon_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `api_domaines`
--
ALTER TABLE `api_domaines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `produits_domaines`
--
ALTER TABLE `produits_domaines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `produits_hebergements`
--
ALTER TABLE `produits_hebergements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `produits_vps`
--
ALTER TABLE `produits_vps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `systemes_exp`
--
ALTER TABLE `systemes_exp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
