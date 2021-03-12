<style>
    table {
        font-size: xx-large;
        text-align: center;
    }

    td {
        padding-right: 40px;
        padding-left: 40px;
    }

    th {
        padding-right: 40px;
        padding-left: 40px;
    }
</style>

<?php
$sql = "SELECT te_name, te_win FROM t_team ORDER BY te_win DESC LIMIT 3";
if ($result = mysqli_query($conn, $sql)) {
    $name=mysqli_result($sql, 0, 0);
    $wins=mysqli_result($sql, 0, 1);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>TEAM</th>";
        echo "<th>SIEGE</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['te_name'] . "</td>";
            echo "<td>" . $row['te_win'] . "</td>";
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
