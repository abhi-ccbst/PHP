SET SQL_SAFE_UPDATES = 0;

show databases;

DROP DATABASE IF EXISTS ccbst;

CREATE DATABASE ccbst;

USE ccbst;

CREATE TABLE Customers (
    CustomerID INT PRIMARY KEY,
    CustomerName VARCHAR(100),
    City VARCHAR(50),
    Country VARCHAR(50)
);

INSERT INTO Customers VALUES 
(1, 'Alice', 'New York', 'USA'),
(2, 'Bob', 'Toronto', 'Canada'),
(3, 'Charlie', 'London', 'UK'),
(4, 'Diana', 'Sydney', 'Australia');


CREATE TABLE Orders (
    OrderID INT PRIMARY KEY,
    CustomerID INT,
    OrderDate DATE,
    Amount DECIMAL(10, 2),
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);

INSERT INTO Orders VALUES 
(101, 1, '2025-01-01', 250.50),
(102, 2, '2025-01-05', 500.00),
(103, 1, '2025-01-10', 150.75),
(104, 3, '2025-01-15', 300.25),
(105, NULL, '2025-01-20', 100.00); 


CREATE TABLE Products (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(100),
    Price DECIMAL(10, 2)
);

INSERT INTO Products VALUES 
(1, 'Laptop', 1000.00),
(2, 'Phone', 500.00),
(3, 'Tablet', 300.00),
(4, 'Headphones', 100.00);


CREATE TABLE OrderDetails (
    OrderDetailID INT PRIMARY KEY,
    OrderID INT,
    ProductID INT,
    Quantity INT,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

INSERT INTO OrderDetails VALUES 
(1, 101, 1, 1),
(2, 101, 2, 2),
(3, 102, 3, 1),
(4, 103, 4, 3),
(5, 104, 1, 2);

-- Retrieve total order amounts for each customer.  Name, Total value of order
-- Group By: The GROUP BY statement groups rows that have the same values into summary rows, like "find the number of customers in each country".
-- COUNT(), MAX(), MIN(), SUM(), AVG()

SELECT Customers.CustomerName, SUM(Orders.Amount) as TotalAmount FROM Customers
INNER JOIN Orders ON Customers.CustomerID = Orders.CustomerID
GROUP BY Customers.CustomerName
HAVING SUM(Orders.Amount) > 350
ORDER BY TotalAmount;

-- Find customers who haven't placed any orders.
SELECT Customers.CustomerName FROM Customers 
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
WHERE Orders.OrderID IS NULL;

-- Find the most expensive product purchased by each customer.
-- Make customer and Product connect.. 
SELECT c.CustomerName, o.OrderID,
	p.ProductName,
    p.Price
FROM Customers c
INNER JOIN Orders o ON  c.CustomerID = o.CustomerID
INNER JOIN OrderDetails od ON o.OrderID = od.OrderID
INNER JOIN Products p ON od.ProductID = p.ProductID
Where p.Price = (
	SELECT MAX(p2.Price)
    FROM Orders o2
    INNER JOIN OrderDetails od2 ON o2.OrderID = od2.OrderID
    INNER JOIN Products p2 ON od2.ProductID = p2.ProductID
    WHERE o2.CustomerID = c.CustomerID
);

-- Retrieve all customers and all orders, including unmatched rows.
SELECT 
    c.CustomerID,
    c.CustomerName,
    o.OrderID,
    o.Amount
FROM Customers c
LEFT JOIN Orders o ON c.CustomerID = o.CustomerID

UNION

SELECT 
    c.CustomerID,
    c.CustomerName,
    o.OrderID,
    o.Amount
FROM Customers c
RIGHT JOIN Orders o ON c.CustomerID = o.CustomerID;


-- Customer -> Order 
-- Product -> OrderDetail 
-- Order -> OrderDetail
-- Customer -> Order -> OrderDetial -> Product