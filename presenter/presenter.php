<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <!-- Add your CSS stylesheets or other meta tags here -->
    <link rel="stylesheet" href="../bigevents.css">
</head>

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $query = "SELECT event_.e_id, event_.e_name, event_.description, event_.e_type, event_.e_date_time, presenter.p_name 
            FROM event_ JOIN presenter ON event_.e_id = presenter.pe_id;";
    if ($result = $mysqli->query($query)) {

        /* Collects headers into an array */
        while ($header = $result->fetch_field()) {
            $headers[] = $header->name;
        }

        /* Collects rows into an array */
        while ($row = $result->fetch_assoc()) {

            $rows[] = array(
                'e_id' => $row["e_id"],
                'e_name' => $row["e_name"],
                'description' => $row["description"],
                'address' => $row["address"],
                'e_type' => $row["e_type"],
                's_date_time' => $row["s_date_time"],
                'e_date_time' => $row["e_date_time"],
                'p_name' => $row["p_name"],

            );
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Presenters</h1>
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

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $sql = "SELECT event_.e_id, event_.e_name, event_.description, event_.e_type, event_.e_date_time, sponsor.company_name 
            FROM event_ JOIN sponsor ON event_.e_id = sponsor.se_id;";
    if ($fool = $mysqli->query($sql)) {

        /* Collects headers into an array */
        while ($header = $fool->fetch_field()) {
            $headers[] = $fool->name;
        }

        /* Collects rows into an array */
        while ($row = $fool->fetch_assoc()) {

            $rows[] = array(
                'e_id' => $row["e_id"],
                'e_name' => $row["e_name"],
                'description' => $row["description"],
                'address' => $row["address"],
                'e_type' => $row["e_type"],
                's_date_time' => $row["s_date_time"],
                'e_date_time' => $row["e_date_time"],
                'company_name' => $row["company_name"],

            );
        }

        /*freeresultset*/
        $fool->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Sponsors</h1>
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