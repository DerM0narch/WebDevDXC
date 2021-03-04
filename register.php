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

<body>
    <br>
    <br>
    <center>
        <h3>Registrierung</h3> <br>
    <center>
    <!-- TODO insert into users (e-mail, username, passwort)
    check if passwort und wiederholtes Passwort gleich sonst wiederholung-->
    
    <table class="zentrierterTabelle">
        <tr>
            <td>E-mail</td> 
            <td><input type="email" name="email" placeholder="bitte Mailadresse eintragen"></td>        
        </tr>
        <tr>
            <td>Benutername</td>
            <td><input type="text" name="reg.benutzername" placeholder="Benutzername"></td>        
        </tr>
        <tr>
            <td>Passwort</td>
            <td><input type="password" name="reg.passwort" placeholder="********"></td>        
        </tr>
        <tr>
            <td>Passwort wiederholen</td>
            <td><input type="password" name="reg.wie.passwort" placeholder="********"></td>        
        </tr>
    </table>
    <br>
    <center>
        <button type="submit" onclick="window.location.href='reg.bestätigung.php'"> Registrierung abschließen </button>
    <center>
</body>

</html>