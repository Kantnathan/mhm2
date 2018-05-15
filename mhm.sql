-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Mai 2018 à 11:23
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
(1, 'Installation Wordpress', 'nous installons votre cms wordpress après activation de votre compte', 1, 5000, 'Trimestrielle', 'optionnel', 0, '0000-00-00 00:00:00'),
(2, 'Installation Wordpress', 'nous installons votre cms wordpress après activation de votre compte', 1, 5000, 'Trimestrielle', 'optionnel', 1, '2018-05-12 01:21:06'),
(3, 'Adresse ip', 'installation d''une ipo dédiée', 1, 6000, 'Mensuelle', 'optionnel', 0, '2018-05-12 01:21:17');

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
(1, 'yeeeeeeeeeeeeeeee', 'Categorie Article', 'rien', 'blog', '<p>Saisissez le contenu ici&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp;</p>\r\n', '<p>Saisissez le contenu ici&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp;</p>\r\n', '', '2018-05-01 02:05:33', 0, '0000-00-00 00:00:00'),
(2, 'yeeeeeeeeeeeeeeee', 'Categorie Article', 'rien', 'blog', '<p>Saisissez le contenu ici&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp;</p>\r\n', '<p>Saisissez le contenu ici&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp; &nbsp; CKEDITOR.replace(&#39;contenu&#39;)<br />\r\n&nbsp;</p>\r\n', '', '2018-05-01 02:11:15', 0, '0000-00-00 00:00:00'),
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
(2, 'Agriculture', 'nous allons parler de l''agriculture', '2018-04-25 21:37:14', 1, '2018-05-12 00:52:42'),
(3, 'Innovation', 'Toutes les innovations dans le secteur agro-industriel seront présenté ici', '2018-04-25 21:50:41', 0, '2018-05-12 00:53:03'),
(4, 'Innovation', 'Toutes les innovations dans le secteur agro-industriel seront présenté ici', '2018-04-25 21:51:36', 0, '0000-00-00 00:00:00'),
(5, 'Agropastoral', 'Tous sur l''agropastoral', '2018-04-25 21:52:13', 0, '0000-00-00 00:00:00'),
(6, 'Informatique', 'InformatiqueInformatique', '2018-05-01 01:33:54', 0, '0000-00-00 00:00:00'),
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
('02jfkstu0gmf32qi7obpabb1qvjdqnf5', '::1', '', 1526321739, '__ci_last_regenerate|i:1526321738;'),
('049s39g8qnk3kup1fhtsq6ss19tv24d2', '::1', '', 1526053791, '__ci_last_regenerate|i:1526053790;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('07k9dj6nnq42lv78gg0uprggtojd1dsh', '::1', '', 1526255754, '__ci_last_regenerate|i:1526255752;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('0aedgvqnd6co1ndulgfi08obfs5gui07', '::1', '', 1526256145, '__ci_last_regenerate|i:1526256145;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('0h7peu779rqkequlogvh7qt1idgtgk13', '::1', '', 1526078845, '__ci_last_regenerate|i:1526078845;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('0irbph90l0tkt8ftmuml4vv8mr416ich', '::1', '', 1525788906, '__ci_last_regenerate|i:1525788906;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525786825";last_check|i:1525787703;'),
('0ndjsmn7538icu40d5to357oq8mm48kt', '::1', '', 1526052598, '__ci_last_regenerate|i:1526052597;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('0oippq5ojc34inslhr8nhn1vgqqca0rh', '::1', '', 1526082894, '__ci_last_regenerate|i:1526082894;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('1ivt20hiqqqenag6ldeg46nqvtjr0ogp', '::1', '', 1526082537, '__ci_last_regenerate|i:1526082537;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('1ua839mjmcbf424tru23cjs2v47rcild', '::1', '', 1525803862, '__ci_last_regenerate|i:1525803861;'),
('20jvuu1o5b86ra0a47d38v8p8eicoju2', '::1', '', 1526374946, '__ci_last_regenerate|i:1526374946;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526317953";last_check|i:1526374382;'),
('2jil5jcer3a005o9d4b46tm35uv6d1m3', '::1', '', 1526047225, '__ci_last_regenerate|i:1526047224;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('39b7ij7q38n9343i6n6rr5uunfd4iglh', '::1', '', 1526047645, '__ci_last_regenerate|i:1526047644;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('3i0ii8r2f8pgj1vndjkgusrb4jvbi8vd', '::1', '', 1526083241, '__ci_last_regenerate|i:1526083241;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('4rn88e47gj9n42rkpt1jgorfockjf6l5', '::1', '', 1526258164, '__ci_last_regenerate|i:1526258163;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('5djoot94ss78p2fk1uqjhsvi1v9gsao8', '::1', '', 1526257449, '__ci_last_regenerate|i:1526257449;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('5slk2i4bth4t4kp3pihuago2jf32v93c', '::1', '', 1526075788, '__ci_last_regenerate|i:1526075788;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('62g0r9pvhet8j9318euui4lnjqnt6jsp', '::1', '', 1525789212, '__ci_last_regenerate|i:1525789212;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525786825";last_check|i:1525787703;'),
('6di4rvlko9bucqperqm870mpkgfdbrvb', '::1', '', 1526044535, '__ci_last_regenerate|i:1526044533;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('7abcr2v93u6bmg8i8eskifhe3h1des7r', '::1', '', 1526083939, '__ci_last_regenerate|i:1526083939;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('7fcg7rd5nc3oe5tmvrop0crivg27k5pn', '::1', '', 1526077110, '__ci_last_regenerate|i:1526077110;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('7tvh4d0jf60hrj3809udrenfe4vvriqm', '::1', '', 1526080322, '__ci_last_regenerate|i:1526080322;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('81khk2lniji9c4efgm9as09n6vi636bn', '::1', '', 1526079207, '__ci_last_regenerate|i:1526079207;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('8hc5qqgbae61q5mq4or2nnf76pu8dgo5', '::1', '', 1526205218, '__ci_last_regenerate|i:1526205192;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526163314";last_check|i:1526205216;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('8ib9ahgcjtfmpu10ov8445261alaqk9s', '::1', '', 1526300854, '__ci_last_regenerate|i:1526300854;site_lang|s:6:"french";'),
('8kugtnu7qn6ihguic0mflb42vgf8bdgu', '::1', '', 1526078142, '__ci_last_regenerate|i:1526078142;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('9lb5dveehnsinfbji24thdq1sht0gatn', '::1', '', 1526048876, '__ci_last_regenerate|i:1526048876;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('9ogculemq7hffv1esubffid0do5abt5c', '::1', '', 1526049236, '__ci_last_regenerate|i:1526049235;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('9ojvuj4d7vgho8763uplif57i6a70squ', '::1', '', 1526249116, '__ci_last_regenerate|i:1526249057;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526205216";last_check|i:1526249086;'),
('abgu490mfnn89b0etu2r8r9potlfu9rt', '::1', '', 1526056325, '__ci_last_regenerate|i:1526056323;'),
('ah2qsjnroc8suf16f5fi1qkolhonl397', '::1', '', 1526054166, '__ci_last_regenerate|i:1526054164;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('ahkf2cft3v26i9t1d4o58i7p1d0dom5r', '::1', '', 1526300623, '__ci_last_regenerate|i:1526300447;site_lang|s:6:"french";'),
('aqul6ravdt7bu5neieo0ir5hf1tj9ad5', '::1', '', 1526048544, '__ci_last_regenerate|i:1526048543;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('b2l04jq34ku9c547r2fsnh51p77ia6dc', '::1', '', 1526259786, '__ci_last_regenerate|i:1526259786;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('c5ch35v0nfc4cup7j59b3hq8gnnvv5rn', '::1', '', 1526249749, '__ci_last_regenerate|i:1526249749;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('c7sp78nvh1oh8uhp70be4er26h9m2lsd', '::1', '', 1525789524, '__ci_last_regenerate|i:1525789523;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525786825";last_check|i:1525787703;'),
('cj8tfj8o5fbsrbpf678ee8c2j71kvao4', '::1', '', 1526249657, '__ci_last_regenerate|i:1526249437;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('cqnrshr0gkg9lmblajcuerevhvvmu0mb', '::1', '', 1526075138, '__ci_last_regenerate|i:1526075076;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;csrfkey|s:8:"6yWe58bM";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"AHy54NkmrvUcDsjpF3KL";'),
('dj2naqq466pqa8hvre18vmqcn1dhp6pf', '::1', '', 1526081736, '__ci_last_regenerate|i:1526081736;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('dth82vh5grtrbhs05mv6qos3416onp35', '::1', '', 1526079779, '__ci_last_regenerate|i:1526079779;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('eeunppa9h5mspvt80uim0ogodur7lq98', '::1', '', 1526259182, '__ci_last_regenerate|i:1526258942;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('ejs9okq8knvn3gm3jhl0hu256h8clgjp', '::1', '', 1526081420, '__ci_last_regenerate|i:1526081420;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('elj395e3ie10csfcr264q6cm3vcj2dlo', '::1', '', 1526077809, '__ci_last_regenerate|i:1526077809;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('en9e92l68t41gt1l5odpfi6jhekupoae', '::1', '', 1526077498, '__ci_last_regenerate|i:1526077498;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('f3qfh7dqqfb2cgvp3sm62cr3bfjilk92', '::1', '', 1526258609, '__ci_last_regenerate|i:1526258609;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('fjedcf28f7msj7err3mr3fhll5kcacif', '::1', '', 1526050524, '__ci_last_regenerate|i:1526050521;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('futikqn02fuh9fcdudqprcdt0so6kpfr', '::1', '', 1526250300, '__ci_last_regenerate|i:1526250300;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('h1tns20hu0vv4lh9l7lb6leen6ee8pcj', '::1', '', 1525857089, '__ci_last_regenerate|i:1525856986;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525787703";last_check|i:1525857013;'),
('h4ib6ondloltgblbid8m1v5a8gls1koh', '::1', '', 1525786852, '__ci_last_regenerate|i:1525786673;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525671584";last_check|i:1525786825;'),
('hno0m2pricbslod8igalopapnjksd9vr', '::1', '', 1525790341, '__ci_last_regenerate|i:1525790341;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525786825";last_check|i:1525787703;'),
('idv78h9dbdsenkdsrkmsn6or63os8gku', '::1', '', 1526082198, '__ci_last_regenerate|i:1526082198;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('ijro8v4ifj79jk6t71eau0egmfvuerpk', '::1', '', 1526250954, '__ci_last_regenerate|i:1526250954;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('j4glgoeu45dqghgrqea2vmnmdirqe9u6', '::1', '', 1526250634, '__ci_last_regenerate|i:1526250634;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('k6aejs0itj5ag41vd2ou569bj8aaj5vj', '::1', '', 1526136902, '__ci_last_regenerate|i:1526136901;'),
('kas517rj57l7oosbl9t96362tligfk7f', '::1', '', 1526047995, '__ci_last_regenerate|i:1526047995;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('kdarh7ak7kh8fj4k271l8v48o3vdqs68', '::1', '', 1526374383, '__ci_last_regenerate|i:1526374202;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526317953";last_check|i:1526374382;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('kumicp6d8pi0n3p4fq4emvphk5dvbh0v', '::1', '', 1526045337, '__ci_last_regenerate|i:1526045337;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('m1i5iabdrf3227gcv3ri02eh9c72aog3', '::1', '', 1526256757, '__ci_last_regenerate|i:1526256757;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('m7fpo9s9v6e3arnj62f6376j4r70ns40', '::1', '', 1526213132, '__ci_last_regenerate|i:1526213130;'),
('m9j0qe5g34m0gr6ae7nuq5qqv6vvgull', '::1', '', 1526084718, '__ci_last_regenerate|i:1526084718;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('mlev2us19dnoh4fh9n4tmbjvjm2p29ru', '::1', '', 1526045014, '__ci_last_regenerate|i:1526045013;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('n1ab5s6ifd3j4liecjk5lsolo4qq25nl', '::1', '', 1526321738, '__ci_last_regenerate|i:1526321737;'),
('nhmn8nh4el99rlget3hb3va7h3uae7ku', '::1', '', 1526163316, '__ci_last_regenerate|i:1526163290;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526075095";last_check|i:1526163314;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('nt3um25gejdepubd1j9s4rb9iavaavqv', '::1', '', 1525800282, '__ci_last_regenerate|i:1525800281;'),
('o4squjs3mmh6n21scq1q70ab4p164uoo', '::1', '', 1526045664, '__ci_last_regenerate|i:1526045664;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('o7vo9geiiiabl7i27th8oihrmvue0der', '::1', '', 1526257114, '__ci_last_regenerate|i:1526257114;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('of674i3ovnsii90hpr114m1d3jlmaiae', '::1', '', 1525866668, '__ci_last_regenerate|i:1525866668;'),
('pb432sqerbdnnbet9la4nn3hps1pj3fu', '::1', '', 1526084368, '__ci_last_regenerate|i:1526084368;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('pv5dm2rsi6jvkgo9rfrsi5n3qq14hq8k', '::1', '', 1526257783, '__ci_last_regenerate|i:1526257783;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('qbcob6hphea40n6vtcr6se1es59t30q3', '::1', '', 1525861343, '__ci_last_regenerate|i:1525861087;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525857013";last_check|i:1525861311;'),
('qj3rca1iebvqkde1k0r1eibhgpeg7p5n', '::1', '', 1526078490, '__ci_last_regenerate|i:1526078490;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('qlcdgivbhr300ba5gfipe4a9trrrvh9n', '::1', '', 1526075463, '__ci_last_regenerate|i:1526075397;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('t4ihc5irl3056mgh41bpmrgf0hc4p30c', '::1', '', 1526317974, '__ci_last_regenerate|i:1526317817;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526296397";last_check|i:1526317953;'),
('t9ok8b9er34hcv7gfm4f9obd4i2smkub', '::1', '', 1526083556, '__ci_last_regenerate|i:1526083556;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;'),
('teio6msd7n5ihn52bc1rui3h0mtcmolf', '::1', '', 1525787839, '__ci_last_regenerate|i:1525787650;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525786825";last_check|i:1525787703;'),
('th04flral28blnaslq8b1c69c1em7kgv', '::1', '', 1526044149, '__ci_last_regenerate|i:1526044074;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('ue0hsealnncri8jabrajqp57bt13ecmb', '::1', '', 1526053290, '__ci_last_regenerate|i:1526053290;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('ukmjd98njffishn63vkhmq5k6po5etll', '::1', '', 1526296540, '__ci_last_regenerate|i:1526296372;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249634";last_check|i:1526296397;'),
('usuhk4dv73gonrkragum8rjnd8f98j5k', '::1', '', 1526259463, '__ci_last_regenerate|i:1526259463;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526249086";last_check|i:1526249634;'),
('v6kujf324j0h36fljjtvb3m6rqfuit9u', '::1', '', 1526052281, '__ci_last_regenerate|i:1526052280;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('v88vnru5b2p9iag1ve5dtl5setb5ss91', '::1', '', 1526052929, '__ci_last_regenerate|i:1526052929;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1525861311";last_check|i:1526044114;'),
('vn341fum23lk0u2lnlf4lkfm1v0uovmh', '::1', '', 1525865060, '__ci_last_regenerate|i:1525864917;success-message|s:26:"Compte créé avec succès";__ci_vars|a:1:{s:15:"success-message";s:3:"old";}'),
('vt7jcj1k9ethcg16c4s0on3814pgvoas', '::1', '', 1526081105, '__ci_last_regenerate|i:1526081104;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1526044114";last_check|i:1526075095;');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`, `categorie`, `created_at`, `date_modif`, `statut`) VALUES
(1, 'Comment passer une commande?', '<p>Je suis oblig&eacute; de te repondre? pardon hein!!!!</p>\r\n', '', '2018-05-14 02:19:48', '2018-05-14 01:33:48', 0);

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
(6, 'Appartement meublé', 'welcome/index', 'yeeeeeeeeeeeeeeee', '<p>P&eacute;tite descriptionP&eacute;tite description</p>\r\n', 'Pétite descriptionPétite descriptionPétite description', 0, 3, 0, '2018-05-11 17:41:30', '2018-05-12 00:14:37'),
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `id_ticket`, `id_user`, `message`, `created_at`) VALUES
(1, 8, 1, '<p>Saisissez le message ici</p>\r\n', '2018-05-07 08:11:09'),
(2, 9, 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:50:44'),
(3, 10, 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:52:15');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_domaines`
--

INSERT INTO `produits_domaines` (`id`, `extension`, `prix`, `prix_renouv`, `prix_xfer`, `frequence`, `description`, `conditions`, `api`, `lang`, `categories_produit`, `statut`, `date_modif`) VALUES
(8, '.cm', 9000, 9000, 9000, 'Annuelle', 'Extension spécifique pour le Cameroun', NULL, '', 1, 1, 0, '2018-05-12 01:01:03'),
(9, '.com', 7500, 7500, 7500, 'Annuelle', 'Idéale pour des activités commerciales', NULL, '', 1, 1, 0, '0000-00-00 00:00:00'),
(10, '.fr', 16000, 16000, 16000, 'Annuelle', 'Extension spécifique pour la France', NULL, '', 1, 1, 1, '2018-05-12 01:00:49');

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
  `bases-donnees` varchar(255) NOT NULL,
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

INSERT INTO `produits_hebergements` (`id`, `nom`, `disque`, `site_web`, `prix`, `frequence`, `adresses_email`, `bande_passante`, `sous_domaines`, `bases-donnees`, `stockage_email`, `pieces_jointes`, `comptes_ftp`, `lang`, `categories_produit`, `statut`, `date_modif`) VALUES
(1, 'Classique pro', '100', '11', 12000, 3, '121', 'Illimité', '12', '', '12MO', '12MO', '12', 1, 2, 0, '2018-05-12 01:07:17'),
(2, 'Classique pro', '100', '11', 12000, 3, '121', 'Illimité', '12', '', '12MO', '12MO', '12', 1, 2, 0, '0000-00-00 00:00:00'),
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_vps`
--

INSERT INTO `produits_vps` (`id`, `nom`, `processeur`, `ram`, `disque`, `bande`, `prix`, `frequence`, `visiteurs_simult`, `cores`, `systeme_exploit`, `use_case`, `lang`, `categories_produit`, `statut`, `date_modif`) VALUES
(1, 'LIN1', 'Intel XEON ou AMD Radeon', '2 Go', '25 Go', '1 To', 8500, 2, 75, '1', 'linux', 'Site internet simple avec moins d''une centaine de visiteurs simultanes', 1, 3, 0, 2147483647),
(2, 'Starter', '6GHZ', '2GO', '1 Tera', '12T', 22000, 2, 23, '2', 'CentOS 7', 'site vittrine', 1, 3, 1, 2147483647),
(3, 'Starter', '6GHZ', '2GO', '1 Tera', '12T', 22000, 2, 23, '2', 'CentOS 7', 'site vittrine', 1, 3, 0, 0);

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
(1, 'linux', 'CentOS 7', 1, '2018-05-12 01:16:15'),
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
(2, 'Je confirme', 1, 'Disponibilité', '<p>Saisissez le temoignage iciSaisissez le temoignage iciSaisissez le temoignage iciSaisissez le temoignage ici</p>\r\n', '2018-05-05 20:44:21', '0000-00-00 00:00:00', 0),
(3, 'Déception', 1, 'Disponibilité', '<p>Saisissez le temoignage ici</p>\r\n', '2018-05-12 01:30:20', '2018-05-12 00:30:32', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ticket`
--

INSERT INTO `ticket` (`id`, `objet`, `id_user`, `contenu`, `created_at`, `date_modif`, `statut`) VALUES
(1, 'Félicitation', 1, 'Je confirme seulement votre service il est vraiemnt de qualit&eacute;', '2018-05-04 17:01:27', '0000-00-00 00:00:00', 1),
(2, 'Je confirme', 1, 'Saisissez le temoignage iciSaisissez le temoignage iciSaisissez le temoignage iciSaisissez le temoignage ici', '2018-05-05 20:44:21', '0000-00-00 00:00:00', 0),
(3, 'Probleme avec le cpanel', 1, 'Bonjour monsieur svp j&#39;ai des soucis la avec mon cpanel', '2018-05-07 07:57:36', '0000-00-00 00:00:00', 0),
(4, 'Probleme avec le cpanel', 1, 'Bonjour monsieur svp j&#39;ai des soucis la avec mon cpanel', '2018-05-07 08:00:31', '0000-00-00 00:00:00', 0),
(5, 'Probleme avec le cpanel', 1, 'Bonjour monsieur svp j&#39;ai des soucis la avec mon cpanel', '2018-05-07 08:00:50', '0000-00-00 00:00:00', 0),
(6, 'Probleme avec le cpanel', 1, 'Saisissez le message ici', '2018-05-07 08:05:47', '0000-00-00 00:00:00', 0),
(7, 'Probleme avec le cpanel', 1, 'Saisissez le message ici', '2018-05-07 08:10:14', '0000-00-00 00:00:00', 0),
(8, 'Probleme avec le cpanel', 1, 'Saisissez le message ici', '2018-05-07 08:11:09', '2018-05-12 00:35:08', 1),
(9, 'On s''enfou', 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:50:44', '0000-00-00 00:00:00', 0),
(10, 'On s''enfou', 1, '                                  On s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfouOn s''enfou', '2018-05-14 02:52:15', '0000-00-00 00:00:00', 0);

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
  `address` varchar(88) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `city`, `country`, `postcode`, `address`, `state`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'itMl577y2UH05GH9PJKxy.', 1268889823, 1526374382, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', '', ''),
(2, '::1', 'eleguealamaherve@gmail.com', '$2y$08$S7AsIXm53wr.RwGMPbMEkOisNPeQNawrHQR.XJ/cCmM32ezX4Rh7y', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, 'qr839WnRAJZI.bdzKj.wne', 1520942685, 1520946470, 1, 'Herve', 'Elegue', 'Agrisoft', '655923687', 'Yaounde', 'CM', '237', 'Mvog-Mbi', 'EST'),
(3, '', NULL, 'le codeur!!!!!', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, 1, 'Mboahost', 'tous', 'Agrisoft', '655923687', '', 'CM', '', '', ''),
(4, '::1', 'hervecodeur@gmail.com', '$2y$08$aa9/tyGdpo0KHLs2koGlVuPIg2TZSM2cl8ztTC.rgObwHJnYVc2L.', NULL, 'hervecodeur@gmail.com', NULL, NULL, NULL, NULL, 1525135036, 1525856957, 1, 'Herve', 'Elegue', NULL, '+237 655923687', 'Yaounde', 'CM', '237', 'Mvog-Mbi', 'CEN'),
(5, '::1', 'herve@gmail.com', '$2y$08$mBGy0Dw6yaNqYpykHrbH/OjLPFVyqOLmQMdpjvMdC3JaSigbA1aaG', NULL, 'herve@gmail.com', NULL, NULL, NULL, NULL, 1525865057, NULL, 1, 'Victorine', 'Bofia', NULL, '+237 655923683', 'Yaounde', 'CM', '237', 'Mvog-Mbi', 'LIT');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(8, 2, 2),
(7, 3, 1),
(9, 4, 2),
(10, 5, 2);

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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `produits_domaines`
--
ALTER TABLE `produits_domaines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `produits_hebergements`
--
ALTER TABLE `produits_hebergements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `produits_vps`
--
ALTER TABLE `produits_vps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
