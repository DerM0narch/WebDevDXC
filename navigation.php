<style type="text/css" media="screen">
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    font-family: monospace;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }


  .topnav a.active {
    background-color: #bb86fc;
    color: white;
  }
</style>
<script src="https://kit.fontawesome.com/763c726486.js" crossorigin="anonymous"></script>

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
</div>
<br>
<br>