<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spieler</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
</head>

<body>
    <!-- TODO #8 Select Befehl für Spieler schreiben und Seite designen -->
    <div class="sideways">
        <table class="drop">
            <tr>
                <th>
                    <form action="#">
                        <label>Welches Team?:
                            <select name="whichTeam">
                            <!-- Selectbefehl der Teams nach ID dem passenden value hinzufügt-->
                                <option value="1">G2 Esports</option>
                                <option value="2">Fnatic</option>
                                <option value="3">Rogue</option>
                                <option value="4">Schalke 04</option>
                                <option value="5">SK Gaming</option>
                                <option value="6">Unicorns of Love</option>
                                <option value="7">Funplus Phoenix</option>
                                <option value="8">Vega Squadron</option>
                                <option value="9">Damwon Gaming</option>
                                <option value="10">Gambit Esports</option>
                            </select>
                        </label>
                    </form>
                </th>
            </tr>
        </table>
        <br>
        <table border="3">
            <tr>
            <!-- Ingamenamen per Selectbefehl anhand der rollenID und nach de ausgewählten team-->
                <th>
                    Ingamename Toplane
                </th>
                <th>
                    Ingamename Jungle
                </th>
                <th>
                    Ingamename Midlane
                </th>
                <th>
                    Ingamename Botlane
                </th>
                <th>
                    Ingamename Support
                </th>
            </tr>
            <tr>
            <!-- Rolle per Selectbefehl anhand der rollenID-->
                <th>
                    Rolle Toplane
                </th>
                <th>
                    Rolle Jungle
                </th>
                <th>
                    Rolle Midlane
                </th>
                <th>
                    Rolle Botlane
                </th>
                <th>
                    Rolle Support
                </th>
            </tr>
            <tr>
            <!-- Nachnamen per Selectbefehl anhand der rollenID-->
                <th>
                    Nachnamen Toplane
                </th>
                <th>
                    Nachnamen Jungle
                </th>
                <th>
                    Nachnamen Midlane
                </th>
                <th>
                    Nachnamen Botlane
                </th>
                <th>
                    Nachnamen Support
                </th>
            </tr>
            <tr>
            <!-- Vornamen per Selectbefehl anhand der rollenID-->
                <th>
                    Vornamen Toplane
                </th>
                <th>
                    Vornamen Jungle
                </th>
                <th>
                    Vornamen Midlane
                </th>
                <th>
                    Vornamen Botlane
                </th>
                <th>
                    Vornamen Support
                </th>
            </tr>
            <tr>
            <!-- Team per Selectbefehl anhand der rollenID-->
                <th>
                    Team Toplane
                </th>
                <th>
                    Team Jungle
                </th>
                <th>
                    Team Midlane
                </th>
                <th>
                    Team Botlane
                </th>
                <th>
                    Team Support
                </th>
            </tr>
            <tr>
            <!-- Herkunkt per Selectbefehl anhand der rollenID-->
                <th>
                    Herkunkt Toplane
                </th>
                <th>
                    Herkunkt Jungle
                </th>
                <th>
                    Herkunkt Midlane
                </th>
                <th>
                    Herkunkt Botlane
                </th>
                <th>
                    Herkunkt Support
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
    </div>
</body>

</html>