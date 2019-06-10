SELECT
	COUNT(category_id)
FROM
	products as p
WHERE
	p.price > 8 and
	p.category_id = 2