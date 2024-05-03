<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eventdesign.css">
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
                <input type="text" name="description" placeholder="">
            </label>
            <label>
                <span>Max Capacity</span>
                <input type="text" name="max_capacity" placeholder="">
            </label>
            <label>
                    <span>Address</span>
                    <input type="text" name="address" placeholder="">
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
                <button>Create</button>                    
                </form>
        </div>
    </div>


    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>

