-- 1. INNER JOIN: Only shows employees who HAVE a department.
SELECT employees.name, departments.department_name 
FROM employees 
INNER JOIN departments 
ON employees.department_id = departments.id;

-- 2. LEFT JOIN: Shows ALL employees, even if their department is empty (NULL).
SELECT employees.name, departments.department_name 
FROM employees 
LEFT JOIN departments 
ON employees.department_id = departments.id;

-- 3. RIGHT JOIN: Shows ALL departments, even if no employees work there.
SELECT employees.name, departments.department_name
FROM employees
RIGHT JOIN departments
ON employees.department_id = departments.id;
