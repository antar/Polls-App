CREATE DATABASE IF NOT EXISTS `m133` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `m133`;

CREATE TABLE IF NOT EXISTS `polls` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` text NOT NULL,
	`desc` text NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `polls` (`id`, `title`, `desc`) VALUES (1, 'You like TBZ?', '');

CREATE TABLE IF NOT EXISTS `poll_answers` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`poll_id` int(11) NOT NULL,
	`title` text NOT NULL,
	`votes` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `poll_answers` (`id`, `poll_id`, `title`, `votes`) VALUES (1, 1, 'YES OF COURSE', 0), (2, 1, 'BRO RLLY?', 0), (3, 1, 'NOT AT ALL', 0), (4, 1, 'GO TO HELL', 0);

CREATE USER 'm133'@'localhost' IDENTIFIED BY 'm133';

GRANT ALL PRIVILEGES ON polls TO 'm133'@'localhost';
GRANT ALL PRIVILEGES ON poll_answers TO 'm133'@'localhost';