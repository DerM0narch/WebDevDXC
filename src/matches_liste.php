<?php
include 'db_conn.php';

$sql2="SELECT sp_id FROM t_spieltag ORDER BY sp_id DESC LIMIT 1";
$maximal=mysqli_query($conn, $sql2);
$max=mysqli_result($maximal, 0, 0);

for ($i=1; $i<=$max; $i++){
    $sql="SELECT
    (SELECT te_pic_path FROM t_team JOIN t_spieltag ON sp_blue_side = te_id WHERE sp_id= ". $i. " ) AS 'picblue',
    (SELECT te_pic_path FROM t_team JOIN t_spieltag ON sp_red_side = te_id WHERE sp_id= ". $i . " ) AS 'picred' 
    FROM t_team
    JOIN t_spieltag ON sp_blue_side=te_id
    WHERE sp_id= ".$i . " 
    ORDER BY sp_id";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
                        
            echo "<tr>";
            echo "<td> <div style=' flex:1; display:inline; width:100%'>
            <img style='width:80px;' src='" . mysqli_result($result, 0, 0) . "'>
            <img style='width:35px; margin-bottom: 40px;' src='pictures/vs.png'> 
            <img style='width:80px;' src='" . mysqli_result($result, 0, 1) . "'> <br> </div></td>";

            echo "</tr>";
            
            mysqli_free_result($result);
        } else {
            echo "Es wurden keine Ergebnisse gefunden!";
        }
    } else {
        echo "ERROR: $sql. " . mysqli_error($link);
    }


}
?>