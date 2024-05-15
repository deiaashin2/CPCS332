<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Great Hosts</title>
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

    $query = "SELECT f_name, l_name, e_mail, phone_number FROM user_ u
    JOIN ( SELECT e_creator, COUNT(*) AS row_count From event_ GROUP BY e_creator HAVING row_count > 10) e
    ON u.e_mail = e.e_creator WHERE 1;"; 

    if ($result = $mysqli->query($query)) {

        /* Collects headers into an array */
        while ($header = $result->fetch_field()) {
            $headers[] = $header->name;
        }

        /* Collects rows into an array */
        while ($row = $result->fetch_assoc()) {

            $rows[] = array(
                'f_name' => $row["f_name"],
                'l_name' => $row["f_name"],
                'e_mail' => $row["e_mail"],
                'phone_number' => $row["phone_number"],
            );
        }

        /*freeresultset*/
        $result->free();
    }
    ?>

    <!-- Your HTML content -->
    <h1>Great Hosts</h1>
    <p>Host that created mora than 10 events.</p>
    <form action="../index.html">
    <button class="../goback">Go back</button>
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