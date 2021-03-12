<head>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/763c726486.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "200px";
      document.getElementById("main").style.marginLeft = "200px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "40px";
      document.getElementById("main").style.marginLeft = "40px";
    }
  </script>
</head>

<div id="mySidenav" class="sidenav" onmouseover="openNav()" onmouseout="closeNav()">
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
        echo 'class="active"';
      } ?> href="index.php"><span class="material-icons sidespace">home</span>Home</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'teams.php') !== false) {
        echo 'class="active"';
      } ?> href="teams.php"><span class="material-icons sidespace">groups</span>Teams</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'players.php') !== false) {
        echo 'class="active"';
      } ?> href="players.php"><span class="material-icons sidespace">person</span>Spieler</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'matches.php') !== false) {
        echo 'class="active"';
      } ?> href="matches.php"><span class="material-icons sidespace">sports_esports</span>Matches</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'game_stats.php') !== false) {
        echo 'class="active"';
      } ?> href="game_stats.php"><span class="material-icons sidespace">alarm</span>Game Stats</a>

  <?php
  session_start();

  $hostname = $_SERVER['HTTP_HOST'];
  $path = dirname($_SERVER['PHP_SELF']);
  if (!isset($_SESSION['angemeldet']) || !$_SESSION['angemeldet']) {
    echo '<a href="login.php" style="margin-top: 70px;"><span class="material-icons sidespace">login</span>Login</a>';
  } else {
    echo '<a href="logout.php" style="margin-top: 70px;"><span class="material-icons sidespace">logout</span>Logout</a>';
    echo '<a href="#"><span class="material-icons sidespace">face</span>Logged in</a>';
  } ?>
</div>

<footer style=" font-size: xx-small; position: fixed; bottom: 0; margin-left: 40px;">
  © Hilal, Lars, Patrick 2021
</footer>