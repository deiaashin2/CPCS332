<?php
session_start();
$email = $_SESSION['e_mail'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //get data from form post
    $ename = $_POST['e_name'] ?? '';
    $description = $_POST['description'] ?? '';
    $capacity = $_POST['max_capacity'] ?? '';
    $address = $_POST['address'] ?? '';
    $etype = $_POST['e_type'] ?? '';
    $sdatetime = $_POST['s_date_time'] ?? '';
    $edatetime = $_POST['e_date_time'] ?? '';
    include("../connection.php");


    
        $query = "insert into event_ (e_name, description, max_capacity,address, e_type, s_date_time, e_date_time, canceled, e_creator)
         values('$ename', '$description', '$capacity', '$address', '$etype', '$sdatetime', '$edatetime', '1', '$email')";
        $isInserted = $mysqli -> query($query);
        //check update
        if($isInserted) {
            //if success redirect to index
            header("Location: http://localhost/Ethan/eventmanager/successevent.php");
          } else {
            // UPDATE failed
            echo $mysqli->error();
            echo "error";
          }
}
?>