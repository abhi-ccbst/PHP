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
(2, 'wick', 'John', 'Canada');

SELECT * FROM ccbst.Persons WHERE lastName = 'wick' AND personID = 2;

SELECT * FROM ccbst.Persons WHERE lastName = 'wick' OR personID = 1;

SELECT * FROM ccbst.Persons WHERE NOT lastName = 'wick' AND NOT personID = 1;

SELECT * FROM ccbst.Persons ORDER BY personID ;

SELECT * FROM ccbst.Persons ORDER BY personID DESC;
