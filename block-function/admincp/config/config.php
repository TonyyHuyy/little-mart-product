<?php
$mysqli = new mysqli("localhost","root","","littlemart");

// Check connection
if ($mysqli -> connect_errno) {
  echo "kết nối không thành công " . $mysqli -> connect_error;
  exit();
}
?>