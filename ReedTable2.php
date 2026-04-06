<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Number Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
/*
Name: Reed B
Date: 04/05/2026
Assignment: Module X - PHP Random Table

Purpose: Create an HTML table using nested loops that displays random numbers in each cell.
*/

// Define number of rows and columns
$rows = 5;
$cols = 5;
?>

<h2>Random Number Table</h2>

<table>

<?php
// Outer loop for rows
for ($i = 0; $i < $rows; $i++) {
?>
    <tr>
<?php
    // Inner loop for columns
    for ($j = 0; $j < $cols; $j++) {
        $randomNumber = rand(1, 100);
?>
        <td><?php echo $randomNumber; ?></td>
<?php
    }
?>
    </tr>
<?php
}
?>

</table>

</body>
</html>