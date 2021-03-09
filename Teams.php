<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
    <?php include 'src/db_conn.php' ?>

    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <style>
        .gallery-cell {
            width: 100%;
            height: 900px;
            margin-right: 30px;
            counter-increment: gallery-cell;
        }

        img {
            position: relative;
            margin: auto;
            height: 100px;
        }
    </style>
</head>

<body>
    <!-- TODO #7 Select Befehl für Teams schreiben und Seite designen -->
    <div class="sideways">
        <div class="gallery js-flickity">
            <div class="gallery-cell">
                <img src="pictures/teams/DWG_logo.png" alt="DWG">
                <hr>
            </div>
            <div class="gallery-cell"><img src="pictures/teams/Fnatic_logo.png" alt="Fnatic">
                <hr>
            </div>
            <div class="gallery-cell"><img src="pictures/teams/FPX_logo.png" alt="FPX">
                <hr>
            </div>
            <div class="gallery-cell"><img src="pictures/teams/G2_logo.png" alt="G2">
                <hr>
            </div>
            <div class="gallery-cell"><img src="pictures/teams/Gambit_logo.png" alt="Gambit">
                <hr>
            </div>
            <?php include 'src/teams_select.php' ?>
        </div>
    </div>
    <script src="js/flickity.pkgd.min.js"></script>
</body>

</html>