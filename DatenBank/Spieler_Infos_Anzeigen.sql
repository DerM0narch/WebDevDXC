SELECT p.p_name AS 'Surname', p.p_vname AS 'Name', p.p_ingamename AS 'Summonername', t.te_name AS 'Team', r.r_bezeichnung AS 'Role' FROM t_player AS p
JOIN t_rolle AS r ON r.r_id=p.p_r_rolle
JOIN t_team AS t ON t.te_id=p.p_team

WHERE t.te_id=1