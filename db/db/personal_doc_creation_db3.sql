SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema personal_doc_db
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `personal_doc_db` ;
CREATE SCHEMA IF NOT EXISTS `personal_doc_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `personal_doc_db` ;

-- -----------------------------------------------------
-- Table `personal_doc_db`.`Temperature_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Temperature_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Temperature_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Airflow_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Airflow_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Airflow_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Blood_Oxygen_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Blood_Oxygen_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Blood_Oxygen_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Systolic_Pressure_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Systolic_Pressure_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Systolic_Pressure_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Diastolic_Pressure_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Diastolic_Pressure_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Diastolic_Pressure_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Muscle_Intensity_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Muscle_Intensity_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Muscle_Intensity_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`ECG_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`ECG_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`ECG_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Contactivity_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Contactivity_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Contactivity_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Radiation_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Radiation_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Radiation_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`User` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`User` (
  `idUser` INT NOT NULL,
  `Name_Surname` VARCHAR(200) NOT NULL,
  `Date_of_birth` DATE NOT NULL,
  `Weight` FLOAT NOT NULL,
  `Height` FLOAT NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Journey`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Journey` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Journey` (
  `idJourney` INT NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`idJourney`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Journey_has_User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Journey_has_User` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Journey_has_User` (
  `Journey_idJourney` INT NOT NULL,
  `User_idUser` INT NOT NULL,
  `Start_date` DATETIME NOT NULL,
  `End_date` DATETIME NULL,
  PRIMARY KEY (`Journey_idJourney`, `User_idUser`, `Start_date`),
  INDEX `fk_Journey_has_User_User1_idx` (`User_idUser` ASC),
  INDEX `fk_Journey_has_User_Journey_idx` (`Journey_idJourney` ASC),
  CONSTRAINT `fk_Journey_has_User_Journey`
    FOREIGN KEY (`Journey_idJourney`)
    REFERENCES `personal_doc_db`.`Journey` (`idJourney`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Journey_has_User_User1`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `personal_doc_db`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Current_State`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Current_State` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Current_State` (
  `idCurrent_State` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idCurrent_State`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Login`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Login` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Login` (
  `idLogin` INT NOT NULL AUTO_INCREMENT,
  `Start_session` DATETIME NOT NULL,
  `End_session` DATETIME NULL,
  `Current_State_idCurrent_State` INT NOT NULL,
  `Journey_has_User_Journey_idJourney` INT NOT NULL,
  `Journey_has_User_User_idUser` INT NOT NULL,
  `Journey_has_User_Start_date` DATETIME NOT NULL,
  PRIMARY KEY (`idLogin`),
  INDEX `fk_Login_Current_State1_idx` (`Current_State_idCurrent_State` ASC),
  INDEX `fk_Login_Journey_has_User1_idx` (`Journey_has_User_Journey_idJourney` ASC, `Journey_has_User_User_idUser` ASC, `Journey_has_User_Start_date` ASC),
  CONSTRAINT `fk_Login_Current_State1`
    FOREIGN KEY (`Current_State_idCurrent_State`)
    REFERENCES `personal_doc_db`.`Current_State` (`idCurrent_State`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Login_Journey_has_User1`
    FOREIGN KEY (`Journey_has_User_Journey_idJourney` , `Journey_has_User_User_idUser` , `Journey_has_User_Start_date`)
    REFERENCES `personal_doc_db`.`Journey_has_User` (`Journey_idJourney` , `User_idUser` , `Start_date`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Measurements_per_minute`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Measurements_per_minute` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Measurements_per_minute` (
  `Login_idLogin` INT NOT NULL,
  `Date_taken` DATETIME NOT NULL,
  `Current_temperature` FLOAT NULL,
  `Current_airflow` FLOAT NULL,
  `Current_blood_oxygen` FLOAT NULL,
  `Current_systolic_pressure` FLOAT NULL,
  `Current_diastolic_pressure` FLOAT NULL,
  `Current_muscle_intensity` FLOAT NULL,
  `Current_ecg` FLOAT NULL,
  `Current_contactivity` FLOAT NULL,
  `Current_pulse` FLOAT NULL,
  `Current_radiation` FLOAT NULL,
  PRIMARY KEY (`Login_idLogin`, `Date_taken`),
  INDEX `fk_Measurements_per_minute_Login1_idx` (`Login_idLogin` ASC),
  CONSTRAINT `fk_Measurements_per_minute_Login1`
    FOREIGN KEY (`Login_idLogin`)
    REFERENCES `personal_doc_db`.`Login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Pulse_thressholds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Pulse_thressholds` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Pulse_thressholds` (
  `id_thresshold` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `min_calc` FLOAT NOT NULL,
  `max_calc` FLOAT NOT NULL,
  `measurement_units` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_thresshold`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personal_doc_db`.`Result_of_measurement`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_doc_db`.`Result_of_measurement` ;

CREATE TABLE IF NOT EXISTS `personal_doc_db`.`Result_of_measurement` (
  `Measurements_per_minute_Login_idLogin` INT NOT NULL,
  `Measurements_per_minute_Date_taken` DATETIME NOT NULL,
  `Temperature_thressholds_id_thresshold` INT NULL,
  `Airflow_thressholds_id_thresshold` INT NULL,
  `Blood_Oxygen_thressholds_id_thresshold` INT NULL,
  `Systolic_Pressure_thressholds_id_thresshold` INT NULL,
  `Diastolic_Pressure_thressholds_id_thresshold` INT NULL,
  `Muscle_Intensity_thressholds_id_thresshold` INT NULL,
  `ECG_thressholds_id_thresshold` INT NULL,
  `Contactivity_thressholds_id_thresshold` INT NULL,
  `Pulse_thressholds_id_thresshold` INT NULL,
  `Radiation_thressholds_id_thresshold` INT NULL,
  PRIMARY KEY (`Measurements_per_minute_Login_idLogin`, `Measurements_per_minute_Date_taken`),
  INDEX `fk_Result_of_measurement_Temperature_thressholds1_idx` (`Temperature_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Airflow_thressholds1_idx` (`Airflow_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Blood_Oxygen_thressholds1_idx` (`Blood_Oxygen_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Systolic_Pressure_thressholds1_idx` (`Systolic_Pressure_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Diastolic_Pressure_thressholds1_idx` (`Diastolic_Pressure_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Muscle_Intensity_thressholds1_idx` (`Muscle_Intensity_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_ECG_thressholds1_idx` (`ECG_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Contactivity_thressholds1_idx` (`Contactivity_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Pulse_thressholds1_idx` (`Pulse_thressholds_id_thresshold` ASC),
  INDEX `fk_Result_of_measurement_Radiation_thressholds1_idx` (`Radiation_thressholds_id_thresshold` ASC),
  CONSTRAINT `fk_Result_of_measurement_Measurements_per_minute1`
    FOREIGN KEY (`Measurements_per_minute_Login_idLogin` , `Measurements_per_minute_Date_taken`)
    REFERENCES `personal_doc_db`.`Measurements_per_minute` (`Login_idLogin` , `Date_taken`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Temperature_thressholds1`
    FOREIGN KEY (`Temperature_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Temperature_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Airflow_thressholds1`
    FOREIGN KEY (`Airflow_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Airflow_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Blood_Oxygen_thressholds1`
    FOREIGN KEY (`Blood_Oxygen_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Blood_Oxygen_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Systolic_Pressure_thressholds1`
    FOREIGN KEY (`Systolic_Pressure_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Systolic_Pressure_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Diastolic_Pressure_thressholds1`
    FOREIGN KEY (`Diastolic_Pressure_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Diastolic_Pressure_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Muscle_Intensity_thressholds1`
    FOREIGN KEY (`Muscle_Intensity_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Muscle_Intensity_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_ECG_thressholds1`
    FOREIGN KEY (`ECG_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`ECG_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Contactivity_thressholds1`
    FOREIGN KEY (`Contactivity_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Contactivity_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Pulse_thressholds1`
    FOREIGN KEY (`Pulse_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Pulse_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Result_of_measurement_Radiation_thressholds1`
    FOREIGN KEY (`Radiation_thressholds_id_thresshold`)
    REFERENCES `personal_doc_db`.`Radiation_thressholds` (`id_thresshold`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
