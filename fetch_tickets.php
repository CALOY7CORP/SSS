<?php
$conn = mysqli_connect("localhost", "root", "", "helpdesk");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tickets WHERE status='Open'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='ticket'>";
        echo "<h3>{$row['title']}</h3>";
        echo "<p>{$row['description']}</p>";
        echo "<p><strong>Status:</strong> {$row['status']}</p>";
        echo "<p><strong>Created At:</strong> {$row['created_at']}</p>";
        echo "</div>";
    }
} else {
    echo "No open tickets.";
}

mysqli_close($conn);
?>