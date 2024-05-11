<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Events</title>
    <!-- Add your CSS stylesheets or other meta tags here -->
    <link rel="stylesheet" href="bigevents.css">
</head>

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $query = "SELECT e_name, description, max_capacity, address, e_type, s_date_time, e_date_time, num_rows FROM event_ e 
    JOIN ( SELECT ae_id, COUNT(*) AS num_rows FROM attendee GROUP BY ae_id HAVING num_rows > 100) a ON e.e_id = a.ae_id WHERE 1;";

    if ($result = $mysqli->query($query)) {

        /* Collects headers into an array */
        while ($header = $result->fetch_field()) {
            $headers[] = $header->name;
        }

        /* Collects rows into an array */
        while ($row = $result->fetch_assoc()) {

            $rows[] = array(
                'e_name' => $row["e_name"],
                'description' => $row["description"],
                'max_capacity' => $row["max_capacity"],
                'address' => $row["address"],
                'e_type' => $row["e_type"],
                's_date_time' => $row["s_date_time"],
                'e_date_time' => $row["e_date_time"],
                'num_rows' => $row["num_rows"],
            );
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Big Events</h1>
    <p>This is a table of events with more than 100 attendees.</p>
    <form action="home.html">
    <button class="goback">Go back</button>
    </form>


    <table>
        <thead>
            <tr>
                <?php
                /* Loops through headers array and prints them as table headers */
                foreach ($headers as $h) {
                    echo '<th>' . $h . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            /* Loops through rows array and prints them as table rows */
            foreach ($rows as $r) {
                echo '<tr>';
                foreach ($headers as $h) {
                    echo '<td>' . $r[$h] . '</td>';
                }
                echo '</tr>';
            }
            ?>
    </table>

    <!-- Add your JavaScript scripts or other content here -->

    <?php
    // More PHP code if needed
    ?>

</body>

</html>