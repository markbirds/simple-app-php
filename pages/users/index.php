<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

  require(DB_PATH . '/connection.php');

  // Performs a query against a database
  $query = "SELECT * FROM User";
	$result = mysqli_query($conn, $query);

  // Fetches all result rows
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free the memory associated with the result.
	mysqli_free_result($result);

  // Close database connection
	mysqli_close($conn);

  include(TEMPLATES_PATH . '/users.php')
?>


