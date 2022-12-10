<?php 

require_once("config.php");
$pdo = pdo_connect_mysql();

if(isset($_POST['login'])){

    //clean strings inputs again
    $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //retrieve all from users table where username is existing or mail from the tb
    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $pdo->prepare($sql);
    
    // bind parameter 
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    //execute params
    $stmt->execute($params);

    //fetch all from users
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if($user){
        // verify password
        if(password_verify($password, $user["password"])){
        //start Session
            session_start();
            $_SESSION["user"] = $user;
            // if sucess redirect user to home.php
            header("Location: home.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl.css">
    <title>Login </title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
</head>
<body class="">

  

        <form action="" method="POST">


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
  
              <h2 class="fw-bold mb-2 text-uppercase">ALEIDE PORTAL</h2>
              <p>Only admins is allowed to register </p>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-3">
                <label for="username" class="marg">Username or Email</label>

                <input class="form-control" type="text" name="username" placeholder="username" />

              </div>

              <div class="form-outline form-white mb-4">
              <label class="marg" for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />

              </div>



              <input type="submit" class="btn btn-success btn-block" name="login" value="Sign in" />



              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>