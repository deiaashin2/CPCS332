<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canceled Events</title>
    <!-- Add your CSS stylesheets or other meta tags here -->
    <link rel="stylesheet" href="bigevents.css">
</head>

<body>
    <?php
    include("../connection.php");

    $query = "SELECT e_name, description, max_capacity, address, e_type, s_date_time, e_date_time FROM event_ WHERE canceled = '0'";

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
            );
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Canceled Events</h1>
    <p>This is a table of events canceled</p>
    <form action="../updateventpage.html">
    <button class="goback">Go back</button>
    <h1></h1>
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