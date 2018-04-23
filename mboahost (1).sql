-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Avril 2018 à 23:53
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mboahost`
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
  `type` varchar(33) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `addons`
--

INSERT INTO `addons` (`id`, `nom`, `description`, `lang`, `prix`, `frequence`, `type`) VALUES
(1, 'Installation Wordpress', 'nous installons votre cms wordpress après activation de votre compte', 1, 5000, 'Trimestrielle', 'optionnel'),
(2, 'Installation Wordpress', 'nous installons votre cms wordpress après activation de votre compte', 1, 5000, 'Trimestrielle', 'optionnel'),
(3, 'Adresse ip', 'installation d''une ipo dédiée', 1, 6000, 'Mensuelle', 'optionnel');

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
('0am2df01v7jqfrcsn899uuf0ln5fdbr8', '::1', '', 1524491864, '__ci_last_regenerate|i:1524491667;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"YweDMzJK";__ci_vars|a:2:{s:7:"csrfkey";s:3:"old";s:9:"csrfvalue";s:3:"old";}csrfvalue|s:20:"R1oMNvqS9PY5hzDdksf6";'),
('1c6rrjsj3diu86caovpbuv982loqmh3v', '::1', '', 1524395247, '__ci_last_regenerate|i:1524395246;'),
('1eme33bdelauchfvql532l814t03vjqh', '::1', '', 1524064792, '__ci_last_regenerate|i:1524064674;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524064638";last_check|i:1524064766;'),
('1j6de8dg7e206fprae9f56unj3q3qe3i', '::1', '', 1524488876, '__ci_last_regenerate|i:1524488618;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"r41pfzH5";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"NkGnwTOD0qmoXLrh3fpB";'),
('1pmnoa7a29ms4ji0iuq77jrl246cd0lj', '::1', '', 1524070115, '__ci_last_regenerate|i:1524070115;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('2jq2ne70lusosnrs6g7u4bdg4kqeneuv', '::1', '', 1524487472, '__ci_last_regenerate|i:1524487176;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('38dh2b9i1di7c8bdv9rb4stdtoeeea6o', '::1', '', 1524493013, '__ci_last_regenerate|i:1524492739;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;message|s:21:"<p>Compte activé</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('3fn2iipa9iba7ee4nbpli6kgd7vi9uug', '::1', '', 1524512653, '__ci_last_regenerate|i:1524512652;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524489855";last_check|i:1524506177;'),
('3u0bf7b3i6hdbpjdmhj0gbakbvna6e57', '::1', '', 1524393191, '__ci_last_regenerate|i:1524393190;'),
('4k5vgu65g309mj4fnv7vnoc8lr6d43kv', '::1', '', 1524388817, '__ci_last_regenerate|i:1524388817;'),
('4lsms1f88pc4kcbm6v6a4k7cbo1tkf6n', '::1', '', 1524493511, '__ci_last_regenerate|i:1524493223;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"4ylwabXR";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"RUa0G5XzTBylLexpnsO4";'),
('4qnij86rvg7cbuslo4tee6rpnvj9r51g', '::1', '', 1524396763, '__ci_last_regenerate|i:1524396568;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065219";last_check|i:1524396588;csrfkey|s:8:"TJF6Ymla";__ci_vars|a:2:{s:7:"csrfkey";s:3:"old";s:9:"csrfvalue";s:3:"old";}csrfvalue|s:20:"0UOYEZn3NTeltRaogsdM";'),
('59s24o5vpba5fqtoocjgl7903hick88q', '::1', '', 1524505513, '__ci_last_regenerate|i:1524505512;'),
('6eobjak11qfafumttf0h3ff3nn6fmi8j', '::1', '', 1524062122, '__ci_last_regenerate|i:1524062122;'),
('6lsrk8iojfov50a2j38c47k71a7jms7n', '::1', '', 1524495378, '__ci_last_regenerate|i:1524495186;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;__ci_vars|a:1:{s:7:"message";s:3:"old";}message|s:50:"<p>Compte utilisateur mis à jour avec succès</p>";'),
('6s2jpai85i0j43mj43ess75si26m81in', '::1', '', 1524056362, '__ci_last_regenerate|i:1524056361;'),
('77ibruki6eln51n0fncta1ee413to42v', '::1', '', 1524063003, '__ci_last_regenerate|i:1524063003;'),
('77sr8p8lgq8po9hr82u86c547toiqljn', '::1', '', 1524061610, '__ci_last_regenerate|i:1524061610;'),
('7ademtjaqt7t83173us6gvkq2unolpro', '::1', '', 1524506191, '__ci_last_regenerate|i:1524505921;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524489855";last_check|i:1524506177;csrfkey|s:8:"OIUziSvb";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"LrfQ23buqh9GtcHCUmeI";'),
('7h71vc6uof5o55va98h84dp443441012', '::1', '', 1524492248, '__ci_last_regenerate|i:1524491975;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"wM9qWiBD";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"ue2lqVsRGw6vOEIS3Xrk";'),
('7ngsa88q0v5e65nund787vb6bp3s2ist', '::1', '', 1524390302, '__ci_last_regenerate|i:1524390301;'),
('838n1uqr5hn7f0nalsrnj1d06pvcg7ut', '::1', '', 1524493598, '__ci_last_regenerate|i:1524493598;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"JYVLshup";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"GD0QrnRkI8YP1U3uTeSg";'),
('8j3ahb16690irm8kb64tv1dehppfvblq', '::1', '', 1524388129, '__ci_last_regenerate|i:1524388127;'),
('973g2j2c5muh1fe04n7e3jkk7p52e3h0', '::1', '', 1524070880, '__ci_last_regenerate|i:1524070880;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('ajcb4qnb0t24hhslh0a1vrvlnqnrohsv', '::1', '', 1524514815, '__ci_last_regenerate|i:1524514734;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524489855";last_check|i:1524506177;csrfkey|s:8:"GopszeSb";__ci_vars|a:2:{s:7:"csrfkey";s:3:"old";s:9:"csrfvalue";s:3:"old";}csrfvalue|s:20:"OLpwCIyi7mR0TXS2jUFh";'),
('amjg064a1n8mrs7k4h3oohldvjh8p413', '::1', '', 1524394582, '__ci_last_regenerate|i:1524394579;'),
('asvldvph4eak09ahvcktd0vb6udllu42', '::1', '', 1524490840, '__ci_last_regenerate|i:1524490601;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"d3eb0IJM";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"RJr7Zoh8fbaCS5HTkQMx";'),
('b9islvtoc789tn11fnvoonmiadsodnun', '::1', '', 1524491162, '__ci_last_regenerate|i:1524490927;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"krei38Ts";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"hz9FgfutNsY4UlP0onCK";'),
('cobjb8dtaqk8o5qqo873gdm3jsmc45p4', '::1', '', 1524489875, '__ci_last_regenerate|i:1524489855;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524487471";last_check|i:1524489855;csrfkey|s:8:"wS8klfKq";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"Bky82I4GZF16rC5lXS7H";'),
('d1te84jslr38g4nm4kj2675npge41dbd', '::1', '', 1524056682, '__ci_last_regenerate|i:1524056682;'),
('dh131mr6u0bktmvucs3rqog18f9hvhnv', '::1', '', 1524394923, '__ci_last_regenerate|i:1524394922;'),
('dj6kkkp8tt1r34r5652vmrpiepqedj2u', '::1', '', 1524057311, '__ci_last_regenerate|i:1524057311;'),
('djmr5tslauedv21f3r1mdg4amajqauv6', '::1', '', 1524389761, '__ci_last_regenerate|i:1524389761;'),
('e0dnl8msh16qvin2ho47mdut77gifofe', '::1', '', 1524489142, '__ci_last_regenerate|i:1524489142;'),
('e2remhg13cjiu7vu3cj1tsjhabr91hsa', '::1', '', 1524072098, '__ci_last_regenerate|i:1524072097;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('fg9bq4lftth812mg5k74cpg4djvjfnl9', '::1', '', 1524389430, '__ci_last_regenerate|i:1524389429;'),
('fgfia8cbbdfvenc8bgro4v0o1ij2rvsc', '::1', '', 1524059896, '__ci_last_regenerate|i:1524059896;'),
('fgv91p5gene8k6v23g7rjd52sl9b305f', '::1', '', 1524491548, '__ci_last_regenerate|i:1524491291;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"S8WqMUT4";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"zEF3vWhuirMDBSO8Tb0A";'),
('fj30eaoa0t5833kdapq4h0vcc6v5lkqv', '::1', '', 1524396044, '__ci_last_regenerate|i:1524396043;'),
('fqge3psf4uti0urs75if6qgel7b57dt5', '::1', '', 1524504810, '__ci_last_regenerate|i:1524504809;'),
('g0qto0ujtl969fsqgiaogrov7hdhvlh2', '::1', '', 1524392811, '__ci_last_regenerate|i:1524392811;'),
('g5589jivklmchhr5a5mdmguke5c1hqtu', '::1', '', 1524059538, '__ci_last_regenerate|i:1524059538;'),
('graj0qqv726fk02tt18a731bphe06phm', '::1', '', 1524071236, '__ci_last_regenerate|i:1524071236;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('h4jr8dlhj121eacghgvk44d7d04ga7tm', '::1', '', 1524068324, '__ci_last_regenerate|i:1524068324;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('hmqkcmlfd6nue1ft2ad0gl619tutd27s', '::1', '', 1524505126, '__ci_last_regenerate|i:1524505126;'),
('hn70afdo7h60q2qtcjvgnv9iv8sjp09f', '::1', '', 1524490530, '__ci_last_regenerate|i:1524490530;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524487471";last_check|i:1524489855;csrfkey|s:8:"0i3Hw7hO";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"TJF6YmlaOCPQqSpXke10";'),
('i3ouphkb9gr22jo7snr90t4at15v4enp', '::1', '', 1524506750, '__ci_last_regenerate|i:1524506568;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524489855";last_check|i:1524506177;csrfkey|s:8:"rKeTxcPX";__ci_vars|a:2:{s:7:"csrfkey";s:3:"old";s:9:"csrfvalue";s:3:"old";}csrfvalue|s:20:"gD4aKUu0nGP9p2XQF5Lr";'),
('ib3tpnat1gpg27nqsdnqspm723fr8ncf', '::1', '', 1524062615, '__ci_last_regenerate|i:1524062615;'),
('jj2375t9lunflife8nromck93u2pjuoi', '::1', '', 1524495738, '__ci_last_regenerate|i:1524495671;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"ZTNGfuam";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"TjzL6IpmnOGv2HiWulfC";'),
('juankghbgcol01vefvt78dm981rg7pek', '::1', '', 1524069577, '__ci_last_regenerate|i:1524069577;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('kca4sp6loealquipnblk8l0ms4bjtjn3', '::1', '', 1524494710, '__ci_last_regenerate|i:1524494487;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"Ur7R1bL3";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"y0dhwIeL79VfMD5q3bsc";'),
('kcnitjrj9ivbk9tceo8ipnhjdlqq8leq', '::1', '', 1524518810, '__ci_last_regenerate|i:1524518810;'),
('khifk9osmjcjb30ul8fj2jfu5ss8ndkp', '::1', '', 1524397279, '__ci_last_regenerate|i:1524397132;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065219";last_check|i:1524396588;csrfkey|s:8:"tMgD5rXq";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"url0HMGVXD9fywgLcIJ3";'),
('khthou0vcvc45s78t36accg0j0p9j7ie', '::1', '', 1524397527, '__ci_last_regenerate|i:1524397446;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065219";last_check|i:1524396588;csrfkey|s:8:"EGLzhZD6";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"PjHY3oLIbklQFy2MSwgG";'),
('kmqkb8d16hfnf3lofuhc7bjterf8lriv', '::1', '', 1524060347, '__ci_last_regenerate|i:1524060347;'),
('ljnb5arfjbguigfkmjeha4fr697vq38p', '::1', '', 1524067782, '__ci_last_regenerate|i:1524067782;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('mhlsn0a3s86ta4t4qc88lsf2okbi7kph', '::1', '', 1524057881, '__ci_last_regenerate|i:1524057880;'),
('mnhgn8fdmen79luager8c803ioap4qk0', '::1', '', 1524492580, '__ci_last_regenerate|i:1524492289;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"YMGrhkQ6";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"ZnqfTKuo3ksg2jdWvhp7";'),
('n39m97inhql5588d72jstb6ectbuvs7o', '::1', '', 1524494987, '__ci_last_regenerate|i:1524494874;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"n4uDmCM0";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"WZys4PtIYbng3fjO2S6q";'),
('na07vmmiergo9sg90emk5057b3t3nsdf', '::1', '', 1524487492, '__ci_last_regenerate|i:1524487492;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"oBODdPig";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"JCTve5K90GmkU3HNjdZX";'),
('ngf6hp93fjjhufv4p0usibb0m3dv06s7', '::1', '', 1524068680, '__ci_last_regenerate|i:1524068680;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('nvl8ab7h97sbluu6ui2lnrp9ren8gp5t', '::1', '', 1524395556, '__ci_last_regenerate|i:1524395556;'),
('o0id5t5ibf077e2pgd29esg463qf68u8', '::1', '', 1524066726, '__ci_last_regenerate|i:1524066726;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('ogi6bu338ii1hbke2qi9u1sh24qlim48', '::1', '', 1524518520, '__ci_last_regenerate|i:1524518234;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524489855";last_check|i:1524506177;csrfkey|s:8:"42vCSQa1";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"kO18Da4YfFIcLqn6PEZ3";'),
('ov8v1h8rpcu4ri827f79q8biecb3u2kq', '::1', '', 1524063435, '__ci_last_regenerate|i:1524063434;'),
('pfm4t1sedr0sekutvpvrq74t71nnusfk', '::1', '', 1524067460, '__ci_last_regenerate|i:1524067460;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('qd76kh6tc8udenu7u9qoikqfl2olo7kj', '::1', '', 1524489868, '__ci_last_regenerate|i:1524489666;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"ImkjOnwX";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"DM2IFpEVTBCUf6gldWij";'),
('qoav8q8o3phidn7v1je7a14ornau57k4', '::1', '', 1524058209, '__ci_last_regenerate|i:1524058209;'),
('rb3fm3g4dtjsslv97k5fo47rqom91lvl', '::1', '', 1524058918, '__ci_last_regenerate|i:1524058918;'),
('rh833pmauhjete12odc24ontbvfl8nbo', '::1', '', 1524391257, '__ci_last_regenerate|i:1524391256;'),
('rq4cfbu8ptvhk7fa6o4pif58e4oluu6h', '::1', '', 1524069105, '__ci_last_regenerate|i:1524069105;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('s1jpp2v6t1gpoh6hpdsgmelrnc6vegtk', '::1', '', 1524488301, '__ci_last_regenerate|i:1524488036;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"BuX0zbJ8";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"unG26J0OvyjkLxfR4Cga";'),
('sbqh4tr6os13pim2tvpo6dp9as0ta4k5', '::1', '', 1524059224, '__ci_last_regenerate|i:1524059223;'),
('sqq6e9gcs3ukgc0i2a87crtk09msjtrg', '::1', '', 1524390640, '__ci_last_regenerate|i:1524390640;'),
('t2p554qldtphtnv1gpk8vd0a7v1u5vq9', '::1', '', 1524065241, '__ci_last_regenerate|i:1524065124;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('td7pcq7k86gen3338935c3u6u1tbpojj', '::1', '', 1524504810, '__ci_last_regenerate|i:1524504809;'),
('thagovsrp0skb5i9e5onai136m6uhl5h', '::1', '', 1524066323, '__ci_last_regenerate|i:1524066323;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('u6i01040al1a6nrf9r2hunpitfv54022', '::1', '', 1524504810, '__ci_last_regenerate|i:1524504809;'),
('v3i3o6ng0ob6o0m8gd1gf3u1ghbjqvji', '::1', '', 1524065578, '__ci_last_regenerate|i:1524065577;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524065137";last_check|i:1524065219;'),
('v5o59car1uub1pab111fsbs1bks48q8p', '::1', '', 1524489049, '__ci_last_regenerate|i:1524488954;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"fgahkxDj";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"YdzVuZ7M08AUB2RCDhmb";'),
('v7om91heu46h14ctuevn2ncf0nnr7ira', '::1', '', 1524061059, '__ci_last_regenerate|i:1524061058;'),
('vkov3dcdot5jhcksblj1f86qi73l63bt', '::1', '', 1524494290, '__ci_last_regenerate|i:1524494084;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1524396588";last_check|i:1524487471;csrfkey|s:8:"zUKVmCxJ";__ci_vars|a:2:{s:7:"csrfkey";s:3:"new";s:9:"csrfvalue";s:3:"new";}csrfvalue|s:20:"fK2Ap1sLUgN90BCmiaGr";');

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
  `categories_produit` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_domaines`
