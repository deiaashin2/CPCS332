<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sponsor.css">
    <link rel="stylesheet" href="../goback.css">
    <title>Document</title>
</head>

<body>

    <br>
    <br>

    <div class="cont">
        <div class="form sign-in">
            <h2>Presenter Speaker</h2>
            <form action="presenterinsertback.php" method="post">
                <label>
                    <span>Full Name</span>
                    <input type="text" name="p_name" placeholder="">
                </label>
                <label>
                    <span>Event ID</span>
                    <input type="text" name="e_id" placeholder="">
                </label>
                <button type="submit" class="submit">Become a Presenter</button>
            </form>
        </div>
    </div>
    <form action="../presenterhome.html">
        <button class="goback" >Go back<button>
            </form>


    <script>
        document.querySelector('.img__btn').addEventListener('click', function () {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>

</html>