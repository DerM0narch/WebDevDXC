<?php
$sql="SELECT r_bezeichnung from t_rolle join t_player as p on p.p_r_rolle=r_id join t_team as t on t.te_id=p.p_team where r_id=1 and t.te_id=" .$_POST['whichTeam'];
//echo $sql;
$kbs=mysqli_query($conn, $sql);
$bsk=mysqli_fetch_array($kbs);
echo $bsk['r_bezeichnung'];
?>