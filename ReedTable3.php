<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Sum Table</title>
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
Assignment: Module X - PHP Table with Function

Purpose: Create a table using nested loops where each cell displays
the sum of two random numbers using an external function.
*/

// Include external function file
include 'functions.php';

// Define table size
$rows = 5;
$cols = 5;
?>

<h2>Random Sum Table</h2>

<table>

<?php
// Loop through rows
for ($i = 0; $i < $rows; $i++) {
?>
    <tr>
<?php
    // Loop through columns
    for ($j = 0; $j < $cols; $j++) {

        // Generate two random numbers
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);

        // Call function
        $sum = addNumbers($num1, $num2);
?>
        <td><?php echo $sum; ?></td>
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