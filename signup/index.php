<?php

if (!(isset($_COOKIE["userID"]))){


    if(isset($_POST['signUpSubmit'])){

        

    include_once('../dbcon.php');

    $qry = "select * from user where userID = '" . $_POST['userID'] . "'";
    $result = mysqli_query($conn, $qry);
    $result = $result->fetch_all();
    if(count($result) == 0){
        if($_POST['userPassword'] == $_POST['userConfirmPassword']){
            $qry = "insert into user values('" . $_POST['userID'] . "','" . $_POST['userPassword'] . "','" . $_POST['userName'] . "')";
            $result = mysqli_query($conn, $qry);
            setcookie("userID", $_POST['userID'], time() + (86400 * 30), "/"); // 86400 = 1 day
            echo '<script>
                alert("Sign Up Success");
                window.location.replace("../ProfilePage");
            </script>';
        }
        else{
            echo '<script>alert("Password and Confirm Password should be same !!!");</script>';
        }
    }
    else{
        echo '<script>alert("User ID must be Unique !!!");</script>';
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
    <form action="./" method="post">
        <input type="text" name="userName" id="userName" placeholder="Enter Your Name" required>
        <input type="text" name="userID" id="userID" placeholder="Enter Your ID" required>
        <input type="password" name="userPassword" id="userPassword" placeholder="Enter Password" required>
        <input type="password" name="userConfirmPassword" id="userConfirmPassword" placeholder="Confirm Password" required>
        <a href="../login" m style="color: black; text-decoration: none; font-weight: bolder;">Have an Account?</a>
        <input type="submit" name="signUpSubmit" value="Sign Up">
    </form>
</body>
</html>


<?php

}

else{
    header('location: ../ProfilePage');
}
    
?>