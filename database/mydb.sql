
CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

CREATE TABLE `Persons` (
  `PersonID` binary(36) NOT NULL,
  `Username` varchar(256) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(256) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL
) 
