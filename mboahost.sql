-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Avril 2018 à 18:18
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
  `frequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('0g0b298kge43j28km38kvpqvpovke34g', '::1', '', 1520604992, '__ci_last_regenerate|i:1520604992;'),
('0plbag801tdi61vjvmhctldu433qa01f', '::1', '', 1523659383, '__ci_last_regenerate|i:1523659381;'),
('0sa1mbtqsvbflklkutmntg426cm0guk6', '::1', '', 1523826791, '__ci_last_regenerate|i:1523826791;'),
('0u0gcq7saihkpq63qm0rhu4nlg40u9ht', '::1', '', 1523548488, '__ci_last_regenerate|i:1523548488;'),
('12dg5rdim6f89opm13p8jbgu0fdcr2v7', '::1', '', 1523376106, '__ci_last_regenerate|i:1523376105;'),
('1hil856o5396l3p9v1o98e3aqo4rgqin', '::1', '', 1523830956, '__ci_last_regenerate|i:1523830956;site_lang|s:7:"english";'),
('1jfealgl5lf4gsogaupu3ucevcc6eoe9', '::1', '', 1523565960, '__ci_last_regenerate|i:1523565960;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('1qpgt6csb8ad7cbcsdb1mj0den2ii37e', '::1', '', 1523563959, '__ci_last_regenerate|i:1523563959;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('1tlvkfguhrum3s9i9qg6ecjtc6n2uhkj', '::1', '', 1523574632, '__ci_last_regenerate|i:1523574564;site_lang|s:7:"english";identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523569125";last_check|i:1523574577;'),
('2a289aflanf2q3nfct6i1vjv9b6ra6he', '::1', '', 1520942685, '__ci_last_regenerate|i:1520942685;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520942443";last_check|i:1520942525;'),
('2blo4rpaeguss9esv32jihl331mrs5tg', '::1', '', 1520622551, '__ci_last_regenerate|i:1520622551;'),
('2d5qdc1erk4t9vfh7dee7mj2m78jf4rf', '::1', '', 1523709748, '__ci_last_regenerate|i:1523709747;site_lang|s:6:"french";'),
('2h7lo9125fbdv7d4q467lv2nts7jdbdb', '::1', '', 1520620539, '__ci_last_regenerate|i:1520620539;'),
('2rcobfu71g82lq5midab3lpfb6e58vjj', '::1', '', 1523829741, '__ci_last_regenerate|i:1523829740;site_lang|s:7:"english";'),
('2vs349rqmnuqmhigj576akhure3vra4t', '::1', '', 1523581405, '__ci_last_regenerate|i:1523581405;'),
('37putrghmscibn1ig4qp1vnsb43l8j3o', '::1', '', 1523877316, '__ci_last_regenerate|i:1523877316;site_lang|s:7:"english";'),
('39oq35iq50dc3ej4r3bif2ep2tena67r', '::1', '', 1523829436, '__ci_last_regenerate|i:1523829436;site_lang|s:7:"english";'),
('3gksfd57ncuheeocj82610uaphcf8qog', '::1', '', 1520697554, '__ci_last_regenerate|i:1520697554;site_lang|s:6:"french";'),
('3pc7cb0ds6nsj3s3os4t4k98g92pf8fm', '::1', '', 1520618533, '__ci_last_regenerate|i:1520618533;'),
('48u4kpt8uip3kgbfalggcpb2je36iqj2', '::1', '', 1520946618, '__ci_last_regenerate|i:1520946599;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520942525";last_check|i:1520946615;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('4elp4mpun8kln6mcsofibq7778hh6jki', '::1', '', 1523704050, '__ci_last_regenerate|i:1523704049;site_lang|s:6:"french";'),
('552kr3ub4r526rrf2mf114mlc2qpa4k1', '::1', '', 1523552775, '__ci_last_regenerate|i:1523552775;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('55hu92nam5lrk885tpprmhiptm2rup47', '::1', '', 1520615904, '__ci_last_regenerate|i:1520615904;'),
('567v74udakc6847bd4i34hlqdumlvgdj', '::1', '', 1520615593, '__ci_last_regenerate|i:1520615593;'),
('5j80ve197ch9a8istm7ch83epi2l39s3', '::1', '', 1523661349, '__ci_last_regenerate|i:1523661284;site_lang|s:7:"english";'),
('5negsb5uid399e949pc0ld1n06sr903b', '::1', '', 1520943563, '__ci_last_regenerate|i:1520943563;identity|s:26:"eleguealamaherve@gmail.com";email|s:26:"eleguealamaherve@gmail.com";user_id|s:1:"2";old_last_login|N;last_check|i:1520943221;'),
('5pikadvttujctj1dofe47ma81ff0m9no', '::1', '', 1523567602, '__ci_last_regenerate|i:1523567601;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('6c6678iqk03ndr954b8dfqm5u6q8iosa', '::1', '', 1520617769, '__ci_last_regenerate|i:1520617769;'),
('7al0sfvm4r71a1ugla4od7cn5vcrc5pl', '::1', '', 1520609310, '__ci_last_regenerate|i:1520609310;'),
('7ecdkt5b8q5qg2beclg82v2s875072sj', '::1', '', 1523616215, '__ci_last_regenerate|i:1523616215;'),
('7klo1uads5fsvt3geru4vpo4ss5fav6v', '::1', '', 1523550877, '__ci_last_regenerate|i:1523550877;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('7odm3ouvfnoll6khquoqas0t6uep4q9d', '::1', '', 1523552419, '__ci_last_regenerate|i:1523552419;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('7rsejjq325t26gf98dle2nuv2jre69m6', '::1', '', 1520598476, '__ci_last_regenerate|i:1520598476;'),
('7t8kku5deaom9du9flcp4bvet7ag2ua9', '::1', '', 1523870304, '__ci_last_regenerate|i:1523870304;'),
('818qcrpsj30uu669g6lh4bjo0ot7ej5m', '::1', '', 1523870013, '__ci_last_regenerate|i:1523869965;site_lang|s:6:"french";'),
('863bbdtdrvsaaf9dqm1t7d7scbjvee1v', '::1', '', 1523348892, '__ci_last_regenerate|i:1523348851;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520946615";last_check|i:1523348571;'),
('89gbk31ptb86ftqtkfvq74ludfmq8gkl', '::1', '', 1523564460, '__ci_last_regenerate|i:1523564459;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('8j1tcbokmhhfcmvkiemvqran05ksosj4', '::1', '', 1523568422, '__ci_last_regenerate|i:1523568422;'),
('8l92bo7k6c84ekcrsvsqrbae24u04eh4', '::1', '', 1520609744, '__ci_last_regenerate|i:1520609744;'),
('8u6rllbpu1jfr6qf2d7l4oo7vblkhkhd', '::1', '', 1523703476, '__ci_last_regenerate|i:1523703475;site_lang|s:6:"french";'),
('9542qqfjpih21u622b6tp2522fp7juv5', '::1', '', 1523354588, '__ci_last_regenerate|i:1523354586;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520946615";last_check|i:1523348571;'),
('95u50l59d4489vksuf3po120fririe53', '::1', '', 1520614950, '__ci_last_regenerate|i:1520614950;'),
('9glbjltojj37ouqs3dv1813oh5mmu2ct', '::1', '', 1523872872, '__ci_last_regenerate|i:1523872872;site_lang|s:7:"english";'),
('9im8ehbd2dnmiag0sh4ds4lnpp28joia', '::1', '', 1523548824, '__ci_last_regenerate|i:1523548823;'),
('9j46aqtun3utflnohoopqdun7sn41o6j', '::1', '', 1523708183, '__ci_last_regenerate|i:1523708182;site_lang|s:6:"french";'),
('9s1kkot2vcf38qaf6bn5utek3r89mt1h', '::1', '', 1520604328, '__ci_last_regenerate|i:1520604328;'),
('9s2qnq8e8do2rlg7nlm6elkvbh2j7r2k', '::1', '', 1520598108, '__ci_last_regenerate|i:1520598108;'),
('9ssf41d6llae8400e8du76fdq2r434nh', '::1', '', 1523875763, '__ci_last_regenerate|i:1523875763;site_lang|s:7:"english";'),
('a03pran34ljk6kal777a0pceq0qsiho9', '::1', '', 1520618855, '__ci_last_regenerate|i:1520618855;'),
('a6a9deuij4lo29fpbor557reagf12uk9', '::1', '', 1523827434, '__ci_last_regenerate|i:1523827434;'),
('aj5a2dkcqva8qs63oqkh7pccppg90lr4', '::1', '', 1523871662, '__ci_last_regenerate|i:1523871662;site_lang|s:7:"english";'),
('apgcr2pql30mq2spm3jv6ebthilta7rj', '::1', '', 1523614587, '__ci_last_regenerate|i:1523614587;'),
('bip6qqfqt71ndh3qedk0m8cd9rsg66p7', '::1', '', 1523553229, '__ci_last_regenerate|i:1523553229;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('bkai91qgj6nfehvmb332f5ven8shv5bm', '::1', '', 1523558965, '__ci_last_regenerate|i:1523558965;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('bkflrikuojoivnr4djs9okdse32jphtj', '::1', '', 1520614326, '__ci_last_regenerate|i:1520614326;'),
('bllcsqjv3muuv6209k4jb46duadlrgfa', '::1', '', 1520616553, '__ci_last_regenerate|i:1520616553;'),
('c1nkh52id43qoc79jshu6oeisl3ss8vk', '::1', '', 1523670097, '__ci_last_regenerate|i:1523669841;site_lang|s:6:"french";'),
('c2kv5s6ipiputv63lj6boj3q5aqsq138', '::1', '', 1520622088, '__ci_last_regenerate|i:1520622088;'),
('cc4st3td420r9apfldbl2um7fbialao8', '::1', '', 1523571481, '__ci_last_regenerate|i:1523571480;'),
('cg5v95t3uvptm5qihsdlm3813difsa27', '::1', '', 1520942331, '__ci_last_regenerate|i:1520942331;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520942018";last_check|i:1520942241;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"new";}'),
('clnphs9celip63eofoq334t5ocl58qqo', '::1', '', 1523824847, '__ci_last_regenerate|i:1523824847;site_lang|s:6:"french";'),
('cngq7kmrfo4dedrphjego3hidjr9f3n7', '::1', '', 1520610122, '__ci_last_regenerate|i:1520610122;'),
('d5nveqjnphp9759ff9f1olp5r6perbfm', '::1', '', 1523549480, '__ci_last_regenerate|i:1523549459;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('dbmf0mii0ddurn9te0ifqbabndg57jau', '::1', '', 1523548071, '__ci_last_regenerate|i:1523548070;'),
('ddtlioc4m0k22jlb0q0md3mq8g0td385', '::1', '', 1523574165, '__ci_last_regenerate|i:1523574164;site_lang|s:7:"english";'),
('dpaa7ou0lg8aa4r3q5lm8n4dsk2cdkda', '::1', '', 1520610801, '__ci_last_regenerate|i:1520610801;'),
('dtubrkv5rfo2m610mha1pu30hls1ithe', '::1', '', 1523876617, '__ci_last_regenerate|i:1523876616;site_lang|s:7:"english";'),
('e02nv7ns7os1m1gmub16g141k5qnmqf8', '::1', '', 1523566423, '__ci_last_regenerate|i:1523566422;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('e50k4619ts27esqlscqvuvat2lnq4r3q', '::1', '', 1520605944, '__ci_last_regenerate|i:1520605944;'),
('ehckt0uf6k7ob8un8od1cvu9vf55rm5j', '::1', '', 1520599293, '__ci_last_regenerate|i:1520599293;'),
('erb7v9s14m1ektjq9eist949h8q7ap65', '::1', '', 1523828380, '__ci_last_regenerate|i:1523828379;'),
('f30l811t8qb8e07jarala27ui1joq6qm', '::1', '', 1523670296, '__ci_last_regenerate|i:1523670164;site_lang|s:7:"english";'),
('f5lb1p94b0f8nudnbrv0ftjecm8mfl1a', '::1', '', 1523710514, '__ci_last_regenerate|i:1523710513;site_lang|s:6:"french";'),
('f7tgsnagli6pcbsafuhuc5bgq0n6unfa', '::1', '', 1520613367, '__ci_last_regenerate|i:1520613367;'),
('f83j714lkf6uphsed64cjmd2cu9t582a', '::1', '', 1523835080, '__ci_last_regenerate|i:1523835079;'),
('fna6bipf1mu2mb6ika7fr19i9tp50rq6', '::1', '', 1523611948, '__ci_last_regenerate|i:1523611947;'),
('g3ckl8c5ideg3q02m3jgms59a46kf2o8', '::1', '', 1523348572, '__ci_last_regenerate|i:1523348468;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520946615";last_check|i:1523348571;message|s:29:"<p>Connecté avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('g4pr3rf1vsnq6hkqgovf0502kvp48mu4', '::1', '', 1523827122, '__ci_last_regenerate|i:1523827122;'),
('g9a4g41qa8s0em81pkrjnkmmu5sc2m2r', '::1', '', 1520601790, '__ci_last_regenerate|i:1520601790;'),
('gd7o94ra9as2u7j8kr1nhsgl1t5eubr6', '::1', '', 1520611448, '__ci_last_regenerate|i:1520611448;'),
('gh0jdenk6nh88bet7db67dio1qv502j9', '::1', '', 1520602496, '__ci_last_regenerate|i:1520602496;'),
('giisqd9mdaain48li2n52bf076kqp849', '::1', '', 1520943136, '__ci_last_regenerate|i:1520943136;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1520942443";last_check|i:1520942525;message|s:21:"<p>Compte activé</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('gk22ahij2nd4esqsmti0faq48fglirp3', '::1', '', 1523697584, '__ci_last_regenerate|i:1523697547;site_lang|s:6:"french";'),
('gsk4lcf3itja95l5va0r0bmo4qkth2bh', '::1', '', 1520696932, '__ci_last_regenerate|i:1520696932;site_lang|s:6:"french";'),
('gun9u9v8kc7do0ic81o58d239h0qf0o0', '::1', '', 1523873762, '__ci_last_regenerate|i:1523873761;site_lang|s:7:"english";'),
('h184d098dij2c8mg20aosneb16cgbi7s', '::1', '', 1520696387, '__ci_last_regenerate|i:1520696387;site_lang|s:7:"english";'),
('h4r3osqu742e7hlqt437bmnavt9oj7se', '::1', '', 1523830619, '__ci_last_regenerate|i:1523830618;site_lang|s:7:"english";'),
('ha2pp2n1ch107tj80qtk4f3d9a8ua5t0', '::1', '', 1523828684, '__ci_last_regenerate|i:1523828683;'),
('hcbllsahk1d92n8v2liqu3c9m7h3ospt', '::1', '', 1523550294, '__ci_last_regenerate|i:1523550294;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('hdbjkpro61f666e5vftp28k9uedrk1kc', '::1', '', 1520599914, '__ci_last_regenerate|i:1520599914;'),
('hqhe3cicgc3f2h93j0g87igv5kksnb9p', '::1', '', 1520602102, '__ci_last_regenerate|i:1520602102;'),
('ihrqsju742bajfve0ujd15pgctif4fc4', '::1', '', 1520618146, '__ci_last_regenerate|i:1520618146;'),
('iqsecj139utfdg2nbehbd6gadfqeode3', '::1', '', 1520610430, '__ci_last_regenerate|i:1520610430;'),
('itqcn6gki6tskfs4gaaf18n3f1bb7hf1', '::1', '', 1523580604, '__ci_last_regenerate|i:1523580603;'),
('j3th7hea738rsbbbf0sn4tt5scf40t5b', '::1', '', 1523581051, '__ci_last_regenerate|i:1523581051;'),
('jijuoje78v78jpv4pg7n86c20f099nk3', '::1', '', 1520615273, '__ci_last_regenerate|i:1520615273;'),
('kgvd0u4muv1ol0ui5g481n84jnp2t7ud', '::1', '', 1523278049, '__ci_last_regenerate|i:1523278048;'),
('kla0h6i5et0kb18o3k3m8c0apfh2vb5c', '::1', '', 1520697244, '__ci_last_regenerate|i:1520697244;site_lang|s:7:"english";'),
('klhakusejn0deo757daqh6bdt1pfakbu', '::1', '', 1523869841, '__ci_last_regenerate|i:1523869840;'),
('kllsq7i5mqbt0st9lhbm3grqac6lcrtl', '::1', '', 1520617240, '__ci_last_regenerate|i:1520617240;'),
('kne3k1hlvd4fn2a2oqp85vgfb4d2s0ke', '::1', '', 1520613721, '__ci_last_regenerate|i:1520613721;'),
('koremfj47hgb69fciv35omoq8f294gmi', '::1', '', 1523565417, '__ci_last_regenerate|i:1523565416;identity|s:15:"admin@admin.com";email|s:15:"admin@admin.com";user_id|s:1:"1";old_last_login|s:10:"1523348571";last_check|i:1523549459;'),
('kqme7cka75lt6a5ivhp61fs80haqqulu', '::1', '', 1520601259, '__ci_last_regenerate|i:1520601259;'),
('kr9ct73e773qrqs1j460klflan1bj5m6', '::1', '', 1523575142, '__ci_last_regenerate|i:1523575142;'),
('ktcbmjt2iu7ak8prb7p348q78guaqe67', '::1', '', 1523870628, '__ci_last_regenerate|i:1523870628;'),
('lh6brj5hvk3f726qs621k9m1pd0h8b1v', '::1', '', 1523661761, '__ci_last_regenerate|i:1523661761;site_lang|s:7:"english";'),
('m7mqg87qpps4ofd1j3dfuo4ac7fki8ks', '::1', '', 1523826075, '__ci_last_regenerate|i:1523826074;'),
('mfrfm1auahjq7p1o5t99s27d6jfs98s1', '::1', '', 1523891568, '__ci_last_regenerate|i:1523891567;'),
('mkon3ajejkp5ct8qjmd6ebl1g1vv5ivc', '::1', '', 1523874558, '__ci_last_regenerate|i:1523874558;site_lang|s:7:"english";'),
('n34gkq5gnpoki80s3v2prq5i0innqq28', '::1', '', 1523871513, '__ci_last_regenerate|i:1523871341;site_lang|s:7:"english";'),
('n7tqusninm9p6ot0t4l33006uff662e8', '::1', '', 1523647243, '__ci_last_regenerate|i:1523647242;'),
('nci0tf72k4k7bskg6lbb1s90g3jbacr7', '::1', '', 1520622705, '__ci_last_regenerate|i:1520622551;'),
('nuj3g44aaq5rq88h819f618df13v2ntn', '::1', '', 1523872065, '__ci_last_regenerate|i:1523872065;site_lang|s:7:"english";'),
('o2qcf1n2al0naa10i9kv00jall9a6kqt', '::1', '', 1523698764, '__ci_last_regenerate|i:1523698763;site_lang|s:6:"french";'),
('o3od4nit0q6l2lqlj9tmkbravqkc2imf', '::1', '', 1520945311, '__ci_last_regenerate|i:1520945311;identity|s:26:"eleguealamaherve@gmail.com";email|s:26:"eleguealamaherve@gmail.com";user_id|s:1:"2";old_last_login|N;last_check|i:1520943221;'),
('o48lq7aoth951ouu3c2e71rffhdnr4om', '::1', '', 1523702972, '__ci_last_regenerate|i:1523702972;site_lang|s:6:"french";'),
('o62bhi7otvgkcvsnjkqig62aqq6uuffl', '::1', '', 1523701861, '__ci_last_regenerate|i:1523701860;site_lang|s:6:"french";'),
('o71m4daotsc5trt89s13m2avkfl6c97s', '::1', '', 1520602880, '__ci_last_regenerate|i:1520602880;'),
('ogmnfrdf0vfhltcm2o0f27mscr4s4ege', '::1', '', 1520946465, '__ci_last_regenerate|i:1520946465;message|s:43:"<p>Déconnexion effectuée avec succès</p>";__ci_vars|a:1:{s:7:"message";s:3:"old";}'),
('olodts9n9qlenoca6lkh68gbgqv3sece', '::1', '', 1520621723, '__ci_last_regenerate|i:1520621723;'),
('onnkoibk37vo146ghu6eageu0nm0d7dn', '::1', '', 1523708654, '__ci_last_regenerate|i:1523708653;site_lang|s:6:"french";'),
('ou2kdr5kjab3g9uvvjbqamehfucu22dm', '::1', '', 1520598972, '__ci_last_regenerate|i:1520598972;'),
('ovijiha5f7acnvj2i460fui9ke8a06td', '::1', '', 1523569363, '__ci_last_regenerate|i:1523569149;'),
('p75m29jnmn2gppm6igsel6ev2r4i4beh', '::1', '', 1523877005, '__ci_last_regenerate|i:1523877005;site_lang|s:7:"english";'),
('pfrrorhl5e19dlcvt5isu209ke0t22jg', '::1', '', 1520620030, '__ci_last_regenerate|i:1520620030;'),
('pk9fp3k5h3jjj7sqgmiodq53uc2elvi0', '::1', '', 1523614587, '__ci_last_regenerate|i:1523614586;'),
('q2s8farsjsn21gaq1m0jf5cpif43ubhd', '::1', '', 1523662627, '__ci_last_regenerate|i:1523662490;site_lang|s:6:"french";'),
('q75q8k73h4cf163k69mh9i90suseh9q4', '::1', '', 1520611131, '__ci_last_regenerate|i:1520611131;'),
('q9heli5c0acbb5cu191ufckbpp5phhq7', '::1', '', 1520614637, '__ci_last_regenerate|i:1520614637;'),
('qbca8k2sglpkf7k5sr06s8cf4cv28roq', '::1', '', 1523615159, '__ci_last_regenerate|i:1523615158;'),
('qdqkpc0gva0fr6q6co3tn4qaik9dho6q', '::1', '', 1520620862, '__ci_last_regenerate|i:1520620862;'),
('qogimqrpsk5a8mgfjjseu0ojal5cks15', '::1', '', 1520697665, '__ci_last_regenerate|i:1520697554;site_lang|s:7:"english";english|N;french|N;'),
('qrun7h2ti4n2o17k509smpsq7ra5lck2', '::1', '', 1523569046, '__ci_last_regenerate|i:1523568746;message|s:34:"<p>Erreur lors de la connexion</p>";__ci_vars|a:1:{s:7:"message";s:3:"new";}'),
('rmfh7voeu206kellio3mmj5us42cn102', '::1', '', 1523571790, '__ci_last_regenerate|i:1523571790;'),
('rsgik95mh5o8krbj4gutc01328cc7cn0', '::1', '', 1523869929, '__ci_last_regenerate|i:1523869928;'),
('seshbs47fjqv8ocdcvdgl5ccu1ogcgme', '::1', '', 1520603190, '__ci_last_regenerate|i:1520603190;'),
('sk1mffuu4brla1fhl15ugq9tqfo37e3s', '::1', '', 1523824614, '__ci_last_regenerate|i:1523824540;site_lang|s:6:"french";'),
('suqe7tjavu0rf7rnko1vugntge7mqc19', '::1', '', 1523702242, '__ci_last_regenerate|i:1523702242;site_lang|s:6:"french";'),
('svv7kkm6ek634aqjccakt2bdaa8jmh1g', '::1', '', 1520694732, '__ci_last_regenerate|i:1520694732;'),
('t53tm1o2um6t3c8f65fptks1gva4co83', '::1', '', 1523875170, '__ci_last_regenerate|i:1523875169;site_lang|s:7:"english";'),
('tb8f161fkpnh6b4lapojfcl9qecjjsc6', '::1', '', 1523701420, '__ci_last_regenerate|i:1523701419;site_lang|s:6:"french";'),
('tcqsdpref9c97ssjrd27pjpsanc0a2db', '::1', '', 1523662067, '__ci_last_regenerate|i:1523662067;site_lang|s:7:"english";'),
('th8n7486lcaadt0e1h761v6lhk4q3il3', '::1', '', 1520605313, '__ci_last_regenerate|i:1520605313;'),
('thq85j0jst05chr5tucjneml4ebu8jps', '::1', '', 1523710191, '__ci_last_regenerate|i:1523710190;site_lang|s:6:"french";'),
('tka4i436q2g177psqokqg9tumj4m9cuu', '::1', '', 1520696084, '__ci_last_regenerate|i:1520696083;site_lang|s:6:"french";'),
('u9ue1e12k4l2916l40m7ip1ua9p1o8fq', '::1', '', 1523826379, '__ci_last_regenerate|i:1523826379;'),
('uem2scm063p86j8cktumioc0mqtntvim', '::1', '', 1522679199, '__ci_last_regenerate|i:1522679195;'),
('ug9mgahhmonsp9be8f6f1as8499up0fh', '::1', '', 1523830182, '__ci_last_regenerate|i:1523830182;site_lang|s:7:"english";'),
('v5lls91075glapq4456hnb3o81ickil3', '::1', '', 1523829090, '__ci_last_regenerate|i:1523829062;site_lang|s:7:"english";'),
('vf829u12gk21dog8djjrlr3pcj07k4hh', '::1', '', 1520941969, '__ci_last_regenerate|i:1520941969;');

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'itMl577y2UH05GH9PJKxy.', 1268889823, 1523574577, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', '', ''),
(2, '::1', 'eleguealamaherve@gmail.com', '$2y$08$sWDsc/Pa5xD8Wkn8gl4wT.uKqs6k8.r2PgNO4wI9tmmfKpNid1bJK', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, 'qr839WnRAJZI.bdzKj.wne', 1520942685, 1520946470, 1, 'Herve', 'Elegue', 'Agrisoft', '655923687', '', '', '', '', ''),
(3, '', NULL, 'le codeur!!!', NULL, 'eleguealamaherve@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Hotel', 'tous', NULL, '+237 655923687', 'Yaounde', 'CM', '237', 'Mvog-Mbi', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Index pour les tables exportées
--

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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
