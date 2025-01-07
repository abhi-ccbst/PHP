SET SQL_SAFE_UPDATES = 0;

show databases;

DROP DATABASE IF EXISTS ccbst;

CREATE DATABASE ccbst;

USE ccbst;
SHOW TABLES;

DROP TABLE IF EXISTS ccbst.Persons;

CREATE TABLE ccbst.Persons (
	personID	int,
    lastName	text, 
    firstName	text,
    address		text
);

INSERT INTO ccbst.Persons (personID, lastName, firstName, address) 
VALUES (1, 'patel', 'Abhi', 'Canada'),
(2, 'wick', 'John', 'Canada'),
(3, 'lastName', 'firstName', NULL);

SELECT * FROM ccbst.Persons WHERE lastName = 'wick' AND personID = 2;

SELECT * FROM ccbst.Persons WHERE lastName = 'wick' OR personID = 1;

SELECT * FROM ccbst.Persons WHERE NOT lastName = 'wick' AND NOT personID = 1;

SELECT * FROM ccbst.Persons ORDER BY personID ;

SELECT * FROM ccbst.Persons ORDER BY personID DESC;

SELECT * FROM ccbst.Persons WHERE address IS NULL;

SELECT * FROM ccbst.Persons WHERE address IS NOT NULL;

UPDATE ccbst.Persons SET lastName = 'McCarty', firstName = 'Lilliana' WHERE personID = 3;

DELETE FROM ccbst.Persons WHERE personID = 1;

SELECT * FROM ccbst.Persons;