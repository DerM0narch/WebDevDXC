<style type="text/css" media="screen">
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
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


<div class="topnav">
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
        echo 'class="active"';
      } ?> href="index.php">Home</a>
  <a <?php if (stripos($_SERVER['REQUEST_URI'], 'teams.php') !== false) {
        echo 'class="active"';
      } ?> href="teams.php">Teams</a>
  <a href="players.php">Spieler</a>
  <a href="about.php">Matches</a>
  <a href="login.php">Login</a>
</div>