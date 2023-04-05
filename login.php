<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
//something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
}

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database 
        $query = "select * from users where user_name = '$user_name' limit 1";
        
        $result = mysqli_query($con,$query);
        if($result)
        {
             if($result && mysqli_num_rows($result) > 0)
             {

              $user_data = mysqli_fetch_assoc($result);
             
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: menu.php");
              die;

              // test if user type is A then go to Admin page

            }

        {
          echo "Wrong username or password!";   
        }
      } 
    
             }
        
            {
    }
  
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BurgerBite</title>
    <link rel="shortcut icon" type="image" href="logo.png">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- bootstrap link -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>SIGN UP</title>
  </head>
  <body>
  <div id="cantainer-background">
        <nav class="navbar navbar-expand-md" id="navbar-color">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php" id="logo-color"><i><img src="logo.png" alt=""></i>BurgerBite</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php">CONTACT US</a>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="aboutus.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                
              </li>
            </ul>
          </div>
       </div>
    </nav>
<div class="col-lg-6 m-auto">

<form method="post">
    
<br><br><div class="card">

<div class="card-header bg-primary">
<hl class="text-white text-center">LOG IN</h1>
</div><br>
<div id="form">
      <form name="form" action="login.php" method="POST">
        <label>Username: </label>
        <input type="text" id="user_name" name="user_name"></br><br>
        <label>Password:</label>
        <input type="text" id="password" name="password"></br></br>
        <input class="btn btn-info" type="submit" id="btn" value="Login" name="submit"/></br>
        <a href="signup.php">Click to Sign up</a><br>
        
      </form>
    </div>
