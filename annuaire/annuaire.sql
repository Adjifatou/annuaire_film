-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 oct. 2018 à 17:28
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `annuaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_acteur` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `date_naiss` date NOT NULL,
  `photo_acteur` varchar(255) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `role`, `pays`, `date_naiss`, `photo_acteur`, `id_film`) VALUES
(1, 'James McAvoy', 'principale', 'britannique', '1979-04-21', '', 0),
(2, 'Jonh Travolta', 'principale', 'Amerique', '1954-02-18', '', 0),
(3, 'Anya Taylor', 'principale', 'Britannique', '1996-04-16', '', 0),
(4, 'Samuel L Jackson', 'principale', 'Amérique', '1948-12-21', '', 0),
(5, 'Djeinaba Diop Gai', 'principale', 'Sénégal', '0000-00-00', '', 0),
(6, 'Magaye Niang', 'principale', 'Sénégal', '0000-00-00', '', 0),
(7, 'Elijah Wood', 'principale', 'Amérique', '1981-01-28', '', 0),
(8, 'Sean Astin', 'principale', 'Amérique', '1971-02-25', '', 0),
(9, 'Omar', 'prinicipale', 'Sénégal', '0000-00-00', '', 0),
(10, 'Yacine', 'principale', 'Sénégal', '0000-00-00', '', 0),
(11, 'Chadwick Boseman', 'principale', 'Amérique', '1976-11-29', '', 0),
(12, 'Micheal B Jordan', 'principale', 'Amérique', '1987-02-09', '', 0),
(13, 'Bill Skarsgard', 'principale', 'Suéde', '1990-08-09', '', 0),
(14, 'Jaeden Lieberhr', 'principale', 'Amérique', '2003-01-04', '', 0),
(15, 'Liam Neeson', 'principale', 'Irlande', '1952-06-07', '', 0),
(16, 'Bradley Cooper', 'principale', ' Amérique', '1975-01-05', '', 0),
(17, 'Daniel Auteuil', 'principale', 'France', '1950-01-24', '', 0),
(18, ' Maria Pacôme', 'principale', 'France', '1923-02-18', '', 0),
(19, 'Aboubacar Sadikh Ba', 'principale', 'Sénégal', '0000-00-00', '', 0),
(20, 'Rokhaya Niang', 'principale', 'Sénégal', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(2) NOT NULL DEFAULT '0',
  `nom_film` varchar(29) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL,
  `description` varchar(349) DEFAULT NULL,
  `an_sortie` int(4) DEFAULT NULL,
  `genre` varchar(43) DEFAULT NULL,
  `realisateur` varchar(17) DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `nom_film`, `type`, `description`, `an_sortie`, `genre`, `realisateur`) VALUES
