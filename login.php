<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
    <?php include 'src/db_conn.php' ?>
</head>

<body>
    <div class="sideways">
        <br>
        <div class="divbox">
            <h3 class="zentrierterText"> Login </h3>
            <br>
            <table class="zentrierterTabelle">
                <tr>
                    <td>Benutzername:</td>
                    <td> <input type="text" name="Benutzername" class="zentrierterText"> </td>
                </tr>
                <tr>
                    <td>Kennwort:</td>
                    <td><Input type="password" name="password" class="zentrierterText"></td>
                </tr>
            </table>
            <br>
            <button type="submit" onclick="window.location.href='register.php'"> Registrierung </button>
        <center>
    </div>
</body>

</html>
