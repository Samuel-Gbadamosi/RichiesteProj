<?php
//require config for this file
require_once("config.php");
$pdo = pdo_connect_mysql();

if(isset($_POST['register'])){

    //cleaning of strings in the validation form for users
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //  hash password so even the admin wont be able to see the users password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // insert into users tables query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $pdo->prepare($sql);

    // bind parameter to query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    $saved = $stmt->execute($params);


    //if success direct to the login page
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register </title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <p>Log in <a href="login.php">Login </a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Nama </label>
                <input class="form-control" type="text" name="name" placeholder="Name" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder=" Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Register" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img style="height: 50%;" class="img img-responsive" src="https://cdn.pixabay.com/photo/2018/07/30/11/34/block-chain-3572402__480.jpg" />
        </div>

    </div>
</div>

</body>
</html>