<?php
/*
    Name: Reed B
    File: ReedResponse.php
    Purpose: Validate form input and display formatted results
*/

function cleanInput($data) {
    return htmlspecialchars(trim($data));
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = cleanInput($_POST['firstName'] ?? '');
    $lastName  = cleanInput($_POST['lastName'] ?? '');
    $age       = cleanInput($_POST['age'] ?? '');
    $email     = cleanInput($_POST['email'] ?? '');
    $gpa       = cleanInput($_POST['gpa'] ?? '');
    $enrolled  = cleanInput($_POST['enrolled'] ?? '');
    $gradDate  = cleanInput($_POST['gradDate'] ?? '');

    // Validation (all fields required)
    if (
        empty($firstName) || empty($lastName) || empty($age) ||
        empty($email) || empty($gpa) || empty($enrolled) || empty($gradDate)
    ) {
        echo "<h2>Error: All fields are required.</h2>";
        exit;
    }

    // Additional basic checks
    if (!is_numeric($age) || !is_numeric($gpa)) {
        echo "<h2>Error: Age and GPA must be numeric values.</h2>";
        exit;
    }

    // Output formatted results
    echo "<h2>Form Submission Successful</h2>";
    echo "<hr>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>GPA:</strong> $gpa</p>";
    echo "<p><strong>Enrolled:</strong> $enrolled</p>";
    echo "<p><strong>Graduation Date:</strong> $gradDate</p>";

} else {
    echo "<h2>Error: Invalid request method.</h2>";
}
?>