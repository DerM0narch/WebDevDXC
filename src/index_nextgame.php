<?php
$sql = "SELECT sp_id FROM t_spieltag ORDER BY sp_id LIMIT 1";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['sp_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "Es wurden keine Ergebnisse gefunden!";
    }
} else {
    echo "ERROR: $sql. " . mysqli_error($link);
}
