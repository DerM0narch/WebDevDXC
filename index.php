<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>League of Legends Tournament</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
    <?php include 'src/db_conn.php' ?>
</head>

<body>
    <div class="sideways">
        <img src="pictures/lol_championship.png" alt="LoL-Icon" style="display: block; margin-left: auto; margin-right: auto; margin-top: 10px;" height="200px" width="auto">
        <h3 style="text-align: center">Der Tournament Tracker ihres Vertrauens</h3> <br>
        <div class="row">
            <div class="col">
                <i class="fas fa-clock"></i> <b style="font-size: large;"> Nächstes Spiel</b>
                <hr>
                <!-- TODO Select Befehl für nächstes Spiel -->
            </div>
            <div class="col">
                <i class="fas fa-trophy"></i> <b style="font-size: large;"> Top 3</b>
                <hr>
                <!-- TODO Select Befehl für die Top 3 Teams bei Siegen -->
                <?php
                $sql = "SELECT * FROM t_gesamt_stats ORDER BY s_win DESC LIMIT 3";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>TEAM</th>";
                        echo "<th>SIEGE</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['te_name'] . "</td>";
                            echo "<td>" . $row['s_win'] . "</td>";
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
                ?>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>