SELECT `employee_id`, `first_name`, `last_name`, departments.name
FROM employees
INNER JOIN departments
ON employees.department_id = departments.department_id
WHERE departments.name = 'Sales'
ORDER BY `employee_id` DESC;