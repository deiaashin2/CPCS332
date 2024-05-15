<?php
$userId = $_POST["userId"];
$eventId = $_POST["eventId"];
echo $userId;
echo $eventId;
include("../connection.php");

$query = "UPDATE event_ SET canceled = '0' WHERE e_creator = '$userId' AND e_id = '$eventId'";
echo $query;
$result = $mysqli->query($query);


?>