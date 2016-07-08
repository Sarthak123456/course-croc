-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema coursecroc_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema coursecroc_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coursecroc_db` DEFAULT CHARACTER SET utf8 ;
USE `coursecroc_db` ;

-- -----------------------------------------------------
-- Table `coursecroc_db`.`course_provider_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coursecroc_db`.`course_provider_table` (
  `course_provider_id` INT NOT NULL AUTO_INCREMENT,
  `course_provider_name` VARCHAR(255) NULL,
  `course_provider_description` VARCHAR(255) NULL,
  PRIMARY KEY (`course_provider_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coursecroc_db`.`university_ref_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coursecroc_db`.`university_ref_table` (
  `university_id` INT NOT NULL AUTO_INCREMENT,
  `university_name` VARCHAR(255) NULL,
  `university_description` VARCHAR(255) NULL,
  PRIMARY KEY (`university_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coursecroc_db`.`instructor_ref_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coursecroc_db`.`instructor_ref_table` (
  `instructor_id` INT NOT NULL AUTO_INCREMENT,
  `instructor_name` VARCHAR(255) NULL,
  `instructor_description` VARCHAR(255) NULL,
  PRIMARY KEY (`instructor_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coursecroc_db`.`course_info_table`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coursecroc_db`.`course_info_table` (
  `course_id` INT NOT NULL AUTO_INCREMENT,
  `course_title` VARCHAR(255) NULL,
  `course_description` VARCHAR(255) NULL,
  `course_url` VARCHAR(255) NULL,
  `course_video_url` VARCHAR(255) NULL,
  `course_duration` VARCHAR(255) NULL,
  `course_start_date` DATE NULL,
  `course_fee` VARCHAR(255) NULL,
  `course_rating` VARCHAR(255) NULL,
  `course_provider_id` INT NULL,
  `university_id` INT NULL,
  `course_instructor_id` INT NULL,
  PRIMARY KEY (`course_id`),
  INDEX `course_provider` (`course_provider_id` ASC),
  INDEX `university` (`university_id` ASC),
  INDEX `instructor` (`course_instructor_id` ASC),
  CONSTRAINT `course_provider_id`
    FOREIGN KEY (`course_provider_id`)
    REFERENCES `coursecroc_db`.`course_provider_table` (`course_provider_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `university_id`
    FOREIGN KEY (`university_id`)
    REFERENCES `coursecroc_db`.`university_ref_table` (`university_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `course_instructor_id`
    FOREIGN KEY (`course_instructor_id`)
    REFERENCES `coursecroc_db`.`instructor_ref_table` (`instructor_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
