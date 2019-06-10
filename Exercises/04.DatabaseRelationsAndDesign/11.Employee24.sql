SELECT
	e.employee_id,
	e.first_name,
	p.name as project_name
FROM employees as e
JOIN employees_projects as ep
	ON e.employee_id = ep.employee_id
LEFT OUTER JOIN projects as p
	ON ep.project_id = p.project_id
AND YEAR(p.start_date) < 2005
WHERE e.employee_id = 24
ORDER BY p.name ASC