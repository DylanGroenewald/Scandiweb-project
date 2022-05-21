<?php
$servername = "localhost";
$username = "id18848420_root";
$password = "Dylanlen2002!";
$db = "id18848420_products";

// Create connection
$con = new mysqli($servername, $username, $password, $db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
