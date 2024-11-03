<?php
$conn = mysqli_connect("localhost", "root", "", "helpdesk");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO tickets (title, description) VALUES ('$title', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "Ticket created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>