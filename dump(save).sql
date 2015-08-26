-- Adminer 4.2.0 MySQL dump
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

-- 2015-08-07 12:00:07
