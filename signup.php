<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //save to database
        $user_id = random_num(20);
        $query = "insert into users(id,name,contact,address,user_name,password) values('$id','$name','$contact','$address','$user_name','$password')";
        
        mysqli_query($con,$query);

        header("Location: login.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
    
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
            <a class="navbar-brand" href="#" id="logo-color"><i><img src="logo.png" alt=""></i>BurgerBite</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">CONTACT US</a>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">ABOUT US</a>
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
<hl class="text-white text-center"> SIGN UP</h1>
</div><br>

      <form name="btn btn-info" action="signup.php" method="POST">
      <label>Name: </label>
        <input type="text" id="name" name="name">
      <label>Contact#: </label>
        <input type="text" id="contact" name="contact">
      <label>Address: </label>
        <input type="text" id="address" name="address">
      <label>Username: </label>
        <input type="text" id="user_name" name="user_name">
        <label>Password:</label>
        <input type="text" id="password" name="password"></br></br>
        <input class="btn btn-info" type="submit" id="btn" value="Signup" name="submit"/></br>
<a class="btn" type="submit" name="cancel" href="index.php">Cancel</a>
<a href="login.php">Click to Login</a><br>
</div>
    