<?php

function get_user_by_id($conn, $id) {
  // get id from query string
  $id = mysqli_real_escape_string($conn, $id);

  // database query
  $query = "SELECT * FROM User WHERE id = " . $id;
  $result = mysqli_query($conn, $query);

  // fetches a result row as an associative array
  $user = mysqli_fetch_assoc($result);

  // Free memory and close connection
  mysqli_free_result($result);
  mysqli_close($conn);

  return $user;
}

?>

