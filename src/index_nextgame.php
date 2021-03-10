<?php
$sql = "SELECT
(SELECT te_pic_path FROM t_team JOIN t_spieltag ON sp_blue_side = te_id WHERE sp_id=	(	SELECT sp_id FROM t_spieltag
																												WHERE sp_blue_win IS NULL
																												ORDER BY sp_id
																												LIMIT 1)) AS 'picblue',
(SELECT te_pic_path FROM t_team JOIN t_spieltag ON sp_red_side = te_id WHERE sp_id=	(	SELECT sp_id FROM t_spieltag
																												WHERE sp_blue_win IS NULL
																												ORDER BY sp_id
																												LIMIT 1)) AS 'picred'
FROM t_team
JOIN t_spieltag ON sp_blue_side=te_id
WHERE sp_id = (	SELECT sp_id FROM t_spieltag
						WHERE sp_blue_win IS NULL
						ORDER BY sp_id
						LIMIT 1)";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td> <div><img src='" . $row['picblue'] . "'> </div> <img style='width:100px; margin-bottom: 40px;' src='pictures/vs.png'> <div><img src='" . $row['picred'] . "'> </div></td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "Es wurden keine Ergebnisse gefunden!";
    }
} else {
    echo "ERROR: $sql. " . mysqli_error($link);
}
