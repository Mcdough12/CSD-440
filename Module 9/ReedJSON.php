<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reed JSON Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        pre {
            background: #222;
            color: #00ff88;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }

        .error {
            color: red;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>JSON Form Example</h1>

    <!-- Form for user input -->
    <form method="post" action="">

        <label>First Name:</label>
        <input type="text" name="firstName" required>

        <label>Last Name:</label>
        <input type="text" name="lastName" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>

        <label>City:</label>
        <input type="text" name="city" required>

        <label>State:</label>
        <input type="text" name="state" required>

        <label>Favorite Language:</label>
        <input type="text" name="language" required>

        <label>Hobby:</label>
        <input type="text" name="hobby" required>

        <input type="submit" value="Submit Form">

    </form>

<?php
/*
    ReedJSON.php
    This program accepts user form data,
    converts the information into JSON format,
    and displays the formatted JSON output.
*/

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Store form data into an associative array
    $formData = array(
        "First Name" => $_POST["firstName"],
        "Last Name" => $_POST["lastName"],
        "Email" => $_POST["email"],
        "Phone Number" => $_POST["phone"],
        "City" => $_POST["city"],
        "State" => $_POST["state"],
        "Favorite Language" => $_POST["language"],
        "Hobby" => $_POST["hobby"]
    );

    // Convert array into JSON format
    $jsonData = json_encode($formData, JSON_PRETTY_PRINT);

    // Check if encoding worked
    if ($jsonData != false) {

        echo "<h2>JSON Output</h2>";
        echo "<pre>$jsonData</pre>";

    } else {

        // Error message display
        echo "<p class='error'>Error: Unable to encode data into JSON format.</p>";
    }
}
?>

</div>

</body>
</html>