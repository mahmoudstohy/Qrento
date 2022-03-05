-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 10:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrento`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '10',
  `password_hash` varchar(120) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `verification_token` varchar(120) NOT NULL,
  `password_reset_token` varchar(120) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `username`, `name`, `email`, `mobile`, `phone`, `status`, `password_hash`, `auth_key`, `verification_token`, `password_reset_token`, `updated_at`, `created_at`) VALUES
(5, 'Ezdan', 'Ezdan Real State', 'ezdan.realstare@gmail.com', '77704065', NULL, 10, '$2y$13$0IWidGBb2VnMHtlzdATGrOA64mpMlWjrXHl9WR9AZZ49JIDrWgXqa', 'bC-yyyOeH1ozixA9yAtegUF6PlQvkYji', 'P7NeFYSz7lExXYPnY_Qc9RfkzV9RaefB_1555562358', NULL, '2019-04-18 06:39:18', '2019-04-18 06:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `city_name`) VALUES
(1, 1, 'Doha'),
(2, 1, 'Al Rayyan'),
(3, 1, 'Al Daayen'),
(4, 1, 'Al Shamal'),
(7, 1, 'Al Khor'),
(8, 1, 'Al Wakrah');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `alpha2`, `alpha3`) VALUES
(1, 'Qatar', 'qa', 'qar');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `country_id`, `city_id`, `location_name`) VALUES
(1, 1, 1, 'Fereej Kuliab'),
(2, 1, 1, 'Bin Omran'),
(3, 1, 1, 'Dafna'),
(4, 1, 1, 'Bin Mahmoud'),
(5, 1, 1, 'Mushireb'),
(6, 1, 1, 'Al Bidda'),
(7, 1, 1, 'Al Ghanim'),
(8, 1, 1, 'Al Markhiya'),
(9, 1, 1, 'Al Sadd'),
(10, 1, 1, 'Al Waab'),
(11, 1, 1, 'Madinat Khalifa'),
(12, 1, 1, 'Najma'),
(13, 1, 1, 'Old Airport'),
(14, 1, 1, 'Ras Abu Aboud'),
(15, 1, 1, 'Rumeilah'),
(16, 1, 1, 'Umm Ghuwailina'),
(17, 1, 1, 'West Bay');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1553578925),
('m130524_201442_init', 1553578928),
('m190124_110200_add_verification_token_column_to_user_table', 1553578929);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `property_type_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `bedroom` smallint(6) NOT NULL,
  `bathroom` smallint(6) NOT NULL,
  `ac` enum('Window','Split','Centeral','None') NOT NULL,
  `furnishing` enum('fully','semi','none') NOT NULL,
  `price` smallint(6) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_pool` tinyint(1) DEFAULT NULL,
  `is_gym` tinyint(1) DEFAULT NULL,
  `parking` enum('dedicated','shared','none') DEFAULT NULL,
  `is_compound` int(11) DEFAULT NULL,
  `google_lat` decimal(10,8) NOT NULL,
  `google_lng` decimal(10,8) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `user_id`, `agent_id`, `property_type_id`, `location_id`, `bedroom`, `bathroom`, `ac`, `furnishing`, `price`, `description`, `is_pool`, `is_gym`, `parking`, `is_compound`, `google_lat`, `google_lng`, `created_at`, `updated_at`, `status_id`) VALUES
(4, 1, NULL, 2, 5, 1, 2, 'Split', 'fully', 6000, 'Ezdan 18 B2 1 BHK with 2 bathroom and dedicated parking slot including GYM', 1, 1, 'dedicated', 1, '25.30569800', '51.53099100', '2019-04-14 09:42:37', '2019-04-14 09:42:37', 1),
(5, 1, NULL, 2, 4, 2, 1, 'Window', 'fully', 4800, '1 BHK and 2 bathroom also dedicated parking available 24/7 with security gates ', 1, 1, 'dedicated', 1, '25.30569800', '51.53099100', '2019-04-15 09:35:20', '2019-04-15 09:35:20', 1),
(6, 1, NULL, 2, 11, 3, 2, 'Split', 'semi', 5300, 'Very nice apartment with huge hall and 2 bathroom security available all time near to Carefour', 1, 1, 'shared', 1, '25.30569800', '51.53099100', '2019-04-15 09:37:47', '2019-04-15 09:37:47', 1),
(7, 1, NULL, 2, 16, 3, 3, 'Window', 'none', 5700, 'Extremely  nice one Bedroom fully furnished apartment available in Mughanila near to Airport Road', 1, 1, 'dedicated', 1, '25.30569800', '51.53099100', '2019-04-15 12:06:08', '2019-04-15 12:06:08', 1),
(8, 1, NULL, 3, 11, 1, 1, 'Split', 'fully', 2850, '1 Bedroom studio located in madent khalifa near to Lulu hypermarket facing to waqod petrol station', 1, 1, 'shared', 1, '25.30569800', '51.53099100', '2019-04-15 12:27:46', '2019-04-15 12:27:46', 1),
(9, 1, NULL, 2, 9, 1, 1, 'Split', 'fully', 3900, 'Standard Double/Twin Bed Room Free WiFi , and access to the Gym and free parking and cleaning service 2 times in the week', 1, 1, 'dedicated', 1, '25.30569800', '51.53099100', '2019-04-25 06:57:20', '2019-04-25 06:57:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_img`
--

