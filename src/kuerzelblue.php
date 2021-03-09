<?php
$sql='SELECT te_kuerzel from t_spieltag as tag Join t_team as t on t.te_id=tag.sp_blue_side where tag.sp_id=$_POST[nextGame]';
$kbs=mysqli_query($conn, $sql);
$bsk=mysqli_fetch_all($kbs);
echo $bsk['te_kuerzel'];
?>
