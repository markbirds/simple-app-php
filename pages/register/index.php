<?php

require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

require(DB_PATH . '/connection.php');
require(UTILS_PATH . '/functions.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if (isset($_POST['submit'])) {
    // get form data from request
    $firstname = validate($conn, $_POST['firstname']);
    $lastname = validate($conn, $_POST['lastname']);
    $age = validate($conn, $_POST['age']);
    $email = validate($conn, $_POST['email']);
    $password = password_hash(validate($conn, $_POST['password']), PASSWORD_DEFAULT);

    // add form data to database
    $query = "INSERT INTO User (firstname,lastname,age,email,password)
            VALUES ('$firstname', '$lastname','$age','$email','$password')";

    if (mysqli_query($conn, $query)) {
      // redirect to login page
      header('Location: ' . PAGES_URL . '/auth/login.php');
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  }
}

// render register page
include(TEMPLATES_PATH . '/register.php')
?>
