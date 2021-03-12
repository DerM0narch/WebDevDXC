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
                <thead>
                    <!-------
            Team 1 = G2 Esports
            Team 2 = Fnatic
            Team 3 = Rogue
            Team 4 =  Schalke 04
            Team 5 =  SK Gaming
            Team 6 = Unicorns of Love.cis
            Team 7 = Funplus Phoenix
            Team 8 = Vega Squadron
            Team 9 = Damwon Gaming
            Team 10 = Gambit Esports  -->

                    <tr>
                        <th colspan="7" align="left">Tag 1</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'src/matches_liste.php' ?>

                    <!-- <tr>
                        Tag 1
                        <td align="middle"><img src="pictures/Team_Logos/G2_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/Gambit_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/Fnatic_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/DWG_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/Rogue_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/VEG_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/Schalke04_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/FPX_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/SKGaming_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/Fnatic_logo.png" width="60"></td>
                    </tr>
                    Tag 2 yayyyyyy

                    Freie Zeilen
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    Freie Zeilen
                    <tr>
                        <th colspan="7" align="left">Tag 2</th>
                    </tr>

                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/Gambit_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/FPX_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/Rogue_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/G2_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/Schalke04_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/DWG_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/SKGaming_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/VEG_logo.png" width="60"></td>
                    </tr>
                    <tr>
                        <td align="middle"><img src="pictures/Team_Logos/UOF_logo.png" width="60"></td>
                        <td align="middle"><img src="pictures/vs.png" width="30"></td>
                        <td align="middle"><img src="pictures/Team_Logos/FPX_logo.png" width="60"></td>
                    </tr> -->
            </table>
        </div>
    </center>
</body>

</html>