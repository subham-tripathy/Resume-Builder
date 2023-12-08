<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Best Resume Builder</title>
</head>
<body>
    <img src="./pics/bg.jpg" alt="background-image" id="bgImage">
    <nav>
        <h1>THE BEST RESUME BUILDER</h1>
        <span style="display: flex;">
            <?php
            if (isset($_COOKIE["userID"])){
                echo'
                <a href="./ProfilePage" style="text-decoration: none;" id="profie-page" class="nav-links">My Profile</a>
                    ';
                }
                else{
                    echo'
                    <a href="./login" style="text-decoration: none;" id="login" class="nav-links">Log In</a>
                    ';
                }
            ?>
        </span>
    </nav>
    <section id="welcomeSec">
        <div id="welcome">
            <h1>Welcome to the best free Resume Builder: <span style="font-weight: normal;">Create your resume now</span></h1>
            <p>This online tool is free to use and completely user friendly</p>
            <a href="./templates/template-1/">CREATE YOUR RESUME NOW</a>
        </div>
        <img src="./pics/welcome-sample-img.png" alt="bg-img">
    </section>
</body>
</html>