<?php
session_start();
$email = $_SESSION['e_mail'];

include("../connection.php");
$found = "SELECT * FROM event_ WHERE e_creator = '$email';";
echo $found;
        $result = $mysqli->query($found);

    if ($result->num_rows > 0) {
        $cancel = "UPDATE event_ SET canceled = '0' WHERE e_creator = '$email';";
        $mysqli->query($cancel);
    } 
$sql = "delete from user_ WHERE e_mail = '$email';";
echo $sql;
if($mysqli->query($sql) === True){
    header("location: https:///localhost/Ethan/deleteaccount/confirmdelete.php");
}
else{
    header("location: https:///localhost/Ethan/deleteaccount/faildelete.php");
}

?>