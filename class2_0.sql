-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Mai 2017 à 18:39
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `class2_0`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_category`, `content`) VALUES
(1, 'Programmation C'),
(2, 'Algorithmique'),
(3, 'Mathématiques'),
(4, 'Physique-Chimie'),
(5, 'Sciences de la vie et de la terre'),
(6, 'Philisophie'),
(7, 'Histoire'),
(8, 'Géographie'),
(9, 'Anglais'),
(10, 'Espagnol');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `id_category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `course`
--

INSERT INTO `course` (`id_course`, `chapter`, `id_category`) VALUES
(1, '', '1'),
(2, '', '2'),
(3, 'Suites', '3'),
(4, 'Trigonométrie', '3'),
(5, 'Le brassage génétique', '5'),
(6, 'Le brassage génétique', '5'),
(7, 'La diversification des êtres vivants', '5');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `mark` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

CREATE TABLE `meeting` (
  `id_meeting` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `hour` time NOT NULL,
  `numhours` int(11) NOT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `id_student` int(11) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `meeting`
--

INSERT INTO `meeting` (`id_meeting`, `date`, `hour`, `numhours`, `id_prof`, `id_student`, `id_course`) VALUES
(1, '2017-05-14', '04:22:16', 1, NULL, 9, 1),
(2, '2017-05-14', '04:22:16', 2, NULL, 9, 2),
(9, '05/15/2017', '18:45:00', 2, NULL, 10, 5),
(8, '05/15/2017', '20:00:00', 1, NULL, 10, 3),
(7, '05/15/2017', '22:00:00', 2, NULL, 10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `professor_meeting`
--

CREATE TABLE `professor_meeting` (
  `id_professor_meeting` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `teacher_meeting`
--

CREATE TABLE `teacher_meeting` (
  `id_teacher_meeting` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `teacher_meeting`
--

INSERT INTO `teacher_meeting` (`id_teacher_meeting`, `id_meeting`, `id_prof`, `state`) VALUES
(1, 9, 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `mark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `account`, `mark`) VALUES
(7, 'Olivier', 'LEUNG', 'olivierleung@hotmail.fr', '123456789', 'user', 0),
(8, 'Alex', 'LEUNG', 'aleung@hotmail.fr', '123456789', 'on', 0),
(9, 'Alexane', 'LE GUERN', 'alexane.lgrn@gmail.com', 'km', 'prof', 0),
(10, 'Jean-Daniel', 'PALLUD', 'j.d.du972@hotmail.fr', '123456', 'user', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_category`
--

CREATE TABLE `user_category` (
  `id_user_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_category`
--

INSERT INTO `user_category` (`id_user_category`, `id_user`, `id_category`) VALUES
(1, 9, 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_student` (`id_student`);

--
-- Index pour la table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id_meeting`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_course` (`id_course`);

--
-- Index pour la table `professor_meeting`
--
ALTER TABLE `professor_meeting`
  ADD PRIMARY KEY (`id_professor_meeting`),
  ADD KEY `id_meeting` (`id_meeting`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Index pour la table `teacher_meeting`
--
ALTER TABLE `teacher_meeting`
  ADD PRIMARY KEY (`id_teacher_meeting`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id_user_category`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `professor_meeting`
--
ALTER TABLE `professor_meeting`
  MODIFY `id_professor_meeting` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `teacher_meeting`
--
ALTER TABLE `teacher_meeting`
  MODIFY `id_teacher_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id_user_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