--

INSERT INTO `produits_domaines` (`id`, `extension`, `prix`, `prix_renouv`, `prix_xfer`, `frequence`, `description`, `conditions`, `api`, `lang`, `categories_produit`) VALUES
(1, '', 0, 0, 0, '1', '', NULL, '', 1, 1),
(2, '.com', 12000, 12000, 21000, '1', 'aucune description', NULL, '', 1, 1),
(3, '.net', 12000, 12222, 12000, '3', 'yesssssssssss', NULL, '', 1, 1),
(4, '.org', 9500, 10000, 1000, '1', 'aucune', NULL, '', 1, 1),
(5, '.cm', 9500, 11500, 12000, '4', 'yes', NULL, '', 1, 1),
(6, '.cm', 9500, 11500, 12000, '4', 'yes', NULL, '', 1, 1),
(7, '.afro', 12000, 11000, 11000, 'Semestrielle', 'aucune description', NULL, '', 1, 1);

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
  `categories_produit` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_hebergements`
--

INSERT INTO `produits_hebergements` (`id`, `nom`, `disque`, `site_web`, `prix`, `frequence`, `adresses_email`, `bande_passante`, `sous_domaines`, `bases-donnees`, `stockage_email`, `pieces_jointes`, `comptes_ftp`, `lang`, `categories_produit`) VALUES
(1, 'Classique pro', '100', '11', 12000, 3, '121', 'Illimité', '12', '', '12MO', '12MO', '12', 1, 2),
(2, 'Classique pro', '100', '11', 12000, 3, '121', 'Illimité', '12', '', '12MO', '12MO', '12', 1, 2),
(3, 'Starter', '10', '1', 8500, 2, '10', 'Illimité', '6', '11', '122 MO', '12MO', '3', 1, 2);

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
  `categories_produit` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits_vps`
