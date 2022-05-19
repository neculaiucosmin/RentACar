SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+02:00";


CREATE DATABASE `pw`;
USE `pw`;

CREATE TABLE `user`
(
    `id`     int(11)      NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email`  varchar(100) NOT NULL,
    `parola` varchar(255) NOT NULL,
    `uTime`  timestamp    NOT NULL DEFAULT CURRENT_TIMESTAMP()

) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

INSERT INTO `user`(`email`, `parola`)
VALUES ('cosmin@cosmin.ro', '1234');


CREATE TABLE `producator`
(
    id     INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nume` VARCHAR(100)
);

USE pw;

CREATE TABLE contact
(
    `ID`      INT AUTO_INCREMENT PRIMARY KEY,
    `prenume` varchar(255),
    `nume`    varchar(255),
    `telefon` varchar(255),
    `email`   varchar(255),
    `judet`   varchar(255),
    `varsta`  int,
    `mesaj`   text

);

INSERT INTO contact(prenume, nume, telefon, email, judet, varsta, mesaj)
    VALUE ('Cosmin', 'Neculaiu','0734856045', 'cosminflorinel23@gmail.com', 'Prahova', 18, 'Acesta este un mesaj xD' );


SELECT * FROM contact;



#
# DB relatii intre masina->producator->etc.
#
# CREATE TABLE make (
#                       make_id INT NOT NULL PRIMARY KEY ,
#                       make_name VARCHAR(25)
# );
#
# CREATE TABLE model (
#                        model_id INT NOT NULL,
#                        make_id INT NOT NULL,
#                        model_name VARCHAR(25),
#                        PRIMARY KEY(model_id)
# );
#
# CREATE TABLE model_year (
#                             model_id INT NOT NULL,
#                             year_num INT NOT NULL,
#                             PRIMARY KEY (model_id, year_num)
# );
#
# CREATE TABLE transmission (
#                               transmission_id INT NOT NULL,
#                               transmission_descrip VARCHAR(15),
#                               PRIMARY KEY (transmission_id)
# );
#
# CREATE TABLE drive (
#                        drive_id INT NOT NULL,
#                        drive_descrip VARCHAR(10),
#                        PRIMARY KEY (drive_id)
# );
#
# INSERT INTO transmission (transmission_id, transmission_descrip)
# VALUES (1, 'Auto'), (2, '4-speed manual'), (3, '5-speed manual');
#
# INSERT INTO drive (drive_id, drive_descrip)
# VALUES (1, '2WD Front'), (2, '2WD Rear'), (3, '4WD'), (4, 'AWD');