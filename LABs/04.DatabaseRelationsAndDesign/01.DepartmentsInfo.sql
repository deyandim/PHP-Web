SELECT `department_id`, COUNT(*) AS `number_of_employees`
FROM employees
GROUP BY `department_id`
ORDER BY `department_id`, `number_of_employees`