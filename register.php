<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrieren</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
    <?php include 'src/db_conn.php' ?>
</head>

<body>
    <div class="sideways">
        <div class="divboxreg">
            <center>
                <h3> Registrierung</h3> <br>
                <center>
                    <!-- TODO insert into users (e-mail, username, passwort)
    check if passwort und wiederholtes Passwort gleich sonst wiederholung-->
    <?php

        if(isset($_POST['submit']))
        {
            $u_email = $_POST['email'];
            $u_username = $_POST['reg_benutzername'];
            $u_passwort = $_POST['reg_passwort'];

            $insert = mysqli_query($conn,"INSERT INTO t_user (u_email, u_username, u_passwort) VALUES ('$u_email','$u_username', '$u_passwort')");

            if(!$insert)
            {
                echo mysqli_error();
            }
            else
            {
                header("Location: reg.bestätigung.php");
            }
        }

        mysqli_close($conn); // Close connection
        ?>
    <form method="POST">

        <table class="zentrierterTabelle">
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email" placeholder="bitte Mailadresse eintragen"></td>
            </tr>
            <tr>
                <td>Benutername</td>
                <td><input type="text" name="reg_benutzername" placeholder="Benutzername"></td>
            </tr>
            <tr>
                <td>Passwort</td>
                <td><input type="password" name="reg_passwort" placeholder="********"></td>
            </tr>
            <tr>
                <td>Passwort wiederholen</td>
                <td><input type="password" name="reg.wie.passwort" placeholder="********"></td>
            </tr>
        </table>
        <center>
            <button type="submit" name="submit" value="submit"> Registrieren </button>
        <center>
    </form>
    <br>
</body>

</html>
