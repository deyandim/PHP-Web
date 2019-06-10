SELECT
	employee_id,
	job_title,
	e.address_id,
	a.address_text
FROM employees as e
JOIN addresses as a
  ON e.address_id = a.address_id
GROUP BY e.address_id
LIMIT 5