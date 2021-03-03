<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>League of Legends Tournament</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
</head>

<body style="text-align: center">
    <img src="pictures/lol_championship.png" alt="LoL-Icon" style="display: block; margin-left: auto; margin-right: auto; margin-top: 10px;" height="200px" width="auto">
    <h3>Der Tournament Tracker ihres Vertrauens</h3> <br>
    <div class="row">
        <div class="col">
            <i class="fas fa-clock"></i> <b style="font-size: large;"> Nächstes Spiel</b>
            <!-- TODO Select Befehl für nächstes Spiel -->
        </div>
        <div class="col">
            <i class="fas fa-trophy"></i> <b style="font-size: large;"> Top 3</b>
            <!-- TODO Select Befehl für die Top 3 Teams bei Siegen 
            select * from t_gesamt_stats order by s_win desc limit 3 -->
        </div>
    </div>


    <script src="js/main.js"></script>
</body>

</html>