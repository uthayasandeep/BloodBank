<?php
$mysqli = new mysqli("localhost","id13871463_bloodbank","POUbbK|6#W*Ku8[z","id13871463_blood");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>