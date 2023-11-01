<?php
// Connect to the database (change these settings)
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the short code from the URL
$short_code = $_GET['code'];

// Retrieve the original URL from the database
$sql = "SELECT original_url FROM url_shortener WHERE id = '$short_code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $original_url = $row['original_url'];
    header("Location: $original_url");
} else {
    echo "Short URL not found.";
}

$conn->close();
?>
