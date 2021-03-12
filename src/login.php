<?php header('content-type: text/html; charset=utf-8'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  session_start();

  $username = $_POST['username'];
  $passwort = $_POST['passwort'];

  $hostname = $_SERVER['HTTP_HOST'];
  $path = dirname($_SERVER['PHP_SELF']);

  // Benutzername und Passwort werden überprüft
  $sql = "SELECT * FROM t_user  WHERE u_email='" . $username . "' AND u_passwort='" . md5($passwort) . "'";


  $res = mysqli_query($conn, $sql);
  if ($res and mysqli_num_rows($res) == 1) {
    $_SESSION['angemeldet'] = true;
    $_SESSION['user'] = $username;
    header('Location:http://' . $hostname . ($path == '/' ? '' : $path) . '/start.php');
    exit;
  }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>
  <title>Login</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <form action="login.php" method="post">
    <table width=100%>
      <tr align=center>
        <td>
          <h1>&nbsp;<br>Anmeldung <p>
            <p>
          </h1>
        </td>
      </tr>
      <tr>
        <td>
          <table width=100%>
            <th align=right width=50%>E-Mail:</th>
            <td> <input type="text" name="username" /></td>
      </tr>
      <th align=right>Passwort: </th>
      <td> <input type="password" name="passwort" /></td>
      </tr>
    </table>
    </tr>
    <tr align=center>
      <td><input type="submit" value="Anmelden" /></td>
    </tr>
    <tr align=center>
      <td>&nbsp</td>
    </tr>
    <tr>
      <td align='center'>Noch nicht registriert? <a href="register.php"> Hier Registrieren</a></td>
    </tr>

    </table>

  </form>
</body>

</html>