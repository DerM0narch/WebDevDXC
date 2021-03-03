<head>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/763c726486.js" crossorigin="anonymous"></script>
</head>

<div class="topnav">
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
        echo 'class="active"';
      } ?> href="index.php"><i class="fas fa-home"></i> Home</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'teams.php') !== false) {
        echo 'class="active"';
      } ?> href="teams.php"><i class="fas fa-users"></i> Teams</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'players.php') !== false) {
        echo 'class="active"';
      } ?> href="players.php"><i class="fas fa-user"></i> Spieler</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'matches.php') !== false) {
        echo 'class="active"';
      } ?> href="matches.php"><i class="fas fa-chess"></i> Matches</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'login.php') !== false) {
        echo 'class="active"';
      } ?> href="login.php" style="float:right;"><i class="fas fa-sign-in-alt"></i> Login</a>
</div> <br>