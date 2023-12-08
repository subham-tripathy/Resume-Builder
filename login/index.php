<?php

if (!(isset($_COOKIE["userID"]))){


if(isset($_POST['loginSubmit'])){

    include_once('../dbcon.php');
    $qry = "select * from user where userID = '" . $_POST['userID'] . "'";
    $result = mysqli_query($conn, $qry);
    $result = $result->fetch_all();
    if(count($result) == 1){
        if($result[0][1] == $_POST['userPassword']){
            setcookie("userID", $_POST['userID'], time() + (86400 * 30), "/"); // 86400 = 1 day
            echo '<script>
                alert("Login Success");
                window.location.replace("../ProfilePage");
            </script>';
        }
        else{
            echo '<script>alert("Enter Correct Password !!!");</script>';
        }
    }
    else{
        echo '<script>alert("Account does not exists !!!");</script>';
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            transition: all .4s;
            color: white;
        }
        body{
            font-family: sans-serif;
            background: url(../pics/bg.jpg);
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
            text-decoration: none;
            color: white;
        }
        form{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            background-color: cyan;
            padding: 5% 1%;
            border-radius: 15px;
            border: 5px solid white;
            box-shadow: 0 0 15px black;
            width: 30%;
            margin: auto;
            text-align: center;
        }
        form input{
            color: black;
            width: 70%;
            margin: 1% auto;
            font-size: 17px;
            padding: 1%;
            border-radius: 1px;
        }
        form input[type=submit]{
            width: max-content;
            color: black;
        }
    </style>

</head>
<body>

    <nav>
        <h1>THE BEST RESUME BUILDER</h1>
            <a href="../">Home</a>
    </nav>

    <form action="./" method="POST">
        <input type="text" name="userID" id="userID" placeholder="Enter Your ID" required> 
        <input type="password" name="userPassword" id="userPassword" placeholder="Enter Password" required>
        <a href="../signup" style="color: black; text-decoration: none; font-weight: bolder;">Create an Account</a>
        <input type="submit" name="loginSubmit" value="Login">
    </form>
</body>
</html>




<?php

}

else{
    header('location: ../ProfilePage');
}
    
?>