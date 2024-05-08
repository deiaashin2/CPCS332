<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@5000&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="index2.css"> -->
    <style>
         .button-group{
            display: block;
            overflow: hidden;
        }
        .button{
            display: block;
            
            margin-left: 350px;
            margin-top: 80px;
            width: 500px;
            height: 100px;
            border-radius: 30px;
            border:2px solid #000000;
            color: #000000;
            font-size: 23px;
            cursor: pointer;
            background: #ADD8E6;
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    }
    .button:hover{
        background: #43A6C6;
        color:#FFFFFF;
    }
    body {
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    background: #FFB6C1;
}
H1{
    text-align: center;
}
        </style>
</head>
<body>
<H1> PROFILE </H1>
        <form action="http://localhost/Ethan/accountinfo.php">
        <button class="button" type="submit">Account Info</button>
        </form>
        <form action="http://localhost/Ethan/eventmanager/event.php">
        <button class="button" type="submit">Host an Event</button>
        </form>
        <form action="http://localhost/Ethan/profile/profile.php">
        <button class="button" type ="submit">Join Event</button>
        </form>
        <div>
    
</html>
