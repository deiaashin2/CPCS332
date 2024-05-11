<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //get data from form post
    $fname = $_POST['f_name'] ?? '';
    $lname = $_POST['l_name'] ?? '';
    $phonenumber = $_POST['phone_number'] ?? '';
    $email = $_POST['e_mail'] ?? '';
    $pwd = $_POST['password'] ?? '';
    $isvalid = true;

    if(!isset($fname) || trim($fname) === ''){
        header("location: http://localhost/Ethan/users/fail.php");        
        $isvalid = false;
    }
    if(!isset($lname) || trim($lname) === ''){
        header("location: http://localhost/Ethan/users/fail.php");        
        $isvalid = false;
    }
    if(!isset($phonenumber) || strlen($phonenumber) != 10){
        header("location: http://localhost/Ethan/users/fail.php");
        $isvalid = false;
    }
    if(!isset($email) || trim($email) === ''){
        header("location: http://localhost/Ethan/users/fail.php");        
        $isvalid = false;
    }
    if(!isset($pwd) || trim($pwd) === ''){
        header("location: http://localhost/Ethan/users/fail.php");       
        $isvalid = false;
    } 
    
    //if valid, insert user
    if($isvalid){
        //configuration
        include("../connection.php");
        //checks to see if email is in use already
        $sql = "SELECT * FROM user_ WHERE e_mail = '$email'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // Email and password combination exists in the database
            header("location: http://localhost/Ethan/users/fail.php");
        } 
        //if not found in db then insert
        else {
            // insert info into the db
            $query = "insert into user_(f_name, l_name, phone_number, e_mail, password) values('" . $fname ."','" . $lname ."','" . $phonenumber ."','" . $email ."','" . $pwd ."')";

            echo $query;
            $isInserted = $mysqli -> query($query);
            //check update
            if($isInserted) {
                //if success redirect to index
                
                header("location: http://localhost/Ethan/users/success.php");
          } else {
                // UPDATE failed
                echo $mysqli->error();
                echo "error";
        }
    }
}
}
?>