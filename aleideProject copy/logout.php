<?php

//if user clicks log out we destroy sessions 

session_start();
session_destroy();
//uset the sessio and redirect user to login page
unset($_SESSION["user"]["username"]);
header('location:pile.php');

// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['username']);
//     header("location: login.php");
// }