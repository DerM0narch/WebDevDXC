<?php
$aktspiel=$_POST['hd_spiel_id'];
$sql = 'Select sp_id from t_spieltag where sp_blue_win is null order by sp_id';
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($zeile = mysqli_fetch_array($res)) {
        echo "<option value=" . $zeile['sp_id'];
        if($aktspiel==$zeile['sp_id']) echo " selected";
        echo ">" . $zeile['sp_id'] . "</option>";
    }
}
