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
