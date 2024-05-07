<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//get data from form post
// $e_name = $_POST['e_name'] ?? '';
// $e_name = $_POST['e_name'] ?? '';
// $description = $_POST['description'] ?? '';
// $max_capacity = $_POST['max_capacity'] ?? '';
// $address = $_POST['address'] ?? '';
// $e_type = $_POST['e_type'] ?? '';
// $s_date_time = $_POST['s_date_time'] ?? '';
// $e_date_time = $_POST['e_date_time'] ?? '';

$e_name = 'My Event';
$description = "Fun event";
$max_capacity = 100;
$address = "1234 Main St";
$e_type = "Fun";
$s_date_time = "2021-12-12 12:00:00";
$e_date_time = "2021-12-12 12:00:00";

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PWD", "123");
define("DB_NAME", "aem");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

session_start();
if (isset($_SESSION['e_mail'])) {
  echo "Your session is running " . $_SESSION['e_mail'] = $e_mail;
}

$query = "insert into event_(e_name, description, max_capacity, 
        address, e_type, s_date_time, e_date_time) 
        values('" . $e_name . "','" . $description . "','" . $max_capacity
  . "','" . $address . "','" . $e_type . "','" . $s_date_time . "','" . $e_date_time . "')";

// echo $query;
// echo "<br><br>";
// $isInserted = $mysqli->query($query);

if ($con->query($query) === TRUE) {
  $last_id = $mysqli->insert_id;
} else {
  echo "Error: " . $query . "<br>" . $mysqli->error;
}
echo $last_id;

$query .= "insert into attendee(ae_mail, ae_id) values('" . $e_mail . "','" . $last_id . "')";
if (mysqli_multi_query($con, $)) {
  do {
    // Store first result set
    if ($result = mysqli_store_result($con)) {
      while ($row = mysqli_fetch_row($result)) {
        printf("%s\n", $row[0]);
      }
      mysqli_free_result($result);
    }
    // if there are more result-sets, the print a divider
    if (mysqli_more_results($con)) {
      printf("-------------\n");
    }
     //Prepare next result set
  } while (mysqli_next_result($con));
}

echo "isInserted:";
echo $isInserted;
//check update
if ($isInserted) {
  //if success redirect to index
  // header("Location: http://localhost/CPCS332/accountpage.php");
} else {
  // UPDATE failed
  echo $mysqli->error();
  echo "error";
}
// } 
?>