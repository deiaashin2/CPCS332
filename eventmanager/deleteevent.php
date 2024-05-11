<?php
session_start();
$userId = $_POST["userId"];
$eventId = $_POST["eventId"];


include("connection.php");

$cancel = "UPDATE event_ SET canceled = '0' WHERE e_id = '$eventId';";
echo $cancel;
$mysqli->query($cancel);

?>


