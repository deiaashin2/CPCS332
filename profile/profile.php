<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@5000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="logout.css">
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="index2.css"> -->
    <style>
         .button-group{
            display: block;
            overflow: hidden;
        }
        .button{
            display: block;
            
            margin-left: 475px;
            margin-top: 80px;
            width: 500px;
            height: 100px;
            border-radius: 30px;
            border:2px solid #000000;
            color: #000000;
            font-size: 23px;
            cursor: pointer;
            background: #FAF9F6
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    }
    .button:hover{
        background: #43A6C6;
        color:#FFFFFF;
    }
    body {
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    background: #afdffd;
}
H1{
    text-align: center;
}
        </style>
</head>
<body>
<H1> PROFILE </H1>
        <form action="http://localhost/Ethan/index.php">
        <button class="logout" >log out</button>
        </form>
        <form action="http://localhost/Ethan/accountinfo.php">
        <button class="button" type="submit">Account Info</button>
        </form>
        <form action="http://localhost/Ethan/eventmanager/event.php">
        <button class="button" type="submit">Host an Event</button>
        </form>
        <form action="http://localhost/Ethan/joinevent.php">
        <button class="button" type ="submit">Join Event</button>
        </form>
        <form action="http://localhost/Ethan/eventcreators.php">
        <button class="button" type ="submit">Event Hosts</button>
        </form>
        <form action="http://localhost/Ethan/bigevents.php">
        <button class="button" type ="submit">Big Events</button>
        </form>
        <form action="http://localhost/Ethan/canceledevent.php">
        <button class="button" type ="submit">Canceled Events</button>
        </form>

        <div>
    
</html>
