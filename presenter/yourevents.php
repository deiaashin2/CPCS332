<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Events</title>
    <!-- Add your CSS stylesheets or other meta tags here -->
    <link rel="stylesheet" href="../eventmanager/bigevents.css">
    <link rel="stylesheet" href="../delete.css">
</head>

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $query = "SELECT e_name, description, max_capacity, address, e_type, s_date_time, e_date_time, num_rows FROM event_ e 
    JOIN ( SELECT pe_id, COUNT(*) AS num_rows FROM presenter GROUP BY pe_id) a ON e.e_id = a.pe_id WHERE 1;";

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
    <h1>Events Presenting</h1>
    <form action="../presenterhome.html">
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

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $query = "SELECT e_name, description, max_capacity, address, e_type, s_date_time, e_date_time, num_rows FROM event_ e 
    JOIN ( SELECT se_id, COUNT(*) AS num_rows FROM sponsor GROUP BY se_id) a ON e.e_id = a.se_id WHERE 1;";

    if ($result = $mysqli->query($query)) {

        /* Collects headers into an array */
        while ($table = $result->fetch_field()) {
            $tables[] = $table->name;
        }

        /* Collects rows into an array */
        while ($linha = $result->fetch_assoc()) {

            $linhas[] = array(
                'e_name' => $linha["e_name"],
                'description' => $linha["description"],
                'max_capacity' => $linha["max_capacity"],
                'address' => $linha["address"],
                'e_type' => $linha["e_type"],
                's_date_time' => $linha["s_date_time"],
                'e_date_time' => $linha["e_date_time"],
                'num_rows' => $linha["num_rows"],
            );
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Events Sponsoring</h1>
    <h1></h1>
    </form>


    <table>
        <thead>
            <tr>
                <?php
                /* Loops through headers array and prints them as table headers */
                foreach ($tables as $h) {
                    echo '<th>' . $h . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            /* Loops through rows array and prints them as table rows */
            foreach ($linhas as $r) {
                echo '<tr>';
                foreach ($tables as $h) {
                    echo '<td>' . $r[$h] . '</td>';
                }
                echo '</tr>';
            }
            ?>
    </table>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PWD", "123");
    define("DB_NAME", "aem");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

    $query = "SELECT e_name, description, max_capacity, address, e_type, s_date_time, e_date_time, num_rows FROM event_ e 
    JOIN ( SELECT ke_id, COUNT(*) AS num_rows FROM key_note_speaker GROUP BY ke_id) a ON e.e_id = a.ke_id WHERE 1;";

    if ($result = $mysqli->query($query)) {

        /* Collects headers into an array */
        while ($title = $result->fetch_field()) {
            $titles[] = $title->name;
        }

        /* Collects rows into an array */
        while ($line = $result->fetch_assoc()) {

            $lines[] = array(
                'e_name' => $line["e_name"],
                'description' => $line["description"],
                'max_capacity' => $line["max_capacity"],
                'address' => $line["address"],
                'e_type' => $line["e_type"],
                's_date_time' => $line["s_date_time"],
                'e_date_time' => $line["e_date_time"],
                'num_rows' => $line["num_rows"],
            );
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Events Key Note Speaker</h1>
    <h1></h1>
    </form>


    <table>
        <thead>
            <tr>
                <?php
                /* Loops through headers array and prints them as table headers */
                foreach ($titles as $h) {
                    echo '<th>' . $h . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            /* Loops through rows array and prints them as table rows */
            foreach ($lines as $r) {
                echo '<tr>';
                foreach ($titles as $h) {
                    echo '<td>' . $r[$h] . '</td>';
                }
                echo '</tr>';
            }
            ?>
    </table>

</body>

</html>