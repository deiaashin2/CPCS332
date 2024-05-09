<?php
session_start();
$userId = $_POST["userId"];
$eventId = $_POST["eventId"];


include("../connection.php");

$found = "UPDATE event_ SET canceled = '0' WHERE e_id = '$eventId';";
echo $found;
$result = $mysqli->query($found);

?>


