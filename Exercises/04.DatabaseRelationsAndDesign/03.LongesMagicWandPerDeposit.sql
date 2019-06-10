SELECT
		deposit_group,
		MAX(magic_wand_size) as longest_magic_wand
FROM wizzard_deposits
		GROUP BY deposit_group ASC
		ORDER BY 2 ASC