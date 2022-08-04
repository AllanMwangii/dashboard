<?php
require_once('logics/dbconnection.php');
//updating user records
   if(isset($_POST['updatemessage']))

   {
    //fetch form data
  
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone_number"];
    $message=$_POST["usermessage"];

    //perform the sqli query

    $updatemessage =mysqli_query($conn, "UPDATE contact_us SET firstname=' $firstname',lastname='$lastname',email='$email',phonenumber='$phone', message ='$message'
    WHERE id='".$_GET['id']."'");
    if($updatemessage)
    {
        $message1=" Records updated successfully";
    }
    else
    {
        $message1="error occured";
    }
   }
   ?>