CREATE TABLE `property_img` (
  `property_img_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT 'blank.png',
  `is_cover` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_img`
--

INSERT INTO `property_img` (`property_img_id`, `property_id`, `img`, `is_cover`) VALUES
(38, 4, '15552278082dea4af1aafc.jpg', NULL),
(39, 4, '1555227808546900e3.jpg', NULL),
(40, 4, '15552278082444196.jpg', NULL),
(41, 4, '15552278097007620171228061106-Large.jpg', NULL),
(42, 4, '15552278097798820171228061100-Large.jpg', NULL),
(43, 4, '15552278098079320171228061108-Large.jpg', 1),
(44, 5, '1555313815950820171228061059-Large.jpg', NULL),
(45, 5, '15553138154923420171228061101-Large.jpg', 1),
(46, 5, '1555313815b5a814.jpg', NULL),
(47, 5, '1555313816cdas.jpg', NULL),
(48, 6, '15553139262dea4af1aafc.jpg', NULL),
(49, 6, '1555313926546900e3.jpg', 1),
(50, 6, '15553139267007620171228061106-Large.jpg', NULL),
(51, 6, '15553139267798820171228061100-Large.jpg', NULL),
(52, 7, '15553227952dea4af1aafc.jpg', NULL),
(53, 7, '155532279580-Large.jpg', 1),
(54, 7, '1555322795621-Large.jpg', NULL),
(55, 7, '1555322795546900e3.jpg', NULL),
(56, 7, '1555322795b5a814.jpg', NULL),
(62, 8, '1555324163950820171228061059-Large.jpg', NULL),
(63, 8, '15553241634923420171228061101-Large.jpg', NULL),
(64, 8, '15553241637798820171228061100-Large.jpg', 1),
(65, 8, '1555324163b5a814.jpg', NULL),
(66, 8, '1555324163cdas.jpg', NULL),
(67, 9, '1556168312229720170727143457-Large.jpg', NULL),
(68, 9, '15561683124169720170727143949-Large.jpg', NULL),
(69, 9, '15561683125998220170727143956-Large.jpg', NULL),
(70, 9, '15561683137053320170727143504-Large.jpg', NULL),
(71, 9, '15561683139465920170727143440-Large.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `property_type_id` int(11) NOT NULL,
  `property_type_name` varchar(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`property_type_id`, `property_type_name`, `description`, `created_at`) VALUES
(1, 'Villa', NULL, '2019-04-04 11:42:36'),
(2, 'Apartment', NULL, '2019-04-04 11:42:36'),
(3, 'Studio', NULL, '2019-04-04 11:43:31'),
(4, 'Shared', NULL, '2019-04-04 11:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `mobile`, `status`, `is_admin`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'Mahmoud F Stohy', 'mf_2fLyaWys6jmJ6DcyO1Li4tzVKMmuK', '$2y$13$ZoLHbCSR/3q5uVyRXXET.O//jzn08CYSo4qpHgHSEifw6J55pFTRG', NULL, 'admin@qrento.com', '77700250', 10, 0, 1553578980, 1553578980, 'QLmJDfXu9VOIA2ypw01_hUm3zrCVpD8l_1553578980'),
(2, 'qrentoadmin', 'Mahmoud F Stohy', 'bRCZx8zpRxhGSBuyGlpuYxCp5-lB3bsI', '$2y$13$eDKleDL9lFtWgwFiYXFZpe9p5MTrK8euHpZlA.8d/Z.wYc.WDY1z.', NULL, 'qrentoadmin@qrento.com', '77700050', 10, 0, 1557045136, 1557045136, 'yb6jLph0txHFb3xrk4dR8_cPNZ_jmpZe_1557045136');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_properties`
-- (See below for the actual view)
--
CREATE TABLE `vw_properties` (
`property_id` int(11)
,`bedroom` smallint(6)
,`bathroom` smallint(6)
,`ac` enum('Window','Split','Centeral','None')
,`furnishing` enum('fully','semi','none')
,`price` smallint(6)
,`description` varchar(255)
,`parking` enum('dedicated','shared','none')
,`google_lat` decimal(10,8)
,`google_lng` decimal(10,8)
,`created_at` datetime
,`updated_at` datetime
,`status_id` int(11)
,`is_pool` tinyint(1)
,`is_gym` tinyint(1)
,`is_compound` int(11)
,`property_type_name` varchar(11)
,`location_name` varchar(30)
,`username` varchar(40)
,`name` varchar(40)
,`email` varchar(50)
,`mobile` varchar(16)
,`agent_user` varchar(40)
,`agent_name` varchar(40)
,`agent_email` varchar(50)
,`agent_mobile` varchar(16)
,`phone` varchar(16)
,`img` varchar(100)
,`is_cover` tinyint(1)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_properties`
--
DROP TABLE IF EXISTS `vw_properties`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_properties`  AS  select `p`.`property_id` AS `property_id`,`p`.`bedroom` AS `bedroom`,`p`.`bathroom` AS `bathroom`,`p`.`ac` AS `ac`,`p`.`furnishing` AS `furnishing`,`p`.`price` AS `price`,`p`.`description` AS `description`,`p`.`parking` AS `parking`,`p`.`google_lat` AS `google_lat`,`p`.`google_lng` AS `google_lng`,`p`.`created_at` AS `created_at`,`p`.`updated_at` AS `updated_at`,`p`.`status_id` AS `status_id`,`p`.`is_pool` AS `is_pool`,`p`.`is_gym` AS `is_gym`,`p`.`is_compound` AS `is_compound`,`t`.`property_type_name` AS `property_type_name`,`l`.`location_name` AS `location_name`,`u`.`username` AS `username`,`u`.`name` AS `name`,`u`.`email` AS `email`,`u`.`mobile` AS `mobile`,`a`.`username` AS `agent_user`,`a`.`name` AS `agent_name`,`a`.`email` AS `agent_email`,`a`.`mobile` AS `agent_mobile`,`a`.`phone` AS `phone`,`i`.`img` AS `img`,`i`.`is_cover` AS `is_cover` from (((((`property` `p` join `property_type` `t` on((`p`.`property_type_id` = `t`.`property_type_id`))) join `location` `l` on((`p`.`location_id` = `l`.`location_id`))) left join `user` `u` on((`p`.`user_id` = `u`.`id`))) left join `property_img` `i` on((`i`.`property_id` = `p`.`property_id`))) left join `agent` `a` on((`p`.`agent_id` = `a`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `user_id` (`user_id`,`property_type_id`,`location_id`,`status_id`),
  ADD KEY `property_type_id` (`property_type_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `property_img`
--
ALTER TABLE `property_img`
  ADD PRIMARY KEY (`property_img_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`property_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_img`
--
ALTER TABLE `property_img`
  MODIFY `property_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `property_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`property_type_id`) REFERENCES `property_type` (`property_type_id`),
  ADD CONSTRAINT `property_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`),
  ADD CONSTRAINT `property_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `property_ibfk_4` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`);

--
-- Constraints for table `property_img`
--
ALTER TABLE `property_img`
  ADD CONSTRAINT `property_img_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
