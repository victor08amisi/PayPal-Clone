<?php 
session_start();
if(!isset( $_SESSION["mailer"])){
    echo '<script type="text/javascript"> window.location="createAccount.php";</script>';
  }else{

    require_once "Connection.php"; //Import the connection 
$emailDelete = $_SESSION["mailer"];
    $deleteSQL =  "DELETE FROM Users WHERE user_email = '$emailDelete '";

    mysqli_query($Connection, $deleteSQL);
    unset($_SESSION["mailer"]);
      echo "<script type='text/javascript'>alert('You can no longer access your account');</script>";
    echo '<script type="text/javascript"> window.location="createAccount.php";</script>';

  }
  
  


?>