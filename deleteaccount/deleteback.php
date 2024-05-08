<?php
session_start();
$email = $_SESSION['e_mail'];

include("../connection.php");

$sql = "delete from user_ WHERE e_mail = '$email';";
if($mysqli->query($sql) === True){
    header("location: https:///localhost/Ethan/deleteaccount/confirmdelete.php");
}
else{
    header("location: https:///localhost/Ethan/deleteaccount/faildelete.php");
}

?>