<?php
$sql="SELECT te_name from t_spieltag as tag Join t_team as t on t.te_id=tag.sp_red_side where tag.sp_id=".$_POST['hd_spiel_id'];
//echo $sql;
$kbs=mysqli_query($conn, $sql);
$bsk=mysqli_fetch_array($kbs);
echo $bsk['te_name'];
?>