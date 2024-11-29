<?php
include 'db.php';
session_start(); // Start the session at the top of the page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to login page if not logged in
    header('Location:login_page.php');
    exit();
}

$result = $conn->query("SELECT * FROM inquiries");

echo "<h1>Inquiries</h1>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Phone</th><th>Message</th><th>Submitted At</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['message']}</td>
            <td>{$row['submitted_at']}</td>
        </tr>";
}

echo "</table>";
?>
