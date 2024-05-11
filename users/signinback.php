<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $email = $_POST['e_mail'] ?? '';
    $pwd = $_POST['password'] ?? '';

    $_SESSION['e_mail'] = $email;
    $_SESSION['password'] = $pwd;

    include("../connection.php");
    
    }
// SQL query to check if the email and hashed password exist in the database
$fname_query = $mysqli->query("SELECT f_name FROM user_ WHERE e_mail = '$email'");
$fname_row = $fname_query->fetch_assoc();
$fname = $fname_row['f_name'];
$_SESSION['f_name'] = $fname;

$lname_query = $mysqli->query("SELECT l_name FROM user_ WHERE e_mail = '$email'");
$lname_row = $lname_query->fetch_assoc();
$lname = $lname_row['l_name'];
$_SESSION['l_name'] = $lname;

$phonenumber_query = $mysqli->query("SELECT phone_number FROM user_ WHERE e_mail = '$email'");
$phonenumber_row = $phonenumber_query->fetch_assoc();
$phonenumber = $phonenumber_row['phone_number'];
$_SESSION['phone_number'] = $phonenumber;

$sql = "SELECT * FROM user_ WHERE e_mail = '$email' AND password = '$pwd'";


// Execute the query
$result = $mysqli->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Email and password combination exists in the database
    echo "Login successful!";
    header("location: http://localhost/Ethan/home.html");
} else {
    // Email and password combination does not exist in the database
    echo "Invalid email or password.";
    header("location: http://localhost/Ethan/users/fail.php");
}

// Close database connection
$mysqli->close();

