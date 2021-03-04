SELECT
(SELECT te_name FROM t_team JOIN t_spieltag ON sp_blue_side = te_id WHERE sp_id=	(	SELECT sp_id FROM t_spieltag
																												WHERE sp_blue_win IS NULL
																												ORDER BY sp_id
																												LIMIT 1)) AS 'blue-side',
(SELECT te_kuerzel FROM t_team JOIN t_spieltag ON sp_blue_side = te_id WHERE sp_id=	(	SELECT sp_id FROM t_spieltag
																												WHERE sp_blue_win IS NULL
																												ORDER BY sp_id
																												LIMIT 1)) AS 'Kürzel',
(SELECT te_name FROM t_team JOIN t_spieltag ON sp_red_side = te_id WHERE sp_id=	(	SELECT sp_id FROM t_spieltag
																												WHERE sp_blue_win IS NULL
																												ORDER BY sp_id
																												LIMIT 1)) AS 'red-side',
(SELECT te_kuerzel FROM t_team JOIN t_spieltag ON sp_red_side = te_id WHERE sp_id=	(	SELECT sp_id FROM t_spieltag
																												WHERE sp_blue_win IS NULL
																												ORDER BY sp_id
																												LIMIT 1)) AS 'Kürzel'
FROM t_team
JOIN t_spieltag ON sp_blue_side=te_id
WHERE sp_id = (	SELECT sp_id FROM t_spieltag
						WHERE sp_blue_win IS NULL
						ORDER BY sp_id
						LIMIT 1)