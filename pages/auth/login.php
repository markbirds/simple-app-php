<?php

require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

require(DB_PATH . '/connection.php');
require(UTILS_PATH . '/functions.php');

session_start();

// if user id in session, redirect to root page
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"]) {
  header('Location: ' . ROOT_URL);
}

$error = "";

if (isset($_POST['submit'])) {
  // get email and password
  $email = validate($conn, $_POST['email']);
  $password = validate($conn, $_POST['password']);

  // get user from database
  $query = "SELECT * FROM User WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  // if found
  $num_rows = mysqli_num_rows($result);
  if ($num_rows) {
    // fetches a result row as an associative array
    $user = mysqli_fetch_assoc($result);

    // Free memory and close connection
    mysqli_free_result($result);
    mysqli_close($conn);

    // verify password, if true redirect to root page
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user["id"];
      header('Location: ' . ROOT_URL);
    }
  }
  $error = "User not found";
}

// render login.php from templates dir
include(TEMPLATES_PATH . '/login.php')
?>

