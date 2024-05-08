<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //get data from form post
    $e_name = $_POST['e_name'] ?? '';
    $description = $_POST['description'] ?? '';
    $max_capacity = $_POST['max_capacity'] ?? '';
    $address = $_POST['address'] ?? '';
    $e_type = $_POST['e_type'] ?? '';
    $s_date_time = $_POST['s_date_time'] ?? '';
    $e_date_time = $_POST['e_date_time'] ?? '';

    include("../connection.php");
        $query = "insert into event_(e_name, description, max_capacity, 
                  address, e_type, s_date_tiem, e_date_time) 
                  values('" . $e_name ."','" . $description ."','" . $max_capacity
                   ."','" . $address ."','" . $e_type."','" . $s_date_time ."','" . $e_date_time ."')" ;
    
        echo $query;
        $isInserted = $mysqli -> query($query);
        //check update
        if($isInserted) {
            //if success redirect to index
            header("Location: http://localhost/Ethan/eventmanager/event.php");
          } else {
            // UPDATE failed
            echo $mysqli->error();
            echo "error";
          }
}
?>