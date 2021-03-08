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
        <!-- Dropdownliste zur Auswahl der Spiele 
        in den Zeilen die Ereignissymbole plus Schaltflächen zum hoch und runter zählen für beide Teams
        button zur auswahl des Siegers je nach team färbt er sich
        Submit button-->
        <img src = "pictures/LoL_transparent.png"> <table border=3>
            <tr>
                <th>
                    <form action="#">
                        <label>Spielauswahl:
                            <select name="nextGame">
                                <option>Spiel 1</option>
                                <option>Spiel 2</option>
                                <option>Spiel 3</option>
                                <option>Spiel 4</option>
                            </select>
                        </label>
                    </form> 
                </th> 
            </tr>
        </table>
        <br>
        <table border=3>
            <tr>
                <th>
                    
                </th>
                <th>
                    Blue Side
                </th>
                <th>
                    Red Side
                </th>
                <th>
                    
                </th> 
            </tr>
            <!--kills-->
            <tr>
                <td>
                    <!-- Icon Blue Kills-->
                    
                    <img src = "pictures/sword.png">

                </td>
                <td><!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(1,1);"> 
                    <input type="text" name="tbki" id="E1S1" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(1,1);">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(1,2);"> 
                    <input type="text" name="tbki" id="E1S2" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(1,2);">
                </td>
                <td>
                    <!-- Icon Red Kills-->
                    <img src = "pictures/sword.png">

                </td>
            </tr>
            <!-- Turrets-->
            <tr>
                <td>
                    <!-- Icon Blue Turrets-->
                    <img src = "pictures/Turret_blue.png">

                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(2,1);"> 
                    <input type="text" name="tbki" id="E2S1" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(2,1);">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(2,2);"> 
                    <input type="text" name="tbki" id="E2S2" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(2,2);">
                </td>
                <td>
                    <!-- Icon Red Turrets-->
                    <img src = "pictures/Turret_red.png">
                </td>
            </tr>
            <!-- Drakes-->
           
            <tr>
                <td>
                    <!-- Icon Blue Drakes-->
                    <img src = "pictures/Dragon_blue.png">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(3,1);"> 
                    <input type="text" name="tbki" id="E3S1" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(3,1);">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(3,2);"> 
                    <input type="text" name="tbki" id="E3S2" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(3,2);">
                </td>
                <td>
                    <!-- Icon Red Drakes-->
                    <img src = "pictures/Dragon_red.png">
                </td>
            </tr>
            <!--Nashes-->
            <tr>
                <td>
                    <!-- Icon Blue Nashes-->
                    <img src = "pictures/Nashor_blue.png">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(4,1);"> 
                    <input type="text" name="tbki" id="E4S1" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(4,1);">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(4,2);"> 
                    <input type="text" name="tbki" id="E4S2" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(4,2);">
                </td>
                <td>
                    <!-- Icon Red Nashes-->
                    <img src = "pictures/Nashor_red.png">
                </td>
            </tr>
            <!--Inhibs-->
            <tr>
                <td>
                    <!-- Icon Blue Inhibs-->
                    <img src = "pictures/Inhibitor_blue.png">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(5,1);"> 
                    <input type="text" name="tbki" id="E5S1" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(5,1);">
                </td>
                <td>
                    <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                    <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(5,2);"> 
                    <input type="text" name="tbki" id="E5S2" value=0 readonly>
                    <input type="button" value="+" name="tbkiplus"  id="tbkiplus" onclick="countup(5,2);">
                </td>
                <td>
                    <!-- Icon Red Inhibs-->
                    <img src = "pictures/Inhibitor_red.png">
                </td>
            </tr>
        </table>


      
    





    </div>
    <script src="js/main.js"></script>
</body>

</html>