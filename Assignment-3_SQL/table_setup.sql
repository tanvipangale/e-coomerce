CREATE TABLE departments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    department_name VARCHAR(100)
);

CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    department_id INT,
    -- This connects the employees to their specific department
    FOREIGN KEY (department_id) REFERENCES departments(id)
);
