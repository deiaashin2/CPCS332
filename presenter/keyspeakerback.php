<?php
session_start();
$email = $_SESSION['e_mail'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //get data from form post
    $k_name = $_POST['k_name'] ?? '';
    $e_id = $_POST['e_id'] ?? '';
    include("../connection.php");


    
        $query = "insert into key_note_speaker (k_name, ke_id, ke_email)
         values('$k_name', '$e_id', '$email')";
         echo $query;
        $isInserted = $mysqli -> query($query);
        //check update
        if($isInserted) {
            //if success redirect to index
            header("Location: http://localhost/Ethan/presenter/sponsorjoined.php");
          } else {
            // UPDATE failed
            echo $mysqli->error();
            echo "error";
          }
}
?>