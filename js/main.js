function countup(ereignis, side) {
  var alterWert;
  var feld;

  feld = "E" + ereignis + "S" + side;
  alterWert = parseInt(document.getElementById(feld).value);
  document.getElementById(feld).value = alterWert + 1;
}

function countdown(ereignis, side) {
  var alterWert;
  var feld;

  feld = "E" + ereignis + "S" + side;
  alterWert = parseInt(document.getElementById(feld).value);
  if (alterWert > 0) {
    document.getElementById(feld).value = alterWert - 1;
  }
}

function selectchange() {
  document.getElementById('hd_spiel_id').value = document.getElementById('nextGame').value;
  document.spielauswahl.action="game_stats.php?type=2";
  document.spielauswahl.submit();
}

function selectchangeteam() {
  document.getElementById('hd_player_team_id').value = document.getElementById('whichTeam').value;
  document.welchesTeam.action="players.php?type=2";
  document.welchesTeam.submit();
}