(1, 'pupl fiction', 'long-metrage', 'L\'odyssee sanglante et burlesque de petits malfrats dans la jungle de Hollywood  travers trois histoires qui s\'entremelent.', 1994, 'Policier Thriller', 'Quentin Tarantino'),
(2, 'Karmen gei', 'long-metrage', 'Dans la cour centrale de la prison de Goree les detenues richement habillees et les gardiennes en tenue de fete jouent sur des percussions de fortune le fameux N\'Dei Gei du virtuose Doudou N\'Diaye Rose.', 2001, 'Comedie dramatique musical', 'Joseph gai Ramaka'),
(3, 'Seigneur des anneaux', 'long-metrage', 'Les armees de Sauron ont attaque Minas Tirith la capitale de Gondor. Jamais ce royaume autrefois puissant n\'a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonte d\'accomplir sa destinee', 2001, 'Fantastique avanture', 'Peter Jackson'),
(4, 'Amour d\'enfant', 'long-metrage', 'L\'histoire est celle d\'un groupe d\'enfants d\'une dizaine d\'annees frequentant la meme ecole et habitant le meme quartier. Omar (Pape Mafall Thioune) et Yacine (Anta Sylla) les deux principaux protagonistes ressentent leurs premiers mois amoureux et decouvrent ainsi la complexite de la vie.', 2003, 'Fiction', 'Bene diogaye Beye'),
(5, 'Black panther', 'long-metrage', 'Chaque victoire se paye d\'immenses sacrifices. Malgre ses pertes la Communaut se jette dans la bataille pour la vie ses membres faisant tout pour dtourner l\'attention de Sauron afin de donner  Frodon une chance d\'accomplir sa quete.', 2018, 'Action avanture science fiction fantastique', 'Ryan Coogler'),
(6, 'Ca', 'long-metrage', 'A Derry dans le Maine sept gamins ayant du mal a  s\'integrer se sont regroupes au sein du Club des Rates. Rejetes par leurs camarades ils sont les cibles favorites des gros durs de l\'ecole. Ils ont aussi en commun d\'avoir eprouve leur plus grande terreur face a un terrible predateur metamorphe qu\'ils appellent  ca', 2017, 'Epouvante-horreur thriller', 'Andy Muschietti'),
(7, 'L\'agence tout risque', 'long-metrage', 'Aucune equipe ne ressemble a celle de LAgence Tous Risques. Quatre hommes hyper qualifies et autrefois membres respectes dune unite delite de larmee sont charges dune mission classee top-secret destinee a les pieger et qui les conduit en prison pour un crime quils nont pas commis. Mais la somme de leurs talents leur permet une evasion sans accroc.', 2010, 'Action Comedie', 'Joe Camahan'),
(8, 'Les sous doues passent le bac', 'long-metrage', 'Babel et ses petits camarades du Cours Louis XIV sont reputes pour etre des faineants et d\'inviteres farceurs. Leur lycee est meme dernier du classement au baccalaureat avec 100% de recales a l\'examen! Apres une plaisanterie qui tourne mal les trublions se retrouvent obliges d\'obtenir leur bac a', 1980, 'Comedie', 'Claude Zidi'),
(9, 'Split', 'long-metrage', 'Kevin a deja revele 23 personnalites avec des attributs physiques differents pour chacune a sa psychiatre devouee la docteure Fletcher mais lune delles reste enfouie au plus profond de lui. Elle va bientot se manifester et prendre le pas sur toutes les autres. Pousse a', 2017, 'Thriller fanatstique epouvante-horreur', 'M Night Shyamalan'),
(10, 'Madame brouette', 'long-metrage', 'Une femme decide d\'en finir avec les hommes et de faire sa vie toute seule. Cette resolution ne l\'empechera de retomber amoureuse d\'un homme charmant en apparence mais qui se revelera etre un vrai bougre.', 2004, 'Comedie', 'Moussa Sene Absa');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `nom_genre`) VALUES
(1, 'Policier'),
(2, 'Thriller'),
(3, 'Comédie'),
(4, 'Comédie musical'),
(5, 'Fantastique'),
(6, 'Aventure'),
(7, 'Fiction'),
(8, 'Action'),
(9, 'Science fiction'),
(10, 'Epouvante-horreur'),
(11, 'Comédie dramatique');

-- --------------------------------------------------------

--
-- Structure de la table `liaison`
--

DROP TABLE IF EXISTS `liaison`;
CREATE TABLE IF NOT EXISTS `liaison` (
  `id_liaison` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_liaison`),
  KEY `id_liaison` (`id_liaison`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_realisateur` varchar(255) NOT NULL,
  `date_naiss` date NOT NULL,
  `pays` varchar(255) NOT NULL,
  `photo_realisateur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id_realisateur`, `nom_realisateur`, `date_naiss`, `pays`, `photo_realisateur`) VALUES
(1, 'Moussa Sene Absa', '1958-00-00', 'Sénégal', ''),
(2, 'M Night Shyamalan', '1970-08-06', 'Amérique', ''),
(3, 'Quentino Tarantino', '1963-03-27', 'Amérique', ''),
(4, 'Joseph Gai Ramaka', '1952-11-09', 'Sénégal', ''),
(5, 'Bene Diogaye Béye', '1947-00-00', 'Sénégal', ''),
(6, 'Peter Robert Jackson', '1961-10-31', 'Néo-zelande', ''),
(7, 'Ryan Kyle Coogler', '1986-05-23', 'Amérique', ''),
(8, 'Andrès Muschietti', '1973-08-26', 'Argentin', ''),
(9, 'Joe Carnahan', '1969-05-09', 'Amérique', ''),
(10, 'Claude Zidi', '1934-07-25', 'France', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
