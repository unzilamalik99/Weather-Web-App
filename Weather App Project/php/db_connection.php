<?php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wth_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
