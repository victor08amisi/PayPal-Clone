<?php

//This file will contain all the code that will add a user in the database

require_once "Connection.html"; //Import the connection 
//Variables that will represent the inputs | I'm also making sure there's no sql inject
$name = mysqli_real_escape_string($Connection, htmlentities($_POST["personalFirstName"])   );
$lastname  = mysqli_real_escape_string($Connection, htmlentities($_POST["personalLastName"])   );
$email = mysqli_real_escape_string($Connection, htmlentities($_POST["personalEmail"])   );
$passcode =  mysqli_real_escape_string($Connection,  htmlentities($_POST["personalPasscode"]));
//The next lines of code will basically check if the info that the user 
//adds already exist. if not then we add the info in the database
$checkEmail = "SELECT * FROM Users WHERE user_email = '$email'";


//Quering to get data
$sqlEmail = mysqli_query($Connection, $checkEmail);
    $resultCheck = mysqli_num_rows($sqlEmail);
    //creating a variable that will equal an array of all value in the specific table
    $row = mysqli_fetch_assoc($sqlEmail);
    ///if theres a row then dont add user inputs inside database
if($resultCheck >
0){ if( $row['user_email'] == $email) { echo "
<script type="text/javascript">
  alert(
    "That email is already taken. Please Enter your email correclty or create an account"
  );
</script>
"; echo '
<script type="text/javascript">
  window.location = "createAccount.html";
</script>
'; exit(); } } //if theres no row based on the user input and the query then add
the registration info inside database if($resultCheck == 0){ if(
$row['user_email'] !== $email) { $addUserSQLQuery = "INSERT INTO Users
(user_firstname, user_lastname, user_email, user_pass) VALUES ('$name',
'$lastname', '$email', '$passcode' )"; mysqli_query($Connection,
$addUserSQLQuery); echo "
<script type="text/javascript">
  alert("Please check your email (junk/spam)!");
</script>
"; //this section will send an email confrimation to the specific email
require_once "text.html"; sendEmail(); echo '
<script type="text/javascript">
  window.location = "myaccount.html";
</script>
'; exit(); } } /* $_SESSION["one"] = htmlentities($_POST["personalFirstName"]);
$_SESSION["two"] = htmlentities($_POST["personalLastName"]); $_SESSION["three"]
= htmlentities($_POST["personalEmail"]); $_SESSION["six"] =
htmlentities($_POST["personalPasscode"]);*/ ?>
