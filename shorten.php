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

// Get the original URL from the form
$original_url = $_POST['url'];

// Generate a unique short code (you can customize this)
$short_code = substr(md5(uniqid()), 0, 6);

// Insert the original and shortened URLs into the database
$sql = "INSERT INTO url_shortener (original_url) VALUES ('$original_url')";
if ($conn->query($sql) === TRUE) {
    $short_url = "http://yourdomain.com/$short_code"; // Change to your domain
    echo "Shortened URL: <a href='$short_url'>$short_url</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
