<?php

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "Meganmegan2009";
$dbname = "database_contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into the database
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO form_data (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) == TRUE) {
    echo '<script>alert("Message sent! Response will be sent through your email."); window.location.href = "index.html";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
