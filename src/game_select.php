<?php
$sql = 'Select sp_id from t_spieltag order by sp_id';
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($zeile = mysqli_fetch_array($res)) {
        echo "<option value=" . $zeile['te_id'] . ">" . $zeile['te_name'] . "</option>";
    }
}
