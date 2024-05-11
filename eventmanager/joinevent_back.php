<?php
$userId = $_POST["userId"];
$eventId = $_POST["eventId"];

include("connection.php");

$query = "INSERT INTO attendee(ae_id, ae_mail) VALUES ('$eventId','$userId')";
echo $query;
$result = $mysqli->query($query);

?>