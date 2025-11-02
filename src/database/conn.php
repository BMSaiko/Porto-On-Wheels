<?php
include("db.php");
// Replace the variables with your database credentials
$dbhost = "138.201.91.186";
$dbuser = "root";
$dbpass = "?egAqnMcRSP!5CPN";
$dbname = "portoonwheels";

// Connect to the database
$db = new db($dbhost, $dbuser, $dbpass, $dbname);


// Check if the connection was successful
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
