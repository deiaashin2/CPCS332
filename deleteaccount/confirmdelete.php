<!DOCTYPE html>
<html lang="en">
<head>
    <script scr = "https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }
    body{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container{
        width: 35%;
        height: 50%;
        border-radius: 10px;
        box-shadow: 0px 0px 10px gray;
        text-align: center;
        z-index: 0;
        position: relative;
    }
    .top{
        height: 50%;
        width: 100%;
        background-color: #333;
        color: white;
        border-radius: 10px 10px 0px 0px;
    }
    .fa-regular{
        font-size: 10%;

    }
    h3{
        margin-top:0%;
    }
    p{
        margin-top: 10%;
        color: #333;
    }
    button{
        border: none;
        border-radius: 5px;
        padding: 10px 35px;
        color: white;
        background-color: #333;
        z-index: 1;
        position:relative; 
        margin-top: 10%;
    }
    button:hover{
        background-color: #222;
        cursor: pointer;
    }
    
    
    </style>
</head>
<body>
    <div class="container">
        <div class="top">
            <i class="fa-regular fa-circle-check"></i>
            <h3>SUCCESS</h3>
        </div>
        <div class="bottom">
            <p>Account successfully deleted.</p>
            <form action="http://localhost/Ethan/index.php">
                <button class="submit" type="submit">Continue</button>
                </form>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Eo_circle_green_checkmark.svg/2048px-Eo_circle_green_checkmark.svg.png" alt="Checkmark" width="20%" height="20%" style="transform: translate(0px, -300px);">
        </div>
        <label>
        

    
</body>
</html>