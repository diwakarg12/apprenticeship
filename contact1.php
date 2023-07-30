<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link</title>
    <style>
h1 {
  /* text-align: center; */
  margin-left:0;
  margin-bottom: 20px;
}

form {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  width: 300px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #0056b3;
}
    </style>
</head>
<body>
<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Link Change</h1> -->
          </div>
        <h1>Submit Contact1 to Database</h1>
        <form action="contact1.php" method="post">
        <label for="text_input1">Enter Username:</label>
        <input type="text" id="text_input1" name="text_input1" required>
        <br>
        <label for="text_input2">Enter Designation:</label>
        <input type="text" id="text_input2" name="text_input2" required>
        <br>
        <label for="text_input3">Enter about:</label>
        <input type="text" id="text_input3" name="text_input3" required>
        <br>
        <button type="submit">Submit</button>
        </form>
        </div>
</div>
</div>
    </section>

</div>

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
    $text1 = $_POST['text_input1'];
    $text2 = $_POST['text_input2'];
    $text3 = $_POST['text_input3'];

    // Perform any necessary data sanitization/validation before updating the database
    // For example, you might want to use mysqli_real_escape_string() to escape special characters

    // Update the text in the database
    $sql1 = "UPDATE aprenticeship_db2 SET first0 = '$text1' WHERE id = 1"; // Assuming you have a unique identifier for the row, here I use 'id' as an example
    $sql2 = "UPDATE aprenticeship_db2 SET second0 = '$text2' WHERE id = 1"; // Assuming you have a unique identifier for the row, here I use 'id' as an example
    $sql3 = "UPDATE aprenticeship_db2 SET third0 = '$text3' WHERE id = 1"; // Assuming you have a unique identifier for the row, here I use 'id' as an example
    if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
        echo "Text updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>





<?php
include('includes/footer.php');
?>
</body>
</html>