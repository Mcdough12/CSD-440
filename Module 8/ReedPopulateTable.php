<?php
/*
    Name: Reed B
    File: ReedPopulateTable.php
    Purpose: Insert sample data into players table
*/

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO players (first_name, last_name, position, jersey_number, batting_average)
VALUES 
('Mike', 'Trout', 'Outfield', 27, 0.305),
('Aaron', 'Judge', 'Outfield', 99, 0.287),
('Clayton', 'Kershaw', 'Pitcher', 22, 0.000),
('Mookie', 'Betts', 'Outfield', 50, 0.290)";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>