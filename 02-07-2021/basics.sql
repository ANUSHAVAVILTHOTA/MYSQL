CREATE DATABASE trail;


CREATE TABLE Persons(
    PersonID  int(11),
    LastName varchar(200),
    FirstName varchar(200),
    Address varchar(200),
    Cost double(16,3),
    City varchar(100),
);


INSERT INTO persons(PersonID,LastName,FirstName,Address,Cost,City) VALUES ('13','V','Anusha','AP CHR','1234.678','CHR');


SELECT PersonID FROM persons;
SELECT FirstName FROM persons;

SELECT FirstName,LastName FROM persons;

SELECT FirstName,LastName,City FROM persons;

SELECT * FROM persons; // all columns


students >=15

SELECT * FROM persons WHERE PersonID>=15 

SELECT FirstName,LastName FROM persons WHERE PersonID>=15;

SELECT LastName,FirstName,Cost,Address FROM persons WHERE Cost>=100;

SELECT Address,FirstName,LastName,PersonID,City FROM persons WHERE City='CHR1'


// Cost,FN,LN last =v 
SELECT Cost,LastName,FirstName FROM persons WHERE LastName='V'

// AND OR NOT

// all must be true
// OR=Any one should be true
// NOT = false


// V1 F=ABC

SELECT * FROM persons WHERE LastName='V1' AND FirstName='ABC' AND PersonID='14';
SELECT * FROM `persons` WHERE NOT City='CHR';
SELECT * FROM `persons` WHERE NOT FirstName='ABC';

Multiple Conditions
AND = 3 conditions
OR  ==any one from 3 conditions
NOT= it will filter city!=CHR  (Not Equal to)

