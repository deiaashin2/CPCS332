<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//get data from form post
$e_name = $_POST['e_name'] ?? '';
$description = $_POST['description'] ?? '';
$max_capacity = $_POST['max_capacity'] ?? '';
$address = $_POST['address'] ?? '';
$e_type = $_POST['e_type'] ?? '';
$s_date_time = $_POST['s_date_time'] ?? '';
$e_date_time = $_POST['e_date_time'] ?? '';

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PWD", "123");
define("DB_NAME", "aem");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}


$query = "INSERT INTO event_(e_name, description, max_capacity, address, e_type, s_date_time, e_date_time)
VALUES ('$e_name', '$description', '$max_capacity', '$address', '$e_type', '$s_date_time', '$e_date_time');";

$isInserted = $mysqli->query($query);
//check update
if ($isInserted) {
  header("location: http://localhost/Ethan/eventmanager/successevent.php");
} else {
  // UPDATE failed
  header("location: http://localhost/Ethan/eventmanager/successevent.php");
}
} 
?>