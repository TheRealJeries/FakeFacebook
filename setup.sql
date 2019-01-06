/* These are the commands I used to set up my database */
create database facebooklogins;

/* email: 64 char for local, 1 for @, 255 for domain name */
/* password: after hashing, will use 64 chars. */
CREATE TABLE `facebooklogins`.`basics` ( `email` VARCHAR(320) NOT NULL , `password` VARCHAR(64) NOT NULL , `lastseen` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`email`(320))) ENGINE = InnoDB;
CREATE TABLE `facebooklogins`.`details` ( `id` INT UNSIGNED NOT NULL , `email` VARCHAR(320) NOT NULL , `ipaddress` INT UNSIGNED NOT NULL , `logtime` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
 