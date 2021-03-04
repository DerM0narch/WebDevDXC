<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrieren</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
</head>

<body>
    <div class="sideways">
        <div class="divboxreg">
            <center>
                <h3> Registrierung</h3> <br>
                <center>
                    <!-- TODO insert into users (e-mail, username, passwort)
    check if passwort und wiederholtes Passwort gleich sonst wiederholung-->

                    <table class="zentrierterTabelle">
                        <tr>
                            <td>E-mail:</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Benutername:</td>
                            <td><input type="text" name="reg.benutzername"></td>
                        </tr>
                        <tr>
                            <td>Passwort:</td>
                            <td><input type="password" name="reg.passwort"></td>
                        </tr>
                        <tr>
                            <td>Passwort wiederholen:</td>
                            <td><input type="password" name="reg.wie.passwort"></td>
                        </tr>
                    </table>
                    <br>
                    <center>
                        <button class="bigbutton" type="submit" onclick="window.location.href='reg.bestätigung.php'"> <span>Registrieren </span> </button>
                        <center>
        </div>
    </div>
</body>

</html>