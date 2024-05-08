<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PWD", "123");
define("DB_NAME", "aem");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);
if($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
?>
