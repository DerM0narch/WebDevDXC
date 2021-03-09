<?php
$sql = 'Select te_id,te_name from t_team';
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($zeile = mysqli_fetch_array($res)) {
        echo "<option value=" . $zeile['te_id'] . ">" . $zeile['te_name'] . "</option>";
    }
}
