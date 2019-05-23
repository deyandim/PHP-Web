CREATE TABLE `people` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL,
	`picture` BLOB NULL,
	`height` FLOAT(5,2) NULL DEFAULT NULL,
	`weight` FLOAT(5,2) NULL DEFAULT NULL,
	`gender` ENUM('m','f') NOT NULL,
	`birthdate` DATE NOT NULL,
	`biography` LONGTEXT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

INSERT INTO `people` (`name`, `picture`, `height`, `weight`, `gender`, `birthdate`, `biography`)
VALUES ('Deyan', NULL, 187.69, 88.25, 'm', '1985-09-09', NULL),
		 ('Adelina', NULL, 145.34, 34.11, 'f', '2011-03-11', NULL),
		 ('Atanas', NULL, 111.69, 22.98, 'm', '2015-01-06', NULL),
		 ('Ivelina', NULL, 160.19, 55.25, 'f', '1985-03-06', NULL),
		 ('Zhivko', NULL, 179.45, 83.25, 'm', '1984-01-19', NULL);