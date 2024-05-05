1. CREATE DATABASE company;

2. USE company;

3. CREATE TABLE Employees (
    -> EmployeeID INT,
    -> firstName varchar(20),
    -> LastName varchar (20),
    -> Age INT,
    -> Department varchar (255),
    -> PRIMARY KEY (EmployeeID)
    -> );

4. INSERT INTO Employees (EmployeeID, FirstName, LastName, Age, Department)
     VALUES ('1', 'Jaydon', 'Fuentes', '21', 'Development Department'),
     ('3', 'Jayson', 'Mayo', '24', 'QA Department'),
     ('7', 'Parcia', 'Gwenie', '34', 'Finacial Department'),
     ('4', 'Jinnah', 'Sanchez', '23', 'Development Department'), 
     ('5', 'King', 'Jones', '24', 'HR Department');

5. SELECT * FROM Employees;
+------------+-----------+----------+------+------------------------+
| EmployeeID | firstName | LastName | Age  | Department             |
+------------+-----------+----------+------+------------------------+
|          1 | Jaydon    | Fuentes  |   21 | Development Department |
|          3 | Jayson    | Mayo     |   24 | QA Department          |
|          4 | Jinnah    | Sanchez  |   23 | Development Department |
|          5 | King      | Jones    |   24 | HR Department          |
|          7 | Parcia    | Gwenie   |   34 | Finacial Department    |
+------------+-----------+----------+------+------------------------+

6. UPDATE Employees SET Department = 'Marketing' WHERE EmployeeID = 2;

7. DELETE FROM Employees WHERE EmployeeID = 3;

8. DROP TABLE Employees;