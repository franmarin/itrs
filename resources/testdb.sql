CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key: Unique menu ID.',
  `name` varchar(60) NOT NULL DEFAULT '' COMMENT 'Unique menu name.',
  `href` varchar(120) NOT NULL DEFAULT '' COMMENT 'URL to point to.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores site menu info.';
INSERT INTO menu (name, href) VALUES
('Home', '#'), ('Contact', '#');

CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key: Unique course ID.',
  `name` varchar(60) NOT NULL DEFAULT '' COMMENT 'Course name.',
  `description` varchar(120) NOT NULL DEFAULT '' COMMENT 'Course description.',
  `available` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores course data.';
INSERT INTO courses (name, description) VALUES 
('Record & Replay', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ex ligula, dapibus non tincidunt at, imperdiet at metus.'),
('Replay & Record', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ex ligula, dapibus non tincidunt at, imperdiet at metus.'),
('Record & Record', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ex ligula, dapibus non tincidunt at, imperdiet at metus.');

CREATE TABLE `contact_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key: Unique contact ID.',
  `name` varchar(60) NOT NULL DEFAULT '' COMMENT 'Contact name.',
  `email` varchar(60) NOT NULL DEFAULT '' COMMENT 'Contact email.',
  `subject` varchar(60) NOT NULL DEFAULT '' COMMENT 'Contact subject.',
  `comment` varchar(120) NOT NULL DEFAULT '' COMMENT 'Contact comment.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores contact requests.';
