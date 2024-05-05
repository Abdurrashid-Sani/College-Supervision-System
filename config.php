<?php
$servername = "localhost";
$username = "id21259771_r";
$password = "@Sani3232";
$dbname = "id21259771_r";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
