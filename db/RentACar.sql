SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+02:00";


CREATE DATABASE `pw`;
USE `pw`;

CREATE TABLE `user`
(
    `id`      int(11)      NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email`   varchar(100) NOT NULL,
    `parola`  varchar(255) NOT NULL,
    `tipCont` varchar(25)  NOT NULL DEFAULT 'client',
    `uTime`   timestamp    NOT NULL DEFAULT CURRENT_TIMESTAMP()


) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;


INSERT INTO `user`(`email`, `parola`)
VALUES ('cosmin@cosmin.ro', '1234');


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
    VALUE ('Cosmin', 'Neculaiu', '0734856045', 'cosminflorinel23@gmail.com', 'Prahova', 18, 'Acesta este un mesaj xD');


CREATE TABLE `brand`
(
    id        INT PRIMARY KEY UNIQUE AUTO_INCREMENT,
    numeBrand VARCHAR(100) UNIQUE
);

SELECT *
FROM brand;

INSERT INTO brand (numeBrand) VALUE ('dacia'),('opel'), ('audi'),('renault');