--

INSERT INTO `produits_vps` (`id`, `nom`, `processeur`, `ram`, `disque`, `bande`, `prix`, `frequence`, `visiteurs_simult`, `cores`, `systeme_exploit`, `use_case`, `lang`, `categories_produit`) VALUES
(1, 'LIN1', 'Intel XEON ou AMD Radeon', '2 Go', '25 Go', '1 To', 8500, 2, 75, '1', 'linux', 'Site internet simple avec moins d''une centaine de visiteurs simultanes', 1, 3),
(2, 'Starter', '6GHZ', '2GO', '1 Tera', '12T', 22000, 2, 23, '2', 'CentOS 7', 'site vittrine', 1, 3),
(3, 'Starter', '6GHZ', '2GO', '1 Tera', '12T', 22000, 2, 23, '2', 'CentOS 7', 'site vittrine', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `systemes_exp`
--

CREATE TABLE IF NOT EXISTS `systemes_exp` (
`id` int(11) NOT NULL,
  `os` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `systemes_exp`
--

INSERT INTO `systemes_exp` (`id`, `os`, `name`) VALUES
(1, 'linux', 'CentOS 7'),
(2, 'windows', 'WINDOWS 2012 R2'),
(3, 'Linux', 'Linux 3232');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `city`, `country`, `postcode`, `address`, `state`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'itMl577y2UH05GH9PJKxy.', 1268889823, 1524506177, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', '', ''),
(2, '::1', 'eleguealamaherve@gmail.com', '$2y$08$sWDsc/Pa5xD8Wkn8gl4wT.uKqs6k8.r2PgNO4wI9tmmfKpNid1bJK', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, 'qr839WnRAJZI.bdzKj.wne', 1520942685, 1520946470, 1, 'Herve', 'Elegue', 'Agrisoft', '655923687', '', '', '', '', ''),
(3, '', NULL, 'le codeur!!!', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, 1, 'Mboahost', 'tous', 'Agrisoft', '655923687', '', 'CM', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(7, 3, 1);

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
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `last_activity_idx` (`timestamp`);

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
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `produits_domaines`
--
ALTER TABLE `produits_domaines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
