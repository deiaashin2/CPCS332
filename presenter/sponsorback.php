<?php
session_start();
$email = $_SESSION['e_mail'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //get data from form post
    $company_name = $_POST['company_name'] ?? '';
    $e_id = $_POST['e_id'] ?? '';
    include("../connection.php");


    
        $query = "insert into sponsor (company_name, se_id, se_email)
         values('$company_name', '$e_id', '$email')";
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