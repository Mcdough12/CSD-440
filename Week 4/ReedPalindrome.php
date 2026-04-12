<?php
/*
    Name: Reed B.
    Date: 04/12/2026
    Assignment: Palindrome Checker (PHP)

    Purpose: This program checks whether a given string is a palindrome
    by comparing the original string to its reversed version.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .palindrome {
            color: green;
            font-weight: bold;
        }
        .not-palindrome {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Palindrome Test Results</h2>

<?php
// Function to check if a string is a palindrome
function testPalindrome($string) {
    // Remove spaces and convert to lowercase for accurate comparison
    $cleanString = strtolower(str_replace(' ', '', $string));
    $reversed = strrev($cleanString);

    return [
        "original" => $string,
        "reversed" => $reversed,
        "isPalindrome" => ($cleanString === $reversed)
    ];
}

// Array of 6 test cases (3 palindrome, 3 not palindrome)
$tests = [
    "racecar",
    "madam",
    "level",
    "hello",
    "openai",
    "php code"
];

// Loop through each test case
foreach ($tests as $test) {
    $result = testPalindrome($test);

    echo "<div class='result'>";
    echo "<p><strong>Original:</strong> " . $result['original'] . "</p>";
    echo "<p><strong>Reversed:</strong> " . $result['reversed'] . "</p>";

    if ($result['isPalindrome']) {
        echo "<p class='palindrome'>Result: This IS a palindrome.</p>";
    } else {
        echo "<p class='not-palindrome'>Result: This is NOT a palindrome.</p>";
    }

    echo "</div>";
}
?>

</body>
</html>