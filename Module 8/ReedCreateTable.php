<?php
/*
    Name: Reed B
    File: ReedCreateTable.php
    Purpose: Create a table in baseball_01 database
*/

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    position VARCHAR(30),
    jersey_number INT,
    batting_average DECIMAL(4,3)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'players' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>