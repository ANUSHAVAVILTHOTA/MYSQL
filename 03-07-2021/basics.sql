SELECT * FROM persons ORDER BY FirstName ASC;

SELECT * FROM persons ORDER BY FirstName DESC;


SELECT * FROM persons ORDER BY Cost,City;

SELECT * FROM `persons` ORDER BY Cost ASC, FirstName DESC;

--  first sort based on Cost
-- When we have duplicate rows then it will sort based on city
-- chars & numbers

-- hjsdjsd
-- comments

-- Update ===edit
// Both Update & delete

UPDATE table_name
SET column_name=value,column_name1=value1,------
WHERE condition

//NOTE: must and should we need to use where conditions
// in which record we want to update
// otherwise it will replace the new values in all the records


UPDATE persons
SET FirstName='ABCD',LastName='LMN',Cost='5675.435',Address='AFSM ZDFXNC'
WHERE LastName='V1'

-- v1 

UPDATE persons
SET FirstName='ABC'
WHERE age>=18



// 4000  "ABC" >=18


DELETE FROM persons WHERE PersonID='17'

>45

DELETE FROM persons WHERE Cost>=45

<35


DELETE FROM persons WHERE PersonID<35

='ABC'
DELETE FROM persons WHERE FirstName='ABC'


DELETE FROM persons;
--  it will delete all the info from the table(all the records)



50000

>=65  20000 Total 

10000 Top People


MYSQL=PHP 

-- 20000  -- Top 10000
SELECT * FROM persons WHERE age>=65 LIMIT 10000;
total output ==10000 records

//1200 =9  LIMIT 9


200

>=75  marks

150  out of 10

SELECT * FROM persons WHERE marks>=75 LIMIT 10;
-- 150 // out put is only 10 rows out of 150
-- 20000  12

500=teachers
>=45000=salary   450
TOP=50

SELECT * FROM persons WHERE salary>=45000 LIMIT 50;

-- MYACCESS =FETCH FIRST N rows or ROWNUM

-- NO SQL =Angular vue (MONGODB)

-- SQL=

-- ORACLE=
SELECT MIN(column_name)
FROM table_name
WHERE condition;

SELECT MIN(Cost) FROM persons;

SELECT MAX(column_name)
FROM table_name
WHERE condition;

SELECT MAX(Cost) FROM persons;

SELECT SUM(column_name)
FROM table_name
WHERE condition;

SELECT SUM(Cost) FROM persons;

SELECT AVG(column_name),
FROM table_name
WHERE condition;




SELECT AVG(Cost) FROM persons;

 -- sum/total no of rows

SELECT COUNT(Cost) FROM table_name
WHERE condition;


SELECT COUNT(Cost) FROM persons;
--  num of rows


//SELECT =extract the data
// UPDATE == edit the data
//DELETE ==remove the data
//INSERT INTO=adda the data
//CREATE TABLE =to create the new table
//CREATE DATABASE= create a new db
// LIMIT
// MAX,MIN,SUM,AVG,COUNT

.//CURD OPERATIONS




