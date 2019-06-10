SELECT
	e.employee_id,
	CONCAT(e.first_name, ' ', e.last_name) as employee_name,
	CONCAT(m.first_name, ' ', m.last_name) as manager_name,
	d.name as department_name
FROM employees as e

JOIN employees as m
	ON e.manager_id = m.employee_id

JOIN departments d
	ON e.department_id = d.department_id
WHERE d.manager_id IS NOT NULL
ORDER BY e.employee_id ASC
LIMIT 5