<div class="container-fluid  navbar navbar-expand-lg navbar-dark bg-dark">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <nav class=" container-fluid navbar navbar-expand-lg navbar-dark bg-dark">
     
        <a style="padding-right: 10px;" class="navbar-brand" href="home.php">ALEIDE HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                
            </span>
        </button>

        <div class="ml-5 collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="ml-6 nav-item active">
                    <a class="nav-link" href="home.php">Home </a>
                </li>


                  

   

             
             


            </ul>
            <?php

//user could see their current time and mins :)
                    date_default_timezone_set('Europe/Amsterdam');
                     $currentime =   date("d-m-y h:i:sa");

            
       
          ?>

          
             <li class="nav-item ">

                <a class="nav-link" href=""><?php echo htmlspecialchars('Welcome Admin!'  . ' ' .  $_SESSION["user"]["username"] ); ?> <i class="fa fa-user"></i> </a>

            </li> 
           
                <a href="logout.php">
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Log out </a>
                </li>
                <li class=" ">
                    <a style="font-size:small; color:aqua;" class="nav"><?=$currentime?> </a>
                </li>



        </div>
    </nav>
</div>