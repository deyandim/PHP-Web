SELECT
	e.employee_id,
	e.first_name,
	m.employee_id as manager_id,
	m.first_name as manager_name
FROM employees as e
	JOIN employees as m
		ON m.employee_id = e.manager_id
WHERE m.employee_id IN(3, 7)
ORDER BY e.first_name ASC
