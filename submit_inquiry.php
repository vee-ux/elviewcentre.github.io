<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO inquiries (name, phone, message) VALUES ('$name', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Inquiry submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
