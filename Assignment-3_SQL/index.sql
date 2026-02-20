-- INDEX MANAGEMENT

-- 4. Show all indexes currently on the employees table
SHOW INDEX FROM employees;

-- 5. Drop an existing index
ALTER TABLE employees DROP INDEX email_index;
