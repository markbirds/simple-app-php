<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

  require(DB_PATH . '/connection.php');

  if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
    // delete user and session
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "DELETE FROM User WHERE id = " . $id;

    if(mysqli_query($conn, $query)){
      session_start();
      unset($_SESSION['user_id']);
      session_destroy();

      echo "User successfully deleted";
		}else{
			echo 'ERROR';
		}
  }

	mysqli_close($conn);
?>
