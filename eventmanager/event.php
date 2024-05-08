<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eventdesign.css">
    <link rel="stylesheet" href="../goback.css">
    <title>Document</title>
</head>

<body>

    <br>
    <br>

    <div class="cont">
        <div class="form sign-in">
            <h2>Create Event</h2>
            <form action="eventback.php" method="post">
                <label>
                    <span>Event Name</span>
                    <input type="text" name="e_name" placeholder="">
                </label>
                <label>
                    <span>Description</span>
                    <textarea rows="4" cols="33" type="text" name="description" placeholder="">
                </textarea>
                </label>
                <label>
                    <span>Max Capacity</span>
                    <input type="text" name="max_capacity" placeholder="">
                </label>
                <label>
                    <span>Address</span>
                    <textarea rows="2" cols="33" type="text" name="address" placeholder="">
                </textarea>
                </label>
                <label>
                    <span>Event Type</span>
                    <input type="text" name="e_type" placeholder="">
                </label>
                <label>
                    <span>Event Start Date & Time</span>
                    <input type="text" name="e_type" placeholder="">
                </label>
                <label>
                    <span>Event Type</span>
                    <input type="text" name="e_type" placeholder="">
                </label>
                <button type="submit" class="submit">Create Event</button>
            </form>
        </div>
    </div>
    <form action="../profile/profile.php">
        <button class="goback" >Go back<button>
            </form>


    <script>
        document.querySelector('.img__btn').addEventListener('click', function () {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>

</html>