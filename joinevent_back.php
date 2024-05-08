<?php
$userId = $_POST["userId"];
$eventId = $_POST["eventId"];

include("connection.php");
echo implode(',',$_POST);
$query = "INSERT INTO attendee(ae_id, ae_mail) VALUES ('$eventId,'$userId')";
$result = mysqli_query($conn, $query);
echo $result;
?>