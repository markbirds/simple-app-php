<?php
require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

// remove user id in session and redirect to login page
session_start();
unset($_SESSION['user_id']);
session_destroy();

header('Location: ' . PAGES_URL . '/auth/login.php');

?>
