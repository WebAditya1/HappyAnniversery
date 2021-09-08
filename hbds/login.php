<?php

session_start();
if(isset($_POST["pwd"])) {
    $ent_pwd = $_POST["pwd"];
    if($ent_pwd == "StayHappy") {
        $_SESSION["valid"] = true;
        header("location: index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color: #efefef;
        }
        .main {
            width: 100%;
            height: 100vh;
            padding: 120px 36px 36px 36px;
            background-image: url("assets/images/password.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        input[type="submit"] {
            margin-top: 16px;
            color: #fff;
        }
        @media screen and (min-width: 480px) {
            .main {
                width: 420px;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <div class="main">
        <form method="post">
            <input type="password" name="pwd" class="form-control" placeholder="Enter password" required>
            <input type="submit" value="Login" class="form-control bg-success">
        </form>
    </div>
</body>
</html>
