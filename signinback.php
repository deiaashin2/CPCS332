<?php
ob_start();
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $e_mail = $_POST['e_mail'] ?? '';
    $password = $_POST['password'] ?? '';

    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
}
// SQL query to check if the email and hashed password exist in the database
$sql = "SELECT * FROM user_ WHERE e_mail = '$e_mail' AND password = '$password'";

// Execute the query
$result = $mysqli->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Email and password combination exists in the database
    echo "Login successful!";
    header("location: http://localhost/CPCS332/accountpage.php");
} else {
    // Email and password combination does not exist in the database
    echo "Invalid email or password.";
    header("location: http://localhost/CPCS332/");
}

?>