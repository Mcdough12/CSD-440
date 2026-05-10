<?php
/*
    Name: Reed B
    File: db_connect.php
    Purpose: Database connection file
*/

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>