<?php
/*
-------------------------------------------------------
Program Name: db_connect.php
Author: Reed Bunnell
Date: May 2026
Purpose: Establish database connection for PDF report.
-------------------------------------------------------
*/

$host = "localhost";
$username = "root";
$password = "";
$database = "module8_database";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>