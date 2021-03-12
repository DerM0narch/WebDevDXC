<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
</head>

<body>
    <center>
        <!-- TODO #6 Select Befehl für Matches schreiben und Seite designen -->
        <div class="sideways">
            <img src="pictures/lol_championship.png" width="200" class="center">

            <table class="center" cellpadding="5">

                    <?php include 'src/matches_liste.php' ?>

            </table>
        </div>
    </center>
</body>

</html>