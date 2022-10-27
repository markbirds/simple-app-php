<?php

// clean and validate string inputs
function validate($conn, $input) {
  $data = trim($input);
  $data = mysqli_real_escape_string($conn, $data);
  $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
  return $data;
}

?>
