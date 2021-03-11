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
    <script src="js/main.js"></script>

</head>

<body>
    <?php
    //echo $_POST['hd_spiel_id'];
    if (isset($_POST['hd_spiel_id'])) {
        if ($_GET['type'] == 3) {

            $sp_id = $_POST['hd_spiel_id'];
            $bluekills = $_POST['tbki'];
            $bluedrakes = $_POST['tbdr'];
            $bluenashes = $_POST['tbna'];
            $blueturret = $_POST['tbtu'];
            $blueinhib = $_POST['tbin'];
            $redkills = $_POST['trki'];
            $reddrakes = $_POST['trdr'];
            $rednashes = $_POST['trna'];
            $redturret = $_POST['trtu'];
            $redinhib = $_POST['trin'];
            $winner = $_POST['winner'];
            //echo "<center>$winner</center>";
            if ($winner == 1) {
                $sql4 = "SELECT sp_blue_side from t_spieltag where sp_id=".$_POST['hd_spiel_id'];
                //echo $sql4;
                $notlooser=mysqli_query($conn, $sql4);
                $sql2 = "UPDATE t_team SET te_win= te_win + 1 WHERE te_id=".mysqli_result($notlooser, 0, 0);
            } elseif ($winner == 0) {
                $sql4 = "SELECT sp_red_side from t_spieltag where sp_id=".$_POST['hd_spiel_id'];
                //echo $sql4;
                $notlooser=mysqli_query($conn, $sql4);
                $sql2 = "UPDATE t_team SET te_win= te_win + 1 WHERE te_id=".mysqli_result($notlooser, 0, 0);
            } else {
            }
            //echo "<p align=center>".mysqli_result($notlooser, 0, 0)."</p>";
            $sql3="UPDATE t_spieltag set sp_win=" . mysqli_result($notlooser, 0, 0) . " where sp_id=".$_POST['hd_spiel_id'];
            echo $sql3;
            $sql = "INSERT INTO t_spiel_stats (ss_sp_id, ss_blue_kills, ss_blue_drakes, ss_blue_nashes, ss_blue_turrets, ss_blue_inhibs,
                             ss_red_kills, ss_red_drakes, ss_red_nashes, ss_red_turrets, ss_red_inhibs) VALUES ('$sp_id', '$bluekills', '$bluedrakes', '$bluenashes',
                             '$blueturret', '$blueinhib', '$redkills', '$reddrakes', '$rednashes', '$redturret', '$redinhib')";

            // echo $sql;
            // echo $sql3;
            
            $insert = mysqli_query($conn, $sql);
            $insert2 = mysqli_query($conn, $sql2);
            $insert3 = mysqli_query($conn, $sql3);

            if (!$insert) {
                echo "<script> alert('Fehlerhafte Eingabe!')</script>";
            } else {
                echo "<script> alert('Eingabe erfolgreich')</script>";
            }
        }
    }
    ?>
    <div class="sideways">
        <!-- Dropdownliste zur Auswahl der Spiele
            in den Zeilen die Ereignissymbole plus Schaltflächen zum hoch und runter zählen für beide Teams
            button zur auswahl des Siegers je nach team färbt er sich
            Submit button-->
        <form name="spielauswahl" id="spielauswahl" method="POST">
            <table class="drop">
                <tr>
                    <th>

                        <input type="hidden" name="hd_spiel_id" id="hd_spiel_id" value=0>
                        <label>Spielauswahl:
                            <?php if (isset($_GET['type']) && ($_GET['type'] == 3 || $_GET['type'] == 2)) { ?>
                                <select name="nextGame" id="nextGame" disabled>
                                <?php } else { ?>
                                    <select name="nextGame" id="nextGame" onchange="selectchange();">
                                    <?php } ?>

                                    <option value=0 hidden selected> Bitte Wählen </option>
                                    <?php include 'src/game_select.php' ?>
                                    </select>
                        </label>
                    </th>
                </tr>
            </table>
            <br>


            <?php if (!isset($_GET['type']) || ($_GET['type'] != 2 && $_GET['type'] != 3))
                echo "<center>Noch kein Spiel ausgewählt!</center>";
            else { ?>

                <table class="stat">
                    <tr>
                        <th>
                            <?php include 'src/kuerzelblue.php' ?>
                        </th>
                        <th>
                            <?php include 'src/teamblue.php' ?>
                        </th>
                        <th>
                            <?php include 'src/teamred.php' ?>
                        </th>
                        <th>
                            <?php include 'src/kuerzelred.php' ?>
                        </th>
                    </tr>
                    <!--kills-->
                    <tr>
                        <td>
                            <!-- Icon Blue Kills-->

                            <img src="pictures/sword.png">

                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="tbkiminus" id="tbkiminus" onclick="countdown(1,1);">

                            <input type="text" name="tbki" id="E1S1" value=0 readonly>

                            <input type="button" value="+" name="tbkiplus" id="tbkiplus" onclick="countup(1,1);">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="trkiminus" id="trkiminus" onclick="countdown(1,2);">

                            <input type="text" name="trki" id="E1S2" value=0 readonly>

                            <input type="button" value="+" name="trkiplus" id="trkiplus" onclick="countup(1,2);">
                        </td>
                        <td>
                            <!-- Icon Red Kills-->
                            <img src="pictures/sword.png">

                        </td>
                    </tr>
                    <!-- Turrets-->
                    <tr>
                        <td>
                            <!-- Icon Blue Turrets-->
                            <img src="pictures/Turret_blue.png">

                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="tbtuminus" id="tbtuminus" onclick="countdown(2,1);">

                            <input type="text" name="tbtu" id="E2S1" value=0 readonly>

                            <input type="button" value="+" name="tbtuplus" id="tbtuplus" onclick="countup(2,1);">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="trtuminus" id="trtuminus" onclick="countdown(2,2);">

                            <input type="text" name="trtu" id="E2S2" value=0 readonly>

                            <input type="button" value="+" name="trtuplus" id="trtuplus" onclick="countup(2,2);">
                        </td>
                        <td>
                            <!-- Icon Red Turrets-->
                            <img src="pictures/Turret_red.png">
                        </td>
                    </tr>
                    <!-- Drakes-->

                    <tr>
                        <td>
                            <!-- Icon Blue Drakes-->
                            <img src="pictures/Dragon_blue.png">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="tbdrminus" id="tbdrminus" onclick="countdown(3,1);">

                            <input type="text" name="tbdr" id="E3S1" value=0 readonly>

                            <input type="button" value="+" name="tbdrplus" id="tbdrplus" onclick="countup(3,1);">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="trdrminus" id="trdrminus" onclick="countdown(3,2);">

                            <input type="text" name="trdr" id="E3S2" value=0 readonly>

                            <input type="button" value="+" name="trdrplus" id="trdrplus" onclick="countup(3,2);">
                        </td>
                        <td>
                            <!-- Icon Red Drakes-->
                            <img src="pictures/Dragon_red.png">
                        </td>
                    </tr>
                    <!--Nashes-->
                    <tr>
                        <td>
                            <!-- Icon Blue Nashes-->
                            <img src="pictures/Nashor_blue.png">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="tbnaminus" id="tbnaminus" onclick="countdown(4,1);">

                            <input type="text" name="tbna" id="E4S1" value=0 readonly>

                            <input type="button" value="+" name="tbnaplus" id="tbnaplus" onclick="countup(4,1);">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="trnaminus" id="trnaminus" onclick="countdown(4,2);">

                            <input type="text" name="trna" id="E4S2" value=0 readonly>

                            <input type="button" value="+" name="trnaplus" id="trnaplus" onclick="countup(4,2);">
                        </td>
                        <td>
                            <!-- Icon Red Nashes-->
                            <img src="pictures/Nashor_red.png">
                        </td>
                    </tr>
                    <!--Inhibs-->
                    <tr>
                        <td>
                            <!-- Icon Blue Inhibs-->
                            <img src="pictures/Inhibitor_blue.png">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="tbinminus" id="tbinminus" onclick="countdown(5,1);">

                            <input type="text" name="tbin" id="E5S1" value=0 readonly>

                            <input type="button" value="+" name="tbinplus" id="tbinplus" onclick="countup(5,1);">
                        </td>
                        <td>
                            <!-- Schaltfläschen fürs hoch/runter zählen + aktueller Stand-->
                            <input type="button" value="-" name="trinminus" id="trinminus" onclick="countdown(5,2);">

                            <input type="text" name="trin" id="E5S2" value=0 readonly>

                            <input type="button" value="+" name="trinplus" id="trinplus" onclick="countup(5,2);">
                        </td>
                        <td>
                            <!-- Icon Red Inhibs-->
                            <img src="pictures/Inhibitor_red.png">
                        </td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <center>
                            <div><label class="drop" style="padding:5px;" for="">Gewinnen auswählen:
                                    <select name="winner" id="winner">
                                        <option value=-1 hidden selected>Sieger</option>
                                        <option value=1><?php include 'src/kuerzelblue.php' ?></option>
                                        <option value=0><?php include 'src/kuerzelred.php' ?></option>
                                    </select>
                                </label></div>
                        </center>
                        <center><input class="bigbutton" type="button" name="einfuegen" value="einfügen" onclick="datenSpeichern();"></center>

                    </tr>
                </table>
            <?php } ?>
        </form>
    </div>
</body>

</html>