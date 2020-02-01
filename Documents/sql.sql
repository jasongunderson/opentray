CREATE DATABASE opentray;
USE opentray;

CREATE TABLE `opentray`.`residents` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `facility` VARCHAR(45) NOT NULL,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  `room` INT NULL,
  `likes` TINYTEXT NULL,
  `dislikes` TINYTEXT NULL,
  `allergies` TINYTEXT NULL,
  `active` BIT NULL DEFAULT 1,
  PRIMARY KEY (`id`, `facility`));

  CREATE TABLE `opentray`.`staff` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `facility` VARCHAR(45) NOT NULL,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  `permission` INT NOT NULL,
  `active` BIT NULL DEFAULT 1,
  PRIMARY KEY (`id`, `facility`));