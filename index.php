<?php
session_start();

require('./config/define.php');

// redirect to login page if there is no user id in session
if (!isset($_SESSION["user_id"])) {
  header('Location: ' . PAGES_URL . '/auth/login.php');
} else {

  require(DB_PATH . '/connection.php');
  require(DB_PATH . '/operations.php');

  $user = get_user_by_id($conn, $_SESSION["user_id"]);
  $editable = true;

  include(TEMPLATES_PATH . '/profile.php');
}
?>
