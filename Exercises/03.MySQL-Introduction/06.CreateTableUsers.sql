CREATE TABLE `users` (
	`id` BIGINT AUTO_INCREMENT,
	`username` CHAR(30) NOT NULL,
	`password` CHAR(26) NOT NULL,
	`profile_picture` BLOB,
	`last_login_time` DATETIME,
	`is_deleted` ENUM('true', 'false') NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
VALUES ('aaa', '123', NULL, NULL, 'true'),
		('bbb', '123', NULL, NULL, 'false'),
		('ccc', '123', NULL, NULL, 'true'),
		('ddd', '123', NULL, NULL, 'false'),
		('eee', '123', NULL, NULL, 'true');