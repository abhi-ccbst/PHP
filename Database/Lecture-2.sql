
SET SQL_SAFE_UPDATES = 0;

show databases;

DROP DATABASE IF EXISTS ccbst;

CREATE DATABASE ccbst;

USE ccbst;
SHOW TABLES;

DROP TABLE IF EXISTS ccbst.Persons;

CREATE TABLE ccbst.Persons (
	personID	int 	NOT NULL PRIMARY KEY,
    lastName	text, 
    firstName	varchar(100)	NOT NULL UNIQUE,
    address		text,
    dobYear		int		DEFAULT 2000
);


INSERT INTO ccbst.Persons (personID, lastName, firstName, address) 
VALUES (1, 'patel', 'Abhi', 'Canada'),
(2, 'wick', 'John', 'Canada'),
(3, 'lastName', 'firstName', NULL),
(4, 'Kairi', 'Salas', NULL),
(5, 'Zaiden', 'Pennington', NULL),
(6, 'Yareli', 'Todd', NULL),
(7, 'Baylor', 'Randolph', NULL),
(8, 'Kailey', 'Odom', NULL),
(9, 'Kylian', 'Rhodes', NULL),
(10, 'Tatum', 'Santiago', NULL),
(11, 'Beckham', 'Myers', NULL),
(12, 'Lydia', 'Ston', NULL),
(13, 'Finn', 'Solomon', NULL),
(14, 'Mylah', 'Bautista', NULL),
(15, 'Raul', 'Stephenson', NULL),
(16, 'Khaleesi', 'Savage', NULL),
(17, 'Keaton', 'Shepard', NULL),
(18, 'Noor', 'Stone', NULL),
(19, 'Finn', 'Duncan', NULL),
(20, 'Elise', 'Cabrera', NULL),
(21, 'Cade', 'Dawson', NULL),
(22, 'Veronica', 'McDaniel', NULL),
(23, 'Major', 'Hartman', NULL),
(24, 'Kennedi', 'Abbott', NULL),
(25, 'Kohen', 'Frederick', NULL),
(26, 'Sariyah', 'Alvarez', NULL),
(27, 'Xavier', 'Ho', NULL),
(28, 'Calliope', 'Mahoney', NULL),
(29, 'Kamryn', 'Carey', NULL),
(30, 'Alora', 'Liu', NULL),
(31, 'Pedro', 'Berry', NULL),
(32, 'Annabelle', 'Jimenez', NULL),
(33, 'Silas', 'Vo', NULL),
(34, 'Artemis', 'French', NULL),
(35, 'Corey', 'Black', NULL);

SELECT * FROM ccbst.Persons;
SELECT personID, lastName from ccbst.Persons WHERE NOT lastName = 'wick' AND NOT personID = 1;
SELECT * FROM ccbst.Persons WHERE lastName = 'wick' AND personID = 2;

SELECT * FROM ccbst.Persons WHERE lastName = 'wick' OR personID = 1;

SELECT * FROM ccbst.Persons WHERE NOT lastName = 'wick' AND NOT personID = 1;

SELECT * FROM ccbst.Persons ORDER BY personID asc;

SELECT * FROM ccbst.Persons ORDER BY personID DESC;

SELECT * FROM ccbst.Persons WHERE address IS NULL;

SELECT * FROM ccbst.Persons WHERE address IS NOT NULL;

UPDATE ccbst.Persons SET lastName = 'McCarty';

DELETE FROM ccbst.Persons WHERE personID = 1;

SELECT * FROM ccbst.Persons;

SELECT * FROM ccbst.Persons WHERE lastName = 'McCarty' LIMIT 2 OFFSET 2;

SELECT MIN(personID) AS MIN_PERSON_ID FROM ccbst.Persons;

SELECT personID AS MIN_PERSON_ID FROM ccbst.Persons ORDER BY personID LIMIT 1 OFFSET 2;

SELECT MAX(personID) AS MAX_PERSON_ID FROM ccbst.Persons;

SELECT personID AS MAX_PERSON_ID FROM ccbst.Persons ORDER BY personID DESC LIMIT 1 OFFSET 5;

