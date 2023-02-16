<?php
session_start();
//test input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Databaskonfiguration
$servername = "localhost";
$dbname = "mywebsite";
$username = "root";
$password = "";
// hemlis.php ser ut såhär:
/* <?php 
    $dbname = "din databas";
    $username = "ditt användarnamn";
    $password = "sup3rh3mlis";
*/

// try to create connection
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    
}
?>