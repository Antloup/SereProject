-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb`;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(64) NOT NULL,
  `last_name` VARCHAR(64) NOT NULL,
  `email` VARCHAR(64) NULL,
  `number` VARCHAR(16) NULL,
  `username` VARCHAR(64) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Default data
-- -----------------------------------------------------

USE `mydb` ;

INSERT INTO user(first_name, last_name,email, number,username,password) VALUES ('TartufletteTheAdmin', 'H4314','tartuf@gmail.com','34572','admin','damnUgotme');
INSERT INTO user(first_name, last_name,email, number,username,password) VALUES ('Alain', 'Terieur','Alain@gmail.com','012345','alain','mypassword');
INSERT INTO user(first_name, last_name,email, number,username,password) VALUES ('Marcel', 'Dupont','Marcel@gmail.com','987654','marcel','heyyy:p');
INSERT INTO user(first_name, last_name,email, number,username,password) VALUES ('Paul', 'Emploi','Paul@gmail.com','654534','paul','nopassword');
INSERT INTO user(first_name, last_name,email, number,username,password) VALUES ('Gilles', 'Dubois','Gilles@gmail.com','654534','gilou','idoit4zelulz');
INSERT INTO user(first_name, last_name,email, number,username,password) VALUES ('Anna', 'Conda','Anna@gmail.com','34572','anna','sacrebleu');
