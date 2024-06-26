<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../eventmanager/eventdesign.css">
    <link rel="stylesheet" href="../goback.css">
    <title>Update Event</title>
    <style>
        
        </style>
</head>
<body>

    <br>
    <br>
    <form action="updateevent.php">
<button class="goback">Go back</button>
</form>

    <div class="cont">
        <div class="form sign-in">
            <h2>Updade Event</h2>
            <form action="updateevent_back.php" method="post">
            <label>
                <span>Event ID</span>
                <input type="text" name="e_id"/>
            </label>  
            <label>
                <span>Event Name</span>
                <input type="text" name="e_name"/>
            </label>
            <label>
                <span>Description</span>
                <textarea rows="3" cols="33" type="text" name="description"></textarea>
                
                </label>
            <label>
                <span>Max Capacity</span>
                <input type="text" name="max_capacity" />
            </label>
            <label>
                <span>Address</span>
                <textarea rows="2" cols="33" type="text" name="description" ></textarea>
            
                </label>  
            <label>
                <span>Type</span>
                <select name="e_type" id="e_type">
                        <option value="volvo">Oral Presentation</option>
                        <option value="saab">Poster</option>
                        <option value="opel">Online</option>
                    </select>
            </label>
            <label>
                <span>Start Event Date & Time</span>
                <input type="text" name="s_date_time" />
            </label>
            <label>
                <span>End Event Date & Time</span>
                <input type="text" name="e_date_time" />
            </label>

                <button class="submit" button="submit">Update</button>     
            </div>
        </>
        </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = array_filter($_POST);
    $e_id = $_POST['e_id'] ?? $e_id;
    $e_name = $_POST['e_name'] ?? $e_name;
    $description = $_POST['description']?? $description;
    $max_capacity = $_POST['max_capacity']?? $max_capacity;
    $address = $_POST['address']?? $address;
    $e_type = $_POST['e_type']?? $e_type;
    $s_date_time = $_POST['s_date_time']?? $s_date_time;
    $e_date_time = $_POST['e_date_time']?? $e_date_time;
    

    include("../connection.php");

    $sql = "UPDATE event_ SET ";
    if (!empty($e_id)) {
        $sql .= "e_id = '$e_id', ";
        $_SESSION['e_id'] = $e_id;

    }
    if (!empty($e_name)) {
        $sql .= "e_name = '$e_name', ";
        $_SESSION['e_name'] = $e_name;

    }
    if (!empty($desscription)) {
        $sql .= "description = '$description', ";
        $_SESSION['description'] = $description;

    }
    if (!empty($max_capaity)) {
        $sql .= "max_capacity = '$max_capacity', ";
        $_SESSION['max_capacity'] = $max_capacity;

    }
    if (!empty($address)) {
        $sql .= "address = '$address', ";
        $_SESSION['password'] = $address;
    } 
    if (!empty($type)) {
        $sql .= "e_type = '$e_type', ";
        $_SESSION['e_type'] = $e_type;
    } 
    if (!empty($s_date_time)) {
        $sql .= "$s_date_time = '$s_date_time', ";
        $_SESSION['s_date_time'] = $s_date_time;
    }  
    if (!empty($e_date_time)) {
        $sql .= "e_date_time= '$e_date_time', ";
        $_SESSION['e_date_time'] = $e_date_time;
    } 

    // Remove the trailing comma and space
    $sql = rtrim($sql, ", ");

    // Add the WHERE clause
    $sql .= " WHERE e_id = '$e_id';";
    echo $sql;
    if ($mysqli->query($sql) === TRUE) {
        echo $sql;
        header("location: https://localhost/Ethan/eventmanager/updateeventsuccess.php");
    } else {
        header("location: https://localhost/Ethan/eventmanager/updateeventfail.php");
    }
}
?>