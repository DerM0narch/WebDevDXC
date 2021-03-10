<?php
$sql = 'Select * from t_team';
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($zeile = mysqli_fetch_array($res)) {
        echo '<div class="gallery-cell"><img src="' . $zeile['te_pic_path'] . '" alt=' . $zeile['te_name'] . "><hr></div>";
    }
}
?>