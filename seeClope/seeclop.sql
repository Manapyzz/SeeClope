-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 26, 2016 at 11:52 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `seeclope`
--

-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

CREATE TABLE `glasses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shape` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `leftcorrection` int(11) NOT NULL,
  `rightcorrection` int(11) NOT NULL,
  `glassdiameter` int(11) NOT NULL,
  `glassbridge` int(11) NOT NULL,
  `glassarm` int(11) NOT NULL,
  `glasstype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `first_image_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_image_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_image_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`id`, `user_id`, `brand`, `sex`, `shape`, `leftcorrection`, `rightcorrection`, `glassdiameter`, `glassbridge`, `glassarm`, `glasstype`, `color`, `price`, `first_image_file`, `first_image_name`, `second_image_file`, `second_image_name`, `third_image_file`, `third_image_name`) VALUES
(3, 2, 'Dior', 'femme', 'rectangulaire', 2, 3, 1223, 1212, 112, 'progressifs', 'rouge', 800, '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/Breaking-Bad-925740313s.jpg', 'Breaking-Bad-925740313s.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/Breaking-Bad-925740313s.jpg', 'Breaking-Bad-925740313s.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/Breaking-Bad-925740313s.jpg', 'Breaking-Bad-925740313s.jpg'),
(4, 2, 'Calvin Klein', 'homme', 'rectangulaire', 2, 3, 12, 232, 3, 'progressifs', 'dorée', 300, '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/ezreal.png', 'ezreal.png', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/ezreal.png', 'ezreal.png', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/ezreal.png', 'ezreal.png'),
(5, 1, 'Gucci', 'femme', 'ovale', 2, 3, 10, 201, 10, 'mi-distance', 'dorée', 350, '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/Banksy_Cop_pr_01.jpg', 'Banksy_Cop_pr_01.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/BreakingBad.jpg', 'BreakingBad.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/Breaking-Bad-925740313s.jpg', 'Breaking-Bad-925740313s.jpg'),
(6, 1, 'Calvin Klein', 'homme', 'carrée', 2, 4, 12, 100, 150, 'mi-distance', 'bleue', 1500, '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/miss_fortune_with_hellfire_armor_by_tenmoom-d6qk6h3.jpg', 'miss_fortune_with_hellfire_armor_by_tenmoom-d6qk6h3.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/MV5BMTg3OTQ2NzAzN15BMl5BanBnXkFtZTgwMDUyNjY3NTE@._V1_SX214_AL_.jpg', 'MV5BMTg3OTQ2NzAzN15BMl5BanBnXkFtZTgwMDUyNjY3NTE@._V1_SX214_AL_.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/mustang-fighter.jpg', 'mustang-fighter.jpg'),
(7, 1, 'Ray Ban', 'homme', 'rectangulaire', 2, 3, 100, 150, 170, 'progressifs', 'ecaille', 100, '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/portrait3.jpg', 'portrait3.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/portrait3.jpg', 'portrait3.jpg', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images/glasses/portrait3.jpg', 'portrait3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile_comment`
--

CREATE TABLE `profile_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_comment`
--

INSERT INTO `profile_comment` (`id`, `user_id`, `rating`, `review`, `profile_id`) VALUES
(37, 1, 5, 'Ajaxouille', 4),
(38, 1, 1, 'hello world', 4),
(39, 1, 1, 'paulito', 4),
(40, 1, 1, 'paulito le retour', 4),
(41, 1, 1, 'hello world', 4),
(42, 1, 5, 'Gael est content :)', 4),
(43, 1, 3, 'azfafafaz fazfaz', 4),
(44, 1, 1, 'hello', 4),
(45, 1, 1, 'hello world lel', 4),
(46, 1, 3, '234', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `image_file`, `image_name`, `roles`) VALUES
(1, 'Mana', '$2y$13$BjURbE8wymJnWH2xwa6EKORp1zKU2CRtgSOLhLTXjw7gGO01RJCY.', 'mana@bloublou.com', 'Alexandre', 'PICARD', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images//defaultImage.png', 'defaultImage.png', 's:9:"ROLE_USER";'),
(2, 'SuperMana', '$2y$13$/O2mK38u/WHK9iuq7qVtT.pP8delu83R/NnrY2MN2qAPMG61gw0zy', 'supermana@admin.com', 'Alexandre', 'PICARD', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images//defaultImage.png', 'defaultImage.png', 's:16:"ROLE_SUPER_ADMIN";'),
(4, 'melca', '$2y$13$Pxp6N9QdLjPvx/XfYMb9senZ6Rh.kXWrNzM/QIP6rkTmVvnAHKLPi', 'melca@bloublou.com', 'Laura', 'MARIE-LOUISE', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images//defaultImage.png', 'defaultImage.png', 's:9:"ROLE_USER";'),
(5, 'bleble', '$2y$13$73TLMhgRQ8662Gin/wD7fOgGMCDKRv1UQoaIWE.dWlWYQWugdnAje', 'bleble@bloublou.com', 'BLOUBLOU', 'Bleble', '/Users/AlexPMac/OneDriveBusiness/Web Developer/Cours/Web development/AllGitHubProjects/SeeClope/seeClope/app/../web/assets/images//defaultImage.png', 'DefaultImage.png', 's:9:"ROLE_USER";');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `glasses`
--
ALTER TABLE `glasses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F6A25AD6A76ED395` (`user_id`);

--
-- Indexes for table `profile_comment`
--
ALTER TABLE `profile_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_47CA8CF0A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profile_comment`
--
ALTER TABLE `profile_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `glasses`
--
ALTER TABLE `glasses`
  ADD CONSTRAINT `FK_F6A25AD6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `profile_comment`
--
ALTER TABLE `profile_comment`
  ADD CONSTRAINT `FK_47CA8CF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
