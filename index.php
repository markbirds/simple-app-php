<?php

require('./config/define.php');

require(DB_PATH . '/connection.php');
require(DB_PATH . '/operations.php');

session_start();

// redirect to login page if there is no user id in session
if (!$_SESSION["user_id"]) {
  header('Location: ' . PAGES_URL . '/auth/login.php');
}

$user = get_user_by_id($conn, $_SESSION["user_id"]);
$editable = true;

include(TEMPLATES_PATH . '/profile.php')
?>
