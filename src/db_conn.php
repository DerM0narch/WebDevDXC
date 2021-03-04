<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leagueteams";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<p style='float:right;'><span class='material-icons sidespace'>cloud_off</span></p> " . $conn->connect_error);
}
echo "<p style='float:right;'><span class='material-icons sidespace'>cloud_done</span></p>";
