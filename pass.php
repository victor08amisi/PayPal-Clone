<?php 
//This file will contain all the code that will add a user in the database

require_once "Connection.php"; //Import the connection 


//Variables that will represent the inputs | I'm also making sure there's no sql inject
$loginEmail = mysqli_real_escape_string($Connection, htmlentities($_POST["signInEmail"]) );
$loginPass  = mysqli_real_escape_string($Connection, htmlentities($_POST["signInPassword"]) );

//The next lines of code will basically check if the info that the user 
//adds already exist. if not then we tell them they cant login
$loginQuerry = "SELECT * FROM Users WHERE user_email = '$loginEmail' AND user_pass = '$loginPass'";



//Quering to get data
$sqlSend = mysqli_query($Connection, $loginQuerry);


    $loginStateQuerry = mysqli_num_rows($sqlSend);


  //Creating a variables that will equal to all the number of rows that return from the database query 
    if($loginStateQuerry !== 0) {
     echo '<script type="text/javascript"> window.location="myaccount.php";</script>';
              exit();
    
    } else{
                           echo "<script type='text/javascript'>alert('That email or password is already taken  or may not exist. Please Enter your email/password correclty or create an account');</script>";
echo '<script type="text/javascript"> window.location="UserLogin.php";</script>';
          exit();
    }

/*
$_SESSION["one"] = htmlentities($_POST["personalFirstName"]);
$_SESSION["two"] = htmlentities($_POST["personalLastName"]);
$_SESSION["three"] = htmlentities($_POST["personalEmail"]);
$_SESSION["six"] = htmlentities($_POST["personalPasscode"]);*/

?>


  
  