<?php

require_once 'database_connection/db.php'; // copy the contents of db.php come here

if(isset($_POST['submit_button'])){ // if some values dey there or if somebody press the submit button 

    // get all values from form submitted using their names
    $first_name = $_POST['first_name'];// getting data from submitted form
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];// not compulsory for the names to add up


    // insert into database now
    $add_user = mysqli_query($connectionString,"INSERT INTO `users_tbl` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `timestamp`) VALUES (NULL, '{$first_name}', '{$last_name}', '{$username}', '{$email}', '{$password}', current_timestamp())") or die(mysqli_error($connectionString));//or die throws an error when there is an error in the connection string
//get something or put something into the database
//connection string ties appllication to the application to the database
//tick is advisable to use instead of the single quotation
//them for add to each other
    if(add_user) {
        echo "<script>alert('Sign Up Successful');window.location.href='login.php';</script>";//if sign up is succesful
    }else{
        echo "<script>alert('Sorry, Error Occured')"; //else this occurs
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title> Sign Up </title>
</head>
<body>
  

    <form method="post">
        <h2>Sign Up</h2>
        <input required type="text" name="first_name" placeholder="First Name">
        <input required type="text" name="last_name" placeholder="Last Name">
        <input required type="text" name="username" placeholder="UserName">
        <input required type="email" name="email" placeholder="Email">
        <input required type="password" name="password" placeholder="Password">
       <button class="box-3 btn btn-three" type="submit" name="submit_button">Sign Up</button><br> 

           <!--    <div class="box-3">
  <div  class="btn btn-three">
    <button type="submit" name="submit_button">Sign Up</button>
  </div>
</div>
-->

<h3 class="head">Already a User? <a href="login.php">Login</a></h3>
    </form>
</body>
</html>




