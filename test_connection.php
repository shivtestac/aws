<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbname = $_POST['database'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully to the MySQL database: " . htmlspecialchars($dbname);
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
