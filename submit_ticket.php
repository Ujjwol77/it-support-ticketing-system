<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];

$sql = "INSERT INTO tickets (name, email, issue, status) VALUES ('$name', '$email', '$issue', 'Open')";

if ($conn->query($sql) === TRUE) {
    echo "Ticket submitted successfully! <a href='index.php'>Submit another</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>