<?php
include "dbconn.php";



// Register user---------------------------------------------------------------------------------------------------------------------
if (isset($_POST['signup'])) {
  // Retrieve form data
  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $mobile = $_POST['mobile'];

  // Validate password
//   if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%^&*()_\-+={}[\]\\|:;"\'<>,.?\/]).{8,}$/', $password)) {
//     echo "<script> alert('The password must contain at least one uppercase, one numeric value, and one special character.'); window.location.href='login.php';</script>";
//     exit();
//   }

  // Validate repassword
  if ($repassword != $password) {
    echo "<script> alert('The password mismatched re entered password.'); window.location.href='login.php';</script>";
    exit();
  }

  // Check if email already exists
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();

  if ($result) {
    echo "<script> alert('Email already exists.'); window.location.href='login.php'; </script>";
    exit();
  }

  // Insert user into database
  $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, mobile) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $fname, $lname, $email, $password, $mobile);
  $stmt->execute();

  echo "<script> alert('Registration successful.'); window.location.href='login.php'; </script>";
  exit();
}







// Login user------------------------------------------------------------------------------------------------------------------
if (isset($_POST['login'])) {
  // Retrieve form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Retrieve user from database
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();

  // Check if user exists
  if ($email != $result['email']) {
    echo "<script> alert('Invalid email.'); window.location.href='login.php'; </script>";
    exit();
  }

  // Verify password
  if ($password != $result['password']) {
    echo "<script> alert('Invalid password.'); window.location.href='login.php'; </script>";
    exit();
  }

  session_start();
  // Set session variables
  $_SESSION['user_id'] = $result['id'];
  $_SESSION['f_name'] = $result['first_name'];
  $_SESSION['user_email'] = $result['email'];
  $_SESSION['mobile_number'] = $result['mobile'];
  $_SESSION['user_address'] = $result['address'];

  echo "<script> alert('Login successful.') </script>";
  header("Location: user-dashboard.php");
  exit();
}

// Logout user
// if (isset($_GET['logout'])) {
//   session_unset();
//   session_destroy();
//   header("Location: index.php");
//   exit();
// }
// The Above Logout code is written in Logout.php

mysqli_close($conn);

?>