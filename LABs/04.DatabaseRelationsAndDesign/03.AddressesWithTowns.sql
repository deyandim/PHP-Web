SELECT `first_name`, `last_name`, towns.name, addresses.address_text
FROM employees
INNER JOIN addresses
ON employees.address_id = addresses.address_id
INNER JOIN towns
ON addresses.town_id = towns.town_id
ORDER BY `first_name`, `last_name`
LIMIT 5;