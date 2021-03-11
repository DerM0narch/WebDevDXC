<?php
function mysqli_result($res,$row=0,$col=0)
{ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leagueteams";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<p style='float:right;'><span class='material-icons sidespace'>cloud_off</span></p> " . $conn->connect_error);
}
echo "<p style='float:right;'><span class='material-icons sidespace'>cloud_done</span></p>";

