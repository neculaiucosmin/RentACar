SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+02:00";


CREATE DATABASE  `pw`;
USE `pw`;

CREATE TABLE  `admin`(
    `id` int(11) NOT NULL ,
    `UserName` varchar (100) NOT NULL,
    `Password` varchar (100) NOT NULL,
    `uTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE  current_timestamp ()

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE  `user`(
    `id` int(11) NOT NULL ,
    `UserName` varchar (100) NOT NULL,
    `Password` varchar (100) NOT NULL,
    `uTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE  current_timestamp ()

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `carSpecs`(
    `id` INT(11) NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
    `carManufacture` varchar(100) NOT NULL,
    `carModel` VARCHAR(100) NOT NULL ,
    `price` INT NOT NULL ,
    `fuelType` VARCHAR(50) NOT NULL ,
    `power` INT NOT NULL,
    `AC` BOOLEAN NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `carSpecs`(`carManufacture`, `carModel`, `price`, `fuelType`, `power`, `AC`)
VALUES ('Dacia', 'Logan', 150, 'Bezina',90 , true);