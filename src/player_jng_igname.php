<?php
$sql="SELECT p_ingamename from t_player join t_team as t on p_team= t.te_id join t_rolle as r on r.r_id=p_r_rolle where r.r_id=2 and t.te_id=".$_POST['whichTeam'];
//echo $sql;
$kbs=mysqli_query($conn, $sql);
$bsk=mysqli_fetch_array($kbs);
echo $bsk['p_ingamename'];
?>