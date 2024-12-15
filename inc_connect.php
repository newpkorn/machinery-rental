<?php
$host = "localhost";
$username = "root";
$password = "12345678";
$db = "machinery";

// Create a connection using mysqli_connect
$conn = mysqli_connect($host, $username, $password, $db);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character set (optional, based on your database setup)
mysqli_set_charset($conn, "utf8");

// Your database operations can go here...
