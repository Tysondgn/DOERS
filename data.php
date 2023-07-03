<?php
// Database Connection
include "dbconn.php";

// Data retrive table order_services-------------------------------------------------------------------------------
// execute SQL SELECT statement
$result = mysqli_query($conn, "SELECT * FROM order_services");

// check for errors
if (!$result) {
    die("Error retrieving orders: " . mysqli_error($conn));
}

// data stored inside table name
$order_service = mysqli_fetch_assoc($result);

// free the result set 
mysqli_free_result($result);
?>