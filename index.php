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
    <style>
        .next img {
            width: 150px;
            margin-left: 40px;
            margin-right: 40px;
        }

        .vs img {
            width: 500px;
            margin-left: 40px;
            margin-right: 40px;
        }

        .next div {
            flex: 1;
            display: inline;
        }
    </style>
</head>

<body>
    <div class="sideways">
        <img src="pictures/lol_championship.png" alt="LoL-Icon" style="display: block; margin-left: auto; margin-right: auto; margin-top: 10px;" height="200px" width="auto">
        <h3 style="text-align: center">Der Tournament Tracker ihres Vertrauens</h3> <br>
        <div class="row">
            <div class="col next">
                <i class="fas fa-clock"></i> <b style="font-size: large;"> Nächstes Spiel</b>
                <hr>
                <center><?php include 'src/index_nextgame.php' ?></center>
            </div>
            <div class="col">
                <i class="fas fa-trophy"></i> <b style="font-size: large;"> Top 3</b>
                <hr>
                <!-- TODO #3 Select Befehl für die Top 3 Teams bei Siegen -->
                <?php include 'src/index_topthree.php' ?>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>