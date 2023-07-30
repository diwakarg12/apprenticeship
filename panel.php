<?php

session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: panel.php');
    exit;
}

// Connect to the database (replace these values with your actual database credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phpadminpanel';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission to update website content
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    // Save the new content to the database
    $sql = "UPDATE website_content SET content = '$content' WHERE id = 1";
    mysqli_query($conn, $sql);
}

// Fetch the content from the database
$sql = "SELECT hero_content FROM aprenticeship_db WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        <!-- /.row -->
        </div><!-- /.container-fluid -->
</div>
</div>
    </section>

</div>

<?php
?>