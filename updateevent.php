<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <!-- Add your CSS stylesheets or other meta tags here -->
    <link rel="stylesheet" href="bigevents.css">
</head>

<body>
    <?php
    session_start();
    $email = $_SESSION['e_mail'];
    
    include ("connection.php");

    $query = "SELECT e_id, e_name, description, max_capacity, address, e_type, s_date_time, e_date_time FROM event_ WHERE e_creator='$email' AND canceled = '1';";
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
    <h1>Edit Events</h1>


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
                echo '<td> <button data-id="' . $r['e_id'] . '" data-userid="' . $_SESSION['e_mail'] . '">Delete!</button> </td>';
                echo '</tr>';
            }
            ?>

    </table>

    <!-- Add your JavaScript scripts or other content here -->
    <p id="demo"></p>
    <script>
        const elements = document.querySelectorAll("button");
        elements.forEach((element) => {
            element.addEventListener("click", myFunction);
        })

        function myFunction(event) {
            console.log('event', event.currentTarget.dataset.id);
            document.getElementById("demo").innerHTML = "";

            /*** POST to PHP file that adds attendee to event ***/
            const eventId = event.currentTarget.dataset.id;
            const userId = event.currentTarget.dataset.userid;

            var formData = new FormData();
            formData.append('userId', userId);
            formData.append('eventId', eventId);

            fetch("deleteevent.php", {
                method: 'POST',
                body: formData
            }).then(res => {
                console.log("Request complete! response:", res.text());
                //window.location.replace("http://localhost/Ethan/u_confirmdelete.php");
            });
        }
    </script>

    <?php
    // More PHP code if needed
    ?>

</body>

</html>