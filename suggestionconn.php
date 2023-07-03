<?php
include "dbconn.php";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $suggestion = mysqli_real_escape_string($conn, $_POST['suggestion']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);

    // Insert data into table
    $sql = "INSERT INTO suggestion (name, email, suggestion, service) VALUES ('$name', '$email', '$suggestion', '$service')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Thank you for taking the time to share your suggestion with us. 😊'); window.location.href='index.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);



?>
