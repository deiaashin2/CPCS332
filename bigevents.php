<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Events</title>
    <!-- Add your CSS stylesheets or other meta tags here -->
</head>

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $query = "SELECT e_name, description, max_capacity, address, e_type, s_date_time, e_date_time, num_rows FROM event_ e JOIN ( SELECT ae_id, COUNT(*) AS num_rows FROM attendee GROUP BY ae_id HAVING num_rows > 100) a ON e.e_id = a.ae_id WHERE 1;";

    echo "<b> <center>Database Output</center> </b> <br> <br>";

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_assoc()) {
            $field1name = $row["e_name"];
            $field2name = $row["description"];
            $field3name = $row["max_capacity"];
            $field4name = $row["address"];
            $field5name = $row["e_type"];

            echo '<b>' . $field1name . $field2name . '</b><br />';
            echo $field5name . '<br />';
            echo $field5name . '<br />';
            echo $field5name;
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Hello, World!</h1>
    <p>This is a basic PHP boilerplate.</p>

    <!-- Add your JavaScript scripts or other content here -->

    <?php
    // More PHP code if needed
    ?>

</body>

</html>