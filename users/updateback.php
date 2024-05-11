<?php
session_start();
$email = $_SESSION['e_mail'];
$pwd = $_SESSION['password'];
$fname = $_SESSION['f_name'];
$lname = $_SESSION['l_name'];
$phonenumber = $_SESSION['phone_number'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = array_filter($_POST);
    $fname = $_POST['f_name'] ?? $fname;
    $lname = $_POST['l_name'] ?? $lname;
    $phonenumber = $_POST['phone_number'] ?? $phonenumber;
    $pwd = $POST['password'] ?? $pwd;

    include("../connection.php");

    $sql = "UPDATE user_ SET ";
    if (!empty($fname)) {
        $sql .= "f_name = '$fname', ";
        $_SESSION['f_name'] = $fname;

    }
    if (!empty($lname)) {
        $sql .= "l_name = '$lname', ";
        $_SESSION['l_name'] = $lname;

    }
    if (!empty($phonenumber)) {
        $sql .= "phone_number = '$phonenumber', ";
        $_SESSION['phone_number'] = $phonenumber;

    }
    if (!empty($pwd)) {
        $sql .= "password = '$pwd', ";
        $_SESSION['password'] = $pwd;
    } 

    // Remove the trailing comma and space
    $sql = rtrim($sql, ", ");

    // Add the WHERE clause
    $sql .= " WHERE e_mail = '$email';";

    echo $sql;
    if ($mysqli->query($sql) === TRUE) {
        echo $sql;
        header("location: https://localhost/Ethan/users/successupdate.php");
    } else {
        header("location: https://localhost/Ethan/users/failupdate.php");
    }
}
?>