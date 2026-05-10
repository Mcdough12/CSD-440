<?php
/*
    Name: Reed B
    File: ReedQuery.php
    Purpose: Search players table using user input
*/

include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Players</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Search Players</h1>

<form method="POST">

    <label>Enter Last Name:</label><br>

    <input type="text" name="search" required>

    <br><br>

    <input type="submit" value="Search">

</form>

<br>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $search = $_POST['search'];

    $sql = "SELECT * FROM players
            WHERE last_name LIKE '%$search%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Jersey Number</th>
                <th>Batting Average</th>
              </tr>";

        while($row = $result->fetch_assoc()) {

            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            echo "<td>" . $row["jersey_number"] . "</td>";
            echo "<td>" . $row["batting_average"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {

        echo "<p>No matching players found.</p>";
    }
}

$conn->close();
?>

<br>

<a href="ReedIndex.php">Back to Home</a>

</div>

</body>
</html>