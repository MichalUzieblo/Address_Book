-- phpMyAdmin SQL Dump
-- version 4.7.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2017 at 03:42 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `streetName` varchar(48) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nrOfHouse` int(11) NOT NULL,
  `nrOfFlat` int(11) DEFAULT NULL,
  `zipCode` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `type` varchar(48) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `streetName`, `nrOfHouse`, `nrOfFlat`, `zipCode`, `city`, `person_id`, `type`) VALUES
(1, 'stalowa', 12, 34, '00-100', 'Warsaw', 1, ''),
(2, 'bukowa', 12, 23, '00-150', 'Wroclaw', 1, 'business'),
(3, 'lisciowa', 45, NULL, '00-000', 'paryz', 1, 'home'),
(4, 'ASDA', 12, 5, 'QWERT', 'Asf', 12, 'ASFA');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `email` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(48) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `person_id`, `email`, `type`) VALUES
(1, 1, 'user1@host.com', 'private'),
(2, 12, 'asfasdf', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'user1', 'user1', 'user1@host.com', 'user1@host.com', 1, NULL, '$2y$13$4CdGBpQoEpVfuPmoAgSRQORgwy4bAN5OCuYLc9kexCFQDhLRBPkeW', '2017-08-03 00:47:58', NULL, NULL, 'a:0:{}'),
(2, 'user2', 'user2', 'user2@host.pl', 'user2@host.pl', 1, NULL, '$2y$13$p6eTNXeXzi1/acvZYYTiQuo5s9wzosLedGFVU9uv2dnBuCriKgsEW', '2017-07-18 14:29:45', '6_alCf6XniadlMCZQfFRtOy2lXV3nwBvp7DWdYPOiPk', '2017-07-18 16:33:30', 'a:0:{}'),
(3, 'user3', 'user3', 'user3@host.pl', 'user3@host.pl', 1, NULL, '$2y$13$6sht/FogqJI1TvIxTCFGTOvXdtTkFIwnl0buLuWKEl7FiCJKS9.dK', '2017-07-18 16:55:20', NULL, NULL, 'a:0:{}'),
(4, 'user4', 'user4', 'user44@host.pl', 'user44@host.pl', 1, NULL, '$2y$13$PpMtKVTbYniDd7k/ixjmEuzwOmGhC611INhx4AnISGirDDvYZd3EC', '2017-07-18 17:07:39', NULL, NULL, 'a:0:{}'),
(6, 'user5', 'user5', 'user5@host.pl', 'user5@host.pl', 1, NULL, '$2y$13$LiACvZ42fnG.DWsDMNCTq.jdJO1spAdp6qgYvh3SHJ2gyzBIGo03C', '2017-07-18 19:16:05', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `surname`, `description`, `user_id`) VALUES
(1, 'Jan', 'Kowal', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 1),
(2, 'Piotr', 'Kowalski', 'desc2', 4),
(4, 'Marek', 'Nowak', 'desc3', 1),
(6, 'Ala', 'Stalowa', 'lorem lorem lorem', 4),
(7, 'Harry', 'Potter', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', 4),
(10, 'James', 'Bond', '007', 1),
(11, 'Harry', 'Potter', 'wizard', 1),
(12, 'asfasf', 'asdfas', 'asfasdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `number` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `person_id`, `number`, `type`) VALUES
(2, 4, '235', 'dfgdf'),
(3, 4, '4367345866579', 'sdfhgdsfh'),
(4, 4, '33333333333333', 'ffffffffffffffff'),
(7, 1, '1234566789', 'home'),
(8, 11, '1234566789235', 'typo'),
(9, 12, '123123', 'sfhdf'),
(10, 12, 'afas', 'afssdf');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `name` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `name`, `userId`) VALUES
(6, 'family_team', 1),
(7, 'wizards', 1),
(10, 'typical', 1),
(11, 'close friends', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_ranks`
--

CREATE TABLE `users_ranks` (
  `person_id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_ranks`
--

INSERT INTO `users_ranks` (`person_id`, `rank_id`) VALUES
(4, 10),
(11, 7),
(11, 11),
(12, 6),
(12, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D4E6F81217BBB47` (`person_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E7927C74217BBB47` (`person_id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_34DCD176A76ED395` (`user_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_444F97DD217BBB47` (`person_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_ranks`
--
ALTER TABLE `users_ranks`
  ADD PRIMARY KEY (`person_id`,`rank_id`),
  ADD KEY `IDX_2C91045D217BBB47` (`person_id`),
  ADD KEY `IDX_2C91045D7616678F` (`rank_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `FK_E7927C74217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `FK_34DCD176A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `FK_444F97DD217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

--
-- Constraints for table `users_ranks`
--
ALTER TABLE `users_ranks`
  ADD CONSTRAINT `FK_2C91045D217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_2C91045D7616678F` FOREIGN KEY (`rank_id`) REFERENCES `rank` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
