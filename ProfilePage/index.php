<?php

if (isset($_COOKIE["userID"])){
include_once('../dbcon.php');

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            transition: all .4s;
            color: white;
        }
        body{
            font-family: sans-serif;
            background: url(../pics/abstract-3d-shapes-digital-art-wallpaper-preview.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        nav{
            padding: 0 10%;
            padding-right: 4%;
            height: 10vh;
            background-color: #3C3F42;
            display:flex;
            align-items: center;
            justify-content: space-between;
            font-size: 25px;
        }
        
        nav a{
            margin: 0 20px;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <h1>THE BEST RESUME BUILDER</h1>
        <span style="display: flex;">
            <a href="../">Home</a>
            <a href="../logout">Logout</a>
        </span>
    </nav>
    
    <div style="display: flex; align-items: center; justify-content: space-between; padding: 1% 10%;  margin: auto; margin-top: 1%; background-color: rgba(110, 103, 103, 0.5); width: 70%; border-radius: 20px; border: 3px solid white; box-shadow: 0 0 15px black;">
        <img src="./profile-icon-png-910.png" alt="profile-icon">
        <?php
        $qry = 'select * from user where userID = "'.$_COOKIE['userID'].'"';
        $result = mysqli_query($conn, $qry);
        $result = $result->fetch_assoc();
        ?>
        <span>
            <h1><?php echo $result['name']?></h1>
            <h1><?php echo $result['userID']?></h1>
        </span>
    </div>


</body>
</html>





<?php
}
else{
    echo'
    <script>
        alert("Log In First");
        window.location.replace = ("../login");
    </script>';
}


?>