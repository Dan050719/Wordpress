<?php
$servername = "dragonhostingdb.mysql.database.azure.com";
$username = "dan";
$password = "UUhE8A^fdN*v$pv8";
$dbname = "dragonvm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
