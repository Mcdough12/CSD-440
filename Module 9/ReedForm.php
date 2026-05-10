<?php
/*
    Name: Reed B
    File: ReedForm.php
    Purpose: Add records to players table
*/

include 'db_connect.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $position = $_POST['position'];
    $jersey_number = $_POST['jersey_number'];
    $batting_average = $_POST['batting_average'];

    $sql = "INSERT INTO players
            (first_name, last_name, position, jersey_number, batting_average)

            VALUES

            ('$first_name', '$last_name', '$position',
             '$jersey_number', '$batting_average')";

    if ($conn->query($sql) === TRUE) {

        $message = "Player added successfully!";

    } else {

        $message = "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Player</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h