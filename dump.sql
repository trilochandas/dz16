-- Adminer 4.2.0 MySQL dump

SET NAMES utf8mb4;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `adverts`;
CREATE TABLE `adverts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `allow_mails` tinyint(1) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `city` varchar(30) NOT NULL,
  `metro` varchar(30) NOT NULL,
  `category_id` varchar(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` mediumint(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `adverts` (`id`, `type`, `name`, `email`, `allow_mails`, `phone`, `city`, `metro`, `category_id`, `title`, `description`, `price`) VALUES
(1,	'private',	'Tri',	'tri@f.com',	1,	'0991234567',	'108',	'1',	'6',	'Selling car',	'Selling new rickshaw',	40),
(3,	'private',	'Shukadev',	'rajiv@sell.in',	1,	'0360120120',	'64',	'3',	'6',	'Selling bell',	'Good quality of bell from bell metal. 14 cm in diameter.',	3),
(4,	'private',	'Bhagwat',	'bhagwat@sggm.in',	0,	'0531081081',	'16108',	'2',	'7',	'Buy seeds of tulsi',	'I need seed to plant tulsi. I need have 3 tulsi in my garden.',	8);

DROP TABLE IF EXISTS `select_meta`;
CREATE TABLE `select_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `label` varchar(20) NOT NULL,
  `options` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `select_meta` (`id`, `name`, `label`, `options`) VALUES
(1,	'city',	'Город',	'{\"\":\"Select city\",\"64\":\"Mayapur\", \"16108\":\"Puri\", \"108\":\"Vrindavan\"}'),
(2,	'metro',	'Метро',	'[\"Select station\",\"Deli-Aeropor\", \"Jabo\", \"Haribo\"]'),
(3,	'Categorys',	'Категории',	'{\"\":\"Select category\",\"Seva\":{\"6\":\"Puja\",\"9\":\"Japa\",\"7\":\"Tulasi seva\"},\"Rest\":{\"3\":\"Darshan\",\"1\":\"Kirtan\"}}');

-- 2015-08-10 11:58:50
