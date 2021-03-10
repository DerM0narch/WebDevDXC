<?php
$sql="SELECT te_name from t_team where te_id=".$_POST['whichTeam'];
//echo $sql;
$kbs=mysqli_query($conn, $sql);
$bsk=mysqli_fetch_array($kbs);
echo $bsk['te_name'];
?>