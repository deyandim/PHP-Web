SELECT
	employee_id,
	first_name,
	salary,
	d.name as department_name
FROM employees as e
JOIN departments as d
  ON e.department_id = d.department_id
GROUP BY e.department_id DESC
HAVING e.salary > 15000
LIMIT 5