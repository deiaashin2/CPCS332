
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../users/signin.css">
    <title>Document</title>
</head>
<body>

        
    <br>
    <br>
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <form action="../presenter/presenterin_back.php" method="post">
            <label>
                <span>Email</span>
                <input type="text" name="e_mail"/>
            </label>
                <label>
                <span>Password</span>
                <input type="password" name="password" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit">Sign In</button>
</form>
         
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have a manager account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has a manager account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
        <h2>Create your Account</h2>
                <form action="../presenter/presenterup_back.php" method="post">
                <label>
                    <span>First Name</span>
                    <input type="text" name="f_name" placeholder="">
                </label>
                <label>
                    <span>Last Name</span>
                    <input type="text" name="l_name" placeholder="">
                </label>
                <label>
                    <span>Phone Number</span>
                    <input type="text" name="phone_number" placeholder="">
                </label>
                <label>
                    <span>Email</span>
                    <input type="text" name="e_mail" placeholder="">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                </label>
                <button type="submit" class="submit">Sign Up</button>
</form>
                
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>