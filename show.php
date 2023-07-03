<?php
include "dbconn.php";

//Add Data
if (isset($_POST['add'])) {
  // retrieve form data
  $sector = $_POST["service_sector"];
  $title = $_POST["service_title"];
  $sub_head = $_POST['sub_head'];
  $market_price = $_POST["market_price"];
  $percentage_discount = $_POST["percent_discount"];
  $price = $_POST["service_price"];
  $desc = $_POST["service_desc"];
  $keywords = $_POST["service_keywords"];

  // handle image upload
  $image = $_FILES["service_image"]["tmp_name"];
  $image_data = file_get_contents($image);

  // prepare and execute the SQL INSERT statement
  $stmt = $conn->prepare("INSERT INTO service_list (service_sector, service_title, sub_head, market_price, percentage_discount, service_price, service_desc, service_image, service_keywords) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("issiiisss", $sector, $title, $sub_head, $market_price, $percentage_discount, $price, $desc, $image_data, $keywords);
  $stmt->execute();

  // check for errors
  if ($stmt->error) {
    die("Error adding service: " . $stmt->error);
  }

  // close the statement and database connection
  // $stmt->close();
  // mysqli_close($conn);

  echo "<script> alert('Service added successfully!" . $sub_head . "'); window.location.href='sde.php'; </script>";
}



// // prepare and execute the SQL SELECT statement
// $sql = "SELECT * FROM service_list";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

// // check for errors
// if (!$result) {
//   die("Error retrieving services: " . mysqli_error($conn));
// }

// // free the result set and close the database connection
// mysqli_free_result($result);

// //Service_sector table data retrive
// // prepare and execute the SQL SELECT statement
// $sql = "SELECT * FROM service_sector";
// $result = mysqli_query($conn, $sql);
// $row1 = mysqli_fetch_assoc($result);

// // check for errors
// if (!$result1) {
//   die("Error retrieving services: " . mysqli_error($conn));
// }

// // free the result set and close the database connection
// mysqli_free_result($result);


// display the results in an HTML table
// echo "<table>";
// echo "<tr><th>ID</th><th>Category</th><th>Sector</th><th>Title</th><th>Price</th><th>Description</th><th>Image</th><th>Keywords</th></tr>";
// while ($row = mysqli_fetch_assoc($result)) {
// 	echo "<tr>";
// 	echo "<td>" . $row["service_id"] . "</td>";
// 	echo "<td>" . $row["service_sector"] . "</td>";
// 	echo "<td>" . $row["service_title"] . "</td>";
// 	echo "<td>" . $row["service_price"] . "</td>";
// 	echo "<td>" . $row["service_desc"] . "</td>";
// 	echo '<td><img src="data:image/jpeg;base64,' . base64_encode($row['service_image']) . '"/></td>';
// 	echo "<td>" . $row["service_keywords"] . "</td>";
// 	echo "</tr>";
// }
// echo "</table>";

// free the result set and close the database connection
// mysqli_free_result($result);
// mysqli_close($conn);

// update_service.php
if (isset($_POST['update'])) {
  $service_id = $_POST['service_id'];
  $service_title = $_POST['service_title'];
  $market_price = $_POST["market_price"];
  $percentage_discount = $_POST["percent_discount"];
  $service_price = $_POST['service_price'];
  $service_desc = $_POST['service_desc'];
  $service_keywords = $_POST['service_keywords'];

  // echo "<script> alert('". $_POST['service_desc'] ."'); window.location.href='sde.php';</script>";
  // echo "<script> alert('". $service_desc ."'); window.location.href='sde.php';</script>";
  // handle image upload
  $image = $_FILES["service_image"]["tmp_name"];
  $image_data = file_get_contents($image);

  // connect to the database
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // update the service
  $sql = "UPDATE service_list SET service_title=?, market_price=?, percentage_discount=?, service_price=?, service_desc=?, service_image=?, service_keywords=? WHERE service_id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, 'siiissss', $service_title, $market_price, $percentage_discount, $service_price, $service_desc, $image_data, $service_keywords, $service_id);
  mysqli_stmt_execute($stmt);

  // redirect to the service list page
  echo "<script> alert('Update Successful'); window.location.href='sde.php';</script>";
  // header("Location: sde.php");
  exit();
}


// delete_service.php
if (isset($_POST['delete'])) {
  $service_id = $_POST['service_id'];

  // connect to the database
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // delete the service
  $sql = "DELETE FROM service_list WHERE service_id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, 'i', $service_id);
  mysqli_stmt_execute($stmt);

  // redirect to the service list page
  echo "<script> alert('Deletion Successful'); window.location.href='sde.php';</script>";

  exit();
}

// Entering order_service table data start
// retrieve form data form service-select-page.php
if (isset($_POST['book_now'])) {
if (isset($_POST['book_now'])) {
  // if (isset($_POST['user_email'])) {
    // $user_email = $_POST['user_email'];
    $service_id = $_POST['book_now'];
    $qty = $_POST['qty'];
    $amt = $_POST['price'];
    $work_status = $_POST['work_status'];

    // prepare and execute the SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO order_services ( service_id, qty, amt, work_status) VALUES ( ?, ?, ?, ?)");
    $stmt->bind_param("iiis", $service_id, $qty, $amt, $work_status);
    $stmt->execute();

    // check for errors
    if ($stmt->error) {
      die("Error adding order: " . $stmt->error);
    }

    echo "<script>window.location.href='service-select-page.php';</script>";
  }
  else {
    echo "<script>alert('Please Login to proceed');</script>";
    echo "<script>window.location.href='login.php';</script>";
  }
}
// Entering order_service table data end

// delete_service.php
if (isset($_POST['remove'])) {
  $service_id = $_POST['remove'];

  // delete the service
  $sql = "DELETE FROM order_services WHERE service_id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, 'i', $service_id);
  mysqli_stmt_execute($stmt);

  // redirect to the service list page
  echo "<script> alert('Deletion Successful'); window.location.href='user-dashboard.php';</script>";

  exit();
}

?>