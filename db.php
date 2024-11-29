<?php
$host = 'localhost';
$db = 'school_website';
$user = 'root'; // Your MySQL username
$pass = ''; // Your MySQL password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
