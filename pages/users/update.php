<?php

require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

require(DB_PATH . '/connection.php');
require(DB_PATH . '/operations.php');
require(UTILS_PATH . '/functions.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $user_id = $_SESSION['user_id'];
  // get form data
  $firstname = validate($conn, $_POST['firstname']);
  $lastname = validate($conn, $_POST['lastname']);
  $age = validate($conn, $_POST['age']);
  $email = validate($conn, $_POST['email']);

  $query = "UPDATE User SET
          firstname = '$firstname',
          lastname = '$lastname',
          age = '$age',
          email = '$email'
          WHERE id = {$user_id}";

  // execute database query
  if (mysqli_query($conn, $query)) {
    // return updated user info
    echo json_encode(get_user_by_id($conn, $user_id));
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

?>
