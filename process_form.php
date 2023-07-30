<?php
// Connect to the database (replace these values with your actual database credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phpadminpanel';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the text input from the form
    $text = $_POST['text_input'];

    // Perform any necessary data sanitization/validation before updating the database
    // For example, you might want to use mysqli_real_escape_string() to escape special characters

    // Update the text in the database
    $sql = "UPDATE your_table_name SET text_column_name = '$text' WHERE id = 1"; // Assuming you have a unique identifier for the row, here I use 'id' as an example
    if (mysqli_query($conn, $sql)) {
        echo "Text updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
