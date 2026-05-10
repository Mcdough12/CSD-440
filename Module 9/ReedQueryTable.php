<?php
/*
    Name: Reed B
    File: ReedQueryTable.php
    Purpose: Display data from players table
*/

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM players";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Players Table</title>
</head>
<body>

<h2>Baseball Players</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Jersey #</th>
        <th>Batting Avg</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['first_name']}</td>
            <td>{$row['last_name']}</td>
            <td>{$row['position']}</td>
            <td>{$row['jersey_number']}</td>
            <td>{$row['batting_average']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No results found</td></tr>";
}
?>

</table>

</body>
</html>

<?php
$conn->close();
?>