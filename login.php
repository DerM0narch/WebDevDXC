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
    <?php
    //session_start();

    // if(isset($_GET['Login'])) {
    //   $Benutzername = $_POST['Benutzername'];
    // $passwort = $_POST['password'];

    //    $statement = $pdo->prepare("SELECT * FROM t_user WHERE email = :email");
    //   $result = $statement->execute(array('email' => $email));
    //   $user = $statement->fetch();

    //Überprüfung des Passworts
    // if ($user !== false && password_verify($passwort, $user['passwort'])) {
    //   $_SESSION['userid'] = $user['id'];
    //  die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    // } else {
    // $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    //}

    //}
    ?>
    <div class="sideways">
        <br>
        <div class="divbox">
            <h3 class="zentrierterText"> Login </h3>
            <br>
            <!-- FIXME #4 Login Formular -->
            <?php
            if (isset($_GET['login'])) {
                $pdo = new PDO('mysql:host=localhost; dbname=leagueteams', 'root', '');
                session_start();
                $name = $_POST['Benutzername'];
                $passwort = $_POST['password'];

                $statement = $pdo->prepare("SELECT * FROM t_user WHERE u_username = :u_username");
                //$result = $statement->execute(array('name' => $name));
                $user = $statement->fetch();

                //Überprüfung des Passworts
                if ($user !== false && password_verify($passwort, $user['passwort'])) {
                    $_SESSION['userid'] = $user['id'];
                    die('Login erfolgreich.');
                } else {
                    $errorMessage = "E-Mail oder Passwort war ungültig<br>";
                }
            }
            ?>
            <form action="?login=1" method="POST">
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
                <center>
                    <button class="bigbutton" type="submit" onclick="window.location.href='index.php'"><span>Login </span></button>
                    <br>
                </center>
            </form>
            <br>
            <center>
                Noch nicht registriert? <br>
                Dann melden Sie sich schnell an! <br>
            </center>
            <center>
                <br>
<<<<<<< HEAD
                <button type="submit" onclick="window.location.href='register.php'"> Registrierung </button>
            </center>
=======
                <a href="register.php" class="btna">Registrierung</a>
                <center>
>>>>>>> 65cd3b1a8da324848cc5872c150f8aa00207940e

        </div>

    </div>
</body>

</html>