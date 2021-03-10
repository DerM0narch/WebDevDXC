<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spieler</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
    <?php include 'src/db_conn.php' ?>
    <script src='js/main.js'> </script>
</head>

<body>
    <!-- TODO #8 Select Befehl für Spieler schreiben und Seite designen -->
    <div class="sideways">
        <table class="drop">
            <tr>
                <th>
                    <form name="welchesTeam" id="welchesTeam" action="#" method=POST>
                    <input type="hidden" name="hd_player_team_id" id="hd_player_team_id" value=0>
                        <label>Welches Team?:
                            <select name="whichTeam" id="whichTeam" onchange="selectchangeteam();">
                            <!-- Selectbefehl der Teams nach ID dem passenden value hinzufügt-->
                               <option value=0 disabled selected> Bitte Team wählen </option>
                               <?php include 'src/player_team_select.php' ?>
                            </select>
                        </label>
                    </form>
                </th>
            </tr>
        </table>
        <br>

        <?php if (!isset($_GET['type']) || $_GET['type']!=2)
        echo "Noch kein Team ausgewählt!";
        else{?>

        <table border="3">
            <tr>
            <!-- Ingamenamen per Selectbefehl anhand der rollenID und nach de ausgewählten team-->
                <th>
                    <?php include 'src/player_igname/player_top_igname.php' ?>
                </th>
                <th>
                    <?php include 'src/player_igname/player_jng_igname.php' ?>
                </th>
                <th>
                    <?php include 'src/player_igname/player_mid_igname.php' ?>
                </th>
                <th>
                    <?php include 'src/player_igname/player_bot_igname.php' ?>
                </th>
                <th>
                    <?php include 'src/player_igname/player_sup_igname.php' ?> 
                </th>
            </tr>
            <tr>
            <!-- Rolle per Selectbefehl anhand der rollenID-->
                <th>
                    <?php include 'src\player_rolle\player_rolle_top.php' ?>
                </th>
                <th>
                    <?php include 'src\player_rolle\player_rolle_jng.php' ?>
                </th>
                <th>
                    <?php include 'src\player_rolle\player_rolle_mid.php' ?>
                </th>
                <th>
                    <?php include 'src\player_rolle\player_rolle_bot.php' ?>
                </th>
                <th>
                    <?php include 'src\player_rolle\player_rolle_sup.php' ?>
                </th>
            </tr>
            <tr>
            <!-- Nachnamen per Selectbefehl anhand der rollenID-->
                <th>
                    <?php include 'src\player_nname\player_nname_top.php' ?>
                </th>
                <th>
                    <?php include 'src\player_nname\player_nname_jng.php' ?>
                </th>
                <th>
                    <?php include 'src\player_nname\player_nname_mid.php' ?>
                </th>
                <th>
                    <?php include 'src\player_nname\player_nname_bot.php' ?>
                </th>
                <th>
                    <?php include 'src\player_nname\player_nname_sup.php' ?>
                </th>
            </tr>
            <tr>
            <!-- Vornamen per Selectbefehl anhand der rollenID-->
                <th>
                    <?php include 'src\player_vname\player_vname_top.php' ?>
                </th>
                <th>
                    <?php include 'src\player_vname\player_vname_jng.php' ?>
                </th>
                <th>
                    <?php include 'src\player_vname\player_vname_mid.php' ?>
                </th>
                <th>
                    <?php include 'src\player_vname\player_vname_bot.php' ?>
                </th>
                <th>
                    <?php include 'src\player_vname\player_vname_sup.php' ?>
                </th>
            </tr>
            <tr>
            <!-- Team per Selectbefehl anhand der rollenID-->
                <th>
                    <?php include 'src\player_team\player_team_all.php' ?>
                </th>
                <th>
                    <?php include 'src\player_team\player_team_all.php' ?>
                </th>
                <th>
                    <?php include 'src\player_team\player_team_all.php' ?>
                </th>
                <th>
                    <?php include 'src\player_team\player_team_all.php' ?>
                </th>
                <th>
                    <?php include 'src\player_team\player_team_all.php' ?>
                </th>
            </tr>
            <tr>
            <!-- Herkunkt per Selectbefehl anhand der rollenID-->
                <th>
                    <?php include 'src\player_herkunft\player_herkunft_top.php' ?>
                </th>
                <th>
                    <?php include 'src\player_herkunft\player_herkunft_jng.php' ?>
                </th>
                <th>
                    <?php include 'src\player_herkunft\player_herkunft_mid.php' ?>
                </th>
                <th>
                    <?php include 'src\player_herkunft\player_herkunft_bot.php' ?>
                </th>
                <th>
                    <?php include 'src\player_herkunft\player_herkunft_sup.php' ?>
                </th>
            </tr>
            <tr>
            <!-- Bild des Spielers per Knopf onhover anzeigen-->
                <th>
                    Bild Toplane
                </th>
                <th>
                    Bild Jungle
                </th>
                <th>
                    Bild Midlane
                </th>
                <th>
                    Bild Botlane
                </th>
                <th>
                    Bild Support
                </th>
            </tr>
        </table>

        <?php } ?>
    </div>
</body>

</html>