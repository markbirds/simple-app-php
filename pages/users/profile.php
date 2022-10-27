<?php

require($_SERVER['DOCUMENT_ROOT'] . '/simple-app-php/config/define.php');

require(DB_PATH . '/connection.php');
require(DB_PATH . '/operations.php');

$user = get_user_by_id($conn, $_GET['id']);
$editable = false;

include(TEMPLATES_PATH . '/profile.php')
?>
