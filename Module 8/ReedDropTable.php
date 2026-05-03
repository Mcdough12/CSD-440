<?php
/*
    Name: Reed B
    File: ReedDropTable.php
    Purpose: Drop players table
*/

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP TABLE IF EXISTS players";

if ($conn->query($sql) === TRUE) {
    echo "Table 'players' dropped successfully!";
} else {
    echo "Error dropping table: " . $conn->error;
}

$conn->close();
?>