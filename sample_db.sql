--counting rows
SELECT COUNT(*) FROM products;
--counting a specific criteria
SELECT COUNT(productCode)FROM products WHERE productLine = "Classic Cars";
--count the number of cars
--identify the productlines related to cars
SELECT DISTINCT(productLine) FROM products;
--actual counting
SELECT COUNT(productCode) FROM products WHERE productLine LIKE "%cars%";
--count the number of items per productline
SELECT productLine, COUNT(productCode) FROM products GROUP BY productLine;
--add the criteria where we just look for the productlines that have more than 10 products
SELECT productLine, COUNT(productCode) FROM products GROUP BY productLine HAVING COUNT(productCode)>10;

--difference between HAVING and WHERE?
--HAVING -> is only used for our aggregate(combining) functions
--ex. HAVING AVG(length)
--WHERE ->is used for general criteria
--ex. WHERE productLine LIKE "%Cars%";


--which car productline has more than 30 products
SELECT productLine, COUNT(productCode) FROM products WHERE productLine like "%cars%" GROUP BY productLine HAVING COUNT(productCode)>30;
--we want to look for the productlines that have more than 10 products and arrange them from least to greatest
SELECT productLine, COUNT(productCode)AS total FROM products GROUP BY productLine HAVING total>10 ORDER BY total;
--3 instances of COUNT(productCode) query.lessen it to once by using an alias
--we want to look for the productlines that have more than 10 products and arrange them from least to greatest
SELECT productLine, COUNT(productCode)AS total FROM products GROUP BY productLine HAVING total>10 ORDER BY total DESC;
--we want to look for the productlines that have more than 10 products and arrange them from least to greatest
--and get the top 3 most abundant productlines
SELECT productLine, COUNT(productCode)AS total FROM products GROUP BY productLine HAVING total>10 ORDER BY total DESC LIMIT 3;

--what is the most expensive product
-- SELECT productName,MAX(MSRP) FROM products GROUP BY MAX(MSRP);
SELECT productName,MAX(MSRP) FROM products WHERE productName LIKE "%Ultimate%";

SELECT productName, MSRP FROM products ORDER BY MSRP DESC LIMIT 1; 

--number of customers from UK
SELECT COUNT(customerNumber)AS customersFROMUK FROM customers  WHERE country="UK" ; 
SELECT COUNT(customerName) FROM customer WHERE country = "UK";

--who is the customer who made the most orders? (highest number of orders?
SELECT customerName, customerNumber FROM customers WHERE customerNumber = (SELECT customerNumber FROM orders GROUP BY customerNumber ORDER BY COUNT(customerNumber) DESC LIMIT 1);

--2. Subquery
--a. who is the customer who paid the most (total paymets)
SELECT customerName FROM customers WHERE customerNumber in(SELECT customerNumber FROM payments WHERE amount IN (SELECT MAX(amount) FROM payments));

SELECT customerNumber FROM customers WHERE customerNumber = (SELECT customerNumber FROM payments GROUP BY customerNumber ORDER BY SUM(amount) DESC LIMIT 1);
--b. who are the employees who do not serve any customers

--list of employees and customers they serve?
SELECT CONCAT(em.firstName, "", em.lastName) AS fullName, COUNT(c.customerNumber) FROM employees em JOIN customers c ON (c.salesRepEmployeeNumber = em.employeeNumber) GROUP BY c.salesRepEmployeeNumber;

--find productlines greater than ships 
SELECT productLine, COUNT(productCode) FROM products GROUP BY productline HAVING COUNT(productCode) > (SELECT COUNT (productCode) FROM products WHERE productLine LIKE "%Ships%");

