<?php
$aktspiel=$_POST['hd_player_team_id'];
$sql = 'Select te_id, te_name from t_team order by te_id';
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($zeile = mysqli_fetch_array($res)) {
        echo "<option value=" . $zeile['te_id'];
        if($aktspiel==$zeile['te_id']) echo " selected";
        echo ">" . $zeile['te_name'] . "</option>";
    }
}
