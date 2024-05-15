<?php
session_start();
$email = $_SESSION['e_mail'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //get data from form post
    $p_name = $_POST['p_name'] ?? '';
    $e_id = $_POST['e_id'] ?? '';
    include("../connection.php");


    
        $query = "insert into presenter (p_name, pe_id, pe_email)
         values('$p_name', '$e_id', '$email')";
         echo $query;
        $isInserted = $mysqli -> query($query);
        //check update
        if($isInserted) {
            //if success redirect to index
            header("Location: http://localhost/Ethan/presenter/presenterjoined.php");
          } else {
            // UPDATE failed
            echo $mysqli->error();
            echo "error";
          }
}
?>