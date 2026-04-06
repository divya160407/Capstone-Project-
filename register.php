<?php
$conn = new mysqli("localhost", "root", "", "registration");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event'];

$sql = "INSERT INTO registrations (name, email, event)
        VALUES ('$name', '$email', '$event')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.html");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>