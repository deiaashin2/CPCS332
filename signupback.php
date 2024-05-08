<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //get data from form post
    $f_name = $_POST['f_name'] ?? '';
    $l_name = $_POST['l_name'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $e_mail = $_POST['e_mail'] ?? '';
    $password = $_POST['password'] ?? '';
    $isvalid = true;

    if(!isset($f_name) || trim($f_name) === ''){
        echo "f_name cannot be empty<br>";        
        $isvalid = false;
    }
    if(!isset($l_name) || trim($l_name) === ''){
        echo "l_name cannot be empty<br>";        
        $isvalid = false;
    }
    if(!isset($phone_number) || strlen($phone_number) != 10){
        echo "invalid phone_number <br>";
        $isvalid = false;
    }
    if(!isset($e_mail) || trim($e_mail) === ''){
        echo "e_mail cannot be empty<br>";        
        $isvalid = false;
    }
    if(!isset($password) || trim($password) === ''){
        echo "pwd cannot be empty<br>";        
        $isvalid = false;
    }

    
    //if valid, insert user
    if($isvalid){
        //configuration
        define("DB_SERVER", "localhost");
        define("DB_USER", "root");
        define("DB_PWD", "123");
        define("DB_NAME", "aem");

        $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);
        if($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }
        //checks to see if email is in use already
        $sql = "SELECT * FROM user_ WHERE e_mail = '$e_mail'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // Email and password combination exists in the database
            header("location: http://localhost/CPCS332/");
        } 
        //if not found in db then insert
        else {
            // insert info into the db
            $query = "insert into user_(f_name, l_name, phone_number, e_mail, password) 
            values('" . $f_name ."','" . $l_name ."','" . $phone_number ."','" . $e_mail ."','" . $password ."')";

            echo $query;
            $isInserted = $mysqli -> query($query);
            //check update
            if($isInserted) {
                //if success redirect to index
                header("location: http://localhost/CPCS332/index.php");
          } else {
                // UPDATE failed
                echo $mysqli->error();
                echo "error";
        }
    }
}
}
?>

