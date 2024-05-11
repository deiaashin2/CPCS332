<?php 
    session_start();
    // Retrieve the email from the session variable
    $email = $_SESSION['e_mail'];
    $pwd = $_SESSION['password'];
    $fname = $_SESSION['f_name'];
    $lname = $_SESSION['l_name'];
    $phonenumber = $_SESSION['phone_number'];
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accountdesign.css">
    <link rel="stylesheet" href="goback.css">
    <link rel="stylesheet" href="deleteaccount/delete.css">
    <title>Document</title>
    <style>
        
        </style>
</head>
<body>

    <br>
    <br>
    <form action="home.html">
<button class="goback">Go back</button>
</form>


<form action="deleteaccount/deletion.php">
<button class="delete">Delete</button>
</form>
    <div class="cont">
        <div class="form sign-in">
            <h2>Account Info</h2>
            <form action="update/updateback.php" method="post">
            <label>
                <span>First Name</span>
                <input type="text" name="f_name" placeholder="<?php echo $fname; ?>"/>
            </label>
            <label>
                <span>Last Name</span>
                <input type="text" name="l_name" placeholder="<?php echo $lname; ?>"/>
                </label>
            <label>
                <span>Phone Number</span>
                <input type="text" name="phone_number" placeholder="<?php echo $phonenumber; ?>"/>
            </label>
            <label>
                <span>Email </span>
                </label>
                <label>
                <span style="color:black"><?php echo $email?></span>
            </label>
            <label>
                <span>Password</span>
                <input type="text" name="password"placeholder="<?php echo $pwd; ?>"/>
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
